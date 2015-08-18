<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>
<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Home page</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
</head>
<body>
<div id='fg_membersite_content'>
<h2>Home Page</h2>
Welcome back <?= $fgmembersite->UserFullName(); ?>!

<p><a href='change-pwd.php'>Change password</a></p>

<p><a href='access-controlled.php'>A sample 'members-only' page</a></p>
<br><br><br>
<p><a href='logout.php'>Logout</a></p>
</div>
</body>
</html> -->
<!DOCTYPE html>
<html lang='en'>
<head>
   <meta charset='utf-8'>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta property="og:title" content="Wilf Engel">
   <meta property="og:image" content="http://wilfengel.com/img/videocall.png">
   <meta property="og:description" content="Free English conversation sessions in return for your opinions">
   <meta name="description" content="Practice English for free in return for your opinions">
   <meta property="og:type" content="website">
   <meta property="og:url" content="http://wilfengel.com">
   <link href='http://fonts.googleapis.com/css?family=Itim|Catamaran:400,200' rel='stylesheet' type='text/css'>
   <!-- <link rel="stylesheet" href="css/normalize.css"> -->
   <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/main.css">
    <title>Login Home</title>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
           <div class="container-fluid">
              <div class="navbar-header">
                 <a class="navbar-brand" href="../index.php"><?php echo file_get_contents("../ico/WE.svg"); ?></a>
              </div>
              <div>
                 <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Project</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Resume</a></li>
                 </ul>
                 <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?= ucwords($fgmembersite->UserFullName()); ?></a></li>
                    <li><a href="#">Log out <span class="glyphicon glyphicon-log-out"></span></a></li>
              	</ul>
              </div>
           </div>
        </nav>

        <div class="container-fluid text-center">
        	<div class="row">
        		<div class="col-md-6 col-md-offset-3 pad-top">
        			<h1>Welcome <?= ucwords($fgmembersite->UserFullName()); ?>!</h1>
        			<p>I'll make some stuff for you to see soon...</p>
        		</div>
        	</div>
        </div>
    </body>
</html>