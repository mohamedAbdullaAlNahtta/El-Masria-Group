<!-- jQuery file upload -->
<script src="assets/plugins/dropify/dist/js/dropify.min.js"></script>
<script>
$(document).ready(function() {
    // Basic
    $('.dropify').dropify();

    // Translated
    $('.dropify-fr').dropify({
        messages: {
            default: 'Glissez-déposez un fichier ici ou cliquez',
            replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
            remove: 'Supprimer',
            error: 'Désolé, le fichier trop volumineux'
        }
    });

    // Used events
    var drEvent = $('#input-file-events').dropify();

    drEvent.on('dropify.beforeClear', function(event, element) {
        return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
    });

    drEvent.on('dropify.afterClear', function(event, element) {
        alert('File deleted');
    });

    drEvent.on('dropify.errors', function(event, element) {
        console.log('Has Errors');
    });

    var drDestroy = $('#input-file-to-destroy').dropify();
    drDestroy = drDestroy.data('dropify')
    $('#toggleDropify').on('click', function(e) {
        e.preventDefault();
        if (drDestroy.isDropified()) {
            drDestroy.destroy();
        } else {
            drDestroy.init();
        }
    })
});
</script>
<!-- ------------------------------------------------- -->
<!-- ------------------------------------------------- -->
<!-- ------------------------------------------------- -->
<?php 
if (isset($GLOBALS['upload'])) {
    if ($GLOBALS['upload']===true) {
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
                        text: "<?php echo $GLOBALS['lang']['your user profile image has been Updated successfully you need to login again'];?>", 
                        type: "success",
                        confirmButtonText: 'Log Out!',
                        closeOnConfirm: false,
                        closeOnCancel: false
                        },
                function(){ 
                location.replace("logout?language=<?php echo$GLOBALS['language']; ?>&theme=<?php echo$GLOBALS['theme']; ?>");
            }
        );

        </script>

        <?php 
    }else{
        ?>
        <!-- reset form values after refresh  -->
       <script type="text/javascript">
           if (window.history.replaceState) {
               window.history.replaceState(null, null, window.location.href);
           }
       </script>
       <script type="text/javascript">
            swal({
                title: "Opps!",   
                text: "<?php echo $GLOBALS['lang']['failed to update user profile image please contact your Administrator if the problem repeated'];?>",   
                type: "warning",   
                showCancelButton: true, 
                showConfirmButton: false,   
                cancelButtonColor: "#DD6B55",   
            });

       </script>

       <?php 

    }    

}

?>