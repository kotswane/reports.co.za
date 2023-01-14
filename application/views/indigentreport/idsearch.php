<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Company Name Search</title>
</head>
<body>
<section class="content-header">
    <h1>LKCentrix Solutions PTY LTD</h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo site_url();?>/indigentreport/idsearch"><i class="fa fa-dashboard"></i> Dashboard</a></li><li>Indigent Report</li>
        <li class="active">ID Search</li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">ID Search</h3>
            <div class="box-tools pull-right">
                <a href="<?php echo site_url();?>/indigentreport/idsearch" type="button" class="btn btn-box-tool"><i class="fa fa-list-ul"></i></a>
            </div>
        </div>
           <!-- Error Alert -->
            <?php if($errorMessage != ""){?>
				<div class="alert alert-danger" role="alert"><?php echo $errorMessage;?></div>
		   <?php }?>
        <form data-toggle="validator" role="ID Search" action="<?php echo site_url();?>/indigentreport/idsearch" method="post">
            <div class="box-body">
                 <div class="form-group">
                    <label for="idno">ID Search</label>
                    <input type="text"  class="form-control" value="<?php echo set_value('idno');?>" id="idno" name="idno" placeholder="ID Number" maxlength="60" autofocus required/>
                 </div>
				 <div class="g-recaptcha" data-sitekey="<?php echo $this->config->item('google_key') ?>"></div> 
            </div>
            <div class="box-footer">
                <button class="btn btn-primary" type="submit"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search</button>
            </div>
			<input type="hidden" name="postback" value="post"/>
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
              <th>Gender</th>
              <th>View</th>
            </tr>

            <tr>
              <td><?php echo $consumerList['ConsumerDetails']['Reference'];?></td>
              <td><?php echo (is_array($consumerList['ConsumerDetails']['FirstName'])?"":$consumerList['ConsumerDetails']['FirstName'])." ".(is_array($consumerList['ConsumerDetails']['SecondName'])?"":$consumerList['ConsumerDetails']['SecondName'])." ".(is_array($consumerList['ConsumerDetails']['Surname'])?"":$consumerList['ConsumerDetails']['Surname']);?></td>
              <td><?php echo $consumerList['ConsumerDetails']['IDNo'];?></td>
              <td><?php echo (($consumerList['ConsumerDetails']['GenderInd'] == "M")?"Male":"Female");?></td>
              <td>
               <a type="button"  href="<?php echo site_url()?>/indigentreport/getreport/<?php echo $consumerList['ConsumerDetails']['EnquiryID'];?>/<?php echo $consumerList['ConsumerDetails']['EnquiryResultID'];?>/<?php echo $consumerList['ConsumerDetails']['IDNo'];?>" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;&nbsp;View</a> 
              </td>
            </tr>
          </table>
       </div>
	<?php } ?>
</section>
</body>
</html>
