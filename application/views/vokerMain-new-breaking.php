<style>

    .control-group{

        margin:40px 10px;

    }

    .box-shadow--2dp {

        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 3px 1px -2px rgba(0, 0, 0, .2), 0 1px 5px 0 rgba(0, 0, 0, .12)

    }

    .box-shadow--3dp {

        box-shadow: 0 3px 4px 0 rgba(0, 0, 0, .14), 0 3px 3px -2px rgba(0, 0, 0, .2), 0 1px 8px 0 rgba(0, 0, 0, .12)

    }

    .box-shadow--4dp {

        box-shadow: 0 4px 5px 0 rgba(0, 0, 0, .14), 0 1px 10px 0 rgba(0, 0, 0, .12), 0 2px 4px -1px rgba(0, 0, 0, .2)

    }

    .box-shadow--6dp {

        box-shadow: 0 6px 10px 0 rgba(0, 0, 0, .14), 0 1px 18px 0 rgba(0, 0, 0, .12), 0 3px 5px -1px rgba(0, 0, 0, .2)

    }

    .box-shadow--8dp {

        box-shadow: 0 8px 10px 1px rgba(0, 0, 0, .14), 0 3px 14px 2px rgba(0, 0, 0, .12), 0 5px 5px -3px rgba(0, 0, 0, .2)

    }

    .box-shadow--16dp {

        box-shadow: 0 16px 24px 2px rgba(0, 0, 0, .14), 0 6px 30px 5px rgba(0, 0, 0, .12), 0 8px 10px -5px rgba(0, 0, 0, .2)

    }

</style>

<!-- BEGIN BODY -->

<body style="background:#00aeef;background-image: url(media/image/bg.png);background-repeat: repeat-y;">

<!-- BEGIN HEADER -->



<!-- END HEADER -->

<!-- BEGIN CONTAINER -->

<div class="container"  >

    <!-- BEGIN EMPTY PAGE SIDEBAR -->

    

    <!-- END EMPTY PAGE SIDEBAR -->

    <!-- BEGIN PAGE -->
<?php /*?><div class="hidden2 row" id="box1" style="background:white; display:none;">
<button class="buttonimg"><img src="smavote.jpg" class="img-responsive"/></button><?php */?>
<!--<div class="closex"><button class="button1">x</button></div>-->
<!--<div class="closex"><button class="button1">x</button></div>-->
</div>
    <div class="page-content backgr" style="/*min-height:auto !important;min-height:4316px;*/min-height:5555px;">

        <div class="row-fluid span10 offset1 box-shadow--8dp" style="background-color: #fff;margin-bottom:30px;margin-top:20px;">

            <div id="alertBox" class="row-fluid span6 offset3" style="margin-top:30px;display: none;">

                <span class="alert alert-error">You have been already submit votes, you can vote again tomorrow !!!</span>

            </div>

			<div style="/*width:180px;*/ text-align:center; /*margin-left: 36.75213675213675%; width: 31.623931623931625%;*/"><img src="logo.jpg" style="max-width:290px; text-align:center;"></div>
            <div style="text-align:center; margin:7px;">
<?php /*?>            <button class="btn btn-default">ΨΗΦΙΣΕ ΚΑΙ ΚΕΡΔΙΣΕ</button>
<?php */?>            </div>
            <div class="row">
<div class="col-md-10 col-md-offset-1 col-xs-12">
			</br></br><h3 style="line-height: 25px; text-align:center;width: 90% !important;">Ανάδειξε τους αγαπημένους σου καλλιτέχνες μέσα από 10 διαφορετικές κατηγορίες.<br>Δες τις υποψηφιότητες και ψήφισε πιο κάτω τους καλυτέρους για το 2015-2016.</h3></br></br>

                <?php

                /*var_dump($cates);*/

                foreach($cates as $key=>$val){

                   /* $id_name = $key;

                    $id_name_ = explode(",",$key);

                    $cate_id = $id_name_[0];

                    $cate_name = $id_name_[1];
					
                    $vokes = $val;
					*/
					
					$cate_id=$key;
					$cate_name=$val['cate_name'];
					$que_txt=$val['que_txt'];
					$description=$val['description'];
					$allowed_choices=($val['allowed_choices']>=1)?$val['allowed_choices']:1;
					$vokes = $val['data_item'];
					

                    ?>

                    <div class="control-group" id="<?php echo $cate_id;?>">
                        <h4><?php echo $cate_name;?></h4>
                        <p><?php echo $que_txt;?></p>

                        <p> <!--change by John 16/5-->
                        <!--<div class="container">
                        <div class="row">
                        <div class=".col-md-6">-->

                    <?php


                    foreach($vokes as $voke){

                        ?>

                        <label class="checkbox line">

                        <span class="">

                            <input class="answer" type="checkbox" value="<?php echo $voke["voke_order"];?>" name="<?php echo $cate_id;?>">

                        </span>

                            <?php echo $voke["voke_name"];?>

                        </label>

                <?php

                    }

                    ?>
                   <!-- </div>
                    </div>
                    </div>-->

                        </p><!--change by John 16/5-->
						
						<p><?php echo $description; ?></p>

                    </div>

                    <script>

                        $("input[name='<?php echo $cate_id;?>']").change(function () {

                            var cnt = $("input[name='<?php echo $cate_id;?>']:checked").length;

                            if (cnt > <?php echo $allowed_choices;?>) {

                                $(this).parent().removeClass("checked");

                                $(this).prop("checked",false);

                                <!--alert('Μπορειτε να επιλεξετε εως  <?php echo LIMTIECNT;?>  για την κατηγορια <?php echo $cate_name;?>!!');-->

                                <!--alert('Εχετε επιλέξει περισσότερες από τις επιτρεπόμενες υποψηφιότες!');-->
								swal({   title: "#SMA",   text: "Δεν επιτρέπεται και άλλη ψήφος σε αυτή τη κατηγορία",   imageUrl: "popuplogo.png" });

                            }

                        });

                    </script>
<hr>
                            <?php

                }

                ?>

            </div>
</div>
            <div class="row-fluid span10 offset1" style="border-top: 1px solid #eee;"></div>

            <div class="col-md-10 col-md-offset-1 col-xs-12">
<h4 style="text-align:center;width: 90%;">Συμπλήρωσε πιο κάτω τα στοιχεία σου για να μπεις στην κλήρωση.</h4>
                <div class="control-group">

<?php /*?>                    <label class="control-label"><?php echo SUBMITNAME;?></label>
<?php */?>                    <label class="control-label"><?php echo "Όνομα"?></label>

                    <div class="controls">

                        <input id="name" type="text" class="span12 m-wrap popovers"  data-trigger="hover" data-content="<?php echo SUBMITNAMECONTENT;?>" data-original-title="<?php echo SUBMITNAMELABEL;?>">

                    </div>

                </div>

                <div class="control-group">

<?php /*?>                    <label class="control-label"><?php echo SUBMITEMAIL;?></label>
<?php */?>                    <label class="control-label"><?php echo "Email"?></label>


                    <div class="controls">

                        <input id="email" type="text" class="span12 m-wrap popovers" data-trigger="hover" data-content="<?php echo SUBMITEMAILCONTENT;?>" data-original-title="<?php echo SUBMITEMAILLABEL;?>" placeholder="you@domain.com">

                    </div>

                </div>

                <div class="control-group">

<?php /*?>                    <label class="control-label"><?php echo SUBMITPHONENUMBER;?></label>
<?php */?>                    <label class="control-label"><?php echo "Τηλέφωνο"?></label>
                    <div class="controls">

                        <input  id="phonenumber" type="text" class="span12 m-wrap popovers" data-trigger="hover" data-content="<?php echo SUBMITPHONENUMBERCONTENT;?>" data-original-title="<?php echo SUBMITPHONENUMBERLABEL;?>">
                        <br>
<?php /*?><div class="controls">
  <input checked type="checkbox" name="vehicle" value="Bike"> Συμφωνώ να λαμβάνω email με ενημέρωση για τα Super Music Awards by Lidl.<br>
  </div>
  <?php */?>
  <br><br>
  <p style="text-align:center;">Το email και το τηλέφωνο είναι αναγκαίο για να επικοινωνήσουμε μαζί σου σε περίπτωση που κερδίσεις.</p>

                    </div>

                </div>

            </div>

            <div class="row-fluid span10 offset1" style="border-top: 1px solid #eee;"></div>			
                <div class="row" style="padding:20px">
				<div class="col-md-2 col-md-offset-5" >
                    <a id="submit" class="btn btn-blue center-block" data-toggle="modal" <?php if($is_ip_exists>0){?> style="pointer-events:none;" <?php }?>>Submit</a>
					</div>
    
                </div>
        </div>


        <!-- END PAGE CONTAINER-->

    </div>



    <!-- END PAGE -->

</div>

<!-- END CONTAINER -->

<!-- BEGIN FOOTER -->

<!--<div class="footer">

    <div class="footer-inner">

        2016 &copy; voker administrator

    </div>

    <div class="footer-tools">

			<span class="go-top">

			<i class="icon-angle-up"></i>

			</span>

    </div>

</div>

<!-- END FOOTER -->

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->



<script>

    jQuery(document).ready(function() {

        App.init();
		
		$(document).on('click','input[type="checkbox"],input[type="text"],.btn',function(event){
			<?php
			if($is_ip_exists>0)
			{?>
				event.preventDefault();
				if($(this).attr("type")=="checkbox")
				{
					$(this).parent().removeClass("checked");
					$(this).prop("checked",false);
				}
				alert('You have been already submit votes, you can vote again tomorrow !!!');
				return false;		
			<?php
			}?>			
		});


        //check if already submit votes

        ajax_proc("<?php echo base_url();?>voker/already_subChk", null,

            function() {

                $("#alertBox").hide();

            },

            function(data) {

                var msg = data.msg;

                var rlt = data.rlt;

                if(rlt == "ok"){

                    if(parseInt(msg) > 0){

                        $("#alertBox").show();

                    }

                    else{

                        $("#alertBox").hide();

                    }

                }

            },

            function(data){

                $("#alertBox").hide();

            });

        $("#submit").click(function(){

            var selected_count = 0;

            var param = [];

            var id_array = [];

            var voke_array = [];

            $(".answer").each(function(){

                if($(this).parent().hasClass("checked")){

                    var item = {};



                    var cate_id = $(this).attr("name");

                    var answer = $(this).val();

                    id_array.push(cate_id);

                    voke_array.push(answer);



                    selected_count++;

                }

            });

            if(selected_count == 0){

                alert("Please select an vokes!!")

            }

            else{

                var name = $("#name").val();

                var email = $("#email").val();

                var phoneNumber = $("#phonenumber").val();

                /*if(name == "" || email =="" || phoneNumber ==""){

                    if(name == ""){

                        alert("Please input the name!!!");

                        return false;

                    }

                    if(email == ""){

                        alert("Please input the email!!!");

                        return false;

                    }

                    if(phoneNumber == ""){

                        alert("Please input the phone number!!!");

                        return false;

                    }

                }

                else{*/

                    if(email != "" && email.indexOf("@") == -1){

                        alert("Email should be contain @!");

                    }

                    else{

                        var param = "cate_ids="+id_array.join(",")+"&voke_orders="+voke_array.join(",")+

                            "&name="+name+"&email="+email+"&phone="+phoneNumber;

                        ajax_proc("<?php echo base_url();?>voker/save", param,

                            function() {

                                show_loading($('.page-container'));

                                $("#sum_info").hide();

                            },

                            function(data) {

                                hide_loading($('.page-container'));

                                var rlt = data.rlt;

                                var msg = data.msg;

                                if(rlt == "ok")
                                {

                                    alert("Σας ευχαριστούμε για την ψήφο σας!");

                                }

                                if(rlt == "existIp"){

                                    alert("Σας ευχαριστούμε για την επίσκεψη, μπορείτε να ψηφίσετε και πάλι αύριο !");

                                }

                                window.location  = "<?php echo base_url();?>voker/";

                            },

                            function(data){

                                hide_loading($('.page-container'));

                            });

                    }

                /*}*/

            }

        });

    });

</script>

<!-- END JAVASCRIPTS -->

