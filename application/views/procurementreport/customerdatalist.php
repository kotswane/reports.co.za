<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Trace Report</title>
	<style>
	.scroll {
	   width: 600px;
	   overflow: scroll;
	}
	</style>
</head>
<body>
<section class="content-header">
    <?php

		if($report->SubscriberInputDetails->SubscriberName){
			?>
				<h1><?php echo $report->SubscriberInputDetails->SubscriberName;?></h1>
			<?php
		}
	?>
	<ol class="breadcrumb">
		<li class="active">Procurement Report</li>
	</ol>
</section>
<div class="content">
    <div class="box">
        <div class="box-header with-border">
		   <h3 class="box-title">Procurement Report</h3>
           <div class="box-tools pull-right">
			<div>
				 <a href="<?php echo site_url();?>/procurementreport/downloadidreport">
					<img src="<?php echo base_url();?>dist/img/pdf_icon.png" height="35" width="35"/>
					<span>Download PDF Document</span>
				</a>
			</div>	
			<br clear="all" />
            </div>
        </div>
        

        <div class="box-body no-padding">
            <div class="panel panel-primary">
                <div class="panel-heading">Enquiry Input Details</div>
                <div class="panel-body">
                    <div class="col">
                      <h4><span class="label label-default"> Enquiry Date</span>&nbsp;&nbsp;<span><?php echo $report->SubscriberInputDetails->EnquiryDate;?></span></h4>
                     <h4><span class="label label-default">Enquiry Type</span>&nbsp;&nbsp; <span><?php echo $report->SubscriberInputDetails->EnquiryType;?></span></h4>
                     <h4><span class="label label-default">Subscriber Name</span>&nbsp;&nbsp; <span><?php echo $report->SubscriberInputDetails->SubscriberName;?></span></h4>
                     <h4><span class="label label-default">Subscriber User Name</span>&nbsp;&nbsp; <span><?php echo $report->SubscriberInputDetails->SubscriberUserName;?></span></h4>
                      <h4><span class="label label-default">Enquiry Input</span>&nbsp;&nbsp; <span><?php echo $report->SubscriberInputDetails->EnquiryInput;?></span></h4><br>
                    </div>
                </div>
              </div>

              <div class="panel panel-primary">
                <div class="panel-heading">Commercial Business Information</div>
                <div class="panel-body">
                    <div class="col">
                        <div class="col-xs-4">Reference No:&nbsp;&nbsp;<strong><span><?php echo $report->CommercialBusinessInformation->ReferenceNo;?></span></strong></div>
                        <div class="col-xs-4">Commercial Name:&nbsp;&nbsp;<strong><span><?php echo (is_object($report->CommercialBusinessInformation->CommercialName)?"":$report->CommercialBusinessInformation->CommercialName);?></span></strong></div>
                        <div class="col-xs-4">Registration Number:&nbsp;&nbsp;<strong><span><?php echo (is_object($report->CommercialBusinessInformation->RegistrationNo)?"":$report->CommercialBusinessInformation->RegistrationNo);?><span></strong></div>
                        <div class="col-xs-4">BusinessStart Date:&nbsp;&nbsp;<strong><span><?php echo (is_object($report->CommercialBusinessInformation->BusinessStartDate)?"":$report->CommercialBusinessInformation->BusinessStartDate);?></span></strong></div>
                        <div class="col-xs-4">Financial Year End:&nbsp;&nbsp;<strong><span><?php echo (is_object($report->CommercialBusinessInformation->FinancialYearEnd)?"":$report->CommercialBusinessInformation->FinancialYearEnd);?></span></strong></div>
                        <div class="col-xs-4">Registration Number Old:&nbsp;&nbsp;<strong><span><?php (is_object($report->CommercialBusinessInformation->RegistrationNoOld)?"":$report->CommercialBusinessInformation->RegistrationNoOld);?></span></strong></div>
                        <div class="col-xs-4">Commercial Status:&nbsp;&nbsp;<strong><span><?php echo (is_object($report->CommercialBusinessInformation->CommercialStatus)?"":$report->CommercialBusinessInformation->CommercialStatus);?></span></strong></div>
                        <div class="col-xs-4">Commercial Type:&nbsp;&nbsp;<strong><span><?php echo (is_object($report->CommercialBusinessInformation->CommercialType)?"":$report->CommercialBusinessInformation->CommercialType);?></span></strong></div>
                        <div class="col-xs-4">Tax Number:&nbsp;&nbsp;<strong><span><?php echo (is_object($report->CommercialBusinessInformation->TaxNo)?"":$report->CommercialBusinessInformation->TaxNo);?></span></strong></div>
                        <div class="col-xs-4">Trade Name:&nbsp;&nbsp;<strong><span><?php echo (is_object($report->CommercialBusinessInformation->TradeName)?"":$report->CommercialBusinessInformation->TradeName);?></span></strong></div>
                        <div class="col-xs-4">Physical Address:&nbsp;&nbsp;<strong><span><?php echo (is_object($report->CommercialBusinessInformation->PhysicalAddress)?"":$report->CommercialBusinessInformation->PhysicalAddress);?></span></strong></div>
                        <div class="col-xs-4">Postal Address:&nbsp;&nbsp;<strong><span><?php echo (is_object($report->CommercialBusinessInformation->PostalAddress)?"":$report->CommercialBusinessInformation->PostalAddress);?></span></strong></div>
                        <div class="col-xs-4">Registration Date:&nbsp;&nbsp;<strong><span><?php echo (is_object($report->CommercialBusinessInformation->RegistrationDate)?"":$report->CommercialBusinessInformation->RegistrationDate);?></span></strong></div>
                        <div class="col-xs-4">Telephone Number:&nbsp;&nbsp;<strong><span><?php echo (is_object($report->CommercialBusinessInformation->TelephoneNo)?"":$report->CommercialBusinessInformation->TelephoneNo);?></span></strong></div>
                        <div class="col-xs-4">Fax Number:&nbsp;&nbsp;<strong><span><?php echo (is_object($report->CommercialBusinessInformation->FaxNo)?"":$report->CommercialBusinessInformation->FaxNo);?></span></strong></div>
                        <div class="col-xs-4">Bussiness Email:&nbsp;&nbsp;<strong><span><?php echo (is_object($report->CommercialBusinessInformation->BussEmail)?"":$report->CommercialBusinessInformation->BussEmail);?></span></strong></div>
                        <div class="col-xs-4">Bussiness Website&nbsp;&nbsp;<strong><span><?php echo (is_object($report->CommercialBusinessInformation->BussWebsite)?"":$report->CommercialBusinessInformation->BussWebsite);?></span></strong></div>
                        <div class="col-xs-4">Age of Business&nbsp;&nbsp;<strong><span><?php echo (is_object($report->CommercialBusinessInformation->AgeofBusiness)?"":$report->CommercialBusinessInformation->AgeofBusiness);?></span></strong></div>
                        <div class="col-xs-4">Authorised Capital Amount&nbsp;&nbsp;<strong><span><?php echo (is_object($report->CommercialBusinessInformation->AuthorisedCapitalAmt)?"":$report->CommercialBusinessInformation->AuthorisedCapitalAmt);?></span></strong></div>
                        <div class="col-xs-4">Issued Number Of Shares&nbsp;&nbsp;<strong><span><?php echo (is_object($report->CommercialBusinessInformation->IssuedNoOfShares)?"":$report->CommercialBusinessInformation->IssuedNoOfShares);?></span></strong></div>
                        <div class="col-xs-4">Registration Number Converted&nbsp;&nbsp;<strong><span><?php echo (is_object($report->CommercialBusinessInformation->RegistrationNoConverted)?"":$report->CommercialBusinessInformation->RegistrationNoConverted);?></span></strong></div>
                        <div class="col-xs-4">Financial Effective Date&nbsp;&nbsp;<strong><span><?php echo (is_object($report->CommercialBusinessInformation->FinancialEffectiveDate)?"":$report->CommercialBusinessInformation->FinancialEffectiveDate);?></span></strong></div>
                        <div class="col-xs-4">Authorised Number Of Shares&nbsp;&nbsp;<strong><span><?php echo (is_object($report->CommercialBusinessInformation->AuthorisedNoOfShares)?"":$report->CommercialBusinessInformation->AuthorisedNoOfShares);?></span></strong></div>
                        <div class="col-xs-4">Issued Capital Amount&nbsp;&nbsp;<strong><span><?php echo (is_object($report->CommercialBusinessInformation->IssuedCapitalAmt)?"":$report->CommercialBusinessInformation->IssuedCapitalAmt);?></span></strong></div>
                        <div class="col-xs-4">Commercial Status Date&nbsp;&nbsp;<strong><span><?php echo (is_object($report->CommercialBusinessInformation->CommercialStatusDate)?"":$report->CommercialBusinessInformation->CommercialStatusDate);?></span></strong></div>
                    </div>
                </div>
              </div>
                           
		       <div class="panel panel-primary">
                <div class="panel-heading">Director Previous Business interests</div>
                <div class="panel-body">
				
					<?php if($report->ActiveDirectorCurrentBusinessinterests){ ?>
                    <table class="table table-striped" id="ActiveDirectorCurrentBusinessinterestsTable">
                        <thead>
						<tr>
                             <th>Commercial Name</th>
                             <th>Registration No</th>
                             <th>Commercial Status</th>
                             <th>Judgments Count</th>
                             <th>Default Count</th>
                             <th>Liquidation</th>
                             <th>Age Of Business</th>
                             <th>Judgment Status</th>
                             <th>Director Status Date</th>
                        </tr>
						</thead>
						<tbody>
						<?php if(!is_array($report->ActiveDirectorCurrentBusinessinterests)){ ?>
						<tr>
							<td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->CommercialName)?"":$report->ActiveDirectorCurrentBusinessinterests->CommercialName);?></td>
							<td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->RegistrationNo)?"":$report->ActiveDirectorCurrentBusinessinterests->RegistrationNo);?></td>
							<td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->CommercialStatus)?"":$report->ActiveDirectorCurrentBusinessinterests->CommercialStatus);?></td>
							<td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->JudgmentsCount)?"":$report->ActiveDirectorCurrentBusinessinterests->JudgmentsCount);?></td>
							<td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->DefaultCount)?"":$report->ActiveDirectorCurrentBusinessinterests->DefaultCount);?></td>
							<td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->Liquidation)?"":$report->ActiveDirectorCurrentBusinessinterests->Liquidation);?></td>
							<td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->AgeOfBusiness)?"":$report->ActiveDirectorCurrentBusinessinterests->AgeOfBusiness);?></td>
							<td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->JudgmentStatus)?"":$report->ActiveDirectorCurrentBusinessinterests->JudgmentStatus);?></td>
							<td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->DirectorStatusDate)?"":$report->ActiveDirectorCurrentBusinessinterests->DirectorStatusDate);?></td>
						</tr>
						<?php } else {
							foreach($report->ActiveDirectorCurrentBusinessinterests as $ActiveDirectorCurrentBusinessinterestsKey => $ActiveDirectorCurrentBusinessinterestsVal){
							?>
								<tr>
									<td><?php echo (is_object($ActiveDirectorCurrentBusinessinterestsVal->CommercialName)?"":$ActiveDirectorCurrentBusinessinterestsVal->CommercialName);?></td>
									<td><?php echo (is_object($ActiveDirectorCurrentBusinessinterestsVal->RegistrationNo)?"":$ActiveDirectorCurrentBusinessinterestsVal->RegistrationNo);?></td>
									<td><?php echo (is_object($ActiveDirectorCurrentBusinessinterestsVal->CommercialStatus)?"":$ActiveDirectorCurrentBusinessinterestsVal->CommercialStatus);?></td>
									<td><?php echo (is_object($ActiveDirectorCurrentBusinessinterestsVal->JudgmentsCount)?"":$ActiveDirectorCurrentBusinessinterestsVal->JudgmentsCount);?></td>
									<td><?php echo (is_object($ActiveDirectorCurrentBusinessinterestsVal->DefaultCount)?"":$ActiveDirectorCurrentBusinessinterestsVal->DefaultCount);?></td>
									<td><?php echo (is_object($ActiveDirectorCurrentBusinessinterestsVal->Liquidation)?"":$ActiveDirectorCurrentBusinessinterestsVal->Liquidation);?></td>
									<td><?php echo (is_object($ActiveDirectorCurrentBusinessinterestsVal->AgeOfBusiness)?"":$ActiveDirectorCurrentBusinessinterestsVal->AgeOfBusiness);?></td>
									<td><?php echo (is_object($ActiveDirectorCurrentBusinessinterestsVal->JudgmentStatus)?"":$ActiveDirectorCurrentBusinessinterestsVal->JudgmentStatus);?></td>
									<td><?php echo (is_object($ActiveDirectorCurrentBusinessinterestsVal->DirectorStatusDate)?"":$ActiveDirectorCurrentBusinessinterestsVal->DirectorStatusDate);?></td>
								</tr>												
							<?php }
						} ?>
						</tbody>
                    </table>
					<?php } else { ?>
					<span>Director Previous Business interests Not Found</span><br>
					<?php } ?>
                </div>
              </div>	
			  
              <div class="panel panel-primary">
                <div class="panel-heading">Commercial Principal Information</div>
                <div class="panel-body" style="overflow:scroll !important;">
					<?php if($report->CommercialPrincipalInformation){ ?>
                    <table class="table table-striped" id="CommercialPrincipalInformation">
                        <thead>
						<tr>
                             <th>ID Number</th>
                             <th>Fullname</th>
                             <th>Birth Date</th>
                             <th>Director Status Code</th>
                             <th>Appointment Date</th>
                             <th>Designation</th>
                             <th>Member Control Percent</th>
                             <th>Director Indicator</th>
                             <th>Principal Type</th>
                             <th>RSA Resident</th>
                             <th>ID Verified</th>
                             <th>CIPRO Confirmed</th>
                             <th>Physical Address</th>
                             <th>Postal Address</th>
                             <th>Home Telephone No</th>
                             <th>Work Telephone No</th>
                             <th>Cellular No</th>
                             <th>Email Address</th>
                             <th>Age</th>
                             <th>Years With Business</th>
                             <th>Director Status Date</th>
                             <th>Executor</th>
                             <th>Executor Appointment Date</th>
                             <th>Estate</th>
                             <th>Resignation Date</th>
                             <th>Consumer Score</th>
                        </tr>
						</thead>
						<tbody>
						<?php 
							if(!is_object($report->CommercialPrincipalInformation)){
								foreach($report->CommercialPrincipalInformation as $CommercialPrincipalInformation){ ?>
								<tr>
									<td><?php echo (is_object($CommercialPrincipalInformation->IDNo)?"":$CommercialPrincipalInformation->IDNo);?></td>
									<td><?php echo (is_object($CommercialPrincipalInformation->Fullname)?"":$CommercialPrincipalInformation->Fullname);?></td>
									<td><?php echo (is_object($CommercialPrincipalInformation->BirthDate)?"":$CommercialPrincipalInformation->BirthDate);?></td>
									<td><?php echo (is_object($CommercialPrincipalInformation->DirectorStatusCode)?"":$CommercialPrincipalInformation->DirectorStatusCode);?></td>
									<td><?php echo (is_object($CommercialPrincipalInformation->AppointmentDate)?"":$CommercialPrincipalInformation->AppointmentDate);?></td>
									<td><?php echo (is_object($CommercialPrincipalInformation->Designation)?"":$CommercialPrincipalInformation->Designation);?></td>
									<td><?php echo (is_object($CommercialPrincipalInformation->MemberControlPerc)?"":$CommercialPrincipalInformation->MemberControlPerc);?></td>
									<td><?php echo (is_object($CommercialPrincipalInformation->DirectorIndicator)?"":$CommercialPrincipalInformation->DirectorIndicator);?></td>
									<td><?php echo (is_object($CommercialPrincipalInformation->PrincipalType)?"":$CommercialPrincipalInformation->PrincipalType);?></td>
									<td><?php echo (is_object($CommercialPrincipalInformation->ISRSAResident)?"":$CommercialPrincipalInformation->ISRSAResident);?></td>
									<td><?php echo (is_object($CommercialPrincipalInformation->ISIDVerified)?"":$CommercialPrincipalInformation->ISIDVerified);?></td>
									<td><?php echo (is_object($CommercialPrincipalInformation->ISCIPROConfirmed)?"":$CommercialPrincipalInformation->ISCIPROConfirmed);?></td>
									<td><?php echo (is_object($CommercialPrincipalInformation->PhysicalAddress)?"":$CommercialPrincipalInformation->PhysicalAddress);?></td>
									<td><?php echo (is_object($CommercialPrincipalInformation->PostalAddress)?"":$CommercialPrincipalInformation->PostalAddress);?></td>
									<td><?php echo (is_object($CommercialPrincipalInformation->HomeTelephoneNo)?"":$CommercialPrincipalInformation->HomeTelephoneNo);?></td>
									<td><?php echo (is_object($CommercialPrincipalInformation->WorkTelephoneNo)?"":$CommercialPrincipalInformation->WorkTelephoneNo);?></td>
									<td><?php echo (is_object($CommercialPrincipalInformation->CellularNo)?"":$CommercialPrincipalInformation->CellularNo);?></td>
									<td><?php echo (is_object($CommercialPrincipalInformation->EmailAddress)?"":$CommercialPrincipalInformation->EmailAddress);?></td>
									<td><?php echo (is_object($CommercialPrincipalInformation->Age)?"":$CommercialPrincipalInformation->Age);?></td>
									<td><?php echo (is_object($CommercialPrincipalInformation->YearsWithBusiness)?"":$CommercialPrincipalInformation->YearsWithBusiness);?></td>
									<td><?php echo (is_object($CommercialPrincipalInformation->DirectorStatusDate)?"":$CommercialPrincipalInformation->DirectorStatusDate);?></td>
									<td><?php echo (is_object($CommercialPrincipalInformation->Executor)?"":$CommercialPrincipalInformation->Executor);?></td>
									<td><?php echo (is_object($CommercialPrincipalInformation->ExecutorAppointmentDate)?"":$CommercialPrincipalInformation->ExecutorAppointmentDate);?></td>
									<td><?php echo (is_object($CommercialPrincipalInformation->Estate)?"":$CommercialPrincipalInformation->Estate);?></td>
									<td><?php echo (is_object($CommercialPrincipalInformation->ResignationDate)?"":$CommercialPrincipalInformation->ResignationDate);?></td>
									<td><?php echo (is_object($CommercialPrincipalInformation->ConsumerScore)?"":$CommercialPrincipalInformation->ConsumerScore);?></td>
								</tr>
								<?php }
							} else { ?>
									<tr>
										<td><?php echo (is_object($report->CommercialPrincipalInformation->IDNo)?"":$report->CommercialPrincipalInformation->IDNo);?></td>
										<td><?php echo (is_object($report->CommercialPrincipalInformation->Fullname)?"":$report->CommercialPrincipalInformation->Fullname);?></td>
										<td><?php echo (is_object($report->CommercialPrincipalInformation->BirthDate)?"":$report->CommercialPrincipalInformation->BirthDate);?></td>
										<td><?php echo (is_object($report->CommercialPrincipalInformation->DirectorStatusCode)?"":$report->CommercialPrincipalInformation->DirectorStatusCode);?></td>
										<td><?php echo (is_object($report->CommercialPrincipalInformation->AppointmentDate)?"":$report->CommercialPrincipalInformation->AppointmentDate);?></td>
										<td><?php echo (is_object($report->CommercialPrincipalInformation->Designation)?"":$report->CommercialPrincipalInformation->Designation);?></td>
										<td><?php echo (is_object($report->CommercialPrincipalInformation->MemberControlPerc)?"":$report->CommercialPrincipalInformation->MemberControlPerc);?></td>
										<td><?php echo (is_object($report->CommercialPrincipalInformation->DirectorIndicator)?"":$report->CommercialPrincipalInformation->DirectorIndicator);?></td>
										<td><?php echo (is_object($report->CommercialPrincipalInformation->PrincipalType)?"":$report->CommercialPrincipalInformation->PrincipalType);?></td>
										<td><?php echo (is_object($report->CommercialPrincipalInformation->ISRSAResident)?"":$report->CommercialPrincipalInformation->ISRSAResident);?></td>
										<td><?php echo (is_object($report->CommercialPrincipalInformation->ISIDVerified)?"":$report->CommercialPrincipalInformation->ISIDVerified);?></td>
										<td><?php echo (is_object($report->CommercialPrincipalInformation->ISCIPROConfirmed)?"":$report->CommercialPrincipalInformation->ISCIPROConfirmed);?></td>
										<td><?php echo (is_object($report->CommercialPrincipalInformation->PhysicalAddress)?"":$report->CommercialPrincipalInformation->PhysicalAddress);?></td>
										<td><?php echo (is_object($report->CommercialPrincipalInformation->PostalAddress)?"":$report->CommercialPrincipalInformation->PostalAddress);?></td>
										<td><?php echo (is_object($report->CommercialPrincipalInformation->HomeTelephoneNo)?"":$report->CommercialPrincipalInformation->HomeTelephoneNo);?></td>
										<td><?php echo (is_object($report->CommercialPrincipalInformation->WorkTelephoneNo)?"":$report->CommercialPrincipalInformation->WorkTelephoneNo);?></td>
										<td><?php echo (is_object($report->CommercialPrincipalInformation->CellularNo)?"":$report->CommercialPrincipalInformation->CellularNo);?></td>
										<td><?php echo (is_object($report->CommercialPrincipalInformation->EmailAddress)?"":$report->CommercialPrincipalInformation->EmailAddress);?></td>
										<td><?php echo (is_object($report->CommercialPrincipalInformation->Age)?"":$report->CommercialPrincipalInformation->Age);?></td>
										<td><?php echo (is_object($report->CommercialPrincipalInformation->YearsWithBusiness)?"":$report->CommercialPrincipalInformation->YearsWithBusiness);?></td>
										<td><?php echo (is_object($report->CommercialPrincipalInformation->DirectorStatusDate)?"":$report->CommercialPrincipalInformation->DirectorStatusDate);?></td>
										<td><?php echo (is_object($report->CommercialPrincipalInformation->Executor)?"":$report->CommercialPrincipalInformation->Executor);?></td>
										<td><?php echo (is_object($report->CommercialPrincipalInformation->ExecutorAppointmentDate)?"":$report->CommercialPrincipalInformation->ExecutorAppointmentDate);?></td>
										<td><?php echo (is_object($report->CommercialPrincipalInformation->Estate)?"":$report->CommercialPrincipalInformation->Estate);?></td>
										<td><?php echo (is_object($report->CommercialPrincipalInformation->ResignationDate)?"":$report->CommercialPrincipalInformation->ResignationDate);?></td>
										<td><?php echo (is_object($report->CommercialPrincipalInformation->ConsumerScore)?"":$report->CommercialPrincipalInformation->ConsumerScore);?></td>
									</tr>							
							<?php } ?>
						</tbody>
                    </table>
					<?php } else { ?>
					<span>Commercial Principal Information Not Found</span><br>
					<?php } ?>
                    
                </div>
              </div>

              <div class="panel panel-primary">
                <div class="panel-heading">Commercial Active Principal Info Summary</div>
                <div class="panel-body">
				<?php if($report->CommercialActivePrincipalInfoSummary){ ?>
					 <table class="table table-striped" id="CommercialActivePrincipalInfoSummary">
						<thead>
						<tr>
							<th>Number Of Principals</th>
							<th>Number Of Inactive Principals</th>
							<th>Average Age</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td><?php echo (is_object($report->CommercialActivePrincipalInfoSummary->NoOfPrincipals)?"":$report->CommercialActivePrincipalInfoSummary->NoOfPrincipals);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInfoSummary->NoOfInactivePrincipals)?"":$report->CommercialActivePrincipalInfoSummary->NoOfInactivePrincipals);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInfoSummary->AverageAge)?"":$report->CommercialActivePrincipalInfoSummary->AverageAge);?></td>
						</tr>
						</tbody>
					</table>
				<?php } else { ?>
                       <div>
                         <span>Commercial Active Principal Info Summary Not Found</span><br>
					</div>
				<?php } ?>
              </div>
           </div>

           <div class="panel panel-primary">
            <div class="panel-heading">Commercial InActive Principal Info Summary</div>
            <div class="panel-body">
			<?php if($report->CommercialInActivePrincipalInfoSummary){ ?>
                <table class="table table-striped" id="CommercialInActivePrincipalInfoSummary">
                    <thead>
					<tr>
                        <th>Number Of Principals</th>
                        <th>Number Of Inactive Principals</th>
                        <th>Average Age</th>
                    </tr>
					</thead>
					<tbody>
					<tr>
						<td><?php echo (is_object($report->CommercialInActivePrincipalInfoSummary->NoOfPrincipals)?"":$report->CommercialInActivePrincipalInfoSummary->NoOfPrincipals);?></td>
						<td><?php echo (is_object($report->CommercialInActivePrincipalInfoSummary->NoOfInactivePrincipals)?"":$report->CommercialInActivePrincipalInfoSummary->NoOfInactivePrincipals);?></td>
						<td><?php echo (is_object($report->CommercialInActivePrincipalInfoSummary->AverageAge)?"":$report->CommercialInActivePrincipalInfoSummary->AverageAge);?></td>
					</tr>
					</tbody>
                </table>
				<?php } else { ?>
                 <div>
                    <span>Commercial InActive Principal Info Summary Not Found</span><br>
                </div>
				<?php } ?>
            </div>
          </div>
		  
		  <div class="panel panel-primary">
                <div class="panel-heading">Commercial Active Principal Information</div>
                <div class="panel-body" style="overflow:scroll !important;">
					<?php 

					if($report->CommercialActivePrincipalInformation){ ?>
                    <table class="table table-striped" id="CommercialActivePrincipalInformation">
						<thead>
                        <tr>
                             <th>ID Number</th>
                             <th>Fullname</th>
                             <th>Birth Date</th>
                             <th>Director Status Code</th>
                             <th>Appointment Date</th>
                             <th>Designation</th>
                             <th>Member Control Percent</th>
                             <th>Director Indicator</th>
                             <th>Principal Type</th>
                             <th>RSA Resident</th>
                             <th>ID Verified</th>
                             <th>CIPRO Confirmed</th>
                             <th>Physical Address</th>
                             <th>Postal Address</th>
                             <th>Home Telephone No</th>
                             <th>Work Telephone No</th>
                             <th>Cellular No</th>
                             <th>Email Address</th>
                             <th>Age</th>
                             <th>Years With Business</th>
                             <th>Director Status Date</th>
                             <th>Executor</th>
                             <th>Executor Appointment Date</th>
                             <th>Estate</th>
                             <th>Resignation Date</th>
                             <th>Consumer Score</th>
                        </tr>
						</thead>
						<tbody>
						<?php if(is_array($report->CommercialActivePrincipalInformation)){
							
						foreach($report->CommercialActivePrincipalInformation as $CommercialActivePrincipalInformationKey => $CommercialActivePrincipalInformationVal){
							?>
						<tr>
							<td><?php echo (is_object($CommercialActivePrincipalInformationVal->IDNo)?"":$CommercialActivePrincipalInformationVal->IDNo);?></td>
							<td><?php echo (is_object($CommercialActivePrincipalInformationVal->Fullname)?"":$CommercialActivePrincipalInformationVal->Fullname);?></td>
							<td><?php echo (is_object($CommercialActivePrincipalInformationVal->BirthDate)?"":$CommercialActivePrincipalInformationVal->BirthDate);?></td>
							<td><?php echo (is_object($CommercialActivePrincipalInformationVal->DirectorStatusCode)?"":$CommercialActivePrincipalInformationVal->DirectorStatusCode);?></td>
							<td><?php echo (is_object($CommercialActivePrincipalInformationVal->AppointmentDate)?"":$CommercialActivePrincipalInformationVal->AppointmentDate);?></td>
							<td><?php echo (is_object($CommercialActivePrincipalInformationVal->Designation)?"":$CommercialActivePrincipalInformationVal->Designation);?></td>
							<td><?php echo (is_object($CommercialActivePrincipalInformationVal->MemberControlPerc)?"":$CommercialActivePrincipalInformationVal->MemberControlPerc);?></td>
							<td><?php echo (is_object($CommercialActivePrincipalInformationVal->DirectorIndicator)?"":$CommercialActivePrincipalInformationVal->DirectorIndicator);?></td>
							<td><?php echo (is_object($CommercialActivePrincipalInformationVal->PrincipalType)?"":$CommercialActivePrincipalInformationVal->PrincipalType);?></td>
							<td><?php echo (is_object($CommercialActivePrincipalInformationVal->ISRSAResident)?"":$CommercialActivePrincipalInformationVal->ISRSAResident);?></td>
							<td><?php echo (is_object($CommercialActivePrincipalInformationVal->ISIDVerified)?"":$CommercialActivePrincipalInformationVal->ISIDVerified);?></td>
							<td><?php echo (is_object($CommercialActivePrincipalInformationVal->ISCIPROConfirmed)?"":$CommercialActivePrincipalInformationVal->ISCIPROConfirmed);?></td>
							<td><?php echo (is_object($CommercialActivePrincipalInformationVal->PhysicalAddress)?"":$CommercialActivePrincipalInformationVal->PhysicalAddress);?></td>
							<td><?php echo (is_object($CommercialActivePrincipalInformationVal->PostalAddress)?"":$CommercialActivePrincipalInformationVal->PostalAddress);?></td>
							<td><?php echo (is_object($CommercialActivePrincipalInformationVal->HomeTelephoneNo)?"":$CommercialActivePrincipalInformationVal->HomeTelephoneNo);?></td>
							<td><?php echo (is_object($CommercialActivePrincipalInformationVal->WorkTelephoneNo)?"":$CommercialActivePrincipalInformationVal->WorkTelephoneNo);?></td>
							<td><?php echo (is_object($CommercialActivePrincipalInformationVal->CellularNo)?"":$CommercialActivePrincipalInformationVal->CellularNo);?></td>
							<td><?php echo (is_object($CommercialActivePrincipalInformationVal->EmailAddress)?"":$CommercialActivePrincipalInformationVal->EmailAddress);?></td>
							<td><?php echo (is_object($CommercialActivePrincipalInformationVal->Age)?"":$CommercialActivePrincipalInformationVal->Age);?></td>
							<td><?php echo (is_object($CommercialActivePrincipalInformationVal->YearsWithBusiness)?"":$CommercialActivePrincipalInformationVal->YearsWithBusiness);?></td>
							<td><?php echo (is_object($CommercialActivePrincipalInformationVal->DirectorStatusDate)?"":$CommercialActivePrincipalInformationVal->DirectorStatusDate);?></td>
							<td><?php echo (is_object($CommercialActivePrincipalInformationVal->Executor)?"":$CommercialActivePrincipalInformationVal->Executor);?></td>
							<td><?php echo (is_object($CommercialActivePrincipalInformationVal->ExecutorAppointmentDate)?"":$CommercialActivePrincipalInformationVal->ExecutorAppointmentDate);?></td>
							<td><?php echo (is_object($CommercialActivePrincipalInformationVal->Estate)?"":$CommercialActivePrincipalInformationVal->Estate);?></td>
							<td><?php echo (is_object($CommercialActivePrincipalInformationVal->ResignationDate)?"":$CommercialActivePrincipalInformationVal->ResignationDate);?></td>
							<td><?php echo (is_object($CommercialActivePrincipalInformationVal->ConsumerScore)?"":$CommercialActivePrincipalInformationVal->ConsumerScore);?></td>
						 </tr>
						<?php }
						} else { ?>
						  <tr>
							<td><?php echo (is_object($report->CommercialActivePrincipalInformation->IDNo)?"":$report->CommercialActivePrincipalInformation->IDNo);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInformation->Fullname)?"":$report->CommercialActivePrincipalInformation->Fullname);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInformation->BirthDate)?"":$report->CommercialActivePrincipalInformation->BirthDate);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInformation->DirectorStatusCode)?"":$report->CommercialActivePrincipalInformation->DirectorStatusCode);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInformation->AppointmentDate)?"":$report->CommercialActivePrincipalInformation->AppointmentDate);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInformation->Designation)?"":$report->CommercialActivePrincipalInformation->Designation);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInformation->MemberControlPerc)?"":$report->CommercialActivePrincipalInformation->MemberControlPerc);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInformation->DirectorIndicator)?"":$report->CommercialActivePrincipalInformation->DirectorIndicator);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInformation->PrincipalType)?"":$report->CommercialActivePrincipalInformation->PrincipalType);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInformation->ISRSAResident)?"":$report->CommercialActivePrincipalInformation->ISRSAResident);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInformation->ISIDVerified)?"":$report->CommercialActivePrincipalInformation->ISIDVerified);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInformation->ISCIPROConfirmed)?"":$report->CommercialActivePrincipalInformation->ISCIPROConfirmed);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInformation->PhysicalAddress)?"":$report->CommercialActivePrincipalInformation->PhysicalAddress);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInformation->PostalAddress)?"":$report->CommercialActivePrincipalInformation->PostalAddress);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInformation->HomeTelephoneNo)?"":$report->CommercialActivePrincipalInformation->HomeTelephoneNo);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInformation->WorkTelephoneNo)?"":$report->CommercialActivePrincipalInformation->WorkTelephoneNo);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInformation->CellularNo)?"":$report->CommercialActivePrincipalInformation->CellularNo);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInformation->EmailAddress)?"":$report->CommercialActivePrincipalInformation->EmailAddress);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInformation->Age)?"":$report->CommercialActivePrincipalInformation->Age);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInformation->YearsWithBusiness)?"":$report->CommercialActivePrincipalInformation->YearsWithBusiness);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInformation->DirectorStatusDate)?"":$report->CommercialActivePrincipalInformation->DirectorStatusDate);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInformation->Executor)?"":$report->CommercialActivePrincipalInformation->Executor);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInformation->ExecutorAppointmentDate)?"":$report->CommercialActivePrincipalInformation->ExecutorAppointmentDate);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInformation->Estate)?"":$report->CommercialActivePrincipalInformation->Estate);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInformation->ResignationDate)?"":$report->CommercialActivePrincipalInformation->ResignationDate);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInformation->ConsumerScore)?"":$report->CommercialActivePrincipalInformation->ConsumerScore);?></td>
						  </tr>
						<?php } ?>
						</tbody>
                    </table>
					<?php } else { ?>
					<span>Commercial Principal Information Not Found</span><br>
					<?php } ?>
                    
                </div>
              </div>

 
			<div class="panel panel-primary">
                <div class="panel-heading">Active Director Current Business interests</div>
                <div class="panel-body">
					<?php if($report->ActiveDirectorCurrentBusinessinterests){ ?>
                    <table class="table table-striped" id="ActiveDirectorCurrentBusinessinterests">
                        <thead>
						<tr>
                             <th>Commercial Name</th>
                             <th>Registration No</th>
                             <th>Commercial Status</th>
                             <th>Judgments Count</th>
                             <th>Default Count</th>
                             <th>Liquidation</th>
                             <th>Age Of Business</th>
                             <th>Judgment Status</th>
                             <th>Director Status Date</th>
                        </tr>
						</thead>
						<tbody>
						<?php if(!is_array($report->ActiveDirectorCurrentBusinessinterests)){ ?>
						<tr>
							<td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->CommercialName)?"":$report->ActiveDirectorCurrentBusinessinterests->CommercialName);?></td>
							<td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->RegistrationNo)?"":$report->ActiveDirectorCurrentBusinessinterests->RegistrationNo);?></td>
							<td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->CommercialStatus)?"":$report->ActiveDirectorCurrentBusinessinterests->CommercialStatus);?></td>
							<td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->JudgmentsCount)?"":$report->ActiveDirectorCurrentBusinessinterests->JudgmentsCount);?></td>
							<td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->DefaultCount)?"":$report->ActiveDirectorCurrentBusinessinterests->DefaultCount);?></td>
							<td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->Liquidation)?"":$report->ActiveDirectorCurrentBusinessinterests->Liquidation);?></td>
							<td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->AgeOfBusiness)?"":$report->ActiveDirectorCurrentBusinessinterests->AgeOfBusiness);?></td>
							<td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->JudgmentStatus)?"":$report->ActiveDirectorCurrentBusinessinterests->JudgmentStatus);?></td>
							<td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->DirectorStatusDate)?"":$report->ActiveDirectorCurrentBusinessinterests->DirectorStatusDate);?></td>
						</tr>
						<?php } else {
							foreach($report->ActiveDirectorCurrentBusinessinterests as $ActiveDirectorCurrentBusinessinterestsKey => $ActiveDirectorCurrentBusinessinterestsVal){
							?>
								<tr>
									<td><?php echo (is_object($ActiveDirectorCurrentBusinessinterestsVal->CommercialName)?"":$ActiveDirectorCurrentBusinessinterestsVal->CommercialName);?></td>
									<td><?php echo (is_object($ActiveDirectorCurrentBusinessinterestsVal->RegistrationNo)?"":$ActiveDirectorCurrentBusinessinterestsVal->RegistrationNo);?></td>
									<td><?php echo (is_object($ActiveDirectorCurrentBusinessinterestsVal->CommercialStatus)?"":$ActiveDirectorCurrentBusinessinterestsVal->CommercialStatus);?></td>
									<td><?php echo (is_object($ActiveDirectorCurrentBusinessinterestsVal->JudgmentsCount)?"":$ActiveDirectorCurrentBusinessinterestsVal->JudgmentsCount);?></td>
									<td><?php echo (is_object($ActiveDirectorCurrentBusinessinterestsVal->DefaultCount)?"":$ActiveDirectorCurrentBusinessinterestsVal->DefaultCount);?></td>
									<td><?php echo (is_object($ActiveDirectorCurrentBusinessinterestsVal->Liquidation)?"":$ActiveDirectorCurrentBusinessinterestsVal->Liquidation);?></td>
									<td><?php echo (is_object($ActiveDirectorCurrentBusinessinterestsVal->AgeOfBusiness)?"":$ActiveDirectorCurrentBusinessinterestsVal->AgeOfBusiness);?></td>
									<td><?php echo (is_object($ActiveDirectorCurrentBusinessinterestsVal->JudgmentStatus)?"":$ActiveDirectorCurrentBusinessinterestsVal->JudgmentStatus);?></td>
									<td><?php echo (is_object($ActiveDirectorCurrentBusinessinterestsVal->DirectorStatusDate)?"":$ActiveDirectorCurrentBusinessinterestsVal->DirectorStatusDate);?></td>
								</tr>												
							<?php }
						} ?>
						</tbody>
                    </table>
					<?php } else { ?>
					<span>Active Director Current Business interests Not Found</span><br>
					<?php } ?>
                </div>
              </div>			  

			  
          <div class="panel panel-primary">
            <div class="panel-heading">Active Director Address History</div>
            <div class="panel-body">
				<?php if($report->ActiveDirectorAddressHistory){?>
                <table class="table table-striped" id="ActiveDirectorAddressHistory">
                    <thead>
					<tr>
                        <th>Address Type</th>
                        <th>Address1</th>
                        <th>Address2</th>
                        <th>Address3</th>
                        <th>Address4</th>
                        <th>Postal Code</th>
                        <th>Created On Date</th>
                    </tr>
					<thead>
					<tbody>
						<?php 
							 if(!is_object($report->ActiveDirectorAddressHistory)){
								foreach($report->ActiveDirectorAddressHistory as $ActiveDirectorAddressHistory){ ?>
								<tr>
									<td><?php echo (is_object($ActiveDirectorAddressHistory->AddressTypeInd)?"":$ActiveDirectorAddressHistory->AddressTypeInd);?></td>
									<td><?php echo (is_object($ActiveDirectorAddressHistory->Address1)?"":$ActiveDirectorAddressHistory->Address1);?></td>
									<td><?php echo (is_object($ActiveDirectorAddressHistory->Address2)?"":$ActiveDirectorAddressHistory->Address2);?></td>
									<td><?php echo (is_object($ActiveDirectorAddressHistory->Address3)?"":$ActiveDirectorAddressHistory->Address3);?></td>
									<td><?php echo (is_object($ActiveDirectorAddressHistory->Address4)?"":$ActiveDirectorAddressHistory->Address4);?></td>
									<td><?php echo (is_object($ActiveDirectorAddressHistory->PostalCode)?"":$ActiveDirectorAddressHistory->PostalCode);?></td>
									<td><?php echo (is_object($ActiveDirectorAddressHistory->CreatedOnDate)?"":$ActiveDirectorAddressHistory->CreatedOnDate);?></td>
								</tr>
								<?php } 
							 } else {?>
								<tr>
									<td><?php echo (is_object($report->ActiveDirectorAddressHistory->AddressTypeInd)?"":$report->ActiveDirectorAddressHistory->AddressTypeInd);?></td>
									<td><?php echo (is_object($report->ActiveDirectorAddressHistory->Address1)?"":$report->ActiveDirectorAddressHistory->Address1);?></td>
									<td><?php echo (is_object($report->ActiveDirectorAddressHistory->Address2)?"":$report->ActiveDirectorAddressHistory->Address2);?></td>
									<td><?php echo (is_object($report->ActiveDirectorAddressHistory->Address3)?"":$report->ActiveDirectorAddressHistory->Address3);?></td>
									<td><?php echo (is_object($report->ActiveDirectorAddressHistory->Address4)?"":$report->ActiveDirectorAddressHistory->Address4);?></td>
									<td><?php echo (is_object($report->ActiveDirectorAddressHistory->PostalCode)?"":$report->ActiveDirectorAddressHistory->PostalCode);?></td>
									<td><?php echo (is_object($report->ActiveDirectorAddressHistory->CreatedOnDate)?"":$report->ActiveDirectorAddressHistory->CreatedOnDate);?></td>
								</tr>							 
							 <?php } ?>
					</tbody>		 
                </table>
				<?php } else { ?>
                 <div>
					<span>Active Director Address History Not Found</span><br>
                </div>
				<?php } ?>
          </div>
         </div>
 

          <div class="panel panel-primary">
            <div class="panel-heading">Inactive Director Address History</div>
            <div class="panel-body">
				<?php if($report->InactiveDirectorAddressHistory){?>
                <table class="table table-striped" id="InactiveDirectorAddressHistory">
                    <thead>
					<tr>
                        <th>Address Type</th>
                        <th>Address1</th>
                        <th>Address2</th>
                        <th>Address3</th>
                        <th>Address4</th>
                        <th>Postal Code</th>
                        <th>Created On Date</th>
                    </tr>
					</thead>
					<tbody>
						<?php 
							 if(!is_object($report->InactiveDirectorAddressHistory)){
								foreach($report->InactiveDirectorAddressHistory as $InactiveDirectorAddressHistory){ ?>
								<tr>
									<td><?php echo (is_object($InactiveDirectorAddressHistory->AddressTypeInd)?"":$InactiveDirectorAddressHistory->AddressTypeInd);?></td>
									<td><?php echo (is_object($InactiveDirectorAddressHistory->Address1)?"":$InactiveDirectorAddressHistory->Address1);?></td>
									<td><?php echo (is_object($InactiveDirectorAddressHistory->Address2)?"":$InactiveDirectorAddressHistory->Address2);?></td>
									<td><?php echo (is_object($InactiveDirectorAddressHistory->Address3)?"":$InactiveDirectorAddressHistory->Address3);?></td>
									<td><?php echo (is_object($InactiveDirectorAddressHistory->Address4)?"":$InactiveDirectorAddressHistory->Address4);?></td>
									<td><?php echo (is_object($InactiveDirectorAddressHistory->PostalCode)?"":$InactiveDirectorAddressHistory->PostalCode);?></td>
									<td><?php echo (is_object($InactiveDirectorAddressHistory->CreatedOnDate)?"":$InactiveDirectorAddressHistory->CreatedOnDate);?></td>
								</tr>
								<?php } 
							 } else {?>
								<tr>
									<td><?php echo (is_object($report->InactiveDirectorAddressHistory->AddressTypeInd)?"":$report->InactiveDirectorAddressHistory->AddressTypeInd);?></td>
									<td><?php echo (is_object($report->InactiveDirectorAddressHistory->Address1)?"":$report->InactiveDirectorAddressHistory->Address1);?></td>
									<td><?php echo (is_object($report->InactiveDirectorAddressHistory->Address2)?"":$report->InactiveDirectorAddressHistory->Address2);?></td>
									<td><?php echo (is_object($report->InactiveDirectorAddressHistory->Address3)?"":$report->InactiveDirectorAddressHistory->Address3);?></td>
									<td><?php echo (is_object($report->InactiveDirectorAddressHistory->Address4)?"":$report->InactiveDirectorAddressHistory->Address4);?></td>
									<td><?php echo (is_object($report->InactiveDirectorAddressHistory->PostalCode)?"":$report->InactiveDirectorAddressHistory->PostalCode);?></td>
									<td><?php echo (is_object($report->InactiveDirectorAddressHistory->CreatedOnDate)?"":$report->InactiveDirectorAddressHistory->CreatedOnDate);?></td>
								</tr>							 
							 <?php } ?>
					</tbody>
                </table>
				<?php } else { ?>
                 <div>
					<span>Inactive Director Address History Not Found</span><br>
                </div>
				<?php } ?>
          </div>
         </div>


         <div class="panel panel-primary">
            <div class="panel-heading">Active Director Contact History</div>
            <div class="panel-body">
				<?php if($report->ActiveDirectorContactHistory){?>
                <table class="table table-striped" id="ActiveDirectorContactHistory">
                    <thead>
					<tr>
                        <th>Bureau Update</th>
                        <th>Captured date</th>
                        <th>Contact Type</th>
                        <th>Detail</th>
                    </tr>
					</thead>
					<tbody>
						<?php 
							 if(!is_object($report->ActiveDirectorContactHistory)){
								foreach($report->ActiveDirectorContactHistory as $ActiveDirectorContactHistory){ ?>
								<tr>
									<td><?php echo (is_object($ActiveDirectorContactHistory->BureauUpdate)?"":$ActiveDirectorContactHistory->BureauUpdate);?></td>
									<td><?php echo (is_object($ActiveDirectorContactHistory->Captureddate)?"":$ActiveDirectorContactHistory->Captureddate);?></td>
									<td><?php echo (is_object($ActiveDirectorContactHistory->ContactType)?"":$ActiveDirectorContactHistory->ContactType);?></td>
									<td><?php echo (is_object($ActiveDirectorContactHistory->Detail)?"":$ActiveDirectorContactHistory->Detail);?></td>
								</tr>
								<?php } 
							 } else {?>
								<tr>
									<td><?php echo (is_object($report->ActiveDirectorContactHistory->BureauUpdate)?"":$report->ActiveDirectorContactHistory->BureauUpdate);?></td>
									<td><?php echo (is_object($report->ActiveDirectorContactHistory->Captureddate)?"":$report->ActiveDirectorContactHistory->Captureddate);?></td>
									<td><?php echo (is_object($report->ActiveDirectorContactHistory->ContactType)?"":$report->ActiveDirectorContactHistory->ContactType);?></td>
									<td><?php echo (is_object($report->ActiveDirectorContactHistory->Detail)?"":$report->ActiveDirectorContactHistory->Detail);?></td>
								</tr>							 
							 <?php } ?>
					</tbody>
                </table>
				<?php } else { ?>
                 <div>
					<span>Active Director Contact History Not Found</span><br>
                </div>
				<?php } ?>
          </div>
         </div>

       <div class="panel panel-primary">
            <div class="panel-heading">Director Contact History</div>
            <div class="panel-body">
				<?php if($report->DirectorContactHistory){?>
                <table class="table table-striped " id="DirectorContactHistory">
                    <thead>
					<tr>
                        <th>Bureau Update</th>
                        <th>Captured date</th>
                        <th>Contact Type</th>
                        <th>Detail</th>
                    </tr>
					</thead>
					<tbody>
						<?php 
							 if(!is_object($report->DirectorContactHistory)){
								foreach($report->DirectorContactHistory as $DirectorContactHistory){ ?>
								<tr>
									<td><?php echo (is_object($DirectorContactHistory->BureauUpdate)?"":$DirectorContactHistory->BureauUpdate);?></td>
									<td><?php echo (is_object($DirectorContactHistory->Captureddate)?"":$DirectorContactHistory->Captureddate);?></td>
									<td><?php echo (is_object($DirectorContactHistory->ContactType)?"":$DirectorContactHistory->ContactType);?></td>
									<td><?php echo (is_object($DirectorContactHistory->Detail)?"":$DirectorContactHistory->Detail);?></td>
								</tr>
								<?php } 
							 } else {?>
								<tr>
									<td><?php echo (is_object($report->DirectorContactHistory->BureauUpdate)?"":$report->DirectorContactHistory->BureauUpdate);?></td>
									<td><?php echo (is_object($report->DirectorContactHistory->Captureddate)?"":$report->DirectorContactHistory->Captureddate);?></td>
									<td><?php echo (is_object($report->DirectorContactHistory->ContactType)?"":$report->DirectorContactHistory->ContactType);?></td>
									<td><?php echo (is_object($report->DirectorContactHistory->Detail)?"":$report->DirectorContactHistory->Detail);?></td>
								</tr>							 
							 <?php } ?>
					</tbody>
                </table>
				<?php } else { ?>
                 <div>
					<span>Director Contact History Not Found</span><br>
                </div>
				<?php } ?>
          </div>
         </div>
		 
    </div>
    </div>
</div>
</body>
<script>
$(document).ready(function(){
    $('#DirectorContactHistory').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
    $('#ActiveDirectorContactHistory').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
    $('#InactiveDirectorAddressHistory').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
    $('#ActiveDirectorAddressHistory').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
    $('#ActiveDirectorCurrentBusinessinterests').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
    $('#CommercialActivePrincipalInformation').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
    $('#CommercialInActivePrincipalInfoSummary').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
    $('#CommercialActivePrincipalInfoSummary').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
    $('#CommercialPrincipalInformation').DataTable();
    $('#ActiveDirectorCurrentBusinessinterestsTable').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
});
</script>
</html>