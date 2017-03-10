<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact - A&amp;A Dogwalking</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
 
 <script>
function validateForm() {
    var x = document.forms["myform"]["email"].value;
    var x1 = document.forms["myform"]["name"].value.trim();
    var x2 = document.forms["myform"]["tele"].value.trim();
    var x3 = document.forms["myform"]["msg"].value.trim();
  
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (!( /^[A-z ]+$/.test(x1))){
    	document.getElementById("error").innerHTML = "* Please enter your name"
            return false;
        }
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
    	document.getElementById("error").innerHTML = "* Please enter a valid email address"
        return false;
    }
    if (!( /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/.test(x2))){
    	document.getElementById("error").innerHTML = "* Please enter a valid phone number"
            return false;
        }
    if ( x3==null || x3==""){
    	document.getElementById("error").innerHTML = "* Please enter a message before submitting"
            return false;
        }

   
    

}
</script>

</head>

<body>
<?php
// define variables and set to empty values
$name = $email = $tele = $msg = "";
$suc="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

     $name = test_input($_POST["name"]);
     $email = test_input($_POST["email"]);
     $tele = test_input($_POST["tele"]);
     $msg = test_input($_POST["msg"]);
$emsg ="Name:" . $name ."\n". "Email:" . $email."\n"."Phone:" . $tele . "\n". "Message:" .$msg;
$st = mail("aawalkingtails@gmail.com","AADogwalking.com",$emsg); 

if (!$st){
$suc="We apologize your message was not sent due to some technical reason. Your message is important to us, please try reaching us through phone and we will take care of all your queries";
}
else{

$suc=" Thank you for contacting us! Your message was sent successfully and we will contact you as soon as possible";

} 


}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

    <div class="brand">A&amp;A Dogwalking</div>
    <div class="address-bar">Dog Walking Way,Lincoln RI 02865 US| 401-696-9552</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">A&amp;A Dogwalking</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
           <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="services.html">Services</a>
                    </li>
                    <li>
                        <a href="tips.html">Helpful Tips</a>
                    </li>
                     <li>
                        <a href="faq.html">FAQ</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-md-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>A&amp;A Dogwalking</strong>
                    </h2>
                    <p  style="color:Red;"><?php echo $suc;?></p>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d95012.9891407565!2d-71.51184845479364!3d41.911006980067086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x89e442207b0b85ef%3A0x492202eb4c18ab0e!2sLincoln%2C+RI!3m2!1d41.911012299999996!2d-71.4418101!5e0!3m2!1sen!2sus!4v1451027576146" ></iframe>
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>401-696-9552</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:aawalkingtails@gmail.com">aawalkingtails@gmail.com</a></strong>
                    </p>
                    <p>Address:
                        <strong>Dog Walking Way 
                            <br>Lincoln, RI 02865</strong>
                    </p>
                    <p>Open 24/7 365 days
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <p>  You can contact us through phone or by submitting the following form  
to start improving your dog's quality of life - and your own!.</p>
                    <form role="form" name="myform" onsubmit="return validateForm();" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label><span style="color:Red;">*</span>Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group col-lg-4">
                                <label><span style="color:Red;">*</span>Email Address</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group col-lg-4">
                                <label><span style="color:Red;">*</span>Phone Number</label>
                                <input type="tel" class="form-control" name="tele">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label><span style="color:Red;">*</span>Message</label>
                                <textarea class="form-control" rows="6" name="msg"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" >
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                               <div class="form-group col-lg-12" >
                               <p id="error" style="color:Red;"></p>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy;A&amp;A Dog Walking. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
