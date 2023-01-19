<!DOCTYPE html>
<html lang="en">
<head>
    <title>Procurement Report</title>
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>pdf-resources/css/style.css"/>
</head>
<body>
<div>
     <div>
     <img src="<?php echo base_url();?>pdf-resources/images/logo.jpg" style="width: 150px;height: 65px;text-align: left;" alt="logo" /> 
	 
	 <h3 class="box-title" style="text-align: right;">Procurement Report</h3>
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
   <div class="title-head"><strong>Commercial Business Information</strong>
   <h5 class="subtitle-head">This section displays the Personal information for the consumer. Included here is ID or Passport, Name, Gender, Marital Status,
Current Contact, Address, and Employment Info.</h5>
  </div>
   <hr class="hr-line"/>
  <div class="col">
    <!-- First personal details -->
  <table class="table-list">
      <tr>
       <th class="th-size-first-first-div"></th>
       <th class="th-size-first-second-div"></th>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Reference No.</td>
        <td  class="td-value"><?php echo $report->CommercialBusinessInformation->ReferenceNo;?></td>
       </tr>
      <tr class="tr-label">
        <td class="td-label">Commercial Name</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->CommercialName)?"":$report->CommercialBusinessInformation->CommercialName);?></td>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Registration Number</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->RegistrationNo)?"":$report->CommercialBusinessInformation->RegistrationNo);?></td>
       </tr>
       <tr class="tr-label">
        <td class="td-label">BusinessStart Date</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->BusinessStartDate)?"":$report->CommercialBusinessInformation->BusinessStartDate);?></td>
       </tr>
       <tr class="tr-label">
        <td class="td-label">Financial Year End</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->FinancialYearEnd)?"":$report->CommercialBusinessInformation->FinancialYearEnd);?></td>
       </tr>
       <tr class="tr-label">
        <td class="td-label">Registration Number Old</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->RegistrationNoOld)?"":$report->CommercialBusinessInformation->RegistrationNoOld);?></td>
       </tr>
        <tr class="tr-label">
        <td class="td-label">Commercial Status</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->CommercialStatus)?"":$report->CommercialBusinessInformation->CommercialStatus);?></td>
       </tr>
        <tr class="tr-label">
        <td class="td-label">Commercial Type</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->CommercialType)?"":$report->CommercialBusinessInformation->CommercialType);?></td>
       </tr>
        <tr class="tr-label">
        <td class="td-label">Tax Number</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->TaxNo)?"":$report->CommercialBusinessInformation->TaxNo);?></td>
       </tr>
        <tr class="tr-label">
        <td class="td-label">Trade Name</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->TradeName)?"":$report->CommercialBusinessInformation->TradeName);?></td>
       </tr> 
        <tr class="tr-label">
        <td class="td-label">Physical Address</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->PhysicalAddress)?"":$report->CommercialBusinessInformation->PhysicalAddress);?></td>
      </tr>
	  <tr class="tr-label">
        <td class="td-label">Postal Address</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->PostalAddress)?"":$report->CommercialBusinessInformation->PostalAddress);?></td>
       </tr>
      <tr class="tr-label">
        <td class="td-label">Registration Date</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->RegistrationDate)?"":$report->CommercialBusinessInformation->RegistrationDate);?></td>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Telephone Number</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->TelephoneNo)?"":$report->CommercialBusinessInformation->TelephoneNo);?></td>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Fax Number</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->FaxNo)?"":$report->CommercialBusinessInformation->FaxNo);?></td>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Bussiness Email</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->BussEmail)?"":$report->CommercialBusinessInformation->BussEmail);?></td>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Bussiness Website</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->BussWebsite)?"":$report->CommercialBusinessInformation->BussWebsite);?></td>
      </tr>   
	  
	  
      <tr class="tr-label">
        <td class="td-label">Age of Business</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->AgeofBusiness)?"":$report->CommercialBusinessInformation->AgeofBusiness);?></td>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Authorised Capital Amount</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->AuthorisedCapitalAmt)?"":$report->CommercialBusinessInformation->AuthorisedCapitalAmt);?></td>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Issued Number Of Shares</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->IssuedNoOfShares)?"":$report->CommercialBusinessInformation->IssuedNoOfShares);?></td>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Registration Number Converted</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->RegistrationNoConverted)?"":$report->CommercialBusinessInformation->RegistrationNoConverted);?></td>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Financial Effective Date</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->FinancialEffectiveDate)?"":$report->CommercialBusinessInformation->FinancialEffectiveDate);?></td>
      </tr> 
	  
	  <tr class="tr-label">
        <td class="td-label">Authorised Number Of Shares</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->AuthorisedNoOfShares)?"":$report->CommercialBusinessInformation->AuthorisedNoOfShares);?></td>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Issued Capital Amount</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->IssuedCapitalAmt)?"":$report->CommercialBusinessInformation->IssuedCapitalAmt);?></td>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Commercial Status Date</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->CommercialStatusDate)?"":$report->CommercialBusinessInformation->CommercialStatusDate);?></td>
      </tr> 
    </table>
 
  <!-- Second personal details -->
 
  </div><br/><br/>
	
                     <!-- End of Address History-->
                    
                    <div class="col">
                     <div class="title-head"><strong>Director Previous Business interests</strong></div>
                    <hr class="hr-line"/>
					<?php if($report->ActiveDirectorCurrentBusinessinterests){ ?>
                     <table class="table-list">
                        <tr class="tr-list">
							<th class = "th-list">Commercial Name</th>
							<th  class = "th-list">Registration No</th>
							<th  class = "th-list">Commercial Status</th>
							<th  class = "th-list">Judgments Count</th>
							<th  class = "th-list">Default Count</th>
							<th  class = "th-list">Liquidation</th>
							<th  class = "th-list">Age Of Business</th>
							<th  class = "th-list">Judgment Status</th>
							<th  class = "th-list">Director Status Date</th>
						</tr>
						<?php 
						if(!is_object($report->ActiveDirectorCurrentBusinessinterests)){
							foreach($report->ActiveDirectorCurrentBusinessinterests as $ActiveDirectorCurrentBusinessinterestsKey => $ActiveDirectorCurrentBusinessinterestsVal){ ?>
							<tr class="border_bottom">
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
						} else { ?>
							<tr class="border_bottom">
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
						<?php } ?>
                    </table>
					<?php } else { ?>
					<span>Director Previous Business interests</span><br>
					<?php } ?>
              
                    </div><br/><br/>
                     <!-- End of Potential Fraud Indicators-->
                      <!-- Start of Contact No. History-->
                    <div class="title-head"><strong>Commercial Principal Information</strong></div>
                    <hr class="hr-line"/>
                    <div class="col">
					<?php if($report->CommercialPrincipalInformation){?>
                     <table class ="table-list">
                    <tr class="tr-list">
                        <th class = "th-list">ID Number</th>
                        <th class = "th-list">Fullname</th>
                        <th class = "th-list">Birth Date</th>
                        <th class = "th-list">Director Status Code</th>
                        <th class = "th-list">Appointment Date</th>
                        <th class = "th-list">Member Control Percent</th>
                        <th class = "th-list">Director Indicator</th>
                        <th class = "th-list">Principal Type</th>
                        <th class = "th-list">RSA Resident</th>
                        <th class = "th-list">ID Verified</th>
                        <th class = "th-list">CIPRO Confirmed</th>
                        <th class = "th-list">Physical Address</th>
                        <th class = "th-list">Postal Address</th>
                        <th class = "th-list">Home Telephone No</th>
                        <th class = "th-list">Work Telephone No</th>
                        <th class = "th-list">Cellular No</th>
                        <th class = "th-list">Email Address</th>
                        <th class = "th-list">Age</th>
                        <th class = "th-list">Years With Business</th>
                        <th class = "th-list">Director Status Date</th>
                        <th class = "th-list">Executor</th>
                        <th class = "th-list">Executor Appointment Date</th>
                        <th class = "th-list">Estate</th>
                        <th class = "th-list">Resignation Date</th>
                        <th class = "th-list">Consumer Score</th>
                    </tr>
					<?php 
						if(!is_object($report->CommercialPrincipalInformation)){
							foreach($report->CommercialPrincipalInformation as $CommercialPrincipalInformation){ ?>
							<tr class="border_bottom">
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
					</table>
				<?php } else { ?>
                 <div>
					<span>Commercial Principal Information Not Found</span><br>
                </div>
				<?php } ?>
                    </div><br/><br/>
                     <!-- End of Contact No. History-->
                  <!-- Start of Consumer Email History-->
                
                    <div class="title-head"><strong>Commercial Active Principal Info Summary</strong></div>
                    <hr class="hr-line"/>
                    <div class="col">
					<?php if($report->CommercialActivePrincipalInfoSummary){ ?>
                    <table class ="table-list">
						<tr class="tr-list">
							<th class = "th-list">Number Of Principals</th>
							<th class = "th-list">Number Of Inactive Principals</th>
							<th class = "th-list">Average Age</th>
						</tr>

						<tr class="border_bottom">
							<td><?php echo (is_object($report->CommercialActivePrincipalInfoSummary->NoOfPrincipals)?"":$report->CommercialActivePrincipalInfoSummary->NoOfPrincipals);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInfoSummary->NoOfInactivePrincipals)?"":$report->CommercialActivePrincipalInfoSummary->NoOfInactivePrincipals);?></td>
							<td><?php echo (is_object($report->CommercialActivePrincipalInfoSummary->AverageAge)?"":$report->CommercialActivePrincipalInfoSummary->AverageAge);?></td>
						</tr>

					</table>
					<?php } else { ?>
					 <div>
						 <span>Commercial Active Principal Info Summary Not Found</span><br>
					</div>
					<?php } ?>
                </div><br/><br/>
                     <!-- End of Consumer Email History-->
                    <!-- Start of Employment History -->
					<div class="title-head"><strong>Commercial Inactive Principal Info Summary</strong></div>
                    <hr class="hr-line"/>
                    <div class="col">
					<?php if($report->CommercialInActivePrincipalInfoSummary){ ?>
                    <table class ="table-list">
						<tr class="tr-list">
							<th class = "th-list">Number Of Principals</th>
							<th class = "th-list">Number Of Inactive Principals</th>
							<th class = "th-list">Average Age</th>
						</tr>

						<tr class="border_bottom">
							<td><?php echo (is_object($report->CommercialInActivePrincipalInfoSummary->NoOfPrincipals)?"":$report->CommercialInActivePrincipalInfoSummary->NoOfPrincipals);?></td>
							<td><?php echo (is_object($report->CommercialInActivePrincipalInfoSummary->NoOfInactivePrincipals)?"":$report->CommercialInActivePrincipalInfoSummary->NoOfInactivePrincipals);?></td>
							<td><?php echo (is_object($report->CommercialInActivePrincipalInfoSummary->AverageAge)?"":$report->CommercialInActivePrincipalInfoSummary->AverageAge);?></td>
						</tr>

					</table>
					<?php } else { ?>
					 <div>
						 <span>Commercial Inactive Principal Info Summary Not Found</span><br>
					</div>
					<?php } ?>
                </div><br/><br/>
                    
				<div class="title-head"><strong>Commercial Active Principal Information</strong></div>
                    <hr class="hr-line"/>
                    <div class="col">
					<?php if($report->CommercialActivePrincipalInformation){?>
                     <table class ="table-list">
                    <tr class="tr-list">
                        <th class = "th-list">ID Number</th>
                        <th class = "th-list">Fullname</th>
                        <th class = "th-list">Birth Date</th>
                        <th class = "th-list">Director Status Code</th>
                        <th class = "th-list">Appointment Date</th>
                        <th class = "th-list">Member Control Percent</th>
                        <th class = "th-list">Director Indicator</th>
                        <th class = "th-list">Principal Type</th>
                        <th class = "th-list">RSA Resident</th>
                        <th class = "th-list">ID Verified</th>
                        <th class = "th-list">CIPRO Confirmed</th>
                        <th class = "th-list">Physical Address</th>
                        <th class = "th-list">Postal Address</th>
                        <th class = "th-list">Home Telephone No</th>
                        <th class = "th-list">Work Telephone No</th>
                        <th class = "th-list">Cellular No</th>
                        <th class = "th-list">Email Address</th>
                        <th class = "th-list">Age</th>
                        <th class = "th-list">Years With Business</th>
                        <th class = "th-list">Director Status Date</th>
                        <th class = "th-list">Executor</th>
                        <th class = "th-list">Executor Appointment Date</th>
                        <th class = "th-list">Estate</th>
                        <th class = "th-list">Resignation Date</th>
                        <th class = "th-list">Consumer Score</th>
                    </tr>
					<?php 
						if(!is_object($report->CommercialActivePrincipalInformation)){
							foreach($report->CommercialActivePrincipalInformation as $CommercialActivePrincipalInformation){ ?>
							<tr class="border_bottom">
								<td><?php echo (is_object($CommercialActivePrincipalInformation->IDNo)?"":$CommercialActivePrincipalInformation->IDNo);?></td>
								<td><?php echo (is_object($CommercialActivePrincipalInformation->Fullname)?"":$CommercialActivePrincipalInformation->Fullname);?></td>
								<td><?php echo (is_object($CommercialActivePrincipalInformation->BirthDate)?"":$CommercialActivePrincipalInformation->BirthDate);?></td>
								<td><?php echo (is_object($CommercialActivePrincipalInformation->DirectorStatusCode)?"":$CommercialActivePrincipalInformation->DirectorStatusCode);?></td>
								<td><?php echo (is_object($CommercialActivePrincipalInformation->AppointmentDate)?"":$CommercialActivePrincipalInformation->AppointmentDate);?></td>
								<td><?php echo (is_object($CommercialActivePrincipalInformation->Designation)?"":$CommercialActivePrincipalInformation->Designation);?></td>
								<td><?php echo (is_object($CommercialActivePrincipalInformation->MemberControlPerc)?"":$CommercialActivePrincipalInformation->MemberControlPerc);?></td>
								<td><?php echo (is_object($CommercialActivePrincipalInformation->DirectorIndicator)?"":$CommercialActivePrincipalInformation->DirectorIndicator);?></td>
								<td><?php echo (is_object($CommercialActivePrincipalInformation->PrincipalType)?"":$CommercialActivePrincipalInformation->PrincipalType);?></td>
								<td><?php echo (is_object($CommercialActivePrincipalInformation->ISRSAResident)?"":$CommercialActivePrincipalInformation->ISRSAResident);?></td>
								<td><?php echo (is_object($CommercialActivePrincipalInformation->ISIDVerified)?"":$CommercialActivePrincipalInformation->ISIDVerified);?></td>
								<td><?php echo (is_object($CommercialActivePrincipalInformation->ISCIPROConfirmed)?"":$CommercialActivePrincipalInformation->ISCIPROConfirmed);?></td>
								<td><?php echo (is_object($CommercialActivePrincipalInformation->PhysicalAddress)?"":$CommercialActivePrincipalInformation->PhysicalAddress);?></td>
								<td><?php echo (is_object($CommercialActivePrincipalInformation->PostalAddress)?"":$CommercialActivePrincipalInformation->PostalAddress);?></td>
								<td><?php echo (is_object($CommercialActivePrincipalInformation->HomeTelephoneNo)?"":$CommercialActivePrincipalInformation->HomeTelephoneNo);?></td>
								<td><?php echo (is_object($CommercialActivePrincipalInformation->WorkTelephoneNo)?"":$CommercialActivePrincipalInformation->WorkTelephoneNo);?></td>
								<td><?php echo (is_object($CommercialActivePrincipalInformation->CellularNo)?"":$CommercialActivePrincipalInformation->CellularNo);?></td>
								<td><?php echo (is_object($CommercialActivePrincipalInformation->EmailAddress)?"":$CommercialActivePrincipalInformation->EmailAddress);?></td>
								<td><?php echo (is_object($CommercialActivePrincipalInformation->Age)?"":$CommercialActivePrincipalInformation->Age);?></td>
								<td><?php echo (is_object($CommercialActivePrincipalInformation->YearsWithBusiness)?"":$CommercialActivePrincipalInformation->YearsWithBusiness);?></td>
								<td><?php echo (is_object($CommercialActivePrincipalInformation->DirectorStatusDate)?"":$CommercialActivePrincipalInformation->DirectorStatusDate);?></td>
								<td><?php echo (is_object($CommercialActivePrincipalInformation->Executor)?"":$CommercialActivePrincipalInformation->Executor);?></td>
								<td><?php echo (is_object($CommercialActivePrincipalInformation->ExecutorAppointmentDate)?"":$CommercialActivePrincipalInformation->ExecutorAppointmentDate);?></td>
								<td><?php echo (is_object($CommercialActivePrincipalInformation->Estate)?"":$CommercialActivePrincipalInformation->Estate);?></td>
								<td><?php echo (is_object($CommercialActivePrincipalInformation->ResignationDate)?"":$CommercialActivePrincipalInformation->ResignationDate);?></td>
								<td><?php echo (is_object($CommercialActivePrincipalInformation->ConsumerScore)?"":$CommercialActivePrincipalInformation->ConsumerScore);?></td>
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
					</table>
				<?php } else { ?>
                 <div>
					<span>Commercial Active Principal Information Not Found</span><br>
                </div>
				<?php } ?>
                   </div><br/><br/>
                     <!-- End of Employment History -->
                      <!-- Start of Consumer Telephone Linkage Cellular -->
					<div class="title-head"><strong>Active Director Current Business interests</strong></div>
                    <hr class="hr-line"/>
                    <div class="col">
					<?php if($report->ActiveDirectorCurrentBusinessinterests){?>
                     <table class ="table-list">
                    <tr class="tr-list">
							<th class = "th-list">Commercial Name</th>
							<th  class = "th-list">Registration No</th>
							<th  class = "th-list">Commercial Status</th>
							<th  class = "th-list">Judgments Count</th>
							<th  class = "th-list">Default Count</th>
							<th  class = "th-list">Liquidation</th>
							<th  class = "th-list">Age Of Business</th>
							<th  class = "th-list">Judgment Status</th>
							<th  class = "th-list">Director Status Date</th>
                    </tr>
					<?php 
						if(!is_object($report->ActiveDirectorCurrentBusinessinterests)){
							foreach($report->ActiveDirectorCurrentBusinessinterests as $ActiveDirectorCurrentBusinessinterestsVal){ ?>
							<tr class="border_bottom">
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
					   } else { ?>
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
					 <?php } ?>
					</table>
				<?php } else { ?>
                 <div>
					<span>Active Director Current Business interests Not Found</span><br>
                </div>
				<?php } ?>
                   </div><br/><br/>
                 
                      <!-- End of Consumer Telephone Linkage Cellular -->
                      <!-- Start of Consumer Telephone Linkage Cellular -->
                      
                    <div class="title-head"><strong>Active Director Address History</strong></div>
                    <hr class="hr-line"/>
                     <div class="col">
					 <?php if($report->ActiveDirectorAddressHistory){?>
                     <table class="table-list">
                        <tr class="tr-list">
                             <th class = "th-list">Address Type</th>
                             <th class = "th-list">Address1</th>
                             <th class = "th-list">Address2</th>
                             <th class = "th-list">Address3</th>
                             <th class = "th-list">Address4</th>
                             <th class = "th-list">Postal Code</th>
                             <th class = "th-list">Created On Date</th>
                        </tr>
						<?php 
							if(!is_object($report->ActiveDirectorAddressHistory)){
								foreach($report->ActiveDirectorAddressHistory as $ActiveDirectorAddressHistory){?>
								<tr class="border_bottom">
									<td><?php echo (is_object($ActiveDirectorAddressHistory->AddressTypeInd)?"":$ActiveDirectorAddressHistory->AddressTypeInd);?></td>
									<td><?php echo (is_object($ActiveDirectorAddressHistory->Address1)?"":$ActiveDirectorAddressHistory->Address1);?></td>
									<td><?php echo (is_object($ActiveDirectorAddressHistory->Address2)?"":$ActiveDirectorAddressHistory->Address2);?></td>
									<td><?php echo (is_object($ActiveDirectorAddressHistory->Address3)?"":$ActiveDirectorAddressHistory->Address3);?></td>
									<td><?php echo (is_object($ActiveDirectorAddressHistory->Address4)?"":$ActiveDirectorAddressHistory->Address4);?></td>
									<td><?php echo (is_object($ActiveDirectorAddressHistory->PostalCode)?"":$ActiveDirectorAddressHistory->PostalCode);?></td>
									<td><?php echo (is_object($ActiveDirectorAddressHistory->CreatedOnDate)?"":$ActiveDirectorAddressHistory->CreatedOnDate);?></td>
								</tr>
								<?php } 
							} else { ?>
								<tr class="border_bottom">
									<td><?php echo (is_object($report->ActiveDirectorAddressHistory->AddressTypeInd)?"":$report->ActiveDirectorAddressHistory->AddressTypeInd);?></td>
									<td><?php echo (is_object($report->ActiveDirectorAddressHistory->Address1)?"":$report->ActiveDirectorAddressHistory->Address1);?></td>
									<td><?php echo (is_object($report->ActiveDirectorAddressHistory->Address2)?"":$report->ActiveDirectorAddressHistory->Address2);?></td>
									<td><?php echo (is_object($report->ActiveDirectorAddressHistory->Address3)?"":$report->ActiveDirectorAddressHistory->Address3);?></td>
									<td><?php echo (is_object($report->ActiveDirectorAddressHistory->Address4)?"":$report->ActiveDirectorAddressHistory->Address4);?></td>
									<td><?php echo (is_object($report->ActiveDirectorAddressHistory->PostalCode)?"":$report->ActiveDirectorAddressHistory->PostalCode);?></td>
									<td><?php echo (is_object($report->ActiveDirectorAddressHistory->CreatedOnDate)?"":$report->ActiveDirectorAddressHistory->CreatedOnDate);?></td>
								</tr>							
							<?php } ?>
						</table>
					<?php } else { ?>
                     <div>
						<span>Active Director Address History Not Found</span>
					</div>
					<?php } ?>
                  </div><br/><br/>
                      <!-- End of Consumer Telephone Linkage Cellular -->
                      <!-- Start of Consumer Telephone Linkage Cellular -->
					  
				  <div class="title-head"><strong>Inactive Director Address History</strong></div>
                    <hr class="hr-line"/>
                     <div class="col">
					 <?php if($report->InactiveDirectorAddressHistory){?>
                     <table class="table-list">
                        <tr class="tr-list">
                             <th class = "th-list">Address Type</th>
                             <th class = "th-list">Address1</th>
                             <th class = "th-list">Address2</th>
                             <th class = "th-list">Address3</th>
                             <th class = "th-list">Address4</th>
                             <th class = "th-list">Postal Code</th>
                             <th class = "th-list">Created On Date</th>
                        </tr>
						<?php 
							if(!is_object($report->InactiveDirectorAddressHistory)){
								foreach($report->InactiveDirectorAddressHistory as $InactiveDirectorAddressHistory){?>
								<tr class="border_bottom">
									<td><?php echo (is_object($InactiveDirectorAddressHistory->AddressTypeInd)?"":$InactiveDirectorAddressHistory->AddressTypeInd);?></td>
									<td><?php echo (is_object($InactiveDirectorAddressHistory->Address1)?"":$InactiveDirectorAddressHistory->Address1);?></td>
									<td><?php echo (is_object($InactiveDirectorAddressHistory->Address2)?"":$InactiveDirectorAddressHistory->Address2);?></td>
									<td><?php echo (is_object($InactiveDirectorAddressHistory->Address3)?"":$InactiveDirectorAddressHistory->Address3);?></td>
									<td><?php echo (is_object($InactiveDirectorAddressHistory->Address4)?"":$InactiveDirectorAddressHistory->Address4);?></td>
									<td><?php echo (is_object($InactiveDirectorAddressHistory->PostalCode)?"":$InactiveDirectorAddressHistory->PostalCode);?></td>
									<td><?php echo (is_object($InactiveDirectorAddressHistory->CreatedOnDate)?"":$InactiveDirectorAddressHistory->CreatedOnDate);?></td>
								</tr>
								<?php } 
							} else { ?>
								<tr class="border_bottom">
									<td><?php echo (is_object($report->InactiveDirectorAddressHistory->AddressTypeInd)?"":$report->InactiveDirectorAddressHistory->AddressTypeInd);?></td>
									<td><?php echo (is_object($report->InactiveDirectorAddressHistory->Address1)?"":$report->InactiveDirectorAddressHistory->Address1);?></td>
									<td><?php echo (is_object($report->InactiveDirectorAddressHistory->Address2)?"":$report->InactiveDirectorAddressHistory->Address2);?></td>
									<td><?php echo (is_object($report->InactiveDirectorAddressHistory->Address3)?"":$report->InactiveDirectorAddressHistory->Address3);?></td>
									<td><?php echo (is_object($report->InactiveDirectorAddressHistory->Address4)?"":$report->InactiveDirectorAddressHistory->Address4);?></td>
									<td><?php echo (is_object($report->InactiveDirectorAddressHistory->PostalCode)?"":$report->InactiveDirectorAddressHistory->PostalCode);?></td>
									<td><?php echo (is_object($report->InactiveDirectorAddressHistory->CreatedOnDate)?"":$report->InactiveDirectorAddressHistory->CreatedOnDate);?></td>
								</tr>							
							<?php } ?>
						</table>
					<?php } else { ?>
                     <div>
						<span>Active Director Address History Not Found</span>
					</div>
					<?php } ?>
                  </div><br/><br/>
				  
                  
                  <div class="title-head"><strong>Active Director Contact History</strong></div>
                  <hr class="hr-line"/>
                     <div class="col">
					 <?php if($report->ActiveDirectorContactHistory){?>
                     <table  class="table-list">
                        <tr class="tr-list">
                             <th class = "th-list">Bureau Update</th>
                             <th class = "th-list">Captured date</th>
                             <th class = "th-list">Contact Type</th>
                             <th class = "th-list">Detail</th>
                        </tr>
						<?php 
							if(!is_object($report->ActiveDirectorContactHistory)){
								foreach($report->ActiveDirectorContactHistory as $ActiveDirectorContactHistory){?>
								<tr  class="border_bottom">
									<td><?php echo (is_object($ActiveDirectorContactHistory->BureauUpdate)?"":$ActiveDirectorContactHistory->BureauUpdate);?></td>
									<td><?php echo (is_object($ActiveDirectorContactHistory->Captureddate)?"":$ActiveDirectorContactHistory->Captureddate);?></td>
									<td><?php echo (is_object($ActiveDirectorContactHistory->ContactType)?"":$ActiveDirectorContactHistory->ContactType);?></td>
									<td><?php echo (is_object($ActiveDirectorContactHistory->Detail)?"":$ActiveDirectorContactHistory->Detail);?></td>
								</tr>
							<?php } 
							} else { ?>
								<tr>
									<td><?php echo (is_object($report->ActiveDirectorContactHistory->BureauUpdate)?"":$report->ActiveDirectorContactHistory->BureauUpdate);?></td>
									<td><?php echo (is_object($report->ActiveDirectorContactHistory->Captureddate)?"":$report->ActiveDirectorContactHistory->Captureddate);?></td>
									<td><?php echo (is_object($report->ActiveDirectorContactHistory->ContactType)?"":$report->ActiveDirectorContactHistory->ContactType);?></td>
									<td><?php echo (is_object($report->ActiveDirectorContactHistory->Detail)?"":$report->ActiveDirectorContactHistory->Detail);?></td>
								</tr>							
							<?php } ?>
                    </table>
					<?php } else { ?>
                     <div>
						<span>Active Director Contact History Not Found</span>
					 </div>
					 <?php } ?>
                </div><br/><br/>
                <!-- End of Home Telephone -->
				
                  <div class="title-head"><strong>Director Contact History</strong></div>
                  <hr class="hr-line"/>
                     <div class="col">
					 <?php if($report->DirectorContactHistory){?>
                     <table  class="table-list">
                        <tr class="tr-list">
                             <th class = "th-list">Bureau Update</th>
                             <th class = "th-list">Captured date</th>
                             <th class = "th-list">Contact Type</th>
                             <th class = "th-list">Detail</th>
                        </tr>
						<?php 
							if(!is_object($report->DirectorContactHistory)){
								foreach($report->DirectorContactHistory as $DirectorContactHistory){?>
								<tr  class="border_bottom">
									<td><?php echo (is_object($DirectorContactHistory->BureauUpdate)?"":$DirectorContactHistory->BureauUpdate);?></td>
									<td><?php echo (is_object($DirectorContactHistory->Captureddate)?"":$DirectorContactHistory->Captureddate);?></td>
									<td><?php echo (is_object($DirectorContactHistory->ContactType)?"":$DirectorContactHistory->ContactType);?></td>
									<td><?php echo (is_object($DirectorContactHistory->Detail)?"":$DirectorContactHistory->Detail);?></td>
								</tr>
							<?php } 
							} else { ?>
								<tr>
									<td><?php echo (is_object($report->DirectorContactHistory->BureauUpdate)?"":$report->DirectorContactHistory->BureauUpdate);?></td>
									<td><?php echo (is_object($report->DirectorContactHistory->Captureddate)?"":$report->DirectorContactHistory->Captureddate);?></td>
									<td><?php echo (is_object($report->DirectorContactHistory->ContactType)?"":$report->DirectorContactHistory->ContactType);?></td>
									<td><?php echo (is_object($report->DirectorContactHistory->Detail)?"":$report->DirectorContactHistory->Detail);?></td>
								</tr>							
							<?php } ?>
                    </table>
					<?php } else { ?>
                     <div>
						<span>Director Contact History</span>
					 </div>
					 <?php } ?>
                </div><br/><br/>
				
  </body>
</html>