<script>
    var dashctx = document.getElementById("dash_Chart");
    var dash_Chart = new Chart(dashctx, {
        type: 'pie',
        data: {

            labels: ["NCR", "CAR", "Region 1", "Region 2", "Region 3", "Region 4A", "Region 5", "Region 6", "Region 7","Region 8", 
            "Region 9",  "Region 10",  "Region 11", "Region 12", "CARAGA", "MIMAROPA", "ARMM"
        ],

            datasets: [{
                label: " Barangay Officials Population per Region",
                data: [

                    <?php echo $ncr_count['ncr_cnt']; ?>,
                    <?php echo $car_count['car_cnt']; ?>,
                    <?php echo $region1_count['region1_cnt']; ?>,
                    <?php echo $region2_count['region2_cnt']; ?>,
                    <?php echo $region3_count['region3_cnt']; ?>,
                    <?php echo $region4a_count['region4a_cnt']; ?>,
                    <?php echo $region5_count['region5_cnt']; ?>,
                    <?php echo $region6_count['region6_cnt']; ?>,
                    <?php echo $region7_count['region7_cnt']; ?>,
                    <?php echo $region8_count['region8_cnt']; ?>,
                    <?php echo $region9_count['region9_cnt']; ?>,
                    <?php echo $region10_count['region10_cnt']; ?>,
                    <?php echo $region11_count['region11_cnt']; ?>,
                    <?php echo $region12_count['region12_cnt']; ?>,
                    <?php echo $caraga_count['caraga_cnt']; ?>,
                    <?php echo $mima_count['mima_cnt']; ?>,
                    <?php echo $armm_count['armm_cnt']; ?>
                    


                ],

                backgroundColor: [
                    // '#0B132B',
                    // '#5BC0BE',
                    // '#3A506B',
                    // '#F87060',
                    '#d9ed92',
                    '#b5e48c',
                    '#99d98c',
                    '#76c893',
                    '#52b69a',
                    '#34a0a4',
                    '#168aad',
                    '#1e6091',
                    '#184e77',
                    '#dab785',
                    '#d5896f',
                    '#fbd1a2',
                    '#a06cd5',
                    '#7251b5',
                    '#788bff',
                    '#6a4c93',
                    '#390099'

                ],

                borderColor: [
                    'rgba(54, 162, 235)',
                    'rgba(54, 162, 235)',
                    'rgba(54, 162, 235)',
                    'rgba(54, 162, 235)',
                    'rgba(54, 162, 235)',
                    'rgba(54, 162, 235)',
                    'rgba(54, 162, 235)',
                    'rgba(54, 162, 235)',
                    'rgba(54, 162, 235)',
                    'rgba(54, 162, 235)',
                    'rgba(54, 162, 235)',
                    'rgba(54, 162, 235)',
                    'rgba(54, 162, 235)'

                ],

                borderColor: "transparent"
            }]
        },
        options: {

            responsive: true,
            maintainAspectRatio: false,


            legend: {
                position: 'right',
                display: true
            }


        },
    });
</script>


<script>
    var barChartData = {
        labels: [
            "NCR", "CAR", "Region 1", "Region 2", "Region 3", "Region 4A", "Region 5", "Region 6", "Region 7", "Region 8",
            "Region 9",
            "Region 10", "Region 11", "Region 12", "CARAGA", "MIMAROPA", "ARMM"

        ],
        datasets: [{
                label: "Punong Barangay",
                backgroundColor: "pink",
                borderColor: "red",
                borderWidth: 1,
                data: [<?php echo $ncr_pb_count['ncr_pb_cnt']; ?>,
                       <?php echo $car_pb_count['car_pb_cnt']; ?>,
                       <?php echo $region1_pb_count['region1_pb_cnt']; ?>,
                       <?php echo $region2_pb_count['region2_pb_cnt']; ?>,
                       <?php echo $region3_pb_count['region3_pb_cnt']; ?>,
                       <?php echo $region4a_pb_count['region4a_pb_cnt']; ?>,
                       <?php echo $region5_pb_count['region5_pb_cnt']; ?>,
                       <?php echo $region6_pb_count['region6_pb_cnt']; ?>,
                       <?php echo $region7_pb_count['region7_pb_cnt']; ?>,
                       <?php echo $region8_pb_count['region8_pb_cnt']; ?>,
                       <?php echo $region9_pb_count['region9_pb_cnt']; ?>,
                       <?php echo $region10_pb_count['region10_pb_cnt']; ?>,
                       <?php echo $region11_pb_count['region11_pb_cnt']; ?>,
                       <?php echo $region12_pb_count['region12_pb_cnt']; ?>,
                       <?php echo $caraga_pb_count['caraga_pb_cnt']; ?>,
                       <?php echo $mimaropa_pb_count['mimaropa_pb_cnt']; ?>,
                       <?php echo $armm_pb_count['armm_pb_cnt']; ?>
                ]
            },
            {
                label: "Sangguniang Barangay Member",
                backgroundColor: "lightblue",
                borderColor: "blue",
                borderWidth: 1,
                data: [<?php echo $ncr_sbm_count['ncr_sbm_cnt']; ?>,
                       <?php echo $car_sbm_count['car_sbm_cnt']; ?>,
                       <?php echo $region1_sbm_count['region1_sbm_cnt']; ?>,
                       <?php echo $region2_sbm_count['region2_sbm_cnt']; ?>,
                       <?php echo $region3_sbm_count['region3_sbm_cnt']; ?>,
                       <?php echo $region4a_sbm_count['region4a_sbm_cnt']; ?>,
                       <?php echo $region5_sbm_count['region5_sbm_cnt']; ?>,
                       <?php echo $region6_sbm_count['region6_sbm_cnt']; ?>,
                       <?php echo $region7_sbm_count['region7_sbm_cnt']; ?>,
                       <?php echo $region8_sbm_count['region8_sbm_cnt']; ?>,
                       <?php echo $region9_sbm_count['region9_sbm_cnt']; ?>,
                       <?php echo $region10_sbm_count['region10_sbm_cnt']; ?>,
                       <?php echo $region11_sbm_count['region11_sbm_cnt']; ?>,
                       <?php echo $region12_sbm_count['region12_sbm_cnt']; ?>,
                       <?php echo $caraga_sbm_count['caraga_sbm_cnt']; ?>,
                       <?php echo $mimaropa_sbm_count['mimaropa_sbm_cnt']; ?>,
                       <?php echo $armm_sbm_count['armm_sbm_cnt']; ?>]
            },
            {
                label: "SK Chairperson",
                backgroundColor: "lightgreen",
                borderColor: "green",
                borderWidth: 1,
                data: [<?php echo $ncr_sk_count['ncr_sk_cnt']; ?>,
                       <?php echo $car_sk_count['car_sk_cnt']; ?>,
                       <?php echo $region1_sk_count['region1_sk_cnt']; ?>,
                       <?php echo $region2_sk_count['region2_sk_cnt']; ?>,
                       <?php echo $region3_sk_count['region3_sk_cnt']; ?>,
                       <?php echo $region4a_sk_count['region4a_sk_cnt']; ?>,
                       <?php echo $region5_sk_count['region5_sk_cnt']; ?>,
                       <?php echo $region6_sk_count['region6_sk_cnt']; ?>,
                       <?php echo $region7_sk_count['region7_sk_cnt']; ?>,
                       <?php echo $region8_sk_count['region8_sk_cnt']; ?>,
                       <?php echo $region9_sk_count['region9_sk_cnt']; ?>,
                       <?php echo $region10_sk_count['region10_sk_cnt']; ?>,
                       <?php echo $region11_sk_count['region11_sk_cnt']; ?>,
                       <?php echo $region12_sk_count['region12_sk_cnt']; ?>,
                       <?php echo $caraga_sk_count['caraga_sk_cnt']; ?>,
                       <?php echo $mimaropa_sk_count['mimaropa_sk_cnt']; ?>,
                       <?php echo $armm_sk_count['armm_sk_cnt']; ?>]
            }

        ]
    };

    var chartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            position: "bottom"
        },
        
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }

    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: "bar",
            data: barChartData,
            options: chartOptions
        });
    };
</script>