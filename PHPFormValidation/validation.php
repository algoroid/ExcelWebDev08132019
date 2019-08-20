<?php
// define variables and set to empty values
$nameErr = $emailErr = $usernameErr = $passwordErr = $genderErr = "";
$name = $email = $username = $password = $comment = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	session_start();
	//Name
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    $_SESSION['name'] = htmlentities($_POST['name']);
  }
  
  //Email
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    $_SESSION['email'] = htmlentities($_POST['email']);
  }
    
  //Username  
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
    $_SESSION['username'] = htmlentities($_POST['username']);
  }

  //Password
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
    $_SESSION['password'] = htmlentities($_POST['password']);
  }

  //Comment
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
    $_SESSION['comment'] = htmlentities($_POST['comment']);
  }

  //Gender
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
    $_SESSION['gender'] = htmlentities($_POST['gender']);
    header('Location: validation2.php');
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Validation</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<style>
	.error {color: #FF0000;}
	body {
		background-image: url(lego1.jpg);
		height: 100%;
		background-position: center;
		background-size: cover;
	}
	.container {
	 background-color: rgba(244,164,96, 0.3);
	 float: right;
	 margin-right: 40px;
	 margin-top: 50px;
	 width: 440px;
	 border-radius: 25px;
	}
	label {
	color: white;
	 }
	</style>
</head>
<body>
<div class="container">
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">
	<h1 style="text-align: center; color: white; margin-top: 10px;">Validation</h1>
	<p><span class="error">* required field</span></p>
  <div class="form-group" style="padding: 15px; padding-top: 5px;">
      <label>Name: <span class="error">* <?php echo $nameErr;?></span></label>
      <div class="input-group">
      <input type="text" class="form-control" name="name" placeholder="Last/ First/ Middle/ Ext">
      </div>

      <label>Email: <span class="error">* <?php echo $emailErr;?></span></label>
      <div class="input-group">
      <input type="email" class="form-control" name="email" placeholder="example@example.com">
	  </div>
	  

      <label>Username: <span class="error">*<?php echo $usernameErr;?></span></label>
      <div class="input-group">
        <input type="text" class="form-control" name="username" placeholder="Username">
      </div>

      <label>Password: <span class="error">*<?php echo $passwordErr;?></span></label>
      <div class="input-group">
        <input type="password" class="form-control" name="password" placeholder="Password">
      </div>

      <label>Comment: </label>
      <div class="input-group">
        <textarea style="resize: none;" name="comment" rows="4" cols="60"></textarea>
      </div>

		<div class="form-group">
	  	<label style="margin-top: 10px;">Gender: <span class="error">* <?php echo $genderErr;?></span></label>
		<div class="btn-group btn-group-toggle" data-toggle="buttons" style="margin-top: 10px; margin-right: 10px;">
		  <label class="btn btn-primary">
		    <input type="radio" name="gender" value="Male" autocomplete="off"> Male
		  </label>
		  <label class="btn btn-danger">
		    <input type="radio" name="gender" value="Female" autocomplete="off"> Female
		  </label>
		    <label class="btn btn-warning">
		    <input type="radio" name="gender" value="Others" autocomplete="off"> Other
		  </label>
		</div>
	  </div>

  <button class="btn btn-success btn-block" type="submit" name="submit">Submit</button>
  </div>
</form>
</div>
</body>
</html>