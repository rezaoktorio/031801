<!-- jQuery  -->
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/detect.js"></script>
<script src="../../assets/js/fastclick.js"></script>

<script src="../../assets/js/jquery.slimscroll.js"></script>
<script src="../../assets/js/jquery.blockUI.js"></script>
<script src="../../assets/js/waves.js"></script>
<script src="../../assets/js/wow.min.js"></script>
<script src="../../assets/js/jquery.nicescroll.js"></script>
<script src="../../assets/js/jquery.scrollTo.min.js"></script>

<script src="../../assets/plugins/peity/jquery.peity.min.js"></script>

<!-- jQuery  -->
<script src="../../assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
<script src="../../assets/plugins/counterup/jquery.counterup.min.js"></script>

<script src="../../assets/plugins/morris/morris.min.js"></script>
<script src="../../assets/plugins/raphael/raphael-min.js"></script>

<script src="../../assets/plugins/jquery-knob/jquery.knob.js"></script>
<script src="../../assets/pages/jquery.dashboard.js"></script>

<script src="../../assets/js/jquery.core.js"></script>
<script src="../../assets/js/jquery.app.js"></script>

<!--Chartist Chart-->
<script src="../../assets/plugins/chartist/js/chartist.min.js"></script>
<script src="../../assets/plugins/chartist/js/chartist-plugin-tooltip.min.js"></script>
<script src="../../assets/pages/jquery.chartist.init.js"></script>

<!--Morris Chart-->
<script src="../../assets/plugins/morris/morris.min.js"></script>
<script src="../../assets/plugins/raphael/raphael-min.js"></script>
<script src="../../assets/pages/morris.init.js"></script>

<!--Nvd3 Chart-->
<script src="../../assets/plugins/d3/d3.min.js"></script>
<script src="../../assets/plugins/nvd3/nv.d3.min.js"></script>
<script src="../../assets/pages/jquery.nvd3.init.js"></script>

<!-- Sweet-Alert  -->
<script src="../../assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
<script src="../../assets/pages/jquery.sweet-alert.init.js"></script>

<!-- Modal-Effect -->
<script src="../../assets/plugins/custombox/js/custombox.min.js"></script>
<script src="../../assets/plugins/custombox/js/legacy.min.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });

        $(".knob").knob();

    });
</script>

<!-- Tour page js -->
<script src="../../assets/plugins/hopscotch/js/hopscotch.js"></script>

<script>
    $(document).ready(function () {
        var placementRight = 'right';
        var placementLeft = 'left';

        // Define the tour!
        var tour = {
            id: "my-intro",
            steps: [
                {
                    target: "logo-tour",
                    title: "Logo Here",
                    content: "You can find here status of user who's currently online.",
                    placement: placementRight,
                    yOffset: 10
                },
                {
                    target: 'navigation-tour',
                    title: "Small navigation button",
                    content: "Click on the button and make sidebar navigation small.",
                    placement: 'bottom',
                    zindex: 999
                },
                {
                    target: 'page-title-tour',
                    title: "User settings",
                    content: "You can edit you profile info here.",
                    placement: 'bottom',
                    zindex: 999
                },
                {
                    target: 'notification-tour',
                    title: "Configuration tools",
                    content: "Here you can change theme skins and other features.",
                    placement: 'left',
                    zindex: 999
                }
            ],
            showPrevButton: true
        };

        // Start the tour!
        hopscotch.startTour(tour);
    });
</script>

<!-- DataTable -->
<script src="../../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="../../assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="../../assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="../../assets/plugins/datatables/jszip.min.js"></script>
<script src="../../assets/plugins/datatables/pdfmake.min.js"></script>
<script src="../../assets/plugins/datatables/vfs_fonts.js"></script>
<script src="../../assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="../../assets/plugins/datatables/buttons.print.min.js"></script>
<script src="../../assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="../../assets/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="../../assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="../../assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="../../assets/plugins/datatables/dataTables.scroller.min.js"></script>
<script src="../../assets/plugins/datatables/dataTables.colVis.js"></script>
<script src="../../assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>
<script src="../../assets/pages/datatables.init.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({keys: true});
        $('#datatable-responsive').DataTable();
        $('#datatable-colvid').DataTable({
            "dom": 'C<"clear">lfrtip',
            "colVis": {
                "buttonText": "Change columns"
            }
        });
        $('#datatable-scroller').DataTable({
            ajax: "../../assets/plugins/datatables/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });
        var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
        var table = $('#datatable-fixed-col').DataTable({
            scrollY: "300px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            fixedColumns: {
                leftColumns: 1,
                rightColumns: 1
            }
        });
    });
    TableManageButtons.init();

</script>

<!-- EditTable -->
<!-- Examples -->
<script src="../../assets/plugins/magnific-popup/js/jquery.magnific-popup.min.js"></script>
<script src="../../assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
<script src="../../assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="../../assets/plugins/tiny-editable/mindmup-editabletable.js"></script>
<script src="../../assets/plugins/tiny-editable/numeric-input-example.js"></script>


<script src="../../assets/pages/datatables.editable.init.js"></script>

<script>
$('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
</script>

<script src="../../assets/plugins/parsleyjs/parsley.min.js"></script>

<!-- select-live -->
 <script src="../../assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>