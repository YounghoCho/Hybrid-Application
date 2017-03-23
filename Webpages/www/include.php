<?php
@ini_set("session.cookie_lifetime", "86400"); 
@ini_set("session.cache_expire", "86400"); 
@ini_set("session.gc_maxlifetime", "86400");
@session_start();
session_cache_limiter('private'); 

 
include ("./lib.php");
$connect = sql_connect($db_host, $db_user, $db_pass, $db_name);

?>
<head>
 <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/earlyaccess/hanna.css' >
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/jejugothic.css">
<style>
.table1 { font-family:'Hanna',serif; }

body { background-color:#fff8f2;}

 a.table2:link { font-size : 12px;  color : #666666;  text-decoration : none;   }
 a.table2:visited { font-size : 12px;  color : #666666;  text-decoration : none;   }
 a.table2:active { font-size : 12px;  color : #666666;  text-decoration : none;  }
 a.talbe2:hover { font-size :12px;  color : #666666;  text-decoration : none;   }

.table2 {
	font-size: 12px;
	color: #666666;
	font-weight:normal;
	width:100%;
}
.stitle{height:15px; color:#666666; font-size:11px; font-family:Tahoma, Verdana, MalgunGothic,"돋움", "굴림"; font-weight:bold; border-bottom:2px solid #cccccc}
.regtable {border-top:1px solid #eaeaea;}
.regtable td{border-bottom:1px solid #eaeaea; font-family:Tahoma, Verdana, MalgunGothic,"돋움", "굴림"; font-size:11px;}

.nts {width:20%;}
.cts {width:65%;}
.bts {width:15%;}

</style>
</head>

<body>
<center>
<hr style="margin:0%;border:none;">
<div>
    <a href="home.php"><img src="home6.png" width="36%"></a>
</div>
<hr style="margin:8%;border:none;">
</center>
</body>