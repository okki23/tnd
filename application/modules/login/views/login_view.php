<!DOCTYPE html>
<html lang="en">

<head>
        <title>::LOGIN AREA::</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="assets/css/matrix-login.css" />
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">
            <form id="loginform" class="form-vertical" method="POST" action="<?php echo base_url('login/auth'); ?>">
				 <div class="control-group normal_text"> <h3>LOGIN PORTAL APLIKASI IDEA PROPOSAL</h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" name="username" placeholder="Username" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="password" placeholder="Password" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-success btn-block">Login</button>

                </div>
            </form>

        </div>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/matrix.login.js"></script>
    </body>

</html>
