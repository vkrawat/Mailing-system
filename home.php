<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}


  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title>Home</title>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
	.header{
 margin-top: 20px;
	font-size: 50px;


}

</style>
  </head>
  <body>
      <div class="container">
    <div class="col-lg-12">
          <h2 class="text-center text-success header">Welcome <?php echo $_SESSION['username'];  ?></h2>
    <a href="logout.php" style="font-size: 20px;">logout</a>

<h2 class="header text-center">Mailing System</h2>
<div class="card">
<div class="card-body">
<form action="mail.php" method="post">
  <div class="form-group">
      <label>Email To</label>
    <input type="text" name="email" class="form-control" placeholder="Enter the email...">
  </div>
  <div class="form-group">
    <label>Message</label>
    <input type="text" name="msg"  class="form-control" placeholder="Enter the message...">
    </div>
  <button class="btn btn-success" name="submit" style="padding-top: 5px">Submit</button>
</form>
</div>
</div>
</div>
</div>

  	

  
  </body>
  </html>