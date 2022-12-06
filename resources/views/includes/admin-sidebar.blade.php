<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu left-side-menu-detached">

    <div class="leftbar-user">
        <a href="javascript: void(0);">
            <div class="account-user-avatar">
                <img src="{{ url('public/images') }}/{{ Auth::user()->profileimage }}" alt="user-image" height="42" class="rounded-circle">
            </div>
            <span class="leftbar-user-name">{{ Auth::user()->name }}</span>
        </a>
    </div>

    <!--- Sidemenu -->
    <ul class="metismenu side-nav">
        <li class="side-nav-item">
            <a href="{{url('admin/dashboard')}}" class="side-nav-link">Dashboard</a>
        </li>
        <li class="side-nav-item">
            <a href="javasript::void(0)" class="side-nav-link">Templates
                <i class=""></i>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">
                <li><a href="{{url('admin/templates/allcategories')}}">All Categories</a></li>            
                 <li><a href="{{url('admin/templates/addcategory')}}">Add Category</a></li>
                 <li><a href="{{url('admin/templates/addtemplates')}}">Add Templates</a></li>
                 <li><a href="{{url('admin/templates/alltemplates')}}">All Templates</a></li>
            </ul>
        </li>
        <li class="side-nav-item">
            <a href="javasript::void(0)" class="side-nav-link">Tutorials
                <i class=""></i>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">
                <li><a href="{{url('admin/tutorials/allcategories')}}">All Categories</a></li>            
                 <li><a href="{{url('admin/tutorials/addcategory')}}">Add Category</a></li>
                 <li><a href="{{url('admin/tutorials/addnewtutorial')}}">Add Tutorials</a></li>
                 <li><a href="{{url('admin/tutorials/alltutorials')}}">All Tutorials</a></li>
            </ul>
        </li>
        <li class="side-nav-item">
            <a href="javasript::void(0)" class="side-nav-link">Categories
                <i class=""></i>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">
                <li><a href="{{url('admin/add-category')}}">Add Category</a></li>
                <li><a href="{{url('admin/all-categories')}}">All Categories</a></li>
                
            </ul>
        </li>
        <li class="side-nav-item">
            <a href="javasript::void(0)" class="side-nav-link">Blogs
                <i class=""></i>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">     
                <li><a href="{{url('admin/add-blog')}}">Add Blog</a></li>
                <li><a href="{{url('admin/blogs')}}">All Blogs</a></li>
                <li><a href="{{url('admin/blog-categories')}}">Blog Category</a></li>
                <li><a href="{{url('admin/blog/addnewcategory')}}">Add Blog Category</a></li>
            </ul>
        </li>
        <li class="side-nav-item">
            <a href="javasript::void(0)" class="side-nav-link">Dynamic Pages
                <i class=""></i>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">     
                <li><a href="{{url('admin/add-page')}}">Add Page</a></li>
                <li><a href="{{url('admin/all-pages')}}">All Pages</a></li>
            </ul>
        </li>
        <li class="side-nav-item">
            <a href="javasript::void(0)" class="side-nav-link">Questions
                <i class=""></i>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">     
                <li><a href="{{url('admin/questions')}}">All Questions</a></li>
                <li><a href="{{url('admin/add-question')}}">Add Question</a></li>
                <li><a href="{{url('admin/answers')}}">All Answers</a></li>
            </ul>
        </li>
        <li class="side-nav-item">
            <a href="javasript::void(0)" class="side-nav-link">Settings
                <i class=""></i>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">     
                <li><a href="{{url('admin/settings')}}">Website Settings</a></li>
                <li><a href="{{url('admin/email-settings')}}">Email Settings</a></li>
                <li><a href="{{url('admin/payement-gatewaysettings')}}">Payement Settings</a></li>
                <li><a href="{{url('admin/theme-settings')}}">Theme Settings</a></li>
            </ul>
        </li>
        <li class="side-nav-item">
            <a href="{{url('admin/profile')}}" class="side-nav-link">My Profile</a>
        </li>
        <li class="side-nav-item">
            <a href="{{ route('logout') }}" class="side-nav-link">Logout</a>
        </li>
    </ul>

</div>
<!-- Left Sidebar End -->
