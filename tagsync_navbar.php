<div style="height:45px"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" > 

            <div class="card">
                <div class="card-body">
                    <div class="collapse navbar-collapse" ></div>
                    <ul class="nav nav-tabs nav-tabs-secondary nav-justified top-icon" id="myTab"><!--nav nav-tabs nav-tabs-warning nav-justified top-icon">-->
                        <li class="nav-item">
                            <a class="nav-link active " data-toggle="tab" href="#tabe-17"><i class="fa fa-cloud-download" style='color:#b300b3'></i> <span class="hidden-xs">Import Resources</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabe-18"><i class="fa fa-tag" style='color:#b300b3'></i> <span class="hidden-xs">Tag Template Design</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabe-19"><i class="fa fa-pencil-square" style='color:#b300b3'></i> <span class="hidden-xs">Tag View\Update</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabe-20"><i class="fa fa-cloud-upload" style='color:#b300b3'></i> <span class="hidden-xs"> Bulk Tag Update</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabe-21"><i class="fa fa-area-chart" style='color:#b300b3'></i> <span class="hidden-xs">Tag Compliance Report</span></a>
                        </li>
                    </ul>
                    <br>
                    <!-- Tab panes--> 
                    <!-- Start tabe-17 -->
                    <div class="tab-content">

                        <div id="tabe-17" class="tab-pane active">
                            <p>  
                                <?php 
                                include 'tagsync_import_instances.php';
                                ?>
                            </p>
                        </div> <!-- End tabe-17 -->

                        <div id="tabe-18" class=" tab-pane fade">
                            <!--tab 18 : upload data-->

                            <?php                                   
                            include 'tagsync_tag_template_designer.php';                                    
                            ?>


                        </div><!-- End tabe-18 -->


                        <div id="tabe-19" class=" tab-pane fade">
                            <p><!--tab 18 : upload data-->
                                <?php
//                                  
                                include 'tagsync_tag_viewer.php';
                                ?>
                            </p>

                        </div><!-- End tabe-18 -->
                        <div id="tabe-20" class=" tab-pane fade">
                            <p><!--tab 18 : upload data-->

                               <?php   include 'tagsync_bulk_tags_upload.php';
                                ?>
                            </p>

                        </div><!-- End tabe-18 -->


                        <div id="tabe-21" class=" tab-pane fade">
                            <p>
                                <?php include 'tagsync_reporting.php';
                                ?>
                                <!--tab 19 : upload data-->
                            </p>

                        </div><!-- End tabe-19 -->

                    </div><!--End tab content -->
                </div ><!--End col-lg-12-->
            </div><!--End card-body-->
        </div><!-- End card-->
    </div><!--End row-->     
</div><!--End container-fluid-->

 
