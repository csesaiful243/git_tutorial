<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view('web/inc/stylesheet');  ?>
    <style type="text/css">
      .select2-container--default .select2-selection--single {
          border: 1px solid #ced4da;
          border-radius: 20px;
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
          <h4 class="mr-auto mb-0"><?php echo $this->lang->line('header_adddetails'); ?></h4>
          <nav aria-label="breadcrumb" >
            <ol class="breadcrumb  p-0 mb-0">
              <li class="breadcrumb-item bg-transparent"><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('header_home'); ?></a></li>
              <li class="breadcrumb-item active bg-transparent" aria-current="page"><?php echo $this->lang->line('header_adddetails'); ?></li>
            </ol>
          </nav>
        </div>
      </div>
    </section>

    <section class="other-page" >
      <!-- slider-item-1  test -->
      <div class="container h-100">
        <div class="row">
          <div class="col-lg-6 col-md-8 col-sm-8 col-12 col-sm-8 col-12 mt-5 mb-5 m-auto">
            <div class="get-in-touch">
              <?php echo form_open('home/add_detail',array('id'=>'digita-contact-form', 'name'=>'add_bus','method' => 'post','enctype'=>'multipart/form-data')); ?>
                <div class="user-profile">
                  <div class="circle preview_holder">
                    <img id="imagePreview" class="img-responsive" />
                    <input type="file" id="profile_image" name="profile_image" class="filestyle" data-parsley-trigger="change" required="" accept="image/jpeg, image/png, image/jpg" data-parsley-required-message="<?php echo $this->lang->line('v_profile_image'); ?>" data-parsley-errors-container="#pimage" />
                  </div>
                  <div id="pimage" class="text-center" style="color: red;"></div>
                  <?php if(isset($img_error_msg) && $img_error_msg != ''){ ?>
                    <ul class="parsley-errors-list filled">
                      <li class="parsley-required"><?php echo $img_error_msg; ?></li>
                    </ul>
                  <?php } ?>
                  <?php echo form_error('profile_image'); ?>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-12 text-center mt-3">
                        <h4><?php echo $this->lang->line('detail_title'); ?></h4>
                        <p><?php echo $this->lang->line('detail_subtitle'); ?></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <label><?php echo $this->lang->line('t_name'); ?> <span class="text-danger">*</span></label>
                        <div class="form-group detail-icon">
                          <input type="text" class="form-control" name="name" id="name" placeholder="<?php echo $this->lang->line('p_name'); ?>" value="<?php echo set_value('name'); ?>" data-parsley-trigger="change" data-parsley-required-message="<?php echo $this->lang->line('v_name'); ?>" required>
                          <?php echo form_error('name');?>
                          <img src="<?php echo base_url('assets_front/'); ?>images/name.svg"/>
                        </div>                  
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <label><?php echo $this->lang->line('t_email'); ?> <span class="text-danger">*</span></label>
                        <div class="form-group detail-icon">
                          <input type="email" class="form-control" name="email" placeholder="<?php echo $this->lang->line('p_email'); ?>" id="email" autocomplete = 'off' value="<?php echo set_value('email'); ?>" data-parsley-trigger="change" required data-parsley-required-message="<?php echo $this->lang->line('v_email'); ?>">
                            <?php echo form_error('email');?>
                          <img src="<?php echo base_url('assets_front/'); ?>images/mail.svg"/>
                        </div>                  
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <label><?php echo $this->lang->line('t_phoneno'); ?> <span class="text-danger">*</span></label>
                        <div class="form-group detail-icon">
                          <input type="hidden" name="country_code" value="<?php echo $result['country_code']; ?>" required>
                          <input type="text" class="form-control" name="phone" value="<?php echo $result['country_code']." ".$result['mobile_number']; ?>" readonly>
                          <input type="hidden" name="phone" value="<?php echo $result['mobile_number']; ?>" required data-parsley-required-message="<?php echo $this->lang->line('v_mobile_number'); ?>">
                          <img src="<?php echo base_url('assets_front/'); ?>images/mobile.svg"/>
                        </div>                  
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-5">
                        <label><?php echo $this->lang->line('t_emergency_country_code'); ?> </label>
                        <select class="form-control select2" name="emergency_country_code" id="emergency_country_code" data-parsley-errors-container="#coucode">
                            <?php $country_list = $this->common->get_countrylist(); ?>
                            <option value=""> Select Country Code</option>
                            <?php foreach($country_list as $key => $value) { ?>
                                <option value="<?php echo $value['code']; ?>" <?php if(isset($result['code']) && $result['code'] == $value['code']){ echo 'selected'; } elseif(isset($result['code']) && $result['code'] == $value['code']){ echo "selected";}  ?> ><?php echo "(".$value['code'].") ". $value['name'];?></option>
                            <?php } ?>
                        </select>
                        <div id="coucode" style="color: red;"></div>                  
                      </div>
                      <div class="col-md-7">
                        <label><?php echo $this->lang->line('t_emergency_phone'); ?> </label>
                        <div class="form-group detail-icon">
                          <input type="text" class="form-control" id="emergency_phone" name="emergency_phone" placeholder="<?php echo $this->lang->line('p_emergency_phone'); ?>" maxlength="11" onkeypress="return isNumber(event)" value="<?php echo set_value('emergency_phone'); ?>" />
                          <?php echo form_error('emergency_phone'); ?>
                          <img src="<?php echo base_url('assets_front/'); ?>images/mobile.svg"/>
                        </div>                  
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <label><?php echo $this->lang->line('t_referal_code'); ?></label>
                        <div class="form-group detail-icon">
                          <input type="text" class="form-control" name="referral_code" id="referral_code" placeholder="<?php echo $this->lang->line('p_referal_code'); ?>" value="<?php echo set_value('referral_code'); ?>" data-parsley-trigger="change">
                          <?php echo form_error('referral_code');?>
                          <img src="<?php echo base_url('assets_front/'); ?>images/coupon.svg"/>
                        </div>                  
                      </div>
                    </div>
                    <div class="row mt-2 ">
                      <div class="col-md-12 m-auto text-center">
                        <button type="submit" class="btn btn-theme-gredient"> <?php echo $this->lang->line('btn_submit'); ?> </button>
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
    <!-- END slider  check -->
    <!-- Start Footer -->
    <?php $this->load->view('web/inc/footer'); ?>
    <!-- End scripts -->
    <!-- Start scripts -->
    <?php $this->load->view('web/inc/scripts'); ?>
    <!-- END scripts -->
    <script type="text/javascript">
      $(document).ready(function(e) {
        $("#imagePreview").css("background-image", "url('<?php echo base_url('assets_front/images/').'user.png'; ?>')");
      });
      function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
                  $("#imagePreview").css("background-image", "url("+e.target.result+")");
              }
              reader.readAsDataURL(input.files[0]);
          }
      }
      $("#profile_image").change(function () {
          readURL(this);
      });
    </script>
  </body>
</html>