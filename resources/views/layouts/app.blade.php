<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>لوحة التحكم</title>

    <!-- Styles -->
    <link href="{{asset('csss/style.css')}}" rel="stylesheet">
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/tostr.min.css')}}">
    @yield('styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        لوحة التحكم
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                           <a href={{route('user.profile')}}>الملف الشخصي</a>
                           <a href={{route('user.create')}}>انشاء مستخدم</a>



                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            تسجيل الخروج
                                        </a>
                                                                        


                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                @if(Auth::check())
                    <div class="col-lg-4">
                        <di class="list-group">
                            <li class="list-group-item">
                            <img src="https://img.icons8.com/nolan/64/000000/speed.png">

                                <a href={{route('home')}}>لوحة التحكم</a>
                            </li>
                            <li class="list-group-item">
                            <img src="https://img.icons8.com/dusk/48/000000/medium-priority.png">

                                <a href={{route('categories')}}>التصنيفات </a>
                            </li>
                            <li class="list-group-item">
                            <img src="https://img.icons8.com/color/48/000000/mailbox-opened-flag-down.png">

                                <a href={{route('posts')}}>كل المنشورات</a>
                            </li>
                            <li class="list-group-item">
                            <img src="https://img.icons8.com/dusk/48/000000/medium-priority.png">

                                <a href={{route('tags')}}>التاج </a>
                            </li>
                            @if(Auth::user()->admin)
                                <li class="list-group-item">
                                <img src="https://img.icons8.com/color/48/000000/user-group-man-man.png">

                                    <a href={{route('users')}}>المستخدمين</a>
                                </li>
                                <li class="list-group-item">
                                <img src="https://img.icons8.com/color/48/000000/administrator-male.png">

                                    <a href={{route('user.create')}}>انشاء مستخدم</a>
                                </li>

                                <li class="list-group-item">
                                <img src="https://img.icons8.com/color/48/000000/user.png">

                                    <a href={{route('user.profile')}}>الملف الشخصي</a>
                                </li>
                                


                                @endif
                            <li class="list-group-item">
                            <img src="https://img.icons8.com/nolan/64/000000/add.png">

                                <a href={{route('tag.create')}}>انشاء تاج seo</a>
                            </li-->
                            <li class="list-group-item">
                            <img src="https://img.icons8.com/color/48/000000/delete-table.png">

                                <a href={{route('posts.trashed')}}>المنشورات المحذوفة</a>
                            </li>
                            <ul class="list-group">
                                <li class="list-group-item">
                                <img src="https://img.icons8.com/nolan/64/000000/add.png">


                                    <a href={{route('category.create')}}>انشاء تصنيف</a>
                                </li>

                            <li class="list-group-item">
                            <img src="https://img.icons8.com/nolan/64/000000/add.png">


                                <a href={{route('post.create')}}>انشاء منشور</a>
                            </li>
                                @if(Auth::user()->admin)
                                <li class="list-group-item">
                                <img src="https://img.icons8.com/color/48/000000/automatic.png">


                                    <a href={{route('settings')}}>الاعدادات</a>
                                </li>
                                <li class="list-group-item">
                                <img src="https://img.icons8.com/color/48/000000/new-post.png">

                                    <a href={{route('message')}}>الرسائل</a>
                                </li>
                                <li class="list-group-item">
                                <img src="https://img.icons8.com/color/48/000000/new-post.png">

                                    <a href={{route('book')}}>رسائل الحجز</a>
                                </li>
                                    @endif

                        </ul>
                      </div>
                    @endif

                <div class="col-lg-8">
                    @yield('content')
                </div>
            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{asset('js/tostr.min.js')}}"></script>
 <script>
    @if(Session::has('success'))
        toastr.success("{{Session::get('success')}}")

        @endif

        @if(Session::has('info'))
        toastr.info("{{Session::get('info')}}")

     @endif
 </script>
@yield('scripts')
</body>
</html>
