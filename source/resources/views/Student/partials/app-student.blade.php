<!DOCTYPE html>
<html lang="en">
<head>
<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>web feunas</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="blade/css/bootstrap.min.css" rel="stylesheet" />
  <link href="blade/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <link href="blade/demo/demo.css" rel="stylesheet" />
</head>
<body class="">
    <div class="wrapper">
      @include('Elements.header')
      @include('Elements.sidebar')
      <div class="content-wrapper">
          <div>
              @yield('main-content')
          </div>
      </div>
    </div>
    @section('scripts')
      @include('Student.partials.scripts-student')
    @show
</body>
</html>
