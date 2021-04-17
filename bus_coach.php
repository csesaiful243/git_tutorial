<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view('web/inc/stylesheet');  ?>
    <!-- <link rel="stylesheet" href="<?php echo base_url('assets_front/'); ?>css/swipe.css">
    <link rel="stylesheet" href="<?php echo base_url('assets_front/'); ?>css/swiper.min.css"> -->
    <style type="text/css">
      form {
        width: -moz-available !important;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <!-- START header -->
    <?php $this->load->view('web/inc/header');  ?>
    <!-- END header -->
    <div class="top-shadow"></div>
    <section class="breadcrumb-section" >
      <div class="container">
        <div class="d-flex">
          <h4 class="mr-auto mb-0">Bus Coach</h4>
          <nav aria-label="breadcrumb" >
            <ol class="breadcrumb  p-0 mb-0">
              <li class="breadcrumb-item bg-transparent"><a href="#">Home</a></li>
              <li class="breadcrumb-item active bg-transparent" aria-current="page">Bus Coach</li>
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
            <div class="get-in-touch pt-4 pb-5 mobile-pad">
              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills nav-justified coach-tab mb-3">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="pill" href="#home">Bus Coach (AC)</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="pill" href="#menu1">Bus Coach (Non-AC)</a>
                    </li>
                    <!-- <li class="nav-item">
                      <a class="nav-link" data-toggle="pill" href="#menu2">Buisness Class</a>
                    </li> -->
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div class="tab-pane container active" id="home">
                      <div class="row">
                        <input type="hidden" id="user_id" name="user_id" value="<?php echo $this->session->userdata('user_id'); ?>">
                        <?php if (!empty($ac_buses)) {
                          foreach ($ac_buses as $key => $value) {
                          $bus_details = (array)$value['bus_details']; ?>
                          <div class="col-md-12 mb-2">
                            <?php echo form_open('home/view_seat',array('id'=>'bus_coach','method' => 'post')); ?>
                              <div class="d-flex shadow-bus flex-column ac_coach">
                                <input type="hidden" id="bus_id" name="bus_id" value="<?php echo $value['bus_id']; ?>">
                                <input type="hidden" id="route_id" name="route_id" value="<?php echo $value['id']; ?>">
                                <input type="hidden" id="base_fare" name="base_fare" value="<?php echo $value['amount']; ?>">
                                <input type="hidden" id="name" name="name" value="<?php echo $bus_details['company_name']; ?>">
                                <input type="hidden" id="booking_date" name="booking_date" value="<?php echo $booking_date ?>">
                                <input type="hidden" id="payment_type" name="payment_type" value="<?php echo $payment_type; ?>">
                                <div class="d-flex w-100">
                                  <h5><?php echo $bus_details['company_name']; ?> </h5>
                                  <h4 class="text-theme ml-auto">BDT <?php echo $value['amount']; ?></h4>
                                </div>
                                <div class="d-flex w-100 align-content-start border-bottom accomodation pb-1">
                                  <span class="flex-fill">Time :<b><?php echo date_format(date_create($value['start_time']),"h:i A"); ?></b></span>
                                  <span class="flex-fill">Available Seat :<b><?php echo $value['available_seats']; ?> </b></span>
                                  <span class="flex-fill">Total Seat :<b><?php echo $bus_details['total_seat']; ?></b></span>
                                </div>
                                <div class="d-flex w-100 pt-1 ">
                                  <div class="arrive-time d-flex flex-column">
                                    <span class="s-point"><?php echo date_format(date_create($value['start_time']),"h:i A"); ?></span>
                                    <p class="loc-point">Start Point</p>
                                    <span class="location"><?php echo $value['start_point']; ?></span> 
                                  </div>
                                  <div class="duration">
                                    <?php $total_time = explode(":", $value['total_time']); ?>
                                    <span class="hr-duration"><?php echo $total_time[0]."h ".$total_time[1]."min"; ?></span>
                                  </div>
                                  <div class="end-time d-flex flex-column">
                                    <span class="e-point"><?php echo date_format(date_create($value['end_time']),"h:i A"); ?></span>
                                    <p class="loc-point">Drop Off Point</p>
                                    <span class="location"><?php echo $value['end_point']; ?></span> 
                                  </div>
                                </div>
                              </div>
                            <?php echo form_close(); ?>   
                          </div>
                        <?php } } else { ?>
                          <div class="col-md-12 mb-2 text-center">
                            <div class="d-flex shadow-bus flex-column">
                              <strong><p style="margin-left: 10px">There is no ac buses are available.</p></strong>
                            </div>
                          </div>
                        <?php } ?>
                      </div>
                    </div>
                    <div class="tab-pane container fade" id="menu1">
                      <div class="row">
                        <?php if (!empty($nonac_buses)) {
                          foreach ($nonac_buses as $key => $value) {
                          $bus_details = (array)$value['bus_details']; ?>
                          <div class="col-md-12 mb-2">
                            <?php echo form_open('home/view_seat',array('id'=>'bus_coach','method' => 'post')); ?>
                              <div class="d-flex shadow-bus flex-column nonac_coach">
                                <input type="hidden" name="bus_id" value="<?php echo $value['bus_id']; ?>">
                                <input type="hidden" name="route_id" value="<?php echo $value['id']; ?>">
                                <input type="hidden" name="base_fare" value="<?php echo $value['amount']; ?>">
                                <input type="hidden" name="name" value="<?php echo $bus_details['company_name']; ?>">
                                <div class="d-flex w-100">
                                  <h5><?php echo $bus_details['company_name']; ?> </h5>
                                  <h4 class="text-theme ml-auto">BDT <?php echo $value['amount']; ?></h4>
                                </div>
                                <div class="d-flex w-100 align-content-start border-bottom accomodation pb-1">
                                  <span class="flex-fill">Time :<b><?php echo date_format(date_create($value['start_time']),"h:i A"); ?></b></span>
                                  <span class="flex-fill">Available Seat :<b><?php echo $value['available_seats']; ?> </b></span>
                                  <span class="flex-fill">Total Seat :<b><?php echo $bus_details['total_seat']; ?></b></span>
                                </div>
                                <div class="d-flex w-100 pt-1 ">
                                  <div class="arrive-time d-flex flex-column">
                                    <span class="s-point"><?php echo date_format(date_create($value['start_time']),"h:i A"); ?></span>
                                    <p class="loc-point">Start Point</p>
                                    <span class="location"><?php echo $value['start_point']; ?></span> 
                                  </div>
                                  <div class="duration">
                                    <?php $total_time = explode(":", $value['total_time']); ?>
                                    <span class="hr-duration"><?php echo $total_time[0]."h ".$total_time[1]."min"; ?></span>
                                  </div>
                                  <div class="end-time d-flex flex-column">
                                    <span class="e-point"><?php echo date_format(date_create($value['end_time']),"h:i A"); ?></span>
                                    <p class="loc-point">Drop Off Point</p>
                                    <span class="location"><?php echo $value['end_point']; ?></span> 
                                  </div>
                                </div>
                              </div>
                            <?php echo form_close(); ?>   
                          </div>
                        <?php } } else { ?>
                          <div class="col-md-12 mb-2 text-center">
                            <div class="d-flex shadow-bus flex-column ">
                              <strong><p style="margin-left: 10px">There is no non-ac buses are available.</p></strong>
                            </div>
                          </div>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider change  -->
    <!-- Start Footer -->
    <?php $this->load->view('web/inc/footer'); ?>
    <!-- End scripts -->
    <!-- Start scripts -->
    
    <?php $this->load->view('web/inc/modal');
    $this->load->view('web/inc/scripts'); ?>
    <!-- END scripts -->
    <script type="text/javascript">
      $('.ac_coach').on('click',function () {
        var user_id = $("#user_id").val();
        if (user_id == '') {
          swal("Warning","Please login into your account to book ride.","warning");
          return false;
        }else{
          $(this).parents('form').submit()
        }
      });
      $('.nonac_coach').on('click',function () {
        var user_id = $("#user_id").val();
        if (user_id == '') {
          swal("Warning","Please login into your account to book ride.","warning");
          return false;
        }else{
          $(this).parents('form').submit()
        }
      });
    </script>
  </body>
</html>