<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="http://designmodo.github.io/Flat-UI/dist/css/flat-ui.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://daneden.github.io/animate.css/animate.min.css" rel="stylesheet">
    <style>
            body {
            position: relative;
            overflow-x: hidden;
            }
            body,
            html {
            height: 100%;
            background-color: #989489;
            }
            .nav .open > a {
            background-color: transparent;
            }
            .nav .open > a:hover {
            background-color: transparent;
            }
            .nav .open > a:focus {
            background-color: transparent;
            }
            


            #wrapper {
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -webkit-transition: all 0.5s ease;
            padding-left: 0;
            transition: all 0.5s ease;
            }
            #wrapper.toggled {
            padding-left: 220px;
            }
            #wrapper.toggled #sidebar-wrapper {
            width: 220px;
            }
            #wrapper.toggled #page-content-wrapper {
            margin-right: -220px;
            position: absolute;
            }
            #sidebar-wrapper {
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -webkit-transition: all 0.5s ease;
            background: #1a1a1a;
            height: 100%;
            left: 220px;
            margin-left: -220px;
            overflow-x: hidden;
            overflow-y: auto;
            transition: all 0.5s ease;
            width: 0;
            z-index: 1000;
            }
            #sidebar-wrapper::-webkit-scrollbar {
            display: none;
            }
            #page-content-wrapper {
            padding-top: 70px;
            width: 100%;
            }
            
            


            .sidebar-nav {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            top: 0;
            width: 220px;
            }
            .sidebar-nav li {
            display: inline-block;
            line-height: 20px;
            position: relative;
            width: 100%;
            }
            .sidebar-nav li:before {
            background-color: #1c1c1c;
            content: '';
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            transition: width 0.2s ease-in;
            width: 3px;
            z-index: -1;
            }
            .sidebar-nav li:first-child a {
            background-color: #1a1a1a;
            color: #ffffff;
            }
            .sidebar-nav li:nth-child(2):before {
            background-color: #402d5c;
            }
            .sidebar-nav li:nth-child(3):before {
            background-color: #4c366d;
            }
            .sidebar-nav li:nth-child(4):before {
            background-color: #583e7e;
            }
            .sidebar-nav li:nth-child(5):before {
            background-color: #64468f;
            }
            .sidebar-nav li:nth-child(6):before {
            background-color: #704fa0;
            }
            .sidebar-nav li:nth-child(7):before {
            background-color: #7c5aae;
            }
            .sidebar-nav li:nth-child(8):before {
            background-color: #8a6cb6;
            }
            .sidebar-nav li:nth-child(9):before {
            background-color: #987dbf;
            }
            .sidebar-nav li:hover:before {
            transition: width 0.2s ease-in;
            width: 100%;
            }
            .sidebar-nav li a {
            color: #dddddd;
            display: block;
            padding: 10px 15px 10px 30px;
            text-decoration: none;
            }
            .sidebar-nav li.open:hover before {
            transition: width 0.2s ease-in;
            width: 100%;
            }
            .sidebar-nav .dropdown-menu {
            background-color: #222222;
            border-radius: 0;
            border: none;
            box-shadow: none;
            margin: 0;
            padding: 0;
            position: relative;
            width: 100%;
            }
            .sidebar-nav li a:hover,
            .sidebar-nav li a:active,
            .sidebar-nav li a:focus,
            .sidebar-nav li.open a:hover,
            .sidebar-nav li.open a:active,
            .sidebar-nav li.open a:focus {
            background-color: transparent;
            color: #6A5D4F;
            text-decoration: none;
            }
            .sidebar-nav > .sidebar-brand {
            font-size: 20px;
            height: 65px;
            line-height: 44px;
            }
           
           


            .hamburger {
            background: transparent;
            border: none;
            display: block;
            height: 32px;
            margin-left: 15px;
            position: fixed;
            top: 20px;
            width: 32px;
            z-index: 999;
            }
            .hamburger:hover {
            outline: none;
            }
            .hamburger:focus {
            outline: none;
            }
            .hamburger:active {
            outline: none;
            }
            .hamburger.is-closed:before {
            -webkit-transform: translate3d(0, 0, 0);
            -webkit-transition: all 0.35s ease-in-out;
            color: #ffffff;
            content: '';
            display: block;
            font-size: 14px;
            line-height: 32px;
            opacity: 0;
            text-align: center;
            width: 100px;
            }
            .hamburger.is-closed:hover before {
            -webkit-transform: translate3d(-100px, 0, 0);
            -webkit-transition: all 0.35s ease-in-out;
            display: block;
            opacity: 1;
            }
            .hamburger.is-closed:hover .hamb-top {
            -webkit-transition: all 0.35s ease-in-out;
            top: 0;
            }
            .hamburger.is-closed:hover .hamb-bottom {
            -webkit-transition: all 0.35s ease-in-out;
            bottom: 0;
            }
            .hamburger.is-closed .hamb-top {
            -webkit-transition: all 0.35s ease-in-out;
            background-color: rgba(255, 255, 255, 0.7);
            top: 5px;
            }
            .hamburger.is-closed .hamb-middle {
            background-color: rgba(255, 255, 255, 0.7);
            margin-top: -2px;
            top: 50%;
            }
            .hamburger.is-closed .hamb-bottom {
            -webkit-transition: all 0.35s ease-in-out;
            background-color: rgba(255, 255, 255, 0.7);
            bottom: 5px;
            }
            .hamburger.is-closed .hamb-top,
            .hamburger.is-closed .hamb-middle,
            .hamburger.is-closed .hamb-bottom,
            .hamburger.is-open .hamb-top,
            .hamburger.is-open .hamb-middle,
            .hamburger.is-open .hamb-bottom {
            height: 4px;
            left: 0;
            position: absolute;
            width: 100%;
            }
            .hamburger.is-open .hamb-top {
            -webkit-transform: rotate(45deg);
            -webkit-transition: -webkit-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
            background-color: #fff;
            margin-top: -2px;
            top: 50%;
            }
            .hamburger.is-open .hamb-middle {
            background-color: #fff;
            display: none;
            }
            .hamburger.is-open .hamb-bottom {
            -webkit-transform: rotate(-45deg);
            -webkit-transition: -webkit-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
            background-color: #fff;
            margin-top: -2px;
            top: 50%;
            }
            .hamburger.is-open:before {
            -webkit-transform: translate3d(0, 0, 0);
            -webkit-transition: all 0.35s ease-in-out;
            color: #ffffff;
            content: '';
            display: block;
            font-size: 14px;
            line-height: 32px;
            opacity: 0;
            text-align: center;
            width: 100px;
            }
            .hamburger.is-open:hover before {
            -webkit-transform: translate3d(-100px, 0, 0);
            -webkit-transition: all 0.35s ease-in-out;
            display: block;
            opacity: 1;
            }
            
            



            .overlay {
            position: fixed;
            display: none;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 1;
            }
            
            body,
            html {
            background-color: #989489;
            }
            body h1,
            body h2,
            body h3,
            body h4 {
            color: rgba(255, 255, 255, 0.9);
            }
            body p,
            body blockquote {
            color: rgba(255, 255, 255, 0.7);
            }
            body a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: underline;
            }
            body a:hover {
            color: #fff;
            }



    </style>
    <style>

            * {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            font-family: "Cabin";
            }



            .container {
            display: block;
            width: 25em;
            margin: 100px auto;
            }

            .search-container {
            overflow: hidden;
            float: right;
            height: 4em;
            width: 4em;
            border-radius: 2em;
            box-shadow: 0 0 5px #6A5D4F;
            -moz-transition: all 0.35s;
            -webkit-transition: all 0.35s;
            }
            .search-container:hover {
            width: 25em;
            border-radius: 5px 2em 2em 5px;
            }
            .search-container:hover input {
            display: inline-block;
            width: 19em;
            padding: 10px;
            }

            input {
            -moz-appearance: none;
            -webkit-appearance: none;
            appearance: none;
            float: left;
            width: 0em;
            height: 2em;
            margin: 1em;
            margin-right: -4.5em;
            background: #fff;
            color: #6A5D4F;
            font-size: 1em;
            font-weight: 600;
            padding: 0px;
            border: 0;
            border-radius: 5px;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2) inset;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
            -moz-transition: all 0.25s;
            -webkit-transition: all 0.25s;
            }
            input:focus {
            outline: none;
            box-shadow: 0 -1px 1px rgba(255, 255, 255, 0.25), 0 1px 5px rgba(0, 0, 0, 0.15);
            }

            .button {
            float: right;
            width: 1.75em;
            height: 1.75em;
            margin: 0.125em;
            background: #6A5D4F;
            text-align: center;
            font-size: 2em;
            color: #FDF6E3;
            border-radius: 50%;
            box-shadow: 0 -1px 1px rgba(255, 255, 255, 0.25), 0 1px 1px rgba(0, 0, 0, 0.25);
            text-shadow: 0 -2px 1px rgba(0, 0, 0, 0.3);
            }
            .button i {
            margin-top: 0.3em;
            }
            .button:active {
            border: 0 !important;
            text-shadow: 0 0 0;
            }

    </style>
    </head>
    <body>
        

        <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                       Data Dictionary
                    </a>
                </li>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-folder"></i> Thematic Dictionary</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-dropbox"></i>Crowdsourced Data</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-search"></i> Advanced Search</a>
                    </li>       
                    <li>
                    <a href="#"><i class="fa fa-fw fa-book"></i> Login/Signup</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-cog "></i>Other Options </a>
                </li>
                 <li>
                        <a href="#"><i class="fa fa-fw fa-facebook"></i> Facebook</a>
                    </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-twitter"></i> Twitter</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-instagram"></i> Instagram</a>
                </li>
                
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->
<div class='container'>
      <div class='search-container'>
        <input placeholder='search' type='text'>
        <a class='button'>
          <i class='icon-search'></i>
        </a>
      </div>
    </div>
        <!-- Page Content -->
        <div id="page-content-wrapper">
          <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
          </button>
          </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-2">
                        <!--<h1 class="page-header">Data Dictionary</h1>  -->
                        <h1>Data Dictionary</h1>
                       </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script>
       $(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
}); 
    </script>
    </body>
</html>
