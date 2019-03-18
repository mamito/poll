<style>
    .form-horizontal .controls{
        margin-left:450px;
    }
    .form-horizontal .control-label{
        width:400px;
    }
    .portlet.box .portlet-body{
        padding-bottom:0px;
    }
    .help-inline{
        width:100%;
        /*font-size:15px;*/
        margin-left:30px;
        margin-bottom:10px !important;
    }
    .form-horizontal.form-bordered .control-group .control-label{
        /*font-size:16px;*/
    }
</style>
<!-- BEGIN PAGE -->
<div class="page-content margin-top-20">
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">

        <!-- BEGIN PAGE CONTENT-->
        <div class="row-fluid">
            <div class="span10 offset1">
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption"><i class="icon-reorder"></i>Result of Votes</div>
                    </div>
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="#" class="form-horizontal form-bordered">
                            <?php
                            foreach($cates as $key=>$val) {
                                $id_name = $key;
                                $id_name_ = explode(",", $key);
                                $cate_id = $id_name_[0];
                                $cate_name = $id_name_[1];
                                $vokes = $val;
                                    ?>
                                    <div class="control-group">
                                        <label class="control-label"><?php echo $cate_name;?></label>
                                        <div class="controls">
                                            <?php

                                            foreach($vokes as $voke){
                                                ?>
                                                <span class="help-inline">
                                                    -- <?php echo $voke["voke_name"];?>, votes, <?php echo (empty($voke["cnt"]))? 0:$voke["cnt"];?><br/>
                                                </span>
                                            <?php
                                            }
                                            ?>

                                        </div>
                                    </div>
                            <?php
                            }
                            ?>
                        </form>
                        <!-- END FORM-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>