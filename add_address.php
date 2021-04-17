
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
        <h4 class="mr-auto mb-0"><?php echo $this->lang->line('add_address'); ?></h4>
        <nav aria-label="breadcrumb" >
          <ol class="breadcrumb  p-0 mb-0">
            <li class="breadcrumb-item bg-transparent"><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('header_home'); ?></a></li>
            <li class="breadcrumb-item active bg-transparent" aria-current="page"><?php echo $this->lang->line('add_address'); ?></li>
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
          <?php echo form_open('home/add_address',array('id'=>'digita-contact-form', 'name'=>'add_bus','method' => 'post')); ?>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-12 m-auto text-center ">
                    <img src="<?php echo base_url('assets_front/'); ?>images/user.png"/>
                  </div>
                  <div class="col-md-12 text-center mt-3">
                    <h4><?php echo $this->lang->line('add_address_details'); ?></h4>
                    <p><?php echo $this->lang->line('add_address_subtitle'); ?></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                      <label><?php echo $this->lang->line('t_address'); ?></label>
                      <div class="form-group detail-icon">
                        <input type="text" class="form-control" id="location" name="location" placeholder="<?php echo $this->lang->line('p_address'); ?>" onkeyup="address()" value="<?php echo set_value('location'); ?>" required data-parsley-required-message="<?php echo $this->lang->line('v_address'); ?>">
                        <?php echo form_error('location'); ?>
                        <input type="hidden" name="latitude" id="latitude">
                        <input type="hidden" name="longitude" id="longitude">
                      </div>                  
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-12">
                       <label><?php echo $this->lang->line('t_city'); ?></label>
                      <div class="form-group detail-icon">
                        <input type="text" class="form-control" id="city" name="city" placeholder="<?php echo $this->lang->line('p_address_city'); ?>"  value="<?php echo set_value('city'); ?>" required data-parsley-required-message="<?php echo $this->lang->line('v_address_city'); ?>">
                        <?php echo form_error('city'); ?>
                      </div>                  
                  </div>
                  <div class="col-md-6 col-sm-6 col-12">
                      <label><?php echo $this->lang->line('t_country'); ?></label>
                      <div class="form-group detail-icon">
                        <input type="text" class="form-control" id="country" name="country" placeholder="<?php echo $this->lang->line('p_address_country'); ?>" value="<?php echo set_value('country'); ?>" required data-parsley-required-message="<?php echo $this->lang->line('v_address_country'); ?>">
                        <?php echo form_error('country'); ?>                     
                      </div>                  
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-12">
                      <label><?php echo $this->lang->line('t_postalcode'); ?></label>
                      <div class="form-group detail-icon">
                        <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="<?php echo $this->lang->line('p_address_postalcode'); ?>"  value="<?php echo set_value('postal_code'); ?>" required data-parsley-required-message="<?php echo $this->lang->line('v_address_postalcode'); ?>">
                        <?php echo form_error('postal_code'); ?>
                      </div>                  
                  </div>
                  <div class="col-md-6 col-sm-6 col-12">
                      <label><?php echo $this->lang->line('t_address_type'); ?></label>
                      <div class="form-group detail-icon">
                        <input type="text" class="form-control" id="address_type" name="address_type" placeholder="<?php echo $this->lang->line('p_address_type'); ?>" value="<?php echo set_value('address_type'); ?>" required data-parsley-required-message="<?php echo $this->lang->line('v_address_type'); ?>">
                        <?php echo form_error('address_type'); ?>
                      </div>                  
                  </div>
                </div>
                <div class="row mt-2 ">
                  <div class="col-md-12 m-auto text-center">
                    <button type="submit" class="btn btn-theme-gredient">
                      <?php echo $this->lang->line('btn_add'); ?>
                    </button>
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
<?php $this->load->view('web/inc/scripts'); ?>

<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo GOOGLE_PLACE_KEY;?>&libraries=places"></script>
    <script type="text/javascript">
      $(function () { 
         $('#location').bind("cut copy paste",function(e) {
              e.preventDefault();
          });
      });
      function address() {
        var input = document.getElementById('location');
        var country_code = '<?php echo $this->session->userdata('country_code'); ?>';
        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.setComponentRestrictions({'country': country_code});
        google.maps.event.addListener(autocomplete,'place_changed', function () {
          var place = autocomplete.getPlace();
          console.log(place)
          $.each(place.address_components, function( index, value ) {
            if (value['types'].includes('locality')) {
              document.getElementById('city').value = value['long_name'];
            }
            if (value['types'].includes('country')) {
              document.getElementById('country').value = value['long_name'];
            }
            if (value['types'].includes('postal_code')) {
              document.getElementById('postal_code').value = value['long_name'];
            }
          });
          document.getElementById('latitude').value = place.geometry.location.lat();
          document.getElementById('longitude').value = place.geometry.location.lng();
        });
    }
  </script>

<!-- END scripts -->

</body>
</html>