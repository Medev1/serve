<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Serve</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/cyborg.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
</head>

<body class="bg-light">

<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top ">
    <a class="navbar-brand" href="{{url('/')}}"><span class="text-warning text-italic ">S</span>erve</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('home')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('about')}}">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Do
          </a>
          <div class="dropdown-menu"  aria-labelledby="navbarDd">
            <a class="dropdown-item" href="{{url('cvs')}}">Cvs</a>
            <a class="dropdown-item" href="{{url('cvs/create')}}">Create CV</a>
            <a class="dropdown-item" href="{{url('cvs/edit')}}">Edit CV</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('contact')}}">Contact</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</header>

      @yield('content')

      @yield('js')
  
  <footer class="bg-danger text-center text-light" >
          Copyright &copy; 2019 Serve
  </footer>

  <script src="{{asset('assets/js/jquery.min.js')}}"></script> 
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>  
</body>

 <script>
  $("input[type='file']").change(function(){
    file=$(".file")[0].files[0].name;
    $(".filename").text(file);
    $(".img-preview").attr('src','{{ URL::asset('.$(this).val().') }}');
    
  
  });
 </script>
  
</html>