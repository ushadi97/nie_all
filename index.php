<?php
/**
 * Created by PhpStorm.
 * User: kavin
 * Date: 8/27/2019
 * Time: 10:56 AM
 */
;?>

<!--suppress ALL -->
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



    <link href="CSS/styleshe.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="scroll.js"></script>



    <title>nie.lk</title>



</head>
<body >
<!--===========navbar================-->
<?php include '/main/headerNav.html';?>
<!--<include src="/main/headerNav.html"></include>-->



<!--==========image Slider==================-->

<div id="demo" class="carousel slide" data-ride="carousel" >
    <div class="carousel-caption">
        <h1 class="display-2" style="color: #fd9f1b">NATIONAL INSTITUTE OF EDUCATION</h1>
    </div>

    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner" >
        <div class="carousel-item active">
            <img width="100%" height="80%" src="image/graduate-school-doesnt-have-to-cost-a-fortune730x487.jpg" >
        </div>
        <div class="carousel-item">
            <img width="100%" height="80%" src="image/thumb-1920-872784.jpg" >
        </div>
        <div class="carousel-item">
            <img width="100%" height="80%" src="image/StudyingLifehackerU-zcilzb.jpg" >
        </div>
    </div>


    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>



<!--====Introduction=======-->
<div class="container-fluid" style="background-color: #ECF0F1;width: 70%">
    <h1 class="text-center">Welcome to NIE</h1>
    <p class="text" style="font-size: 19px" >The National Institute of Education (NIE), Sri Lanka is the prime institute in the country responsible for providing leadership for the development of general education with quality, equity and relevance in a pluralistic society.<br>The Institute is mandated to:
        </p>
    <ul>
        <li>design and develop curricula for general and teacher education.</li>
        <li> provide professional development of educational community.</li>
        <li>spearhead change through research and innovation.</li>
    </ul>
    <p class="text" style="font-size: 19px">The main purpose of creating the NIE was to establish a unique institute for capacity building of educational managers, teacher educators and teachers, design and develop school curricula and conduct policy research on education.</p>
</div>



<!--=======News Line & Video Gallery===========-->
<table class="table ">
    <thead>
    <tr>
        <th style="width: 70%;border-bottom: 1px solid #ff8a00;"><center><h3 class="course_title" itemprop="headline">NEWS LINE</h3></center></th>
        <th style="border-bottom: 1px solid #ff8a00"><center><h3 class="course_title" itemprop="headline">CALANDER</h3></center></th>
    </tr>
    </thead>
    <tr>
        <td>
            <div class="card-deck"><br/>
                <div class="card">
                    <img class="card-img-top" src="image/69812607_2352272778153719_6571075585198522368_o.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text" style="color: #F1C40F">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>

                            <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#myModal" style="font-size: 15px">Read More</button>

                            <!-- The Modal -->
                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title" style="color: red">News in Detail</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="color: #2f2f2f">
                                        Modal body..
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="image/69888399_2352272588153738_1936765805064617984_o.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text" style="color: #F1C40F">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

                        <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#myModal" style="font-size: 15px">Read More</button>

                        <!-- The Modal -->
                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title" style="color: red">News in Detail</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="color: #2f2f2f">
                                        Modal body..
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="image/69983228_2338759192838411_4648971462747619328_o.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text"style="color: #F1C40F">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

                        <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#myModal" style="font-size: 15px">Read More</button>

                        <!-- The Modal -->
                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title" style="color: red">News in Detail</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="color: #2f2f2f">
                                        Modal body..
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </td>
        <td>


            <time datetime="2014-09-20" class="icon">
                <em>Saturday</em>
                <strong>September</strong>
                <H5><a href="www.google.lk">google</a></H5>
                <span>20</span>
            </time>

        </td>
    </tr>

    </tbody>
</table>

<div class="container-fluid" style="width: 50%">
    <h2 class="course_title" itemprop="headline">Video Gallery</h2><br>
    <video class="video-fluid z-depth-1"  loop controls muted>
        <source src="Video/NIE_Bethi_Gee_2015.mp4" type="video/mp4" />
    </video><br><br>
    <button type="button" class="btn btn-outline-warning" style="font-size: 18px"><a href="http://localhost:63342/HCI/ransi/VideoGallery.html?_ijt=54888ff5gpur4g84g3b3a9vj3q">View More</a></button>

</div><br>


<button class="btn btn-dark scroll-top" id="myBtn" data-scroll="up" onclick="topFunction()" type="button">
    <i class="fa fa-chevron-up"></i>
</button>

<!--<div id="calendarDate1" class="calendarDate">
    <script>
        var date = new Date();
        document.getElementById("calendarDate1").innerHTML =date.toDateString();
    </script>
</div>-->

<script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>


<!--==========footer===============-->
<?php include '/main/footer.html';?>

</body>
</html>
