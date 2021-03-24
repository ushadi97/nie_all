<?php 



?>

<!DOCTYPE html>
<html>
<head>

    <!-- Bootstrap CSS -->
    <link rel = "stylesheet"
          href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity = "sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin = "anonymous">

	<title>Application</title>
	<script src = "https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity =" sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin = "anonymous">
</script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="../js/application.js"></script>

	<link href="../CSS/button.css" rel="stylesheet" type="text/css" media="all" />
	<title>Application</title>
    <style>
        ol.breadcrumb li a {
            color: #F1C40F;
            text-decoration: none;
        }
        ol.breadcrumb li a:hover {
            color: #F7DC6F;
            text-decoration: underline;
        }
    </style>
</head>
<body style="background-color:#212529">
	<?php 
	include '../main/headerNav.html';
	?>

    <!--===========Breadcrumb==========-->

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="http://localhost:63342/HCI/index.php?_ijt=e5rkeree1jicgnpa2aadj947t4#">Home</a></li>
        <li class="breadcrumb-item active">Application</li>
    </ol>
<br>

<div class="col-lg-7 m-auto">
	<div class="container" style="border: 2px solid #ddd; background-color: #eee">
	<form method="post" id="form">
		<br><div>
			<div class="card-header" style="background-color: #fece4b">
				<h1 class="text-dark text-center">Application for Service Promotion</h1>
			</div><br>
			

			 <label>Name <span style="color: red;">*</span></label> 
			<input type="text" class="form-control" value="" id="name" ><br>

			 <label>Address <span style="color: red;">*</span></label> 
			<input type="text" name="address" id="address" class="form-control" value=""  ><br>

			 <label>Years of experience <span style="color: red;">*</span></label> 
			<input type="number" name="experience" class="form-control" id="experience" value="" pattern="[0-9]{2,2}" ><br>

			<label>Email <span style="color: red;">*</span></label> 
			<input type="text" name="email" class="form-control" type="Email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="someone@something.com"><br>

			 <label>Mobile <span style="color: red;">*</span></label> 
			<input type="number" name="mobile" id="mobile" class="form-control" placeholder="0777771234"><br>

			<label>Telephone</label>
			<input type="number" name="telephone" class="form-control" id="telephone" placeholder="0115781282">

            </div>
            <br>
          <div  class="row float-right">
			<div class="col-sm-5 float-right">
				<!-- <button class="btn btn-primary col-lg-12" type="submit" value="Submit">Save</button> -->
				<button class="btn btn-danger btn-md" type="reset" value="rest">Reset</button>
			</div>
			<div class="col-sm-5 float-right">
				<button class="btn btn-primary btn-md" type="submit" value="Submit">Save</button>
				<!-- <button class="btn btn-danger col-lg-12" type="reset" value="rest">Reset</button> -->
			</div>
            </div>
            <br><br>
		   
	</form>
	</div>
</div>

</div>

    <?php include '../main/footer.html';?>

<div><br><br><br></div>
</body>
</html>