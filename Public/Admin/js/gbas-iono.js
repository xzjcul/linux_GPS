var initIonoDcbChart = function (ionoDcbId) {
    $('#' + ionoDcbId).highcharts({
        title: {text: "DCB监控情况图"},
        xAxis: {
            id: 'iono_dcb_prn',
            title: {
                text: 'PRN'
            },
            labels: {
                rotation: -45,
                align: 'right',
                style: {
                    fontSize: '10px'
                }
            },
            categories: []
        },
        yAxis: {
            title: {
                text: 'P1P2 BIAS [ns]'
            },
            id: "p1p2_bias"
        },
        legend: {
            enabled: false
        },
        series: [
            {
                data: [],
                name: "p1p2",
                lineWidth: 1,
                marker: {
                    enabled: true,
                    radius: 6
                }
            },
            {
                data: [],
                name: "bias",
                color: "#333",
                type: 'errorbar'
            }
        ]
    });
}

var initIonoResiChart = function (ionoResiId) {
    $('#' + ionoResiId).highcharts({
        chart: {
            type: 'column',
            animation: true
        },
        title: {text: '电离层解算结果残差分布图'},
        xAxis: {
            title: {
                text: 'interval (TECU)'
            },
            categories: ['-9.5', '-8.5', '-7.5', '-6.5', '-5.5', '-4.5', '-3.5', '-2.5', '-1.5', '-0.5', '0.5', '1.5', '2.5', '3.5', '4.5', '5.5', '6.5', '7.5', '8.5', '9.5']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Frequency distribution of residuals(%)'
            }
        },
        legend: {
            enabled: false
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [
            {
                data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4, 78.8, 98.5, 93.4, 106.0, 84.5, 47.0, 48.3, 59.0]
            }
        ]
    });
}


//刷新DCB图表
var updateIonoDcbChart = function (data) {
    if (!data || data.length <= 0) {
        return;
    }

    $("#gbas_iono_dcb_rms").html("RMS: " + data['mean std'] + " ns");
    var epoch = data.epoch;
    var data = data.data;

    var data1 = [], data2 = [];
    for (var i = 0; i < data.length; i++) {
        var min = (data[i][1] - data[i][2]);
        var max = (data[i][1] + data[i][2]);

        data1.push([data[i][0], (data[i][1])]);
        data2.push([data[i][0], min, max]);
    }

    var chart = $('#gbas_iono_dcb_chart').highcharts();
    chart.series[0].setData(data1);
    chart.series[1].setData(data2);
    if (true) {
        chart.setTitle({text: "DCB 监控情况图"}, {text: "数据时间：" + epoch + " (UTC)"});
    } else {
        chart.setTitle({text: "DCB 监控情况图"}, {text: "数据时间：" + moment(+moment.utc(epoch)).format('YYYY-MM-DD HH:mm:ss')});
    }
    chart.redraw();
}
//刷新Resi图表
var updateIonoResiChart = function (data) {
    if (!data || data.data.length <= 0) {
        return;
    }

    $("#gbas_iono_resi_rms").html("RMS: " + data['std'] + " TECU");
    var epoch = data.epoch;
    var items = [];

    for (var i = 0; i < data.data.length; i++) {
        items.push(data.data[i]);
    }

    var chart = $("#gbas_iono_resi_chart").highcharts();
    chart.series[0].setData(items);
    if (true) {
        chart.setTitle({text: "电离层解算结果残差分布图"}, {text: "数据时间：" + epoch + " (UTC)"});
    } else {
        chart.setTitle({text: "电离层解算结果残差分布图"}, {text: "数据时间：" + moment(+moment.utc(epoch)).format('YYYY-MM-DD HH:mm:ss')});
    }
    chart.redraw();
}