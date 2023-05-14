<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <style>
    .uil {
      font-size: 18px;
      display: inline-block;
      background: #212431;
      color: #fff;
      line-height: 1;
      padding: 8px 0;
      margin-right: 4px;
      border-radius: 50%;
      text-align: center;
      width: 36px;
      height: 36px;
      transition: 0.3s;
    }

    .uil:hover {
      background: #149ddd;
      color: #fff;
      text-decoration: none;
    }

    .btn {
      margin-bottom: 10px;
    }
  </style>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<center>
  <h2>Edit Home Section</h2>
</center>
<?php
if (isset($_GET['msg'])) {

  if ($_GET['msg'] == 'updated') {
?>
    <div class="alert alert-success text-center" role="alert">
      Successfully Updated !
    </div>
  <?php
  }
  if ($_GET['msg'] == 'error') {
  ?>
    <div class="alert alert-danger text-center" role="alert">
      something wrong with your image please check type or size !
    </div>
<?php
  }
}
?>
<form method="post" action="php/uhome.php" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <img src="../assets/img/<?= $data['profilepic'] ?>" class="oo img-thumbnail"><br>
      <label>Profile Pic (Minimum 600px X 600px, Maxsize 2mb)</label>
      <div class="custom-file">
        <input type="file" name="profile" class="custom-file-input" id="profilepic">
        <label class="custom-file-label" for="profilepic">Choose Profile Pic...</label>
      </div>
    </div>

    <div class="form-group col-md-6">
      <img src="../assets/img/<?= $data['homewallpaper'] ?>" class="oo img-thumbnail">
      <label>Home Cover (Minimum 1920 X 1280, Maxsize 2mb)</label>
      <div class="custom-file">
        <input type="file" name="cover" class="custom-file-input" id="profilepic">
        <label class="custom-file-label" for="profilepic">Choose Home Cover...</label>
      </div>
    </div>

    <div class="form-group col-md-6">
      <img src="../assets/img/<?= $data['sidebar'] ?>" class="oo img-thumbnail"><br>
      <label>Sidebar</label>
      <div class="custom-file">
        <input type="file" name="side" class="custom-file-input" id="profilepic">
        <label class="custom-file-label" for="profilepic">Choose sidebar...</label>
      </div>
    </div>

    <div class="form-group col-md-6">
      <img src="../assets/img/<?= $data['footer'] ?>" class="oo img-thumbnail"><br>
      <label>Footer</label>
      <div class="custom-file">
        <input type="file" name="bord" class="custom-file-input" id="profilepic">
        <label class="custom-file-label" for="profilepic">Choose Footer...</label>
      </div>
    </div>


    <div class="form-group col-md-6">
      <i class="uil uil-user-circle"></i>
      <label for="name">Name</label>
      <input type="name" name="name" value="<?= $data['name'] ?>" class="form-control" id="name" placeholder="Gambhir Poudel">
    </div>



    <div class="form-group col-md-6">
      <i class="uil uil-envelope"></i>
      <label for="email">Email</label>
      <input type="email" name="email" value="<?= $data['emailid'] ?>" class="form-control" id="email" placeholder="gambhir.poudel@gmail.com">
    </div>
    <div class="form-group col-md-6">
      <i class="uil uil-twitter"></i> <label for="twitter"> Twitter</label>
      <input type="text" class="form-control" value="<?= $data['twitter'] ?>" name="twitter" id="twitter" placeholder="https://twitter.com/gambhirpoudel">
    </div>

    <div class="form-group col-md-6">
      <i class="uil uil-facebook-f"></i>
      <label for="facebook">Facebook</label>
      <input type="text" class="form-control" value="<?= $data['facebook'] ?>" name="facebook" id="facebook" placeholder="https://facebook.com/gambhirofficial">
    </div>

    <div class="form-group col-md-6">
      <i class="uil uil-instagram"></i>
      <label for="instagram">Instagram</label>
      <input type="text" class="form-control" value="<?= $data['instagram'] ?>" name="instagram" id="instagram" placeholder="https://instagram.com/chinimishri_">
    </div>

    <div class="form-group col-md-6">
      <i class="uil uil-discord"></i>
      <label for="skype">Discord</label>
      <input type="text" value="<?= $data['discord'] ?>" class="form-control" name="discord" id="discord" placeholder="https://discord.gg/UzTuU34MHj">
    </div>

    <div class="form-group col-md-6">
      <i class="uil uil-linkedin"></i>
      <label for="linkedin">Linkedin</label>
      <input type="text" class="form-control" value="<?= $data['linkedin'] ?>" name="linkedin" id="linkedin" placeholder="https://linkedin.com/gambhir">
    </div>
    <div class="form-group col-md-6">
      <i class="uil uil-github"></i>
      <label for="github">Github</label>
      <input type="text" class="form-control" value="<?= $data['github'] ?>" name="github" id="github" placeholder="https://github.com/gambhir">
    </div>
  </div>
  <div class="form-group">
    <i class="uil uil-user-location"></i>
    <label for="address">Address</label>
    <input type="text" name="address" value="<?= $data['location'] ?>" class="form-control" id="address" placeholder="Hetauda-9, Bagmati Pradesh">
  </div>
  <div class="form-row">
    <div class="form-group col-md-9">
      <i class="uil uil-user-md"></i>
      <label for="profession">Proffesion Titles (Separate with ',' comma)</label>
      <input type="text" class="form-control" name="profession" value="<?= $data['professions'] ?>" id="profession" placeholder="Web Developer,PHP Developer,Graphic Designer">
    </div>
    <div class="form-group col-md-3">
      <i class="uil uil-phone"></i>
      <label for="mobile">Mobile No</label>
      <input type="text" class="form-control" value="<?= $data['mobile'] ?>" name="mobile" id="mobile" placeholder="9742503468">
    </div>
  </div>
  <input type="submit" name="save" class="btn btn-primary" value="Save Changes">
</form>

</html>