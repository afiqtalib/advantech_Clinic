<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    *
    {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body
    {
        height: 100vh;
        display: grid;
        align-items: center;
        font-family: 'Poppins', sans-serif;
    }
    .contact-wrap
    {
        widows: 90%;
        height: auto;
        margin-top: 2%;
        margin-left:  10%;
        margin-right: 10%;
        display: flex;
        flex-wrap: wrap;
    }
    .contact-in
    {
        padding: 40px 30px;

    }
    .contact-in iframe
    {
    	widows: 100%;
        height: 500px;
    	width: 850px;
    	display: flex;
    	
    }

    .contact-in:nth-child(1)
    {
        flex: 30%;
        background: #337ab7;
        color: #fff;
    }
    .contact-in:nth-child(2)
    {
        flex: 45%;
        background: #FFFFFF;
    }
    .contact-in:nth-child(3)
    {
        flex: 25%;
        padding: 0;
    }
    .contact-in h1
    {
        font-size: 24px;
        color: #fff;
        text-transform: uppercase;
        font-weight: 500;
        margin-bottom: 20px;
    }
    .contact-in h2
    {
        font-size: 20px;
        font-weight: 400;
        margin-bottom: 15px;
    }
    .contact-in h2 i
    {
        font-size: 16px;
        width: 40px;
        height: 40px;
        margin-right: 10px;
        background: #f5f5f5;
        color: #000;
        border-radius: 50px;
        line-height: 40px;
        text-align: center;
    }
    .contact-in p
    {
        font-size: 14px;
        font-weight: 300;
        margin-bottom: 20px;
    }
    .contact-in ul
    {
        padding: 0;
        margin: 0;
    }
    .contact-in ul li
    {
        list-style: none;
        display: inline-block;
        margin-right: 5px;
        margin-top: 5px;
    }
    .contact-in ul li a 
    {
        display: block;
        width: 30px;
        height: 30px;
        text-align: center;
        background: #fff;
        border-radius: 50px;
    }
    .contact-in ul li a i
    {
        font-size: 14px;
        line-height: 30px;
        color: #000;
    }
    .contact-in form
    {
        width: 100%;
        height: auto;
    }
    .contact-in-input
    {
        width: 100%;
        height: 40px;
        margin-bottom: 20px;
        border: 1px solid #fff;
        outline: none;
        padding-left: 5px;
        background: transparent;
        color: #fff;
        font-size: 12px;
        font-weight: 300;
        font-family: 'Poppins', sans-serif;
    }
    .contact-in-input::placehoder
    {
        color: #fff;
    }
    .contact-in-textarea
    {
        width: 100%;
        height: 140px;
        margin-bottom: 20px;
        border: 1px solid #fff;
        outline: none;
        padding-top: 5px;
        padding-left: 5px;
        background: transparent;
        color: #fff;
        font-size: 12px;
        font-weight: 300;
        font-family: 'Poppins', sans-serif;
    }
    .contact-in-textarea::placehoder
    {
        color: #fff;
    }
    .contact-in-btn
    {
        width: 100%;
        height: 40px;
        border: 1px solid #fff;
        outline: none;
        background: transparent;
        color: #fff;
        font-size: 12px;
        font-weight: 300;
        font-family: 'Poppins', sans-serif;
        cursor: pointer;
    }
    .contact-in-btn ifram
    {
        width: 100%;
        height: 100%;
    }
    @media only screen and (max-width: 480px)
    {
        .contact-in:nth-child(1)
        {
            flex: 50%;
        }
        .contact-in:nth-child(2
        {
            flex: 50%;
        }
        .contact-in:nth-child(3)
        {
            flex: 100%;
        }
    }
        @media only screen and (max-width: 360px)
    {
        .contact-in:nth-child(1)
        {
            flex: 50%;
        }
        .contact-in:nth-child(2
        {
            flex: 50%;
        }
        .contact-in:nth-child(3)
        {
            flex: 100%;
        }
    }


</style>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>ADVANTECH DENTAL CLINIC</title>
        <!-- Bootstrap -->
        <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/style1.css" rel="stylesheet">
        <link href="assets/css/blocks.css" rel="stylesheet">
        <link href="assets/css/date/bootstrap-datepicker.css" rel="stylesheet">
        <link href="assets/css/date/bootstrap-datepicker3.css" rel="stylesheet">
        <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
        <!-- <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />  -->

        <!--Font Awesome (added because you use icons in your prepend/append)-->
        <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
        <link href="assets/css/material.css" rel="stylesheet">
    </head>
    <body>
        <!-- navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img alt="Brand" src="assets/img/alisa.png" height="120px"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <ul class="nav navbar-nav">
                            <li><a href="patient.php">Home</a></li>
                            <!-- <li><a href="profile.php?patientId=<?php echo $userRow['icPatient']; ?>" >Profile</a></li> -->
                            
                            <li>
                           <a href="restaurant.php">About Us</a>
                            </li>
                            
                            <li>
                                <a href="contact.php">Contact Us</a>
                             </li>
                        </ul>
                    </ul>
               
               
                </div><!-- col-md-6 offer Finish -->
               

                <div class="contact-wrap">
        <div class="contact-in">
            <h1>Contact Info</h1>
            <h2><i class="fa fa-phone" aria-hidden="true"></i>Phone</h2>
            <p>011-3960 7767</p>
            <h2><i class="fa fa-envelope" aria-hidden="true"></i>Email</h2>
            <p>alysacatsitter@gmail.com</p>
            <h2><i class="fa fa-map-marker" aria-hidden="true"></i>Address</h2>
            <p>Jalan Salim Baharu, Sg Danga, Johor Bahru, Malaysia</p>
            <ul>
                <li><a href="https://www.facebook.com/alysacatsitter"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                <li><a href="https://instagram.com/ilyasacatsitter?utm_medium=copy_link"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="https://ilyasa-cat-sitter-cat-hotel.business.site/#details"><i class="fa fa-chrome" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        
        <div class="contact-in">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.100289028378!2d100.65799901377763!3d4.20064374696246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cb2d01e16a29bb%3A0xddefcba321d273b!2sKlinik%20Pergigian%20Advantech!5e0!3m2!1sen!2smy!4v1643690239938!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
                    
                    
                    
                </div>
        </nav>
        <!-- navigation -->

        

        
        
        
        
        
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/date/bootstrap-datepicker.js"></script>
    <script src="assets/js/moment.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/collapse.js"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
    })
    </script>

   
</body>
</html>