<script>
$( ".cross" ).hide();
$( ".menu" ).hide();
$( ".hamburger" ).click(function() {
$( ".menu" ).slideToggle( "slow", function() {
$( ".hamburger" ).hide();
$( ".cross" ).show();
});
});

$( ".cross" ).click(function() {
$( ".menu" ).slideToggle( "slow", function() {
$( ".cross" ).hide();
$( ".hamburger" ).show();
});
});</script>
<style>
body{
  font-family: 'Noto Sans', sans-serif;
	margin:0;
	width:100%;
	height:100vh;
  	background:#ffffff;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}
header{
	width:100%; 
	background:#ffffff; 
	height:60px; 
	line-height:60px;
	border-bottom:1px solid #dddddd;
}
.hamburger{
  background:none;
  position:absolute;
  top:0;
  right:0;
  line-height:45px;
  padding:5px 15px 0px 15px;
  color:#999;
  border:0;
  font-size:1.4em;
  font-weight:bold;
  cursor:pointer;
  outline:none;
  z-index:10000000000000;
}
.cross{
  background:none;
  position:absolute;
  top:0px;
  right:0;
  padding:7px 15px 0px 15px;
  color:#999;
  border:0;
  font-size:3em;
  line-height:65px;
  font-weight:bold;
  cursor:pointer;
  outline:none;
  z-index:10000000000000;
}
.menu{z-index:1000000; font-weight:bold; font-size:0.8em; width:10%; background:#f1f1f1;  position:absolute; text-align:center; font-size:12px;}
.menu ul {margin: 0; padding: 0; list-style-type: none; list-style-image: none;}
.menu li {display: block;   padding:15px 0 15px 0; border-bottom:#dddddd 1px solid;}
.menu li:hover{display: block;    background:#ffffff; padding:15px 0 15px 0; border-bottom:#dddddd 1px solid;}
.menu ul li a { text-decoration:none;  margin: 0px; color:#666;}
.menu ul li a:hover {  color: #666; text-decoration:none;}
.menu a{text-decoration:none; color:#666;}
.menu a:hover{text-decoration:none; color:#666;}

.glyphicon-home{
  color:white; 
  font-size:1.5em; 
  margin-top:5px; 
  margin:0 auto;
}
header{display:inline-block; font-size:12px;}
span{padding-left:20px;}
a{color:#336699;}
</style>
<header>
	<span>Author : <a href="http://glennsmith.me" target="_blank">Glenn Smith</a></span>
  <button class="hamburger">&#9776;</button>
  <button class="cross">&#735;</button>
</header>

<div class="menu">
  <ul>
    <a href="#"><li>LINK ONE</li></a>
    <a href="#"><li>LINK TWO</li></a>
    <a href="#"><li>LINK THREE</li></a>
    <a href="#"><li>LINK FOUR</li></a>
    <a href="#"><li>LINK FIVE</li></a>
  </ul>
</div> 





body {
  background: #FDF6E3;
}