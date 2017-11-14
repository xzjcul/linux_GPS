$(function () {
    var currSat = "{$currSat}";
    Highcharts.setOptions({
        lang: {
            rangeSelectorZoom: ''
        }
    });
    $.getJSON('https://data.jianshukeji.com/jsonp?filename=json/aapl-ohlcv.json&callback=?', function (data) {
        var D_A = [],
            D_C = [],
            D_R = [],
            dataLength = data.length,
            // set the allowed units for data grouping
            groupingUnits = [[
                'week',                         // unit name
                [1]                             // allowed multiples
            ], [
                'month',
                [1, 2, 3, 4, 6]
            ]],
            i = 0;
        for (i; i < dataLength; i += 1) {
            D_A.push([
                data[i][0], // the date
                data[i][1], // open
                data[i][2], // high
                data[i][3], // low
                data[i][4] // close
            ]);
            D_C.push([
                data[i][0], // the date
                data[i][1], // open
                data[i][2], // high
                data[i][3], // low
                data[i][4] // close
            ]);
            D_R.push([
                data[i][0], // the date
                data[i][5] // the volume
            ]);
        }
        // create the chart
        $('#gbas-rtorbit_sq_1').highcharts('StockChart', {
            rangeSelector: {
                enabled: false,
            },
            navigator: {
                outlineWidth: 1,
            },
            title: {
                text: ''
            },
            xAxis: {
                dateTimeLabelFormats: {
                    millisecond: '%H:%M:%S.%L',
                    second: '%H:%M:%S',
                    minute: '%H:%M',
                    hour: '%H:%M',
                    day: '%m-%d',
                    week: '%m-%d',
                    month: '%y-%m',
                    year: '%Y'
                }
            },

            yAxis: [
                {
                    title: {
                        text: 'D0-A'
                    },
                    height: '30%',
                    lineWidth: 1.5,
                    opposite: false,
                    labels: {y: 5},
                    showLastLabel: true
                },
                {
                    title: {
                        text: 'D0-C'
                    },
                    top: "35%",
                    height: '30%',
                    offset: 0,
                    lineWidth: 1.5,
                    opposite: false,
                    labels: {y: 5},
                    showLastLabel: true
                },
                {
                    title: {
                        text: 'D0-R'
                    },
                    top: "70%",
                    height: '30%',
                    offset: 0,
                    lineWidth: 1.5,
                    opposite: false,
                    labels: {y: 5},
                    showLastLabel: true
                }
            ],
            series: [
                {
                    name: 'D0-A',
                    data: D_A,
                    dataGrouping: {
                        units: groupingUnits
                    },
                    lineWidth: 1.5,
                    marker: {
                        enabled: false,
                        radius: 2
                    }
                },
                {
                    name: 'D0-C',
                    data: D_C,
                    lineWidth: 1.5,
                    marker: {
                        enabled: false,
                        radius: 2
                    },
                    yAxis: 1
                },
                {
                    name: 'D0-R',
                    data: D_R,
                    dataGrouping: {
                        units: groupingUnits
                    },
                    lineWidth: 1.5,
                    marker: {
                        enabled: false,
                        radius: 2
                    },
                    yAxis: 2
                }
            ]
        });
    });

    function changeSat(sat) {
        showLoading();
        $.get("{:U('DataProduct/fetchRtOrbitSeq')}", {'sat': sat}, function (data) {
            hideLoading();
            if (!data || data.length <= 0) {
                toastr.remove();
                toastr.error("{:C('NO_DATA_TIP')}");
            } else {
                $("#gbas-rtorbit span.am-badge").removeClass("am-badge-primary");
                $("#gbas-rtorbit span#gbas_udre_sat_" + sat).addClass("am-badge-primary");
                updateOrbitSeqChart(data, sat);
            }
        });

        currSat = sat;
    }

});
