

<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>
<script>
    // block specified object and show ajx-loading animation
    function show_loading(obj) {
        if (obj == null) obj = $("body");
        $(obj).block({
            message: '<h4>Loading <img src="<?php echo base_url();?>media/image/ajax-loading.gif" style="width:40px; height:40px" align=""></h4>',
            centerY: true,
            css: {
                top: '10%',
                border: 'none',
                padding: '2px',
                backgroundColor: 'none'
            },
            overlayCSS: {
                backgroundColor: '#000',
                opacity: 0.25,
                cursor: 'wait'
            }
        });
    }

    // unblock specified object and hide ajx-loading animation
    function hide_loading(obj) {
        if (obj == null) obj = $("body");
        $(obj).unblock();
    }
    // ajax process function
    function ajax_proc(url, param, before_callback, success_callback, error_callback) {
        $.ajax({
            type: "POST",
            url: url,
            data: param,
            contentType: "application/x-www-form-urlencoded;",
            dataType: "json",
            beforeSend: function() {
                if (before_callback != null) before_callback();
            },
            error: function(data) {
                if (error_callback != null) error_callback(data);
            },
            success: function(data) {
                if (success_callback != null) success_callback(data);
            },
            statusCode: {
                404: function() {
                    alert('page not found');
                }
            }
        });
    }
</script>
<!-- END BODY -->
</html>