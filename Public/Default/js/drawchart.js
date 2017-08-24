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