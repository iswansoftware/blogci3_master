
      <div class='row'>
        <div class='col-md-12'>
          
        <?php if ($this->uri->segment(1)=='' OR $this->uri->segment(1)=='utama'){ ?>
          <div class='col-md-12'> 
        <?php }else { ?>
          <div class='col-md-8'> 
       <?php } ?>

        
              
              
              <?php echo $contents; ?>
              <br>
          </div>
          <div class='col-md-4'>
          <?php  include "_sidebar.php";  ?>
         
          </div>
        </div>
      </div>

