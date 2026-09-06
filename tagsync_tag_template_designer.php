 <div >
   <!-- Large Size Modal -->
   <div>

     <button class="btn btn-outline-secondary waves-effect waves-light pull-right" data-toggle="modal" data-target="#update_tag_formemodal" style="height: 35px;width: 155px; margin-top: -25px;">Add New Tags</button> 
   </div>
   <div style="height:40px"></div>
   <!-- <div class="col-lg-12"> -->

     <!-- Modal -->
     <div class="modal fade" id="update_tag_formemodal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header gradient-shifter">
            <h5 class="modal-title" style="color:white;">Add Tag</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <div class="form-group">
              <label for="input-6">Tag Type</label>
              <input type="text" class="form-control form-control-rounded" name="tag_type" id="tag_type" placeholder="Enter Your Tag Type">
            </div>
            <div class="form-group">
              <label for="input-7">Tag Name</label>
              <input type="text" class="form-control form-control-rounded" name="tag_name" id="tag_name" placeholder="Enter Your Tag Name">
            </div>

            <div class="form-group">
              <label for="input-7">Resource Type</label>
              <input type="text" class="form-control form-control-rounded" name="resource_type" id="resource_type" placeholder="Enter Your Resource Type Eg:VM,Database,Storage,Network">
            </div>

            <div class="form-group">
              <button type="button" class="btn btn-inverse-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
              <button type="button" name="save" class="btn btn-secondary" onclick="addTag()" data-dismiss="modal"><i class="fa fa-check-square-o"></i> Save </button>
            </div>
            <!-- </form> -->
          </div>
        </div>
      </div>
    </div>


    <div class="table-responsive">
      <!--                            <table id="default-datatable" class="table table-bordered">-->
        <table  id="example_tag_template" class="table table-bordered" >
          <thead>
            <tr class=gradient-shifter style='text-align:center;vertical-align:middle; color:white;' >
              <th>Resource Type</th>
              <th>Tag Type</th>
              <th>Tag Name</th>              
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include 'database.php';
            $sql = "select * from tag_template;";
            $result = $db->query($sql);
            if ($result->num_rows > 0) {
                    // output data of each row
              while ($row = $result->fetch_assoc()) {
                echo "<tr><td align='center'>".ucfirst($row['resource_type'])."</td><td align='center'>".ucfirst($row['tag_type'])."</td><td align='center'>".ucfirst($row['tag_name'])."</td><td align='center' ><a href=# onclick=delete_tag('".$row['tag_type']."','".$row['tag_name']."','".$row['resource_type']."') style='color:#e346d1'><i class='fa fa-trash-o' style='font-size:24px;'></i></a></td></tr>\n";
              }
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- </div> -->

    <script>
      function addTag() {

        var resource_type = document.getElementById("resource_type").value;
        var tag_type = document.getElementById("tag_type").value;
        var tag_name = document.getElementById("tag_name").value;
        
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'resource_type='+resource_type+'&tag_type=' + tag_type + '&tag_name=' + tag_name;
if (resource_type==''||tag_type == '' || tag_name == '') {
 swal("Oops!!", "Looks like you missed some fields. Please check and try again!", "error");   
  // alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
$.ajax({
  type: "POST",
  url: "tagsync_tag_template_designer_insert_tag.php",
  data: dataString,
  cache: false,
  success: function(data) {  

    if($.trim(data)=="Tag already exits"){
      swal({title: "Oops", text: "Tag already exits", type: 
        "info"}).then(function(){ 
         location.reload(true);
       }
       );
      }
      else if($.trim(data)=="success"){
        swal({title: "Good job", text: "Tag inserted", type: 
          "success"}).then(function(){ 
           location.reload();
         }
         );
        }
        else{
          swal("Oops!", "Error ocuured while inserting tag !!!!!!", "error")
          .then(function(){ 
           location.reload();
         });
        }           
      }
    });      
}
}
function delete_tag(tag_type,tag_name,resource_type){
      // console.log(tag_type,tag_name)
      $.ajax({
        type: "POST",
        url: "tagsync_tag_template_designer_delete_tag.php",
        data: {
          tag_type:tag_type,
          tag_name:tag_name,
          resource_type:resource_type

        },

                // dataType:'json',
                success: function(data) {
                  if($.trim(data)=="Record deleted successfully"){

                    swal("Yay!", "Tag deleted successfully!!!!!!", "success")
                    .then(function(){ 
                      history.go(0)
                    });

                  }
                  else{
                   swal("Oops!", "Error ocuured while deleting the tag !!!!!!", "error")
                   .then(function(){ 
                     location.reload();
                   });
                 }           
               }
             });      
    }
  </script>  

