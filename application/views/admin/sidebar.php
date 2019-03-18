<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar nav-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu">
            <li class="start <?php echo $sidebar_index == 1?'active':'';?>">
                <a href="<?php echo base_url();?>admin/vokemaker">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="<?php echo $sidebar_index == 3?'active':'';?>">
                <a href="<?php echo base_url();?>admin/vokemaker/paticipants">
                    <i class="icon-user"></i>
                    <span class="title">Participants</span>
                </a>
            </li>
            <li class="<?php echo $sidebar_index == 2?'active':'';?>">
                <a href="<?php echo base_url();?>admin/vokemaker/setting">
                    <i class="icon-cogs"></i>
                    <span class="title">Settings</span>
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->