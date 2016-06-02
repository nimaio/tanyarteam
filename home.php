<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>TanYarTeam Dashboard</title>
	<link rel="stylesheet" href="assets/css/bootstrap-rtl.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="assets/css/owl.carousel.css"> -->
	<!-- <link rel="stylesheet" href="assets/css/slidebars.min.css"> -->
	<link rel="stylesheet" href="assets/css/tanyarteam.css">
</head>
<body>
<?php include 'templates/header.php'; ?>

		<div id="wrapper">
		 <main id="main">
			 <div class="container-fluid">
				 <div class="row">
					 <section class="col-xs-12" style="padding:0">
						 <div class="content">
							 <div class="visit_list">
								 <header>
									 <h4>پیشخوان</h4>
									 <h1>لیست ویزیت های شما</h1>
									 <div class="meta">
										 <span><i class="fa fa-map-marker" aria-hidden="true"></i> تهران</span>
										 <span><i class="fa fa-smile-o" aria-hidden="true"></i> تاریخ تولد <strong>20/11/1365</strong></span>
										 <span><i class="fa fa-calendar" aria-hidden="true"></i> تاریخ تشکیل پرونده <strong>20/11/1365</strong></span>
								 </div>	</header>
								 <div class="visit_query">
									 <span class="total">تا کنون <strong>21</strong> بار وقت ویزیت داشته اید</span>
									 <span class="success"><strong>10</strong>  بار ویزیت شده اید</span>
									 <span class="fail"><strong>10</strong> بار کنسل کرده اید</span>
								 </div>
								 <div class="table-responsive">
								 <table class="table table-hover">
									 <tr>
										 <th>روز</th>
										 <th>تاریخ</th>
										 <th>ساعت</th>
										 <th>بازدید / برنامه</th>
										 <th>توضیحات</th>
										 <th>وضعیت</th>

									 </tr>
									 <tr>
										 <td class="day">شنبه</td>
										 <td class="date">12 فروردین 1394</td>
										 <td class="time">12:45</td>
										 <td><span class="label label-success">بازدید</span></td>
										 <td class="program_dl">
											 <span><a href="#" data-toggle="tooltip" title="دریافت برنامه غذایی"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></span>
											 <span><i class="fa fa-lemon-o" aria-hidden="true"></i></span>
											 <span><i class="fa fa-line-chart" aria-hidden="true"></i></span>
										 </td>
										 <td class="status">
										 	<span class="fail"><i class="fa fa-times-circle-o" aria-hidden="true"></i></span>
										 </td>

									 </tr>
									 <tr>
										 <td class="day">شنبه</td>
										 <td class="date">12 فروردین 1394</td>
										 <td class="time">12:45</td>
										 <td><span class="label label-warning">برنامه</span></td>
										 <td class="program_dl">
											 <span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
											 <span><i class="fa fa-lemon-o" aria-hidden="true"></i></span>
											 <span><i class="fa fa-line-chart" aria-hidden="true"></i></span>

										 </td>
										 <td class="status">
										 	<span class="success"><i class="fa fa-check-circle-o" aria-hidden="true"></i></span>
										 </td>
									 </tr>
								 </table>
								 </div>
							 </div><!-- visit_list -->

						 </div><!-- content -->
					 </section><!-- col-sm-9 -->

				 </div><!-- row -->
			 </div><!-- container-fluid -->
		 </main><!-- main -->
	 </div><!-- wrapper -->
	 <div class="sidebar_right">

		 <div class="menu_column">
 			<ul>
 				<li>
 					<a href="#">
						<span class="icon"><i class="fa fa-user" aria-hidden="true"></i> </span>
						<span>پروفایل</span>
					</a>
 				</li>
 				<li>
 					<a href="#">
						<span class="icon"><i class="fa fa-calendar" aria-hidden="true"></i> </span>
						<span>لیست مراجعات</span>
					</a>
 				</li>
 				<li>
 					<a href="#">
						<span class="icon"><i class="fa fa-user-plus" aria-hidden="true"></i> </span>
						<span>معرفی دوستان</span>
					</a>
 				</li>
 				<li>
 					<a href="#">
						<span class="icon"><i class="fa fa-life-ring" aria-hidden="true"></i> </span>
						<span>پشتیبانی</span>
					</a>
 				</li>

 			</ul>

 		</div>
	 </div><!-- sidebar_right -->
	 <div class="sidebar_left">
		 <aside>
		 <div class="user_information">
			 <div class="user_picture">
				 	<figure>
						<a href="#"><img src="assets/img/me@2x.jpg" alt="" /></a>
						<span class="edit_picture"><i class="fa fa-camera" aria-hidden="true"></i></span>
					 <figcaption>
					 	<h2>سید محمد حسین قاضی</h2>
					 </figcaption>
				 </figure>
			 </div>
			 <div class="body_composition_new">

				 <h3>وضعیت بدنی شما</h3>
				 <div class="weight">
					 <h2>84</h2>
					 <span>کیلوگــــرم</span>
				 </div>
				 <div class="height">
					 <h2>175</h2>
					 <span>سانتیمتــــر</span>
				 </div>
				 <div class="file_number">
					 <h2>125863</h2>
					 <span>شماره پرونده</span>
				 </div>
			 </div>
			 <div class="body_composition_old">
				 <ul>
					 <li><h2>وزن اولیه</h2><span>82 کیلوگرم</span></li>
					 <li><h2>درصد چربی</h2><span>20 درصد</span></li>
					 <li><h2>تاریخ اولین مراجعه</h2><span>20 فروردین 1394</span></li>
				 </ul>
				 <a href="#" class="final_paper">مشاهده آخرین آنالیز بدن</a>
			 </div>
		 </div>
		 </aside>
	 </div><!-- sidebar_left -->



  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-rtl.min.js"></script>
	<!-- <script type="text/javascript" src="assets/js/typed.js"></script> -->
	<!-- <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script> -->
	<!-- <script type="text/javascript" src="assets/js/terme.js"></script> -->
	<script src="assets/js/slidebars.min.js"></script>
	<!-- <script>
		(function($) {
			$(document).ready(function() {
				$.slidebars();
			});
		}) (jQuery);
	</script> -->
	<script>
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

	</script>
	<script type="text/javascript">
	$( document ).ready(function() {
		$( "#toggle" ).click(function() {
	    $( ".sidebar_right" ).toggleClass( "sidebar_active" );
	});
		$( ".sb-toggle-left" ).click(function() {
	    $( ".sidebar_left" ).toggleClass( "sidebar_active" );
			$( "#wrapper" ).toggleClass( "wrapper_active" );
			$( ".header" ).toggleClass( "header_active" );
	});
});
	</script>
	<script>
			jQuery( ".btn-animated, .btn-animated-lg, .btn-anim-three, .btn-anim-back, .btn-anim-minus, .btn-anim-three-lg" ).on( "click", function() {
	jQuery(this).toggleClass( "closed" );
	});

	</script>
</body>
</html>
