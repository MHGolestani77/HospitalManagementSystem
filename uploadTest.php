<?PHP
  include 'functions.php';
  if(!empty($_FILES['fileToUpload']))
  {
    $path = "test/";
    $path = $path . basename($_POST['illnessId']."_".$_POST['id']."_".$_FILES['fileToUpload']['name']);
    echo $path;
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $path)) {
      setTest($_POST['title'], basename($_POST['illnessId']."_".$_POST['id']."_".$_FILES['fileToUpload']['name']), $_POST['date'], $_POST['illnessId']);
      echo "<script>window.location.href = 'http://localhost/HospitalManagementSystem/setTest/?step=FI';</script>";
    } else{
      echo "<script>window.location.href = 'http://localhost/HospitalManagementSystem/setTest?error=notUploaded';</script>";
    }
  }
?>