<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/colorpicker.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/uniform.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/select2.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/matrix-media.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-wysihtml5.css" />
<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part-->

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

<!--start-top-serch-->
 
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
        <li><a href="<?php echo base_url('idea_proposal'); ?>">Idea Proposal Form</a></li>
      
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
        <li><a href="<?php echo base_url('idea_proposal'); ?>">Idea Proposal Form</a></li>
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

<div id="content">
<div id="content-header">
  <div id="breadcrumb">   </div>
  <h1>Form User </h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
  <div class="span12">
   <form action="<?php echo base_url('user/pro_edit');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
  <div class="accordion" id="collapse-group">
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse"> <span class="icon"><i class="icon-circle-arrow-right"></i></span>
                <h5>Data User</h5>
                </a> </div>
            </div>
            <div class="collapse in accordion-body" id="collapseGOne">
              <div class="widget-content span6">
              <!--content here-->

                <div class="widget-content nopadding">

                  <div class="control-group">
                    <label class="control-label">Username :</label>
                    <div class="controls">
                    <input type="hidden" name="id" value="<?php echo $listing->id; ?>">
                   <input type="text" name="username" value="<?php echo $listing->username; ?>" id="username"   class="span11" />

                    </div>
                  </div>
                   <div class="control-group">
                    <label class="control-label">Password :</label>
                    <div class="controls"> 
					<span style="color:red; font-weight: bold;"> NB : JIKA TIDAK ADA PERUBAHAN PASSWORD , HARAP KOSONGKAN FIELD INI</span>
                      <input type="password" name="password" id="password"   class="span11" />
                    </div>
                  </div>
                   <div class="control-group">
                    <label class="control-label">Pegawai :  </label>
                    <div class="controls">
                      <select name="opt_pegawai" id="opt_pegawai">
                      
                      <?php
                      foreach ($opt_pegawai->result() as $val) {
					  if($val->id == $listing->id_pegawai){
						  echo "<option value=".$val->id." selected=selected> ".$val->nm_pegawai." </option>";
					  }else{
						  echo "<option value=".$val->id."> ".$val->nm_pegawai." </option>";
					  }
          }
					  ?>
					 
                     
                      
                    </select>
                    </div>
                  </div>
                   <div class="control-group">
                    <label class="control-label">Level:</label>
                    <div class="controls">
                      <select name="opt_level" id="opt_level">
                      <option value="">--</option>

                      <option value="1" <?php if($listing->level == 1) { echo "selected=selected"; } ?> >Kasie</option>

                      <option value="2" <?php if($listing->level == 2) { echo "selected=selected"; } ?> >Foreman</option>

                      <option value="3" <?php if($listing->level == 3) { echo "selected=selected"; } ?> >Karyawan</option>

                      <option value="4" <?php if($listing->level == 4) { echo "selected=selected"; } ?> >AHMIC</option>
                    </select>
                    </div>
                  </div>


                </div>
                <button type="submit" class="btn btn-primary"> Simpan </button>

              <!--content here-->
              </div>

            </div>


          </div>


  </div>
  </form>

  </div>

</div></div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; Matrix Admin. Created by <a href="javascript::void(0);">Tri Nur Diansyah</a> </div>
</div>
<!--end-Footer-part-->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.ui.custom.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-colorpicker.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.toggle.buttons.js"></script>
<script src="<?php echo base_url();?>assets/js/masked.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.uniform.js"></script>
<script src="<?php echo base_url();?>assets/js/select2.min.js"></script>
<script src="<?php echo base_url();?>assets/js/matrix.js"></script>
<script src="<?php echo base_url();?>assets/js/matrix.form_common.js"></script>
<script src="<?php echo base_url();?>assets/js/wysihtml5-0.3.0.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.peity.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-wysihtml5.js"></script>
<script>
	$('.textarea_editor').wysihtml5();
</script>
</body>
</html>
