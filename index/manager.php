					<div class="col-md-4 section section1">
 						<div class="row">
 							<p>اطلاعات کاربر</p>
 						</div>
 						<div class="row">
 							<div class="col-md-7">
 								<?php 
									$path = "uploads/".$_SESSION['userId'].".jpg?t=".rand();
									if (!file_exists($path)) {
										$path = "assets/img/".getUserData($_SESSION['login_user'], "userLevelId").getUserData($_SESSION['login_user'], "sex").".jpg?t=".rand();
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
 							<a href="../profile">
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
 								<?php 
 									$sql = "select * from ".UserTable." ORDER BY id desc LIMIT 5";
 									$result = mysqli_query(connection(), $sql);
 									while($feild = mysqli_fetch_array($result)) {
											$path = "../uploads/".$feild['id'].".jpg";
											if (!file_exists($path)) {
												$path = "../assets/img/".$feild['userLevelId'].$feild['sex'].".jpg";
											}
										
 								?>
 								<a href="../profile/?id=<?php echo $feild['id']; ?>">
 									<li>
 										<div class="row" style="padding: 0;">
 											<i class="col-md-3"><img src="<?php echo $path; ?>" class="col" alt=""></i>
 											<span class="col-md-9"><?php echo $feild['name']." ".$feild['lastName']; ?></span>
 											<small class="col-md-12 text-center"><?php echo $feild['nationalCode']; ?></small>
 										</div>
 									</li>
 								</a>
 								<?php } ?>
 							</ul>
 						</div>
 						<div class="row">
 							<a href="">
 								<button class="btn btn-light">لیست کامل</button>
 							</a>
 						</div>
 					</div>
 				</div>