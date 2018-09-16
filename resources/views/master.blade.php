<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Страшные истории</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="/css/blog.css" rel="stylesheet">
</head>
<body>

@include ('layouts.nav')





<div class="container">

    <div class="row">
        <div class="col-sm-10 blog-main">
        @yield('content')
        </div>
        @include('layouts.sidebar')

    </div>
</div>

@include ('layouts.footer')


<script src="{{ mix('/js/app.js') }}"></script>
<script>
    var btn = $('#button');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
    });


</script>
<script>
    $(document).ready(function(){
    $(".isSelected").click(function(){
        $(".isSelected").css("text-decoration","underline");
    });
    });
</script>


</body>
</html>