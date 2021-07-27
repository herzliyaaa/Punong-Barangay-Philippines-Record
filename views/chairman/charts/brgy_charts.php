

<script>
    var barChartData4 = {
        labels: [
            "Alilem Daya (Pob.)", "Amilongan", "Anaao", "Apang", "Apaya", "Batbato", "Daddaay", "Dalawa", "Kiat"

        ],
        datasets: [{
                label: "Punong Barangay",
                backgroundColor: "#73AB84",
                borderColor: "#73AB84",
                borderWidth: 1,
                data: [
                    
                        <?php echo $alilemd_pb_count['alilemd_pb_cnt']; ?>,
                       <?php echo $amilongan_pb_count['amilongan_pb_cnt']; ?>,
                       <?php echo $anaao_pb_count['anaao_pb_cnt']; ?>,
                       <?php echo $apang_pb_count['apang_pb_cnt']; ?>,
                       <?php echo $apaya_pb_count['apaya_pb_cnt']; ?>,
                       <?php echo $batbato_pb_count['batbato_pb_cnt']; ?>,
                       <?php echo $daddaay_pb_count['daddaay_pb_cnt']; ?>,
                       <?php echo $dalawa_pb_count['dalawa_pb_cnt']; ?>,
                       <?php echo $kiat_pb_count['kiat_pb_cnt']; ?>
                      
                ]
            },
            {
                label: "Sangguniang Barangay Member",
                backgroundColor: "#507DBC",
                borderColor: "#507DBC",
                borderWidth: 1,
                data: [<?php echo $alilemd_sbm_count['alilemd_sbm_cnt']; ?>,
                       <?php echo $amilongan_sbm_count['amilongan_sbm_cnt']; ?>,
                       <?php echo $anaao_sbm_count['anaao_sbm_cnt']; ?>,
                       <?php echo $apang_sbm_count['apang_sbm_cnt']; ?>,
                       <?php echo $apaya_sbm_count['apaya_sbm_cnt']; ?>,
                       <?php echo $batbato_sbm_count['batbato_sbm_cnt']; ?>,
                       <?php echo $daddaay_sbm_count['daddaay_sbm_cnt']; ?>,
                       <?php echo $dalawa_sbm_count['dalawa_sbm_cnt']; ?>,
                       <?php echo $kiat_sbm_count['kiat_sbm_cnt']; ?>
                      
                    
                    ]
            },
            {
                label: "SK Chairperson",
                backgroundColor: "#EFC88B",
                borderColor: "#EFC88B",
                borderWidth: 1,
                data: [
                    
                        <?php echo $alilemd_sk_count['alilemd_sk_cnt']; ?>,
                       <?php echo $amilongan_sk_count['amilongan_sk_cnt']; ?>,
                       <?php echo $anaao_sk_count['anaao_sk_cnt']; ?>,
                       <?php echo $apang_sk_count['apang_sk_cnt']; ?>,
                       <?php echo $apaya_sk_count['apaya_sk_cnt']; ?>,
                       <?php echo $batbato_sk_count['batbato_sk_cnt']; ?>,
                       <?php echo $daddaay_sk_count['daddaay_sk_cnt']; ?>,
                       <?php echo $dalawa_sk_count['dalawa_sk_cnt']; ?>,
                       <?php echo $kiat_sk_count['kiat_sk_cnt']; ?>
                      
                      
                    
                    
                    ]
            }

        ]
    };

    var chartOptions4 = {
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
        var alctx = document.getElementById("canvas_alilem").getContext("2d");
        window.myBar = new Chart(alctx, {
            type: "bar",
            data: barChartData4,
            options: chartOptions4
        });
    };
</script>


