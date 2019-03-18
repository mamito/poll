<!-- BEGIN PAGE -->
<div class="page-content margin-top-20">
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid margin-top-50">
        <div class="row-fluid">
            <div class="span12">
                <div class="span3">
                    <ul class="ver-inline-menu tabbable margin-bottom-10">
                        <?php
                        $index = 0;
                        foreach ($cates as $key => $val) {
                            /*$id_name = $key;
                            $id_name_ = explode(",", $key);
                            $cate_id = $id_name_[0];
                            $cate_name = $id_name_[1];*/
                            $cate_id = $key;
                            $cate_name = $val['cate_name'];
                            ?>

                            <li id="<?php echo $cate_id; ?>" class="<?php echo $index == 0 ? 'active' : ''; ?>">
                                <a data-toggle="tab" href="#tab_<?php echo $cate_id; ?>"><i class="icon-cog"></i><span id="label_<?php echo $cate_id; ?>"><?php echo $cate_name; ?></span></a>
                            </li>
                            <?php
                            $index++;
                        }
                        ?>
                        <li>
                            <form method="post" action="<?php echo base_url("admin/vokemaker/cat_add"); ?>">
                                <input type="text" class="span9 m-wrap" name="cat_name" required>
                                <button type="submit" class="span3 btn blue pull-right"><span class="icon-plus"></span> Add</button>
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="span9">
                    <div class="tab-content">
                        <?php
                        $index_content = 0;
                        foreach ($cates as $key => $val) {
                            /*$id_name = $key;
                            $id_name_ = explode(",", $key);
                            $cate_id = $id_name_[0];
                            $cate_name = $id_name_[1];
                            $vokes = $val;*/
                            $cate_id = $key;
                            $cate_name = $val['cate_name'];
                            $que_txt = $val['que_txt'];
                            $description = $val['description'];
                            $allowed_choices = $val['allowed_choices'];
                            $vokes = $val['data_item'];
                            ?>
                            <div id="tab_<?php echo $cate_id; ?>" class="tab-pane <?php echo $index_content == 0 ? 'active' : ''; ?>">
                                <div class="control-group span9">
                                    <label class="control-label">Category Name</label>
                                    <div class="controls">
                                        <input id="cateName_<?php echo $cate_id; ?>" type="text" class="span12 m-wrap tooltips" data-trigger="hover" data-original-title="You can edit category name here." value="<?php echo $cate_name; ?>">
                                    </div>
                                </div>
                                <div class="control-group span3">
                                    <label class="control-label">Allowed Choices</label>
                                    <div class="controls">
                                        <input id="cateAllowedChoices_<?php echo $cate_id; ?>" type="text" class="span12 m-wrap tooltips" data-trigger="hover" data-original-title="You can enter maximum allowed choices here." value="<?php echo $allowed_choices; ?>">
                                    </div>
                                </div>
                                <div class="control-group span12" style="clear:left; margin-left:0;">
                                    <label class="control-label">Question Instructions</label>
                                    <div class="controls">
                                        <input id="cateQueTxt_<?php echo $cate_id; ?>" type="text" class="span12 m-wrap tooltips" data-trigger="hover" data-original-title="You can enter question instructions here." value="<?php echo $que_txt; ?>">
                                    </div>
                                </div>
                                <div class="control-group span12" style="clear:left; margin-left:0;">
                                    <label class="control-label">Description</label>
                                    <div class="controls">
                                        <textarea id="cateDescription_<?php echo $cate_id; ?>" class="span12 m-wrap tooltips" data-trigger="hover" data-original-title="You can the descriptions here."><?php echo $description; ?></textarea>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button id="sample_editable_<?php echo $cate_id; ?>_new" class="btn green">
                                        Add New <i class="icon-plus"></i>
                                    </button>
                                </div>

                                <small style="margin-left:20px;">You can add category via this button</small>
                                <div style="height: auto;margin-top:20px;" id="accordion1-1" class="accordion in collapse">
                                    <form action="#">
                                        <table class="table table-striped table-hover table-bordered categrory_table" id="sample_editable_<?php echo $cate_id; ?>">
                                            <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Voke Name</th>
                                                <th>Thumbnail</th>
                                                <th>Thumbnail Url</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <?php
                                            foreach ($vokes as $voke) {
                                                ?>
                                                <tr class="">
                                                    <td class="order_<?php echo $cate_id; ?>"><?php echo $voke["voke_order"]; ?></td>
                                                    <td class="voke_<?php echo $cate_id; ?>"><?php echo $voke["voke_name"]; ?></td>
                                                    <td class="thumb_<?php echo $cate_id; ?>"><?php echo $voke["thumbnail"]; ?></td>
                                                    <td class="thumb_url_<?php echo $cate_id; ?>"><?php echo $voke["thumbnail_url"]; ?></td>
                                                    <td><a class="edit" href="javascript:;">Edit</a></td>
                                                    <td><a class="delete" href="javascript:;">Delete</a></td>
                                                </tr>

                                                <?php
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                        <div class="form-actions">
                                            <a href="<?php echo base_url("admin/vokemaker/cat_delete/" . $cate_id) ?>" class="btn red pull-right"><i class="icon-trash"></i> Delete</a>
                                            <a id="sub_<?php echo $cate_id; ?>" href="#" class="btn blue pull-right"><i class="icon-save"></i> Submit</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <script>

                                $(document).ready(function () {
                                    TableEditable.init('sample_editable_<?php echo $cate_id;?>');
                                    //bind event on submit button

                                    $("#sub_<?php echo $cate_id;?>").click(function () {
                                        var cate_id = <?php echo $cate_id;?>;
                                        var voke_order = [];
                                        var voke_name = [];
                                        var voke_thumb = [];
                                        var voke_thumb_urls = [];

                                        $("#sample_editable_<?php echo $cate_id;?> tbody tr").each(function () {
                                            var ele = $(this);
                                            var order_item = encodeURIComponent(ele.find('td:first').html());
                                            var voke_item = encodeURIComponent(ele.find('td:nth-child(2)').html());
                                            var thumbnail = encodeURIComponent(ele.find('td:nth-child(3)').html());
                                            var thumbnail_url = encodeURIComponent(ele.find('td:nth-child(4)').html());
                                            voke_order.push(order_item);
                                            voke_name.push(voke_item);
                                            voke_thumb.push(thumbnail);
                                            voke_thumb_urls.push(thumbnail_url);
                                        });

                                        var cate_name = encodeURIComponent($("#cateName_<?php echo $cate_id;?>").val());
                                        var que_txt = encodeURIComponent($("#cateQueTxt_<?php echo $cate_id;?>").val());
                                        var description = encodeURIComponent($("#cateDescription_<?php echo $cate_id;?>").val());
                                        var allowed_choices = encodeURIComponent($("#cateAllowedChoices_<?php echo $cate_id;?>").val());
                                        var param = "cate_id=" + cate_id + "&cate_name=" + cate_name + "&que_txt=" + que_txt + "&description=" + description;
                                        param += "&allowed_choices=" + allowed_choices + "&voke_names=" + voke_name.join(",") + "&voke_orders=" + voke_order.join(",");
                                        param += "&thumbnails=" + voke_thumb.join(",") + "&thumbnail_urls=" + voke_thumb_urls.join(",");

                                        ajax_proc("<?php echo base_url();?>admin/vokemaker/save", param,
                                            function () {
                                                show_loading($('.page-container'));
                                                $("#sum_info").hide();
                                            },

                                            function (data) {
                                                hide_loading($('.page-container'));
                                                $("#label_<?php echo $cate_id;?>").html(decodeURIComponent(cate_name));
                                            },

                                            function (data) {
                                                hide_loading($('.page-container'));
                                            });
                                    });
                                });
                            </script>
                            <?php
                            $index_content++;
                        }
                        ?>
                    </div>
                </div>
                <!--end span9-->
            </div>
        </div>
    </div>
    <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->