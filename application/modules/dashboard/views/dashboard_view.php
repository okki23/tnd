<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="assets/css/fullcalendar.css" />
<link rel="stylesheet" href="assets/css/matrix-style.css" />
<link rel="stylesheet" href="assets/css/matrix-media.css" />
<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">IDEA PROPOSAL AHM</a></h1>
</div>
<!--close-Header-part-->


 <!--close-top-Header-menu-->
<!--start-top-serch-->

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome <?php echo $_SESSION['username']; ?> </span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="javascript::void(0);"><i class="icon-user"></i> <?php echo "Your username : ".$_SESSION['username'];?></a></li>
        <li class="divider"></li>
        <li><a href="javascript::void(0);"><i class="icon-check"></i> <?php echo "Your Level : ".$_SESSION['level'];?></a></li>
        <li class="divider"></li>
        <li><a href="javascript::void(0);"><i class="icon-check"></i> <?php echo "Your Full Name : ".$_SESSION['namapegawai'];?></a></li>
        <li class="divider"></li>
        <li><a href="javascript::void(0);"><i class="icon-check"></i> <?php echo "Your NRP : ".$_SESSION['nrp'];?></a></li>
        <li class="divider"></li>
        <li><a href="<?php echo base_url('login/logout'); ?>"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
     
   
  </ul>
</div>
<div id="search">

 
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<?php
if($_SESSION['level'] == 'ahmic' || $_SESSION['level'] == 'kasie'){
?>

<div id="sidebar"><a href="<?php echo base_url('dashboard'); ?>" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="<?php echo base_url('dashboard'); ?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
     
     <li class="submenu"> <a href="javascript::void(0);"><i class="icon icon-th-list"></i> <span>Transaksi</span> </a>
      <ul>
        <li><a href="<?php echo base_url('idea_proposal'); ?>">Idea Proposal</a></li>
      
      </ul>
    </li>
 
  </ul>
</div>

<?php
}
?>

<?php
if($_SESSION['level'] == 'foreman'){
?>
  
  <div id="sidebar"><a href="<?php echo base_url('dashboard'); ?>" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="<?php echo base_url('dashboard'); ?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
     
     <li class="submenu"> <a href="javascript::void(0);"><i class="icon icon-th-list"></i> <span>Transaksi</span> </a>
      <ul>
        <li><a href="<?php echo base_url('idea_proposal'); ?>">Idea Proposal</a></li>
      </ul>
    </li>
 
  </ul>
  </div>

<?php
}
?>

<?php
if($_SESSION['level'] == 'karyawan'){
?>
  
  <div id="sidebar"><a href="<?php echo base_url('dashboard'); ?>" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="<?php echo base_url('dashboard'); ?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
      
     <li class="submenu"> <a href="javascript::void(0);"><i class="icon icon-th-list"></i> <span>Transaksi</span> </a>
      <ul>
        <li><a href="<?php echo base_url('idea_proposal'); ?>">Idea Proposal Form</a></li>
      
      </ul>
    </li>
 
  </ul>
  </div>
<?php
}
?>

<?php
if($_SESSION['level'] == 'admin'){
?>

<div id="sidebar"><a href="<?php echo base_url('dashboard'); ?>" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="<?php echo base_url('dashboard'); ?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
     <li class="submenu"> <a href="javascript::void(0);"><i class="icon icon-th-list"></i> <span>Master</span></a>
      <ul>
        <li><a href="<?php echo base_url('pegawai'); ?>">Pegawai</a></li>
        <li><a href="<?php echo base_url('user'); ?>">User</a></li>
      
      </ul>
    </li>
    
  </ul>
</div>

<?php
}
?>

<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
    <h1 align="center"> Selamat Datang di Portal Aplikasi Idea Proposal</h1>
    <h5 align="left">
    <!--
    $data['username'] = $this->session->userdata('username');
    $data['level'] = $this->session->userdata('level');
    $data['namapegawai'] = $this->session->userdata('namapegawai');
    $data['idpegawai'] = $this->session->userdata('idpegawai');
    $data['idkasie'] = $this->session->userdata('idkasie');
    $data['idforeman'] = $this->session->userdata('idforeman');
    $data['nrp'] = $this->session->userdata('nrp');
    -->
    <?php
    /*
    echo  "Your username : ".$_SESSION['username'];
    echo "<br>";
    echo  "Your level : ".$_SESSION['level'];
    echo "<br>";
    echo  "Your name : ".$_SESSION['namapegawai'];
    echo "<br>";
    echo  "Your ID NRP : ".$_SESSION['nrp'];
    echo "<br>";
    echo  "Your ID : ".$_SESSION['idpegawai'];
    echo "<br>";
    echo  "Your ID Kasie : ".$_SESSION['idkasie'];
    echo "<br>";
    echo  "Your ID Foreman : ".$_SESSION['idforeman'];
    */
    ?>
    </h5>
     
    </div>
<!--End-Action boxes-->

<!--Chart-box-->
    
<!--End-Chart-box-->
    <hr/>
 
  </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; Matrix Admin. Created by <a href="javascript::void(0);">Tri Nur Diansyah</a> </div>
</div>

<!--end-Footer-part-->

<script src="assets/js/excanvas.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.ui.custom.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.flot.min.js"></script>
<script src="assets/js/jquery.flot.resize.min.js"></script>
<script src="assets/js/jquery.peity.min.js"></script>
<script src="assets/js/fullcalendar.min.js"></script>
<script src="assets/js/matrix.js"></script>
<script src="assets/js/matrix.dashboard.js"></script>
<script src="assets/js/jquery.gritter.min.js"></script>
<script src="assets/js/matrix.interface.js"></script>
<script src="assets/js/matrix.chat.js"></script>
<script src="assets/js/jquery.validate.js"></script>
<script src="assets/js/matrix.form_validation.js"></script>
<script src="assets/js/jquery.wizard.js"></script>
<script src="assets/js/jquery.uniform.js"></script>
<script src="assets/js/select2.min.js"></script>
<script src="assets/js/matrix.popover.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/matrix.tables.js"></script>

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {

          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();
          }
          // else, send page to designated URL
          else {
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
