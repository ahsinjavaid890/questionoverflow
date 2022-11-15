<?php
namespace App\Http\Controllers;
use App\Helper\Cmf;
use Session;
use Auth;
use App\Models\User;
use App\Mail\Offers;
use App\Models\blogs;
use App\Models\expertrequest;
use App\Models\blogcategories;
use App\Models\modules;
use App\Models\onlyanswers;
use App\Models\testimonials;
use App\Models\Abusivewords;
use App\Models\dynamicpages;
use App\Models\newsletters;
use App\Models\advertisementrequests;
use App\Models\dailyvisitors;
use App\Models\categories;
use App\Models\answerquestions;
use App\Models\questioncoments;
use App\Models\urlredirection;

use App\Exports\QuestionExports;
use App\Models\userfile;
use Illuminate\Support\Str;
use DB;
use Cookie;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class SiteController extends Controller
{
    public function currenturl()
    {
       return $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    }
    public function getlastword($get)
    {
        preg_match("/[^\/]+$/", $get, $matches);
        return $matches[0]; // test
    }
   public function index()
   {
        if(Auth::check()){
            $isadmin = Auth::user()->is_admin;
            if($isadmin == 1)
            {
                return redirect()->route('admin.dashboard');
            }
        }
        $questions = answerquestions::where('delete_status' , 'Active')->where('visible_status'  ,'Published')->limit(20)->orderby('id' , 'desc')->get();
        $categories = categories::where('status' , 'Active')->limit(15)->get();
        return view('frontend.homepage.index')->with(array('categories'=>$categories,'questions'=>$questions));
   }
   public function alltutorials()
   {
       return view('frontend.tutorials.all');
   }
   public function allsubjects()
   {
       $data = categories::where('status' , 'Active')->paginate(20);
       return view('frontend.subjects.all')->with(array('data'=>$data));
   }
   public function singlequestion($id)
   {
      setcookie('redirecturl', $this->currenturl(), time() + (86400 * 30), "/");
      $data = answerquestions::where('question_url' , $id)->get()->first();

      if(!empty($data))
      {
         $answers = onlyanswers::where('delete_status' , 'Active')->where('visible_status' , 'Published')->where('questionid' , $data->id)->orderby('id' , 'desc')->paginate(Cmf::site_settings('frontenddatashowlimit'));
          $relatedquestion = answerquestions::where('question_subject' , $data->question_subject)->inRandomOrder()->limit(8)->get();

          if($data->delete_status != 'Delete')
          {
            if($data->visible_status == 'Published')
              {
                $questioncoments = questioncoments::where('question_id' , $data->id)->orderby('id' , 'desc')->get();
                return view('frontend.question.detail')->with(array('data'=>$data,'answers'=>$answers,'relatedquestion'=>$relatedquestion,'questioncoments'=>$questioncoments));
              }else{
                return response()->view('errors.404', [], 404);
              }
          }else{
            return response()->view('errors.404', [], 404);
          }
      }else{
        return response()->view('errors.404', [], 404);
      }
   }
   public function createquestioncoment(Request $request)
   {
       $newcoment = new questioncoments();
       $newcoment->name = $request->name;
       $newcoment->email = $request->email;
       $newcoment->comnet = $request->comnet;
       $newcoment->question_id = $request->id;
       $newcoment->save();
       return redirect()->back()->with('message', 'Coment Added Successfully');
   }
   
   public function checkredirection()
   {
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $data = urlredirection::where('from' , $actual_link)->get()->first();
        if(!empty($data))
        {
            return $data->to;
        }else{
            return 0;
        }

   }


   public function showbytags($id)
    {

       if($this->checkredirection() != 0)
       {
            return Redirect::to($this->checkredirection());
       }
       $url = "$_SERVER[REQUEST_URI]";

       $url2 =  ltrim($url, '/');

       $url3 =  ltrim($url2 , 'tag');

       $id =  ltrim($url3 , '/');

       $termid = DB::table('wphj_terms')->Where('slug',  $id)->get()->first();

       if(empty($termid))
       {


        return response()->view('errors.404', [], 404);
       }else{
        $getrelationship = DB::table('wphj_term_relationships')->where('term_taxonomy_id' , $termid->term_id)->get();
       $blogcategories = blogcategories::where('delete_status' , 'Active')->limit(10)->where('visible_status'  ,'Published')->get();
       return view('frontend.tags-blog')->with(array('getrelationship'=>$getrelationship,'blogcategories'=>$blogcategories,'termid'=>$termid));
       }


    }
   public function checkmoreurl($from , $limit)
   {


        echo DB::table('blogs')->whereBetween('sitemapid', [$from, $limit+$from])->count();


   }
   public function genratesitemap($modulename, $limit ,$urlname)
   {

        $to  = DB::table('sitemaptable')->orderby('id' , 'desc')->get()->first()->to;
        $data = DB::table('siteurls')->where('modulename' , $modulename)->orderby('id' , 'asc')->where('id', '>=',$to)->limit($limit)->get();
        $from = $data[0]->id;
        $to = $data[$limit-1]->id;
        $no_of_url = $to-$from;
        $count = DB::table('sitemaptable')->where('modulename' , $modulename)->count();
        $count = $count+1;
        $url = 'sitemap_'.$urlname.'_'.$count.'.xml';
        $date = date('Y-m-d');
        DB::statement("INSERT INTO `sitemaptable` (`url`, `no_of_url`, `from`, `to`,`modulename`, `created_at`, `updated_at`)VALUES ('$url', '$no_of_url', '$from' , '$to','$modulename','$date','$date')");
        Cmf::savesiteurl($url , 'singlesitemap');
   }

   public function loadmorepage($id)
   {
        $data = blogcategories::where('delete_status' , 'Active')->where('visible_status'  ,'Published')->whereBetween('loadmoreid', [$id+1, $id+11])->get();

        foreach ($data as $r) {
            echo '<li>
                <a href='.url('').'/'.$r->slug.'>
                    <span>'.$r->name.'</span><span>'.DB::table('wphj_term_relationships')->where('term_taxonomy_id' , $r->id)->count().'</span>
                </a>
            </li>';
        }
   }
   
   public function searchnavbar($id)
   {
    $questions = answerquestions::where('delete_status' , 'Active')->where('visible_status' , 'Published')->Where('question_name', 'like', '%' . $id . '%')->limit(5)->get();
    $categories = categories::where('status' , 'Active')->Where('name', 'like', '%' . $id . '%')->limit(5)->get();

    $blogs = DB::table('blogs')->where('delete_status' , 'Active')->where('visible_status' , 'Published')->Where('name', 'like', '%' . $id . '%')->limit(5)->get();
      echo '<ul>';
          foreach($questions as $r){
            echo '<a style="padding:0px !important;width:100%;" href="'.url('question').'/'.$r->question_url.'"><li style="font-size:13px;font-weight:400">'. Str::limit($r->question_name, 60).'</li></a>';
          }
          foreach($categories as $c){
            echo '<a style="padding:0px !important;width:100%;" href="'.url('').'/'.$c->url.'"><li style="font-size:13px;font-weight:400">'.$c->name.'</li></a>';
          }
          foreach($blogs as $b){
            echo '<a style="padding:0px !important;width:100%;" href="'.url('').'/'.$b->url.'"><li style="font-size:13px;font-weight:400">'.$b->name.'</li></a>';
          }
      echo '</ul>';
   }
   public function addanswershow($id)
   {
        setcookie('redirecturl', $this->currenturl(), time() + (86400 * 30), "/");
        if(Auth::check())
        {
            $data = answerquestions::where('question_url' , $id)->get()->first();
            return view('frontend.add-answer')->with(array('data'=>$data));
        }else{
            return redirect()->route('signin');
        }
   }
   public function searchnavbarpost($id)
   {

        $search = $id;

        $data = answerquestions::where('delete_status' , 'Active')->where('visible_status' , 'Published')->Where('question_name', 'like', '%' . $search . '%')->paginate(Cmf::site_settings('frontenddatashowlimit'));
        $categories = categories::where('status' , 'Active')->Where('name', 'like', '%' . $id . '%')->get();
        $blogs = blogs::where('delete_status' , 'Active')->where('visible_status' , 'Published')->Where('name', 'like', '%' . $id . '%')->get();
        return view('frontend.search')->with(array('search'=>$search,'data'=>$data,'categories'=>$categories,'blogs'=>$blogs));
   }
   public function publicprofile($id)
   {
        $data = answerquestions::where('question_auther' , $id)->where('delete_status' , 'Active')->where('visible_status' , 'Published')->paginate(Cmf::site_settings('frontenddatashowlimit'));
        $user = user::where('username' , $id)->get()->first();

        if(!empty($user))
        {
            return view('frontend.user.publicprofile')->with(array('data'=>$data,'user'=>$user));
        }else{
            return redirect()->back();
        }
   }
   public function adminlogin()
   {
        if(Auth::check()){
            $isadmin = Auth::user()->is_admin;
            if($isadmin == 1)
            {
                return redirect()->route('admin.dashboard');
            }
        }else{
            return view('auth.adminlogin');
        }
   }
   public function checkslug($id)
   {
      echo Cmf::checkurl($id);
   }

   public function contact()
   {
    return view('frontend.contact');
   }
   public function pricing()
   {
    return view('frontend.pricing');
   }
   public function blog(Request $request)
    {
        $data = blogs::where('deletestatus' ,1)->get();
        return view('frontend.blog')->with(array('data'=>$data));
    }
    public function singleblog($id)
    {
        $data = blogs::where('url' ,$id)->get()->first();
        $blogs = blogs::where('deletestatus' ,1)->limit(5)->get();
        return view('frontend.blog-detail')->with(array('data'=>$data,'blogs'=>$blogs));
    }
   public function slugify($text)
   {
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        $text = trim($text, '-');
        $text = preg_replace('~-+~', '-', $text);
        $text = strtolower($text);
        if (empty($text)) {
          return 'n-a';
        }
        return $text;
   }
   public function blogsearch(Request $request)
   {
        $search = $request->search;
        $data = blogs::where('delete_status' , 'Active')->where('visible_status' , 'Published')->Where('name', 'like', '%' . $search . '%')->get();


        $blogcategories = blogcategories::where('delete_status' , 'Active')->limit(10)->where('visible_status'  ,'Published')->get();
        return view('frontend.blogsearch')->with(array('data'=>$data,'blogcategories'=>$blogcategories,'search'=>$search));

   }
   public function testcheck($id , $two)
   {
      setcookie('redirecturl', $this->currenturl(), time() + (86400 * 30), "/");
      $data = answerquestions::where('question_url' , $id.'/'.$two)->get()->first();
      $answers = onlyanswers::where('delete_status' , 'Active')->where('visible_status' , 'Published')->where('questionid' , $data->id)->orderby('id' , 'desc')->paginate(Cmf::site_settings('frontenddatashowlimit'));

      $relatedquestion = answerquestions::where('question_subject' , $data->question_subject)->inRandomOrder()->limit(5)->get();

      if($data->visible_status == 'Published')
      {
        return view('frontend.question-detail')->with(array('data'=>$data,'answers'=>$answers,'relatedquestion'=>$relatedquestion));
      }else{
       return response()->view('errors.404', [], 404);
      }
   }

   public function removelink($text)
   {
        $regex = "@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@";
        return preg_replace($regex, ' ', $text);
   }


   public function createquestion(Request $request)
   {
        $message = "Your Question Added Successfully";
        $alert = 'message';
        $previousid =  time();
        $randid = $previousid+1;
        $name = $this->removelink($request->question_name);
        $url = $this->slugify($name);
        $shortenurl = Cmf::shorten_url($url);
        if(DB::Table('answerquestions')->where('question_url' , $shortenurl)->count() > 0)
        {
            $url = $shortenurl.'-'.$randid;
        }
        else
        {
            $url = $shortenurl;
        }
        $question = new answerquestions;
        $question->id = $randid;
        $question->question_name = $this->removelink($request->question_name);
        $question->question_url = $url;
        $question->question_content = $this->removelink($request->question_content);
        $question->question_status = 'Un Answered';
        $question->question_subject = $request->question_subject;
        $question->question_auther = auth()->user()->username;
        $question->question_like = '0';
        $question->question_ratting = '0';
        $question->delete_status = 'Active';
        $question->visible_status = 'Published';
        $question->metta_tittle = $this->removelink($request->question_name);
        $question->metta_description = $this->removelink($request->question_name);
        $question->save();
        if(!empty($request->question_image))
        {
            foreach($request->question_image as $r)
            {
                Cmf::save_image_name('questionimages' , 'questionid' , $randid , $r);
            }
            $data = array('visible_status'=>'Under Review');
            answerquestions::where('id' , $randid)->update($data);
            $message = "Your Question is Under Review Untill We Approve Images That you Uploaded";
            $alert = 'warning';
        }
        $getallabusivewords = Abusivewords::all();
        $ip_address =  Cmf::getUserIpAddr();
        $activity = '<a href="'.url('admin/viewquestion').'/'.$randid.'">'.auth()->user()->name.' Added New Question</a>';
        Cmf::save_useractivities($ip_address , $activity,auth()->user()->id);
        foreach($getallabusivewords as $r)
        {
           $count =  answerquestions::where('id', $randid)->Where('question_name', 'like', '%' . $r->word . '%')->count();
           if($count > 0)
           {
                $data = array('visible_status'=>'Under Review');
                answerquestions::where('id' , $randid)->update($data);
                $notification = auth()->user()->name.' Used Abusive Word in Question';
                $url = url('admin/viewquestion').'/'.$randid;
                Cmf::save_admin_notification($notification ,$url,'uil-home-alt');

                Cmf::save_user_notification('Your Question is Under Review because We found something suspecious in your Question Tittle' , 'test',auth()->user()->id);
                Cmf::addabusivealert($randid , ' ');
                $message = "We found something suspecious in your Question Tittle please wait untill we approve your Question";
                $alert = 'warning';
           }
           $countcontent =  answerquestions::where('id', $randid)->Where('question_content', 'like', '%' . $r->word . '%')->count();
           if($countcontent > 0)
           {
                $data = array('visible_status'=>'Under Review');
                answerquestions::where('id' , $randid)->update($data);
                $notification = auth()->user()->name.' Used Abusive Word in Question';
                $url = url('admin/viewquestion').'/'.$randid;
                Cmf::save_admin_notification($notification ,$url,'uil-home-alt');

                Cmf::save_user_notification('Your Question is Under Review because We found something suspecious in your Question Content' , 'test',auth()->user()->id);
                Cmf::addabusivealert($randid , ' ');
                $message = "We found something suspecious in your Question Content please wait untill we approve your Question";
                $alert = 'warning';
           }
        }
        if($alert == 'warning')
        {
            return redirect()->back()->with($alert, $message);
        }else{
            return Redirect::to(url('question').'/'.$question->question_url)->with($alert, $message);
        }

   }

    public function submitcontactus($name , $email , $message)
    {
        $date = date('Y-m-d H:s');
      DB::statement("INSERT INTO `contactuses` (`name`, `email`, `message`, `status`, `created_at`)VALUES ('$name', '$email', '$message', '1' , '$date')");

      $url = url('admin/messages');
      Cmf::save_admin_notification($name.' Send  Contact Request ' , $url , 'mdi-phone');

      echo "string";
    }
   public function expertrequest(Request $request)
   {
        $name =  $request->name;
        $email =  $request->email;
        $phonenumber =  $request->phone;
        $qualification =  $request->qualification;
        $specialisation =  $request->specialist;
        $country =  $request->country;
        $file = $request->file;
        if(!empty($file)){
           $filereturn =  Cmf::sendimagetodirectory($file);
        }
        $request = new expertrequest;
        $request->name = $name;
        $request->email = $email;
        $request->country = $country;
        $request->phonenumber = $phonenumber;
        $request->newstatus = 'new';
        $request->qualification = $qualification;
        $request->specialisation = $specialisation;
        if(!empty($filereturn))
        {
          $request->document = $filereturn;
        }
        $request->status = 'NotActive';
        $request->save();
        $notification = '1 New Expert Request';
        $url = url('admin/expert-requests');
        Cmf::save_admin_notification($notification ,$url,'uil-user-check');
        return redirect()->back()->with('message', 'Your Request Sended Successfully.');
   }
   public function advertisementrequest(Request $request)
   {
        $advertisement = new advertisementrequests;
        $advertisement->name = $request->name;
        $advertisement->email = $request->email;
        $advertisement->phonenumber = $request->phonenumber;
        $advertisement->company = $request->company;
        $advertisement->message = $request->message;
        $advertisement->visible_status = 'Published';
        $advertisement->newstatus = 'new';
        $advertisement->save();
        return redirect()->back()->with('message', 'Your Request Submited Successfully We Will Contact you Soon');
   }
   public function saveblogcoment(Request $request)
   {
        $coment = $this->removelink($request->coment);

        $comentid = rand('123654' , '456321');
        if(Auth::check()){
            $userid = Auth::user()->id;
            DB::statement("INSERT INTO `blogcoments` (`id`,`users`, `blogs`, `coment`, `newstatus`, `visible_status`, `delete_status`)VALUES ('$comentid','$userid', '$request->blogid', '$coment', 'new', 'Not Published', 'Active')");
            $notification = '1 New Blog Coment';
            $url = url('admin/blogs-coments');
            Cmf::save_admin_notification($notification ,$url,'uil-home-alt');
        }else{
        DB::statement("INSERT INTO `blogcoments` (`id`,`name`,`email`, `blogs`, `coment`, `newstatus`, `visible_status`, `delete_status`)VALUES ('$comentid','$request->name','$request->email', '$request->blogid', '$coment', 'new', 'Not Published', 'Active')");
            $notification = '1 New Blog Coment';
            $url = url('admin/blogs-coments');
            Cmf::save_admin_notification($notification ,$url,'uil-home-alt');
        }
        $message = "Your Comment Added Successfully We Will Approve Soon";
        $alert = 'message';
        if(Cmf::check_abusive_words($request->coment) == 1)
        {
            $data = array('visible_status'=>'Not Published');
            DB::table('blogcoments')->where('id' , $comentid)->update($data);
            if(Auth::check()){
                $userid = Auth::user()->id;
                Cmf::save_user_notification('We found something suspecious in your Blog Coment please wait untill we approve your Coment' , 'test',$userid);
            }
            $message = "We found something suspecious in your content please wait untill we approve your Answer";
            $alert = 'warning';
        }
        return redirect()->back()->with($alert, $message);
   }


   public function updateblogcomentreply(Request $request)
   {
        $data = array('reply'=>$request->reply);
        DB::table('comentreply')->where('id' , $request->id)->update($data);
        return redirect()->back()->with('message', 'Updated Successfully.');
   }
   public function questionratting($id , $questionid)
   {
        $get = answerquestions::find($questionid);
        $alreadyratting = $get->question_ratting;
        $userid = Auth::user()->id;
        DB::statement("INSERT INTO `question_rattings` (`users`,`questionid`,`rattings`)VALUES ('$userid','$questionid', '$id')");
        $rattingtable  = DB::table('question_rattings')->where('questionid' , $questionid);
        $all = $rattingtable->count();
        $sum = $rattingtable->sum('rattings');
        $getratting = $sum/$all;
        $postratting = $alreadyratting+$getratting;
        $postratting = $postratting/2;
        $get->question_ratting = number_format($postratting, 1);
        $get->save();

        for ($i=0; $i < $get->question_ratting; $i++) {
            echo "<i class='fa fa-star staractive'></i>";
        }
   }


   public function answerratting($id , $answerid)
   {

    $userid = Auth::user()->id;

    if(DB::table('answer_rattings')->where('users' , $userid)->where('answerid' , $answerid)->count() == 0)
    {
        $get = onlyanswers::find($answerid);
        $alreadyratting = $get->rattings;
        $userid = Auth::user()->id;
        DB::statement("INSERT INTO `answer_rattings` (`users`,`answerid`,`rattings`)VALUES ('$userid','$answerid', '$id')");
        $rattingtable  = DB::table('answer_rattings')->where('answerid' , $answerid);
        $all = $rattingtable->count();
        $sum = $rattingtable->sum('rattings');
        if($all == 1)
        {
            $getratting = $sum;
            $postratting = number_format($getratting, 1);
        }else{
            $getratting = $sum/$all;
            $postratting = $alreadyratting+$getratting;
            $postratting = $postratting/2;
        }
        $get->rattings = number_format($postratting, 1);
        $get->save();
        $rattingcount =  number_format($postratting, 1);
        echo $rattingcount;
    }else{
        $get = onlyanswers::find($answerid);
        $alreadyratting = $get->rattings;
        $data = array('rattings'=>$id);
        DB::table('answer_rattings')->where('users' , $userid)->where('answerid' , $answerid)->update($data);
        $rattingtable  = DB::table('answer_rattings')->where('answerid' , $answerid);
        $all = $rattingtable->count();
        $sum = $rattingtable->sum('rattings');
        if($all == 1)
        {
            $getratting = $sum;
            $postratting = number_format($getratting, 1);
        }else{
            $getratting = $sum/$all;
            $postratting = $alreadyratting+$getratting;
            $postratting = $postratting/2;
        }
        $get->rattings = number_format($postratting, 1);
        $get->save();
        $rattingcount =  number_format($postratting, 1);
        echo $rattingcount;
    }
   }
    public function addemailfornewsletter($id)
    {
       $email =  $id;
       $check = newsletters::where('email' , $email)->count();
       if($check == 0)
       {
          $order = new newsletters;
          $order->email = $email;
          $order->save();

          $url = url('admin/newsletters');
          Cmf::save_admin_notification('1 New Email For News Letter' , $url , 'mdi-email-newsletter');

          echo 'success';
       }else{
        echo "error";
       }
    }
    public function getnotification($id)
    {
      echo DB::table('usernotification')->where('users',Auth::user()->id)->where('status' , 1)->count();
    }
    public function savequestion($id)
    {
        if(Auth::check()){
            $userid = Auth::user()->id;
            DB::statement("INSERT INTO `savequestion` (`questionid`,`users`)VALUES ('$id','$userid')");
            echo 'success';
        }else{
            echo 'error';
        }
    }
    public function unsavequestion($id)
    {
        if(Auth::check()){
            $userid = Auth::user()->id;
            DB::table('savequestion')->where('questionid' , $id)->where('users' , $userid)->delete();
            echo 'success';
        }else{
            echo 'error';
        }
    }
    public function likethisquestion($id)
    {
        if(Auth::check()){
            $userid = Auth::user()->id;
            DB::statement("INSERT INTO `question_likes` (`users`,`questionid`)VALUES ('$userid','$id')");
            $get = answerquestions::find($id);
            $getlike = $get->question_like;
            $get->question_like = $getlike+1;
            $get->save();
            $get = answerquestions::find($id);
            $getlike = $get->question_like;
            echo $getlike;
        }else{
            echo 'error';
        }
    }
    public function unlikethisquestion($id)
    {
        if(Auth::check()){
            $userid = Auth::user()->id;
            DB::table('question_likes')->where('questionid' , $id)->where('users' , $userid)->delete();
            $get = answerquestions::find($id);
            $getlike = $get->question_like;
            $get->question_like = $getlike-1;
            $get->save();
            $get = answerquestions::find($id);
            $getlike = $get->question_like;
            echo $getlike;
        }else{
            echo 'error';
        }
    }

    public function likeanswer($id)
    {
        $userid = Auth::user()->username;
        DB::statement("INSERT INTO `answer_likes` (`users`,`answerid`)VALUES ('$userid','$id')");
        $get = onlyanswers::find($id);
        $getlike = $get->likes;
        $get->likes = $getlike+1;
        $get->save();
        $get = onlyanswers::find($id);
        $getlike = $get->likes;
        echo $getlike;
    }
    public function unlikeanswer($id)
    {
        $userid = Auth::user()->username;
        DB::table('answer_likes')->where('answerid' , $id)->where('users' , $userid)->delete();
        $get = onlyanswers::find($id);
        $getlike = $get->likes;
        $get->likes = $getlike-1;
        $get->save();
        $get = onlyanswers::find($id);
        $getlike = $get->likes;
        echo $getlike;
    }
    public function publicprofileanswers($id , $answered)
    {
        $data = onlyanswers::where('delete_status' , 'Active')->where('visible_status' , 'Published')->where('users' , $answered)->paginate(Cmf::site_settings('frontenddatashowlimit'));
        // print_r($data);exit;
        $user = user::where('username' , $answered)->get()->first();
        if(!empty($user))
        {
            return view('frontend.user.answerpublicprofile')->with(array('data'=>$data,'user'=>$user));
        }else{
            return redirect()->back();
        }
    }
    public function exportanswerquestion()
    {
        set_time_limit(20000000000);
        return Excel::download(new QuestionExports, 'Allquestions.xlsx');
    }
}
