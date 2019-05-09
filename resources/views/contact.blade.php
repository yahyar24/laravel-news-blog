@extends('layouts.cssandjs')
@extends('layouts.frontendd')
    
		@section('content')

    <body>
           <!-- starting  naaaaaaav naaaaaaaaaaaar -->

   

      
      <!-- end naaaaaaaaav baaaaaaaaaaaaaar -->

<section class="my-footer">

        <footer >
                <div class="header pt-5" id="fooot">
                    <h2 class="text-center pt-5">تواصل معنا</h2>
                    <hr>
                  </div>
          
                <div class="container ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contactinfo my-5">
                                <h2>معلومات التواصل</h2>
                                <p>في حال واجهتك اي مشكله او اردت الاستفسار عن اي شيء فلا تتردد ف التواصل معنا</p>
                            <div class="info">
                                <i class="fas fa-map-marker-alt px-2 my-4"> </i>
                                 <span>{{$settings->address}}</span>
                               
                                <br/>
                                <i class="fas fa-envelope px-2 my-4"></i>
                                 <span><a href="#">{{$settings->contact_email}}</a></span>
                                <br/>
                                <i class="fas fa-phone px-2 my-4"></i>
                                 <span>{{$settings->contact_number}}</span>
                            </div>
                               
                             </div>
                        </div>
                        <div class="col-md-6">
                             <div class="ourdata  m-auto">
                <div class="heading m-4">
                    <h3>هيا نعمل سويا</h3>
                </div>
                <div class="dataform m-4">
                    <form action="{{route('message.store')}}" method="post" role="form" class="contactForm">
                    {{csrf_field()}}
                <input name="name" type="text" placeholder="الاسم بالكامل"class="form-control my-2"/>
                 
                <input name="email" type="email" placeholder="الايميل الخاص بك"class="form-control my-2"/>
                   
                    <input type="text" name="subject" placeholder="الموضوع"class="form-control my-2"/>
                   
                    <textarea name="body" class="form-control" placeholder="رسالتك " rows="5"></textarea>
                    <button class="btn mt-3 float-right">ارسال</button>
                    <div class="clearfix"></div>
                    </form>
                </div>
            </div>
                        </div>
                
                    </div>
                </div>
           
                     
            </footer>

</section>

   <!-- <foooooooooooooooooooooooter -->



  
     
    </body>
</html>

@endsection