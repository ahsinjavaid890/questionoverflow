<?php
   
namespace App\Http\Controllers;
use App\Helper\Cmf;
use Illuminate\Http\Request;
use DB;   
use Auth;
use App\Models\User;
use App\Models\pets;
use App\Models\expertrequest;
use App\Models\access;
use App\Models\answerquestions;
use App\Models\categories;
use App\Models\Abusivewords;


use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('frontend.user-dashboard');
    }
    public function askquestion()
    {
        return view('frontend.user.askquestion');
    }
    public function dashboard()
    {
        $data = Auth::user();
        return view('frontend.user.userprofile')->with(array('data'=>$data));
    }
    public function redirecttodashboard()
    {
      return redirect()->route('dashboard');
    }
    public function homedashboard()
    {
        return redirect()->route('dashboard');
    }
    public function profile()
    {
        $data = DB::table('countries')->get();
        return view('frontend.user-profile')->with(array('countries'=>$data));
    }
    public function checkusername($id)
    {
        $check = user::where('username' , $id)->count();

        if($check > 0)
        {
            echo 1;
        }else{
            echo 0;
        }
    }
    public function updateuserprofile(Request $request)
    {
        $data = user::find(Auth::user()->id);
        if($request->profileimage)
        {
            $data->profileimage = Cmf::sendimagetodirectory($request->profileimage);
        }
        $data->name = $request->name;
        $data->about = $request->about;
        $data->country = $request->country;
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->website = $request->website;
        $data->instagram = $request->instagram;
        $data->save();
        return redirect()->back()->with('message', 'Your Profile Updated Successfully');
    }
    public function updateusersecurity(Request $request)
    {
        $this->validate($request, [
        'oldpassword' => 'required',
        'newpassword' => 'required',
        ]);
        if($request->newpassword == $request->password_confirmed){
        $hashedPassword = Auth::user()->password;
       if (\Hash::check($request->oldpassword , $hashedPassword )) {
         if (!\Hash::check($request->newpassword , $hashedPassword)) {
              $users =User::find(Auth::user()->id);
              $users->password = bcrypt($request->newpassword);
              User::where( 'id' , Auth::user()->id)->update( array( 'password' =>  $users->password));
              session()->flash('message','password updated successfully');
              return redirect()->back();
            }
            else{
                  session()->flash('errorsecurity','New password can not be the old password!');
                  return redirect()->back();
                }
           }
          else{
               session()->flash('errorsecurity','Old password Doesnt matched ');
               return redirect()->back();
             }
        }else{
            session()->flash('errorsecurity','Repeat password Doesnt matched With New Password');
            return redirect()->back();
        }
    }
    public function profilesettings()
    {
      $data = Auth::user();
      return view('frontend.user.profile-settings')->with(array('data'=>$data));
    }
    public function support()
    {
      return view('support.index');
    }
    // Admin
    public function adminHome()
    {
        $dailyvisitors = DB::table('dailyvisitors')->whereDate('created_at', Carbon::today());
        if(Auth::user()->twofactor == 'on')
        {
            $check = Auth::user()->authenticated;
            if($check == 0)
            {
                return view('auth.admintwofactor');
            }else{
                return view('admin.dashboard')->with(array('dailyvisitors'=>$dailyvisitors));
            }
        }else{
            return view('admin.dashboard')->with(array('dailyvisitors'=>$dailyvisitors));
        }
    }
    public function myprfile()
    {

        $username = Auth::user()->username;
        $data = DB::table('answerquestions')->where('delete_status' , 'Active')->where('question_auther' , $username)->paginate(5);

        return view('frontend.user.you-questions')->with(array('data'=>$data));
    }
    public function notifications()
    {
        $data = array('status'=>0);
        DB::table('usernotification')->where('users' , Auth::user()->id)->update($data);

        $data2 = DB::table('usernotification')->where('users' , Auth::user()->id)->orderby('created_at' , 'DESC')->get();
        return view('frontend.user.notifications')->with(array('notifications'=>$data2));
    }
    public function saved()
    {
        $userid = Auth::user()->id;
        $data = DB::table('savequestion')->where('users' , $userid)->get();
        return view('frontend.user.saved')->with(array('data'=>$data));
    }
    public function answered()
    {
        $username = Auth::user()->username;
        $data = DB::table('answerquestions')->orwhere('visible_status' , 'Under Review')->orwhere('visible_status' , 'Published')->where('delete_status' , 'Active')->where('question_auther' , $username)->get();
        return view('frontend.user.answered')->with(array('data'=>$data));
    }
    public function unanswered()
    {
        $username = Auth::user()->username;
        $data = DB::table('answerquestions')->orwhere('visible_status' , 'Under Review')->orwhere('visible_status' , 'Published')->where('delete_status' , 'Active')->where('question_auther' , $username)->get();
        return view('frontend.user.un-answered')->with(array('data'=>$data));
    }
    public function deleteusernotification($id)
    {
        DB::table('usernotification')->where('id' , $id)->delete();

        return redirect()->back();
    }
    public function editquestion($id)
    {
        $data = answerquestions::where('question_url' , $id)->get()->first();
        $categories = categories::where('status' , 'Active')->get();
        return view('frontend.user.editquestion')->with(array('data'=>$data,'categories'=>$categories));
    }

    public function deleteimagequestion($id)
    {
        $questionid = DB::table('questionimages')->where('id'  ,$id)->get()->first();

        DB::table('questionimages')->where('id'  ,$id)->delete();

        foreach(DB::table('questionimages')->where('questionid' , $questionid->questionid)->get() as $r)
        {
            echo '<span onclick="deleteimage('.$r->id.')" class="file-delete"><span>+</span></span><span class="name">'.$r->image_name.'</span>';
        }
        return redirect()->back();
    }

    public function updatequestionuser(Request $request)
    {

        $questionstatus = answerquestions::where('id' , $request->id)->get()->first()->visible_status;
        $message = "Your Question Updated Successfully";
        $alert = 'message';
        if(!empty($request->question_image))
        {
            foreach($request->question_image as $r)
            {
                Cmf::save_image_name('questionimages' , 'questionid' , $request->id , $r);
            }
            $data = array('visible_status'=>'Under Review');
            answerquestions::where('id' , $request->id)->update($data);
            $message = "Your Question is Under Review Untill We Approve Images That you Uploaded";
            $alert = 'warning';
        }
        $data = array('question_content'=>$request->question_content,'question_name'=>$request->question_name,'question_subject'=>$request->question_subject);
        DB::table('answerquestions')->where('id' , $request->id)->update($data);

        $getallabusivewords = Abusivewords::all();
        $ip_address =  Cmf::getUserIpAddr();
        $activity = '<a href="'.url('admin/editquestion').'/'.$request->id.'">'.auth()->user()->name.' Updated Question</a>';
        Cmf::save_useractivities($ip_address , $activity,auth()->user()->id);
        foreach($getallabusivewords as $r)
        {
           $count =  answerquestions::where('id', $request->id)->Where('question_name', 'like', '%' . $r->word . '%')->count();
           if($count > 0)
           {
                $data = array('visible_status'=>'Under Review');
                answerquestions::where('id' , $request->id)->update($data);
                $notification = auth()->user()->name.' Used Abusive Word in Question';
                $url = url('admin/editquestion').'/'.$request->id;
                Cmf::save_admin_notification($notification ,$url,'uil-home-alt');

                Cmf::save_user_notification('Your Question is Under Review because We found something suspecious in your Question Tittle' , 'test',auth()->user()->id);
                Cmf::addabusivealert($request->id , $request->id);
                $message = "We found something suspecious in your Question Tittle please wait untill we approve your Question";
                $alert = 'warning';
           }
           $countcontent =  answerquestions::where('id', $request->id)->Where('question_content', 'like', '%' . $r->word . '%')->count();
           if($countcontent > 0)
           {
                $data = array('visible_status'=>'Under Review');
                answerquestions::where('id' , $request->id)->update($data);
                $notification = auth()->user()->name.' Used Abusive Word in Question';
                $url = url('admin/editquestion').'/'.$request->id;
                Cmf::save_admin_notification($notification ,$url,'uil-home-alt');

                Cmf::save_user_notification('Your Question is Under Review because We found something suspecious in your Question Content' , 'test',auth()->user()->id);
                Cmf::addabusivealert($request->id , $request->id);
                $message = "We found something suspecious in your Question Content please wait untill we approve your Question";
                $alert = 'warning';
           }
        }
        if($questionstatus != 'Published')
        {
            $notification = auth()->user()->name.' Update his Question';
            $url = url('admin/editquestion').'/'.$request->id;
            Cmf::save_admin_notification($notification ,$url,'uil-home-alt');
            return redirect()->back()->with($alert, $message);
        }else{
            return redirect()->back()->with($alert, $message);
        }        
    }

    public function submitcomentreply(Request $request)
    {
        $id = Auth::user()->id;
        DB::statement("INSERT INTO `comentreply` (`comentid`, `userid`, `reply`)VALUES ('$request->id', '$id', '$request->reply')");
        return redirect()->back()->with('message', 'Reply Added Successfully.');
    }
    
    public function profilepicturechange(Request $request)
    {
        $data = array('profileimage'=>$request->imageurl);
        user::where('id' , $request->userid)->update($data);
        return redirect()->back()->with('message', 'Profile Awatar Updated Successfully.');
    }

    
}