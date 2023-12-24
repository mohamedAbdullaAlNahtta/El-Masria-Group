<?php 
if (isset($GLOBALS['selected_language'])) {
    if ($GLOBALS['selected_language']==='en') {
        ?>
         <!-- reset form values after refresh  -->
        <script type="text/javascript">
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>
        <script type="text/javascript">
             swal({
                        title: "Good job", 
                        text: "Language has been Updated successfully press OK to Reload the page Language ", 
                        type: "success",
                        confirmButtonText: "<?php echo $GLOBALS['lang']['Reload The page to take effect!']; ?>", 
                        closeOnConfirm: false,
                        closeOnCancel: false
                        },
                    function(){ 
                        location.reload();
                    }
                );

        </script>

        <?php 
    } else {
        ?>
         <!-- reset form values after refresh  -->
        <script type="text/javascript">
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>
        <script type="text/javascript">
            swal({
                        title: "Good job", 
                        text: "تم تحديث اللغة بنجاح اضغط لتحديث الصفحة ", 
                        type: "success",
                        confirmButtonText: "<?php echo $GLOBALS['lang']['Reload The page to take effect!']; ?>", 
                        closeOnConfirm: false,
                        closeOnCancel: false
                        },
                    function(){ 
                        location.reload();
                    }
                );
           

        </script>

        <?php 
    }    

}

?>