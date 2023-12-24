<?php 
if (isset($GLOBALS['selected_theme'])) {
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
                text: "<?php echo $GLOBALS['lang']['Theme has been Updated successfully press OK to Reload the page theme']; ?>", 
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

?>

