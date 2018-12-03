<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >

    <title>CRUD in Codeigniter!</title>
  </head>
  <body>
  	<div class="container">
  		<br><br>
	    <h3>Create your data</h3>
		<br>
		<form method="post" action="<?php echo base_url('Crud_controllers/index');?>">
		 <div class="col-4">

		<div class="form-group">
		    <label for="exampleFormControlInput1">First Name</label>
		    <input type="text" class="form-control" id="first_name" placeholder="Enter your first name">
		</div>

		<div class="form-group">
		    <label for="exampleFormControlInput1">Last Name</label>
		    <input type="text" class="form-control" id="last_name" placeholder="Enter your last name">
		</div>

		<div class="form-group">
		    <label for="exampleFormControlInput1">Email address</label>
		    <input type="email" class="form-control" id="email" placeholder="Enter your E-mail">
		</div>

		<div class="form-group">
		    <label for="exampleFormControlInput1">Phone Number</label>
		    <input type="text" class="form-control" id="phone" placeholder="Enter your phone number">
		</div>

		  </div>
		</form>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
  </body>
</html>