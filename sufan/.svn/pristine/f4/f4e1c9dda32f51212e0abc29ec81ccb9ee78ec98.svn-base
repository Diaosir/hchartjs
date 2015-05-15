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
		            ['data1', 30, 200, 100, 400, 150, 250]
		        ],
		        type: 'bar'
		    },
		    bar: {
		        width: {
		            ratio: 0.6 // this makes bar width 50% of length between ticks
		        }
		        // or
		        //width: 100 // this makes bar width 100px
		    }
		});
</script>