<!DOCTYPE html>
<html>
<head>
<title>Form</title>
<meta charset="UTF-8">

<style>
  div { width: 20rem; border: solid 2px #acacac; padding: 2rem; }
</style>

<script>

funtion validateFrom(){
	var x= document.forms["contact"]["firstName"].value;
	if (x === null || x === ""){
		alert("Name must be filled out");
		return false;
	}
}
</script>
</head>
<body>
<div><h2 style = "text-align:center">Contact Me</h2>
<form name="contact" action="confirm.php" method="POST">
<p>Your Name: <br>
<input type="text" name="firstName" ></p>
<p>Your E-mail: <br>
<input type="email" name="Email" required></p>
<p>Subject: <br>
<input type="text" name="Subject" /></p>
<p>Message:<br >
<textarea name="Message"></textarea></p>
<p><input type="reset" value="Clear Form" >&nbsp; &nbsp;
<input type="submit" name="Submit" value="Send Form" ></p>
</form>
</div>
</body>
</html>

