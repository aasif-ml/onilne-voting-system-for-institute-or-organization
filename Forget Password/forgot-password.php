
<?php
session_start();
error_reporting(0);
include('includes/config.php');
// Code for change password 
if(isset($_POST['change']))
    {
$newpassword=md5($_POST['newpassword']);
$empid=$_SESSION['empid'];

$con="update tblemployees set Password=:newpassword where id=:empid";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':empid', $empid, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();
$msg="Your Password succesfully changed";
}

?><!DOCTYPE html>
<html lang="en">
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="verification.js"></script>
	
	<script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"> 
    </script>
    <head>
        
        <!-- Title -->
        <title>Password Recovery</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">        

        	
        <!-- Theme Styles -->
        <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
  <style>
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
        </style>
        
    </head>
    <body>
        <div class="loader-bg"></div>
        <div class="loader">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-spinner-teal lighten-1">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mn-content fixed-sidebar">
            <header class="mn-header navbar-fixed">
                <nav class="cyan darken-1">
                    <div class="nav-wrapper row">
                        <section class="material-design-hamburger navigation-toggle">
                            <a href="#" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                                <span class="material-design-hamburger__layer"></span>
                            </a>
                        </section>
                        <div class="header-title col s3">      
                            <span class="chapter-title">Online Voting System</span>
                        </div>
                      
                           
                        </form>
                     
                        
                    </div>
                </nav>
            </header>
           
           
            <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">
                   
                  
                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion" style="">
                    <li>&nbsp;</li>
                    <li class="no-padding"><a class="waves-effect waves-grey" href="index.php"><i class="material-icons"></i>User Login</a></li>
                   
                
                       <li class="no-padding"><a class="waves-effect waves-grey" href="admin/"><i class="material-icons"></i>Admin Login</a></li>
                
                </ul>
          <div class="footer">
                    <p class="copyright"><a href="http://phpgurukul.com/">e-voting </a>©</p>
                
                </div>
                </div>
            </aside>
            <main class="mn-inner">
                <div class="row">
                    <div class="col s12">
                        <div class="page-title"><h4>Password Recovery</h4></div>

                          <div class="col s12 m6 l8 offset-l2 offset-m3">
                              <div class="card white darken-1">

                                  <div class="card-content ">
                                      <span class="card-title" style="font-size:20px;">User details</span>
                                         <?php if($msg){?><div class="succWrap"><strong>Success </strong> : <?php echo htmlentities($msg); ?> </div><?php }?>
                                       <div class="row">
                                           <form class="col s12" name="signin" method="post">
                                               <div class="input-field col s12">
                                                   <input id="empid" type="text" name="empid" class="validate" autocomplete="off" required >
                                                   <label for="email">Student USN</label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <input id="password" type="text" class="validate" name="emailid" autocomplete="off" required>
                                                   <label for="password">Email id</label>
                                               </div>
                                               <div class="col s12 right-align m-t-sm">
                                                
                                                   
												  <input type="submit" name="submit" id="submit" value="Reset" class="waves-effect waves-light btn teal">
                                               								   
																			   <script>  
	$mob=7204070532;
        $("#submit").click(function(event) { 
            $('#otp').val($mob); 
        }); 
    </script> 
											   </div>
											   
                                           </form>
                                      </div>
                                  </div>
								  
								   <script>  
	$mob=7204070532;
        $("#submit").click(function(event) { 
            $('#otp').val($mob); 
        }); 
    </script> 
								  
<?php if(isset($_POST['submit']))
{
$empid=$_POST['empid'];
$email=$_POST['emailid'];
$sql ="SELECT id FROM tblemployees WHERE EmailId=:email and EmpId=:empid";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':empid', $empid, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach ($results as $result) {
    $_SESSION['empid']=$result->id;
  } 
  /*$student_id = $_POST['empid'];
  $q = mysqli_query($conn, "SELECT Phonenumber FROM tblemployees WHERE id='$student_id'");

        $row = mysqli_fetch_array($q);

        if (empty($row)){
            echo "Error: Invalid product id";
        }else{
            $phone = $row['phone'];
          
  
  //$product=102;
  echo '<input type="number" name="phone" readonly value="'.$phone.'">';  */
  
  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "elms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
		$usn = $_POST['empid'];
$sql = "SELECT Phonenumber from tblemployees where Empid='$usn'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		echo '<input type="number" id="mobile" name="phone" readonly value="'.$row['Phonenumber'].'">';
		echo '<input type="button" class="btnSubmit" value="Send OTP"
				onClick="sendOTP();">';
    }
} else {
    echo "0 results";
}
$conn->close();

    ?>

 <div class="row">
          <span class="card-title" style="font-size:20px;"><b>change your password </b></span>                                     
    <form class="col s12" name="udatepwd" method="post">
  <div class="input-field col s12">
 <input id="password" type="password" name="newpassword" class="validate" autocomplete="off" required>
                                                <label for="password">New Password</label>
                                            </div>

<div class="input-field col s12">
<input id="password" type="password" name="confirmpassword" class="validate" autocomplete="off" required>
 <label for="password">Confirm Password</label>
</div>


<div class="input-field col s12">
<button type="submit" name="change" class="waves-effect waves-light btn indigo m-b-xs" onclick="return valid();">Change</button>

</div>
</div>
</form>
<?php } else{ ?>
<div class="errorWrap" style="margin-left: 2%; font-size:22px;">
 <strong>ERROR</strong> : <?php echo htmlentities("Invalid details");
}?></div>
<?php } ?>






                              </div>
                          </div>
                    </div>
                </div>
            </main>
            
        </div>
        <div class="left-sidebar-hover"></div>
        
        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/js/alpha.min.js"></script>
        
    </body>
</html>