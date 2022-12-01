<?php
namespace App\Http\Controllers;
use App\Helper\Cmf;
use Auth;
use App\Models\User;
use Illuminate\Support\Str;
use DB;
use Cookie;
use Redirect;
use App\Models\templates;
use App\Models\alltemplatecategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class TemplatesController extends Controller
{
    public function index()
    {
        return view('frontend.templates.index');
    }
    public function category($id)
    {
        $data = alltemplatecategories::where('url' , $id)->first();
        $templates = templates::where('category_id' , $data->id)->get();
        return view('frontend.templates.category')->with(array('data'=>$data,'templates'=>$templates));
    }


    public function templatedetails($category , $template)
    {
        $data = templates::where('url' , $template)->first();
        $category = alltemplatecategories::where('url' , $category)->first();
        return view('frontend.templates.templatedetails')->with(array('data'=>$data,'category'=>$category));
    }
}
