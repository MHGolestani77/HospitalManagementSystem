					<div class="col-md-4 section section1">
 						<div class="row">
 							<p>اطلاعات کاربر</p>
 						</div>
 						<div class="row">
 							<div class="col-md-7">
 								<?php 
									$path = "uploads/".$_SESSION['userId'].".jpg";
									if (!file_exists($path)) {
										$path = "assets/img/".getUserData($_SESSION['login_user'], "userLevelId").".jpg";
									}
								?>
 								<img src="http://localhost/HospitalManagementSystem/<?php echo $path; ?>" alt="">
 							</div>
 						</div>
 						<div class="row">
 							<ul class="text-right">
 								<a href="">
 									<li>
 										<small class="label">نام</small>
 										<?php echo getUserData($_SESSION['login_user'], "name"); ?>
 									</li>
 								</a>
 								<a href="">
 									<li>
 										<small class="label">نام خانوادگی</small>
 										<?php echo getUserData($_SESSION['login_user'], "lastName"); ?>
 									</li>
 								</a>
 								<a href="">
 									<li>
 										<small class="label">نام پدر</small>
 										<?php echo getUserData($_SESSION['login_user'], "fatherName"); ?>
 									</li>
 								</a>
 								<a href="">
 									<li>
 										<small class="label">کد ملی</small>
 										<?php echo $_SESSION['login_user']; ?>
 									</li>
 								</a>
 							</ul>
 						</div>
 						<div class="row">
 							<a href="">
 								<button class="btn btn-light">لیست کامل</button>
 							</a>
 						</div>
 					</div>
 					<div class="col-md-4 section section2">
 						<div class="row">
 							<p>دسترسی ها</p>
 						</div>
 						<div class="row">
 							<ul>
 								<a href="../createUser/">
 									<li>افزودن  کاربر</li>
 								</a>
 								<a href="../chart/">
 									<li>گزارش گیری</li>
 								</a>
 							</ul>
 						</div>
 					</div>
 					<div class="col-md-4 section section3">
 						<div class="row">
 							<p>لیست  کاربران</p>
 						</div>
 						<div class="row">
 							<ul>
 								<a href="">
 									<li>
 										<i></i>
 										<span>نام بیمار یک</span>
 										<small></small>
 									</li>
 								</a>
 								<a href="">
 									<li>
 										<i></i>
 										<span>نام بیمار دو</span>
 										<small></small>
 									</li>
 								</a>
 								<a href="">
 									<li>
 										<i></i>
 										<span>نام بیمار سه</span>
 										<small></small>
 									</li>
 								</a>
 							</ul>
 						</div>
 						<div class="row">
 							<a href="">
 								<button class="btn btn-light">لیست کامل</button>
 							</a>
 						</div>
 					</div>
 				</div>