<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location:login/');
}
include('../include/db.php');
$query = "SELECT * FROM personal_setup,aboutus_setup,basic_setup,admin_users";
$queryrun = mysqli_query($db, $query);
$data = mysqli_fetch_array($queryrun);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.0.1">
  <title>Admin Panel</title>
  <!-- <link href="admin/css/dashboard.css" rel="stylesheet"> -->
  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

  <!-- Bootstrap core CSS -->
  <link href="assets/dist/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <style>
    .oo {
      height: 200px;
    }

    .ooo {
      height: 100px;
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    #footer {
      padding: 15px;
      color: white;
      font-size: 14px;
      position: fixed;
      left: 0;
      bottom: 0;
      width: 200px;
      z-index: 9999;

    }

    #footer .copyright {
      text-align: center;
    }

    #footer .credits {
      padding-top: 5px;
      text-align: center;
      font-size: 10px;
      color: white;
    }

    .sidebar-sticky {
      position: fixed;
      top: 0;
      left: 0;
      bottom: 0;
      width: 255px;
      transition: all ease-in-out 0.5s;
      z-index: 9997;
      transition: all 0.5s;
      padding: 0 15px;
      background: #040b14;
      overflow-y: auto;
    }

    .profile img {
      margin: 5px auto;
      display: block;
      width: 120px;
      border: 8px solid #2c2f3f;
    }

    .sidebar-sticky .profile a {
      text-decoration: none;
      font-size: 14px;
      text-align: center;
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="css/dashboard.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">

    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Admin Panel</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  </nav>
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <div class="profile">
            <img src="../assets/img/<?= $data['profilepic'] ?>" alt="" class="img-fluid rounded-circle">
            <a href="#" class="nav-link"><?= $_SESSION['username'] ?></a>
          </div>
          <ul class="nav flex-column">
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Setup/Edit</span>

            </h6>
            <li class="nav-item">
              <a class="nav-link" href="../admin/">
                <span data-feather="home"></span>
                Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?editseo=true">
                <span data-feather="at-sign"></span>
                Edit SEO
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?edithome=true">
                <span data-feather="home"></span>
                Edit Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?editabout=true">
                <span data-feather="info"></span>
                Edit About
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?editresume=true">
                <span data-feather="briefcase"></span>
                Edit Resume
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?editportfolio=true">
                <span data-feather="archive"></span>
                Edit Portfolio
              </a>
            </li>

          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Account Settings</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="?editprofile=true">
                <span data-feather="user"></span>
                Edit Profile
              </a>
            </li>
          </ul>

          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="php/logout.php"> <i class="uil-signout"></i>
                Logout
              </a>
            </li>
          </ul>


        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">


        <?php
        if (isset($_GET['edithome'])) {
          include('php/home.php'); //home
        } else if (isset($_GET['editabout'])) {
          include('php/about.php');
        } else if (isset($_GET['editresume'])) {
          include('php/resume.php');
        } else if (isset($_GET['editportfolio'])) {
          include('php/portfolio.php');
        } else if (isset($_GET['editseo'])) {
          include('php/seo.php');
        } else if (isset($_GET['editprofile'])) { ?>
          <h2>Edit Profile</h2>
          <?php
          if (isset($_GET['msg'])) {

            if ($_GET['msg'] == 'updated') {
          ?>
              <div class="alert alert-success text-center" role="alert">
                Successfully Updated !
              </div>
          <?php
            }
          }
          ?>
          <form method="post" action="php/uprofile.php">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="ptitle">Name</label>
                <input type="text" name="username" value="<?= $data['username'] ?>" class="form-control" id="ptitle" placeholder="Monu Giri">
              </div>
              <div class="form-group col-md-6">
                <label for="psubtitle">Password</label>
                <input type="text" name="userpass" value="<?= $data['user_pass'] ?>" class="form-control" id="psubtitle" placeholder="*************">
              </div>
              <div class="form-group col-md-12">
                <label for="psubtitle">Email Id</label>
                <input type="text" name="userid" value="<?= $data['user_id'] ?>" class="form-control" id="psubtitle" placeholder="admin@admin.com">
              </div>
            </div>
            <input type="submit" name="uprofile" class="btn btn-primary" value="Save Changes">
          </form>
        <?php } else {
          include('php/welcome.php');
        } ?>

      </main>
    </div>
  </div>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">

      <div class="copyright">
        &copy; Copyright <strong><span>Zaddy</span></strong>
      </div>

      <div class="credits">
        Developed by <a href="#">Gambhir Poudel</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')
  </script>
  <script src="assets/dist/js/bootstrap.bundle.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
  <script src="js/dashboard.js"></script>
</body>

</html>