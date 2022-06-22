  <?php include "_header.php" ?>
  <body>
    <div class="container container-content">  
    <nav class="navbar navbar-default">
        <?php include "main-menu.php"; ?>
      </nav>

  <!--  <?php echo "<small class='pull-right waktu'>".hari_ini().", ".tgl_indoo(date('Y-m-d')).", <span id='jam'></span> WIB</small>"; ?>  -->
    <!--  <img style='padding:20px' src='<?php echo base_url(); ?>asset/logo.png'> -->
      
      <a href='<?php echo base_url()?>'><h1>Isoft Hosting</h1></a> 
      <p> Jasa Pembuatan Website, Domain & Hosting</p> <br>

      

   
<!--
      <div class="breaking-news">
          <span class="the-title">Breaking News</span>
          <ul>
              <?php
                $terkini = $this->db->query("SELECT * FROM berita ORDER BY id_berita DESC");
                foreach ($terkini->result_array() as $row) {
                  echo "<li><a href='".base_url()."berita/detail/$row[judul_seo]'>$row[judul]</a></li>";
                }
              ?>
          </ul>
      </div>
  -->

      <br>

      <?php 
                if ($this->uri->segment(1)=='' OR $this->uri->segment(1)=='utama'){
                  //include "slide.php"; 
                  include "_landingpage.php"; 
                }else {
                  include "_templatehalaman.php"; 
                }
              ?>

      <?php include "_footer.php"?>
      
    </div> <!-- /container -->
    <?php $this->model_utama->kunjungan(); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/jquery-1.12.3.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/bootstrap.min.js"></script>
    

    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/jquery.validate.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/phpmu-custom.js"></script>
    <script> $(document).ready(function(){ $("#formku").validate(); }); $('#myLightbox').lightbox(options);</script>

</body>
</html>
