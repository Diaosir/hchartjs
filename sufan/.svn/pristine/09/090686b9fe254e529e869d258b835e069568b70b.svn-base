<?php
  foreach ($this->css as $key => $value) {?>
  <link rel="stylesheet" type="text/css" href="<?php e(URL.$value.'.css');?>"><?php
  }?>
 <div id="chart"></div>
 <?php
foreach ($this->js as $value) {?>
<script src="<?php e(URL.$value);?>"></script><?php
}?>
 <script>
      var chart = c3.generate({
          data: {
              columns: [
                  ['data1', 30, 200, 100, 400, 150, 250],
                  ['data2', 50, 20, 10, 40, 15, 25]
              ]
          }
      });
      setTimeout(function () {
          chart.load({
              columns: [
                  ['data1', 230, 190, 300, 500, 300, 400]
              ]
          });
      }, 1000);

      setTimeout(function () {
          chart.load({
              columns: [
                  ['data3', 130, 150, 200, 300, 200, 100]
              ]
          });
      }, 1500);
      setTimeout(function () {
          chart.unload({
              ids: 'data1'
          });
      }, 2000);
    </script>