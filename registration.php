<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/w3.css" rel="stylesheet">
        <link href="css/flat-ui.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/navbar.css" rel="stylesheet">
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

<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else {
      // The person is not logged into your app or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  function logout(){
      FB.logout(function(response){
        document.getElementById('status').innerHTML =
        'Please Log , into this app';
      });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1709448872681221',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.8' // use graph api version 2.8
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';

    });
  }
</script>

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->

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
                        <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="thematic.php"><i class="fa fa-fw fa-folder"></i> Thematic Dictionary</a>
                    </li>
                    <li>
                        <a href="crowdsourced.php"><i class="fa fa-fw fa-dropbox"></i>Crowdsourced Data</a>
                    </li>
                    <li>
                        <a href="advanced.php"><i class="fa fa-fw fa-search"></i> Advanced Search</a>
                    </li>       
                    <li>
                    <a href="registration.php"><i class="fa fa-fw fa-book"></i> Login/Signup</a>
                </li>
                <li>
                    <a href="misc.php"><i class="fa fa-fw fa-cog "></i>Other Options </a>
                </li>
                 <li>
                        <a href="https://www.facebook.com/neuromancercreation" target="_blank"><i class="fa fa-fw fa-facebook"></i> Facebook</a>
                    </li>
                <li>
                    <a href="https://www.facebook.com/neuromancercreation" target="_blank"><i class="fa fa-fw fa-twitter"></i> Twitter</a>
                </li>
                <li>
                    <a href="https://www.facebook.com/neuromancercreation" target="_blank"><i class="fa fa-fw fa-instagram"></i> Instagram</a>
                </li>
                
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

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
                
                <div class="fb-login-button" scope="public_profile,email" onlogin="checkLoginState();" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="true" data-auto-logout-link="true" data-use-continue-as="true"></div>

   <!-- <fb:login-button data-auto-logout-link="true"  data-size="xlarge" data-show-faces="true" scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>-->

<div id="status">
</div>

            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script>


$("button").filter(function() {
  return this.name.match(/searchbutton/);
}).click(function() { 
 
  alert("Searching Function Called"); 
});

</script>
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