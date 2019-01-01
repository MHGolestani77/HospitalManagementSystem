					<div class="col-md-4 section section1">
 						<div class="row">
 							<p>اطلاعات کاربر</p>
 						</div>
 						<div class="row">
 							<div class="col-md-7">
 								<?php 
									$path = "uploads/".$_SESSION['userId'].".jpg";
									if (!file_exists($path)) {
										$path = "assets/img/".getUserData($_SESSION['login_user'], "userLevelId").getUserData($_SESSION['login_user'], "sex").".jpg";
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
 										م<?php echo getUserData($_SESSION['login_user'], "name"); ?>
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
 										<small class="label">نام پزشک</small>
 										<?php 
 											$dId = getNationalCode(getDoctorData(getIllData(getIllId($_SESSION['userId']), "doctorId"), "userId"));
 											echo getUserData($dId, "name")." ".getUserData($dId, "lastName");
 										?>
 									</li>
 								</a>
 							</ul>
 						</div>
 						<div class="row">
 							<a href="../profile">
 								<button class="btn btn-light">اطلاعات کامل</button>
 							</a>
 						</div>
 					</div>
 					<div class="col-md-4 section section2">
 						<div class="row">
 							<p>دسترسی ها</p>
 						</div>
 						<div class="row">
 							<ul>
 								<a href="">
 									<li>ارسال نتیجه آزمایش های قبلی</li>
 								</a>
 							</ul>
 						</div>
 					</div>
 					<div class="col-md-4 section section3">
 						<div class="row">
 							<p>بیماری ها</p>
 						</div>
 						<div class="row">
 							<ul>
 								<a href="">
 									<?php 
 										$sql = "select * from ".illnessTable." where illId = ".getIllId($_SESSION['userId']);
 										$result = mysqli_query(connection(), $sql);
 										while ($feild = mysqli_fetch_array($result)) :
 									?>
 									<li>
 										<i></i>
 										<span><?php echo getIllnessDetail($feild['illnessId']) ?></span>
 									</li>
 									<?php endwhile; ?>
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