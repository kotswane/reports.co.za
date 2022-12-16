<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Telephone Search</title>
</head>
<body>
<section class="content-header">
    <h1>LKCentrix Solutions PTY LTD</h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo site_url();?>/lkcentrixreportservice/telephonesearch"><i class="fa fa-dashboard"></i> Dashboard</a></li><li>Trace Report</li>
        <li class="active">Telephone Search</li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Telephone Search</h3>
            <div class="box-tools pull-right">
				<a href="<?php echo site_url();?>/lkcentrixreportservice/telephonesearch" type="button" class="btn btn-box-tool"><i class="fa fa-list-ul"></i></a>
            </div>
        </div>
		   <?php if($errorMessage != ""){?>
				<div class="alert alert-danger" role="alert"><?php echo $errorMessage;?></div>
		   <?php }?>
        <form data-toggle="validator" role="Telephone Search form" action="<?php echo site_url();?>/lkcentrixreportservice/telephonesearch" method="post">
            <div class="box-body">
                    <ul class="nav nav-tabs">
                    <li><a data-toggle="tab" href="#tab1">Cell Number</a></li>
                    <li><a data-toggle="tab" href="#tab2">Landline Number</a></li>
                  </ul>

                  <div class="tab-content">
                    <div id="tab1" class="tab-pane fade in active">
                        <br>
                        <div class="form-group">
                        <label class="col-form-label">Cellphone Code</label>
                            <input type="text" class="form-control" name="cellphoneCode" value="<?php echo set_value('cellphoneCode');?>" id="cellphoneCode" name="cellphoneCode" placeholder="Enter Cell Number Code" maxlength="3" autofocus/>
                        </div>
                        <div class="form-group">
                        <label class="col-form-label">Cellphone Number</label>
                            <input type="text" class="form-control" name="cellphoneNo" value="<?php echo set_value('cellphoneNo');?>" id="cellphoneNo" name="cellphoneNo" placeholder="Enter Cell Number" maxlength="7"/>
                        </div>
                    </div>
 
                    <div id="tab2" class="tab-pane fade">
                        <br>
                         <div class="form-group">
                         <label class="col-form-label">Telephone Code</label>
                            <input type="text" class="form-control"  name="telephoneCode" value="<?php echo set_value('telephoneCode');?>" id="telephoneCode" name="telephoneCode" placeholder="Enter Telephone Number Code" maxlength="3"/>
                        </div>
                        <div class="form-group">
                        <label class="col-form-label">Telephone Number</label>
                            <input type="text" class="form-control" name="telephoneNo" value="<?php echo set_value('telephoneNo');?>" id="telephoneNo" name="telephoneNo" placeholder="Enter Telephone Number" maxlength="7"/>
                        </div>
                  </div>
            </div>
            </div>
            <div class="box-footer">
                <button class="btn btn-primary" type="submit"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search</button>
            </div>
			
        </form>
    </div>
	<?php
	 if (count($consumerList) > 0){
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
			<?php foreach($consumerList as $consumerListKey => $consumerListValue){?>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
               <a type="button"  href="/traceenquiry/view-addresstrace-search/nquiryId/enquiryResultId"  class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;&nbsp;View</a> 
              </td>
            </tr>
			<?php }?>
          </table>
       </div>
	<?php } ?>
</section>
</body>
</html>
