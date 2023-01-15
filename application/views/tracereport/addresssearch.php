<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Address Search</title>
</head>
<body>
<section class="content-header">
    <h1>LKCentrix Solutions PTY LTD</h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo site_url();?>/tracereport" ><i class="fa fa-dashboard"></i> Dashboard</a></li><li>Trace Report</li>
        <li class="active">Address Search</li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Address Search</h3>
            <div class="box-tools pull-right">
                <a href="<?php echo site_url();?>/tracereport/addresssearch" type="button" class="btn btn-box-tool"><i class="fa fa-list-ul"></i></a>
            </div>
        </div>
           <!-- Error Alert -->
		   <?php if($errorMessage != ""){?>
				<div class="alert alert-danger" role="alert"><?php echo $errorMessage;?></div>
		   <?php }?>
		
        <form data-toggle="validator" role="Address Search form" action="<?php echo site_url();?>/tracereport/addresssearch" method="post" id="form-search">
            <div class="box-body"><br>
                 <ul class="nav nav-tabs">
                    <li><a data-toggle="tab" href="#tab1">Residential Address</a></li>
                  </ul><br/>
					<div id="spinner" class="spinner" style="display:none;"  class="form-group has-feedback">
						<strong>please wait while loading ....</strong>
					</div>
                     <div class="form-group">
                       <label class="col-form-label">Province</label>
                    <select class="form-control" id="listprovinces" name="listprovinces" required>
					<option value="">Please Select Province</option>
					<?php 
					
					foreach($provinces as $province){
							echo "<option value='$province->province_name'" . set_select('listprovinces', $province->province_name). " >". $province->province_name."</option>";
					} ?>
					</select>
                 </div>
                 <div class="form-group">
                 <label class="col-form-label">City</label>
                    <input type="text"  class="form-control" id="city" name="city" value="<?php echo set_value('city');?>" placeholder="Enter City" />
                 </div>
                <div class="tab-content">
                <!-- For Street Address -->
                <div id="tab1" class="tab-pane fade in active">
                        <br>
                <div class="form-group">
                <label class="col-form-label">Suburb</label>
                    <input type="text"  class="form-control" id="suburb" name="suburb" value="<?php echo set_value('suburb');?>" placeholder="Enter Suburb" />
                 </div>
                 <div class="form-group">
                 <label class="col-form-label">Street Number</label>
                    <input type="text"  class="form-control" id="streetNo" name="streetNo" value="<?php echo set_value('streetNo');?>" placeholder="Enter Street Number" />
                 </div>
                  <div class="form-group">
                  <label class="col-form-label">Street Name</label>
                   <input type="text"  class="form-control" id="streetName" name="streetName" value="<?php echo set_value('streetName');?>" placeholder="Enter Street Name" />
                 </div>
                  <div class="form-group">
                  <label class="col-form-label">Postal Code</label>
                    <input type="text"  class="form-control" id="postalCode" name="postalCode" value="<?php echo set_value('postalCode');?>" placeholder="Ente Postal Code" />
                 </div>
				  <div class="form-group has-feedback">
					<div class="g-recaptcha" data-sitekey="<?php echo $this->config->item('google_key') ?>"></div>
                  </div>
                 </div>
                  
                </div> 
            <div class="box-footer">
                <button class="btn btn-primary" type="button" id="button-search"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search</button>
            </div>
			<input type="hidden" name="postback" value="post"/>
			<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
        </form>
    </div>
	<?php
	 if (count($consumerList['details']) > 0){
	?>
    <div>
      	 <h5><span><strong>Search Results List</strong></span></h5>
          <table class="table table-striped">
            <tr>
            <th>Reference No</th>
              <th>Names</th>
              <th>Id Number</th>
              <th>Details Viewed</th>
              <th>View</th>
            </tr>
			<?php 
				
				foreach($consumerList['details'] as $consumerListKey => $consumerListValue){
			?>
			
            <tr>
              <td><?php echo $consumerListValue['Reference'];?></td>
              <td><?php echo $consumerListValue['Consumername'];?></td>
              <td><?php echo $consumerListValue['IDno'];?></td>
              <td><?php echo $consumerList['DetailsViewed'][$consumerListKey];?></td>
              <td>
               <a type="button" onClick="fnRedirect('<?php echo site_url()?>/tracereport/customerdatalist/<?php echo $consumerListValue['EnquiryID'];?>/<?php echo $consumerListValue['EnquiryResultID'];?>')"  class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;&nbsp;View</a>              
			  </td>
            </tr>
			<?php }?>
          </table>
       </div>
	<?php } ?>
	
</section>
</body>
<script src="<?php echo base_url();?>bower_components/jquery/dist/jquery.min.js"></script>
<style>
.spinner {
    position: fixed;
    top: 50%;
    left: 50%;
    margin-left: -50px; /* half width of the spinner gif */
    margin-top: -50px; /* half height of the spinner gif */
    text-align:center;
    z-index:1234;
    overflow: auto;
    width: 200px; /* width of the spinner gif */
    height: 102px; /*hight of the spinner gif +2px to fix IE8 issue */
}

</style>
<script type="text/javascript">
$(document).ready(function(){
		$('#button-search').click(function() {
        $('#spinner').show();
		$('#form-search').submit();
    });
});


function fnRedirect(strVal){
	$('#spinner').show();
	location.href = strVal;
}
</script>
</html>
