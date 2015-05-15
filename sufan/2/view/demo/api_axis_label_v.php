 <div id="chart"></div>
 <script>
 window.onload=function(){

      var chart = c3.generate({
        data: {
          columns: [
            ['data1', 30, 200, 100, 400, 150, 250],
            ['data2', 50, 20, 10, 40, 15, 25]
          ],
          axes: {
            data1: 'y',
            data2: 'y2',
          }
        },
        axis: {
          x: {
            label: 'X Label'
          },
          y: {
            label: {
              text: 'Y Axis Label',
              position: 'outer-middle'
            }
          },
          y2: {
            show: true,
            label: {
              text: 'Y2 Axis Label',
              position: 'outer-middle'
            }
          }
        },
        tooltip: {
//          enabled: false
        },
        zoom: {
//          enabled: true
        },
        subchart: {
//          show: true
        }
      });

      setTimeout(function () {
        chart.axis.labels({
          x: 'New X Axis Label',
          y: 'New Y Axis Label',
          y2: 'New Y2 Axis Label',
        });
      }, 1000);

      setTimeout(function () {
        chart.load({
          columns: [
            ['data1', 100, 300, 600, 200, 400, 500]
          ]
        });
        chart.axis.labels({y: 'New Y Axis Label Again'});
      }, 2000);
}
    </script>