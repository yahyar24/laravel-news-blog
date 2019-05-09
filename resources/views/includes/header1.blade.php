<header id="header">
    <nav class="navbar navbar-default navbar-static-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
          <div class="navbar-brand">
            <a href="{{ url('/') }}"><h1>{{$settings->site_name}}</h1></a>
          </div>
        </div>
        <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="{{route('contact')}}">الاتصال بنا</a></li>
            <li role="presentation"><a href="{{route('product')}}">المنتجات</a></li>
              <li role="presentation"><a href="{{route('gallery')}}">المعرض</a></li>
              <li role="presentation"><a href="{{route('blogpost')}}">الاخبار والعلوم</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
  </header>