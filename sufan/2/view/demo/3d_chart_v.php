
<style type="text/css">
	.3d-container
	{
		-webkit-transform-style: preserve-3d;
		-webkit-perspective: 2000;
	}
	* 
	{
		-webkit-user-select: none;
	}

	@-webkit-keyframes rotate {
	    0%{
	        -webkit-transform: rotate3d(1,0,0,60deg) rotate3d(0,0,1,20deg);
	    }
	    40%{
	        -webkit-transform: rotate3d(1,0,0,88deg) rotate3d(0,0,1,120deg);
	    }
	    70%{
	        -webkit-transform: rotate3d(1,0,0,88deg) rotate3d(0,0,1,260deg);
	    }
	    90%{
	        -webkit-transform: rotate3d(1,0,0,70deg) rotate3d(0,0,1,260deg);
	    }
	    100%{
	        -webkit-transform: rotate3d(1,0,0,60deg) rotate3d(0,0,1,380deg);
	    }
	}

	.world
	{	
		float:left;
		zoom:1;
		font-size:0;
		position:absolute;
		left:40%;
		top:25%;
		width:350px;
		height:350px;
		-webkit-transform-style: preserve-3d;
		-webkit-transform: rotate3d(1,0,0,60deg) rotate3d(0,0,1,0deg);
		
		-webkit-animation: rotate 10s ease-in-out infinite;
	}
	.world:hover
	{
		
	}

	.ground
	{
		font-size:0;
	    position:absolute;
		display:block;
		top:-25%;
		left:-25%;
		width:150%;
		height:150%;
		border: 5px dotted #ccc;
		overflow:visible;
		-webkit-transform: translate3d(0,0,-1px);
		-webkit-transform-style: preserve-3d;
	}

	.building
	{
		font-size:0;
	    position:absolute;
		display:block;
		top:50%;
		left:50%;
		background:#fc0;
		width:50px;
		height:50px;
		cursor: move;
		overflow:visible;
	    -webkit-transition: all 0.5s ease-out;
		-webkit-transform: rotate3d(0,0,1,0deg);
		-webkit-transform-style: preserve-3d;
	}
		.block-1
		{
			top:0;
			left:60%;
			-webkit-transform: scaleZ(1.5);
		}
		.block-2
		{
			top:0;
			left:30%;
			-webkit-transform: scaleZ(2.5);
		}
		.block-3
		{
			top:20%;
			left:10%;
			-webkit-transform: scaleZ(1.2);
		}
		.block-4
		{
			top:20%;
			left:30%;
			-webkit-transform: scaleZ(1.8);
		}
		.block-5
		{
			top:20%;
			left:50%;
			-webkit-transform: scaleZ(1.8);
		}
		.block-6
		{
			top:60%;
			left:70%;
			-webkit-transform: scaleZ(1.8);
		}
		.block-7
		{
			top:60%;
			left:20%;
			-webkit-transform: scaleZ(1.5);
		}
		.block-8
		{
			top:80%;
			left:60%;
			-webkit-transform: scaleZ(2.8);
		}
		.block-9
		{
			top:80%;
			left:0;
			-webkit-transform: scaleZ(2.9);
		}
		.block-10
		{
			top:80%;
			left:40%;
			-webkit-transform: scaleZ(3.9);
		}
		.block-11
		{
			top:80%;
			left:20%;
			-webkit-transform: scaleZ(2.9);
		}

	.building:hover
	{
		-webkit-transform: rotate3d(0,0,1,900deg) scale3d(1, 1, 4);
		background:#0ae;
	}
		.building:hover>li
		{
			background:#0ae;
			opacity:.5;
		}
	.building:active
	{
		-webkit-transform: translateZ(50px) scale3d(1, 1, 4);
		background:#09c;
	}
		.building:active>li
		{
			background:#09c;
			opacity:.75;
		}

	.building>li
	{
		font-size:0;
		display:inline-block;
	    position:absolute;
	    background:#fc0;
	    -webkit-transition: all 0.3s ease-out;
	}
	.building .top
	{
	    background:rgba(255,212,38,1);
	    width:50px;
	    height:50px;
		-webkit-transform: translate3d(0,0,50px);
	}
	.building .west
	{
	    background:rgba(242,194,0,1);
		width:50px;
		height:50px;
		-webkit-transform-origin:0 0;
		-webkit-transform: rotate3d(0,1,0,-90deg);
	}
	.building .east
	{
	    background:rgba(217,174,0,1);
		width:50px;
		height:50px;
		-webkit-transform-origin:100% 0;
		-webkit-transform:rotate3d(0,1,0,90deg);
	}
	.building .north
	{
	    background:rgba(242,194,0,1);
		width:50px;
		height:50px;
		-webkit-transform-origin:0 0;
		-webkit-transform:rotate3d(1,0,0,90deg);
	}
	.building .south
	{
	    background:rgba(255,204,0,1);
		width:50px;
		height:50px;
		-webkit-transform-origin:100% 100%;
		-webkit-transform:rotate3d(1,0,0,-90deg);
	}

	.road
	{
		font-size:0;
	    position:absolute;
		display:block;
		top:50%;
		left:50%;
		background:#ccc;
		width:350px;
		height:30px;
		overflow:visible;
	    -webkit-transition: all 0.5s ease-out;
		-webkit-transform: rotate3d(0,0,1,0deg);
		-webkit-transform-style: preserve-3d;
	}
		.road-1
		{
			top:60%;
			left:40%;
			-webkit-transform:translateZ(.9px) rotate3d(0,0,1,90deg);
		}
		.road-2
		{
			top:40%;
			left:20%;
			-webkit-transform: rotate3d(0,0,1,180deg);
		}
		.road-3
		{
			top:100%;
			left:0;
			-webkit-transform: rotate3d(0,0,1,180deg);
		}

	.car
	{
		font-size:0;
	    position:absolute;
		display:block;
		//cursor: move;
		top:60%;
		left:50%;
		background:#666;
		width:5px;
		height:10px;
		overflow:visible;
	    -webkit-transition: all 0.5s ease-out;
		-webkit-transform:translateZ(2px) rotate3d(0,0,1,90deg);
		-webkit-transform-style: preserve-3d;
	}
	/*
	.car:hover
	{
		-webkit-transform: rotate3d(0,0,1,900deg) scale3d(4, 4, 4);
		background:#fff;
	}
		.car:hover>li
		{
			background:#fff;
			opacity:.5;
		}
	.car:active
	{
		-webkit-transform: translateZ(50px) scale3d(4, 4, 4);
	}
		.car:active>li
		{
			background:#0ae;
		}
	*/
	.car>li
	{
		font-size:0;
		display:inline-block;
	    position:absolute;
	    background:#fc0;
	    -webkit-transition: all 0.3s ease-out;
	}
	.car .roof
	{
	    background:#777;
	    width:5px;
	    height:10px;
		-webkit-transform: translate3d(0,0,5px);
	}
	.car .door-left
	{
	    background:#555;
		width:5px;
		height:10px;
		-webkit-transform-origin:0 0;
		-webkit-transform: rotate3d(0,1,0,-90deg);
	}
	.car .door-right
	{
	    background:#777;
		width:5px;
		height:10px;
		-webkit-transform-origin:100% 0;
		-webkit-transform:rotate3d(0,1,0,90deg);
	}
	.car .front
	{
	    background:#666;
		width:5px;
		height:5px;
		-webkit-transform-origin:0 0;
		-webkit-transform:rotate3d(1,0,0,90deg);
	}
	.car .trunk
	{
	    background:#444;
		width:5px;
		height:5px;
		-webkit-transform-origin:100% 100%;
		-webkit-transform:translateY(5px) rotate3d(1,0,0,-90deg);
	}
		.car-1
		{
			top:40%;
			left:60%;
		}
		.car-2
		{
			top:40%;
			left:80%;
		}
		.car-3
		{
			top:60%;
			left:95%;
			-webkit-transform:translateZ(2px) rotate3d(0,0,1,0deg);
		}
</style>
<div class='3d-container'>
	<div id="world" class="world">

		<h1 class="ground">ground</h1>

		<ul class="building block-1">Building
			<li class="top">roof</li>
			<li class="west">west wall</li>
			<li class="north">north wall</li>
			<li class="east">east wall</li>
			<li class="south">south wall</li>
		</ul>

		<ul class="building block-2">Building
			<li class="top">roof</li>
			<li class="west">west wall</li>
			<li class="north">north wall</li>
			<li class="east">east wall</li>
			<li class="south">south wall</li>
		</ul>
		
		<ul class="building block-3">Building
			<li class="top">roof</li>
			<li class="west">west wall</li>
			<li class="north">north wall</li>
			<li class="east">east wall</li>
			<li class="south">south wall</li>
		</ul>
		
		<ul class="building block-4">Building
			<li class="top">roof</li>
			<li class="west">west wall</li>
			<li class="north">north wall</li>
			<li class="east">east wall</li>
			<li class="south">south wall</li>
		</ul>
		
		<ul class="building block-5">Building
			<li class="top">roof</li>
			<li class="west">west wall</li>
			<li class="north">north wall</li>
			<li class="east">east wall</li>
			<li class="south">south wall</li>
		</ul>
		
		<ul class="building block-6">Building
			<li class="top">roof</li>
			<li class="west">west wall</li>
			<li class="north">north wall</li>
			<li class="east">east wall</li>
			<li class="south">south wall</li>
		</ul>
		
		<ul class="building block-7">Building
			<li class="top">roof</li>
			<li class="west">west wall</li>
			<li class="north">north wall</li>
			<li class="east">east wall</li>
			<li class="south">south wall</li>
		</ul>
		
		<ul class="building block-8">Building
			<li class="top">roof</li>
			<li class="west">west wall</li>
			<li class="north">north wall</li>
			<li class="east">east wall</li>
			<li class="south">south wall</li>
		</ul>
		
		<ul class="building block-9">Building
			<li class="top">roof</li>
			<li class="west">west wall</li>
			<li class="north">north wall</li>
			<li class="east">east wall</li>
			<li class="south">south wall</li>
		</ul>
		
		<ul class="building block-10">Building
			<li class="top">roof</li>
			<li class="west">west wall</li>
			<li class="north">north wall</li>
			<li class="east">east wall</li>
			<li class="south">south wall</li>
		</ul>
		
		<ul class="building block-11">Building
			<li class="top">roof</li>
			<li class="west">west wall</li>
			<li class="north">north wall</li>
			<li class="east">east wall</li>
			<li class="south">south wall</li>
		</ul>
		
		
		
		<p class="road road-1">road</p>
		<p class="road road-2">road</p>
		<p class="road road-3">road</p>

	</div>
	</div>
