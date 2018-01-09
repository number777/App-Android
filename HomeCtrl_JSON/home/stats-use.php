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
                                    <a href="setting-device.php">&nbsp;&nbsp;<i class="icon-desktop"></i> ตั้งค่าอุปกรณ์</a>
                                </li>
                                <li>
                                    <ahref="setting-users.php">&nbsp;&nbsp;<i class="icon-user"></i> ตั้งค่าผู้ใช้งาน</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a  class="active" href="forms.html"><i class="fa fa-bar-chart-o "></i> ออกรายงาน<span class="fa arrow"></span></a>
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
                                <i class="icon-bar-chart"></i> สถิติและรายงาน
                            </li>
                        </ol>
                  
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12" >
                    <div class="panel panel-primary">
                        <div align="right" class="panel-heading ">
                           <button type="submit" class="btn btn-success btn-xs" ><i class="icon-share"> ออกรายงาน </i></button>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                           
                            <!-- Tab panes -->
                            <div class="content">
                                 <div class="inner" style="min-height:700px;">
                <div class="row">
                    <div class="col-lg-12">


                        <h2><i class="icon-bar-chart"></i> แผนภูมิแสดงสถิติต่างๆ </h2>



                    </div>
                </div>

                <hr />

                 <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                           <i class="icon-calendar"> สถิติรายเดือน</i>
                        </div>
                        <div class="panel-body">
                            <div id="morris-bar-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <i class="icon-calendar"> สถิติรายสัปดาห์</i>
                        </div>
                        <div class="panel-body">
                            <div id="morris-line-chart"></div>
                        </div>
                    </div>
                </div>
                     </div>
                <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-danger">
                        
                        
                           <h3>&nbsp;&nbsp;<label class="label label-danger"><i class="icon-info-sign"> หมายเหตุ </label></i></h3>
                           
                       
                        <div class="panel-body">
                            <div>
                            <span class=" label label-primary"> </span>&nbsp;<label> : อุปกรณ์ที่ 1</label><br/>
                            <span class=" label label-default"> </span>&nbsp;<label> : อุปกรณ์ที่ 2</label><br/>
                            <span class=" label label-success"> </span>&nbsp;<label> : อุปกรณ์ที่ 3</label><br/>
                            <span class=" label label-info"> </span>&nbsp;<label> : อุปกรณ์ที่ 4</label><br/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                           <i class="icon-calendar-empty"> สถิติวัน</i>
                        </div>
                        <div class="panel-body">
                            <div id="morris-donut-chart"></div>
                        </div>
                    </div>
                </div>
                    </div>
                


            </div>
                            
                   </div></div>
                                
                                
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
<script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>

    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/plugins/morris/morris-demo.js"></script>
       <script src="assets/js/formsInit.js"></script>
       
        <script>
            $(function () { formInit(); });
        </script>
        
     <!--END PAGE LEVEL SCRIPT-->

</body>

</html>
