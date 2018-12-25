					<div class="col-md-4 section section1">
 						<div class="row">
 							<p>اطلاعات کاربر</p>
 						</div>
 						<div class="row">
 							<div class="col-md-7">
 								<img src="http://localhost/HospitalManagementSystem/assets/img/back.jpg" alt="">
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
 							<a href="">
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
 								<a href="../setIll">
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
 								<a href="">
 									<li>
 										<i><img src="../assets/img/memberId.jpg" alt=""></i>
 										<span><?php echo getUserData(getNationalCode($feild['userId']), "name")." ".getUserData(getNationalCode($feild['userId']), "lastName") ?></span>
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