<?php $showThumbs = false ?>

<style>
    .control-group {
        /*margin:40px 10px;*/
        margin: 0px 10px;
    }

    .control-group.email {
        display: none;
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
	form label {
	float: left;
	width: 150px;
	margin-bottom: 5px;
	margin-top: 5px;
}
.clear {
	display: block;
	clear: both;
	width: 100%;
}


</style>

<!-- BEGIN BODY -->
<body class="page-header-fixed page-footer-fixed page-full-width">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <!--<div class="navbar-inner">
        <div class="container-fluid">
            <!-- BEGIN LOGO -->
    <!--   <h4 style="color:white;float: left;">Voker System</h4>
       <!-- END LOGO -->
    <!-- </div>



 </div>
 <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid" style="background:#00aeef;">
    <!-- BEGIN EMPTY PAGE SIDEBAR -->
    <div class="page-sidebar nav-collapse collapse visible-phone visible-tablet">

    </div>
    <!-- END EMPTY PAGE SIDEBAR -->
    <!-- BEGIN PAGE -->
    <div class="hidden2" id="box1" style="background:white;">
        <?php /*?>
		<button class="buttonimg"><img src="smavote.jpg" /></button>
		<?php */ ?>
		<!--<div class="closex">
		<button class="button1">x</button>
		</div>-->
        <!--<div class="closex">
		<button class="button1">x</button>
		</div>-->
    </div>
    <div class="page-content backgr" style="min-height:5000px; background-color:#662483">
        <div class="row-fluid span10 offset1 box-shadow--8dp" style="background-color: #fff;margin-bottom:30px;margin-top:20px;">
            <!-- <div id="alertBox" class="row-fluid span7 offset3" style="margin-top:30px;display: none;line-height: 35px;font-size:1.3em;">
                 <span class="alert alert-error">Έχετε ήδη ψηφίσει για σήμερα, μπορείτε να ψηφίσετε ξανά αύριο!</span>
             </div>-->
            <?php if($is_ip_exists) {?>
            <div id="alertBox" class="row-fluid span7 offset3" style="margin-top:5px;line-height: 30px;font-size:1.3em; background:#D92037; color:white; text-align:center; font-weight:bold; margin-bottom:30px; border-radius:5px;">
                <span class="">Έχετε ήδη ψηφίσει για σήμερα, μπορείτε να ψηφίσετε ξανά αύριο!</span>
            </div>
            <?php } ?>

            <div style="text-align:center;" class="mobile-hide">
			<img src="https://via.placeholder.com/1400x400" style="width:100%; max-width:1393px; text-align:center;">
            </div>
			<div style="text-align:center;margin-left: -5px;margin-right: -5px;" class="desktop-hide">
			<img src="<?php echo base_url();?>media/image/sma-cover-web.jpg" style="width:100%; max-width:1393px; text-align:center;">
            </div>

            <div style="text-align:center; margin:7px;">
                <?php /*?>            <button class="button2">ΨΗΦΙΣΕ ΚΑΙ ΚΕΡΔΙΣΕ</button>
<?php */ ?>            </div>
            <div class="row-fluid span4 offset4">
                </br></br>

				<div class="mobile-hide">
          <h3 class="text_before_vote">Ετοιμάσαμε την λίστα με τα 40 τραγούδια, ελληνικού και ξένου ρεπερτορίου, με τις περισσότερες μεταδόσεις στον SUPER FM μέσα στο 2018*. Zητάμε από εσάς, τους ακροατές μας, να μας βοηθήσετε να διαμορφώσουμε τη τελική κατάταξη στο SUPER TOP40 του 2018 και να αναδείξουμε το Νο1 , το δημοφιλέστερο τραγούδι της φετινής χρονιάς! </br>
  <strong>Ψηφίστε τα KAΛΥΤΕΡΑ ΤΡΑΓΟΥΔΙΑ ΤΟΥ 2018 και διεκδικήστε ….</strong></br>
  Διαλέξτε μέχρι 10 από την πιο κάτω λίστα με τα 40 πρώτα σε μεταδόσεις τραγούδια της χρονιάς (αλφαβητικά, ελληνικά-διεθνή):</br>
  </h3> <p style="font-size:0.8em"></p>

          <img style="text-align:center;margin: 20px 0px 5px 0px;" src="<?php echo base_url();?>media/image/element.png">
<!--				<img style="margin-bottom:20px;" class="" src="<?php echo base_url();?>media/image/keimeno.png">-->
				</div>

				<div class="desktop-hide">
				<h3 style="line-height: 25px; text-align:left;width: 100% !important; font-size:1.0em;font-weight: 400 !important;margin-top: -16px;">Ετοιμάσαμε την λίστα με τα 40 τραγούδια, ελληνικού και ξένου ρεπερτορίου, με τις περισσότερες μεταδόσεις στον SUPER FM μέσα στο 2018*. Zητάμε από εσάς, τους ακροατές μας, να μας βοηθήσετε να διαμορφώσουμε τη τελική κατάταξη στο SUPER TOP40 του 2018 και να αναδείξουμε το Νο1 , το δημοφιλέστερο τραγούδι της φετινής χρονιάς! </br>
<strong>Ψηφίστε τα KAΛΥΤΕΡΑ ΤΡΑΓΟΥΔΙΑ ΤΟΥ 2018 και διεκδικήστε ….</strong></br>
Διαλέξτε μέχρι 10 από την πιο κάτω λίστα με τα 40 πρώτα σε μεταδόσεις τραγούδια της χρονιάς (αλφαβητικά, ελληνικά-διεθνή):</br>
</h3> <p style="font-size:0.8em"></p>

				<img style="text-align:center;margin: 20px 0px 5px 0px;" src="<?php echo base_url();?>media/image/element.png">
				</div>

				</br>

                <?php
                /*var_dump($cates);*/

                foreach ($cates as $key => $val) {
                /* $id_name = $key;
                 $id_name_ = explode(",",$key);
                 $cate_id = $id_name_[0];
                 $cate_name = $id_name_[1];
                 $vokes = $val;
                 */

                $cate_id = $key;
                $cate_name = $val['cate_name'];
                $que_txt = $val['que_txt'];
                $description = $val['description'];
                $allowed_choices = ($val['allowed_choices'] >= 1) ? $val['allowed_choices'] : 1;
                $vokes = $val['data_item'];

                ?>

                <div class="control-group" id="<?php echo $cate_id; ?>">
                    <h4 class="que_title" style="font-weight: 400 !important;"><?php echo $cate_name. " " .$que_txt; ?></h4>
                    <h4 class="sub_title">


					</h4>

                    <p> <!--change by John 16/5-->
                        <!--<div class="container">
                        <div class="row">
                        <div class=".col-md-6">-->

                        <?php
                        if ($showThumbs) { ?>
                        <?php foreach (array_chunk($vokes, 4) as $row) { ?>
                        <div class="row margin-top-10">

                            <?php foreach ($row as $voke) { ?>
                            <div class="span3 thumbnail margin-top-10">
                                <?php if (!empty($voke["thumbnail"])) { ?>
                                    <a href="<?php echo !empty($voke["thumbnail_url"]) ? $voke["thumbnail_url"] : '#' ?>" target="_blank">
                                        <img src="<?php echo $voke["thumbnail"] ?>">
                                    </a>
                                <?php } ?>
                    <p><?php echo $voke["voke_name"] ?></p>
                    <p class="text-center">
                        <input class="answer" type="checkbox" value="<?php echo $voke["voke_order"]; ?>" name="<?php echo $cate_id; ?>">
                    </p>
                </div>
            <?php } ?>
            </div>
            <?php }

            } else {

                foreach ($vokes as $voke) {
                    ?>

                    <label class="checkbox line">
                        <span class="">
                            <input class="answer" type="checkbox" value="<?php echo $voke["voke_order"]; ?>" name="<?php echo $cate_id; ?>">
                        </span>
                        <?php echo $voke["voke_name"]; ?>
                    </label>
                    <?php
                }
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
                    $(this).prop("checked", false);
                    alert('Μπορείτε να επιλέξετε έως <?php echo $allowed_choices;?> επιλογές για την κατηγορία <?php echo $cate_name;?>!');
                    <!--alert('Επιτρέπεται μόνο μέχρι και δέκα επιλογές σε αυτή τη κατηγορία');-->
                }
            });

        </script>
        <hr>
        <?php

        }

        ?>


<hr>
    </div>


    <div class="row-fluid span8 offset4">
        <h4 style="/*text-align:center;width: 97%;*/ color:white; background-color:#D92037; border-radius:5px; padding:5px; /*margin-right:5px;*/ ">Συμπληρώνοντας τα στοιχεία σας διεκδικείτε ένα σούπερ μουσικό ταξιδιωτικό πακέτο (αεροπορικά και διαμονή) για δύο άτομα στη Βιέννη μαζί με εισιτήρια για τη συναυλία του σούπερ σταρ Ed Sheeran που θα γίνει στις 7 Αυγούστου.</h4>
<!--			<img src="<?php echo base_url();?>media/image/sma-cover-web-bottom.jpg">-->
        <div class="row-fluid span10 offset1" style="border-top: 1px solid #eee;"></div>

        <div class="control-group">

            <?php /*?>                    <label class="control-label"><?php echo SUBMITNAME;?></label>
<?php */ ?> <label class="control-label"><?php echo "Ονοματεπώνυμο" ?></label>

            <div class="controls">

                <input id="name" type="text" class="span12 m-wrap popovers" data-trigger="hover" data-content="<?php echo SUBMITNAMECONTENT; ?>" data-original-title="<?php echo SUBMITNAMELABEL; ?>">

            </div>

        </div>

        <div class="control-group email">

            <?php /*?>                    <label class="control-label"><?php echo SUBMITEMAIL;?></label>
<?php */ ?> <label class="control-label"><?php echo "Email" ?></label>


            <div class="controls">

                <input id="email" type="text" class="span12 m-wrap popovers" data-trigger="hover" data-content="<?php echo SUBMITEMAILCONTENT; ?>" data-original-title="<?php echo SUBMITEMAILLABEL; ?>" placeholder="you@domain.com">

            </div>

        </div>

        <div class="control-group">

            <?php /*?>                    <label class="control-label"><?php echo SUBMITPHONENUMBER;?></label>
<?php */ ?> <label class="control-label"><?php echo "Τηλέφωνο" ?></label>
            <div class="controls">

                <input id="phonenumber" type="text" class="span12 m-wrap popovers" data-trigger="hover" data-content="<?php echo SUBMITPHONENUMBERCONTENT; ?>" data-original-title="<?php echo SUBMITPHONENUMBERLABEL; ?>">

                <?php /*?><div class="controls">
  <input checked type="checkbox" name="vehicle" value="Bike"> Συμφωνώ να λαμβάνω email με ενημέρωση για τα Super Music Awards by Lidl.<br>
  </div>
  <?php */ ?>

                <p style="text-align:center;"><b> ( Το τηλέφωνο είναι αναγκαίο για να επικοινωνήσουμε μαζί σου σε περίπτωση που κερδίσεις. ) </b></p>

				</br>

            </div>

        </div>

    </div>

    <div class="row-fluid span10 offset1" style="border-top: 1px solid #eee;"></div>
    <div class="row-fluid span8 offset4" style="margin-bottom:20px;/*margin-left: 50% !important;*/text-align: center;">

        <a id="submit" style="background-color:#662483; color:white; font-weight:700;" class="btn blue" data-toggle="modal" <?php if ($is_ip_exists > 0) { ?> style="pointer-events:none;" <?php } ?>>Καταχώρηση</a>

        </br></br><p style="text-align: center;">Η ηλεκτρονική ψηφοφορία ξεκίνησε στις 25 Απριλίου και θα διαρκέσει μέχρι τις 20 Μαΐου 2018.</p>
        <p style="text-align: justify"></p>
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

    jQuery(document).ready(function () {

        App.init();

        $(document).on('click', 'input[type="checkbox"],input[type="text"],.btn', function (event) {
            <?php
            if($is_ip_exists > 0)
            {?>
            event.preventDefault();
            if ($(this).attr("type") == "checkbox") {
                $(this).parent().removeClass("checked");
                $(this).prop("checked", false);
            }
            alert('Έχετε ήδη ψηφίσει, μπορείτε να ψηφίσετε ξανά αύριο!');
            return false;
            <?php
            }?>
        });


        //check if already submit votes

        //ajax_proc("<?php //echo base_url();?>//voker/already_subChk", null,
        //
        //    function () {
        //
        //        $("#alertBox").hide();
        //
        //    },
        //
        //    function (data) {
        //
        //        var msg = data.msg;
        //
        //        var rlt = data.rlt;
        //
        //        if (rlt == "ok") {
        //
        //            if (parseInt(msg) > 0) {
        //
        //                $("#alertBox").show();
        //
        //            }
        //
        //            else {
        //
        //                $("#alertBox").hide();
        //
        //            }
        //
        //        }
        //
        //    },
        //
        //    function (data) {
        //
        //        $("#alertBox").hide();
        //
        //    });

        $("#submit").click(function () {

            var selected_count = 0;

            var param = [];

            var id_array = [];

            var voke_array = [];

            $(".answer").each(function () {

                if ($(this).parent().hasClass("checked")) {

                    var item = {};


                    var cate_id = $(this).attr("name");

                    var answer = $(this).val();

                    id_array.push(cate_id);

                    voke_array.push(answer);


                    selected_count++;

                }

            });

            if (selected_count == 0) {

                alert("Please select an votes!")

            }

            else {

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

                if (email != "" && email.indexOf("@") == -1) {

                    alert("Email should be contain @!");

                }

                else {
					var youngidolname = $("#youngidolname").val();
					var famousartistmen = $("#famousartistmen").val();
					var famousartistwomen = $("#famousartistwomen").val();

                    var param = "cate_ids=" + id_array.join(",") + "&voke_orders=" + voke_array.join(",") + "&name=" + name + "&email=" + email + "&phone=" + phoneNumber;
						param += "&famousartistwomen=" + famousartistwomen;
						param += "&famousartistmen=" + famousartistmen;
						param += "&youngidolname=" + youngidolname;

                    ajax_proc("<?php echo base_url();?>voker/save", param,

                        function () {

                            show_loading($('.page-container'));

                            $("#sum_info").hide();

                        },

                        function (data) {

                            hide_loading($('.page-container'));

                            var rlt = data.rlt;

                            var msg = data.msg;

                            if (rlt == "ok") {

                                alert("Σας ευχαριστούμε για την ψήφο σας!");

                            }

                            if (rlt == "existIp") {

                                alert("Σας ευχαριστούμε για την επίσκεψη, μπορείτε να ψηφίσετε και πάλι αύριο !");

                            }

                            window.location = "<?php echo base_url();?>voker/";

                        },

                        function (data) {

                            hide_loading($('.page-container'));

                        });

                }

                /*}*/

            }

        });

    });

</script>


<!-- END JAVASCRIPTS -->
