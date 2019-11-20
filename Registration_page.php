<!DOCTYPE html>
<html>
<head>
	<title>A Sign Up Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<p>PROJECT
		>></p>
    
	<div class="form">
		<h2>Sign Up Here</h2>
		<form>
			<input type="text" name="first" placeholder=" First Name" required="required">
			<input type="text" name="last" placeholder="Last Name" required="required">
			<input type="text" name="email" placeholder="Email" required="required">
			<input type="text" name="user" placeholder="Username" required="required">
			<input type="password" name="pass" placeholder="Password" required="required">
			<input type="submit" value="Submit" name="submit">
		</form>
	</div>



</body>
</html>
<!--This Is The End Of My HTML-->


<!--This Is The Begining Of My CSS-->

body
{
	background: url('background-blur.jpg');
	background-size: cover;
	font-family: Arial;
}
.form
{
	max-width: 350px;
	border-radius: 30px;
	margin: auto;
	background: rgba(0,0,0,0.8);
	box-sizing: border-box;
	padding: 50px;
	color: #fff;
	margin-top: 100px;
}
h2
{
	text-align:center; 
}
input[type=text],input[type=password]
{
	width: 100%;
	box-sizing: border-box;
	padding: 12px 5px;
	background: rgba(0,0,0,0.10);
	outline: none;
	border: none;
	border-bottom: 1px dotted #fff;
	color: #fff;
	border-radius: 5px;
	margin: 5px;
	font-weight: bold;
}
input[type=submit]
{
	width: 100%;
	box-sizing: border-box;
	padding: 10px 0;
	margin-top: 20px;
	outline: none;
	border: none;
	background: #60adde;
	opacity: 0.7;
	border-radius: 20px;
	color: #fff;
}
input[type=submit]:hover{
	background: #003366;
	opacity: 0.7;
}
p{
	width: 100px;
	height: 50px;
	background: red;
	text-align: center;
	font-size: 17px;
	font-family: segoe script;
	border-radius: 10px;
	position: relative;
	animation-name: project; 
	animation-duration: 3s; 
	animation-fill-mode: forwards; 
	animation-name: project;
	animation-duration: 3s;
	animation-fill-mode: forwards;
}

@keyframes project{
	from{top: 0px;}
	to{top: 200px; background: skyblue;}

}

@keyframes project{
	from{top: 0px;}
	to{top: 200px; background-color: skyblue;}
}

<!--This Is The End Of My CSS-->
