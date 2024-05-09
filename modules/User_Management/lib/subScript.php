<script>
myBlurFunction = function(state) {
    var containerElement = document.getElementById('main_container');
    var overlayEle = document.getElementById('overlay');

    if (state) {
        overlayEle.style.display = 'block';
        containerElement.setAttribute('class', 'blur');
    } else {
        overlayEle.style.display = 'none';
        containerElement.setAttribute('class', null);
    }
};
//////////////////////////////////////////////////
//////////////////////////////////////////////////
// Show New Password Function
//////////////////////////////////////////////////
//////////////////////////////////////////////////

function myFunctionShowPass() {
    var li = document.getElementById("showPass").className;
    if (li === "mdi mdi-eye") {
        document.getElementById("showPass").setAttribute("class", "mdi mdi-eye-off");
        document.getElementById("new_password").setAttribute("type", "text");
    } else if (li === "mdi mdi-eye-off") {
        document.getElementById("showPass").setAttribute("class", "mdi mdi-eye");
        document.getElementById("new_password").setAttribute("type", "password");
    }
}
 //////////////////////////////////////////////////
//////////////////////////////////////////////////
// check compar new password with confirm password
//////////////////////////////////////////////////
//////////////////////////////////////////////////
function myFunctionCompareNewPassWithConfirmPass() {
    var newPasswordUserInput = document.getElementById("new_password").value;
    var confirmPasswordUserInput = document.getElementById("confirm_password").value;
    if (newPasswordUserInput === confirmPasswordUserInput) {
        document.getElementById("incorrectRetype").style.display = "none";
        document.getElementById("correctRetype").style.display = "block";
        return true;
    } else {
        document.getElementById("incorrectRetype").style.display = "block";
        document.getElementById("correctRetype").style.display = "none";
        return false;
    }
}

</script>

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




