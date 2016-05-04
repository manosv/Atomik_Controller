<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atomik Controller - Remotes</title>
<link rel="stylesheet" href="css/atomik.css">
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
        <li class="active"><a href="remotes.php">Remotes<span class="sr-only">(current)</span></a> </li>
        <li><a href="zones.php">Zones</a> </li>
        <li><a href="tasks.php">Scheduled Tasks</a> </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">Logout</a> </li>
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
        <div class="PageNavTitle" ><h3>Remotes</h3></div>
    </div>
   </div><hr><div class="alert alert-success">
  <strong>Success!</strong> Indicates a successful or positive action.
</div><div class="alert alert-danger">
  <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
</div>
<hr>

<div class="container center-block">
    <div class="col-xs-2"></div>
        <div class="col-xs-4">
           <h4><p>Remote List:</p></h4></div><div class="col-xs-4 text-right"><p><strong>Total Remotes: 4</strong></p><p><a href="add_remote.php" class="btn-primary btn">Add New Remote</a></p>  </div>
           <div class="col-xs-2"></div>
           </div><br>
           <div class="container center-block">
    <div class="col-xs-2"></div>
        <div class="col-xs-8">
  <table class="table table-striped">
    <thead>
      <tr>
        <td><b><center>Name</center></b></td>
        <td><b><center>Type</center></b></td>
        <td></td>
      </tr>
    </thead>
    <tbody>
    <tr>
        <td valign="bottom"><center>
          <p>Frank's Phone</p>
        </center></td>
        <td><center>
          <p>MiLight Smartphone Remote</p>
        </center></td>
        <td><center><p><a href="" class="btn-danger btn">Delete Remote</a></p></center></td>
      </tr>
      <tr>
        <td><center>
          <p>Chantel's Phone</p>
        </center></td>
        <td><center>
          <p>MiLight Smartphone Remote</p>
        </center></td>
        <td><center><p><a href="" class="btn-danger btn">Delete Remote</a></p></center></td>
      </tr>
      <tr>
        <td><center><p>Tablet</p></center></td>
        <td><center>
          <p>Atomik API Remote</p>
        </center></td>
        <td><center><p><a href="" class="btn-danger btn">Delete Remote</a></p></center></td>
      </tr>
      <tr>
        <td><center>
          <p>Backup Remote</p>
        </center></td>
        <td><center>
          <p>MiLight RGBW RF Remote</p>
        </center></td>
        <td><center><p><a href="" class="btn-danger btn">Delete Remote</a></p></center></td>
      </tr>
      </tbody>
  </table>
        
        </div><div class="col-xs-2"></div>
</div><div class="container center-block">
    <div class="col-xs-2"></div>
        <div class="col-xs-4">
           </div><div class="col-xs-4 text-right"><p><strong>Total Remotes: 4</strong></p><p><a href="add_remote.php" class="btn-primary btn">Add New Remote</a></p>  </div>
           <div class="col-xs-2"></div>
           </div><br>
  <hr><div class="alert alert-success">
  <strong>Success!</strong> Indicates a successful or positive action.
</div><div class="alert alert-danger">
  <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
</div><hr>
<div class="push"></div>
 </div>
<div class="footer FooterColor">
  
     <hr>
      <div class="col-xs-12 text-center">
        <p>Copyright © Atomik Technologies Inc. All rights reserved.</p>
      </div>
      <hr>
    </div>
</body>
</html>
