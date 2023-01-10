<!DOCTYPE html>
<html lang="en">
<head>
    <title>Trace Report</title>
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>pdf-resources/css/style.css"/>
</head>
<body>
<div>
     <div>
     <img src="<?php echo base_url();?>pdf-resources/images/logo.jpg" style="width: 150px;height: 65px;text-align: left;" alt="logo" /> 
	 
	 <h3 class="box-title" style="text-align: right;"><?php echo $report->SubscriberInputDetails->EnquiryType." Report";?></h3>
     <div style="text-align: right;">
            <span><small>Bedfordview Corporate park,</small></span>
                <span><small>4 Skeen BLVD, Bedfordview,</small></span>
                <span><small>2001</small></span>
               <span><small>+27 (11) 568 8322</small></span>
                <span><small>+27 (78) 498 7504</small></span>
     </div>
     </div>
     
</div>
     <!-- Start of  Enquiry Input Details-->
   <hr class="hr_rule"/>
   <div class="title-head"><strong>Enquiry Input Details</strong>
   <h5 class="subtitle-head"><?php echo $report->SubscriberInputDetails->SubscriberUserName." search input details";?></h5>
  </div>
   <hr class="hr-line"/>
 <div class="col">
   <table class="table-list">
           <tr>
        <th class="th-size-first"></th>
        <th class="th-size-second"></th>
        </tr>
        <tr class="tr-label">
        <td class="td-label">Enquiry Date</td>
        <td class="td-value"><?php echo $report->SubscriberInputDetails->EnquiryDate;?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Enquiry Type</td>
        <td class="td-value"><?php echo $report->SubscriberInputDetails->EnquiryType;?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Subscriber Name</td>
        <td class="td-value"><?php echo $report->SubscriberInputDetails->SubscriberName;?></td>
        </tr>
        <tr class="tr-label">
        <td class="td-label">Subscriber User Name</td>
        <td class="td-value"><?php echo $report->SubscriberInputDetails->SubscriberUserName;?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Enquiry Input</td>
        <td class="td-value"><?php echo $report->SubscriberInputDetails->EnquiryInput;?></td>
        </tr>
    </table>              
 </div><br/><br/>
  
   <!-- End of  Enquiry Input Details-->
    <!-- StartPersonal Details Summary-->
   <div class="title-head"><strong>Personal Details Summary</strong>
   <h5 class="subtitle-head">This section displays the Personal information for the consumer. Included here is ID or Passport, Name, Gender, Marital Status,
Current Contact, Address, and Employment Info.</h5>
  </div>
   <hr class="hr-line"/>
  <div class="col">
   <div class="sub-personal">
    <!-- First personal details -->
  <div class="col-table-first-div">
  <table class="table-list">
      <tr>
       <th class="th-size-first-first-div"></th>
       <th class="th-size-first-second-div"></th>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Reference No.</td>
        <td  class="td-value"><?php echo $report->ConsumerDetail->ReferenceNo;?></td>
       </tr>
      <tr class="tr-label">
        <td class="td-label">ID No</td>
        <td class="td-value"><?php echo $report->ConsumerDetail->IDNo;?></td>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Surname</td>
        <td class="td-value"><?php echo $report->ConsumerDetail->Surname;?></td>
       </tr>
       <tr class="tr-label">
        <td class="td-label">First Name</td>
        <td class="td-value"><?php echo $report->ConsumerDetail->FirstName;?></td>
       </tr>
       <tr class="tr-label">
        <td class="td-label">Second Name</td>
        <td class="td-value"><?php echo $report->ConsumerDetail->SecondName;?></td>
       </tr>
       <tr class="tr-label">
        <td class="td-label">Maiden Name</td>
        <td class="td-value"><?php echo $report->ConsumerDetail->MaidenName;?></td>
       </tr>
        <tr class="tr-label">
        <td class="td-label">Title</td>
        <td class="td-value"><?php echo $report->ConsumerDetail->TitleDesc;?></td>
       </tr>
        <tr class="tr-label">
        <td class="td-label">Gender</td>
        <td class="td-value"><?php echo $report->ConsumerDetail->Gender;?></td>
       </tr>
        <tr class="tr-label">
        <td class="td-label">Date of Birth</td>
        <td class="td-value"><?php echo $report->ConsumerDetail->BirthDate;?></td>
       </tr>
        <tr class="tr-label">
        <td class="td-label">Marital Status</td>
        <td class="td-value"><?php echo $report->ConsumerDetail->MaritalStatusDesc;?></td>
       </tr> 
        <tr class="tr-label">
        <td class="td-label">E-mail Address</td>
        <td class="td-value"><?php echo $report->ConsumerDetail->EmailAddress;?></td>
      </tr>
    </table>
  </div>
  <!-- Second personal details -->
  <div class="col-table-second-div">
  <table class="table-list">
      <tr>
        <th class="th-size-second-first-div"></th>
       <th class="th-size-second-second-div"></th>
      </tr>
      <tr class="tr-label">
        <td class="td-label">External Reference No.</td>
        <td class="td-value"><?php echo $report->ConsumerDetail->ExternalReference;?></td>
       </tr>
      <tr class="tr-label">
        <td class="td-label">Passport or 2nd ID No</td>
        <td class="td-value"><?php echo $report->ConsumerDetail->PassportNo;?></td>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Residential Address</td>
        <td class="td-value"><?php echo $report->ConsumerDetail->ResidentialAddress;?></td>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Postal Address</td>
        <td class="td-value"><?php echo $report->ConsumerDetail->PostalAddress;?></td>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Telephone No. (H)</td>
        <td class="td-value"><?php echo $report->ConsumerDetail->HomeTelephoneNo;?></td>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Cellular/Mobile</td>
        <td class="td-value"><?php echo $report->ConsumerDetail->CellularNo;?></td>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Current Employer</td>
        <td class="td-value"><?php echo $report->ConsumerDetail->EmployerDetail;?></td>
      </tr>   
    </table>
  </div>
  
</div>
  </div><br/><br/>
                      <!-- End of Personal Details Summary-->
                     
                     <!-- Start of AKAName History -->
                    
				<div class="title-head"><strong>AKA Names</strong></div>
				<hr class="hr-line"/>
				<div class="col">
                 <table class ="table-list">
                    <tr class="tr-list">
                        <th class = "th-list">Bureau UpdateDate</th>
                        <th class = "th-list">Home Affairs Name</th>
                    </tr>
                    <tr class="border_bottom">
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                 <div>
                  <span ></span>
                </div><br/><br/><br/><br/>
                </div><br/><br/>
                     <!-- End of AKAName History -->
                      <!-- Start of Potential Fraud Indicators-->
                     <div class="title-head"><strong>Potential Fraud Indicators</strong>
                      <h5 class="subtitle-head">This section displays information verified by the Relevant Authority.</h5>
                    </div>
                    <hr class="hr-line"/>
				<div class="col">
					<table class="table-list">
						<tr>
							<th class="th-size-first-fraud"></th>
							<th class="th-size-second-fraud"></th>
						</tr>
						<tr class="tr-label">
							<td class="td-label">ID No. Verified Status</td>
							<td class="td-value"><?php echo $report->ConsumerFraudIndicatorsSummary->HomeAffairsVerificationYN;?></td>
						</tr>
						<tr class="tr-label">
							<td class="td-label">ID No. Deceased Status</td>
							<td class="td-value"><?php echo $report->ConsumerFraudIndicatorsSummary->HomeAffairsDeceasedStatus;?></td>
						</tr>
						<tr class="tr-label">
							<td class="td-label">ID No. Found on Fraud Database</td>
							<td class="td-value"><?php echo $report->ConsumerFraudIndicatorsSummary->SAFPSListingYN;?></td>
						</tr>
					</table>
				</div><br/><br/>
	
                     <!-- End of Address History-->
                    
                    <div class="col">
                     <div class="title-head"><strong>Address History</strong></div>
                    <hr class="hr-line"/>
					<?php if($report->ConsumerAddressHistory){ ?>
                     <table class="table-list">
                        <tr class="tr-list">
							<th class = "th-list">Bureau UpdateDate</th>
							<th  class = "th-list">Type</th>
							<th  class = "th-list">Line1</th>
							<th  class = "th-list">Line2</th>
							<th  class = "th-list">Line3</th>
							<th  class = "th-list">Line4</th>
							<th  class = "th-list">Postal Code</th>
						</tr>
						<?php 
						if(!is_object($report->ConsumerAddressHistory)){
							foreach($report->ConsumerAddressHistory as $ConsumerAddressHistory){ ?>
							<tr class="border_bottom">
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
							<tr class="border_bottom">
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
              
                    </div><br/><br/>
                     <!-- End of Potential Fraud Indicators-->
                      <!-- Start of Contact No. History-->
                    <div class="title-head"><strong>Contact No. History</strong></div>
                    <hr class="hr-line"/>
                    <div class="col">
					<?php if($report->ConsumerTelephoneHistory){?>
                     <table class ="table-list">
                    <tr class="tr-list">
                        <th class = "th-list">Bureau UpdateDate</th>
                        <th class = "th-list">Type</th>
                        <th class = "th-list">Telephone No</th>
                    </tr>
					<?php 
						if(!is_object($report->ConsumerTelephoneHistory)){
							foreach($report->ConsumerTelephoneHistory as $ConsumerTelephoneHistory){ ?>
							<tr class="border_bottom">
								<td><?php echo $ConsumerTelephoneHistory->LastUpdatedDate;?></td>
								<td><?php echo $ConsumerTelephoneHistory->TelephoneType;?></td>
								<td><?php echo $ConsumerTelephoneHistory->TelephoneNo;?></td>
							</tr>
						<?php } 
					   } else { ?>
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
                    </div><br/><br/>
                     <!-- End of Contact No. History-->
                  <!-- Start of Consumer Email History-->
                
                     <div class="title-head"><strong>Consumer Email History</strong></div>
                    <hr class="hr-line"/>
                    <div class="col">
					<?php if($report->ConsumerEmailHistory){ ?>
                    <table class ="table-list">
						<tr class="tr-list">
							<th class = "th-list">Bureau UpdateDate</th>
							<th class = "th-list">E-mail Address</th>
						</tr>
						<?php 
						
						if (!is_object($report->ConsumerEmailHistory)){
							foreach($report->ConsumerEmailHistory as $ConsumerEmailHistory){?>
						<tr class="border_bottom">
							<td><?php echo $ConsumerEmailHistory->LastUpdatedDate;?></td>
							<td><?php echo $ConsumerEmailHistory->EmailAddress;?></td>
						</tr>
						<?php }
						} else { ?>
						<tr class="border_bottom">
							<td><?php echo $report->ConsumerEmailHistory->LastUpdatedDate;?></td>
							<td><?php echo $report->ConsumerEmailHistory->EmailAddress;?></td>
						</tr>
						<?php } ?>
					</table>
					<?php } else { ?>
					 <div>
						 <span>Email History Not Found</span><br>
					</div>
					<?php } ?>
                </div><br/><br/>
                     <!-- End of Consumer Email History-->
                    <!-- Start of Employment History -->
                    
                     <div class="title-head"><strong>Employment History</strong></div>
                    <hr class="hr-line"/>
                    <div class="col">
					<?php if($report->ConsumerEmploymentHistory){ ?>
						<table class ="table-list">
						<tr class="tr-list">
							<th class = "th-list">Bureau UpdateDate</th>
							<th class = "th-list">Employer</th>
							<th class = "th-list">Designation</th>
						</tr>
					<?php 
						if(!is_object($report->ConsumerEmploymentHistory)){
							foreach($report->ConsumerEmploymentHistory as $ConsumerEmploymentHistory){?>
							<tr class="border_bottom">
								<td><?php echo $ConsumerEmploymentHistory->LastUpdatedDate;?></td>
								<td><?php echo $ConsumerEmploymentHistory->EmployerDetail;?></td>
								<td><?php echo $ConsumerEmploymentHistory->Designation;?></td>
							</tr>
						<?php }
						} else{?>
							<tr class="border_bottom">
								<td><?php echo $report->ConsumerEmploymentHistory->LastUpdatedDate;?></td>
								<td><?php echo $report->ConsumerEmploymentHistory->EmployerDetail;?></td>
								<td><?php echo $report->ConsumerEmploymentHistory->Designation;?></td>
							</tr>						
						<?php } ?>
						</table>
					<?php } else { ?>
					 <div>
						 <span>Employment History Not Found</span>
					</div>
				<?php } ?>
                </div><br/><br/>
                     <!-- End of Employment History -->
                      <!-- Start of Consumer Telephone Linkage Cellular -->
                      
                    <div class="title-head"><strong>Consumer Cellular Telephone Linkage</strong></div>
                    <hr class="hr-line"/>
                     <div class="col">
					 <?php if($report->ConsumerTelephoneLinkageCellular){ ?>
                     <table class="table-list">
                        <tr class="tr-list">
                             <th class = "th-list">Customer Id</th>
                            <th class = "th-list">Name</th>
                            <th class = "th-list">Cell No</th>
                             <th class = "th-list">Work Tel</th>
                             <th class = "th-list">Idno</th>
                             <th class = "th-list">PassportNo</th>
                        </tr>
						<?php 
							if(!is_object($report->ConsumerTelephoneLinkageCellular)){
								foreach($report->ConsumerTelephoneLinkageCellular as $ConsumerTelephoneLinkageCellular){?>
								<tr  class="border_bottom">
									<td><?php echo $ConsumerTelephoneLinkageCellular->ConsumerID;?></td>
									<td><?php echo $ConsumerTelephoneLinkageCellular->ConsumerName." ".$ConsumerTelephoneLinkageCellular->Surname;?></td>
									<td><?php echo $ConsumerTelephoneLinkageCellular->CellularNo;?></td>
									<td><?php echo $ConsumerTelephoneLinkageCellular->HomeTelephone;?></td>
									<td><?php echo $ConsumerTelephoneLinkageCellular->IDNo;?></td>
									<td><?php echo $ConsumerTelephoneLinkageCellular->PassportNo;?></td>
								</tr>
							<?php } 
						} else {?>
								<tr class="border_bottom">
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
					<div>
						<span>Consumer Telephone Linkage Cellular Not Found</span>
					</div>
					<?php } ?>
                 </div><br/><br/>
                     
                      <!-- End of Consumer Telephone Linkage Cellular -->
                      <!-- Start of Consumer Telephone Linkage Cellular -->
                      
                      <div class="title-head"><strong>Consumer Work Telephone Linkage</strong></div>
                    <hr class="hr-line"/>
                     <div class="col">
					 <?php if($report->ConsumerTelephoneLinkageWork){?>
                     <table class="table-list">
                        <tr class="tr-list">
                             <th class = "th-list">Customer Id</th>
                             <th class = "th-list">Name</th>
                             <th class = "th-list">Cell No</th>
                             <th class = "th-list">Work Tel</th>
                             <th class = "th-list">Idno</th>
                             <th class = "th-list">PassportNo</th>
                        </tr>
						<?php 
							if(!is_object($report->ConsumerTelephoneLinkageWork)){
								foreach($report->ConsumerTelephoneLinkageWork as $ConsumerTelephoneLinkageWork){?>
								<tr class="border_bottom">
									<td><?php echo $ConsumerTelephoneLinkageWork->ConsumerID;?></td>
									<td><?php echo $ConsumerTelephoneLinkageWork->ConsumerName." ".$ConsumerTelephoneLinkageWork->Surname;?></td>
									<td><?php echo $ConsumerTelephoneLinkageWork->CellularNo;?></td>
									<td><?php echo $ConsumerTelephoneLinkageWork->HomeTelephone;?></td>
									<td><?php echo $ConsumerTelephoneLinkageWork->IDNo;?></td>
									<td><?php echo $ConsumerTelephoneLinkageWork->PassportNo;?></td>
								</tr>
								<?php } 
							} else { ?>
								<tr class="border_bottom">
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
                     <div>
						<span>Consumer Telephone Linkage Work Not Found</span>
					</div>
					<?php } ?>
                  </div><br/><br/>
                      <!-- End of Consumer Telephone Linkage Cellular -->
                      <!-- Start of Consumer Telephone Linkage Cellular -->
                  
                  <div class="title-head"><strong>Consumer Home Telephone Linkage</strong></div>
                  <hr class="hr-line"/>
                     <div class="col">
					 <?php if($report->ConsumerTelephoneLinkageHome){?>
                     <table  class="table-list">
                        <tr class="tr-list">
                             <th class = "th-list">Customer Id</th>
                             <th class = "th-list">Name</th>
                             <th class = "th-list">Cell No</th>
                             <th class = "th-list">Work Tel</th>
                             <th class = "th-list">Idno</th>
                             <th class = "th-list">PassportNo</th>
                        </tr>
						<?php 
							if(!is_object($report->ConsumerTelephoneLinkageHome)){
								foreach($report->ConsumerTelephoneLinkageHome as $ConsumerTelephoneLinkageHome){?>
								<tr  class="border_bottom">
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
                     <div>
						<span>Consumer Telephone Linkage Home Not Found</span>
					 </div>
					 <?php } ?>
                </div><br/><br/>
                <!-- End of Home Telephone -->
			 <?php if($report->ConsumerDirectorSummary){ ?>
                <div>
				 <div class="title-head"><strong>Consumer Property and Director Summary</strong></div>
				   <hr class="hr-line"/>
				 <div class="col">
				   <table>
						   <tr>
						<th class="th-size-first"></th>
						<th class="th-size-second"></th>
						</tr>
						<tr class="tr-label">
						<td class="td-label">Total Property</td>
						
						<td class="td-value"><?php echo $report->ConsumerPropertyInformationSummary->TotalProperty;?></td>
						</tr>
						 <tr class="tr-label">
						<td class="td-label">Purchase Price</td>
						<td class="td-value"><?php echo $report->ConsumerPropertyInformationSummary->PurchasePrice;?></td>
						</tr>
						 <tr class="tr-label">
						<td class="td-label">Number Of Company Director</td>
						<td class="td-value"><?php echo $report->ConsumerDirectorSummary->NumberOfCompanyDirector;?></td>
						</tr>
						</table>              
				  </div>
				</div>
			 <?php } ?>
  </body>
</html>