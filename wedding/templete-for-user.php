<?php

require("../session.php");

$con=mysqli_connect("localhost", "root", "", "wedding_invi");

$user_id=$_SESSION['isloginid'];

$InfoSQL = mysqli_query($con, "SELECT * FROM tamplate_info WHERE user_id = '$user_id' ");
$form_rows = mysqli_fetch_assoc($InfoSQL);

$time = $form_rows['m_time'].intval($form_rows['m_time']) < 12 ? 'AM' : 'PM';


 if($form_rows['reception'] == "Yes" ){ 
    $rec = '<div class="col-md-4">
        <div class="userfield invite text-center">

            <h3>Reception <span></span></h3>
            <p> 23/05/2022 10:00 Am Onwards</p>
            <h4 class="fs15 fw600 lh26">At Home,<br> West Godavari,AP.</h4>

            <p class="fs15">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some <a href="javascript:void(0)"> Red More...</a></p>

        </div>
    </div>';
    }else{ 
        $Vindhu = '<div class="col-md-4">
        <div class="userfield invite text-center">

            <h3>Vindhu <span></span></h3>
            <p> 23/05/2022 11:30 Am Onwards</p>
            <h4 class="fs15 fw600 lh26">At Home,<br> West Godavari,AP.</h4>

            <p class="fs15">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some <a href="javascript:void(0)"> Red More...</a></p>

        </div>
    </div>';
    }

//show weeding images
 $wedingImg = $form_rows['wee_imgs'];

$wedingImg = explode(',' , $wedingImg);


echo '<!DOCTYPE html>

<html lang="en">

<head>
    <title>Harun Manshi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,300,300italic,400italic,700italic">
</head>

<body>
    <section class="header">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="info-img/'.$form_rows['slider_img1'].'" style="width:100%">
                </div>

                <div class="item">
                    <img src="info-img/'.$form_rows['slider_img2'].'" style="width:100%">
                </div>

            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="fa fa-angle-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="fa fa-angle-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="datafield text-center">
                        <img src="img/oval.png">
                        <div class="text">
                            <h3>Save the Date</h3>
                            <p>'.$form_rows['m_date'].'</p>
                        </div>

                        <h1>'.$form_rows['g_name'].' <span>&</span> '.$form_rows['b_name'].'</h1>

                        <p class="getting">ARE GETTING MARRIED!</p>

                    </div>
                </div>
            </div>
        </div>


    </section>
    <section class="logo">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <img src="img/logo.png">
                </div>
            </div>
        </div>
    </section>
    <section class="users">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div class="userfield text-center">
                            <img src="info-img/'.$form_rows['g_img'].'">
                            <h3>'.$form_rows['g_name'].'</h3>
                            <p>( D/o Mr. Prakash & Mrs. Shanti )</p>
                            <p class="major">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by</p>

                            <ul>
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="userfield invite text-center">

                            <h3>INVITATION</h3>
                            <p>We inviting you and your family on</p>
                            <h4>'.$form_rows['m_day'].'</h4>
                            <p class="jan_n">'.$form_rows['m_date'].'</p>
                            <p>Mymarriage Convention Hall,West Godavari,AP.</p>

                        </div>


                        <img src="img/user.png" class="varia_img">
                    </div>
                    <div class="col-md-4">
                        <div class="userfield text-center">
                            <img src="info-img/'.$form_rows['b_img'].'">
                            <h3>'.$form_rows['b_name'].'</h3>
                            <p>( S/o Mr. Pradeep & Mrs. vani )</p>
                            <p class="major">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by</p>

                            <ul>
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="count">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4 padd-0">
                        <p>We Are Waiting For...</p>
                        <h3>The <span>Adventure</span></h3>
                    </div>
                    <!-- Styles -->
                    <div class="col-md-8">
                        <!-- Display the countdown timer in an element -->
                        <p id="demo"></p>

                        <script>
                            // Set the date we"re counting down to
                            var countDownDate = new Date("may 21, 2022 9:00:00").getTime();

                            // Update the count down every 1 second
                            var x = setInterval(function() {

                                // Get today"s date and time
                                var now = new Date().getTime();

                                // Find the distance between now and the count down date
                                var distance = countDownDate - now;

                                // Time calculations for days, hours, minutes and seconds
                                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                // Display the result in the element with id="demo"
                                document.getElementById("demo").innerHTML = days + "d  " + hours + "h " +
                                    minutes + "m " + seconds + "s ";

                                // If the count down is finished, write some text
                                if (distance < 0) {
                                    clearInterval(x);
                                    document.getElementById("demo").innerHTML = "EXPIRED";
                                }
                            }, 1000);
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="users">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>THE WEDDING EVENT</h1>
                    <img src="img/pot1.png" class="pot1">
                </div>
                <div class="col-md-12 event_lin">
                    <div class="col-md-4">
                        <div class="userfield invite text-center">

                            <h3>Marriage<span></span></h3>
                            <p> '.$form_rows['m_date'].' '.$form_rows['m_time'].' '.$time.'</p>
                            <h4 class="fs15 fw600 lh26">Mymarriage Convention Hall,<br> West Godavari,AP</h4>

                            <p class="fs15">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some <a href="javascript:void(0)"> Red More...</a></p>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="img/1.png" class="invi_img">
                    </div>


                    //if recption and
                  '. $rec .'
                  // Vindhu shown
                  '. $Vindhu .'


                </div>
            </div>
        </div>
    </section>
    <section class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>PRE-WEDDING PHOTOSHOOT</h1>
                    <img src="img/pot1.png">
                </div>
                <div class="col-md-12" style="margin-top: 35px;">
                    <div class="wedd_gal">';?>

<?php 

                  
                   foreach($wedingImg as $value){
                    
                        echo ' <div class="column"><img src="info-img/'.$value.'"></div>';
                      
                   }
 ?>        
 
 
                      <?php  echo '</div>
                </div>
            </div>
    </section>
    <section class="valvidi">
        <img src="img/bg3.jpg">
    </section>
    <section class="family">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>LOVABLE FAMILY</h1>
                    <img src="img/pot1.png" class="pot1">
                    
                </div>

                <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <div class="move_sign">
                        <img src="info-img/'.$form_rows['g_img'].'" style=" width: 100px;
                        border-radius: 94%;
                        height: 100px;
                        flex: 50%;">
                        <img src="info-img/'.$form_rows['b_img'].'" style=" width: 100px;
                        border-radius: 94%;
                        height: 100px;
                        flex: 50%;">
                        <div class="border" style="border: 2px solid #fff;
                        width: 70%;
                        flex: 87%;
                        float: left;
                        overflow: hidden;
                        position: absolute;
                        margin-top: -58px;    margin-left: 19%;"></div>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="fa fa-angle-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="fa fa-angle-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div>
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-md-3">
                                    <div class="invite text-center">
                                        <img style="height: 107px;border-radius: 100%;" src="info-img/'.$form_rows['family_g_father_img'].'">
                                        <h2> </h2>
                                        <p> </p>
                                        <ul>
                                            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                        </ul>

                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="invite text-center">
                                    <img style="height: 107px;border-radius: 100%;" src="info-img/'.$form_rows['family_g_mother_img'].'">
                                        <h2> </h2>
                                        <p> </p>
                                        <ul>
                                            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="invite text-center">
                                    <img style="height: 107px;border-radius: 100%;" src="info-img/'.$form_rows['family_b_father_img'].'">
                                        <h2> </h2>
                                        <p> </p>
                                        <ul>
                                            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="invite text-center">
                                    <img style="height: 107px;border-radius: 100%;" src="info-img/'.$form_rows['family_b_mother_img'].'">
                                        <h2> </h2>
                                        <p> </p>
                                        <ul>
                                            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7"></div>
                    <div class="col-md-5">
                        <ul>
                            <li>
                                <div class="contact-detail">
                                    <div class="det_img">
                                        <img src="img/map.svg">
                                    </div>
                                    <div class="detail">
                                        <h4>Location</h4>
                                        <p>Mymarriage Convention Hall,West Godavari,AP,INDIA</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-detail">
                                    <div class="det_img">
                                        <img src="img/mail.svg">
                                    </div>
                                    <div class="detail">
                                        <h4>Email</h4>
                                        <p>'.$form_rows['email'].'
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-detail">
                                    <div class="det_img">
                                        <img src="img/phone.svg">
                                    </div>
                                    <div class="detail">
                                        <h4>Phone</h4>
                                        <p>'.$form_rows['phone'].' </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <i class="fa fa-angle-up" aria-hidden="true"></i>
                    <p>Copyright 2020-21 All Right Reserved - Design by mymarriageinvitation.com</p>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>

    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 20) {
                    $("#toTopBtn").fadeIn();
                } else {
                    $("#toTopBtn").fadeOut();
                }
            });

            $("#toTopBtn").click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 1000);
                return false;
            });
        });
    </script>
</body>

</html>
';

?>
