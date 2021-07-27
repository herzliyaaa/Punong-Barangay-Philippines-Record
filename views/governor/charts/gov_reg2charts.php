
<script>
    var dashreg2ctx = document.getElementById("canvas3");
    var canvas3 = new Chart(dashreg2ctx, {
        type: 'pie',
        data: {

            labels: [ "Cagayan", "Quirino", "Nueva Vizcaya", "Isabela", "Batanes"

            ],

            datasets: [{
                label: " Barangay Officials Population per Province",
                data: [

                    <?php echo $cag_count['cag_cnt']; ?>,
                    <?php echo $qu_count['qu_cnt']; ?>,
                    <?php echo $nv_count['nv_cnt']; ?>,
                    <?php echo $isabela_count['isabela_cnt']; ?>,
                    <?php echo $batanes_count['batanes_cnt']; ?>



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
            animation: {
            duration: 0 // general animation time
        },
        hover: {
            animationDuration: 0 // duration of animations when hovering an item
        },
       
   
            responsive: true,
            maintainAspectRatio: false,

        },
            legend: {
                position: 'right',
                display: true
            }


       
    });


</script>

<script>
    var barChartData2 = {
        labels: [
            "Cagayan", "Quirino", "Nueva Vizcaya", "Isabela", "Batanes"

        ],
        datasets: [{
                label: "Punong Barangay",
                backgroundColor: "#73AB84",
                borderColor: "#73AB84",
                borderWidth: 1,
                data: [
                    <?php echo $cagpb['cagayan_pb_cnt']; ?>,
                    <?php echo $qupb['quirino_pb_cnt']; ?>,
                    <?php echo $nvpb['nv_pb_cnt']; ?>,
                    <?php echo $isabelapb['isabela_pb_cnt']; ?>,
                    <?php echo $batanespb['batanes_pb_cnt']; ?>
                ]
            },
            {
                label: "Sangguniang Barangay Member",
                backgroundColor: "#507DBC",
                borderColor: "#507DBC",
                borderWidth: 1,
                data: [

                    <?php echo $cagsbm['cagayan_sbm_cnt']; ?>,
                    <?php echo $qusbm ['quirino_sbm_cnt']; ?>,
                    <?php echo $nvsbm['nv_smb_cnt']; ?>,
                    <?php echo $isabelasbm['isabela_smb_cnt']; ?>,
                    <?php echo $batanessbm['batanes_smb_cnt']; ?>

                ]
            },
            {
                label: "SK Chairperson",
                backgroundColor: "#EFC88B",
                borderColor: "#EFC88B",
                borderWidth: 1,
                data: [

                    <?php echo $cagsk['cagayan_sk_cnt']; ?>,
                    <?php echo $qusk['quirino_sk_cnt']; ?>,
                    <?php echo $nvsk['nv_sk_cnt']; ?>,
                    <?php echo $isabelask['isabela_sk_cnt']; ?>,
                    <?php echo $batanessk['batanes_sk_cnt']; ?>
                ]
            }

        ]
    };

    var chartOptions2 = {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            position: "bottom"
        },

        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    maxRotation: 0,
                    autoSkip: true,
                }
            }]
        }
    }

    window.onload = function() {
        var ctx2 = document.getElementById("canvas4").getContext("2d");
        window.myBar = new Chart(ctx2, {
            type: "bar",
            data: barChartData2,
            options: chartOptions2
        });
    };


   
    
</script>