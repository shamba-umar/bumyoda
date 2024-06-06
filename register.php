<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system </title>
  <link rel="stylesheet" type="text/css" href="stylee.css">
  
</head>
<body>
  <div class="header">
    <table class="table">
    <tr>
      <th scope="row"></th>
      <td colspan="2" class="table-active"></td>
      <td></td>
    </tr>
</table>
        <h2>MEMBERSHIP FORM WITH BUMYODA</h2>
        <h3>REGISTTRATION FORM</h3>
  </div>
        
  <form method="post" action="register.php">
        <?php include('errors.php'); ?>

        <div class="input-group">

          <label>Director/President/Chairman </label>                 <label>Date</label>
          <input type="text" name ="director/presdent/chairman" >      <input type="date" name="date">

          <label>Applicatian/Account holder's name:</label><input type ="text" name="application/accountholder'sname">

          <h3>PERSONAL FORM</h3>

          <label>Username</label>
          <input type="text" name="username" value="<?php echo $username; ?>">

          <label>Place of Birth</label>  <input type="text" name="placeofbirth">  <label>Date of Birth</label> <input type="date" name="date">

          <label>  Full Address</label>
          <input type="text" name="fulladdress">
          <label>Status:</label>

          <label class="container">single<input type="checkbox" checked="checked"><span class="checkmark"></span>
</label>

          <label class="container">Married</label><input type="checkbox"checked="checked" ><span class="checkmark"></span>

          <label>Nationality:</label><input type="text" name="nationality">

          <label> Post code</label><input type="text" name="postcode">
          <label>Religion:</label><input type="text" name="religion">
          
          <label>Driver Licence</label>
          <label class="container">Yes<input type="checkbox" checked="checked"><span class="checkmark">
            <label class="container">No<input type="checkbox" checked="checked"><span class="checkmark">

            <label>Gender</label>
          <label class="container">Male<input type="checkbox" checked="checked"><span class="checkmark">
            <label class="container">Female<input type="checkbox" checked="checked"><span class="checkmark">
        </div>
        <div class="input-group">
          <label>Email</label>
          <input type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
          <label>Password</label>
          <input type="password" name="password_1">
        </div>
        <div class="input-group">
          <label>Confirm password</label>
          <input type="password" name="password_2">
        </div>
        <div class="input-group">
          <button type="submit" class="btn" name="reg_user">Register</button>
        </div>
        <p>
                Already a member? of BUMYODA <a href="login.php">Sign in</a>
        </p>
  </form>
</body>
</html>