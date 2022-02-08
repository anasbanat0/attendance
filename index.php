<?php
$title = "Home Page";
require_once 'includes/header.php';
require_once 'db/conn.php';
?>

<h1 class="text-center">Registration for IT Conference</h1>
<form method="POST" action="success.php">
  <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" class="form-control" id="firstname" name="firstname">
  </div>
  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="text" class="form-control" id="lastname" name="lastname">
  </div>
  <div class="form-group">
    <label for="dob">Date of Birth</label>
    <input type="date" class="form-control" id="dob" name="dob">
  </div>
  <div class="form-group">
    <label for="specialty">Area of Expertise</label>
    <select name="specialty" class="form-control" id="specialty">
      <option value="1">Database Admin</option>
      <option value="2">Software Developer</option>
      <option value="Web Administrator">Web Administrator</option>
      <option value="Other">Other</option>
    </select>
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="phone">Contact Number</label>
    <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp" name="phone">
    <small id="phoneHelp" class="form-text text-muted">We'll never share your phone number with anyone else.</small>
  </div>
  <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
</form>
<br><br><br>
<?php require_once 'includes/footer.php'; ?>