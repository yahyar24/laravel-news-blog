@extends('includes.cssandjs')

<footer class="contact-footer" >

		<div class="container  pt-3">

				<div class="row">

						<div class="col-md-3 mt-5">
								<div class="contactinfo">
										<p><i class="fas fa-map-marker-alt px-2"> </i>{{$settings->address}}</p>
										<p><i class="fas fa-envelope px-2 my-3"></i>  <a href="#">{{$settings->contact_email}}</a> </p>
									 <p> <i class="fas fa-phone px-2 my-3"></i>{{$settings->contact_number}} </p>
							 </div> 
									 
						</div>

						<div class="col-md-3 mt-5">
						 <p><a href="{{ url('/') }}">الرئيسيه</a></p>
						 <p><a href="{{route('product')}}">الخدمات</a></p>
						 <p><a href="{{route('gallery')}}">المعرض</a></p>
						 <p><a href="{{route('contact')}}">تواصل معنا</a></p>

						</div>
						<div class="col-md-3 mt-5">
							<h3> الاكثر مشاهده</h3>
							<p><a href="#">{{$settings->amet}} </a></p>
							<p><a href="#">{{$settings->amet_b}}</a></p>
							<p><a  href="#">{{$settings->amet_bo}}</a></p>
						</div>

						<div class="col-md-3 mt-5  ">
								<a class="navbar-brand mr-5" href="#">{{$settings->site_name}}</a>

						</div>

		
				</div>
		</div>
				<div class="last-section pt-4">
						<div class="container">
								<div class="row">
										<div class="col-xl-4 col-lg-4 col-md-12  pl-5">
												<p>جميع الحقوق محفوظه لشركه <a href="#">العرب للسياحه </a> </p>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12 ">
														<div class="logo w-75 m-auto text-center">
																<i class="fas fa-plane fa-3x"></i>
														</div>
														</div>
				<div class="col-xl-4 col-lg-4 col-md-12  px-5 text-center">
				<div class="social">
						<a href="#"> <i class="fab fa-facebook-f mx-2 border p-2"></i></a>
						<a href="#"> <i class="fab fa-twitter mx-2 border p-2"></i></a>
						<a href="#"> <i class="fab fa-instagram mx-2 border p-2"></i></a>
					 <a href="#"> <i class="fab fa-google-plus-g mx-2 border p-2"></i></a>
						</div>
				</div>
				</div>
				</div>
				 
</footer>