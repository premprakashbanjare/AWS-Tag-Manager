<div class="card" >
<div class="card-header text-uppercase gradient-shifter" style="color:white"> Compliance As per Tags</div>
<div class="card-content" >
  <div class="row row-group m-0 text-center" style="background-color: ##2f247d;">
    <?php                
    include 'database.php';
    $sql_1="SELECT * FROM tag_store";
    $res = $db->query($sql_1);
    $count_rows=$res->num_rows;
    $sql = 'SELECT tag_type,tag_name FROM `tag_template`';
    $result = $db->query($sql);
    $i = 0;
    if ($result->num_rows > 0) {                  
      while ($rows = $result->fetch_assoc()) {
        $tag_name = $rows["tag_name"];
        $tag_type = $rows["tag_type"];
        $sql1 = 'SELECT count(*) FROM `tag_store` where `'.$tag_name.'` IS NULL OR `'.$tag_name.'`=""';
        $res = $db->query($sql1);
        $count = mysqli_num_rows($res);
        $sql_2 = 'SELECT * FROM `tag_store` where `'.$tag_name.'` IS NULL OR `'.$tag_name.'`=""';
                                $res_row = $db->query($sql_2);
                                $count_notnull=$res_row->num_rows;
                                
        if ($count > 0) {
                                $data_percent=(($count_rows-$count_notnull)/$count_rows)*100;
                                //echo $sql_2;
                                //echo $tag_name.$count_notnull.$count_rows;              
          $i++;
          echo '<div class="col-12 col-lg-6 col-xl-3">
          <div class="card-body border-primary">
          <div class="chart easy-pie-chart-1" data-percent="'.$data_percent.'">
          <span class="percent"></span>
          </div>
          <hr style="background-color: black">
          <h4><p class="gradient-shifter" style="color:white">'.$tag_name.'</p></h4>
          </div>
          </div>';                    
        }
      }
    }?>
  </div>
</div>
</div>

 
<!--End Card--> 
<!-- <script>
$(function() {
    $('.chart').easyPieChart({
      easing: 'easeOutBounce',
      onStep: function(from, to, percent) {
        $(this.el).find('.percent').text(Math.round(percent));
      }
    });
    var chart = window.chart = $('.chart').data('easyPieChart');
    $('.js_update').on('click', function() {
      chart.update(Math.random()*200-100);
    });
  });
  </script>

-->