<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('web/inc/stylesheet');  ?>
</head>
<body>
  <!-- START header -->
  <?php $this->load->view('web/inc/header');  ?>
  <!-- END header -->
  <div class="top-shadow"></div>
  <section class="breadcrumb-section" >
    <div class="container">
      <div class="d-flex">
        <h4 class="mr-auto mb-0">Rating</h4>
        <nav aria-label="breadcrumb" >
          <ol class="breadcrumb  p-0 mb-0">
            <li class="breadcrumb-item bg-transparent"><a href="#">Home</a></li>
            <li class="breadcrumb-item active bg-transparent" aria-current="page">Rating</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>
  <section class="other-page" >
    <!-- slider-item-1 -->
    <div class="container h-100">
      <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-8 col-12 col-sm-8 col-12 mt-5 mb-5 m-auto">
          <div class="get-in-touch">
            <?php echo form_open('home/cancel_ride/'.base64_encode($ride_id),array('id'=>'digita-contact-form', 'name'=>'add_bus','method' => 'post','enctype'=>'multipart/form-data')); ?>
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <input type="hidden" name="ride_id" value="<?php echo $ride_id; ?>">
                    <div class="col-md-12 m-auto text-center ">
                      <img src="<?php echo base_url('assets_front/'); ?>images/icon-ride/schedule-ride.png"/>
                    </div>
                    <div class="col-md-12 text-center mt-3">
                      <h4>Why are you Cancelling Ride?</h4>
                      <p class="comment">Please select reason and submit</p>
                      <!-- <h5 class="text-theme">Jeffery Kron?</h5> -->
                    </div>  
                  </div>
                  <div class="row">
                    <div class="col-md-12 mb-3">
                      <div class="selection cancel-ride d-flex flex-column">
                        <div class="custom-control custom-radio mb-2">
                          <input type="radio" checked="checked" class="custom-control-input" id="resn1" name="reason" required="" value="Waited to long">
                          <label class="custom-control-label" for="resn1">Waited to long</label>
                        </div>
                        <div class="custom-control custom-radio mb-2">
                          <input type="radio"  class="custom-control-input"  id="resn2" name="reason" value="Change my Mind">
                          <label class="custom-control-label" for="resn2">Change my Mind</label>
                        </div>
                        <div class="custom-control custom-radio mb-2">
                          <input type="radio"  class="custom-control-input "  id="resn3" name="reason" value="Had to change Location">
                          <label class="custom-control-label" for="resn3">Had to change Location</label>
                        </div>
                        <div class="custom-control custom-radio mb-2 ">
                          <input type="radio" class="custom-control-input" id="resn4" name="reason" value="Booked by Mistake">
                          <label class="custom-control-label" for="resn4">Booked by Mistake</label>
                        </div>
                        <div class="custom-control custom-radio ">
                          <input type="radio" class="custom-control-input" id="resn5" name="reason" value="other">
                          <label class="custom-control-label" for="resn5">Other</label>
                        </div>
                      </div>
                    </div>
                  </div>            
                  <div class="row">
                    <div class="col-md-12">
                      <label>Write Your Feedback</label>
                      <div class="form-group detail-icon">                      
                        <textarea class="form-control pl-3" name="other_reason" id="other_reason" placeholder="Write feedback here" data-parsley-required-message="Feedback is required" data-parsley-errors-container="#otherfd"></textarea>
                        <span><span class="round-exl mr-2" data-toggle="tooltip" data-placement="top"><i class="fa fa-exclamation"></i></span>Cancellation fees will be applicable.</span>
                        <div id="otherfd" style="color: red;"></div>
                      </div> 
                    </div>
                  </div>
                  <div class="row mt-2 ">
                    <div class="col-md-12 m-auto text-center">
                      <button type="submit" class="btn btn-theme-gredient">
                        Submit
                      </buttin>
                    </div>
                  </div>
                </div>
              </div>
            <?php echo form_close(); ?>   
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- END slider -->
</div>



<!-- Start Footer -->
<?php $this->load->view('web/inc/footer'); ?>
<!-- End scripts -->
<!-- Start scripts -->

<?php $this->load->view('web/inc/modal');
$this->load->view('web/inc/scripts'); ?>
<script>
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
  });
  $("#resn5").change(function(){
    $('#other_reason').attr("required", true);
  });
  $("#resn1,#resn2,#resn3,#resn4").change(function(){
    $('#other_reason').attr("required", false);
  });
</script>


</body>
</html>