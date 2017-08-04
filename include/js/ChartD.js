(
  function ()
    {
      function createCanvas(divName) {
        var div = document.getElementById(divName);
        var canvas = document.createElement('canvas');
        canvas.className = 'col-md-4 grafico';
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
        graph.xAxisLabelArr = ["Não(%)", "Sim.Parcial.(%)", "Sim.Completo.(%)"];
        graph.margin = 2;
        graph.colors = ["#49a0d8", "#d353a0", "#ffc527", "#df4c27"];
        graph.update(valor);
      }

      var ctx = createCanvas('graphTipoD1');
      var valorString = document.getElementById('graphTipoD1').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD2');
      var valorString = document.getElementById('graphTipoD2').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD3');
      var valorString = document.getElementById('graphTipoD3').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD4');
      var valorString = document.getElementById('graphTipoD4').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD5');
      var valorString = document.getElementById('graphTipoD5').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD6');
      var valorString = document.getElementById('graphTipoD6').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD7');
      var valorString = document.getElementById('graphTipoD7').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD8');
      var valorString = document.getElementById('graphTipoD8').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD9');
      var valorString = document.getElementById('graphTipoD9').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD10');
      var valorString = document.getElementById('graphTipoD10').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD11');
      var valorString = document.getElementById('graphTipoD11').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD12');
      var valorString = document.getElementById('graphTipoD12').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD13');
      var valorString = document.getElementById('graphTipoD13').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD14');
      var valorString = document.getElementById('graphTipoD14').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD15');
      var valorString = document.getElementById('graphTipoD15').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD16');
      var valorString = document.getElementById('graphTipoD16').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD17');
      var valorString = document.getElementById('graphTipoD17').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD18');
      var valorString = document.getElementById('graphTipoD18').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD19');
      var valorString = document.getElementById('graphTipoD19').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD20');
      var valorString = document.getElementById('graphTipoD20').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD21');
      var valorString = document.getElementById('graphTipoD21').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD22');
      var valorString = document.getElementById('graphTipoD22').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD23');
      var valorString = document.getElementById('graphTipoD23').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD24');
      var valorString = document.getElementById('graphTipoD24').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD25');
      var valorString = document.getElementById('graphTipoD25').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD26');
      var valorString = document.getElementById('graphTipoD26').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD27');
      var valorString = document.getElementById('graphTipoD27').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD28');
      var valorString = document.getElementById('graphTipoD28').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD29');
      var valorString = document.getElementById('graphTipoD29').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD30');
      var valorString = document.getElementById('graphTipoD30').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD31');
      var valorString = document.getElementById('graphTipoD31').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD32');
      var valorString = document.getElementById('graphTipoD32').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD33');
      var valorString = document.getElementById('graphTipoD33').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD34');
      var valorString = document.getElementById('graphTipoD34').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD35');
      var valorString = document.getElementById('graphTipoD35').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD36');
      var valorString = document.getElementById('graphTipoD36').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD37');
      var valorString = document.getElementById('graphTipoD37').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD38');
      var valorString = document.getElementById('graphTipoD38').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD39');
      var valorString = document.getElementById('graphTipoD39').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD40');
      var valorString = document.getElementById('graphTipoD40').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD41');
      var valorString = document.getElementById('graphTipoD41').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD42');
      var valorString = document.getElementById('graphTipoD42').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD43');
      var valorString = document.getElementById('graphTipoD43').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD44');
      var valorString = document.getElementById('graphTipoD44').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD45');
      var valorString = document.getElementById('graphTipoD45').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD46');
      var valorString = document.getElementById('graphTipoD46').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD47');
      var valorString = document.getElementById('graphTipoD47').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD48');
      var valorString = document.getElementById('graphTipoD48').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD49');
      var valorString = document.getElementById('graphTipoD49').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD50');
      var valorString = document.getElementById('graphTipoD50').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD51');
      var valorString = document.getElementById('graphTipoD51').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD52');
      var valorString = document.getElementById('graphTipoD52').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD53');
      var valorString = document.getElementById('graphTipoD53').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD54');
      var valorString = document.getElementById('graphTipoD54').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD55');
      var valorString = document.getElementById('graphTipoD55').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD56');
      var valorString = document.getElementById('graphTipoD56').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD57');
      var valorString = document.getElementById('graphTipoD57').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD58');
      var valorString = document.getElementById('graphTipoD58').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD59');
      var valorString = document.getElementById('graphTipoD59').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD60');
      var valorString = document.getElementById('graphTipoD60').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD61');
      var valorString = document.getElementById('graphTipoD61').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD62');
      var valorString = document.getElementById('graphTipoD62').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD63');
      var valorString = document.getElementById('graphTipoD63').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD64');
      var valorString = document.getElementById('graphTipoD64').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD65');
      var valorString = document.getElementById('graphTipoD65').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD66');
      var valorString = document.getElementById('graphTipoD66').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD67');
      var valorString = document.getElementById('graphTipoD67').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD68');
      var valorString = document.getElementById('graphTipoD68').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD69');
      var valorString = document.getElementById('graphTipoD69').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD70');
      var valorString = document.getElementById('graphTipoD70').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD71');
      var valorString = document.getElementById('graphTipoD71').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD72');
      var valorString = document.getElementById('graphTipoD72').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD73');
      var valorString = document.getElementById('graphTipoD73').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD74');
      var valorString = document.getElementById('graphTipoD74').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD75');
      var valorString = document.getElementById('graphTipoD75').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD76');
      var valorString = document.getElementById('graphTipoD76').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD77');
      var valorString = document.getElementById('graphTipoD77').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD78');
      var valorString = document.getElementById('graphTipoD78').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD79');
      var valorString = document.getElementById('graphTipoD79').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD80');
      var valorString = document.getElementById('graphTipoD80').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD81');
      var valorString = document.getElementById('graphTipoD81').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD82');
      var valorString = document.getElementById('graphTipoD82').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD83');
      var valorString = document.getElementById('graphTipoD83').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD84');
      var valorString = document.getElementById('graphTipoD84').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD85');
      var valorString = document.getElementById('graphTipoD85').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD86');
      var valorString = document.getElementById('graphTipoD86').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD87');
      var valorString = document.getElementById('graphTipoD87').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD88');
      var valorString = document.getElementById('graphTipoD88').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD89');
      var valorString = document.getElementById('graphTipoD89').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD90');
      var valorString = document.getElementById('graphTipoD90').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD91');
      var valorString = document.getElementById('graphTipoD91').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD92');
      var valorString = document.getElementById('graphTipoD92').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD93');
      var valorString = document.getElementById('graphTipoD93').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD94');
      var valorString = document.getElementById('graphTipoD94').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD95');
      var valorString = document.getElementById('graphTipoD95').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD96');
      var valorString = document.getElementById('graphTipoD96').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD97');
      var valorString = document.getElementById('graphTipoD97').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD98');
      var valorString = document.getElementById('graphTipoD98').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');

      var ctx = createCanvas('graphTipoD99');
      var valorString = document.getElementById('graphTipoD99').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoD');
    }
  ()
);
