<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
</head>
<body>

<div class="container">
  <h2 class="text-center">Registration Form</h2>
  
  <form action="insert.php" class="was-validated" method="POST">
    <div class="form-group">
      <label for="uname">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required pattern="^[a-zA-Z ]*$">
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Invalid</div>
    </div>

    <div class="form-group">
      <label for="uname">Mobile:</label>
      <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile" required pattern="[0-9]{10}">
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Invalid</div>
    </div>

    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password With 8 Or More Characters" name="password" required pattern="[0-9a-zA-z@!&*$#-+=]{8,}">
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Invalid</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I read Terms & conditions.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
