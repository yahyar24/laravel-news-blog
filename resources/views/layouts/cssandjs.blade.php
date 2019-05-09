<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/tostr.min.css')}}">
    @yield('styles')
</head>
<body>


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