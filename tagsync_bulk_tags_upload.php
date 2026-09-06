  <div class="container-fluid">     
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header text-uppercase gradient-shifter" style="color:white">Upload updated tag sheet</div>
        <div class="card-body gradient-shifter">
          <form  action ="upload.php" class="dropzone" id="mydropzone"> 

          </form>
        </div>
      </div>
    </div>
<!-- <div style="height:40px"></div> -->
<div class='upload_tag_cloud_status ' name ='upload_tag_cloud_status' id='upload_tag_cloud_status' hidden style='text-align:right;'> <img src='assets/images/ajax-loader.gif'></img>
Importing....</div>
<div>
<button type="button" onclick='upload_tag_resource()' class="btn btn-outline-secondary waves-effect waves-light pull-right" data-toggle="modal" data-target="#tag_template_upload_excel_modal" style="height: 50px;width: 155px;">Upload <br>Tags to cloud </button>
</div>
<form action="export.php" method="post">
    <div>
	
      <!-- <div style="height:40px"></div> -->
      <button type="submit" class="btn btn-outline-secondary waves-effect waves-light pull-left" data-toggle="modal" data-target="#tag_template_download_excel_modal" style="height: 50px;width: 155px;">Reference <br>Tag Template</button> 

    </div>
	</form>
    

  </div><!-- End container-fluid-->

<script>
function upload_tag_resource() {
var results = $('div.dz-filename').children('span').text();
//alert(results);
//$('.upload_tag_cloud_status').attr('hidden')
uploaded_filename=results;

$.ajax({
type: "POST",
url: "upload_bulk_tag_cloud.php",
data: {
bulktag_upload_filename:uploaded_filename
},
beforeSend: function() {
// setting a timeout
$('#upload_tag_cloud_status').removeAttr("hidden") },
// dataType:'json',
success: function(data) {
console.log($.trim(data))
if($.trim(data)=="successfull"){
$('#upload_tag_cloud_status').text("Uploaded").append("<i class='fa fa-check-square' style='color:#b300b3'></i>");
//"<img src='assets/images/logo-icon.png'/>");;
swal("Yay!", "Tags uploaded successfully!!!!!!", "success")
//console.log("tagupload")
.then(function(){
location.reload();
}); }
else{
$('#upload_tag_cloud_status').attr("hidden",true)
swal("Oops!", "Error ocuured while uploading tags to resources !!!!!!", "error")
.then(function(){
location.reload();
});
}
}
});
}
</script>


  