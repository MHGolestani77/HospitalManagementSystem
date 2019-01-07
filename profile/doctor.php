<ul class="nav nav-pills col-md-10 p-2 rounded">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="pill" href="#section1">اطلاعات  تخصص</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#section2">اطلاعات بیماران</a>
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
    <h4>#اطلاعات  تخصص
    <button onclick="enable_edit()" class="btn bg-white h4">ویرایش</button>
  </h4>
    <form action="" method="post">
      <div class="row">
        <label for="" class="col-md-6" style="margin: 0 auto;">کد نظام پزشکی:</label>
      </div>
      <div class="row">
        <input type="text" value="<?php echo getDoctorData(getDoctorId($id), "specialId"); ?>" class="col-md-6" disabled>
      </div>
      <div class="row">
        <label for="" class="col-md-6" style="margin: 0 auto;">تخصص: </label>
      </div>
      <div class="row">
        <input id="Edit" type="text" value="<?php echo getDoctorData(getDoctorId($id), "expert"); ?>" name="expert" class="col-md-6" disabled>
      </div>
      <div class="row">
        <input id="Editbtn" type="submit" class="col-md-6 btn" name="submitExpert" value="ویرایش">
      </div>
    </form>
  </div>
  <div class="tab-pane container fade" id="section2" style="background: none; box-shadow: none;">
    <h4>#اطلاعات بیماران</h4>
    <ul>
      <?php 
      $sql = "select * from ".illsTable." where doctorId = ".getDoctorId($id);
      $result = mysqli_query(connection(), $sql);
      $i = 1;
      while($feild = mysqli_fetch_array($result)) :
      ?>
      <a href="?id=<?php echo $feild['userId']; ?>">
        <li class="col-md-6">
          <i class="col-md-2"><?php echo $i; $i++; ?></i>
          <span class="col-md-5"><?php echo getUserData(getNationalCode($feild['userId']), "name"); ?></span>
          <span class="col-md-5"><?php echo getUserData(getNationalCode($feild['userId']), "lastName"); ?></span>
        </li>
      </a>
      <?php endwhile; ?>
    </ul>
  </div>
</div>