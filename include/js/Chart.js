$(document).ready(function () {
    $(".graphTipoA").each(function (index) {
        var canvas = document.createElement('canvas');
        canvas.className = 'col-md-4 grafico';
        $(this).append(canvas);
        if (typeof G_vmlCanvasManager != 'undefined') {
            canvas = G_vmlCanvasManager.initElement(canvas);
        }
        var ctx = canvas.getContext("2d");
        var graph = new BarGraph(ctx);
        graph.maxValue = 20;
        graph.xAxisLabelArr = ["1", "2", "3", "4", "5"];
        graph.margin = 2;
        graph.colors = ["#49a0d8", "#d353a0", "#ffc527", "#df4c27"];
        graph.update($(this).attr("ChartValues").split(', '));
    });

    $(".graphTipoB").each(function (index) {
        var canvas = document.createElement('canvas');
        canvas.className = 'col-md-4 grafico';
        $(this).append(canvas);
        if (typeof G_vmlCanvasManager != 'undefined') {
            canvas = G_vmlCanvasManager.initElement(canvas);
        }
        var ctx = canvas.getContext("2d");
        var graph = new BarGraph(ctx);
        graph.maxValue = 100;
        graph.xAxisLabelArr = ["1%", "2%", "3%", "4%", "5%"];
        graph.margin = 2;
        graph.colors = ["#49a0d8", "#d353a0", "#ffc527", "#df4c27"];
        graph.update($(this).attr("ChartValues").split(', '));
    });

    $(".graphTipoC").each(function (index) {
        var canvas = document.createElement('canvas');
        canvas.className = 'col-md-4 grafico';
        $(this).append(canvas);
        if (typeof G_vmlCanvasManager != 'undefined') {
            canvas = G_vmlCanvasManager.initElement(canvas);
        }
        var ctx = canvas.getContext("2d");
        var graph = new BarGraph(ctx);
        graph.maxValue = 20;
        graph.xAxisLabelArr = ["Nao", "Sim.Parcial.", "Sim.Completo."];
        graph.margin = 2;
        graph.colors = ["#49a0d8", "#d353a0", "#ffc527", "#df4c27"];
        graph.update($(this).attr("ChartValues").split(', '));
    });

    $(".graphTipoD").each(function (index) {
        var canvas = document.createElement('canvas');
        canvas.className = 'col-md-4 grafico';
        $(this).append(canvas);
        if (typeof G_vmlCanvasManager != 'undefined') {
            canvas = G_vmlCanvasManager.initElement(canvas);
        }
        var ctx = canvas.getContext("2d");
        var graph = new BarGraph(ctx);
        graph.maxValue = 100;
        graph.xAxisLabelArr = ["Nao(%)", "Sim.Parcial.(%)", "Sim.Completo.(%)"];
        graph.margin = 2;
        graph.colors = ["#49a0d8", "#d353a0", "#ffc527", "#df4c27"];
        graph.update($(this).attr("ChartValues").split(', '));
    });
});
