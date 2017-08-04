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
        graph.maxValue = 15;
        graph.xAxisLabelArr = ["Não", "Sim.Parcial.", "Sim.Completo."];
        graph.margin = 2;
        graph.colors = ["#49a0d8", "#d353a0", "#ffc527", "#df4c27"];
        graph.update(valor);
      }

      var ctx = createCanvas('graphTipoC1');
      var valorString = document.getElementById('graphTipoC1').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC2');
      var valorString = document.getElementById('graphTipoC2').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC3');
      var valorString = document.getElementById('graphTipoC3').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC4');
      var valorString = document.getElementById('graphTipoC4').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC5');
      var valorString = document.getElementById('graphTipoC5').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC6');
      var valorString = document.getElementById('graphTipoC6').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC7');
      var valorString = document.getElementById('graphTipoC7').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC8');
      var valorString = document.getElementById('graphTipoC8').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC9');
      var valorString = document.getElementById('graphTipoC9').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC10');
      var valorString = document.getElementById('graphTipoC10').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC11');
      var valorString = document.getElementById('graphTipoC11').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC12');
      var valorString = document.getElementById('graphTipoC12').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC13');
      var valorString = document.getElementById('graphTipoC13').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC14');
      var valorString = document.getElementById('graphTipoC14').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC15');
      var valorString = document.getElementById('graphTipoC15').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC16');
      var valorString = document.getElementById('graphTipoC16').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC17');
      var valorString = document.getElementById('graphTipoC17').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC18');
      var valorString = document.getElementById('graphTipoC18').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC19');
      var valorString = document.getElementById('graphTipoC19').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC20');
      var valorString = document.getElementById('graphTipoC20').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC21');
      var valorString = document.getElementById('graphTipoC21').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC22');
      var valorString = document.getElementById('graphTipoC22').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC23');
      var valorString = document.getElementById('graphTipoC23').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC24');
      var valorString = document.getElementById('graphTipoC24').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC25');
      var valorString = document.getElementById('graphTipoC25').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC26');
      var valorString = document.getElementById('graphTipoC26').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC27');
      var valorString = document.getElementById('graphTipoC27').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC28');
      var valorString = document.getElementById('graphTipoC28').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC29');
      var valorString = document.getElementById('graphTipoC29').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC30');
      var valorString = document.getElementById('graphTipoC30').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC31');
      var valorString = document.getElementById('graphTipoC31').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC32');
      var valorString = document.getElementById('graphTipoC32').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC33');
      var valorString = document.getElementById('graphTipoC33').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC34');
      var valorString = document.getElementById('graphTipoC34').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC35');
      var valorString = document.getElementById('graphTipoC35').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC36');
      var valorString = document.getElementById('graphTipoC36').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC37');
      var valorString = document.getElementById('graphTipoC37').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC38');
      var valorString = document.getElementById('graphTipoC38').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC39');
      var valorString = document.getElementById('graphTipoC39').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC40');
      var valorString = document.getElementById('graphTipoC40').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC41');
      var valorString = document.getElementById('graphTipoC41').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC42');
      var valorString = document.getElementById('graphTipoC42').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC43');
      var valorString = document.getElementById('graphTipoC43').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC44');
      var valorString = document.getElementById('graphTipoC44').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC45');
      var valorString = document.getElementById('graphTipoC45').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC46');
      var valorString = document.getElementById('graphTipoC46').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC47');
      var valorString = document.getElementById('graphTipoC47').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC48');
      var valorString = document.getElementById('graphTipoC48').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC49');
      var valorString = document.getElementById('graphTipoC49').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC50');
      var valorString = document.getElementById('graphTipoC50').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC51');
      var valorString = document.getElementById('graphTipoC51').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC52');
      var valorString = document.getElementById('graphTipoC52').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC53');
      var valorString = document.getElementById('graphTipoC53').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC54');
      var valorString = document.getElementById('graphTipoC54').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC55');
      var valorString = document.getElementById('graphTipoC55').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC56');
      var valorString = document.getElementById('graphTipoC56').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC57');
      var valorString = document.getElementById('graphTipoC57').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC58');
      var valorString = document.getElementById('graphTipoC58').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC59');
      var valorString = document.getElementById('graphTipoC59').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC60');
      var valorString = document.getElementById('graphTipoC60').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC61');
      var valorString = document.getElementById('graphTipoC61').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC62');
      var valorString = document.getElementById('graphTipoC62').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC63');
      var valorString = document.getElementById('graphTipoC63').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC64');
      var valorString = document.getElementById('graphTipoC64').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC65');
      var valorString = document.getElementById('graphTipoC65').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC66');
      var valorString = document.getElementById('graphTipoC66').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC67');
      var valorString = document.getElementById('graphTipoC67').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC68');
      var valorString = document.getElementById('graphTipoC68').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC69');
      var valorString = document.getElementById('graphTipoC69').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC70');
      var valorString = document.getElementById('graphTipoC70').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC71');
      var valorString = document.getElementById('graphTipoC71').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC72');
      var valorString = document.getElementById('graphTipoC72').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC73');
      var valorString = document.getElementById('graphTipoC73').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC74');
      var valorString = document.getElementById('graphTipoC74').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC75');
      var valorString = document.getElementById('graphTipoC75').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC76');
      var valorString = document.getElementById('graphTipoC76').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC77');
      var valorString = document.getElementById('graphTipoC77').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC78');
      var valorString = document.getElementById('graphTipoC78').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC79');
      var valorString = document.getElementById('graphTipoC79').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC80');
      var valorString = document.getElementById('graphTipoC80').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC81');
      var valorString = document.getElementById('graphTipoC81').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC82');
      var valorString = document.getElementById('graphTipoC82').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC83');
      var valorString = document.getElementById('graphTipoC83').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC84');
      var valorString = document.getElementById('graphTipoC84').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC85');
      var valorString = document.getElementById('graphTipoC85').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC86');
      var valorString = document.getElementById('graphTipoC86').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC87');
      var valorString = document.getElementById('graphTipoC87').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC88');
      var valorString = document.getElementById('graphTipoC88').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC89');
      var valorString = document.getElementById('graphTipoC89').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC90');
      var valorString = document.getElementById('graphTipoC90').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC91');
      var valorString = document.getElementById('graphTipoC91').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC92');
      var valorString = document.getElementById('graphTipoC92').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC93');
      var valorString = document.getElementById('graphTipoC93').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC94');
      var valorString = document.getElementById('graphTipoC94').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC95');
      var valorString = document.getElementById('graphTipoC95').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC96');
      var valorString = document.getElementById('graphTipoC96').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC97');
      var valorString = document.getElementById('graphTipoC97').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC98');
      var valorString = document.getElementById('graphTipoC98').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');

      var ctx = createCanvas('graphTipoC99');
      var valorString = document.getElementById('graphTipoC99').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString, 'graphTipoC');
    }
  ()
);
