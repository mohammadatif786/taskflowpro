<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Task Flow Pro</title>

  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/carousel/">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('welcome.css')}}">
  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">TaskFlowPro</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto mb-2 mb-md-0">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('gallary') }}">Gallary</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('about') }}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('contact') }}">Contact Us</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            @guest

                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item">
                    <a class="nav-link" href="/home">
                        {{ Auth::user()->name }}
                    </a>
                </li>
            @endguest

          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('image/office.jpg') }}" class="bd-placeholder-img" width="100%" height="100%" role="img">

          <div class="container">
            <div class="carousel-caption text-left">
              <h1>Brillient Enviroment.</h1>
              <p>We provide brillient enviroment for our Employee where they can work with their experience senior and learn how to work with real companies.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('image/office building.jpg')}}" class="bd-placeholder-img" width="100%" height="100%" role="img" >

          <div class="container">
            <div class="carousel-caption">
              <h1>Our Company Building.</h1>
              <p>You will reach our company thourgh location we provide in our footer section we have two branches. our main branche is in New York and you can learn about us in about page .</p>

            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('image/employee.jpg')}}" class="bd-placeholder-img" width="100%" height="100%"  role="img">

          <div class="container">
            <div class="carousel-caption text-right">
              <h1>Meet our Emploies.</h1>
              <p>we have best employee who can work properly and honesty they can provide best service to our client .</p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        @foreach ($users as $user)

            <div class="col-lg-4">
                <img src="{{ asset('image/employee.jpg') }}" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" >

                <h2>{{ $user->name }}</h2>
                <p>These Emploies are our best in our Company who work hard with honesty and we appricate their work and Employee of our Company</p>
            </div><!-- /.col-lg-4 -->
        @endforeach
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">What We will provide you.
                <span class="text-muted">When you work with us.</span>
            </h2>
            <p class="lead">When you work with us. we will provide you life insurance and
                <span class="text-danger"> 50% </span> medical insurance. According to your performs we also give you a house in which
                <span class="text-success"> 70% </span> company will pay your rent .
            </p>
        </div>
        <div class="col-md-5">
          <img src="{{ asset('image/benefits.jpg') }}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" role="img">

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">how you can Apply in our company.</span></h2>
          <p class="lead">Join Our Company you have degree in any department and you have 2 year experience and we also provide internship for fresh student but internship is not paid it will be for 2 month and we proivde you a link where you can apply .</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="{{asset('image/apply.jpg')}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"height="500" role="img" >

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Interviews.</span></h2>
          <p class="lead">we provide two type of interviews first will be on mobile in you our interview will ask about you and second will me on site interview where we can ask you some theory about your skill and give you some problems where we check you ablity how you can solve problems in short time.</p>
        </div>
        <div class="col-md-5">
          <img src="{{ asset('image/interview.jpg') }}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
            height="500"  role="img">

        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
      <p class="float-right"><a href="#">Back to top</a></p>
      <p>&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
  </main>



</body>

</html>
