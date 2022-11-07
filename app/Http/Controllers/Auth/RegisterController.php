<?php

namespace App\Http\Controllers\Auth;
use App\Helper\Cmf;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\access;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use File;
Use DB;
class RegisterController extends Controller
{
    use RegistersUsers;
    protected $redirectTo = '/dashboard';
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function userregister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8',
            'need_to_aggree_our_privacy_policy' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()->all()]);
        }
        $newuser = new User;
        $newuser->name = $request->name;
        $newuser->username = Cmf::shorten_url($request->name);
        $newuser->email = $request->email;
        $newuser->active = 1;
        $newuser->password = Hash::make($request->password);
        $newuser->save();
        auth()->attempt(array('email' => $request->email, 'password' => $request->password, 'active' => 1));
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }
    protected function create(array $data)
    {
        $email = $data['email'];
        if(DB::table('accesses')->where('email' , $email)->get()->count() == 0){
            $sendingpath = 'userdata/'.$email;
            $path = public_path($sendingpath);
            if(!File::isDirectory($path)){
                File::makeDirectory($path, 0777, true, true);
            }
            $url = url('admin/users');
            Cmf::save_admin_notification($data['name'].' is a New Registerd User ' , $url , 'mdi-account-circle mr-1');
        }
        if(isset($data['accessid']))
        {
            $accessid =  $data['accessid'];
            $email =  $data['email'];
            $password =  $data['password'];
            $name =  $data['name'];
            $data = array('status'=>'Accepted');
            DB::table('accesses')->where('id', $accessid)->update($data);
            return User::create([
                'name' => $name,
                'profileimage' => '2122741339.jpg',
                'is_admin' => '0',
                'active' => '1',
                'accessid' => $accessid,
                'email' => $email,
                'password' => Hash::make($password),
            ]);
        }
        else
        {
            return User::create([
                'name' => $data['name'],
                'profileimage' => '2122741339.jpg',
                'is_admin' => '0',
                'active' => '1',
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
        }
        
    }
}
