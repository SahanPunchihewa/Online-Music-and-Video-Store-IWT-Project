<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nav</title>
    <style>
        body {
	padding: 0;
	margin: 0;
}

nav {
	position: fixed;
	z-index: 10;
	left: 0;
	right: 0;
	top: 0;
	font-family: 'Montserrat', sans-serif;
	padding: 0 5%;
	height: 100px;
	background-color: #000000;
}
nav .logo {
	float: left;
	width: 300px;
	height: 100px;
	display: flex;
	align-items: center;
	font-size: 24px;
	color: #fff;
}
nav .links {
	float: right;
	padding: 0;
	margin: 0;
	width: 60%;
	height: 100%;
	display: flex;
	justify-content: space-around;
	align-items: center;
}
nav .links li {
	list-style: none;
}
nav .links li:hover {
	color: rgb(8, 8, 8);
	border: 1px solid rgb(11, 12, 12);
          border-top-left-radius: 10px;
          background: rgba(103, 103, 104, 0.2);
          box-shadow: 0 5px 15px rgba(0,0,0,.5);
          border-bottom-right-radius: 10px;
    
    cursor: pointer;
  }
  
nav .links a {
	display: block;
	padding: 1em;
	font-size: 16px;
	font-weight: bold;
	color: #fff;
	text-decoration: none;
}
#nav-toggle {
	position: absolute;
	top: -100px;
}
nav .icon-burger {
	display: none;
	position: absolute;
	right: 5%;
	top: 50%;
	transform: translateY(-50%);
}
nav .icon-burger .line {
	width: 30px;
	height: 5px;
	background-color: #fff;
	margin: 5px;
	border-radius: 3px;
	transition: all .3s ease-in-out;
}
@media screen and (max-width: 768px) {
	nav .logo {
		float: none;
		width: auto;
		justify-content: center;
	}
	nav .links {
		float: none;
		position: fixed;
		z-index: 9;
		left: 0;
		right: 0;
		top: 100px;
		bottom: 100%;
		width: auto;
		height: auto;
		flex-direction: column;
		justify-content: space-evenly;
		background-color: rgba(0,0,0,.8);
		overflow: hidden;
		box-sizing: border-box;
		transition: all .5s ease-in-out;
	}
	nav .links a {
		font-size: 20px;
	}
	nav :checked ~ .links {
		bottom: 0;
	}
	nav .icon-burger {
		display: block;
	}
	nav :checked ~ .icon-burger .line:nth-child(1) {
		transform: translateY(10px) rotate(225deg);
	}
	nav :checked ~ .icon-burger .line:nth-child(3) {
		transform: translateY(-10px) rotate(-225deg);
	}
	nav :checked ~ .icon-burger .line:nth-child(2) {
		opacity: 0;
	}
	
}

  </style>
</head>
<body>
    

<nav >
	<input id="nav-toggle" type="checkbox">
	<div class="logo">  <img src="../image/logo.jpg" class="logo" alt=""></div>
	<ul class="links">
		<li><a href="../php/Catergory.php">CATERGORY</a></li>
		<li><a href="../php/main.php">HOME</a></li>
		<li><a href="../php/video page.php">VIDEO</a></li>
		<li><a href="../php/music page.php">MUSIC</a></li>
		<li><a href="../php/About.php">ABOUTUS</a></li>
		<li><a href="../php/ContactUs.php">CONTACTUS</a></li>
		
		
	</ul>
	<label for="nav-toggle" class="icon-burger">
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
	</label>
</nav>


	
</div>
</body>
</html>

    