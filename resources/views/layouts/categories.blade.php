<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Barlow">
    <link rel="stylesheet" type="text/css" href="/css/globals.css">
    <link rel="stylesheet" type="text/css" href="/css/header.css">
    <link rel="stylesheet" type="text/css" href="/css/footer.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/categories.css">
    <link rel="stylesheet" type="text/css" href="/css/action.css">
    <link rel="stylesheet" type="text/css" href="/css/animations/categories.css">
    <link rel="stylesheet" type="text/css" href="/css/modals/add to library.css">
    <link rel="stylesheet" type="text/css" href="/css/modals/new library.css">
    <!-- Javascripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>
<body>
    @include ('layouts.header')

    @yield ('content')

    @include ('layouts.footer')
</body>

<!-- Jquery Codes -->
<script type="text/javascript">
    $(document).ready(function(){
        $(".article-panel-holder").addClass('animate');
    });
</script>
</html>