<script type="text/javascript">
$(function() {
        $('#stock_status').highcharts({
            chart: {
                type: 'bar'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: <?php echo $commodity_name; ?>


            },
            yAxis: {
                min: 0,
                title: {
                    text: ''
                }
            },
            legend: {
                backgroundColor: '#FFFFFF',
                reversed: true
            },
            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },
                credits: { enabled:false},
                series: [{
                name: '<?php echo $title_1; ?>',
                data: <?php echo $current_values; ?>
            }, {
                name: '<?php echo $title_2; ?>',
                data: <?php echo $monthly_values; ?>
            }]
        });
    });
    

		</script>

		
		<div id="container" style="height: auto; width: auto; margin: 0 auto"></div>