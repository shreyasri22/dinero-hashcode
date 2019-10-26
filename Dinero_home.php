<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style>
		#div1{
			text-align:right;

			background-color: black;
			object-fit: fill;
		}
		#div2{
			text-align:center;
		}

		#aboutus{
			background-color:black;
			color:white;
			font-size:30px;
			padding-left: 25px;
			padding-right: 25px;
			padding-bottom:40px;

		}
		.buttons{
			-webkit-transition-duration: 0.4s;
             transition-duration: 0.4s;
             background-color:#00CED1;
             border-radius:20px;
             transition-duration: 0.5s;
             cursor:pointer;
             color:white;
             width:10em;
             height:4em;
             font-weight: 600;
             font-family: "Arial";
             border: none;


		}
		.buttons:hover{
			background-color:#7CFC00;
			color:black;
		}

		.buttons:focus{
			outline: none;
		}

		.btntext{
			font-size:15px;
		}




	</style>
</head>
<body style="background-color:black">
	<div id="div1">
		<a href="Login.html"><button name="login" class="buttons"><div class="btntext">Login</div></button></a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="Signup.html"><button name="signup" class="buttons"><div class="btntext">Sign Up</button></a>
	</div>
	<br/>
	<div id="div2">
		<img id="Dinero" alt ="Dinero" src="Dinero_black.png" height="350" width="450">
		<br/>
		<h3 style="text-align:center">About Us</h3>
		<div id="aboutus">
		<p>
			Our web application aims to handle the financial accounting of companies and organizatons i.e every transaction is recorded appropriately and monthly balance sheets, income statements and statements of cash flow are generated. The application also automatically takes care of tax expenses while generating the financial statements thus reducing the hassle of doing taxes manually. The transactions are recorded in accordance to the GAAP (Generally Accepted Accounting Principles) stated by the IASB.
		</p>



</body>
</html>
