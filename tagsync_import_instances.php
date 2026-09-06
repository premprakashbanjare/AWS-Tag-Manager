 <!-- <div class="card"> -->
  <div >
   <!-- Add subscription button -->
   <button class="btn btn-outline-secondary waves-effect waves-light pull-right" data-toggle="modal" data-target="#add_aws_account_modal" style="height: 35px;width: 155px; margin-top: -25px;">Add AWS account</button> 
   <div style="height:40px"></div>

   <!-- Add subscription Modal -->
   <div class="modal fade" id="add_aws_account_modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header gradient-shifter">
          <h5 class="modal-title" style="color:white;">Add login details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body"  >

          <div class="form-group">
            <label for="input-6">Account ID or alias <span class="required">*</span></label>
            <input type="text" class="form-control form-control-rounded" name="Account_id" id="Account_id" placeholder="Enter Your Account ID or alias" required autocomplete="off">
          </div>
          <div class="form-group">
            <label for="input-7">Username<span class="required">*</span></label>
            <input type="text" class="form-control form-control-rounded" name="username" id="username" placeholder="Enter Your username" required autocomplete="off">
          </div>
          <div class="form-group">
            <label for="input-8">Password<span class="required">*</span></label>
            <input type="password" class="form-control form-control-rounded secondary" name="password" id="password" placeholder="Enter Your password" required autocomplete="off">
          </div>
          <div class="form-group">
            <label for="input-8" required>Secret key<span class="required">*</span></label>
            <input type="password" class="form-control form-control-rounded" name="secret_key" id="secret_key" placeholder="Enter Your secret_key" required autocomplete="off">            
            </div>
            <div class="form-group">
              <label for="input-8" required>Access key<span class="required">*</span></label>
              <input type="password" class="form-control form-control-rounded" name="access_key" id="access_key" placeholder="Enter Your access_key" required autocomplete="off">           
            </div>

            <div class="form-group">
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
              <button type="button" name="save" class="btn btn-outline-secondary" onclick="add_aws_account_database()" data-dismiss="modal"><i class="fa fa-check-square-o"></i> Save </button>
            </div>
            <!-- </form> -->
          </div>
        </div>
      </div>
    </div>
    <!--Add subscription modal end-->

    <!-- edit subscription modal-->
    <div class = "modal fade" id = "edit_aws_account_modal">
      <div class = "modal-dialog ">
        <div class = "modal-content">
         <div class="modal-header gradient-shifter">
          <h5 class = "modal-title" style="color:white;">Edit AWS Account details</h5>
          <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
            <span aria-hidden = "true">&times;
            </span>
          </button>
        </div>
        <form id="update_subscription_details_form">
          <div class = "modal-body" id="id_value">

          </div>
          <div class="modal-footer"> 
            <input type="button" value="update" id="update_subscription" name="update_subscription" onclick="updatesubscription_details()" class="btn-outline-secondary btn-round waves-effect waves-light" style="height: 35px;width: 110px;">
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- edit subscription model end-->


  <!-- Datatable to display subscription id present in database-->
  <div class="table-responsive">
   <table  id="subscription_details_table" class="table table-bordered" >
    <thead>
      <tr class=gradient-shifter style='text-align:center;vertical-align:middle;color:white; ' >
        <th>Edit</th>
        <th >Account_id/alisa</th>
        <th >Username</th>
        <th>Action</th>
        <th>Last Imported on</th>
      </tr>

    </thead>
    <tbody>
      <?php
      include 'database.php';
      $sql = "select id,account_id,username,imported_timestamp,secret_key from aws_account_details;";
      $result = $db->query($sql);
      if ($result->num_rows > 0) {
                                        // output data of each row
        while ($row = $result->fetch_assoc()) {
			$id=$row['id'];
          $account_id_db =$row['account_id']; 
          $username=$row['username'];
          $last_imported_on=$row['imported_timestamp']; 
          $secret_key=$row['secret_key'];
          if(is_null($last_imported_on) || strlen(trim($last_imported_on))<=0){
            $last_imported_on=$row['imported_timestamp']; 
          }
          else{

            $last_imported_on = "<i class='fa fa-check-square' style='color:#b300b3'></i>   ";
            $last_imported_on .=$row['imported_timestamp'];

          } 

          echo "<tr style='text-align:center;vertical-align:middle'><td><a href=# onclick='edit_subscription_id(\"".$secret_key."\")' style='color:#e346d1'>Edit</a></td><td>$account_id_db</td><td>$username</td><td><a href=# onclick='import_resource_data(\"".$account_id_db."\")' style='color:#e346d1'>Import Resources </a><div class='import_status ' name ='".$account_id_db."' id='".$account_id_db."'  hidden style='text-align:right;'>  <img src='assets/images/ajax-loader.gif'></img>
          Importing....</div></td><td>".$last_imported_on."</td></tr>\n";

         }
      } else {
        echo "0 results";
      }
      $db->close();
      ?>
    </tbody>
  </table>
</div>
</div> 

<script> 

   //Edit subscription details
   function edit_subscription_id(id) {
	  //alert(id)
    $.post("tagsync_import_edit_subid_data.php", {id_new: id},
      function (data) {
       $('#update_subscription').attr('data-id',id)
       $("#id_value").html(data);
     });

    $('#edit_aws_account_modal').modal('show');
  }

  //update subscription details

  function updatesubscription_details() {
    var rowID = $('#update_subscription').attr('data-id');
	var Account_id = document.getElementById("account_id_update").value;
    var username = document.getElementById("username_update").value;
    var password = document.getElementById("password_update").value;
    var secret_key = document.getElementById("secret_key_update").value;
    var access_key = document.getElementById("access_key_update").value;
    
	
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'Account_id=' +encodeURIComponent(Account_id) + '&username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password) + '&secret_key=' + encodeURIComponent(secret_key)+ '&access_key=' + encodeURIComponent(access_key) + '&rowID=' + encodeURIComponent(rowID);
if (Account_id == '' || username == '' || password == '' || secret_key == ''|| access_key=='') {
  swal( "Warning!", "Please fill all the fields..", "warning");

} else {
	console.log(dataString)
// AJAX code to submit form.
$.ajax({
  type: "POST",
  url: "tagsync_import_update_subscription_id.php",
  data: dataString,
  cache: false,
  success: function(data) {
    if($.trim(data)=="Updated successfully"){      
      swal("Updated successfully!", "AWS account details Updated sucessfully !!!!!!", "success")
      .then(function(){ 
       location.reload();
     }
     );
    }
    else{
      swal("Oops!", "Error ocuured while updating AWS account details the data !!!!!!"+data, "error")
      .then(function(){ 
       location.reload();
     }
     );
    }

  }
});
}
return false;
}

  //Inserting subscription details into db
  
  function add_aws_account_database() {	  
    var Account_id = document.getElementById("Account_id").value;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var secret_key = document.getElementById("secret_key").value;
     var access_key = document.getElementById("access_key").value;

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'Account_id=' +encodeURIComponent(Account_id) + '&username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password) + '&secret_key=' + encodeURIComponent(secret_key)+ '&access_key=' + encodeURIComponent(access_key);
//console.log(dataString)
if (Account_id == '' || username == '' || password == '' || secret_key == ''|| access_key=='') {
  swal( "Warning!", "Please fill all the fields..", "warning");

} else {
	
// AJAX code to submit form.
$.ajax({
  type: "POST",
  url: "tagsync_import_add_aws_account_data.php",

  data: dataString,
  cache: false,
  success: function(data) {
    if($.trim(data)=="New record created successfully"){      
      swal("Saved successfully!", "AWS account details inserted sucessfully !!!!!!", "success")

      .then(function(){ 
       location.reload();
     }
     );
    }
    else{
      swal("Oops!", "Error ocuured while inserting the data !!!!!!"+data, "error")
      .then(function(){ 
       location.reload();
     }
     );
    }

  }
});
}
return false;
}

//importing resources from azure api
function import_resource_data(subscription_id) {
      // $('.import_status').attr('hidden')
      $.ajax({
        type: "POST",
        url: "tagsync_import_resources_azure_api_python.php",
        data: {
          sub_id:subscription_id
        },
        beforeSend: function() {
        // setting a timeout
        $('#'+subscription_id).removeAttr("hidden")

      },
        // dataType:'json',
        success: function(data) {
          if($.trim(data)=="successfull"){
            $('#'+subscription_id).text("Imported").append("<i class='fa fa-check-square' style='color:#b300b3'></i>");
              //"<img src='assets/images/logo-icon.png'/>");;
              swal("Yay!", "Resources imported successfully!!!!!!", "success")
              .then(function(){ 
               location.reload();
             });

            }
            else{
             swal("Oops!", "Error ocuured while importing resources from aws !!!!!!", "error")
             .then(function(){ 
               location.reload();
             });
           }           
         }
       });      
    }
  </script>  