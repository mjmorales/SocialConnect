<?php // Example 26-2: header.php
  session_start();
$pb = 'public_user';
 echo "<html lang='en'>".
  "<head>".
    "<meta charset='utf-8'>".
    "<meta http-equiv='X-UA-Compatible' content='IE=edge'>".
    "<meta name='viewport' content='width=device-width, initial-scale=1'>".
    "<meta name='description' content=''>".
    "<meta name='author' content=''>".
    "<title></title>".
    "<!-- Bootstrap core CSS -->".
    "<link href='css/bootstrap.min.css' rel='stylesheet'>".
    "<link rel='stylesheet' href='styles.css' type='text/css'>".
    "<!-- Custom styles for this template -->".
    "<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->".
    "<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->".
    "<!--[if lt IE 9]>".
    "<script src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'></script>".
    "<script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>".
    "<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>".
    "<script src='js/bootstrap.min.js'></script>".
    "<script src='js/bootstrap.js'></script>".
    "<script src='javascript.js'></script>".
    "<![endif]-->";
  


  require_once 'functions.php';

  $userstr = ' (Guest)';

  if (isset($_SESSION['user']))
  {
    $user     = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr  = " ($user)";
  }
  else $loggedin = FALSE;

  echo "</head><body>";

  if ($loggedin)
  {
  echo "<div class='starter-template'>".
            "<div class='container'>".
                "<div class='btn-toolbar' role='toolbar'>".
                  "<a href='members.php?view=$user' class='btn btn-primary'>Home</a>".
                  "<a href='members.php' class='btn btn-primary'>Members</a>".
                  "<a href='friends.php' class='btn btn-primary'>Friends</a>".
                  "<a href='messages.php' class='btn btn-primary'>Messages</a>".
                  "<a href='publicwall.php?view=$pb' class='btn btn-primary'>Public Board</a>".
                  "<a href='profile.php' class='btn btn-primary'>Edit Profile</a>".
                  "<a href='logout.php' class='btn btn-primary'>Log out</a>".
                "</div>".
            "</div>".
        "</div>";     
}
  else
  {
    echo ("<br><ul class='menu'>" .
          "<li><a href='index.php'>Home</a></li>"                .
          "<li><a href='signup.php'>Sign up</a></li>"            .
          "<li><a href='login.php'>Log in</a></li></ul><br>"     .
          "<span class='info'>&#8658; You must be logged in to " .
          "view this page.</span><br><br>");
  }
?>
