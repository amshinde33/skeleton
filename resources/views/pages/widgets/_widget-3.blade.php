{{-- Stats Widget 7 --}}

<div class="card card-custom {{ @$class }}">
  {{-- Body --}}
  <div class="card-body d-flex flex-column p-0">
    <div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
      <div class="d-flex flex-column mr-2">
        <a href="#" class="text-dark-75 text-hover-primary font-weight-bolder font-size-h5">Monthly Notification</a>
        <span class="text-muted font-weight-bold mt-2">Your Monthly Notification Chart</span>
      </div>
      <span class="symbol symbol-light-success symbol-45">
        <span class="symbol-label font-weight-bolder font-size-h6"><?php echo $push_notification_send_count; ?></span>
      </span>
    </div>
    <div id="kt_stats_widget_7_chart" class="card-rounded-bottom" style="height: 150px">

    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    var _initStatsWidget7 = function _initStatsWidget7() {
      var element = document.getElementById("kt_stats_widget_7_chart");
      var date = <?php echo json_encode($date); ?>;
      var count = <?php echo json_encode($count); ?>;
      if (!element) {
        return;
      }

      var options = {
        series: [{
          name: 'Send Notification',
          data: ['89', '20', '80', '20', '80', '20', '80', '20']
        }],
        chart: {
          type: 'area',
          height: 150,
          toolbar: {
            show: false
          },
          zoom: {
            enabled: false
          },
          sparkline: {
            enabled: true
          }
        },
        plotOptions: {},
        legend: {
          show: false
        },
        dataLabels: {
          enabled: false
        },
        fill: {
          type: 'solid',
          opacity: 1
        },
        stroke: {
          curve: 'smooth',
          show: true,
          width: 3,
          colors: [KTApp.getSettings()['colors']['theme']['base']['success']]
        },
        xaxis: {
          categories:['Feb', 'Mar', 'Apr', 'May', 'Jun'],
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          },
          labels: {
            show: false,
            style: {
              colors: KTApp.getSettings()['colors']['gray']['gray-500'],
              fontSize: '12px',
              fontFamily: KTApp.getSettings()['font-family']
            }
          },
          crosshairs: {
            show: false,
            position: 'front',
            stroke: {
              color: KTApp.getSettings()['colors']['gray']['gray-300'],
              width: 1,
              dashArray: 3
            }
          },
          tooltip: {
            enabled: true,
            formatter: undefined,
            offsetY: 0,
            style: {
              fontSize: '12px',
              fontFamily: KTApp.getSettings()['font-family']
            }
          }
        },
        yaxis: {
          labels: {
            show: false,
            style: {
              colors: KTApp.getSettings()['colors']['gray']['gray-500'],
              fontSize: '12px',
              fontFamily: KTApp.getSettings()['font-family']
            }
          }
        },
        states: {
          normal: {
            filter: {
              type: 'none',
              value: 0
            }
          },
          hover: {
            filter: {
              type: 'none',
              value: 0
            }
          },
          active: {
            allowMultipleDataPointsSelection: false,
            filter: {
              type: 'none',
              value: 0
            }
          }
        },
        tooltip: {
          style: {
            fontSize: '12px',
            fontFamily: KTApp.getSettings()['font-family']
          },
          y: {
            formatter: function formatter(count) {
              return count;
            }
          }
        },
        colors: [KTApp.getSettings()['colors']['theme']['light']['success']],
        markers: {
          colors: [KTApp.getSettings()['colors']['theme']['light']['success']],
          strokeColor: [KTApp.getSettings()['colors']['theme']['base']['success']],
          strokeWidth: 3
        }
      };
      var chart = new ApexCharts(element, options);
      chart.render();
    };
  });
</script>