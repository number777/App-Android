<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ระบบควบคุมเครื่องใช้ไฟฟ้าออนไลน์</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">
<!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    
    
    <!--<link rel="stylesheet" href="assets/css/MoneAdmin.css" />-->
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES --> 

    <!-- PAGE LEVEL STYLES -->
    
 <link href="assets/css/jquery-ui.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/plugins/uniform/themes/default/css/uniform.default.css" />
<link rel="stylesheet" href="assets/plugins/inputlimiter/jquery.inputlimiter.1.0.css" />
<link rel="stylesheet" href="assets/plugins/chosen/chosen.min.css" />
<link rel="stylesheet" href="assets/plugins/colorpicker/css/colorpicker.css" />
<link rel="stylesheet" href="assets/plugins/tagsinput/jquery.tagsinput.css" />
<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker-bs3.css" />
<link rel="stylesheet" href="assets/plugins/datepicker/css/datepicker.css" />
<link rel="stylesheet" href="assets/plugins/timepicker/css/bootstrap-timepicker.min.css" />
<link rel="stylesheet" href="assets/plugins/switch/static/stylesheets/bootstrap-switch.css" />
   
    <!-- END PAGE LEVEL  STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 <link href="assets/css/jquery-ui.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/plugins/uniform/themes/default/css/uniform.default.css" />
<link rel="stylesheet" href="assets/plugins/inputlimiter/jquery.inputlimiter.1.0.css" />
<link rel="stylesheet" href="assets/plugins/chosen/chosen.min.css" />
<link rel="stylesheet" href="assets/plugins/colorpicker/css/colorpicker.css" />
<link rel="stylesheet" href="assets/plugins/tagsinput/jquery.tagsinput.css" />
<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker-bs3.css" />
<link rel="stylesheet" href="assets/plugins/datepicker/css/datepicker.css" />
<link rel="stylesheet" href="assets/plugins/timepicker/css/bootstrap-timepicker.min.css" />
<link rel="stylesheet" href="assets/plugins/switch/static/stylesheets/bootstrap-switch.css" />
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    

</head>

<body>
<? include("header.php")?>

      <div class="navbar-default sidebar" role="navigation">
            
                <div class="sidebar-nav navbar-collapse">
                
                    <ul class="nav" id="side-menu">
                        <li class="text-center">
                    <img src="img/find_user.png" class="media-object img-thumbnail user-img center-block  img-responsive" width="150"/>
					</li>
                       
                        <li>
                            <a  href="main.php"><i class="icon-home"></i> หน้าหลัก</a>
                        </li>
                        
                        <li>
                            <a  href="contrl-device.php"><i class="icon-off"></i> ควบคุมอุปกรณ์</a>
                        </li>
                        <li>
                            <a class="" href="#"><i class="icon-cogs"></i> ตั้งค่า<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a class="active" href="setting-device.php">&nbsp;&nbsp;<i class="icon-desktop"></i> ตั้งค่าอุปกรณ์</a>
                                </li>
                                <li>
                                    <a href="morris.html">&nbsp;&nbsp;<i class="icon-user"></i> ตั้งค่าผู้ใช้งาน</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-bar-chart-o "></i> ออกรายงาน<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#l">&nbsp;&nbsp;<i class="icon-tasks"></i> การใช้งาน</a>
                                </li>
                                <li>
                                    <a href="#">&nbsp;&nbsp;<i class="icon-user-md"></i> ผู้ใช้งาน</a>
                                </li>
                            </ul>
                        </li>
                        
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <ol class="breadcrumb alert-info">
                            <li>
                                <i class="icon-home"></i><a href="main.php"> หน้าหลัก</a>
                            </li>
                            <li>
                                <i class="icon-cogs"></i><a href="#setting"> ตั้งค่า</a>
                            </li>
                            <li class="active">
                                <i class="icon-cog"></i> ตั้งค่าอุปกรณ์
                            </li>
                        </ol>
                  
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="icon-cog"> ตั้งค่าอุปกรณ์ </i>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                           
                            <!-- Tab panes -->
                            <div class="content">
                                
                                    <h4>&nbsp;&nbsp;เปลี่ยนชื่ออุปกรณ์</h4>
                                    <hr></hr>
                                    <div class="col-lg-12">
                                    <div id="datePickerBlock" class="body collapse in">
                					<form class="form-horizontal">
                    
                    				<div class="form-group">
                       					 <label class="control-label col-lg-4" for="dp2">ชื่ออุปกรณ์ 1</label>
                                         <div class="col-lg-4">
                           					 <input type="text" class="form-control" value="หลอดไฟดวงที่ 1" />
                                    	</div>
                    				</div>
                                    <div class="form-group">
                       					 <label class="control-label col-lg-4" for="dp2">ชื่ออุปกรณ์ 2</label>
                                         <div class="col-lg-4">
                           					 <input type="text" class="form-control" value="หลอดไฟดวงที่ 2" />
                                    	</div>
                    				</div>
                                    <div class="form-group">
                       					 <label class="control-label col-lg-4" for="dp2">ชื่ออุปกรณ์ 3</label>
                                         <div class="col-lg-4">
                           					 <input type="text" class="form-control" value="หลอดไฟดวงที่ 3" />
                                    	</div>
                    				</div>
                                    <div class="form-group">
                       					 <label class="control-label col-lg-4" for="dp2">ชื่ออุปกรณ์ 4</label>
                                         <div class="col-lg-4">
                           					 <input type="text" class="form-control" value="หลอดไฟดวงที่ 4" />
                                    	</div>
                    				</div>
                   				 <div align="right">
                               	<!--<button type="submit" class="btn btn-sm btn-warning"><i class="icon-plus"></i> เพิ่ม</button>-->
                                	<button type="submit" class="btn btn-sm btn-info"><i class="icon-save"></i> บันทึก</button>
                                	<button type="reset" class="btn btn-sm btn-danger"><i class="icon-remove"></i> ยกเลิก</button>
                                </div>
                    		</form>
                   		 </div>
                                
                               
                                	
                     </div>
                            
                   </div>
                                
                                
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                
            </div>
            <!-- /.row -->
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <div class="pager"> <p> Copyright © 2014 Ongard Pulathane. Allrights Reserved.</p></div>
    

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
   <!-- PAGE LEVEL SCRIPT-->
 <script src="assets/js/jquery-ui.min.js"></script>
 <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
<script src="assets/plugins/inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="assets/plugins/chosen/chosen.jquery.min.js"></script>
<script src="assets/plugins/colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="assets/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script src="assets/plugins/validVal/js/jquery.validVal.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/plugins/timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="assets/plugins/switch/static/js/bootstrap-switch.min.js"></script>
<script src="assets/plugins/jquery.dualListbox-1.3/jquery.dualListBox-1.3.min.js"></script>
<script src="assets/plugins/autosize/jquery.autosize.min.js"></script>
<script src="assets/plugins/jasny/js/bootstrap-inputmask.js"></script>

       <script src="assets/js/formsInit.js"></script>
        <script>
            $(function () { formInit(); });
        </script>
        
     <!--END PAGE LEVEL SCRIPT-->

</body>

</html>
