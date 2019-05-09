

<nav class="navbar my-nav navbar-expand-lg navbar-light ">

			<a class="navbar-brand mr-5 " href="{{ url('/') }}">{{$settings->site_name}}</a>

			<div   class="navbar-brand mb-7 ">
    <div class="container">
        <div class="row">
            <div   class="form_search-wrap">
                <form method="GET" action="/results">
                    <input class="overlay_search-input" name="query" placeholder=" عنوان البحث واضغط انتر" type="text">
                    <a href="#" class="overlay_search-close">
                        <span></span>
                        <span></span>
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
	  
		<div class="collapse navbar-collapse ml-5" id="navbarSupportedContent">
		  <ul class="navbar-nav mr-auto">

			




					<!--li class="nav-item">
              <a class="nav-link" href="sign in.html" data-value="" > تسجيل الدخول</a>
            </li-->


            <li class="nav-item">
                <a class="nav-link" href="{{route('blogpost')}}" data-value="fooot" > الاخبار</a>
              </li>

					<li class="nav-item">
							<a class="nav-link" href="{{route('contact')}}" data-value="fooot" > تواصل معنا</a>
						</li>			

			<li class="nav-item">
			 <a class="nav-link" href="{{route('product')}}" data-value="service">الخدمات</a>
			</li>

		  <li class="nav-item">
			<a class="nav-link" href="{{route('gallery')}}" data-value="testmonial">المعرض</a>
		 </li>

		 

			<li class="nav-item">
					<a class="nav-link" href="{{ url('/') }}" data-value="">  الرئيسيه </a>
				 </li>
			</ul>
		</div>
	  </nav>