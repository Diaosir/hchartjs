<?php
  foreach ($this->css as $key => $value) {?>
  <link rel="stylesheet" type="text/css" href="<?php e(URL.$value.'.css');?>"><?php
  }?>
 <div id="chart"></div>
 <?php
foreach ($this->js as $value) {?>
<script src="<?php e(URL.$value);?>"></script><?php
}?>
 <div id="chart"></div>
 <script>

      var chart = c3.generate({
    data: {
        columns: [
            ['data1', 30, 200, 100, 400, 150, 250,450],
            ['data2', 130, 100, 140, 200, 150, 50,1000]
        ],
        type: 'spline'
    }
});
</script>