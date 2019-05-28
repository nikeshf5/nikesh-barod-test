
<?php $this->load->view('header'); ?>
<!-- page content --> 
  <div class="">
  <?php if($this->session->flashdata('success')) { ?>
      <div class="alert alert-success col-lg-10 col-xs-12">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <?php echo $this->session->flashdata('success');  ?>
      </div>
      <?php }else if($this->session->flashdata('error')){ ?>
         <div class="alert alert-danger col-lg-10 col-xs-12">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <?php echo $this->session->flashdata('error'); ?>
        </div>
      <?php } ?> 
      
    <div class="row">
      <div class="col-sm-12">          

        <div class="container">
        <h2>Vertical (basic) form</h2>
        <form action="/action_page.php">
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
          </div>
          <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>

      </div>
    </div>

    
  </div>
</div>
<!-- /page content -->
<?php $this->load->view('footer'); ?>

