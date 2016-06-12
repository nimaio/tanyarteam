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
							<div class="register_section">
								<form class="" action="index.html" method="post">
									<div class="form_step">
										<div class="steps step_1 step_active">
											<a href="#step_1" aria-controls="step_1" role="tab" data-toggle="tab">
													<span class="number">۱</span>
													<span class="label">هدف</span>
											</a>
										</div>
										<div class="steps step_2">
											<a href="#step_2" aria-controls="step_2" role="tab" data-toggle="tab">

													<span class="number">۲</span>
													<span class="label">اطلاعات فردی</span>
												</a>

										</div>
										<div class="steps step_3">
											<a href="#step_3" aria-controls="step_3" role="tab" data-toggle="tab">

													<span class="number">۳</span>
													<span class="label">اطلاعات جسمانی</span>
												</a>
										</div>
										<div class="steps step_4">
											<a href="#step_4" aria-controls="step_4" role="tab" data-toggle="tab">

													<span class="number">۴</span>
													<span class="label">سابقه تمرینی</span>
												</a>

										</div>
										<div class="steps step_5">
											<a href="#step_5" aria-controls="step_5" role="tab" data-toggle="tab">

													<span class="number">۵</span>
													<span class="label">پیش گزارش</span>
												</a>

										</div>
										<div class="steps step_6">
											<a href="#step_6" aria-controls="step_6" role="tab" data-toggle="tab">

													<span class="number">۶</span>
													<span class="label">بارگزاری تصویر</span>
												</a>

										</div>
									</div>
									<div class="clearfix"></div>
									<div class="form_body">
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane fade in step_1 active" id="step_1">
												<div class="form-group">
													<input type="email" name="email" value="" placeholder="آی دی اینستاگرام">
												</div>
												<div class="form-group goal">
													<div class="radio">
														<label for="">هدف شما از دریافت برنامه تمرینی و غذایی چیست؟</label>
														<label>
															<input type="radio" name="instagram_id" value="کاهش وزن">
															کاهش وزن
														</label>
														<label>
															<input type="radio" name="instagram_id" value="کاهش وزن">
															کاهش وزن
														</label>
														<label>
															<input type="radio" name="instagram_id" value="کاهش وزن">
															کاهش وزن
														</label>
													</div>
												</div>
												<div class="form-group goal_desc">
													<textarea name="name" rows="8" cols="40" placeholder="به طور مختصر توضیح دهید"></textarea>
												</div>
												<div class="form-group">
													<button type="button" name="button" class="next next_1"><strong>گام بعد</strong> (اطلاعات فردی) <i class="fa fa-chevron-left" aria-hidden="true"></i></button>
												</div>
											</div><!-- tab-pane -->
											<div role="tabpanel" class="tab-pane fade in step_2" id="step_2">
												<div class="form-group name">
													<input type="text" name="" value="" placeholder="نام">
												</div>
												<div class="form-group family">
													<input type="text" name="" value="" placeholder="نام خانوادگی">
												</div>
												<div class="form-group email">
													<input type="email" name="" value="" placeholder="آدرس ایمیل">
												</div>
												<div class="form-group mobile">
													<input type="text" name="" value="" placeholder="تلفن همراه">
												</div>
												<div class="form-group phone">
													<input type="text" name="" value="" placeholder="تلفن ثابت (با کد شهرستان)">
												</div>
												<div class="form-group id">
													<input type="text" name="" value="" placeholder="کد ملی">
												</div>
												<div class="form-group birthday">
													<select class="" name="">
														<option>1</option>
													</select>
													<select class="" name="">
														<option>1</option>
													</select>
													<select class="" name="">
														<option>1</option>
													</select>
												</div>
												<div class="form-group gender">
													<div class="radio">
														<label for="">جنسیت</label>
														<label>
															<input type="radio" name="" value="کاهش وزن">
															مرد
														</label>
														<label>
															<input type="radio" name="" value="کاهش وزن">
															زن
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="radio">
														<label for="">وضعیت تاهل</label>
														<label>
															<input type="radio" name="" value="مجرد">
															مجرد
														</label>
														<label>
															<input type="radio" name="" value="متاهل">
															متاهل
														</label>
													</div>
												</div>
												<div class="form-group province">
													<select class="" name="">
														<option>گلستان</option>
														<option>مازندران</option>
														<option>دهلران</option>
													</select>
												</div>
												<div class="form-group city">
													<select class="" name="">
														<option>گلستان</option>
														<option>مازندران</option>
														<option>دهلران</option>
													</select>
												</div>
												<div class="form-group">
													<input type="email" name="instagram_id" value="" placeholder="کدپستی">
												</div>
												<div class="form-group">
													<textarea name="name" rows="8" cols="40" placeholder="آدرس محل سکونت"></textarea>
												</div>
												<div class="form-group">
													<button type="button" name="button" class="next next_2"><strong>گام بعد</strong> (اطلاعات فردی) <i class="fa fa-chevron-left" aria-hidden="true"></i></button>
													<button type="button" name="button" class="prev prev_2"><i class="fa fa-chevron-right" aria-hidden="true"></i> (هدف) <strong>گام قبل</strong></button>
												</div>

											</div><!-- tab-pane -->
											<div role="tabpanel" class="tab-pane fade in step_3" id="step_3">
												<div class="form-group">
													<input type="text" name="instagram_id" value="" placeholder="وزن (کیلوگرم)">
												</div>
												<div class="form-group">
													<input type="text" name="instagram_id" value="" placeholder="قد (سانتیمتر)">
												</div>
												<div class="form-group">
													<input type="text" name="instagram_id" value="" placeholder="دور کمر (سانتیمتر)">
												</div>
												<div class="form-group">
													<input type="text" name="instagram_id" value="" placeholder="دور لگن و شکم (ساتیمتر)">
												</div>
												<div class="form-group damage">
													<div class="radio">
														<label for="">آیا آسیب دیدگی یا بیماری خاصی دارید؟</label>
														<label>
															<input type="radio" name="" value="بلی">
															بلی
														</label>
														<label>
															<input type="radio" name="" value="خیر">
															خیر
														</label>
													</div>
												</div>
												<div class="form-group damage_desc">
													<textarea name="name" rows="8" cols="40" placeholder="به طور مختصر توضیح دهید"></textarea>
												</div>
												<div class="form-group">
													<button type="button" name="button" class="next next_3"><strong>گام بعد</strong> (اطلاعات فردی) <i class="fa fa-chevron-left" aria-hidden="true"></i></button>
													<button type="button" name="button" class="prev prev_3"><i class="fa fa-chevron-right" aria-hidden="true"></i> (اطلاعات فردی) <strong>گام قبل</strong></button>
												</div>

											</div><!-- tab-pane -->
											<div role="tabpanel" class="tab-pane fade in step_4" id="step_4">
												<div class="form-group history">
													<div class="radio">
														<label for="">سابقه تمرین بدنسازی دارید؟</label>
														<label>
															<input type="radio" name="" value="بلی">
															بلی
														</label>
														<label>
															<input type="radio" name="" value="خیر">
															خیر
														</label>
													</div>
												</div>
												<div class="form-group history_desc_1">
													<div class="radio">
														<label for="">مدت زمان تمرین بدنسازی</label>
														<label>
															<input type="radio" name="instagram_id" value="کاهش وزن">
															کمتر از ۳ ماه
														</label>
														<label>
															<input type="radio" name="instagram_id" value="کاهش وزن">
															۶ ماه
														</label>
														<label>
															<input type="radio" name="instagram_id" value="کاهش وزن">
															یک سال
														</label>
														<label>
															<input type="radio" name="instagram_id" value="کاهش وزن">
															دو سال
														</label>
														<label>
															<input type="radio" name="instagram_id" value="کاهش وزن">
															بیشتر از ۲ سال
														</label>
													</div>

												</div>
												<div class="form-group history_desc_2">
													<textarea name="name" rows="8" cols="40" placeholder="مکمل ها و هورمون های مصرف شده را ذکر کنید ..."></textarea>
												</div>
												<div class="form-group">
													<button type="button" name="button" class="next next_4"><strong>گام بعد</strong> (اطلاعات فردی) <i class="fa fa-chevron-left" aria-hidden="true"></i></button>
													<button type="button" name="button" class="prev prev_4"><i class="fa fa-chevron-right" aria-hidden="true"></i> (اطلاعات جسمانی) <strong>گام قبل</strong></button>
												</div>

											</div><!-- tab-pane -->
											<div role="tabpanel" class="tab-pane fade in step_5" id="step_5">
												<div class="form-group">
													<div class="radio">
														<label for="">مدت زمانی که می توانید در هفته ورزش کنید</label>
														<label>
															<input type="radio" name="instagram_id" value="کاهش وزن">
															۱ روز
														</label>
														<label>
															<input type="radio" name="instagram_id" value="کاهش وزن">
																۲ روز
														</label>
														<label>
															<input type="radio" name="instagram_id" value="کاهش وزن">
																۳ روز
														</label>
														<label>
															<input type="radio" name="instagram_id" value="کاهش وزن">
															۴ روز
														</label>
														<label>
															<input type="radio" name="instagram_id" value="کاهش وزن">
																۵ روز
														</label>
														<label>
															<input type="radio" name="instagram_id" value="کاهش وزن">
																۶ روز
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="radio">
														<label for="">کدام وعده غذایی شما مفصل تر است؟</label>
														<label>
															<input type="radio" name="instagram_id" value="کاهش وزن">
														صبحانه
														</label>
														<label>
															<input type="radio" name="instagram_id" value="کاهش وزن">
															نهار
														</label>
														<label>
															<input type="radio" name="instagram_id" value="کاهش وزن">
																شام
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="radio">
														<label for="">کدام غذاها را بیشتر دوست دارید؟</label>
														<label>
															<input type="radio" name="instagram_id" value="کاهش وزن">
														شیرین
														</label>
														<label>
															<input type="radio" name="instagram_id" value="کاهش وزن">
															شور
														</label>
														<label>
															<input type="radio" name="instagram_id" value="کاهش وزن">
																چرب
														</label>
														<label>
															<input type="radio" name="instagram_id" value="کاهش وزن">
															ترش
														</label>
													</div>
												</div>
												<div class="form-group">
													<div class="radio">
														<label for="">آیا می توانید درصد چربی خود را اعلام کنید؟</label>
														<label>
															<input type="radio" name="instagram_id" value="کاهش وزن">
														بلی
														</label>
														<label>
															<input type="radio" name="instagram_id" value="کاهش وزن">
															خیر
														</label>
													</div>
												</div>
												<div class="form-group">
													<input type="text" name="instagram_id" value="" placeholder="درصد چربی">
												</div>
												<div class="form-group">
													<button type="button" name="button" class="next next_5"><strong>گام بعد</strong> (اطلاعات فردی) <i class="fa fa-chevron-left" aria-hidden="true"></i></button>
													<button type="button" name="button" class="prev prev_5"><i class="fa fa-chevron-right" aria-hidden="true"></i> (سابقه تمرینی) <strong>گام قبل</strong></button>
												</div>
											</div><!-- tab-pane -->
											<div role="tabpanel" class="tab-pane fade in step_6" id="step_6">
												<div class="form-group field_desc">
												<ul>
													<li>ارسال تصویر باید بگونه ای باشد که از سه نمای قدامی و خلفی و جانبی گرفته شود و تصاویر از گردن به پایین باشد...</li>
													<li>حتما یکی از تصاویر بر روی ترازو باشد. به طوری که وزن شما قابل رویت باشد...</li>
													<li>شما میتوانید 5 تصویر را بارگزاری کنید...</li>
												</ul>
												</div>
												<div class="form-group">
													<input type="file" name="" value="">
												</div>
												<div class="form-group final_desc">
													<textarea name="name" rows="8" cols="40" placeholder="توضیحات تکمیلی ..."></textarea>
												</div>
												<div class="form-group">
													<button type="button" name="button" class="next next_6"><strong>تایید نهایی</strong> (ثبت اطلاعات) <i class="fa fa-chevron-left" aria-hidden="true"></i></button>
													<button type="button" name="button" class="prev prev_6"><i class="fa fa-chevron-right" aria-hidden="true"></i> (پیش گزارش) <strong>گام قبل</strong></button>
												</div>
											</div><!-- tab-pane -->
										</div><!-- tab-content -->
									</div>
									</form>
								</div><!-- register_section -->
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
	<script type="text/javascript" src="assets/js/tanyarteam.js"></script>
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
