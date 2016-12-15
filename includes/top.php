<?php include ("switch.php");?>

<!DOCTYPE html>
<html>
<head>
<title><?=$myTitle?></title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<link href='https://fonts.googleapis.com/css?family=Delius+Swash+Caps' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/fp.css" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!--[if lt IE 9]>
   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
</head>
    
<body>
<header> 
    <img src="images/cornerstone_placeholder.gif" class="icon" alt="A placeholder cornerstone image. Labeled for reuse." />
    
    <!--<img src="icons/Logo-Black-41px-TM.png" class="social" alt="LinkedIn link icon" />-->
    
    
    <a href="https://www.linkedin.com/in/aimeeelber" target="_blank">
<img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_viewmy_160x25.png" width="160" height="25" border="0" class="social" alt="View Aimee Elber's profile on LinkedIn.">
        </a>
    
    
    <a href="mailto:aimee.j.elber@gmail.com ">
    <img src="icons/email.png" class="email" alt="Email link icon." />
    </a>
        
  <!-- <h2 class="pageid">Home Page</h2> -->
  <h3><a href="index.php">Cornerstone Consulting</a></h3>
  <!-- START NAVIGATION (Main) -->
    
    
  <nav class="main center">
    <ul>
    <?php echo makeLinks($nav1);?> 
    </ul>
  </nav>
    
  <!-- END NAVIGATION (Main) --> 
</header>