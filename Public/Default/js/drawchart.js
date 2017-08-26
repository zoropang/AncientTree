function draw_chart(id, unit, data, type_name)
{
    var myChart = echarts.init(document.getElementById(id));
    //配置
    option = {
        tooltip: {
            trigger: 'axis',
            // formatter: function (params) {
            //     //params = params[0];
            //     //var date = new Date(params.name);
            //     //return date.getDate() + '/' + (date.getMonth() + 1) + '/' + date.getFullYear() + ' : ' + params.value[1];
            //     return params.value[0] + ' : ' + params.value[1];
            // },
            axisPointer: {
                animation: false
            }
        },
        grid: {
                    left:50,
                    right:30
            },
        xAxis: {
            type: 'time',
            splitLine: {
                show: false
            }
        },
        yAxis: {
            type: 'value',
            boundaryGap: [0, '80%'],
            name: '单位:'+unit,
            splitLine: {
                show: false
            }
        },
        series: [{
            name: type_name,
            type: 'line',
            showSymbol: false,
            hoverAnimation: false,
            data: data
        }]
    };

    //更新数据
    setInterval(function () {
    
        reqUrl = "http://localhost/AncientTree/index.php?m=Home&c=GetData&a=index";
        $.get(reqUrl, function (res, status) {
            var obj = eval ("(" + res + ")");
            newdata  = {
                value: [
                    obj.date,
                    Math.round(obj.data)
                ]
            };

            if(data.length > 100)
              data.shift();
            data.push(newdata);
            

            myChart.setOption({
                series: [{
                    data: data
                }]
            });
        });

    }, 1000);

    //关联配置
    myChart.setOption(option);
}


function draw_chart_2lines(id, unit1, data1, type_name1, unit2, data2, type_name2)
{
    var myChart = echarts.init(document.getElementById(id));
    //配置
    option = {
        tooltip: {
            trigger: 'axis',
            // formatter: function (params) {
            //     //params = params[0];
            //     //var date = new Date(params.name);
            //     //return date.getDate() + '/' + (date.getMonth() + 1) + '/' + date.getFullYear() + ' : ' + params.value[1];
            //     return params.value[0] + ' : ' + params.value[1];
            // },
            axisPointer: {
                animation: false
            }
        },
        legend: {
        data:[type_name1,type_name2],
        x: 'center'
        },
        grid: {
                    left:50,
                    right:50
            },
        xAxis: {
            type: 'time',
            splitLine: {
                show: false
            }
        },
        yAxis: [{
                type: 'value',
                boundaryGap: [0, '80%'],
                name: '单位:'+unit1,
                splitLine: {
                    show: false
                }
            },
            {
                type: 'value',
                boundaryGap: [10, '80%'],
                name: '单位:'+unit2,
                splitLine: {
                    show: false
                },
                //inverse: true,
                //nameLocation: 'start'
            }
        ],
        series: [{
            name: type_name1,
            type: 'line',
            showSymbol: false,
            hoverAnimation: false,
            data: data1
        },
        {
            name: type_name2,
            type: 'line',
            yAxisIndex:1,
            showSymbol: false,
            hoverAnimation: false,
            data: data2
        },
        ]
    };

    //更新数据
    setInterval(function () {
    
        reqUrl = "http://localhost/AncientTree/index.php?m=Home&c=GetData&a=index2";
        $.get(reqUrl, function (res, status) {
            var obj = eval ("(" + res + ")");
            newdata1  = {
                value: [
                    obj.date,
                    Math.round(obj.data1)
                ]
            };

            newdata2  = {
                value: [
                    obj.date,
                    Math.round(obj.data2)
                ]
            };

            if(data1.length > 100)
            {
                data1.shift();
                data2.shift();
            }
              
            data1.push(newdata1);
            data2.push(newdata2);
            

            myChart.setOption({
                series: [{
                    data: data1
                },{
                    data: data2
                }]
            });
        });

    }, 1000);

    //关联配置
    myChart.setOption(option);
}













