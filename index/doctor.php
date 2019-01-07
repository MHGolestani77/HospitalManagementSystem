					<div class="col-md-4 section section1">
 						<div class="row">
 							<p>اطلاعات کاربر</p>
 						</div>
 						<div class="row">
 							<div class="col-md-7">
 								<?php 
									$path = "../uploads/".$_SESSION['userId'].".jpg?t=".rand();
									if (!file_exists($path)) {
										$path = "../assets/img/".getUserData($_SESSION['login_user'], "userLevelId").getUserData($_SESSION['login_user'], "sex").".jpg?t=".rand();
									}
								?>
 								<img src="<?php echo $path; ?>" alt="">
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
 								<a href="">
 									<li>
 										<small class="label">کد نظام پزشکی</small>
 										<?php echo getDoctorData(getDoctorId($_SESSION['userId']), "specialId"); ?>
 									</li>
 								</a>
 								<a href="">
 									<li>
 										<small class="label">تخصص</small>
 										<?php echo getDoctorData(getDoctorId($_SESSION['userId']), "expert"); ?>
 									</li>
 								</a>
 							</ul>
 						</div>
 						<div class="row">
 							<a href="../profile">
 								<button class="btn btn-light">ویرایش</button>
 							</a>
 						</div>
 					</div>
 					<div class="col-md-4 section section2">
 						<div class="row">
 							<p>دسترسی ها</p>
 						</div>
 						<div class="row">
 							<ul>
 								<a href="../setIllness">
 									<li>تشخیص بیماری</li>
 								</a>
 								<a href="">
 									<li>تعریف فرآیند درمان</li>
 								</a>
 								<a href="">
 									<li>تجویز دارو</li>
 								</a>
 							</ul>
 						</div>
 					</div>
 					<div class="col-md-4 section section3">
 						<div class="row">
 							<p>لیست بیماران</p>
 						</div>
 						<div class="row">
 							<ul>
 								<?php 
 									$sql = "select * from ".illsTable." where doctorId = ".getDoctorId($_SESSION['userId']); 
 									$result = mysqli_query(connection(), $sql);
 									while($feild = mysqli_fetch_array($result)) :
 								?>
 								<a href="../profile/?id=<?php echo $feild['userId']; ?>">
 									<li>
		 								<?php 
											$path = "../uploads/".$feild['userId'].".jpg";
											if (!file_exists($path)) {
												$path = "../assets/img/".getUserData(getNationalCode($feild['userId']), "userLevelId").getUserData(getNationalCode($feild['userId']), "sex").".jpg";
											}
										?>
										<div class="row" style="padding: 0;">
 											<i class="col-md-3"><img src="<?php echo $path; ?>" class="col" alt=""></i>
 											<span class="col-md-9"><?php echo getUserData(getNationalCode($feild['userId']), "name")." ".getUserData(getNationalCode($feild['userId']), "lastName") ?></span>
 										</div>
 									</li>
 								</a>
 								<?php endwhile; ?>
 							</ul>
 						</div>
 						<div class="row">
 							<a href="">
 								<button class="btn btn-light">لیست کامل</button>
 							</a>
 						</div>
 					</div>
 				</div>