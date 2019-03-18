<style>
    .table-condensed tbody td{
        text-align:center;
    }
</style>
    <!-- BEGIN PAGE -->
    <div class="page-content margin-top-20">
        <!-- BEGIN PAGE CONTAINER-->
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption"><i class="icon-user"></i>Participants</div>
                        </div>
                        <div class="portlet-body no-more-tables">
                            <table class="table-bordered table-striped table-condensed cf">
                                <thead class="cf">
                                    <tr>
                                        <th class="span1">No</th>
                                        <th class="span1">Ip</th>
                                        <th class="span3">Name</th>
                                        <th class="span4">Email</th>
                                        <th class="span4">Phone</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach($paticipants as $pa) {
                                    ?>
                                    <tr>
                                        <td class="span1"><?php echo $pa->id;?></td>
                                        <td class="span1"><?php echo $pa->ip;?></td>
                                        <td class="span3"><?php echo $pa->name;?></td>
                                        <td class="span4"><?php echo $pa->email;?></td>
                                        <td class="span5"><?php echo $pa->phone;?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>

                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTAINER-->
    </div>
    <!-- END PAGE -->

