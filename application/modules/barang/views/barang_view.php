<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $judul; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Avant">
    <meta name="author" content="The Red Team">

    
    <!-- <link href="assets/less/styles.less" rel="stylesheet/less" media="all">  -->
    <link rel="stylesheet" href="assets/css/styles.css?=121">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>

     
        <link href='assets/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='styleswitcher'> 
    
            <link href='assets/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='headerswitcher'> 
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
    <!--[if lt IE 9]>
        <link rel="stylesheet" href="assets/css/ie8.css">
        <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
        <script type="text/javascript" src="assets/plugins/charts-flot/excanvas.min.js"></script>
    <![endif]-->

    <!-- The following CSS are included as plugins and can be removed if unused-->

<link rel='stylesheet' type='text/css' href='assets/plugins/datatables/dataTables.css' /> 
<link rel='stylesheet' type='text/css' href='assets/plugins/codeprettifier/prettify.css' /> 
<link rel='stylesheet' type='text/css' href='assets/plugins/form-toggle/toggles.css' /> 

<!-- <script type="text/javascript" src="assets/js/less.js"></script> -->
    
</head>

<body class="">

 

    <?php 
    $this->load->view('header');
    ?>

    <div id="page-container">


    <?php
    $this->load->view('sidebar');
    ?>

        
   
 <div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            

            <h1>Master Barang</h1>
            <div class="options">
                 
            </div>
        </div>


        <div class="container">
            <div class="row">
              <div class="col-md-12">
                    <div class="panel panel-sky">

                        <div class="panel-heading">

                            <h4>List Data Barang</h4>

                            <div class="options">   
                                <a href="javascript:;"><i class="fa fa-cog"></i></a>
                                <a href="javascript:;"><i class="fa fa-wrench"></i></a>
                                <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                            </div>
                        </div>

                        <div class="panel-body collapse in">
                         <a href ="<?php echo base_url('barang/add'); ?>" class="btn btn-xs btn-primary">  + Add </a> 
                         <br>
                         &nbsp; 
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                                <thead>
                                    <tr>
                                        <th>Part Number</th>
                                        <th>Nama Barang</th>
                                        <th>Gudang</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                foreach ($listing->result() as $row) {
                                ?>

                                    <tr class="odd gradeX">
                                        <td><?php echo $row->part_number; ?></td>
                                        <td><?php echo $row->nama; ?></td>
                                        <td><?php echo $row->nama_gudang; ?></td>
                                        <td>
                                            <a href ="<?php echo base_url('barang/edit/'.$row->id); ?>" class="btn btn-xs btn-warning"> Edit </a> &nbsp; 
                                            <a href = "<?php echo base_url('barang/delete/'.$row->id); ?>" class="btn btn-xs btn-danger"> Delete </a>
                                        </td>
                                    </tr>
                                <?php     
                                }
                                ?>
                                    
                                        
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->

<?php
$this->load->view('footer');
?>

</div> <!-- page-container -->


</body>
</html>
  
<script type='text/javascript' src='assets/js/jquery-1.10.2.min.js'></script> 
<script type='text/javascript' src='assets/js/jqueryui-1.10.3.min.js'></script> 
<script type='text/javascript' src='assets/js/bootstrap.min.js'></script> 
<script type='text/javascript' src='assets/js/enquire.js'></script> 
<script type='text/javascript' src='assets/js/jquery.cookie.js'></script> 
<script type='text/javascript' src='assets/js/jquery.nicescroll.min.js'></script> 
<script type='text/javascript' src='assets/plugins/codeprettifier/prettify.js'></script> 
<script type='text/javascript' src='assets/plugins/easypiechart/jquery.easypiechart.min.js'></script> 
<script type='text/javascript' src='assets/plugins/sparklines/jquery.sparklines.min.js'></script> 
<script type='text/javascript' src='assets/plugins/form-toggle/toggle.min.js'></script> 
<script type='text/javascript' src='assets/plugins/datatables/jquery.dataTables.min.js'></script> 
<script type='text/javascript' src='assets/plugins/datatables/dataTables.bootstrap.js'></script> 
<script type='text/javascript' src='assets/demo/demo-datatables.js'></script> 
<script type='text/javascript' src='assets/js/placeholdr.js'></script> 
<script type='text/javascript' src='assets/js/application.js'></script> 
<script type='text/javascript' src='assets/demo/demo.js'></script> 