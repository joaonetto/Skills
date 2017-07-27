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

      function criaGraph(grafico, valor, nomeGraph) {
        var graph = new BarGraph(grafico);
        if ( nomeGraph == 'graphTipoA' ) {
          graph.maxValue = 15;
          graph.xAxisLabelArr = ["1", "2", "3", "4", "5"];
        } else {
          graph.maxValue = 50;
          graph.xAxisLabelArr = ["1%", "2%", "3%", "4%", "5%"];
        }
        graph.margin = 2;
        graph.colors = ["#49a0d8", "#d353a0", "#ffc527", "#df4c27"];
        graph.update(valor);
      }
      var ctx = createCanvas("graphTipoA1");
      var valorString = document.getElementById('graphTipoA1').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas("graphTipoB1");
      var valorString = document.getElementById('graphTipoB1').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoB');
    }
  ()
);
