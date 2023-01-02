<!DOCTYPE HTML>
<html>
<head>
    <title>Trace Report</title>
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css"/>
</head>
<body>
<div>
     <div>
     <img src="<?php echo base_url();?>images/logo.jpg" style="width: 150px;height: 65px;text-align: left;" alt="logo" /> 
	 
	 <h3 class="box-title" style="text-align: right;"><?php echo $report['SubscriberInputDetails']['EnquiryType']." Report";?></h3>
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
   <h5 class="subtitle-head"><?php echo $report['SubscriberInputDetails']['SubscriberUserName']." search input details";?></h5>
  </div>
   <hr class="hr-line"/>
 <div class="col">
   <table>
           <tr>
        <th class="th-size-first"></th>
        <th class="th-size-second"></th>
        </tr>
        <tr class="tr-label">
        <td class="td-label">Enquiry Date</td>
        <td class="td-value"><?php echo $report['SubscriberInputDetails']['EnquiryDate'];?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Enquiry Type</td>
        <td class="td-value"><?php echo $report['SubscriberInputDetails']['EnquiryType'];?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Subscriber Name</td>
        <td class="td-value"><?php echo $report['SubscriberInputDetails']['SubscriberName'];?></td>
        </tr>
        <tr class="tr-label">
        <td class="td-label">Subscriber User Name</td>
        <td class="td-value"><?php echo $report['SubscriberInputDetails']['SubscriberUserName'];?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Enquiry Input</td>
        <td class="td-value"><?php echo $report['SubscriberInputDetails']['EnquiryInput'];?></td>
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
  <table>
      <tr>
       <th class="th-size-first-first-div"></th>
       <th class="th-size-first-second-div"></th>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Reference No.</td>
        <td  class="td-value"><?php echo $report['ConsumerDetail']['ReferenceNo'];?></td>
       </tr>
       <tr class="tr-label">
        <td class="td-label">ID No</td>
        <td class="td-value"><?php echo (string)$report['ConsumerDetail']['IDNo'];?></td>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Surname</td>
        <td class="td-value"><?php echo (string)$report['ConsumerDetail']['Surname'];?></td>
       </tr>
       <tr class="tr-label">
        <td class="td-label">First Name</td>
        <td class="td-value"><?php echo (string)$report['ConsumerDetail']['FirstName'];?></td>
       </tr>
       <tr class="tr-label">
        <td class="td-label">Second Name</td>
        <td class="td-value"><?php echo (string)$report['ConsumerDetail']['SecondName'];?></td>
       </tr>
       <tr class="tr-label">
        <td class="td-label">Maiden Name</td>
        <td class="td-value"><?php echo (string)$report['ConsumerDetail']['MaidenName'];?></td>
       </tr>
        <tr class="tr-label">
        <td class="td-label">Title</td>
        <td class="td-value"><?php echo (string)$report['ConsumerDetail']['TitleDesc'];?></td>
       </tr>
        <tr class="tr-label">
        <td class="td-label">Gender</td>
        <td class="td-value"><?php echo (string)$report['ConsumerDetail']['Gender'];?></td>
       </tr>
        <tr class="tr-label">
        <td class="td-label">Date of Birth</td>
        <td class="td-value"><?php echo (string)$report['ConsumerDetail']['BirthDate'];?></td>
       </tr>
        <tr class="tr-label">
        <td class="td-label">Marital Status</td>
        <td class="td-value"><?php echo (string)$report['ConsumerDetail']['MaritalStatusDesc'];?></td>
       </tr> 
        <tr class="tr-label">
        <td class="td-label">E-mail Address</td>
        <td class="td-value"><?php echo (string)($report['ConsumerDetail']['EmailAddress'];?></td>
      </tr>
    </table>
  </div>
  <!-- Second personal details -->
  <div class="col-table-second-div">
  <table>
      <tr>
        <th class="th-size-second-first-div"></th>
       <th class="th-size-second-second-div"></th>
      </tr>
      <tr class="tr-label">
        <td class="td-label">External Reference No.</td>
        <td class="td-value"><?php echo (string)($report['ConsumerDetail']['ExternalReference'];?></td>
       </tr>
      <tr class="tr-label">
        <td class="td-label">Passport or 2nd ID No</td>
        <td class="td-value"><?php echo (string)($report['ConsumerDetail']['PassportNo'];?></td>
        
      </tr>
      <tr class="tr-label">
        <td class="td-label">Residential Address</td>
        <td class="td-value"><?php echo (string)($report['ConsumerDetail']['ResidentialAddress'];?></td>
      </tr>
       <tr class="tr-label">
        <td class="td-label">Postal Address</td>
        <td class="td-value"><?php echo (string)($report['ConsumerDetail']['PostalAddress'];?></td>
      </tr>
       <tr class="tr-label">
        <td class="td-label">Telephone No. (H)</td>
        <td class="td-value"><?php echo (string)($report['ConsumerDetail']['HomeTelephoneNo'];?></td>
      </tr>
       <tr class="tr-label">
        <td class="td-label">Cellular/Mobile</td>
        <td class="td-value"><?php echo (string)($report['ConsumerDetail']['CellularNo'];?></td>
      </tr>
        <tr class="tr-label">
        <td class="td-label">Current Employer</td>
        <td class="td-value"><?php echo (string)($report['ConsumerDetail']['EmployerDetail'];?></td>
      </tr> 
     
    </table>
  </div>
  
</div>
  </div><br/><br/>
                      <!-- End of Personal Details Summary-->
                     
                     <!-- Start of AKAName History 
                    
				<div class="title-head"><strong>AKA Names</strong></div>
				<hr class="hr-line"/>
				<div class="col">
                 <table class ="table-list" th:if="${not #lists.isEmpty(traceReportRequest.akaNames)}">
                    <tr class="tr-list">
                        <th class = "th-list">Bureau UpdateDate</th>
                        <th class = "th-list">Home Affairs Name</th>
                    </tr>
                    <tr class="border_bottom" th:each="row : ${traceReportRequest.akaNames}">
                        <td th:text="${row.lastUpdateddate}"></td>
                        <td th:text="${row.homeAffairsName}"></td>
                    </tr>
                </table>
                 <div>
                     <span th:if="${#lists.isEmpty(traceReportRequest.akaNames)}" th:text="${traceReportRequest.traceReportMessage.noAkaname}"></span>
                </div><br/><br/><br/><br/>
                </div><br/><br/>-->
                     <!-- End of AKAName History -->
                      <!-- Start of Potential Fraud Indicators-->
                     <div class="title-head"><strong>Potential Fraud Indicators</strong>
                      <h5 class="subtitle-head">This section displays information verified by the Relevant Authority.</h5>
                    </div>
                    <hr class="hr-line"/>
                      <div class="col">
             <table>
			<tr>
				<th class="th-size-first-fraud"></th>
				<th class="th-size-second-fraud"></th>
			</tr>
			<tr class="tr-label">
				<td class="td-label">ID No. Verified Status</td>
				<td class="td-value"><?php echo (string)($report['ConsumerFraudIndicatorsSummary']['HomeAffairsVerificationYN'];?></td>
			</tr>
			<tr class="tr-label">
				<td class="td-label">ID No. Deceased Status</td>
				<td class="td-value"><?php echo (string)($report['ConsumerFraudIndicatorsSummary']['HomeAffairsDeceasedStatus'];?></td>
			</tr>
			<tr class="tr-label">
				<td class="td-label">ID No. Found on Fraud Database</td>
				<td class="td-value"><?php echo (string)($report['ConsumerFraudIndicatorsSummary']['SAFPSListingYN'];?></td>
			</tr>
		</table>
	</div><br/><br/>
	
	
	
	
	
                     <!-- End of Address History-->
                    
                    <div class="col">
                     <div class="title-head"><strong>Address History</strong></div>
                    <hr class="hr-line"/>
                     <table class="table-list" th:if="${not #lists.isEmpty(traceReportRequest.consumerAddressHistories)}">
                        <tr class="tr-list">
						<th class = "th-list">Bureau UpdateDate</th>
						<th  class = "th-list">Type</th>
						<th  class = "th-list">Line1</th>
						<th  class = "th-list">Line2</th>
						<th  class = "th-list">Line3</th>
						<th  class = "th-list">Line4</th>
						<th  class = "th-list">Postal Code</th>
					</tr>
					    <tr class="border_bottom" th:each="row : ${traceReportRequest.consumerAddressHistories}">
                            <td th:text="${row.lastUpdatedDate}"></td>
                            <td th:text="${row.addressType}"></td>
                             <td th:text="${row.address1}"></td>
                            <td th:text="${row.address2}"></td>
                            <td th:text="${row.address3}"></td>
                            <td th:text="${row.address4}"></td>
                            <td th:text="${row.postalCode}"></td>
                        </tr>
                    </table>
                    <span th:if="${#lists.isEmpty(traceReportRequest.consumerAddressHistories)}" th:text="${traceReportRequest.traceReportMessage.noAddress}"></span>
              
                    </div><br/><br/>
                     <!-- End of Potential Fraud Indicators-->
                      <!-- Start of Contact No. History-->
                    <div class="title-head"><strong>Contact No. History</strong></div>
                    <hr class="hr-line"/>
                    <div class="col">
                     <table class ="table-list" th:if="${not #lists.isEmpty(traceReportRequest.consumerTelephoneHistories)}">
                    <tr class="tr-list">
                        <th class = "th-list">Bureau UpdateDate</th>
                        <th class = "th-list">Type</th>
                        <th class = "th-list">Telephone No</th>
                    </tr>
                    <tr class="border_bottom" th:each="row : ${traceReportRequest.consumerTelephoneHistories}">
                        <td th:text="${row.lastUpdatedDate}"></td>
                        <td th:text="${row.telephoneType}"></td>
                        <td th:text="${row.telephoneNo}"></td>
                    </tr>
                   
                </table>
                 <div>
                <span th:if="${#lists.isEmpty(traceReportRequest.consumerTelephoneHistories)}" th:text="${traceReportRequest.traceReportMessage.noTelephone}"></span>
                </div>
                    </div><br/><br/>
                     <!-- End of Contact No. History-->
                  <!-- Start of Consumer Email History-->
                
                     <div class="title-head"><strong>Consumer Email History</strong></div>
                    <hr class="hr-line"/>
                    <div class="col">
                    <table class ="table-list" th:if="${not #lists.isEmpty(traceReportRequest.consumerEmailHistory)}">
                    <tr class="tr-list">
                        <th class = "th-list">Bureau UpdateDate</th>
                        <th class = "th-list">E-mail Address</th>
                    </tr>
                    <tr class="border_bottom" th:each="row :${traceReportRequest.consumerEmailHistory}">
                        <td th:text = "${row.lastUpdatedDate}"></td>
                        <td th:text = "${row.emailAddress}"></td>
                    </tr>
                </table>
                 <div>
                     <span th:if="${#lists.isEmpty(traceReportRequest.consumerEmailHistory)}" th:text="${traceReportRequest.traceReportMessage.noEmail}"></span>
                </div>
                </div><br/><br/>
                     <!-- End of Consumer Email History-->
                    <!-- Start of Employment History -->
                    
                     <div class="title-head"><strong>Employment History</strong></div>
                    <hr class="hr-line"/>
                    <div class="col">
                    <table class ="table-list" th:if="${not #lists.isEmpty(traceReportRequest.consumerEmploymentHistory)}">
                    <tr class="tr-list">
                        <th class = "th-list">Bureau UpdateDate</th>
                        <th class = "th-list">Employer</th>
                        <th class = "th-list">Designation</th>
                    </tr>
                    <tr class="border_bottom" th:each="row : ${traceReportRequest.consumerEmploymentHistory}">
                        <td th:text="${row.lastUpdatedDate}"></td>
                        <td th:text="${row.employerDetail}"></td>
                        <td th:text="${row.designation}"></td>
                    </tr>
                </table>
                 <div>
                     <span th:if="${#lists.isEmpty(traceReportRequest.consumerEmploymentHistory)}" th:text="${traceReportRequest.traceReportMessage.noEmployment}"></span>
                </div>
                </div><br/><br/>
                     <!-- End of Employment History -->
                      <!-- Start of Consumer Telephone Linkage Cellular -->
                      
                    <div class="title-head"><strong>Consumer Cellular Telephone Linkage</strong></div>
                    <hr class="hr-line"/>
                     <div class="col">
                     <table class="table-list" th:if="${not #lists.isEmpty(traceReportRequest.consumerTelephoneLinkageCellulars)}">
                        <tr class="tr-list">
                             <th class = "th-list">Customer Id</th>
                            <th class = "th-list">Name</th>
                            <th class = "th-list">Cell No</th>
                             <th class = "th-list">Work Tel</th>
                             <th class = "th-list">Idno</th>
                             <th class = "th-list">PassportNo</th>
                        </tr>
                        <tr  class="border_bottom" th:each="row : ${traceReportRequest.consumerTelephoneLinkageCellulars}">
                            <td th:text="${row.consumerId}"></td>
                            <td th:text="${row.consumerName +' '+ row.surname}"></td>
                            <td th:text="${row.cellularNo}"></td>
                            <td th:text="${row.homeTelephone}"></td>
                            <td th:text="${row.idNo}"></td>
                            <td th:text="${row.passportNo}"></td>
                        </tr>
                    </table>
                     <div>
                    <span th:if="${#lists.isEmpty(traceReportRequest.consumerTelephoneLinkageCellulars)}" th:text="${traceReportRequest.traceReportMessage.noCellphoneLink}"></span>
                 </div>
                 </div><br/><br/>
                     
                      <!-- End of Consumer Telephone Linkage Cellular -->
                      <!-- Start of Consumer Telephone Linkage Cellular -->
                      
                      <div class="title-head"><strong>Consumer Work Telephone Linkage</strong></div>
                    <hr class="hr-line"/>
                     <div class="col">
                     <table  class="table-list" th:if="${not #lists.isEmpty(traceReportRequest.consumerTelephoneLinkageWorks)}">
                        <tr class="tr-list">
                             <th class = "th-list">Customer Id</th>
                            <th class = "th-list">Name</th>
                            <th class = "th-list">Cell No</th>
                             <th class = "th-list">Work Tel</th>
                             <th class = "th-list">Idno</th>
                             <th class = "th-list">PassportNo</th>
                        </tr>
                        <tr  class="border_bottom" th:each="row : ${traceReportRequest.consumerTelephoneLinkageWorks}">
                            <td th:text="${row.consumerId}"></td>
                            <td th:text="${row.consumerName +' '+ row.surname}"></td>
                            <td th:text="${row.cellularNo}"></td>
                            <td th:text="${row.homeTelephone}"></td>
                            <td th:text="${row.idNo}"></td>
                            <td th:text="${row.passportNo}"></td>
                        </tr>
                    </table>
                     <div>
                    <span th:if="${#lists.isEmpty(traceReportRequest.consumerTelephoneLinkageWorks)}" th:text="${traceReportRequest.traceReportMessage.noTelephoneLink}"></span>
                 </div>
                  </div><br/><br/>
                      <!-- End of Consumer Telephone Linkage Cellular -->
                      <!-- Start of Consumer Telephone Linkage Cellular -->
                      
                      <div class="title-head"><strong>Consumer Home Telephone Linkage</strong></div>
                    <hr class="hr-line"/>
                     <div class="col">
                     <table  class="table-list" th:if="${not #lists.isEmpty(traceReportRequest.consumerTelephoneLinkageHomes)}">
                        <tr class="tr-list">
                             <th class = "th-list">Customer Id</th>
                            <th class = "th-list">Name</th>
                            <th class = "th-list">Cell No</th>
                             <th class = "th-list">Work Tel</th>
                             <th class = "th-list">Idno</th>
                             <th class = "th-list">PassportNo</th>
                        </tr>
                        <tr  class="border_bottom" th:each="row : ${traceReportRequest.consumerTelephoneLinkageHomes}">
                            <td th:text="${row.consumerId}"></td>
                            <td th:text="${row.consumerName +' '+ row.surname}"></td>
                            <td th:text="${row.cellularNo}"></td>
                            <td th:text="${row.homeTelephone}"></td>
                            <td th:text="${row.idNo}"></td>
                            <td th:text="${row.passportNo}"></td>
                        </tr>
                    </table>
                     <div>
                    <span th:if="${#lists.isEmpty(traceReportRequest.consumerTelephoneLinkageHomes)}" th:text="${traceReportRequest.traceReportMessage.notHomeTelephone}"></span>
                 </div>
                </div><br/><br/>
                <!-- End of Home Telephone -->
                <div  th:if="${traceReportRequest.consumerPropertyInformationSummary}">
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
        <td class="td-value" th:if="${traceReportRequest.consumerPropertyInformationSummary}" th:text = "${traceReportRequest.consumerPropertyInformationSummary.totalProperty}"> </td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Purchase Price</td>
        <td class="td-value" th:if="${traceReportRequest.consumerPropertyInformationSummary}" th:text = "${'R'+traceReportRequest.consumerPropertyInformationSummary.purchasePrice}"> </td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Number Of Company Director</td>
        <td class="td-value" th:if="${traceReportRequest.consumerDirectorSummary}" th:text = "${traceReportRequest.consumerDirectorSummary.numberOfCompanyDirector}"> </td>
        </tr>
        </table>              
  </div>
   </div>
  </body>
</html>