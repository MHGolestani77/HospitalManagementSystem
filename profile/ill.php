<ul class="nav nav-pills col-md-10 p-2 rounded">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="pill" href="#section1">اطلاعات بیماری</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#section2">فرآیند درمان</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#section3">داروها</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#section4">آزمایشات</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#section5">اطلاعات بیمه</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content col-md-10">
  <div class="tab-pane container active" id="section1" style="background: none; box-shadow: none;">
    <h4>#اطلاعات بیماری</h4>
    <?php 
    $sql = "select * from ".illnessTable." where illId = ".getIllId($id);
    $result = mysqli_query(connection(), $sql);
    while($feild = mysqli_fetch_array($result)) :
      $illnessId = $feild['illnessId'];
    ?>
    <div class="row">
      <input type="text" value="<?php echo getIllnessDetail($feild['illnessId']); ?>" class="col-md-6" placeholder="عنوان بیماری " disabled>
    </div>
    <div class="row">
      <textarea value="توضیحات بیماری" class="col-md-6" placeholder="توضیحات بیماری" disabled></textarea>
    </div>
  </div>
  <?php endwhile; ?>
  <div class="tab-pane container fade" id="section2" style="background: none; box-shadow: none;">
    <h4>#فرآیند درمان</h4>
    <ul>
      <?php 
      $sql = "select * from ".processTable." where illnessId = ".getIllnessId(getIllId($id), $illnessId);
      $result = mysqli_query(connection(), $sql);
      while($feild = mysqli_fetch_array($result)) :
      ?>
      <li class="col-md-6">
        <i class="col-md-2"><?php echo $feild['rank']+1; ?></i>
        <span class="col-md-10"><?php echo $feild['title']; ?></span>
      </li>
      <?php endwhile; ?>
    </ul>
  </div>
  <div class="tab-pane container fade" id="section3" style="background: none; box-shadow: none;">
    <h4>#داروها</h4>
    <ul>
      <?php 
      $sql = "select * from ".medicineTable." where illnessId = ".getIllnessId(getIllId($id), $illnessId);
      $result = mysqli_query(connection(), $sql);
      $i = 1;
      while($feild = mysqli_fetch_array($result)) :
      ?>
      <li class="col-md-6">
        <i class="col-md-2"><?php echo $i; $i++; ?></i>
        <span class="col-md-10"><?php echo $feild['title']; ?></span>
      </li>
      <?php endwhile; ?>
    </ul>
  </div>
  <div class="tab-pane container fade" id="section4" style="background: none; box-shadow: none;">
    <h4>#آزمایشات</h4>
    <ul>
      <?php 
      $sql = "select * from ".test." where illnessId = ".getIllnessId(getIllId($id), $illnessId);
      $result = mysqli_query(connection(), $sql);
      $i = 1;
      while($feild = mysqli_fetch_array($result)) :
      ?>
      <li class="col-md-6">
        <i class="col-md-2 number"><?php echo $i; $i++; ?></i>
        <span class="col-md-5"><?php echo $feild['title']; ?></span>
        <span class="col-md-3"><?php echo $feild['date']; ?></span>
        <span class="col-md-2">
          <a href="../test/<?php echo $feild['fileName']; ?>" style="color: #83aba7;">
            <i class="fas fa-cloud-download-alt download"></i>
          </a>
        </span>
      </li>
      <?php endwhile; ?>
    </ul>
  </div>
  <div class="tab-pane container fade" id="section5" style="background: none; box-shadow: none;">
    <h4>#اطلاعات بیمه</h4>
    <div class="row">
      <input type="text" class="col-md-6" value="تاریخ اتمام بیمه: <?php echo getUserData($nationalCode, "insuranceEndTime"); ?>" disabled>
    </div>
  </div>
</div>