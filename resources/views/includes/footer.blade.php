@extends('includes.cssandjs')


<footer>
    <div  class="container">
      <div  class="col-md-4 wow fadeInDown " data-wow-duration="1000ms" data-wow-delay="300ms">
        <h4>الاشتراك معنا</h4>

        <div class="btn-gamp">
            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter Email">
          </div>
          <div class="btn-gamp">
            <a type="submit" class="btn btn-default">الاشتراك</a>
          </div>
      </div>

      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="text-center">
          <h4>المعرض</h4>
          <ul class="sidebar-gallery">
            <li><a href="#"><img src="{{asset('imgg/gallery1.png')}}" alt="" /></a></li>
            <li><a href="#"><img src="{{asset('imgg/gallery2.png')}}" alt="" /></a></li>
            <li><a href="#"><img src="{{asset('imgg/gallery3.png')}}" alt="" /></a></li>
            <li><a href="#"><img src="{{asset('imgg/gallery4.png')}}" alt="" /></a></li>
            <li><a href="#"><img src="{{asset('imgg/gallery5.png')}}" alt="" /></a></li>
            <li><a href="#"><img src="{{asset('imgg/gallery6.png')}}" alt="" /></a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
        <div class="">
          <h4>معلومات عنا </h4>
          <p>رسالتنا تكمن في توصيل الاخبار والعلوم التقنية بسهولة ويسر الى الناس واكتساب ثقتهم بممعرفتنا</p>
          <div class="contact-info">
              <ul>
                <li><i class="fas fa-home"></i>{{$settings->address}}</li>
                <li><i class="fas fa-phone fa"></i> {{$settings->contact_number}}</li>
                <li><i class="fas fa-envelope fa"></i> {{$settings->contact_email}}</li>
              </ul>
            </div>
         

        </div>
        
      </div>

    </div>

    
  </footer>

  
  <div class="sub-footer">
    <div class="container">
      <div class="social-icon">
        <div class="col-md-4">
          <ul class="social-network">
            <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fab fa-instagram"></i></i></a></li>
          
          </ul>
        </div>
      </div>

      <div class="col-md-4 col-md-offset-4">
        <div class="copyright">
          &copy;. All Rights Reserved.
          <div class="credits">
          Designed by <a href="#">Dev</a>
          </div>
        </div>
      </div>
    </div>
  </div>