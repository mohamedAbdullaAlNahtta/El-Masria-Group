

<!-- This is data table -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<!-- end - This is for export functionality only -->

<!-- ------------------------------------------------- -->
<!-- ------------------------------------------------- -->
<script>
    $(document).ready(function () {
        $("#myTable").DataTable();
        $(document).ready(function () {
            var table = $("#example").DataTable({
                columnDefs: [
                    {
                        visible: false,
                        targets: 2,
                    },
                ],
                order: [[2, "asc"]],
                displayLength: 25,
                drawCallback: function (settings) {
                    var api = this.api();
                    var rows = api
                        .rows({
                            page: "current",
                        })
                        .nodes();
                    var last = null;
                    api.column(2, {
                        page: "current",
                    })
                        .data()
                        .each(function (group, i) {
                            if (last !== group) {
                                $(rows)
                                    .eq(i)
                                    .before('<tr class="group"><td colspan="5">' + group + "</td></tr>");
                                last = group;
                            }
                        });
                },
            });
            // Order by the grouping
            $("#example tbody").on("click", "tr.group", function () {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === "asc") {
                    table.order([2, "desc"]).draw();
                } else {
                    table.order([2, "asc"]).draw();
                }
            });
        });
    });
    $("#example23").DataTable({
        dom: "Bfrtip",
        buttons: ["copy", "csv", "excel", "pdf", "print"],
        order: [],
    });
</script>


<?php 
if (isset($_GET['view_user_logs'])) {
?>
<script>
document.getElementsByTagName("header")[0].style.display = "none";
document.getElementsByTagName("aside")[0].style.display = "none";
document.getElementsByClassName("page-wrapper")[0].style.margin = "0px 0px 0px 0px"; 
document.getElementsByClassName("page-wrapper")[0].style.paddingBottom  = "0px"; 
document.getElementsByTagName("footer")[0].style.display = "none";
</script>
<?php
}

?>

<?php 
if (isset($GLOBALS['unblock_user'])) {
    if($GLOBALS['unblock_user']!== false){ 
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
                text: "<?php echo $GLOBALS['lang']['User has been unblocked.  Thanks for trusting US....... Software Development Team']; ?>", 
                type: "success"
                },
            function(){ 
                window.close();
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
                text: "<?php echo $GLOBALS['lang']['failed to unblock user please contact your Developer if the problem repeated'];?>",   
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
