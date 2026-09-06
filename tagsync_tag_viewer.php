<!-- <div id="display_id"></div>
<div class="container-fluid">
    <div class="card-body"> -->
        <div class="table-responsive">
            <table id="example1" class="table table-bordered">
                <thead>
		   <tr class=gradient-shifter style='text-align:center;vertical-align:middle;color:white;' >
		    <th>Account ID</th>
		    <th>Hostname</th>
		    <th>Resource name</th>
                    <th>Region</th>
                    <th>Resource type</th>
                    <th>Compliance</th>                        
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                error_reporting(E_ALL & ~E_NOTICE);
                include 'database.php';
                $sql = "select * from tag_store";
                $result = $db->query($sql);
                if ($result->num_rows > 0) {
                        // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $id = $row["id"];

                        echo "<tr id='{$row["id"]}'><td class='tagtype'>{$row['account_id']}</td><td class='tagtype'>{$row['Hostname']}</td><td class='tagtype'>{$row['resource_name']}</td><td class='tagtype'>{$row['region']}</td><td class='tagtype'>{$row['resource_type']}</td><td class='tagname'>{$row['compliance']}</td><td><a href=# style='color:#e346d1' onclick='edit_tag_Data($id)'>Edit </a></td></tr>\n";
                    }
                } else {
                    echo "0 results";
                }
                $db->close();
                ?>

            </tbody>
        </table>
    </div>
    <!-- </div>
    </div> -->


    <div class = "modal fade bd-example-modal-lg" id = "edit_tags">
        <div class = "modal-dialog modal-lg">
            <div class = "modal-content">
                <div class = "modal-header gradient-shifter">
                    <h5 class = "modal-title">Edit tags</h5>
                    <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
                        <span aria-hidden = "true">&times;
                        </span>
                    </button>
                </div>
                <form id="update_tag_form">
                    <div class = "modal-body" id="tag_view_id_value">

                    </div>
                    <div class="modal-footer">
                        <input type="button" value="update" id="update_tags_viewer" name="update_tags_viewer" onclick="updateTag()" class="btn-outline-secondary btn-round waves-effect waves-light" style="height: 35px;width: 110px;">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- End Large Size Modal -->
    <script>
       function edit_tag_Data(id) {
        $.post("tagsync_tag_viewer_edit.php", {id_new: id},
            function (data) {
                $('#update_tags_viewer').attr('data-id',id)
                $("#tag_view_id_value").html(data);
            });

        $('#edit_tags').modal('show');
    }

    function updateTag() {
        var rowID = $('#update_tags_viewer').attr('data-id');
        var tagArray = {};
        $('#update_tag_form input').each(
            function(index){  
                var input = $(this);
                tagArray[input.attr('name')] =  input.val();  
            }
            );

        $.ajax({
            url: "tagsync_tag_viewer_update.php",
            type: "POST",
            data : {tagArray: tagArray,
                rowID:rowID},
                cache: false,
                success: function(data) {
                    if($.trim(data)=="Updated successfully"){      
                        swal("Updated successfully!", "Tags Updated sucessfully !!!!!!", "success")
                        .then(function(){ 
                         location.reload();
                     }
                     );
                    }
                    else{
                      swal("Oops!", "Error ocuured while updating tag details !!!!!!"+data, "error")
                      .then(function(){ 
                         location.reload();
                     }
                     );
                  }

              }
          });
    }
</script>

