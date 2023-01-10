<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Trace Report</title>
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
		<li><a href="/tracereport/idsearch"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		<li class="active">Trace Report</li>
	</ol>
</section>
<div class="content">
    <div class="box">
        <div class="box-header with-border">
           	<?php
				if($report->SubscriberInputDetails->EnquiryType =='Consumer Telephone Trace'){
					?>
						<h3 class="box-title"><?php echo $report->SubscriberInputDetails->EnquiryType." Report";?></h3>
					<?php
				}
			?>
           <div class="box-tools pull-right">
		   <?php
				if($report->SubscriberInputDetails->EnquiryType =='Consumer Telephone Trace'){?>
				<div>
					 <a href="<?php echo site_url();?>/tracereport/downloadidreport">
						<img src="<?php echo base_url();?>dist/img/pdf_icon.png" height="35" width="35"/>
						<span>Download PDF Document</span>
					</a>
				</div>		
			<?php
				}
				if($report->SubscriberInputDetails->EnquiryType =='Consumer Easy Trace'){?>
				<div>
					 <a href="<?php echo site_url();?>/tracereport/downloadidreport">
						<img src="<?php echo base_url();?>dist/img/pdf_icon.png" height="35" width="35"/>
						<span>Download PDF Document</span>
					</a>
				</div>		
			<?php
				}
				if($report->SubscriberInputDetails->EnquiryType =='Consumer Address Trace'){?>
				<div>
					 <a href="<?php echo site_url();?>/tracereport/downloadidreport">
						<img src="<?php echo base_url();?>dist/img/pdf_icon.png" height="35" width="35"/>
						<span>Download PDF Document</span>
					</a>
				</div>		
			<?php
				}
				if($report->SubscriberInputDetails->EnquiryType =='Consumer Trace'){?>
				<div>
					 <a href="<?php echo site_url();?>/tracereport/downloadidreport">
						<img src="<?php echo base_url();?>dist/img/pdf_icon.png" height="35" width="35"/>
						<span>Download PDF Document</span>
					</a>
				</div>
				<?php 
			} ?>
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
                <div class="panel-heading">Personal Details Summary</div>
                <div class="panel-body">
                    <div class="col">
                        <div class="col-xs-4 ">Reference No:&nbsp;&nbsp;<strong><span><?php echo $report->ConsumerDetail->ReferenceNo;?></span></strong></div>
                        <div class="col-xs-4">ID No:&nbsp;&nbsp;<strong><span><?php echo $report->ConsumerDetail->IDNo;?></span></strong></div>
                        <div class="col-xs-4">Surname:&nbsp;&nbsp;<strong><span><?php echo $report->ConsumerDetail->Surname;?></span></strong></div>
                        <div class="col-xs-4">First Name:&nbsp;&nbsp;<strong><span><?php echo $report->ConsumerDetail->FirstName;?></span></strong></div>
                        <div class="col-xs-4">Second Name:&nbsp;&nbsp;<strong><span><?php echo $report->ConsumerDetail->SecondName;?></span></strong></div>
                        <div class="col-xs-4">Maiden Name:&nbsp;&nbsp;<strong><span><?php $report->ConsumerDetail->MaidenName;?></span></strong></div>
                        <div class="col-xs-4">Title:&nbsp;&nbsp;<strong><span><?php echo $report->ConsumerDetail->TitleDesc;?></span></strong></div>
                        <div class="col-xs-4">Gender:&nbsp;&nbsp;<strong><span><?php echo $report->ConsumerDetail->Gender;?></span></strong></div>
                        <div class="col-xs-4">Date of Birth:&nbsp;&nbsp;<strong><span><?php echo $report->ConsumerDetail->BirthDate;?></span></strong></div>
                        <div class="col-xs-4">Marital Status:&nbsp;&nbsp;<strong><span><?php echo $report->ConsumerDetail->MaritalStatusDesc;?></span></strong></div>
                        <div class="col-xs-4">External Reference No:&nbsp;&nbsp;<strong><span><?php echo $report->ConsumerDetail->ExternalReference;?></span></strong></div>
                        <div class="col-xs-4">Passport or 2nd ID No:&nbsp;&nbsp;<strong><span><?php echo $report->ConsumerDetail->PassportNo;?></span></strong></div>
                        <div class="col-xs-4">Residential Address:&nbsp;&nbsp;<strong><span><?php echo $report->ConsumerDetail->ResidentialAddress;?></span></strong></div>
                        <div class="col-xs-4">Postal Address:&nbsp;&nbsp;<strong><span><?php echo $report->ConsumerDetail->PostalAddress;?></span></strong></div>
                        <div class="col-xs-4">Telephone No. (H):&nbsp;&nbsp;<strong><span><?php echo $report->ConsumerDetail->HomeTelephoneNo;?></span></strong></div>
                        <div class="col-xs-4">Telephone No (W):&nbsp;&nbsp;<strong><span><?php echo $report->ConsumerDetail->WorkTelephoneNo;?></span></strong></div>
                        <div class="col-xs-4">Cellular/Mobile:&nbsp;&nbsp;<strong><span><?php echo $report->ConsumerDetail->CellularNo;?></span></strong></div>
                        <div class="col-xs-4">E-mail Address&nbsp;&nbsp;<strong><span><?php echo $report->ConsumerDetail->EmailAddress;?></span></strong></div>
                        <div class="col-xs-4">Current Employer&nbsp;&nbsp;<strong><span><?php echo $report->ConsumerDetail->EmployerDetail;?></span></strong></div>
                    </div>
                </div>
              </div>
              
          <!-- <div class="panel panel-primary">
            <div class="panel-heading">AKA Names</div>
            <div class="panel-body">
                <table class="table table-striped" th:if="${not #lists.isEmpty(traceReportRequest.akaNames)}">
                    <tr>
                        <th>Bureau UpdateDate</th>
                        <th>Home Affairs Name</th>
                    </tr>
                    <tr th:each="row : ${traceReportRequest.akaNames}">
                        <td th:text="${row.lastUpdateddate}"></td>
                        <td th:text="${row.homeAffairsName}"></td>
                   </tr>
                </table>
                 <div>
                     <span th:if="${#lists.isEmpty(traceReportRequest.akaNames)}" th:text="${traceReportRequest.traceReportMessage.noAkaname}"></span>
                </div>
            </div>
          </div>-->
              
              <div class="panel panel-primary">
                <div class="panel-heading">Potential Fraud Indicators</div>
                <div class="panel-body">
                    <div class="col">
                        <div class="col-xs-4 ">ID No. Verified Status:&nbsp;&nbsp;<strong><span><?php echo $report->ConsumerFraudIndicatorsSummary->HomeAffairsVerificationYN;?></span></strong></div>
                        <div class="col-xs-4">ID No. Deceased Status:&nbsp;&nbsp;<strong><span><?php echo $report->ConsumerFraudIndicatorsSummary->HomeAffairsDeceasedStatus;?></span></strong></div>
                        <div class="col-xs-4">ID No. Found on Fraud Database:&nbsp;&nbsp;<strong><span><?php echo $report->ConsumerFraudIndicatorsSummary->SAFPSListingYN;?></span></strong></div>
                    </div>
                </div>
              </div>

              <div class="panel panel-primary">
                <div class="panel-heading">Address History</div>
                <div class="panel-body">
					<?php if($report->ConsumerAddressHistory){ ?>
                    <table class="table table-striped">
                        <tr>
                            <th>Bureau UpdateDate</th>
                            <th>Type</th>
                             <th>Line1</th>
                             <th>Line2</th>
                             <th>Line3</th>
                             <th>Line4</th>
                             <th>Postal Code</th>
                        </tr>
						<?php 
							if(!is_object($report->ConsumerAddressHistory)){
								foreach($report->ConsumerAddressHistory as $ConsumerAddressHistory){ ?>
								<tr>
									<td><?php echo $ConsumerAddressHistory->LastUpdatedDate;?></td>
									<td><?php echo $ConsumerAddressHistory->AddressType;?></td>
									<td><?php echo $ConsumerAddressHistory->Address1;?></td>
									<td><?php echo $ConsumerAddressHistory->Address2;?></td>
									<td><?php echo $ConsumerAddressHistory->Address3;?></td>
									<td><?php echo $ConsumerAddressHistory->Address4;?></td>
									<td><?php echo $ConsumerAddressHistory->PostalCode;?></td>
								</tr>
								<?php }
							} else { ?>
								<tr>
									<td><?php echo $report->ConsumerAddressHistory->LastUpdatedDate;?></td>
									<td><?php echo $report->ConsumerAddressHistory->AddressType;?></td>
									<td><?php echo $report->ConsumerAddressHistory->Address1;?></td>
									<td><?php echo $report->ConsumerAddressHistory->Address2;?></td>
									<td><?php echo $report->ConsumerAddressHistory->Address3;?></td>
									<td><?php echo $report->ConsumerAddressHistory->Address4;?></td>
									<td><?php echo $report->ConsumerAddressHistory->PostalCode;?></td>
								</tr>							
							<?php } ?>
                    </table>
					<?php } else { ?>
					<span>Address History Not Found</span><br>
					<?php } ?>
                    
                </div>
              </div>

              <div class="panel panel-primary">
                <div class="panel-heading">Consumer Email History</div>
                <div class="panel-body">
				<?php if($report->ConsumerEmailHistory){ ?>
                    <div>
						<?php 
						
						if (!is_object($report->ConsumerEmailHistory)){
							foreach($report->ConsumerEmailHistory as $ConsumerEmailHistory){?>
							<div>
							  Bureau UpdateDate <span><?php echo $ConsumerEmailHistory->LastUpdatedDate;?></span><br>
							  E-mail Address <span><?php echo $ConsumerEmailHistory->EmailAddress;?></span><br>
							 </div>
							<?php }
						} else { ?>
							<div>
							  Bureau UpdateDate <span><?php echo $report->ConsumerEmailHistory->LastUpdatedDate;?></span><br>
							  E-mail Address <span><?php echo $report->ConsumerEmailHistory->EmailAddress;?></span><br>
							 </div>
					<?php } ?>
                     </div>
				<?php } else { ?>
                       <div>
                         <span>Email History Not Found</span><br>
					</div>
				<?php } ?>
              </div>
           </div>

           <div class="panel panel-primary">
            <div class="panel-heading">Consumer Employment History</div>
            <div class="panel-body">
			<?php if($report->ConsumerEmploymentHistory){ ?>
                <table class="table table-striped">
                    <tr>
                        <th>Bureau UpdateDate</th>
                        <th>Employer</th>
                        <th>Designation</th>
                    </tr>
					<?php 
						if(!is_object($report->ConsumerEmploymentHistory)){
							foreach($report->ConsumerEmploymentHistory as $ConsumerEmploymentHistory){?>
								<tr>
									<td><?php echo $ConsumerEmploymentHistory->LastUpdatedDate;?></td>
									<td><?php echo $ConsumerEmploymentHistory->EmployerDetail;?></td>
									<td><?php echo $ConsumerEmploymentHistory->Designation;?></td>
								</tr>
							<?php }
						} else{
							
							?>
								<tr>
									<td><?php echo $report->ConsumerEmploymentHistory->LastUpdatedDate;?></td>
									<td><?php echo $report->ConsumerEmploymentHistory->EmployerDetail;?></td>
									<td><?php echo $report->ConsumerEmploymentHistory->Designation;?></td>
								</tr>
						<?php } ?>
                </table>
				<?php } else { ?>
                 <div>
                    <span>Employment History Not Found</span><br>
                </div>
				<?php } ?>
            </div>
          </div>

          <div class="panel panel-primary">
            <div class="panel-heading">Contact No. History</div>
            <div class="panel-body">
				<?php if($report->ConsumerTelephoneHistory){?>
                <table class="table table-striped">
                    <tr>
                        <th>Bureau UpdateDate</th>
                        <th>Type</th>
                        <th>Telephone No</th>
                    </tr>
						<?php 
							 if(!is_object($report->ConsumerTelephoneHistory)){
								foreach($report->ConsumerTelephoneHistory as $ConsumerTelephoneHistory){ ?>
								<tr>
									<td><?php echo $ConsumerTelephoneHistory->LastUpdatedDate;?></td>
									<td><?php echo $ConsumerTelephoneHistory->TelephoneType;?></td>
									<td><?php echo $ConsumerTelephoneHistory->TelephoneNo;?></td>
								</tr>
								<?php } 
							 } else {?>
								<tr>
									<td><?php echo $report->ConsumerTelephoneHistory->LastUpdatedDate;?></td>
									<td><?php echo $report->ConsumerTelephoneHistory->TelephoneType;?></td>
									<td><?php echo $report->ConsumerTelephoneHistory->TelephoneNo;?></td>
								</tr>							 
							 <?php } ?>
                </table>
				<?php } else { ?>
                 <div>
					<span>Contact Number Not Found</span><br>
                </div>
				<?php } ?>
          </div>
         </div>
         
           <div class="panel panel-primary">
                <div class="panel-heading">Telephone Linkages</div>
                <div class="panel-body">
                <!-- Consumer Telephone Linkage Cellular -->
                <div class="panel panel-secondary">
                <div class="panel-heading"><strong>Consumer Telephone Linkage Cellular</strong></div>
                <div class="panel-body">
					<?php if($report->ConsumerTelephoneLinkageCellular){?>
                    <table class="table table-striped">
                        <tr>
                             <th>Customer Id</th>
                            <th>Name</th>
                            <th>Cell No</th>
                             <th>Work Tel</th>
                             <th>Idno</th>
                             <th>PassportNo</th>
                        </tr>
						<?php if(!is_object($report->ConsumerTelephoneLinkageCellular)){
								foreach($report->ConsumerTelephoneLinkageCellular as $ConsumerTelephoneLinkageCellular){?>
								<tr>
									<td><?php echo $ConsumerTelephoneLinkageCellular->ConsumerID;?></td>
									<td><?php echo $ConsumerTelephoneLinkageCellular->ConsumerName." ".$ConsumerTelephoneLinkageCellular->Surname;?></td>
									<td><?php echo $ConsumerTelephoneLinkageCellular->CellularNo;?></td>
									<td><?php echo $ConsumerTelephoneLinkageCellular->HomeTelephone;?></td>
									<td><?php echo $ConsumerTelephoneLinkageCellular->IDNo;?></td>
									<td><?php echo $ConsumerTelephoneLinkageCellular->PassportNo;?></td>
								</tr>
						<?php } 
						} else {?>
								<tr>
									<td><?php echo $report->ConsumerTelephoneLinkageCellular->ConsumerID;?></td>
									<td><?php echo $report->ConsumerTelephoneLinkageCellular->ConsumerName." ".$ConsumerTelephoneLinkageCellular->Surname;?></td>
									<td><?php echo $report->ConsumerTelephoneLinkageCellular->CellularNo;?></td>
									<td><?php echo $report->ConsumerTelephoneLinkageCellular->HomeTelephone;?></td>
									<td><?php echo $report->ConsumerTelephoneLinkageCellular->IDNo;?></td>
									<td><?php echo $report->ConsumerTelephoneLinkageCellular->PassportNo;?></td>
								</tr>
						<?php } ?>
                    </table>
					<?php } else { ?>
                    <span>Consumer Telephone Linkage Cellular Not Found</span><br>
					<?php } ?>
				</div>
              </div>
                <!-- Consumer Telephone Linkage Work -->
                 <div class="panel panel-secondary">
                <div class="panel-heading"><strong>Consumer Telephone Linkage Work</strong></div>
                <div class="panel-body">
				<?php if($report->ConsumerTelephoneLinkageWork){?>
                    <table class="table table-striped">
                        <tr>
                             <th>Customer Id</th>
                             <th>Name</th>
                             <th>Cell No</th>
                             <th>Work Tel</th>
                             <th>Idno</th>
                             <th>PassportNo</th>
                        </tr>
						<?php 
							if(!is_object($report->ConsumerTelephoneLinkageWork)){
								foreach($report->ConsumerTelephoneLinkageWork as $ConsumerTelephoneLinkageWork){?>
								<tr>
									<td><?php echo $ConsumerTelephoneLinkageWork->ConsumerID;?></td>
									<td><?php echo $ConsumerTelephoneLinkageWork->ConsumerName." ".$ConsumerTelephoneLinkageWork->Surname;?></td>
									<td><?php echo $ConsumerTelephoneLinkageWork->CellularNo;?></td>
									<td><?php echo $ConsumerTelephoneLinkageWork->HomeTelephone;?></td>
									<td><?php echo $ConsumerTelephoneLinkageWork->IDNo;?></td>
									<td><?php echo $ConsumerTelephoneLinkageWork->PassportNo;?></td>
								</tr>
								<?php } 
							} else { ?>
								<tr>
									<td><?php echo $report->ConsumerTelephoneLinkageWork->ConsumerID;?></td>
									<td><?php echo $report->ConsumerTelephoneLinkageWork->ConsumerName." ".$report->ConsumerTelephoneLinkageWork->Surname;?></td>
									<td><?php echo $report->ConsumerTelephoneLinkageWork->CellularNo;?></td>
									<td><?php echo $report->ConsumerTelephoneLinkageWork->HomeTelephone;?></td>
									<td><?php echo $report->ConsumerTelephoneLinkageWork->IDNo;?></td>
									<td><?php echo $report->ConsumerTelephoneLinkageWork->PassportNo;?></td>
								</tr>							
							<?php } ?>
                    </table>
					<?php } else { ?>
                    <span>Consumer Telephone Linkage Work Not Found</span><br>
					<?php } ?>
                    </div>
              </div>
              <!-- Consumer Telephone Linkage Home -->
                <div class="panel panel-secondary">
                <div class="panel-heading"><strong>Consumer Telephone Linkage Home</strong></div>
                <div class="panel-body">
				<?php if($report->ConsumerTelephoneLinkageHome){?>
                    <table class="table table-striped">
                        <tr>
                             <th>Customer Id</th>
                            <th>Name</th>
                            <th>Cell No</th>
                             <th>Work Tel</th>
                             <th>Idno</th>
                             <th>PassportNo</th>
                        </tr>
						<?php 
							if(!is_object($report->ConsumerTelephoneLinkageHome)){
								foreach($report->ConsumerTelephoneLinkageHome as $ConsumerTelephoneLinkageHome){?>
								<tr>
									<td><?php echo $ConsumerTelephoneLinkageHome->ConsumerID;?></td>
									<td><?php echo $ConsumerTelephoneLinkageHome->ConsumerName." ".$ConsumerTelephoneLinkageHome->Surname;?></td>
									<td><?php echo $ConsumerTelephoneLinkageHome->CellularNo;?></td>
									<td><?php echo $ConsumerTelephoneLinkageHome->HomeTelephone;?></td>
									<td><?php echo $ConsumerTelephoneLinkageHome->IDNo;?></td>
									<td><?php echo $ConsumerTelephoneLinkageHome->PassportNo;?></td>
								</tr>
							<?php } 
							} else { ?>
								<tr>
									<td><?php echo $report->ConsumerTelephoneLinkageHome->ConsumerID;?></td>
									<td><?php echo $report->ConsumerTelephoneLinkageHome->ConsumerName." ".$report->ConsumerTelephoneLinkageHome->Surname;?></td>
									<td><?php echo $report->ConsumerTelephoneLinkageHome->CellularNo;?></td>
									<td><?php echo $report->ConsumerTelephoneLinkageHome->HomeTelephone;?></td>
									<td><?php echo $report->ConsumerTelephoneLinkageHome->IDNo;?></td>
									<td><?php echo $report->ConsumerTelephoneLinkageHome->PassportNo;?></td>
								</tr>							
							<?php } ?>
                    </table>
					<?php } else { ?>
						<span>Consumer Telephone Linkage Home Not Found</span><br>
					<?php } ?>
                </div>
              </div>
                </div>
                </div>
				<?php if($report->ConsumerPropertyInformationSummary){?>
                <div>
					 <div class="panel panel-primary">
						<div class="panel-heading">Consumer Property Information Summary</div>
						<div class="panel-body">
							<div class="col">
								<div class="col-xs-4 ">Total Property&nbsp;&nbsp;<strong><span><?php echo $report->ConsumerPropertyInformationSummary->TotalProperty;?></span></strong></div>
								<div class="col-xs-4">Purchase Price&nbsp;&nbsp;<strong><span><?php echo $report->ConsumerPropertyInformationSummary->PurchasePrice;?></span></strong></div>
							</div>
						</div>
					  </div>
              </div>
			  <?php } 
				if($report->consumerDirectorSummary){
			  ?>
              <div>
              <div class="panel panel-primary">
                <div class="panel-heading">Consumer Director Summary</div>
                <div class="panel-body">
                    <div class="col">
                        <div class="col-xs-4 ">Number Of Company Director&nbsp;&nbsp;<strong><span><?php echo $report->ConsumerDirectorSummary->NumberOfCompanyDirector;?></span></strong></div>
                    </div>
                </div>
              </div>
              </div>
			 <?php } ?>
    </div>
    </div>
</div>
</body>
</html>