<?php
	if(isset($_POST['submitted'])){
		include('test.php');
		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=$_POST['message'];
		$sqlinsert="INSERT INTO users (name,email,commemt) VALUES('$name','$email','$message')";

		if(!mysqli_query($db,$sqlinsert)){
			die('error inserting new record');
		}//end my nested statement
		else{
			$record="提交成功";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<title>第16組</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="robots" content="index,follow" />
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="js/all-in-one-min.js"></script>
<script type="text/javascript" src="js/setup.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript">
$(window).load(function(){
	$('#demo-side-bar').removeAttr('style');
});
</script>
<style type="text/css">
.demobar{display:none;}
#demo-side-bar{top:53px!important;left:90%!important;display:block!important;}
</style>
 <!--Dynamically creates ads markup-->
	<!-- Header -->
	<header class="header_bg clearfix">
		<div class="container clearfix">
								<div class="logo">
									<a href="index.html"><img src="images/logo.png" alt="" /></a>
								</div>
			<!-- Master Nav -->
			<nav class="main-menu">
				<ul>
					<li><a href="index.html" style="font-size:16px">首頁&nbsp;</a></li>
					<li><a href="introduction.html" style="font-size:16px">景點介紹&nbsp;</a></li>
					<li><a href="raiders.html" style="font-size:16px">旅遊攻略&nbsp;</a></li>
					<li><a href="traffic.html" style="font-size:16px">交通資訊&nbsp;</a></li>
					<li><a href="help.html" style="font-size:16px">幫助中心&nbsp;</a></li>
				</ul>
			</nav>
		</div>
	</header>
    <!-- /Header -->
    <!-- START CONTENT -->
    <section class="container clearfix">
		<!-- START PAGE INFO -->
			<header class="container page_info clearfix">

					<h1 class="regular brown bottom_line">Contact Us Today</h1>

				<div class="clear"></div>
			</header>

		<!-- END PAGE INFO -->

		<div class="padding15"></div>

	  <!-- START COL 1/3 -->
		<div class="col_1_3">

			<ul class="contact-address">
            	<li class="address"><span>I am Address!</span></li>
                <li class="phone"><span>+1 123 456 7890</span></li>
                <li class="email"><span><a href="mailto:Tribe@gmail.com">Tribe@gmail.com</a></span></li>
            </ul>

			<div class="clear"></div>

		</div>
		<!-- END COL 1/3 -->

		<!-- START COL 2/3 LAST -->
		<div class="col_2_3 last">

			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.


			</p>

			<div class="padding20"></div>

			<p class="required_info"><span>*</span> Required</p>




			<!-- SUCCESS MESSAGE -->
			<div class="success_box none">
				Email successfully sent. Thank you!
			</div>
			<!-- END SUCCESS MESSAGE -->

			<!-- ERROR MESSAGE -->
			<div class="error_box none">
				Please complete all required fields.
			</div>
			<!-- END ERROR MESSAGE -->



			<!-- START CONTACT FORM -->
			<form method="post" action="help.php" class="contact_form">
			<input type="hidden" name="submitted" value="true" />
			<p>
				<label for="name">Name <span>*</span></label>
				<input class="inputText" type="text" id="name" name="name" />
			</p>
			<div class="clear"></div>
			<p>
				<label for="email">E-mail <span>*</span></label>
				<input class="inputText" type="text" id="email" name="email" />
			</p>
			<div class="clear"></div>
			<p>
				<label for="website">Website</label>
				<input class="inputText" type="text" id="website" name="website" />
			</p>
			<div class="clear"></div>
			<p>
				<label for="message">Message <span>*</span></label>
				<textarea class="inputTextarea" cols="88" rows="6" id="message" name="message"></textarea>
			</p>
			<div class="clear"></div>
			<p class="submit">
				<a href="javascript:void(0);" class="button white" onclick="$('.contact_form').submit();">Send</a>
			</p>
			</form>
			<!-- END CONTACT FORM -->
			<?php
				echo $record;
		  ?>

		</div>
		<!-- END COL 2/3 LAST -->



		<div class="clear padding20"></div>


	</section>
    <!-- END CONTENT -->
    <!-- footer -->
    <footer class="footer_bg_bottom clearfix">
  		<div class="footer_bottom container">
  			<div class="col_2_3">

  				<div class="menu">
  					<ul>
  						<li><a href="index.html">首頁</a></li>
  						<li><a href="elements.html">景點介紹</a></li>
  						<li><a href="portfolio_2_cols.html">旅遊攻略</a></li>
  						<li><a href="blog.html">交通資訊</a></li>
  						<li><a href="contact.html">幫助中心</a></li>
  					</ul>
  				</div>

  				<div class="clear padding20"></div>

  				<p>第16組 D05.....</p>

  			</div>

  			<div class="clear padding20"></div>
  		</div>
  	</footer>
    <!-- /footer -->

    </div>
    <!--wrapper end-->

</body>
</html>
