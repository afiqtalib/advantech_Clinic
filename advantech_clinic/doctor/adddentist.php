<?PHP
session_start();
include_once '../assets/conn/dbconnect.php';

// include_once 'connection/server.php';
if(!isset($_SESSION['doctorSession']))
{
header("Location: ../index.php");
}
$usersession = $_SESSION['doctorSession'];
$res=mysqli_query($con,"SELECT * FROM doctor WHERE doctorId=".$usersession);
$userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);




?>
<?php
$conn = mysqli_connect("localhost","root", "", "db_healthcare");

if(isset($_POST['regbtn'])){

    $IC = $_POST['icDoctor'];
    $Pass = $_POST['Password'];
    $ID = $_POST['doctorId'];
    $FName = $_POST['FirstName'];
    $LName = $_POST['LastName'];
    $Address = $_POST['Address'];
    $PhoneNum = $_POST['phonenum'];
    $Email = $_POST['Email'];
    $DOB = $_POST['DOB'];
    

    $d = "SELECT * FROM doctor WHERE doctorEmail = '$Email'";
    $results = mysqli_query($conn, $d);
    $a = mysqli_fetch_assoc($results);
    


        $reg= "INSERT INTO doctor (icDoctor, password, doctorId, doctorFirstName, doctorLastName, doctorAddress, doctorPhone, doctorEmail, doctorDOB) VALUES ('$IC', '$Pass', '$ID', '$FName', '$LName', '$Address', '$PhoneNum', '$Email','$DOB')";
        mysqli_query($conn, $reg);
        // echo "Registration Successful";
    
        echo '<script type="text/JavaScript">   
        alert("Registration Successful"); 
        window.location.replace("adddentist.php"); 
        </script>' ;
    
}
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Advantech Dental Clinic</title>
        <!-- Bootstrap Core CSS -->
        <!-- <link href="assets/css/bootstrap.css" rel="stylesheet"> -->
        <link href="assets/css/material.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="assets/css/sb-admin.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
        <!-- Custom Fonts -->
    </head>
    <style>
    body{
        background-image: url('');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    </style>
    <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="doctordashboard.php">ORAAS - ONLINE REGISTRATION AND APPOINTMENT SYSTEM</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $userRow['doctorFirstName']; ?> <?php echo $userRow['doctorLastName']; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="doctorprofile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                            </li>
                           
                            <li class="divider"></li>
                            <li>
                                <a href="logout.php?logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
     <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li>
                            <a href="doctordashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
                         <li>
                            <a href="addstaff.php"><i class="fa fa-fw fa-edit"></i> Add Staff</a>
                        </li>
                        <li>
                            <a href="stafflist.php"><i class="fa fa-fw fa-edit"></i> Staff List</a>
                        </li>
                        <li class="active">
                            <a href="adddentist.php"><i class="fa fa-fw fa-edit"></i> Add Dentist</a>
                        </li>
                        <li>
                            <a href="dentistlist.php"><i class="fa fa-fw fa-edit"></i> Dentist List</a>
                        </li>
                        <li>
                            <a href="addschedule.php"><i class="fa fa-fw fa-table"></i> Doctor Schedule</a>
                        </li>
                        <li>
                            <a href="patientlist.php"><i class="fa fa-fw fa-edit"></i> Patient List</a>
                        </li>
                        
                    </ul>
                </div>
    <!--staff-->
        
            <!-- navigation end -->


            <div id="page-wrapper">
                <div class="container-fluid">
                    <center><div class="add-dentist">
                    <form action="adddentist.php" class="form" method="post">
                        <h2>Dentist Details Form</h2>
                        <?php if (isset($_GET['error'])) { ?>
                            <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php } ?>
                        <div class="input-group">
                            <label for="loginUser1">IC Dentist:</label>
                            <input type="text" name="icDoctor" id="icDoctor" required>
                        </div>
                        <div class="input-group">
                            <label for="loginUser2">Password:</label>
                            <input type="password" name="Password" id="Password" required>
                        </div>
                        <div class="input-group"> 
                            <label for="doctorId">Dentist ID:</label>
                            <input type="text" name="doctorId" id="doctorId" required>
                        </div>
                        <div class="input-group">
                            <label for="loginUser3">First Name: </label>
                            <input type="text" name="FirstName" id="FirstName" required>
                        </div>
                        <div class="input-group"> 
                            <label for="phonenum">Last Name:</label>
                            <input type="text" name="LastName" id="LastName" required>
                        </div>
                        <div class="input-group">
                            <label for="signPass">Address:</label>
                            <input type="text" name="Address" id="Address" required>
                        </div>
                        <div class="input-group">
                            <label for="signPass">Phone Number:</label>
                            <input type="text" name="phonenum" id="phoneNum" required>
                        </div>
                        <div class="input-group">
                            <label for="signPass">Email:</label>  
                            <input type="text" name="Email" id="Email" required>
                        </div>
                        <div class="input-group">
                            <label for="signPass">Date Of Birth:</label>
                            <input type="date" name="DOB" id="DOB" required>
                        </div>
                        

                        <button type="submit" name="regbtn" class="submit-btn">Add</button>
                    </form>

                    <div class="panel-body">
                        <!-- Table -->

                        <!-- Page Heading end-->

                        <!-- panel start -->
                        <div class="panel panel-primary filterable">
                            <!-- Default panel contents -->
                            <div class="panel-heading">
                                <h3 class="panel-title">copyright serve @AdvantechDentalClinic</h3>
                            </div>
                        </div>
                    </div></center>
                </div>

                <!-- panel end -->
                <script type="text/javascript">
                    function chkit(uid, chk) {
                        chk = (chk==true ? "1" : "0");
                        var url = "checkdb.php?userid="+uid+"&chkYesNo="+chk;
                        if(window.XMLHttpRequest) {
                            req = new XMLHttpRequest();
                        } else if(window.ActiveXObject) {
                            req = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        // Use get instead of post.
                        req.open("GET", url, true);
                        req.send(null);
                    }
                </script>
            </div>
                <!-- /.container-fluid -->
            </div>
                    <!-- /#wrapper -->


       
        <!-- jQuery -->
        <script src="../patient/assets/js/jquery.js"></script>
        
        <!-- Bootstrap Core JavaScript -->
        <script src="../patient/assets/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-clockpicker.js"></script>
        <!-- Latest compiled and minified JavaScript -->
         <!-- script for jquery datatable start-->
        <!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy/mm/dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
<script type="text/javascript">
    $('.clockpicker').clockpicker();
</script>
 <script type="text/javascript">
$(function() {
$(".delete").click(function(){
var element = $(this);
var id = element.attr("id");
var info = 'id=' + id;
if(confirm("Are you sure you want to delete this?"))
{
 $.ajax({
   type: "POST",
   url: "deleteschedule.php",
   data: info,
   success: function(){
 }
});
  $(this).parent().parent().fadeOut(300, function(){ $(this).remove();});
 }
return false;
});
});
</script>
<script type="text/javascript">
            /*
            Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
            */
            $(document).ready(function(){
                $('.filterable .btn-filter').click(function(){
                    var $panel = $(this).parents('.filterable'),
                    $filters = $panel.find('.filters input'),
                    $tbody = $panel.find('.table tbody');
                    if ($filters.prop('disabled') == true) {
                        $filters.prop('disabled', false);
                        $filters.first().focus();
                    } else {
                        $filters.val('').prop('disabled', true);
                        $tbody.find('.no-result').remove();
                        $tbody.find('tr').show();
                    }
                });

                $('.filterable .filters input').keyup(function(e){
                    /* Ignore tab key */
                    var code = e.keyCode || e.which;
                    if (code == '9') return;
                    /* Useful DOM data and selectors */
                    var $input = $(this),
                    inputContent = $input.val().toLowerCase(),
                    $panel = $input.parents('.filterable'),
                    column = $panel.find('.filters th').index($input.parents('th')),
                    $table = $panel.find('.table'),
                    $rows = $table.find('tbody tr');
                    /* Dirtiest filter function ever ;) */
                    var $filteredRows = $rows.filter(function(){
                        var value = $(this).find('td').eq(column).text().toLowerCase();
                        return value.indexOf(inputContent) === -1;
                    });
                    /* Clean previous no-result if exist */
                    $table.find('tbody .no-result').remove();
                    /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
                    $rows.show();
                    $filteredRows.hide();
                    /* Prepend no-result row if all rows are filtered */
                    if ($filteredRows.length === $rows.length) {
                        $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
                    }
                });
            });
        </script>

    </body>
        </body>
</html>
