(
  function ()
    {
      function createCanvas(divName) {
        var div = document.getElementById(divName);
        var canvas = document.createElement('canvas');
        canvas.className = 'grafico2';
        div.appendChild(canvas);
        if (typeof G_vmlCanvasManager != 'undefined') {
          canvas = G_vmlCanvasManager.initElement(canvas);
        }
        var ctx = canvas.getContext("2d");
        return ctx;
      }

      function criaGraph(grafico, valor) {
        var graph = new BarGraph(grafico);
        graph.maxValue = 100;
        graph.xAxisLabelArr = ["1%", "2%", "3%", "4%", "5%"];
        graph.margin = 2;
        graph.colors = ["#49a0d8", "#d353a0", "#ffc527", "#df4c27"];
        graph.update(valor);
      }

      var ctx = createCanvas('graphTipoB1');
      var valorString = document.getElementById('graphTipoB1').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoB');

      var ctx = createCanvas('graphTipoB2');
      var valorString = document.getElementById('graphTipoB2').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoB');

      var ctx = createCanvas('graphTipoB3');
      var valorString = document.getElementById('graphTipoB3').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoB');

      var ctx = createCanvas('graphTipoB4');
      var valorString = document.getElementById('graphTipoB4').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoB');

      var ctx = createCanvas('graphTipoB5');
      var valorString = document.getElementById('graphTipoB5').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoB');

      var ctx = createCanvas('graphTipoB6');
      var valorString = document.getElementById('graphTipoB6').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoB');

      var ctx = createCanvas('graphTipoB7');
      var valorString = document.getElementById('graphTipoB7').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoB');

      var ctx = createCanvas('graphTipoB8');
      var valorString = document.getElementById('graphTipoB8').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoB');

      var ctx = createCanvas('graphTipoB9');
      var valorString = document.getElementById('graphTipoB9').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoB');

      var ctx = createCanvas('graphTipoB10');
      var valorString = document.getElementById('graphTipoB10').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoB');

      var ctx = createCanvas('graphTipoB11');
      var valorString = document.getElementById('graphTipoB11').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoB');

      var ctx = createCanvas('graphTipoB12');
      var valorString = document.getElementById('graphTipoB12').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoB');

      var ctx = createCanvas('graphTipoB13');
      var valorString = document.getElementById('graphTipoB13').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoB');

      var ctx = createCanvas('graphTipoB14');
      var valorString = document.getElementById('graphTipoB14').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoB');

      var ctx = createCanvas('graphTipoB15');
      var valorString = document.getElementById('graphTipoB15').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoB');

      var ctx = createCanvas('graphTipoB16');
      var valorString = document.getElementById('graphTipoB16').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoB');

      var ctx = createCanvas('graphTipoB17');
      var valorString = document.getElementById('graphTipoB17').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoB');

      var ctx = createCanvas('graphTipoB18');
      var valorString = document.getElementById('graphTipoB18').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoB');

      var ctx = createCanvas('graphTipoB19');
      var valorString = document.getElementById('graphTipoB19').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoB');
    }
  ()
);
