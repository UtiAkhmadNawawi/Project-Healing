"use strict";
! function (NioApp, $) {
    var analyticAuData = {
        labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan", "13 Jan", "14 Jan", "15 Jan", "16 Jan", "17 Jan", "18 Jan", "19 Jan", "20 Jan", "21 Jan", "22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan"],
        dataUnit: "Revenue",
        lineTension: .1,
        datasets: [{
            label: "Revenue",
            color: "#9cabff",
            background: "#9cabff",
            data: [1110, 1220, 1310, 980, 900, 770, 1060, 830, 690, 730, 790, 950, 1100, 800, 1250, 850, 950, 450, 900, 1e3, 1200, 1250, 900, 950, 1300, 1200, 1250, 650, 950, 750]
        }]
    };

    function analyticsAu(selector, set_data) {
        var $selector = $(selector || ".analytics-au-chart");
        $selector.each(function () {
            for (var $self = $(this), _self_id = $self.attr("id"), _get_data = void 0 === set_data ? eval(_self_id) : set_data, selectCanvas = document.getElementById(_self_id).getContext("2d"), chart_data = [], i = 0; i < _get_data.datasets.length; i++) chart_data.push({
                label: _get_data.datasets[i].label,
                tension: _get_data.lineTension,
                backgroundColor: _get_data.datasets[i].background,
                borderWidth: 2,
                borderColor: _get_data.datasets[i].color,
                data: _get_data.datasets[i].data,
                barPercentage: .7,
                categoryPercentage: .7
            });
            var chart = new Chart(selectCanvas, {
                type: "bar",
                data: {
                    labels: _get_data.labels,
                    datasets: chart_data
                },
                options: {
                    legend: {
                        display: _get_data.legend || !1,
                        labels: {
                            boxWidth: 12,
                            padding: 20,
                            fontColor: "#6783b8"
                        }
                    },
                    maintainAspectRatio: !1,
                    tooltips: {
                        enabled: !0,
                        rtl: NioApp.State.isRTL,
                        callbacks: {
                            title: function (a, t) {
                                return !1
                            },
                            label: function (a, t) {
                                return t.datasets[a.datasetIndex].data[a.index]
                            }
                        },
                        backgroundColor: "#eff6ff",
                        titleFontSize: 9,
                        titleFontColor: "#6783b8",
                        titleMarginBottom: 6,
                        bodyFontColor: "#9eaecf",
                        bodyFontSize: 9,
                        bodySpacing: 4,
                        yPadding: 6,
                        xPadding: 6,
                        footerMarginTop: 0,
                        displayColors: !1
                    },
                    scales: {
                        yAxes: [{
                            display: !0,
                            position: NioApp.State.isRTL ? "right" : "left",
                            ticks: {
                                beginAtZero: !1,
                                fontSize: 12,
                                fontColor: "#9eaecf",
                                padding: 0,
                                display: !1,
                                stepSize: 300
                            },
                            gridLines: {
                                color: NioApp.hexRGB("#526484", .2),
                                tickMarkLength: 0,
                                zeroLineColor: NioApp.hexRGB("#526484", .2)
                            }
                        }],
                        xAxes: [{
                            display: !1,
                            ticks: {
                                fontSize: 12,
                                fontColor: "#9eaecf",
                                source: "auto",
                                padding: 0,
                                reverse: NioApp.State.isRTL
                            },
                            gridLines: {
                                color: "transparent",
                                tickMarkLength: 0,
                                zeroLineColor: "transparent",
                                offsetGridLines: !0
                            }
                        }]
                    }
                }
            })
        })
    }
    NioApp.coms.docReady.push(function () {
        analyticsAu()
    });
    var analyticOvData = {
        labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan", "13 Jan", "14 Jan", "15 Jan", "16 Jan", "17 Jan", "18 Jan", "19 Jan", "20 Jan", "21 Jan", "22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan"],
        dataUnit: "People",
        lineTension: .1,
        datasets: [{
            label: "Current Month",
            color: "#e85347",
            dash: [5],
            background: "transparent",
            data: [3910, 4420, 4110, 5180, 4400, 5170, 6460, 8830, 5290, 5430, 4690, 4350, 4600, 5200, 5650, 6850, 6950, 4150, 4300, 6e3, 6800, 2250, 6900, 7950, 6900, 4200, 6250, 7650, 8950, 9750]
        }, {
            label: "Current Month",
            color: "#798bff",
            dash: 0,
            background: NioApp.hexRGB("#798bff", .15),
            data: [4110, 4220, 4810, 5480, 4600, 5670, 6660, 4830, 5590, 5730, 4790, 4950, 5100, 5800, 5950, 5850, 5950, 4450, 4900, 8e3, 7200, 7250, 7900, 8950, 6300, 7200, 7250, 7650, 6950, 4750]
        }]
    };

    function analyticsLineLarge(selector, set_data) {
        var $selector = $(selector || ".analytics-line-large");
        $selector.each(function () {
            for (var $self = $(this), _self_id = $self.attr("id"), _get_data = void 0 === set_data ? eval(_self_id) : set_data, selectCanvas = document.getElementById(_self_id).getContext("2d"), chart_data = [], i = 0; i < _get_data.datasets.length; i++) chart_data.push({
                label: _get_data.datasets[i].label,
                tension: _get_data.lineTension,
                backgroundColor: _get_data.datasets[i].background,
                borderWidth: 2,
                borderDash: _get_data.datasets[i].dash,
                borderColor: _get_data.datasets[i].color,
                pointBorderColor: "transparent",
                pointBackgroundColor: "transparent",
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor: _get_data.datasets[i].color,
                pointBorderWidth: 2,
                pointHoverRadius: 4,
                pointHoverBorderWidth: 2,
                pointRadius: 4,
                pointHitRadius: 4,
                data: _get_data.datasets[i].data
            });
            var chart = new Chart(selectCanvas, {
                type: "line",
                data: {
                    labels: _get_data.labels,
                    datasets: chart_data
                },
                options: {
                    legend: {
                        display: _get_data.legend || !1,
                        labels: {
                            boxWidth: 12,
                            padding: 20,
                            fontColor: "#6783b8"
                        }
                    },
                    maintainAspectRatio: !1,
                    tooltips: {
                        enabled: !0,
                        rtl: NioApp.State.isRTL,
                        callbacks: {
                            title: function (a, t) {
                                return t.labels[a[0].index]
                            },
                            label: function (a, t) {
                                return t.datasets[a.datasetIndex].data[a.index]
                            }
                        },
                        backgroundColor: "#fff",
                        borderColor: "#eff6ff",
                        borderWidth: 2,
                        titleFontSize: 13,
                        titleFontColor: "#6783b8",
                        titleMarginBottom: 6,
                        bodyFontColor: "#9eaecf",
                        bodyFontSize: 12,
                        bodySpacing: 4,
                        yPadding: 10,
                        xPadding: 10,
                        footerMarginTop: 0,
                        displayColors: !1
                    },
                    scales: {
                        yAxes: [{
                            display: !0,
                            position: NioApp.State.isRTL ? "right" : "left",
                            ticks: {
                                beginAtZero: !0,
                                fontSize: 12,
                                fontColor: "#9eaecf",
                                padding: 8,
                                stepSize: 2400
                            },
                            gridLines: {
                                color: NioApp.hexRGB("#526484", .2),
                                tickMarkLength: 0,
                                zeroLineColor: NioApp.hexRGB("#526484", .2)
                            }
                        }],
                        xAxes: [{
                            display: !1,
                            ticks: {
                                fontSize: 12,
                                fontColor: "#9eaecf",
                                source: "auto",
                                padding: 0,
                                reverse: NioApp.State.isRTL
                            },
                            gridLines: {
                                color: "transparent",
                                tickMarkLength: 0,
                                zeroLineColor: "transparent",
                                offsetGridLines: !0
                            }
                        }]
                    }
                }
            })
        })
    }
    NioApp.coms.docReady.push(function () {
        analyticsLineLarge()
    });
    var BookingData = {
        labels: ["Single", "Double", "Dlux", "Suit"],
        dataUnit: "People",
        legend: !1,
        datasets: [{
            borderColor: "#fff",
            background: ["#798bff", "#1ee0ac", "#f9db7b", "#ffa353"],
            data: [3305, 859, 482, 138]
        }]
    };

    function analyticsDoughnut(selector, set_data) {
        var $selector = $(selector || ".analytics-doughnut");
        $selector.each(function () {
            for (var $self = $(this), _self_id = $self.attr("id"), _get_data = void 0 === set_data ? eval(_self_id) : set_data, selectCanvas = document.getElementById(_self_id).getContext("2d"), chart_data = [], i = 0; i < _get_data.datasets.length; i++) chart_data.push({
                backgroundColor: _get_data.datasets[i].background,
                borderWidth: 2,
                borderColor: _get_data.datasets[i].borderColor,
                hoverBorderColor: _get_data.datasets[i].borderColor,
                data: _get_data.datasets[i].data
            });
            var chart = new Chart(selectCanvas, {
                type: "doughnut",
                data: {
                    labels: _get_data.labels,
                    datasets: chart_data
                },
                options: {
                    legend: {
                        display: _get_data.legend || !1,
                        labels: {
                            boxWidth: 12,
                            padding: 20,
                            fontColor: "#6783b8"
                        }
                    },
                    rotation: -1.5,
                    cutoutPercentage: 70,
                    maintainAspectRatio: !1,
                    tooltips: {
                        enabled: !0,
                        rtl: NioApp.State.isRTL,
                        callbacks: {
                            title: function (a, t) {
                                return t.labels[a[0].index]
                            },
                            label: function (a, t) {
                                return t.datasets[a.datasetIndex].data[a.index] + " " + _get_data.dataUnit
                            }
                        },
                        backgroundColor: "#fff",
                        borderColor: "#eff6ff",
                        borderWidth: 2,
                        titleFontSize: 13,
                        titleFontColor: "#6783b8",
                        titleMarginBottom: 6,
                        bodyFontColor: "#9eaecf",
                        bodyFontSize: 12,
                        bodySpacing: 4,
                        yPadding: 10,
                        xPadding: 10,
                        footerMarginTop: 0,
                        displayColors: !1
                    }
                }
            })
        })
    }
    NioApp.coms.docReady.push(function () {
        analyticsDoughnut()
    });
    var totalRoom = {
        labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan"],
        dataUnit: "Room",
        stacked: !0,
        datasets: [{
            label: "User",
            color: [NioApp.hexRGB("#6576ff", .2), NioApp.hexRGB("#6576ff", .2), NioApp.hexRGB("#6576ff", .2), NioApp.hexRGB("#6576ff", .2), NioApp.hexRGB("#6576ff", .2), NioApp.hexRGB("#6576ff", .2), "#6576ff"],
            data: [12, 15, 6, 5, 15, 7, 8]
        }]
    },
        totalBooking = {
            labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan"],
            dataUnit: "Room",
            stacked: !0,
            datasets: [{
                label: "User",
                color: [NioApp.hexRGB("#816bff", .2), NioApp.hexRGB("#816bff", .2), NioApp.hexRGB("#816bff", .2), NioApp.hexRGB("#816bff", .2), NioApp.hexRGB("#816bff", .2), NioApp.hexRGB("#816bff", .2), "#816bff"],
                data: [120, 150, 80, 69, 50, 105, 75]
            }]
        },
        totalExpenses = {
            labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan"],
            dataUnit: "USD",
            stacked: !0,
            datasets: [{
                label: "Expenses",
                color: [NioApp.hexRGB("#559bfb", .2), NioApp.hexRGB("#559bfb", .2), NioApp.hexRGB("#559bfb", .2), NioApp.hexRGB("#559bfb", .2), NioApp.hexRGB("#559bfb", .2), NioApp.hexRGB("#559bfb", .2), "#559bfb"],
                data: [600, 700, 800, 500, 600, 500, 1200]
            }]
        };

    function ivDataChart(selector, set_data) {
        var $selector = $(selector || ".iv-data-chart");
        $selector.each(function () {
            for (var $self = $(this), _self_id = $self.attr("id"), _get_data = void 0 === set_data ? eval(_self_id) : set_data, _d_legend = void 0 !== _get_data.legend && _get_data.legend, selectCanvas = document.getElementById(_self_id).getContext("2d"), chart_data = [], i = 0; i < _get_data.datasets.length; i++) chart_data.push({
                label: _get_data.datasets[i].label,
                data: _get_data.datasets[i].data,
                backgroundColor: _get_data.datasets[i].color,
                borderWidth: 2,
                borderColor: "transparent",
                hoverBorderColor: "transparent",
                borderSkipped: "bottom",
                barPercentage: .7,
                categoryPercentage: .7
            });
            var chart = new Chart(selectCanvas, {
                type: "bar",
                data: {
                    labels: _get_data.labels,
                    datasets: chart_data
                },
                options: {
                    legend: {
                        display: _get_data.legend || !1,
                        labels: {
                            boxWidth: 30,
                            padding: 20,
                            fontColor: "#6783b8"
                        }
                    },
                    maintainAspectRatio: !1,
                    tooltips: {
                        enabled: !0,
                        rtl: NioApp.State.isRTL,
                        callbacks: {
                            title: function (a, t) {
                                return !1
                            },
                            label: function (a, t) {
                                return t.labels[a.index] + " " + t.datasets[a.datasetIndex].data[a.index]
                            }
                        },
                        backgroundColor: "#eff6ff",
                        titleFontSize: 11,
                        titleFontColor: "#6783b8",
                        titleMarginBottom: 4,
                        bodyFontColor: "#9eaecf",
                        bodyFontSize: 10,
                        bodySpacing: 3,
                        yPadding: 8,
                        xPadding: 8,
                        footerMarginTop: 0,
                        displayColors: !1
                    },
                    scales: {
                        yAxes: [{
                            display: !1,
                            stacked: _get_data.stacked || !1,
                            ticks: {
                                beginAtZero: !0
                            }
                        }],
                        xAxes: [{
                            display: !1,
                            stacked: _get_data.stacked || !1,
                            ticks: {
                                reverse: NioApp.State.isRTL
                            }
                        }]
                    }
                }
            })
        })
    }
    NioApp.coms.docReady.push(function () {
        ivDataChart()
    })
}(NioApp, jQuery);
