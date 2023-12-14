<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view($bootstrap); ?>
</head>
<body>
<?php $this->load->view($loader); ?> 
  <div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">

        <!-- navbar -->
          <?php $this->load->view($navbar);?>
        <!-- navbar end-->

          <div class="pcoded-main-container">
              <div class="pcoded-wrapper">

                  <!-- sidebar -->
                    <?php $this->load->view($sidebar); ?>
                  <!-- sidebar end -->

                  <div class="pcoded-content">

                      <!-- Page-header start -->
                        <?php $this->load->view($header); ?>
                      <!-- Page-header end -->

                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <?php $this->load->view($content); ?>
                        </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <?php $this->load->view($script); ?>
</body>
</html>