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
		            ['data1', 300, 350, 300, 0, 0, 0,9],
		            ['data2', 130, 100, 140, 200, 150, 50]
		        ],
		        types: {
		            data1: 'area',
		            data2: 'area-spline'
		        }
		    }
		});
</script>