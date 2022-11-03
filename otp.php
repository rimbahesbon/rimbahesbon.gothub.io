<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>OTP GENERATION AND VERIFICATION</title>
    </head>
<body>
<div class="login-box">
  	<div class="login-logo">
  		<b>ADMIN PANEL</b>
  	</div>
	<br>
  	<div class="login-box-body">
    	<p class="login-box-msg">Sign in to start your session</p>
    	<form action="phtotp" method="POST">
        <div class="form-group has-feedback">
        		<input type="text" class="form-control" name="name" placeholder="Enter your Name" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
    </br>
              <div class="form-group has-feedback">
        		<input type="txt" class="form-control" name="nun" placeholder="Enter your phone number" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
              <div class="form-group has-feedback">
        		<input type="submit" class="form-control" name="send otp" value="Send otp" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
			<br>
              <div class="form-group has-feedback">
        		<input type="text" class="form-control" name="otp" placeholder="Enter received otp" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
              <div class="form-group has-feedback">
        		<input type="submit" class="form-control" name="ver" value="verify otp" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
  </br>
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="username" placeholder="Username" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
      		</div>
    	</form>
  	</div>
  	
</body>

<footer>
<h3><center>Welcome to admin panel.<center></h3></footer>
</html>
</body>
</html>