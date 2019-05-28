<?php $this->load->view('header'); ?>
<!-- page content --> 
<div class="right_col" role="main">
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

        <?php if(empty(@$record)){ ?>  
           <div class="alert alert-warning">
                <strong>Info!</strong> Record not found.
            </div>    
            <?php } else { ?>     
                <table class="table table-bordered" id="table-example">
                  <thead>
                    <tr>
                      <th>S.No</th>
                      <th>Title</th>
                      <th>Date</th>
                      <th>Time</th>       
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach(@$record as $key => $log){ ?>
                    <tr>
                      <td><?php echo @$key+1;?></td>
                      <td><?php echo @$log->search_title;?></td>
                      <td><?php echo @$prayer_timings->prayer_timing;?></td>
                      <td><?php echo @$prayer_timings->prayer_timing;?></td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>                   
            <?php } ?>
        </div>
      </div>
    </div>

    
  </div>
</div>
<!-- /page content -->
<?php $this->load->view('footer'); ?>