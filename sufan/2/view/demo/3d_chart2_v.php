<style type="text/css">
	#chart{
	  position:relative;
	  margin-top:40px;
	  width:500px;
	  height:200px;
	}
	@-webkit-keyframes bargrowth{
	  0%   {max-height: 0%;}
	  100%  {max-height: 100%;}
	}
	@keyframes bargrowth{
	  0%   {max-height: 0%;}
	  100%  {max-height: 100%;}
	}
	.bar{
	  -webkit-animation: bargrowth 1000ms ease;
	  animation: bargrowth 1000ms ease;
	  position:absolute;
	  bottom:0;
	  display:inline-block;
	  background: #89b800;
	  box-shadow: 1px -1px #79a300, 2px -2px #79a300, 3px -3px #79a300,   4px -4px #79a300, 5px -5px #79a300, 6px -6px #79a300, 7px -7px   #79a300, 8px -8px #79a300, 9px -9px #79a300, 10px -10px #79a300;
	}
	.wrapper{
	  text-align:center;
	  margin:0 auto;
	  margin-top:30px;
	  width:500px;
	  font-family:Helvetica;
	  font-size:12px;
	}
	.wrapper > h1, .wrapper > p{
	  margin:0;
	}
</style>
<div class="wrapper">
  <h1>叫我伪3D</h1>
  
  <div id="chart"></div>  
</div>
<script type="text/javascript">
	/* Inspired by : http://codepen.io/obc/pen/ypDmg */
	/* Te iubesc pisoi */
	/* @_tomesch */

	// Add values to the values array and see what happens :)
	var values = [250,1000,340,290,200,50,45,85,95,120];

	drawChart(values,"#chart",10) // You can adjust the margin between each bar by changing 10 to whatever you like

	function drawChart(data,selector,padding){
	  var max = Math.max.apply(Math, data);
		var chart = document.querySelector(selector);
		var barwidth = ((chart.offsetWidth-(values.length-1)*padding-(data.length)*10)/data.length);
		var sum = data.reduce(function(pv, cv) { return pv + cv; }, 0);
		var left = 0;
		for (var i in data){
		  var newbar = document.createElement('div');
		  newbar.setAttribute("class", "bar");
		  newbar.style.width=barwidth+"px";
		  newbar.style.height=((data[i]/max)*100)+"%";
		  newbar.style.left=left+"px";
		  chart.appendChild(newbar);
		  left += (barwidth+padding+10);
		}
	}
</script>