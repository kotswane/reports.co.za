<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header"></li> -->
        <li><a href="<?php echo site_url();?>/tracereport"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="treeview">
            <a href="#"><i class="fa fa-unlock"></i> <span>Trace Report</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?php echo site_url();?>/tracereport/idsearch"><i class="fa fa-key"></i>&nbsp; ID Search</a></li>
                <li><a href="<?php  echo site_url();?>/tracereport/addresssearch"><i class="fa fa-address-book"></i>&nbsp; Address Search</a></li>
                 <li><a href="<?php echo site_url();?>/tracereport/telephonesearch"><i class="fa fa-phone-square"></i>&nbsp; Telephone Trace</a></li>
                <li><a href="<?php echo site_url();?>/tracereport/fuzzysearch"><i class="fa fa-etsy"></i>&nbsp; Fuzzy Search</a></li>
              <!--    <li><a href="/lkcentrixreportservice/reports/cipc-search"><i class="fa fa-circle-o"></i>CIPC Search</a></li>
          -->
            </ul>
        </li>
         <li class="treeview">
            <a href="#"><i class="fa fa-home"></i> <span>Deed Report</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
               <!--   <li><a href="/lkcentrixreportservice/deedsenquiry/erf-search"><i class="fa fa-circle-o"></i>Erf Search</a></li> -->
                <li><a href="<?php echo site_url();?>/deedreport/individualsearch"><i class="fa fa-key"></i>&nbsp; Individual Search</a></li>
               <!--  <li><a href="/lkcentrixreportservice/deedsenquiry/company-search"><i class="fa fa-circle-o"></i>Company Search</a></li>
                <li><a href="/lkcentrixreportservice/deedsenquiry/titledeed-search"><i class="fa fa-circle-o"></i>Title Deed Search</a></li>
                --> 
            </ul>
        </li>
         <li class="treeview">
            <a href="#"><i class="fa fa-check-square-o"></i> <span>Verification Report</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?php echo site_url();?>/verificationreport/idverification"><i class="fa fa-id-card" aria-hidden="true"></i>&nbsp; ID Verification</a></li>
                 <li><a href="<?php echo site_url();?>/verificationreport/idphotoverification"><i class="fa fa-id-badge" aria-hidden="true"></i>&nbsp; ID Facial Verification</a></li>
                  
         
            </ul>
        </li>
    </ul>
    <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
