
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JukePi</title>
    <link rel="stylesheet" href="{{asset('css/foundation.css')}}" />
    <link rel="stylesheet" href="{{asset('css/custom.css')}}" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,400,300,700,900' rel='stylesheet' type='text/css'>
    <script src="{{asset('js/vendor/modernizr.js')}}"></script>
  </head>
  <body>
    @yield('content')
    <div class="equalizer">
          <img style="opacity: 0.4;" width="100%" src="img/equalizer.png">
    </div>
    <script src="{{asset('js/vendor/jquery.js')}}"></script>
    <script src="{{asset('js/foundation.min.js')}}"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
