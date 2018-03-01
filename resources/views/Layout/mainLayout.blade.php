<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href= {{ URL::asset('css/style.css') }} rel="stylesheet" type="text/css">
    <title>{{ $title }}</title>
</head>
<body>
    <!-- Start og header -->
    <header>
    <div id="headerInfo">For information regarding the Lying in Honor of The Reverend Billy Graham, please visit our Media Center.</div>
    <div id="logo">
    <div id="underLogo"></div>
    </div>
    </header>
    <!-- Header end -->

    <!-- Start of menu -->
    <div id="menu">
        <div id="menuButtons">
        <a href=" {{ route('home') }} ">Home</a>
        <a href=" {{ route('departments') }} ">The Departments</a>
        <a href="#">Careers</a>
        <a href="#">Media Center</a>
        <a href="#">Visiting Capitol Hill</a>
        <a href="#">Contact Us</a>
        </div>
        <div id="textArea"><input type="text"></div>
        <div id="buttonSearch"><button></button></div>
    </div>
    <!-- end of menu -->

    <!-- Start of body -->
    <div class="wrapper">
        @yield('content')
    </div>
    </div>
    <!-- Body end -->
    
    <footer>
    <div id="footerText">US Capitol Police, NE Washington, DC 21300 (200) 117-2624
    <div id="footerEmail">zesen@gmail.com</div>
    </div>
    <div id="footerLinks">
    <a href="#">Accesebility</a>
    <a href="#">Copyring</a>
    <a href="#">Privacy</a>
    <a href="#">Tools</a>
    </div>
    </footer>

</body>
</html>