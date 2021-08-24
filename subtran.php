<html>
<head>
<title>Student Home page</title>
<style>
body{
	background-image:url('th.jpg');
	background-size:cover;
	font-family:verdana;
	font-size:20px;
	margin:0;
	line-height:24px;	
}
.navbar{
	text-align:center;
	width:100%;
	background:lightblue;
	height:100px;
	margin-top:50px;
	opacity:0.6;
	}
	
.navbar ul{
	margin:0;
	padding:0;
	list-style:none;
	position:absolute;
	}
	
.navbar ul li a{
	float:left;
	margin-top:30px;
	display:block;
	padding:25px;
	color:black;
	text-decoration:none;
	width:200px;
	font-size:20px;
	text-align:center;
	padding:10px;
	border-radius:10px;
	font-family:century gothic;
	font-weight:bold;
	}
	
.navbar ul:after{
	content:"";clear:both;
	display:block;

	}
.navbar ul li{
	float:left;
	list-style:none;
}
.navbar ul ul{
	display:none;
	
}
.navbar ul li:hover >ul{
	display:block;
	}
.navbar ul li :hover {
	background:#000033;
	transititon:0.9s;
}
.navbar ul li:hover a{
	color:white;
}
.navbar ul ul:hover a{
	color:black;
}

.navbar ul ul{
	background:lightblue;
	padding:0;
	margin:0;
	position:absolute;
	top:100%;
	}
.navbar ul ul li{
	float:none;
	postition:absolute;
	
}

.navbar ul ul li a{
	padding:10px;
	color:black;
	width:300px;
	text-align:left;
	
}
.navbar ul ul li a:hover{
	background:#000033;
	color:white;
	transititon:0.9s;
}

#levForm {
  background-color:lightblue;
  color:black;
  margin: 50px auto;
  font-family: Raleway;
  padding: 40px;
  width: 40%;
  opacity:0.6;
  min-width: 300px;
  float:left;
}

h1 {
  text-align: center;  
}
</style>
</head>
<body>
<div class="navbar">
	<ul>
		<li><a href="#">Home</a></li>
		<li><a href="la.php">LeaveApplication</a></li>
		<li><a href="ls.php">Leave Status</a></li>
		<li><a href="password.php">ChangePassword</a></li>

		<li><a href="#">SELECT CITY</a>
			<ul>
				<li><a href="escut.php">THENI</a></li>
				<li><a href="history.php">PERIYAKULAM</a></li>
				<li><a href="leave.php">BODINAYAKANUR</a></li>
				<li><a href="slide.php">CUMBAM</a></li>
			</ul>
		</li>
		
		<li><a href="video2.php" >logout</a></li>
	</ul>
</div>
<!--<form id="levForm" >
  <h1>Steps To Apply Leave</h1>
  <h3>Here you can apply for the leave</h3>
  <h2>Just follow these steps:</h2>
  <h3>1.Select "Leave Application" from Navigation menu.</h3>
  <h3>2.Fill the form and "Click" apply.</h3>
  <h3>3.Check your status from "Leave Status" Navigation menu.</h3>
  <h3>4.You can "Logout" anytime you want.</h3>
  
</form>-->
</body>
</html>

		