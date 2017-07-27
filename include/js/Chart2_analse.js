(
  function ()
    {
      function createCanvas(divName) {
        var div = document.getElementById(divName);
        var canvas = document.createElement('canvas');
        canvas.className = 'ajustaCanvas';
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
          graph.maxValue = 100;
          graph.xAxisLabelArr = ["1%", "2%", "3%", "4%", "5%"];
        }
        graph.margin = 2;
        graph.colors = ["#49a0d8", "#d353a0", "#ffc527", "#df4c27"];
        graph.update(valor);
      }

      /*
      var ctx = createCanvas('graphTipoA1');
      var valorString = document.getElementById('graphTipoA1').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA2');
      var valorString = document.getElementById('graphTipoA2').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA3');
      var valorString = document.getElementById('graphTipoA3').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA4');
      var valorString = document.getElementById('graphTipoA4').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA5');
      var valorString = document.getElementById('graphTipoA5').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA6');
      var valorString = document.getElementById('graphTipoA6').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA7');
      var valorString = document.getElementById('graphTipoA7').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA8');
      var valorString = document.getElementById('graphTipoA8').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA9');
      var valorString = document.getElementById('graphTipoA9').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA10');
      var valorString = document.getElementById('graphTipoA10').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA11');
      var valorString = document.getElementById('graphTipoA11').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA12');
      var valorString = document.getElementById('graphTipoA12').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA13');
      var valorString = document.getElementById('graphTipoA13').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA14');
      var valorString = document.getElementById('graphTipoA14').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA15');
      var valorString = document.getElementById('graphTipoA15').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA16');
      var valorString = document.getElementById('graphTipoA16').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA17');
      var valorString = document.getElementById('graphTipoA17').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA18');
      var valorString = document.getElementById('graphTipoA18').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA19');
      var valorString = document.getElementById('graphTipoA19').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA20');
      var valorString = document.getElementById('graphTipoA20').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA21');
      var valorString = document.getElementById('graphTipoA21').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA22');
      var valorString = document.getElementById('graphTipoA22').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA23');
      var valorString = document.getElementById('graphTipoA23').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA24');
      var valorString = document.getElementById('graphTipoA24').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA25');
      var valorString = document.getElementById('graphTipoA25').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA26');
      var valorString = document.getElementById('graphTipoA26').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA27');
      var valorString = document.getElementById('graphTipoA27').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA28');
      var valorString = document.getElementById('graphTipoA28').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA29');
      var valorString = document.getElementById('graphTipoA29').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA30');
      var valorString = document.getElementById('graphTipoA30').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA31');
      var valorString = document.getElementById('graphTipoA31').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA32');
      var valorString = document.getElementById('graphTipoA32').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA33');
      var valorString = document.getElementById('graphTipoA33').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA34');
      var valorString = document.getElementById('graphTipoA34').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA35');
      var valorString = document.getElementById('graphTipoA35').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA36');
      var valorString = document.getElementById('graphTipoA36').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA37');
      var valorString = document.getElementById('graphTipoA37').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA38');
      var valorString = document.getElementById('graphTipoA38').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA39');
      var valorString = document.getElementById('graphTipoA39').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA40');
      var valorString = document.getElementById('graphTipoA40').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA41');
      var valorString = document.getElementById('graphTipoA41').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA42');
      var valorString = document.getElementById('graphTipoA42').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA43');
      var valorString = document.getElementById('graphTipoA43').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA44');
      var valorString = document.getElementById('graphTipoA44').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA45');
      var valorString = document.getElementById('graphTipoA45').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA46');
      var valorString = document.getElementById('graphTipoA46').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA47');
      var valorString = document.getElementById('graphTipoA47').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA48');
      var valorString = document.getElementById('graphTipoA48').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA49');
      var valorString = document.getElementById('graphTipoA49').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA50');
      var valorString = document.getElementById('graphTipoA50').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA51');
      var valorString = document.getElementById('graphTipoA51').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA52');
      var valorString = document.getElementById('graphTipoA52').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA53');
      var valorString = document.getElementById('graphTipoA53').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA54');
      var valorString = document.getElementById('graphTipoA54').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA55');
      var valorString = document.getElementById('graphTipoA55').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA56');
      var valorString = document.getElementById('graphTipoA56').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA57');
      var valorString = document.getElementById('graphTipoA57').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA58');
      var valorString = document.getElementById('graphTipoA58').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA59');
      var valorString = document.getElementById('graphTipoA59').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA60');
      var valorString = document.getElementById('graphTipoA60').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA61');
      var valorString = document.getElementById('graphTipoA61').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA62');
      var valorString = document.getElementById('graphTipoA62').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA63');
      var valorString = document.getElementById('graphTipoA63').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA64');
      var valorString = document.getElementById('graphTipoA64').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA65');
      var valorString = document.getElementById('graphTipoA65').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA66');
      var valorString = document.getElementById('graphTipoA66').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA67');
      var valorString = document.getElementById('graphTipoA67').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA68');
      var valorString = document.getElementById('graphTipoA68').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA69');
      var valorString = document.getElementById('graphTipoA69').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA70');
      var valorString = document.getElementById('graphTipoA70').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA71');
      var valorString = document.getElementById('graphTipoA71').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA72');
      var valorString = document.getElementById('graphTipoA72').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA73');
      var valorString = document.getElementById('graphTipoA73').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA74');
      var valorString = document.getElementById('graphTipoA74').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA75');
      var valorString = document.getElementById('graphTipoA75').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA76');
      var valorString = document.getElementById('graphTipoA76').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA77');
      var valorString = document.getElementById('graphTipoA77').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA78');
      var valorString = document.getElementById('graphTipoA78').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA79');
      var valorString = document.getElementById('graphTipoA79').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA80');
      var valorString = document.getElementById('graphTipoA80').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA81');
      var valorString = document.getElementById('graphTipoA81').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA82');
      var valorString = document.getElementById('graphTipoA82').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA83');
      var valorString = document.getElementById('graphTipoA83').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA84');
      var valorString = document.getElementById('graphTipoA84').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA85');
      var valorString = document.getElementById('graphTipoA85').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA86');
      var valorString = document.getElementById('graphTipoA86').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA87');
      var valorString = document.getElementById('graphTipoA87').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA88');
      var valorString = document.getElementById('graphTipoA88').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA89');
      var valorString = document.getElementById('graphTipoA89').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA90');
      var valorString = document.getElementById('graphTipoA90').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA91');
      var valorString = document.getElementById('graphTipoA91').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA92');
      var valorString = document.getElementById('graphTipoA92').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA93');
      var valorString = document.getElementById('graphTipoA93').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA94');
      var valorString = document.getElementById('graphTipoA94').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA95');
      var valorString = document.getElementById('graphTipoA95').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA96');
      var valorString = document.getElementById('graphTipoA96').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA97');
      var valorString = document.getElementById('graphTipoA97').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA98');
      var valorString = document.getElementById('graphTipoA98').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');

      var ctx = createCanvas('graphTipoA99');
      var valorString = document.getElementById('graphTipoA99').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoA');
      */
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
