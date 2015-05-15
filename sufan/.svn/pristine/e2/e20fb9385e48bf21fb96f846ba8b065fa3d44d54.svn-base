<header>
  <h1 class='head-title'>Make Life <span>C</span><span>o</span><span>l</span><span>o</span><span>r</span><span>f</span><span>u</span><span>l</span></h1>
  <p>by 振振</p>
</header>
<section class="color-palette">
  <div class='row'>
  	 <div class='col col-4'>
  	 	<div class='grid demo-1'>
               <a  href="<?php e(URL)?>hchart/index" data-path-hover="m 0,0 0,47.7775 c 24.580441,3.12569 55.897012,-8.199417 90,-8.199417 34.10299,0 65.41956,11.325107 90,8.199417 L 180,0 z">
                  <figure>
                   <img src="<?php e(URL.INDEX_PUBLIC)?>img/hchart.png" />
                        <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="m 0,0 0,171.14385 c 24.580441,15.47138 55.897012,24.75772 90,24.75772 34.10299,0 65.41956,-9.28634 90,-24.75772 L 180,0 0,0 z"/></svg>
                        <figcaption>
                          <h2>HChart</h2>
                          <p>基于D3.js 数据可视化</p>
                          <button>View</button>
                        </figcaption>
                      </figure>
                </a>
             </div>
  	 </div>
  	 <div class='col col-4'>
  	 	<div class='grid demo-2'>
               <a  href="http://www.huangzhen.sinaapp.com/index/lottery" data-path-hover="m 0,0 0,47.7775 c 24.580441,3.12569 55.897012,-8.199417 90,-8.199417 34.10299,0 65.41956,11.325107 90,8.199417 L 180,0 z">
                  <figure>
                   <img src="<?php e(URL.INDEX_PUBLIC)?>img/lottery.png" />
                        <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="m 0,0 0,171.14385 c 24.580441,15.47138 55.897012,24.75772 90,24.75772 34.10299,0 65.41956,-9.28634 90,-24.75772 L 180,0 0,0 z"/></svg>
                        <figcaption>
                          <h2>抽奖</h2>
                          <p>一个无聊的抽奖</p>
                          <button>View</button>
                        </figcaption>
                      </figure>
                </a>
             </div>
  	 </div>
  	 <div class='col col-4 '>
       <div class='grid demo-3'>
         <a  href="http://cnt.ppmoney.com//special/2015/05/weixin/m-popul1/index.html" data-path-hover="m 0,0 0,47.7775 c 24.580441,3.12569 55.897012,-8.199417 90,-8.199417 34.10299,0 65.41956,11.325107 90,8.199417 L 180,0 z">
            <figure>
             <img src="<?php e(URL.INDEX_PUBLIC)?>img/sucai.png" />
                  <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="m 0,0 0,171.14385 c 24.580441,15.47138 55.897012,24.75772 90,24.75772 34.10299,0 65.41956,-9.28634 90,-24.75772 L 180,0 0,0 z"/></svg>
                  <figcaption>
                    <h2>ppmoney广告</h2>
                    <p>一个基于zepto.js滑屏</p>
                    <button>View</button>
                  </figcaption>
                </figure>
          </a>
       </div>
  	 </div>
  </div>
  <div class='row'>
       <div class='col col-4 '>
          <div class='grid demo-3'>
            <a  href="http://sufan.sinaapp.com" data-path-hover="m 0,0 0,47.7775 c 24.580441,3.12569 55.897012,-8.199417 90,-8.199417 34.10299,0 65.41956,11.325107 90,8.199417 L 180,0 z">
               <figure>
                <img src="<?php e(URL.INDEX_PUBLIC)?>img/sufan.png" />
                     <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="m 0,0 0,171.14385 c 24.580441,15.47138 55.897012,24.75772 90,24.75772 34.10299,0 65.41956,-9.28634 90,-24.75772 L 180,0 0,0 z"/></svg>
                     <figcaption>
                       <h2>随访系统</h2>
                       <p>帮一个医院做的半成品随访系统</p>
                       <button>View</button>
                     </figcaption>
                   </figure>
             </a>
          </div>
       </div>
  </div>
</section>
<script>
window.onload=function(){
      (function() {
  
        function init() {
          var speed = 330,
            easing = mina.backout;

          [].slice.call ( document.querySelectorAll( '.grid a' ) ).forEach( function( el ) {
            var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
              pathConfig = {
                from : path.attr( 'd' ),
                to : el.getAttribute( 'data-path-hover' )
              };

            el.addEventListener( 'mouseenter', function() {
              path.animate( { 'path' : pathConfig.to }, speed, easing );
            } );

            el.addEventListener( 'mouseleave', function() {
              path.animate( { 'path' : pathConfig.from }, speed, easing );
            } );
          } );
        }

        init();

      })();
    }
    </script>