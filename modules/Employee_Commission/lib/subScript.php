<script>
//////////////////////////////////////////////////
//////////////////////////////////////////////////
// Change select linked customer 
//////////////////////////////////////////////////
//////////////////////////////////////////////////
function myFunctionChangeSelectedUnit(st){
	const $select = document.querySelector('#new_unit_id');
  $select.value = st;
}

//////////////////////////////////////////////////
//////////////////////////////////////////////////
// show all client on a popup window 
//////////////////////////////////////////////////
//////////////////////////////////////////////////
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
        });
    });
    $("#example23").DataTable({
        dom: "Bfrtip",
        buttons: ["copy", "csv", "excel", "pdf", "print"],
        order: [],
    });
</script>
<!-- This page plugins -->
<!-- ============================================================== -->
<script src="assets/plugins/switchery/dist/switchery.min.js"></script>
<script src="assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/plugins/multiselect/js/jquery.multi-select.js"></script>
<script>
jQuery(document).ready(function() {
    // For multiselect
    $('#pre-selected-options0').multiSelect();
    $('#pre-selected-options1').multiSelect();
    $('#pre-selected-options2').multiSelect();
    // $(".ajax").select2({
    //     ajax: {
    //         url: "https://api.github.com/search/repositories",
    //         dataType: 'json',
    //         delay: 250,
    //         data: function(params) {
    //             return {
    //                 q: params.term, // search term
    //                 page: params.page
    //             };
    //         },
    //         processResults: function(data, params) {
    //             // parse the results into the format expected by Select2
    //             // since we are using custom formatting functions we do not need to
    //             // alter the remote JSON data, except to indicate that infinite
    //             // scrolling can be used
    //             params.page = params.page || 1;
    //             return {
    //                 results: data.items,
    //                 pagination: {
    //                     more: (params.page * 30) < data.total_count
    //                 }
    //             };
    //         },
    //         cache: true
    //     },
    //     escapeMarkup: function(markup) {
    //         return markup;
    //     }, // let our custom formatter work
    //     minimumInputLength: 1,
    //     templateResult: formatRepo, // omitted for brevity, see the source of this page
    //     templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
    // });
});
</script>

<script>
function myFunctionGetSelectedSalesEmployee(){
    var selected = [];
    for (var option of document.getElementById('pre-selected-options0').options)
    {
        if (option.selected) {
            selected.push(option.value);
        }
    }
    // console.log(selected);
    let text = selected.toString();
    // document.getElementById("calculationResult0").innerHTML = text;
    return text;
}

function myFunctionGetSelectedContractEmployee(){
    var selected = [];
    for (var option of document.getElementById('pre-selected-options1').options)
    {
        if (option.selected) {
            selected.push(option.value);
        }
    }
    // console.log(selected);
    let text = selected.toString();
    // document.getElementById("calculationResult1").innerHTML = text;
    return text;
}

function myFunctionGetSelectedOperationEmployee(){
    var selected = [];
    for (var option of document.getElementById('pre-selected-options2').options)
    {
        if (option.selected) {
            selected.push(option.value);
        }
    }
    // console.log(selected);
    let text = selected.toString();
    // document.getElementById("calculationResult2").innerHTML = text;
    return text;
}


function loadRes() {
    salesEmployees=myFunctionGetSelectedSalesEmployee();
    contractEmployees=myFunctionGetSelectedContractEmployee();
    operationEmployees=myFunctionGetSelectedOperationEmployee();
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("calculationResult0").innerHTML = this.responseText;
    }
  xhttp.open("GET", "http://localhost/El-Masria-Group/modules/Employee_Commission/ajax/calculate?salesText="+salesEmployees+"&contractText="+contractEmployees+"&operationText="+operationEmployees+"&unitPrice=1000000&area=West&IsLaunch=yes&IsOverSeas=yes", true);
  xhttp.send();
  console.log(salesEmployees);
  console.log(contractEmployees);
  console.log(operationEmployees);
  console.log("http://localhost/El-Masria-Group/modules/Employee_Commission/ajax/calculate?salesText="+salesEmployees+"&contractText="+contractEmployees+"&operationText="+operationEmployees+"&unitPrice=1000000&area=West&IsLaunch=yes&IsOverSeas=yes");
}

</script>




