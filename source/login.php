<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("login-home.php");
   }
}

?>
<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Login</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
</head> -->
<!doctype html>
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
       <title>Login</title>
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
                    <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
              </div>
           </div>
        </nav>

        <div class="container-fluid height-full">
            <div class="row pad-top">
                <div class="col-md-6 col-md-offset-3">
                    <form class="form-horizontal well" role="form"  id="login" action="<?php echo $fgmembersite->GetSelfScript(); ?>" method="post" accept-charset="UTF-8">
                        <fieldset>
                            <legend>Login</legend>

                            <input type="hidden" name="submitted" id="submitted" value="1"/>
                            <!-- <input type="text"  class="spmhidip" name="<?php echo $fgmembersite->GetSpamTrapInputName(); ?>" /> -->
                            <div class="text-danger"><?php echo $fgmembersite->GetErrorMessage(); ?></div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" value="<?php echo $fgmembersite->SafeDisplay('email') ?>" class="form-control" id="email" placeholder="Enter email" maxlength="50">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Password:</label>
                                <div class="col-sm-10" class='pwdwidgetdiv' id='thepwddiv'> 
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                                </div>
                            </div>
                            <div class="form-group"> 
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" name="Submit" value="Submit" class="btn btn-default">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

<!-- Form Code Start -->
<!-- <div id='fg_membersite'>
<form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Login</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='short_explanation'>* required fields</div>

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='username' >UserName*:</label><br/>
    <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
    <span id='login_username_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='password' >Password*:</label><br/>
    <input type='password' name='password' id='password' maxlength="50" /><br/>
    <span id='login_password_errorloc' class='error'></span>
</div>

<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>
<div class='short_explanation'><a href='reset-pwd-req.php'>Forgot Password?</a></div>
</fieldset>
</form> -->
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<!--<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("login");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("username","req","Please provide your username");
    
    frmvalidator.addValidation("password","req","Please provide the password");

// ]]>
</script>
</div>-->
<!--
Form Code End (see html-form-guide.com for more info.)
-->

	</body>
</html>