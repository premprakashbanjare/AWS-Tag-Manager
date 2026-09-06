<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Nextstep</title>
    <!--favicon-->
    <link rel="icon" href="assets/images/logo-icon.png" type="image/x-icon"/>
    <!-- Dropzone css -->
    <link href="assets/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css">
    <!--Data Tables -->
    <link href="assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <!--Morris CSS -->
    <link href="assets/plugins/morris/css/morris.css" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
    <!-- simplebar CSS-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="assets/css/app-style.css" rel="stylesheet"/> 

    <!--  <link href="sweetalert.css"  rel="stylesheet"> -->
    <style type="text/css">

        .dataTables_filter input {
          border-color:#d13adf;  
          border-radius: 8px;
      }

      .btn-group>.btn:first-child
      {
        margin-bottom:12px;
    }
    .btn-group, .btn-group-vertical{

    }
    .pagination .page-item.active .page-link { background-color: #d13adf;    color: #f8f9fa; border-color: #d13adf;}

    div.dataTables_wrapper div.dataTables_paginate ul.pagination .page-item.active .page-link:focus {
        background-color: #d13adf; color: #f8f9fa; border-color: #d13adf;
    }

    .pagination .page-item.active .page-link:hover {
        background-color: #d13adf !important;
    }
    .page-link{
        color: #d13adf;
    }
    .pagination {
        margin-top: 15px;
        float: right;
    }

    .dataTables_info{
        margin-top: 15px;
    }

    table.dataTable td.dataTables_empty {
     text-align: center;    
 }

</style>      
</head>
<body>
     <div id="pageloader-overlay" class="visible incoming">
            <div class="loader-wrapper-outer">
                <div class="loader-wrapper-inner">
                    <div class="loader">
                    </div>
                </div>
            </div>
        </div> 
 

    ﻿<?php
    include 'topbar.php';
    include 'tagsync_navbar.php';
    ?>

    <!--Start Back To Top Button-->
    <!-- <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a> -->
    <!--End Back To Top Button-->

    <!-- Bootstrap core JavaScript-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>


    <!-- simplebar js -->
    <script src="assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- sidebar-menu js -->
    <script src="assets/js/sidebar-menu.js"></script>

    <!-- Custom scripts -->
    <script src="assets/js/app-script.js"></script>
    <!--Sweet Alerts -->
    <script src="assets/plugins/alerts-boxes/js/sweetalert.min.js"></script>
    <script src="assets/plugins/alerts-boxes/js/sweet-alert-script.js"></script>

    <!--Data Tables js-->
    <script src="assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>

    <!-- Dropzone JS  -->
    <script src="assets/plugins/dropzone/js/dropzone.js"></script>

    <!-- loader scripts -->
    <!-- <script src="assets/js/jquery.loading-indicator.js"></script> -->
    <!-- Custom scripts -->
    <script src="assets/js/app-script.js"></script>
    <!-- Chart js -->

    <script src="assets/plugins/Chart.js/Chart.min.js"></script>
    <!-- Vector map JavaScript -->
<!-- <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
--><!-- Easy Pie Chart JS -->
<script src="assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="assets/plugins/jquery.easy-pie-chart/easy-pie-chart.init.js"></script>

<!-- Sparkline JS -->
<script src="assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
<script src="assets/plugins/jquery-knob/excanvas.js"></script>
<script src="assets/plugins/jquery-knob/jquery.knob.js"></script>
<script src="assets/js/index.js"></script>


<script>
     $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
                localStorage.setItem('activeTab', $(e.target).attr('href'));
            });
            var activeTab = localStorage.getItem('activeTab');
            // var activeTab = '#tabe-18';
            console.log(activeTab);

            if (activeTab) {
                $('a[href="' + activeTab + '"]').tab('show');
            }
</script>
<script>
    $(function () {
        $(".knob").knob();
    });

    
    var subscription_id_table = $('#subscription_details_table').DataTable({
        lengthChange: false,
        searching: true, 
        filter: true,
        buttons: [{
            extend: 'collection',
            className: "btn-outline-secondary text-center",
            text: 'Export',
            buttons:
            [
            {extend: "pdf", className: "btn-outline-secondary"

        }, {
            extend: "copy", className: "btn-outline-secondary"

        }, {
            extend: "excel", className: "btn-outline-secondary"
        }
        ],
    }]

});
    subscription_id_table.buttons().container()
    .appendTo('#subscription_details_table_wrapper .col-md-6:eq(0)');





    var tag_template_table = $('#example_tag_template').DataTable({
        // dom: 'Bfrtip',
        lengthChange: false,
        searching: true,
        filter: true,
        buttons: [{
            extend: 'collection',
            className: "btn-secondary",
            text: 'Export data',
            className: "btn-outline-secondary pull-right",
            buttons:
            [
            {extend: "pdf", className: "btn-outline-secondary"

        }, {
            extend: "copy", className: "btn-outline-secondary"

        }, {
            extend: "excel", className: "btn-outline-secondary"
        }
        ],
    }]

});

    tag_template_table.buttons().container()
    .appendTo('#example_tag_template_wrapper .col-md-6:eq(0)');

    $('#example1 thead tr').clone(true).appendTo('#example1 thead');
    var table1 = $('#example1').DataTable({

        // dom: 'Bfrtip',
        lengthChange: false,
        searching: true,
        filter: false,
        buttons: [{
            extend: 'collection',
            className: "btn-secondary",
            text: 'Export data',
            className: "btn-outline-secondary pull-right",
            buttons:
            [
            {extend: "pdf", className: "btn-outline-secondary"

        }, {
            extend: "copy", className: "btn-outline-secondary"

        }, {
            extend: "excel", className: "btn-outline-secondary"
        }
        ],
    }],
    initComplete: function () {
        this.api().columns().every( function () {
            var column = this;
            var select = $('<select><option value=""></option></select>')
            .appendTo( $(column.header()).empty() )
            .on( 'change', function () {
                var val = $.fn.dataTable.util.escapeRegex(
                    $(this).val()
                    );

                column
                .search( val ? '^'+val+'$' : '', true, false )
                .draw();
            } );

            column.data().unique().sort().each( function ( d, j ) {
                select.append( '<option value="'+d+'">'+d+'</option>' )
            } );
        } );
    }
});

    table1.buttons().container()
    .appendTo('#example1_wrapper .col-md-6:eq(0)');
</script>

</body>
</html>