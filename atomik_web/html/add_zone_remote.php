<?php include 'script/database.php';?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
<title>Atomik Controller - Add Remote to Zone</title>
<link rel="stylesheet" href="css/atomik.css">
<script src="js/jquery-1.12.3.min.js"></script>
<script src="js/jquery.redirect.min.js"></script>
<?php 
// Set Default Error & Success Settings
$page_error = 0;
$page_success = 0;
$success_text = "";
$error = "";

// Set Command
$command = "";
$command = $_POST["command"];

if ( isset($_POST["zone_id"]) ) {
	$_zone_id = $_POST["zone_id"];
} else {
	$_zone_id = "";
}
?>
</head>
<nav class="navbar navbar-default navbar-inverse">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#"><img src="img/Sun_Logo_Menu_50px.gif" width="50" height="50" alt=""/></a></div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="dashboard.php">Dashboard</a> </li>
        <li><a href="settings.php">Settings</a> </li>
        <li><a href="devices.php">Devices</a> </li>
        <li><a href="remotes.php">Remotes</a> </li>
        <li class="active"><a href="zones.php">Zones<span class="sr-only">(current)</span></a> </li>
        <li><a href="tasks.php">Scheduled Tasks</a> </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a id="logoutbtn">Logout</a> </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<body>
<div class="wrapper">
<div class="PageTitle">
    <div class="row">
        <div class="PageNavTitle" >
          <h3>Add Remote to Zone</h3>
        </div>
    </div>
   </div><?php if ( $page_success || $page_error ) { ?><hr><?php } ?><?php if ( $page_success ) { ?><div class="alert alert-success">
  <strong>Success!</strong> <?php echo $success_text; ?>
</div><?php } ?><?php if ( $page_error ) { ?><div class="alert alert-danger">
  <strong>Danger!</strong> <?php echo $error_text; ?>
</div><?php } ?><hr>
  <br>
  <div class="container">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
   <form id="choosezremfrm" name="choosezremfrm" action="zone_details.php" method="post"><input name="zone_id" id="zone_id" type="hidden" value="<?php echo $_zone_id; ?>"><input name="command" id="command" type="hidden" value="add_remote">         
  <table class="table table-striped">
  <thead>
    <tr>
        <td width="200" >
         <h4><p>Please Select Remote:</p></h4>
        </td>
    </tr>  
  </thead>
    <tbody>
    <tr>
        <td ><p><select id="remote_id" name="remote_id" class="form-control">
        <?php
$sql = "SELECT atomik_remotes.remote_id, atomik_remotes.remote_name, atomik_remotes.remote_type FROM atomik_remotes;";
$remrs=$conn->query($sql);
if($remrs === false) {
	trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
} else {
  	$atomik_remotes = $remrs->num_rows;
  	$remrs->data_seek(0);
  	while($remrow = $remrs->fetch_assoc()){
	  	if ( $remrow['remote_type'] == 1 || $remrow['remote_type'] == 1 ) {
			$sql = "SELECT atomik_remote_channels.remote_channel_id FROM atomik_remote_channels WHERE atomik_remote_channels.remote_channel_remote_id=".$remrow['remote_id']." && atomik_remote_channels.remote_channel_zone_id=0;";
		  	$rchrs=$conn->query($sql);
		  	$_available_channels = 0;
		  	if($rchrs === false) {
			  	trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
		  	} else {
			  	$_available_channels = $rchrs->num_rows;
		  	}
		  	if ( $_available_channels > 0 ) {
			  	echo '<option value="'. $remrow['remote_id']. '">'.$remrow['remote_name'].'</option>';
		  	}
	  	} else { 
			echo '<option value="'. $remrow['remote_id']. '">'.$remrow['remote_name'].'</option>';
		}
	}
}
?></select></p></td>
      </tr>
      </tbody>
  </table></form>
</div>
<div class="col-xs-2"></div></div>
<div class="container">
<div class="col-xs-2"></div>
  <div class="col-xs-4 text-center"></div>
  <div class="col-xs-4 text-center"><p></p></div>
  <div class="col-xs-2"></div>
  </div>
  <?php if ( $page_success || $page_error ) { ?><hr><?php } ?><?php if ( $page_success ) { ?><div class="alert alert-success">
  <strong>Success!</strong> <?php echo $success_text; ?>
</div><?php } ?><?php if ( $page_error ) { ?><div class="alert alert-danger">
  <strong>Danger!</strong> <?php echo $error_text; ?>
</div><?php } ?><hr>
  <div class="container center">
  <div class="col-xs-2">
  </div>
  <div class="col-xs-1"><a href="zones.php"  class="btn-warning btn">Cancel</a>
  </div>
  <div class="col-xs-1"></div>
  <div class="col-xs-4">
  </div>
  <div class="col-xs-2 text-right"><a id="zoneremsubmitbtn" class="btn-success btn">Save</a>
  </div>
  <div class="col-xs-2">
  </div>
</div>
<hr>
<div class="push"></div>
 </div>
<div class="footer FooterColor">
     <hr>
      <div class="col-xs-12 text-center">
        <p>Copyright © Atomik Technologies Inc. All rights reserved.</p>
      </div>
      <hr>
    </div><script type="text/javascript">
    $("#logoutbtn").on('click', function() {
	$().redirect('logout.php', {'logout_title': 'Logout', 'description': 'You are now logged out of the Atomik Controller.'});
});
$("#zoneremsubmitbtn").on('click', function() {
	document.forms["choosezremfrm"].submit();
});
</script>
</body><?php
$rs->free();
$conn->close();
?>
</html>