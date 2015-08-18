<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('wilfengel.com');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('wilfengel@gmail.com');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'linguafrancaworldcom.ipagemysql.com',
                      /*username*/'wilfengel',
                      /*password*/'46BKRsT9Pnrp7L',
                      /*database name*/'project',
                      /*table name*/'accounts');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('asljicb7e9q7asdk92');

?>