<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>WGU-IT Students Unofficial Site</title>

  <!-- Bootstrap Core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/vendor/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="/vendor/device-mockups/device-mockups.min.css">

  <!-- Theme CSS -->
  <link href="/css/newage.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body id="page-top">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand page-scroll" href="#page-top">WGU-IT Students</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        {{--
        <li>
          <a class="page-scroll" href="#download">Download</a>
        </li>
        {{--
        <li>
          <a class="page-scroll" href="#features">Features</a>
        </li>
        --}}
        {{--
        <li>
          <a class="page-scroll" href="#contact">Contact</a>
        </li>
        --}}
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>

<section class="cta">
  <div class="cta-content">
    <div class="container">
      <h2>Start chatting</h2>
      {{--<h4>We <i class="fa fa-heart"></i> new friends!</h4>--}}
      <a href="https://wgu-it.signup.team/" class="btn btn-outline btn-xl page-scroll" target="_blank">Let's Get Started!</a>
    </div>
  </div>
  <div class="overlay"></div>
</section>

<section id="contact" class="contact bg-primary">
  <div class="container">
    <h2>We <i class="fa fa-heart"></i> new friends!</h2>
    <ul class="list-inline list-social">
      {{--
      <li class="social-twitter">
        <a href="#"><i class="fa fa-twitter"></i></a>
      </li>
      --}}
      <li class="social-github">
        <a href="https://github.com/wgu-it"><i class="fa fa-github"></i></a>
      </li>
      {{--
      <li class="social-google-plus">
        <a href="#"><i class="fa fa-google-plus"></i></a>
      </li>
      --}}
    </ul>
  </div>
</section>

<footer>
  <div class="container">
    <p>&copy; 2017 @if(date('Y') > '2017') - {{date('Y')}} @endif</p>
    <p>WGU name and logos belong to <a href="http://www.wgu.edu/" target="_blank">WGU</a></p>
    <ul class="list-inline">
      {{--
      <li>
        <a href="#">Privacy</a>
      </li>
      <li>
        <a href="#">Terms</a>
      </li>
      <li>
        <a href="#">FAQ</a>
      </li>
      --}}
    </ul>
  </div>
</footer>

<!-- jQuery -->
<script src="/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Theme JavaScript -->
<script src="/js/newage.min.js"></script>

</body>

</html>
