    <script src="template/vendors/jquery/dist/jquery.min.js"></script>
    <script src="template/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="template/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="template/assets/js/main.js"></script>


    <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="template/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="template/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="template/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="template/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="template/vendors/jszip/dist/jszip.min.js"></script>
    <script src="template/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="template/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="template/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="template/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="template/vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="template/assets/js/init-scripts/data-table/datatables-init.js"></script>


    <script src="template/vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="template/assets/js/dashboard.js"></script>
    <script src="template/assets/js/widgets.js"></script>
    <script src="template/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="template/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="template/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>

    <script src="template/assets/plugins/sweetalert2/sweetalert2.min.js"></script>


    <script>
        (function ($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

  