<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view('web/inc/stylesheet');  ?>
    <link rel="stylesheet" href="<?php echo base_url('assets_front/'); ?>css/swipe.css">
    <link rel="stylesheet" href="<?php echo base_url('assets_front/'); ?>css/swiper.min.css">
  </head>
  <body>
    <!-- START header -->
    <?php $this->load->view('web/inc/header');  ?>
    <!-- END header -->
    <div class="top-shadow"></div>
    <section class="breadcrumb-section" >
      <div class="container">
        <div class="d-flex">
          <h4 class="mr-auto mb-0"><?php echo $this->lang->line('header_title_about'); ?></h4>
          <nav aria-label="breadcrumb" >
            <ol class="breadcrumb  p-0 mb-0">
              <li class="breadcrumb-item bg-transparent"><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('header_home'); ?></a></li>
              <li class="breadcrumb-item active bg-transparent" aria-current="page"><?php echo $this->lang->line('header_title_about'); ?></li>
            </ol>
          </nav>
        </div>
      </div>
    </section>


      <!-- slider-item-1 -->
      <div class="">
         <img src="<?php echo base_url('assets_front/'); ?>images/about_us.png" alt="Image" class="img-fluid mb-5 mx-auto d-block" style="width:100%;" >
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-9 col-sm-12 col-12 col-sm-12 col-12 mt-5 mb-5 m-auto">
              <div class="get-in-touch" style="padding-top: 0px;">
              <div class="row">
                <div class="col-md-12 text-center mt-3">
                  <!--<h4>About Us</h4>-->
                </div>
                <div class="col-md-12">
                   
                    <p style="text-align:justify;"><strong style="font-size: 18px;"><?php echo $this->lang->line('aboutus_title'); ?></strong><br/>
                      <?php echo $this->lang->line('aboutus_details'); ?> 
                    </p>
                    
                   <p style="text-align:justify;"><strong style="font-size: 18px;"><?php echo $this->lang->line('our_mission_title'); ?></strong><br/>
                         <?php echo $this->lang->line('our_mission'); ?> 
                        
                    </p>
                    <img src="<?php echo base_url('assets_front/'); ?>images/our_mission.jpg" alt="Image" class="img-fluid mb-5 mx-auto d-block" style="width:auto;" >
                    <p style="text-align:justify;">
                        <strong style="font-size: 20px;">   <?php  echo $this->lang->line('vision_title'); ?>   </strong><br/>
                        <?php  echo $this->lang->line('vision'); ?> 
                               </p>
                    
                    <p style="text-align:justify;">
                        <strong style="font-size: 20px;"> <?php echo $this->lang->line('core_value_title'); ?>  </strong><br/>
                         <?php echo $this->lang->line('core_value'); ?> 
                        
                    </p>
                    <p style="text-align:justify;">
                        <strong style="font-size: 20px;">  <?php echo $this->lang->line('business_philosophy_title'); ?> </strong><br/>
                          <?php echo $this->lang->line('business_philosophy'); ?> 
                      
                    </p>
                    
                   <p style="text-align:justify;">
                        <strong style="font-size: 20px;">  <?php echo $this->lang->line('objective_title'); ?> </strong><br/>
                        <?php echo $this->lang->line('objective'); ?> 
                        
                         </p>
                    
                  <p style="text-align:justify;">
                        <strong style="font-size: 20px;">     <?php echo $this->lang->line('goal_title'); ?>  </strong><br/>
                        
                        <?php echo $this->lang->line('goal'); ?> 
                          </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- END slider -->
    <!-- Start Footer -->
    <?php $this->load->view('web/inc/footer'); ?>
    <!-- End scripts -->
    <!-- Start scripts -->
    <?php $this->load->view('web/inc/modal'); ?>
    <?php $this->load->view('web/inc/scripts'); ?>
    <script src="<?php echo base_url('assets_front/'); ?>js/swipe.js"></script>
    <script src="<?php echo base_url('assets_front/'); ?>js/swiper.jquery.min.js"></script>

    <!-- END scripts -->
  </body>
</html>