<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title' , 'Alpha Shop')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/myScript.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="{{ asset('//fonts.gstatic.com') }}">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Nunito') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.3.0/css/font-awesome.min.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
</head>
<body>

 <div class="Main-frame" id="app">
    <!-- This part is the top part of the app. here we have some buttons -->
    <div class="navbar-part p-0">
     <nav class="navbar navbar-expand-md m-0 p-0">
        <a class="navbar-brand ml-4 mb-2 title" href="{{ url('/') }}"><h1 class="text-white font-weight-bold m-0"><span class="text-black">Alpha</span> Shop</h1></a>
        <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
           <li class="nav-item">
            <a class="nav-link icon download" href="#"><button type="button" class="text-white"><span class="fa fa-download fa-2x mt-1"></span><br>Download</button></a> 
           </li>       
           <li class="nav-item">
            <a class="nav-link icon" href="#"><button type="button" class="text-white"><span class="fa fa-bar-chart fa-2x mt-1"></span><br>About</button></a>   
           </li>
           <li class="nav-item">
            <a class="nav-link icon" href="#"><button type="button" class="text-white"><span class="fa fa-cog fa-2x mt-1"></span><br>Setting</button></a>  
           </li>
           <li class="nav-item">
            <a class="nav-link icon" href="/home"><button type="button" class="text-white"><span class="fa fa-home fa-2x mt-1"></span><br>Home</button></a>  
           </li>

           <!-- Authentication Links -->
           @guest
            <li class="nav-item">
                <a class="nav-link icon" href="{{ route('login') }}"><button type="button" class="text-white"><span class="fa fa-sign-in fa-2x mt-1"></span><br>Login</button></a>
            </li>
           @if (Route::has('register'))   
            <li class="nav-item">
                <a class="nav-link icon" href="{{ route('register') }}"><button type="button" class="text-white"><span class="fa fa-user fa-2x mt-1"></span><br>Register</button></a>
            </li>
           @endif
           @else
            <li class="nav-item dropdown text-center">
               <span class="fa fa-user text-white fa-2x mt-3"></span> 
               <button id="navbarDropdown" class="nav-link dropdown-toggle py-0 text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                   {{ Auth::user()->name }} <span class="caret"></span>
               </button>

               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    <span class="fa fa-sign-out logout text-white"> {{ ('Logout') }}</span>
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                 </form>
               </div>
            </li>
           @endguest 
         </ul>  
      </div>
    </nav> 
    <div class="message animated bounceInDown">
       @if(session()->has('message'))
          <div class="alert alert-success" role="alert">
             <h5 class="mb-0"> {{ session()->get('message') }} </h5>
          </div>
       @endif
    </div>    
  </div> 


  
  <!-- This Part is the menu part of the app and we have some buttons here which has bottom border -->
  <div class="Menu-part p-0 m-0">
   <nav class="navbar p-0 m-0">
    <div class="img-frame mb-5">
      <img src="{{ asset('image/logo.jpg') }}" class="image">
      <h6 class="text-black title mt-1 ml-1">Alpha <span class="text-white">Shop</span></h6>    
    </div>
    <h3 class="text-white title mt-4 mb-3 ml-auto mr-auto font-weight-bold"><span class="text-black">Shop</span> Menu</h3>
    <ul class="navbar-nav flex-column m-0" style="width: 100%">
      <li class="nav-item">
        <a class="nav-link p-0" href="/category"><button type="button" class="m-0">Product Category</button></a>
      </li>
      <li class="nav-item">  
        <a class="nav-link p-0" href="/customerlist"><button type="button" class="">Customer List</button></a>
      </li>
      <li class="nav-item">  
        <a class="nav-link p-0" href="/saleslist"><button type="button" class="">Sales List</button></a>
      </li>
      <li class="nav-item">
        <a class="nav-link p-0" href="/branchlist"><button type="button" class="">Branch List</button></a>
      </li>
      <li class="nav-item">
        <a class="nav-link p-0" href="/employeelist"><button type="button" class="">Employee List</button></a>
      </li>
      <li class="nav-item">
        <a class="nav-link p-0" href="#"><button type="button" class="">Contact Us</button></a>
      </li>
      <li class="nav-item">
        <a class="nav-link p-0" href="/"><button type="button" class="">About Us</button></a>
      </li>
    </ul>
   </nav>
  </div> 
 </div>  
  
    @yield('Welcome')
  
  <div class="Left-Side">

    @yield('menupart')

  </div>
  <div class="Right-Side">

    @yield('content')

  </div>
  
  <!-- The Contact icon part which is at the right side of the page -->
  <div class="about_us"> 
      <div class="link" style="background-color: #3B5998">
        <div><a href="#" class="fa fa-facebook icon"><span class="icon">Facebook</span></a></div>
      </div>
      <div class="link m-top1" style="background-color: #E50914">
        <div><a href="#" class="fa fa-pinterest icon"><span class="icon">Pinterest</span></a></div>
      </div>
      <div class="link m-top2" style="background-color: #55ACEE">
        <div><a href="#" class="fa fa-twitter icon"><span class="icon">Twitter</span></a></div>
      </div>
      <div class="link m-top3" style="background-color: #3F729B">
        <div><a href="#" class="fa fa-instagram icon"><span class="icon">Instagram</span></a></div>
      </div>
      <div class="link m-top4" style="background-color: #EA4335">
        <div><a href="#" class="fa fa-google icon"><span class="icon">Google</span></a></div>
      </div>
  </div>
    
</body>
</html>
