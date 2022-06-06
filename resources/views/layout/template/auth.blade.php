<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?= $title ?> </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('Admin/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    {{-- boostrap --}}

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('Admin/css/style.css')}}">

</head>
<body>
@yield('content')
<!-- JS -->
<script src="{{asset('Admin/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>