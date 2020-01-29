
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>HOME</title>
	<!-- <link rel="stylesheet" href="style1.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">

</head>
<body>

	<style type="text/css">
	.div-img{
	background: url('footer.jpg') ;
	background-size: 100%;
	min-height: 500px;
	}
	body{
        background-image: url("header_bg_draco-2.jpg");
        background-repeat: no-repeat;
		background-color: #cccccc;
  		height: 500px;
   		background-position: center;
  		/* background-size: cover; */
  	/* position: relative; */
        
	}
	.wrap{
		width: 900px;
		margin: auto;
		margin-top: 60px;
	}
	.card{
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.6);
		transition: 0.4s;
		width:200px;
		background: #fff;
		text-align: center;
		font-size: 16px;
		font-family: sans-serif;
		float:left;
		margin: 10px;

	}
	html,body{
		padding: 0;
		margin:0;
		font-family: Arial;
	}

	.menu-HOME{
		background-color: black;
		font-size: 20px;
		font-family: monospace;
	}

	.menu-HOME ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
	}

	.menu-HOME > ul > li {
		float: right;
		font-size: 15px;
	}

	
	.menu-HOME li a {
		display: inline-block;
		color: white;
		text-align: center;
		padding: 10px 10px;
		text-decoration: none;
	}

	.menu-HOME li a:hover{
		background-color: red;
		color: black;
		font-size: 10px;
		
	}

	li.dropdown {
		display: inline-block;
	}

	.dropdown:hover .isi-dropdown {
		display: block;
	}

	.isi-dropdown a:hover {
		color: #fff !important;
	}

	.isi-dropdown {
		position: absolute;
		display: none;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
		background-color: grey;
	}

	.isi-dropdown a {
		color: #3c3c3c !important;
	}

	.isi-dropdown a:hover {
		color: #232323 !important;
		background: #f3f3f3 !important;
	}
		h3{
			position: absolute;
			left: 700px;
			top: 60px;
            color: white;
			font-size: 30px;   
		}
			
		.button {
  			border: none;
 			color: white;
  			padding: 10px 10px;
 			text-align: center;
  			text-decoration: none;
  			display: inline-block;
  			font-size: 10px;
  			margin: 2px 2px;
  			cursor: pointer;
	}

		.button1 {
  			background-color: blue; 
  			color: black; 
  			border: 2px solid black;
	}         
	.button2 {
  			background-color: red; 
  			color: black; 
  			border: 2px solid black;
	}         
	.button3 {
  			background-color:yellow; 
  			color: black; 
  			border: 2px solid black;
	}         
	.button4 {
  			background-color:green; 
  			color: black; 
  			border: 2px solid black;
	}                 
	.middle{
		position: absolute;
		top: 110%;
		transform: translateY(-50%);
		width: 71%;
		text-align: center;
	  }
	  .btn{
		display: inline-block;
		width: 70px;
		height: 90px;
		background: black;
		margin: 10px;
		border-radius: 30%;
		box-shadow: 0 5px 15px -5px #00000070;
		color: #3498db;
		overflow: hidden;
		position: relative;
	  }
	  .btn i{
		line-height: 90px;
		font-size: 26px;
		transition: 0.2s linear;
	  }
	  .btn:hover i{
		transform: scale(1.3);
		color: #f1f1f1;
	  }
	  .btn::before{
		content: "";
		position: absolute;
		width: 120%;
		height: 120%;
		background: #3498db;
		transform: rotate(45deg);
		left: -110%;
		top: 90%;
	  }
	  .btn:hover::before{
		animation: aaa 0.7s 1;
		top: -10%;
		left: -10%;
	  }
	  @keyframes aaa {
		0%{
		  left: -110%;
		  top: 90%;
		}50%{
		  left: 10%;
		  top: -30%;
		}100%{
		  top: -10%;
		  left: -10%;
		}
	  }
</style>

<header class="header">
	<div class="menu-HOME">
		<ul>
			<li><a href="#">ABOUT</a></li>
			<li class="dropdown"><a href="#">PROFILE</a>
				<ul class="isi-dropdown">
					<li><a href="#"> IPAL</a></li>
					<li><a href="#"> Menu 2</a></li>
					<li><a href="#"> Menu 3</a></li>
					<li><a href="#"> Menu 4</a></li>
					</ul>
			<li class="dropdown"><a href="#">CONTENT</a>
				<ul class="isi-dropdown">
					<P><b><font size="3" color="blue">
					<li><center>PRODUCTS</li></center>
					</font></P></b>
					<li><a href="#"> Menu 1</a></li>
					<li><a href="#"> Menu 2</a></li>
					<li><a href="#"> Menu 3</a></li>
					<li><a href="#"> Menu 4</a></li>
					</ul>			
			<li class="dropdown"><a href="#">HOME</a>
				<ul class="isi-dropdown">
					<P><b><font size="3">
					<li><center>HOME SOLUTION</li></center>
				</font></P></b>
				<font size="2"><p>
					<li><a href="menuprofil1.html">Defender Box</a></li>
					<li><a href="menuprofil2.html">Defender Premium Security</a></li>
					<li><a href="#">Bitdefender Total Security 2020</a></li>
					<li><a href="#">Bitdefender Internet Security 2020</a></li>
					<li><a href="#">Bitdefender Internet Security 2020</a></li>
					<li><a href="#">Bitdefender Antivirus Plus 2020</a></li>
					<li><a href="#">Bitdefender Family Pack 2020</a></li>
					<li><a href="#">Bitdefender Antivirus for Mac</a></li>
					<li><a href="#">Bitdefender Mobile Security for Android</a></li>
					<li><a href="#">Bitdefender Mobile Security for iOS</a></li>
					<li><a href="#">Bitdefender Premium VPN</a></li>
				</font></p>
				</ul>
			</li>
		</ul> 
	</div>
	
</header>
	<!-- <div class="container">
        <center>
	<div class="pembungkus">
		<img src="footer.jpg" width="1237" height="300"> -->
    
	</div>
</div>
			<body bgcolor="#fff">
	<div class="wrap">
		<div class="card">
			<img src ="logo.jpg" alt="logo" style="width:100px">
			<div class="container">
				<a href="#"><b><font color="black">HOME</a><font></b>
				<h4><b>GLOBAL MEKAR MANDIRI</b></h4>				
				<button class="button button1">KLIK</button>
				</div>
				</div>
				<div class="wrap">
		<div class="card">
			<img src ="logo.jpg" alt="logo" style="width:100px">
			<div class="container">
				<a href="#"><b><font color="black">HOME</a><font></b>
				<h4><b>GLOBAL MEKAR MANDIRI</b></h4>
				<button class="button button2">KLIK</button>
				</div>
		</div></div>
		<div class="wrap">
		<div class="card">
			<img src ="logo.jpg" alt="logo" style="width:100px">
			<div class="container">
				<a href="#"><b><font color="black">HOME</a><font></b>
				<h4><b>GLOBAL MEKAR MANDIRI</b></h4>
				<button class="button button3">KLIK</button>
				</div>
		</div>
		<div class="wrap">
			<div class="card">
				<img src ="logo.jpg" alt="logo" style="width:100px">
				<div class="container">
					<a href="#"><b><font color="black">HOME</a><font></b>
					<h4><b>GLOBAL MEKAR MANDIRI</b></h4>
					<button class="button button4">KLIK</button>
					</div>
			</div>
		<br><br><br><br><br>
	<h3> PT.GLOBAL MEKAR MANDIRI </h3>
	</br>

	<div class="middle">
		<a class="btn" href="#">
		  <i class="fab fa-facebook-f"></i>
		</a>
		<a class="btn" href="#">
		  <i class="fab fa-twitter"></i>
		</a>
		<a class="btn" href="#">
		  <i class="fab fa-google"></i>
		</a>
		<a class="btn" href="#">
		  <i class="fab fa-instagram"></i>
		</a>
		<a class="btn" href="#">
		  <i class="fab fa-youtube"></i>
		</a>
	  </div>
</div>
</body>
</html>