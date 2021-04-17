
<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view('web/inc/stylesheet');  ?>
</head>
<body>

  <!-- START header -->
  <?php $this->load->view('web/inc/header');  ?>
  <link rel="stylesheet" href="css/swipe.css">
  <link rel="stylesheet" href="css/swiper.min.css">
  
  <!-- END header -->
  <div class="top-shadow"></div>
    <section class="breadcrumb-section" >
      <div class="container">
        <div class="d-flex">
          <h4 class="mr-auto mb-0">Select Payment</h4>
          <nav aria-label="breadcrumb" >
            <ol class="breadcrumb  p-0 mb-0">
              <li class="breadcrumb-item bg-transparent"><a href="#">Home</a></li>
              <li class="breadcrumb-item active bg-transparent" aria-current="page">Select Payment</li>
            </ol>
          </nav>
        </div>
      </div>
    </section>
    <section class="other-page" >
      <!-- slider-item-1 -->
      <div class="container h-100">
        <div class="row">
          <div class="col-lg-8 col-md-9 col-sm-12 col-12 col-sm-8 col-12 mt-5 mb-5 m-auto">
            <div class="get-in-touch">
              <div class="row">
                <div class="col-md-12 text-center mt-3">
                  <h4>Select Payment</h4>
                  <!-- <a class="float-right" href="#">Add Card</a> -->
                </div>  
              </div>
              <div class="col-md-12">
                <div class="d-flex shadow-time p-3">
                  <div class="custom-control custom-radio w-100">
                    <input type="radio" checked="checked" class="custom-control-input"  id="customRadio" name="example1">
                    <label class="custom-control-label w-100 pl-2" for="customRadio"><span>Cash</span></label>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="d-flex shadow-time p-3">
                  <div class="custom-control custom-radio w-100">
                    <input type="radio" class="custom-control-input "  id="customRadio1" name="example1">
                    <label class="custom-control-label w-100 pl-2" for="customRadio1"><span class="mr-auto">Wallet </span> 
                    <h6 class="float-right text-theme mb-0"><b>BDT-200</b></h6></label>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="d-flex shadow-time p-3">
                  <div class="custom-control custom-radio w-100">
                    <input type="radio" class="custom-control-input"  id="customRadio3" name="example1">
                    <label class="custom-control-label w-100 pl-2" for="customRadio3"><span class="mr-auto">6455  ****   ****  *****</span><img class="float-right filter-none w-20" src="<?php echo base_url('assets_front/'); ?>images/icon-ride/card.png"/></label>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="d-flex shadow-time p-3">
                  <div class="custom-control custom-radio w-100">
                    <input type="radio" class="custom-control-input"  id="customRadio4" name="example1">
                    <label class="custom-control-label w-100 pl-2" for="customRadio4"><span class="mr-auto">6455  ****   ****  *****</span><img class="float-right filter-none w-20" src="<?php echo base_url('assets_front/'); ?>images/icon-ride/card.png"/></label>
                  </div>
                </div>
              </div>

              <div class="col-md-12 justify-content-center text-center mt-4">
                <a href="<?php echo base_url('home/bus_coach'); ?>" class="btn btn-theme-gredient">
                  Submit
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->
  </div>
  <?php $this->load->view('web/inc/footer');  ?>


  <!-- End scripts -->
  <!-- Start scripts -->
  <?php
    $this->load->view('web/inc/modal');  
    $this->load->view('web/inc/scripts');  
  ?>
  <script src="<?php echo base_url('assets_front/'); ?>js/swipe.js"></script>
  <script src="<?php echo base_url('assets_front/'); ?>js/swiper.jquery.min.js"></script>

</body>
</html>