<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Zynact Billing</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fontawesome/css/all.css">
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <!-- Topbar -->
      <?php include 'topbar.html';?>
      <!-- Sidebar -->
      <?php include 'sidebar.html';?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          
        </section>
      </div>
      <!--Footer-->
      <?php include 'footer.html';?>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/js/jquery-3.3.1.min.js" ></script>
  <script src="assets/js/popper.min.js" ></script>
  <script src="assets/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="assets/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="assets/js/moment.js/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/js/page/index.js"></script>
  <script>
    $.ajax({
      url: "process.php",
      data: {process:"current_user"},
      type: 'POST',
      success: function (success_data) {
        $("#current_user").html(success_data);
        $("#current_user_1").html(success_data);
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) {
        console.log(errorThrown);
      }
    });
  </script>
</body>
</html>
