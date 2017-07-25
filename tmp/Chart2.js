(
  function ()
    {
      function createCanvas(divName) {
        var div = document.getElementById(divName);
        var canvas = document.createElement('canvas');
        div.appendChild(canvas);
        if (typeof G_vmlCanvasManager != 'undefined') {
          canvas = G_vmlCanvasManager.initElement(canvas);
        }
        var ctx = canvas.getContext("2d");
        return ctx;
      }
      function retornaArray(divName, valor) {
        var div = document.getElementById(divName);
        var newdata = div.getAttribute(valor).split(', ');
        document.write(newdata);
        return newdata;
      }
      function criaGraph(grafico, valor) {
        var graph = new BarGraph(grafico);
        graph.maxValue = 14;
        graph.margin = 2;
        graph.colors = ["#49a0d8", "#d353a0", "#ffc527", "#df4c27"];
        graph.xAxisLabelArr = ["1", "2", "3", "4", "5"];
        graph.update(valor);
      }
      var ctx = createCanvas("graphDiv1");
      var valorString = document.getElementById('graphDiv1').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas("graphDiv2");
      var valorString = document.getElementById('graphDiv2').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);
    }
  ()
);
