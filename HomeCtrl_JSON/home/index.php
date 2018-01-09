<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

	<!-- BEGIN THEME STYLES -->
	<link href="css/login.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
    <title>ระบบควบคุมเครื่องใช้ไฟฟ้าออนไลน์</title>
</head>
<!-- BEGIN BODY -->
<body class="login">
	<!-- BEGIN LOGO -->
	<div class="logo">
<img src="docs/assets/ico/favicon.ico" alt="" /> 
	</div>
	<!-- END LOGO -->
	<!-- BEGIN LOGIN -->
	<div class="content">
		<!-- BEGIN LOGIN FORM -->
		<form class="login-form" id="loginform" method="post" onSubmit="return ss()">
        
			<h3 class="form-title">ระบบควบคุมเครื่องใช้ไฟฟ้าออนไลน์</h3>

                <div id="waiting"  align="center" style="display:none;margin-bottom:20px;">
            Waiting...<br />
            <img src="assets/img/ajax-loader.gif" title="Loader" alt="Loader" />
        </div>
                 <div id="message" align="center" style="margin-bottom:20px;"></div>
<!--
			<div class="alert alert-danger display-hide">
				<button  type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				 <span>กรอกชื่อผู้ใช้งานและรหัสผ่านที่ถูกต้องด้วยค่ะ</span>
			</div>-->
			<div class="form-group">
				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                
				<!--<label class="control-label visible-ie8 visible-ie9">ชื่อผู้ใช้งาน</label>-->
				<div class="input-icon">
                	<div class="inner-addon left-addon">
  				 	 <i class="glyphicon glyphicon-user"></i>
    
					<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="ชื่อผู้ใช้งาน" id="username" name="username"/>
					</div>
                </div>

					
			</div>
			<div class="form-group">
				<!--<label class="control-label visible-ie8 visible-ie9">รหัสผ่าน</label>-->
				<div class="input-icon">
					<div class="inner-addon left-addon">
  				 	 <i class="glyphicon glyphicon-lock"></i>
					<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="รหัสผ่าน" id="password"  name="password"/>
					</div>
                </div>
			</div>
            <button type="submit" class="btn green pull-right" id="submit" name="submit">
				 เข้าสู่ระบบ <i class="glyphicon glyphicon-log-in"></i>
				</button>
			<div class="form-actions">

				
			</div>

		</form>
		<!-- END LOGIN FORM -->
<div class="copyright">
		 Copyright © 2014 Ongard Pulathane. Allrights Reserved.
	</div>
	</div>
	<!-- END LOGIN -->
	<!-- BEGIN COPYRIGHT -->
	
	<!-- END COPYRIGHT -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->
	<!--[if lt IE 9]>
	<script src="assets/plugins/respond.min.js"></script>
	<script src="assets/plugins/excanvas.min.js"></script>
	<![endif]-->

       <? if($_SESSION['msg']!=""){?>
	<script type="application/javascript" language="javascript">
    var htmls="<?=$_SESSION['msg']?>";
	$("#msg").removeClass("alert-success");
	$("#msg").removeClass("alert-info");
	$("#msg").removeClass("alert-warning");
	$("#msg").removeClass("alert-danger");
	document.getElementById('msg_text').innerHTML=htmls;
	<?
	if($_SESSION['msg_type']!=""){$msg_type=$_SESSION['msg_type'];}else{$msg_type="warning";}
	?>
	$("#msg").addClass("alert-<?=$msg_type?>");
	//$(".alert").alert();
	$("#msg").show();
    var intId =setInterval('$("#msg").fadeOut("slow")',2500);
    </script>
    <?
    $_SESSION['msg']="";
	$_SESSION['msg_type']="";
}?>

<script type="text/javascript">

	function ss(){

     var check=true;
        if($('#username').val()==""){
            //function(message, title)
           //jAlert('Please input username.', 'Warning Dialog');
            show_dialog("#dialog","Please input username.");
            $('#username').focus()
            check=false;
            return false;
        }
        if($('#password').val()==""){
            //function(message, title)
            //jAlert('Please input password.', 'Warning Dialog');
			show_dialog("#dialog","Please input password.");
            $('#password').focus()
            check=false;
            return false;
        }

        if(check==true){
            $('#waiting').fadeIn(500);
            $('#login-inner').hide(0);
            $('#message').hide(0);
            $.ajax({
                type : 'POST',
                url : 'index.ajax.php',
                dataType : 'json',
                data: {
                    username : $('#username').val(),
                    password : $('#password').val(),
                    task :'login'
                },
                success : function(data){
                    $('#waiting').hide(500);
                    $('#message').removeClass().addClass((data.error === true) ? 'error' : 'success')
                        .text(data.msg).fadeIn(500);
                    if (data.error === true){
                        $('#login-inner').fadeIn(500);
                         var intId =setInterval("$('#message').fadeOut(500)",2000);
                    }else{
                             var t=setTimeout("window.location='"+data.url+"'",2000);
                        }
                },
                error : function(XMLHttpRequest, textStatus, errorThrown) {
                    $('#waiting').hide(500);
                    $('#message').removeClass().addClass('error')
                        .text('There was an error.').fadeIn(500);
                         var intId =setInterval("$('#message').fadeOut(500)",2000);
                    $('#login-inner').fadeIn(500);
                }
            });
        }
            return false;

	}




    $(document).ready(function(){
		$('#forgotbox').hide();
		$('.forgot-pwd').click(function() {
			 $('#login').hide();
			$('#forgotbox').fadeIn( function() {
			// Animation complete
			});
		});

		$('.back-login').click(function() {
			 $('#forgotbox').hide();
			 $('#login').fadeIn( function() {
			// Animation complete
			  });
		});

        $('#submit').click(function() {
			    var check=true;
			if($('#username').val()==""){
				//function(message, title)
			   //jAlert('Please input username.', 'Warning Dialog');
				show_dialog("#dialog","Please input username.");
				$('#username').focus()
				check=false;
				return false;
			}
			if($('#password').val()==""){
				//function(message, title)
				//jAlert('Please input password.', 'Warning Dialog');
				show_dialog("#dialog","Please input password.");
				$('#password').focus()
				check=false;
				return false;
			}

			if(check==true){
				$('#waiting').fadeIn(500);
				$('#login-inner').hide(0);
				$('#message').hide(0);
				$.ajax({
					type : 'POST',
					url : 'index.ajax.php',
					dataType : 'json',
					data: {
						username : $('#username').val(),
						password : $('#password').val(),
						task :'login'
					},
					success : function(data){
						$('#waiting').hide(500);
						$('#message').removeClass().addClass((data.error === true) ? 'error' : 'success')
							.text(data.msg).fadeIn(500);
						if (data.error === true){
							$('#login-inner').fadeIn(500);
							 var intId =setInterval("$('#message').fadeOut(500)",2000);
						}else{
								 var t=setTimeout("window.location='"+data.url+"'",2000);
							}
					},
					error : function(XMLHttpRequest, textStatus, errorThrown) {
						$('#waiting').hide(500);
						$('#message').removeClass().addClass('error')
							.text('There was an error.').fadeIn(500);
							 var intId =setInterval("$('#message').fadeOut(500)",2000);
						$('#login-inner').fadeIn(500);
					}
				});
			}
				return false;
        });

    });
     <?
	 if($_REQUEST['msg']!=""){
		 echo "show_dialog(\"#dialog\",\"".$_REQUEST['msg']."\");";
	  }
	 ?>
    </script>

    <!--check caps lock -->
    <script type="text/javascript">
            $(function () {
                $('#username').bind('keypress', function (event) {
                    var key = String.fromCharCode(event.keyCode);
                    if (key.toUpperCase() === key && key.toLowerCase() !== key && !event.shiftKey) {
                        event.preventDefault();

                    alert('caps lock is on');
                    }
                });
            });

              $(function () {
                $('#password').bind('keypress', function (event) {
                    var key = String.fromCharCode(event.keyCode);
                    if (key.toUpperCase() === key && key.toLowerCase() !== key && !event.shiftKey) {
                        event.preventDefault();

                    alert('caps lock is on');
                    }
                });
            });


        </script>


	<script src="dist/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src="dist/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<script src="dist/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="dist/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<script src="dist/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="dist/plugins/jquery.blockui.min.js" type="text/javascript"></script>
	<script src="dist/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="dist/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="dist/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="dist/scripts/app.js" type="text/javascript"></script>
	<script src="dist/scripts/login.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
		jQuery(document).ready(function() {
		  App.init();
		  Login.init();
		});
	</script>

</html>
