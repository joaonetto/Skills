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
      var ctx = createCanvas('graphDiv1');
      var valorString = document.getElementById('graphDiv1').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv2');
      var valorString = document.getElementById('graphDiv2').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv3');
      var valorString = document.getElementById('graphDiv3').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv4');
      var valorString = document.getElementById('graphDiv4').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv5');
      var valorString = document.getElementById('graphDiv5').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv6');
      var valorString = document.getElementById('graphDiv6').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv7');
      var valorString = document.getElementById('graphDiv7').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv8');
      var valorString = document.getElementById('graphDiv8').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv9');
      var valorString = document.getElementById('graphDiv9').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv10');
      var valorString = document.getElementById('graphDiv10').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv11');
      var valorString = document.getElementById('graphDiv11').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv12');
      var valorString = document.getElementById('graphDiv12').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv13');
      var valorString = document.getElementById('graphDiv13').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv14');
      var valorString = document.getElementById('graphDiv14').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv15');
      var valorString = document.getElementById('graphDiv15').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv16');
      var valorString = document.getElementById('graphDiv16').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv17');
      var valorString = document.getElementById('graphDiv17').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv18');
      var valorString = document.getElementById('graphDiv18').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv19');
      var valorString = document.getElementById('graphDiv19').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv20');
      var valorString = document.getElementById('graphDiv20').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv21');
      var valorString = document.getElementById('graphDiv21').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv22');
      var valorString = document.getElementById('graphDiv22').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv23');
      var valorString = document.getElementById('graphDiv23').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv24');
      var valorString = document.getElementById('graphDiv24').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv25');
      var valorString = document.getElementById('graphDiv25').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv26');
      var valorString = document.getElementById('graphDiv26').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv27');
      var valorString = document.getElementById('graphDiv27').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv28');
      var valorString = document.getElementById('graphDiv28').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv29');
      var valorString = document.getElementById('graphDiv29').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv30');
      var valorString = document.getElementById('graphDiv30').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv31');
      var valorString = document.getElementById('graphDiv31').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv32');
      var valorString = document.getElementById('graphDiv32').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv33');
      var valorString = document.getElementById('graphDiv33').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv34');
      var valorString = document.getElementById('graphDiv34').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv35');
      var valorString = document.getElementById('graphDiv35').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv36');
      var valorString = document.getElementById('graphDiv36').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv37');
      var valorString = document.getElementById('graphDiv37').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv38');
      var valorString = document.getElementById('graphDiv38').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv39');
      var valorString = document.getElementById('graphDiv39').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv40');
      var valorString = document.getElementById('graphDiv40').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv41');
      var valorString = document.getElementById('graphDiv41').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv42');
      var valorString = document.getElementById('graphDiv42').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv43');
      var valorString = document.getElementById('graphDiv43').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv44');
      var valorString = document.getElementById('graphDiv44').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv45');
      var valorString = document.getElementById('graphDiv45').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv46');
      var valorString = document.getElementById('graphDiv46').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv47');
      var valorString = document.getElementById('graphDiv47').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv48');
      var valorString = document.getElementById('graphDiv48').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv49');
      var valorString = document.getElementById('graphDiv49').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv50');
      var valorString = document.getElementById('graphDiv50').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv51');
      var valorString = document.getElementById('graphDiv51').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv52');
      var valorString = document.getElementById('graphDiv52').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv53');
      var valorString = document.getElementById('graphDiv53').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv54');
      var valorString = document.getElementById('graphDiv54').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv55');
      var valorString = document.getElementById('graphDiv55').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv56');
      var valorString = document.getElementById('graphDiv56').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv57');
      var valorString = document.getElementById('graphDiv57').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv58');
      var valorString = document.getElementById('graphDiv58').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv59');
      var valorString = document.getElementById('graphDiv59').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv60');
      var valorString = document.getElementById('graphDiv60').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv61');
      var valorString = document.getElementById('graphDiv61').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv62');
      var valorString = document.getElementById('graphDiv62').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv63');
      var valorString = document.getElementById('graphDiv63').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv64');
      var valorString = document.getElementById('graphDiv64').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv65');
      var valorString = document.getElementById('graphDiv65').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv66');
      var valorString = document.getElementById('graphDiv66').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv67');
      var valorString = document.getElementById('graphDiv67').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv68');
      var valorString = document.getElementById('graphDiv68').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv69');
      var valorString = document.getElementById('graphDiv69').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv70');
      var valorString = document.getElementById('graphDiv70').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv71');
      var valorString = document.getElementById('graphDiv71').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv72');
      var valorString = document.getElementById('graphDiv72').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv73');
      var valorString = document.getElementById('graphDiv73').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv74');
      var valorString = document.getElementById('graphDiv74').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv75');
      var valorString = document.getElementById('graphDiv75').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv76');
      var valorString = document.getElementById('graphDiv76').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv77');
      var valorString = document.getElementById('graphDiv77').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv78');
      var valorString = document.getElementById('graphDiv78').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv79');
      var valorString = document.getElementById('graphDiv79').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv80');
      var valorString = document.getElementById('graphDiv80').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv81');
      var valorString = document.getElementById('graphDiv81').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv82');
      var valorString = document.getElementById('graphDiv82').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv83');
      var valorString = document.getElementById('graphDiv83').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv84');
      var valorString = document.getElementById('graphDiv84').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv85');
      var valorString = document.getElementById('graphDiv85').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv86');
      var valorString = document.getElementById('graphDiv86').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv87');
      var valorString = document.getElementById('graphDiv87').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv88');
      var valorString = document.getElementById('graphDiv88').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv89');
      var valorString = document.getElementById('graphDiv89').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv90');
      var valorString = document.getElementById('graphDiv90').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv91');
      var valorString = document.getElementById('graphDiv91').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv92');
      var valorString = document.getElementById('graphDiv92').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv93');
      var valorString = document.getElementById('graphDiv93').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv94');
      var valorString = document.getElementById('graphDiv94').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv95');
      var valorString = document.getElementById('graphDiv95').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv96');
      var valorString = document.getElementById('graphDiv96').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv97');
      var valorString = document.getElementById('graphDiv97').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv98');
      var valorString = document.getElementById('graphDiv98').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

      var ctx = createCanvas('graphDiv99');
      var valorString = document.getElementById('graphDiv99').getAttribute('ChartValues').split(', ');
      var plotaGrafico = criaGraph(ctx, valorString);

    }
  ()
);
