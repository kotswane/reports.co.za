<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>ID Search</title>
</head>
<body>
<section class="content-header">
    <h1>LKCentrix Solutions PTY LTD</h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo site_url();?>/lkcentrixreportservice/idsearch" ><i class="fa fa-dashboard"></i> Dashboard</a></li><li>Trace Report</li>
        <li class="active">ID Search</li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">ID Search</h3>
            <div class="box-tools pull-right">
                <a href="<?php echo site_url();?>/lkcentrixreportservice/idsearch" type="button" class="btn btn-box-tool"><i class="fa fa-list-ul"></i></a>
            </div>
        </div>
           <!-- Error Alert -->
  
		
		<?php if($errorMessage != ""){?>
		   <div> 
				<div class="alert alert-danger" role="alert"> 
					<?php echo $errorMessage; ?>
				</div>
			</div>
		<?php }?>
		
        <form data-toggle="validator" role="ID Search form" action="<?php echo site_url();?>/lkcentrixreportservice/idsearch" method="post">
            <div class="box-body">
                  <ul class="nav nav-tabs">
                    <li><a data-toggle="tab" href="#tab1">ID Number</a></li>
                    <li><a data-toggle="tab" href="#tab2">Passport Number</a></li>
                  </ul>

                  <div class="tab-content">
                    <div id="tab1" class="tab-pane fade in active">
                        <br>
                        
                        <div class="form-group">
                        <label class="col-form-label">ID Number</label>
                            <input type="text" class="form-control" value="<?php echo set_value("idNumber");?>" name="idNumber"  id="idNumber" placeholder="Enter ID Number" maxlength="13" autofocus/>
                        </div>
                         <div class="form-group">
                    <label class="col-form-label">Surname</label>
                            <input type="text" class="form-control" value="<?php echo set_value("surname");?>" name="surname" id="surname" placeholder="Enter Surname"/>
                        </div>
                     <div class="form-group">
                     <label class="col-form-label">First Name</label>
                           <input type="text"  class="form-control" value="<?php echo set_value("firstname");?>" name="firstname" id="firstname" placeholder="Enter FirstName"/>
                       </div>
                    </div>
 
                    <div id="tab2" class="tab-pane fade">
                        <br>
                        <div class="form-group">
                        <label class="col-form-label">Passport No</label>
                           <input type="text" class="form-control" value="<?php echo set_value("passportNo");?>" name = "passportNo" id="passportNo" placeholder="Passport Number" autofocus/>
                       </div>
                        <div class="form-group">
                    <label class="col-form-label">Surname</label>
                            <input type="text" class="form-control" value="<?php echo set_value("passsportSurname");?>" name="passsportSurname" id="passsportSurname" placeholder="Enter Surname"/>
                        </div>
                     <div class="form-group">
                     <label class="col-form-label">First Name</label>
                           <input type="text"  class="form-control" value="<?php echo set_value("passportFirstName");?>" name="passportFirstName" id="passportFirstName" placeholder="Enter FirstName"/>
                       </div>

                  </div>
            </div>
            </div>
            <div class="box-footer">
                <button class="btn btn-primary" id="button-upload" type="submit"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search</button>
            </div>
            <input type="hidden" name="postback" value="post"/>
            <div id="spinner" class="spinner" style="display:none;">
    <img id="img-spinner" src="spinner.gif" alt="Loading"/>
</div>
        </form>
        
    </div>
</section>
</body>
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
    width: 100px; /* width of the spinner gif */
    height: 102px; /*hight of the spinner gif +2px to fix IE8 issue */
}

</style>
<script type="text/javascript">
$(document).ready(function(){
    $('#button-upload').click(function() {
        $('#spinner').show();
    });
});
</script>
</html>
