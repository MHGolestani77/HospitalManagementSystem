<ul class="nav nav-pills col-md-10 p-2 rounded">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="pill" href="#section1">منشی ها</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#section2">پزشکان</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#section3">بیماران</a>
  </li>
</ul>

<?php 
  if(isset($_POST['submitExpert'])){
    setDoctorExpert($_POST['expert'], $id);
  }
?>

<!-- Tab panes -->
<div class="tab-content col-md-10">
  <div class="tab-pane container active" id="section1" style="background: none; box-shadow: none;">
    <h4>#منشی ها
  </h4>
      <ul>
                <?php 
                  $sql = "select * from ".UserTable." where userLevelId = 2 ORDER BY id desc";
                  $result = mysqli_query(connection(), $sql);
                  $i = 1;
                  while($feild = mysqli_fetch_array($result)) {
                ?>
                <a href="?id=<?php echo $feild['id']; ?>">
                  <li class="col-md-6">
                    <i class="col-md-2"><?php echo $i; $i++; ?></i>
                    <span class="col-md-5"><?php echo $feild['name']." ".$feild['lastName']; ?></span>
                    <span class="col-md-5"><?php echo $feild['nationalCode']; ?></span>
                  </li>
                </a>
                <?php } ?>
              </ul>
  </div>
  <div class="tab-pane container" id="section2" style="background: none; box-shadow: none;">
    <h4>#پزشکان
  </h4>
      <ul>
                <?php 
                  $sql = "select * from ".UserTable." where userLevelId = 3 ORDER BY id desc";
                  $result = mysqli_query(connection(), $sql);
                  $i = 1;
                  while($feild = mysqli_fetch_array($result)) {
                ?>
                <a href="?id=<?php echo $feild['id']; ?>">
                  <li class="col-md-6">
                    <i class="col-md-2"><?php echo $i; $i++; ?></i>
                    <span class="col-md-5"><?php echo $feild['name']." ".$feild['lastName']; ?></span>
                    <span class="col-md-5"><?php echo $feild['nationalCode']; ?></span>
                  </li>
                </a>
                <?php } ?>
              </ul>
  </div>
  <div class="tab-pane container" id="section3" style="background: none; box-shadow: none;">
    <h4>#بیماران
  </h4>
      <ul>
                <?php 
                  $sql = "select * from ".UserTable." where userLevelId = 4 ORDER BY id desc";
                  $result = mysqli_query(connection(), $sql);
                  $i = 1;
                  while($feild = mysqli_fetch_array($result)) {
                ?>
                <a href="?id=<?php echo $feild['id']; ?>">
                  <li class="col-md-6">
                    <i class="col-md-2"><?php echo $i; $i++; ?></i>
                    <span class="col-md-5"><?php echo $feild['name']." ".$feild['lastName']; ?></span>
                    <span class="col-md-5"><?php echo $feild['nationalCode']; ?></span>
                  </li>
                </a>
                <?php } ?>
              </ul>
  </div>
</div>