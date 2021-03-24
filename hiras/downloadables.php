
<?php
/**
 * Created by PhpStorm.
 * User: kavin
 * Date: 8/27/2019
 * Time: 10:56 AM
 */
;?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link href="../CSS/styleh.css" rel="stylesheet" type="text/css" media="all" />

  <style>
    option {background-color: #fff;color:black} </style>
    <title>Downloadables</title>
</head>
<body style="background-color:#212529">
  <?php include '../main/headerNav.html';?>
  <br>
  <div class="container col-xl-10 " style="background-color:#eee; border-bottom: 50px">
    <br>
    <div class="jumbotron vertical-center" style="background-image: url(http://www.dailynews.lk/sites/default/files/news/2016/06/28/z_p04-enigma.jpg); background-size: cover;height: 350px;">
    </div>
    

    <div class="card">
      <div class="card-header" style="background-color: #9c9c9c; border: 2px solid #BEBEBE">
        <span> Find Downloadables</span>
      </div>


      <div class="card-body" style="background-color: #eee;border: 2px solid #BEBEBE;height: 10rem">
        <div class="row">

          <div class="col-sm-4 text-center">
            <select id="type" class="col-xl-8  text-center btn btn-info" >
              <option selected="selected">Select a Category</option>
              <option value="2">Teacher's Guide</option>
              <option value="3">Syllabus</option>
            </select>
          </div>

          <div class="col-sm-4 text-center">
            
            <select id="Language" class="col-xl-8 text-center btn-info btn" >
              <option value="1" selected="selected" >Language</option>
              <option value="2">Sinhala</option>
              <option value="3">Tamil</option>
              <option value="4">English</option>
              </select>
            
              </div>
              <div class="col-sm-4" class="col-xl-8  text-center">
                <a class="btn btn-primary" onclick="javascript:find();" style="margin-left: 4rem;color:white" >Search</a>
              </div>

              <script type="text/javascript">

                function find() {
                  var e = document.getElementById("type");
                  var cattype = e.options[e.selectedIndex].value;

                  var d = document.getElementById("Language");
                  var lantype = d.options[d.selectedIndex].value;
                  console.log(cattype);
                  console.log(lantype);

                  var link;

                  if (cattype == 2 ) {
                    if (lantype == 2){
                      link = "teacherguid.php";
                      window.open(link, "_blank");
                    }else if (lantype == 3) {
                      link = "";
                      window.open(link, "_blank");

                    }else if (lantype == 4) {
                      console.log(lantype);
                      link = "find.php";
                      window.open(link, "_blank");
                    }
                    else {

                    }
                  } else if (cattype == 3) {
                    if (lantype == 2){

                    }else if (lantype == 3) {

                    }else if (lantype == 4) {
                      link = "Syllabus.php";
                      window.open(link, "_blank");

                    }
                    else {

                    }
                  }
                }

              </script>

            </div>
          </div>
        </div>
        <br>
      </div>
    </div>
  </div>
<br>
  <?php include '../main/footer.html';?>
</body>
<br>
</html>
