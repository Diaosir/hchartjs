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
		            ['data1',100,500,44,43,255,45,56,30, 20, 50, 40, 180, 500,300, 40, 80, 450, 550, 20,37, 260, 150, 500, 180, 50],
		            ['data2', 100,300,44,43,23,454,565,30, 200, 100, 400, 150, 250,30, 200, 100, 400, 150, 250,30, 200, 100, 400, 150, 250]
		        ]
		    },
		    subchart: {
		        show: true
		    }
		});
</script>