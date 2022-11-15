<?php
namespace App\Http\Controllers;
use App\Helper\Cmf;
use Auth;
use App\Models\User;
use Illuminate\Support\Str;
use DB;
use Cookie;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class TemplatesController extends Controller
{
    public function index()
    {
        return view('frontend.templates.index');
    }
}
