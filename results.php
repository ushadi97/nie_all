<?php
/**
 * Created by PhpStorm.
 * User: kavin
 * Date: 9/13/2019
 * Time: 9:57 AM
 */
;?>
<html lang = "en">
<head>
    <!-- Meta tags -->
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">

    <!-- Bootstrap CSS -->
    <link rel = "stylesheet"
          href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity = "sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin = "anonymous">

    <link href="CSS/resultstyle.css" rel="stylesheet" type="text/css" media="all" />
    <title>nie.lk</title>

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
<body>
<!--===========navbar================-->
<?php include '/main/headerNav.html';?>

<!--===========Breadcrumb==========-->

<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="http://localhost:63342/HCI/index.php?_ijt=e5rkeree1jicgnpa2aadj947t4#">Home</a></li>
    <li class="breadcrumb-item active">Results</li>
</ol>

<!--===========Result Form============-->
<div class="bg-image"></div>


<div class="bg-text" >
    <section class="container-fluid" style="position: absolute;" >

            <section class="row justify-content-center">
                <form class="form-container">
                    <h2>Results of the examinations</h2><br>
                    <p>Select the examination and enter one of following to get your results.</p>
                    <div class="form-group">
                        <label>Examination</label>
                        <select class="form-control">
                            <option>M.Ed.Entrance Examination 2017</option>
                            <option>B.Ed.2009/11 Part I</option>
                            <option>B.Ed.2011/13 Part II</option>
                            <option>B.Ed.2014 Part II Second List</option>
                            <option>B.Ed.2011/2013 Part III 2015-Freshers & Repeaters</option>
                            <option>Combined Results of B.Ed. 2011/13 (2016)</option>
                            <option>Final Results of the Diploma in Early childhood Development 2015/16</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Registration No.</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Registration No." required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Index number of Examination</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Index number" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">National Identity Card (NIC) No.</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="National Identity Card (NIC) No." required>
                    </div>
                    <button type="submit" class="btn btn-primary">Find Results</button>
                </form>
            </section>

    </section>

</div>



<!--==========footer===============-->
<?php include '/main/footer.html';?>



</body>
</html>
