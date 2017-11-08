(function (H) {
    function deferAnimate (proceed, init) {
        var series = this, 
            $renderTo = $(this.chart.container.parentNode);
        
        // Prevent pre-rendering without animation
        if (init) {
            series.group.hide();
        }
        
        // Prepare for animation
        if (init) {
            $renderTo.appear(); // initialize appear plugin
            proceed.call(this, init);
        
        // It is appeared, run animation
        } else if ($renderTo.is(':appeared')) {
            proceed.call(series);
            series.group.show();
            
        // It is not appeared, halt animation until appear
        } else  {
            $renderTo.on('appear', function () {
                if (!series.animated) { 
                    proceed.call(series);
                    series.group.show();
                    series.animated = true;
                }
            });
        }
        
        
    };
    
    H.wrap(H.Series.prototype, 'animate', deferAnimate);
    H.wrap(H.seriesTypes.column.prototype, 'animate', deferAnimate);
    H.wrap(H.seriesTypes.pie.prototype, 'animate', deferAnimate);
    
}(Highcharts));