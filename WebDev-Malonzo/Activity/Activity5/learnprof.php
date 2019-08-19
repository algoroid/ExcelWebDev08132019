<!DOCTYPE html>
<html>
<head>
	<title>System Information</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdS  JQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<h1>LEARNER'S PROFILE</h1>
<form action="learnprofout.php" method="GET">
  <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" name="fname" placeholder="Enter First Name" required>
  </div>
   <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control" name="lname" placeholder="Enter Last Name" required>
  </div>
   <div class="form-group">
    <label for="birthday">Birthday</label>
    <input type="date" class="form-control" name="bday" placeholder="Enter Birthday" required>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="adrs" placeholder="Enter Address" required>
  </div>
   <div class="form-group">
    <label for="email address">Email</label>
    <input type="email" class="form-control" name="eml" placeholder="Enter Email" required>
  </div>
   <div class="form-group">
    <label for="contactnumber">Contact Number</label>
    <input type="tel" class="form-control" name="cnum" placeholder="Enter Contact Number" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" required>
  	<span>Format: 09XX-XXX-XXXX </span>
  </div>
  <button type="submit" name='submit' class="btn btn-primary">Submit</button>
</form>
</body>
</html>