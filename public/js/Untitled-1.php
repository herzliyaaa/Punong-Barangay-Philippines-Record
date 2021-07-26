
<script>
    var barChartData3 = {
        labels: [
            "Adams", "Bacarra",  "Badoc", "Burgos", "Carasi"


        ],
        datasets: [{
                label: "Punong Barangay",
                backgroundColor: "pink",
                borderColor: "red",
                borderWidth: 1,
                data: [
                    <?php echo $adpb['adpb_cnt']; ?>,
                    <?php echo $baccarapb['baccarapb_cnt']; ?>,
                    <?php echo $badocpb['badocpb_cnt']; ?>,
                    <?php echo $burgospb['burgospb_cnt']; ?>,
                    <?php echo $carasipb['carasipb_cnt']; ?>
                ]
            },
            {
                label: "Sangguniang Barangay Member",
                backgroundColor: "lightblue",
                borderColor: "blue",
                borderWidth: 1,
                data: [

                    <?php echo $adamssbm['adamssbm_cnt']; ?>,
                    <?php echo $bacarrasbm['bacarrasbm_cnt']; ?>,
                    <?php echo $badocsbm['badocsbm_cnt']; ?>,
                    <?php echo $burgossbm['burgossbm_cnt']; ?>,
                    <?php echo $carasisbm['carasisbm_cnt']; ?>

                ]
            },
            {
                label: "SK Chairperson",
                backgroundColor: "lightgreen",
                borderColor: "green",
                borderWidth: 1,
                data: [

                    <?php echo $adamssk['adamssk_cnt']; ?>,
                    <?php echo $bacarrask['bacarrask_cnt']; ?>,
                    <?php echo $badocsk['badocsk_cnt']; ?>,
                    <?php echo $burgossk['burgossk_cnt']; ?>,
                    <?php echo $carasisk['carasisk_cnt']; ?>
                ]
            }

        ]
    };

    var chartOptions3 = {
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
        var ctx3 = document.getElementById("bar_ilocos_sur").getContext("2d");
        window.myBar = new Chart(ctx3, {
            type: "bar",
            data: barChartData3,
            options: chartOptions3
        });
    };


   
    
</script>




<script>
    var ilocos_norte_ctx = document.getElementById("bar_ilocos_norte");
    var bar_ilocos_norte = new Chart(ilocos_norte_ctx, {
        type: 'bar',
        data: {

            labels: [ "Adams", "Bacarra",  "Badoc", "Burgos", "Carasi"

            ],

            datasets: [{
                label: "Punong Barangay",
                backgroundColor: "pink",
                borderColor: "red",
                borderWidth: 1,
                data: [
                    <?php echo $adpb['adpb_cnt']; ?>,
                    <?php echo $baccarapb['baccarapb_cnt']; ?>,
                    <?php echo $badocpb['badocpb_cnt']; ?>,
                    <?php echo $burgospb['burgospb_cnt']; ?>,
                    <?php echo $carasipb['carasipb_cnt']; ?>
                ]
            },
            {
                label: "Sangguniang Barangay Member",
                backgroundColor: "lightblue",
                borderColor: "blue",
                borderWidth: 1,
                data: [

                    <?php echo $adamssbm['adamssbm_cnt']; ?>,
                    <?php echo $bacarrasbm['bacarrasbm_cnt']; ?>,
                    <?php echo $badocsbm['badocsbm_cnt']; ?>,
                    <?php echo $burgossbm['burgossbm_cnt']; ?>,
                    <?php echo $carasisbm['carasisbm_cnt']; ?>
                ]
            },
            {
                label: "SK Chairperson",
                backgroundColor: "lightgreen",
                borderColor: "green",
                borderWidth: 1,
                data: [

                    <?php echo $adamssk['adamssk_cnt']; ?>,
                    <?php echo $bacarrask['bacarrask_cnt']; ?>,
                    <?php echo $badocsk['badocsk_cnt']; ?>,
                    <?php echo $burgossk['burgossk_cnt']; ?>,
                    <?php echo $carasisk['carasisk_cnt']; ?>

                ]
            }

        ]
    },

        options: {

            responsive: true,
            maintainAspectRatio: false,


            legend: {
                position: 'right',
                display: true
            },

            scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }

        }
    });






</script>


<script>
    var dashctx4 = document.getElementById("bar_ilocos_sur");
    var bar_ilocos_sur = new Chart(dashctx4, {
        type: 'bar',
        data: {

            labels: [ "Alilem", "Banayoyo", "Burgos", "Cabugao"

            ],

            datasets: [{
                label: "Punong Barangay",
                backgroundColor: "pink",
                borderColor: "red",
                borderWidth: 1,
                data: [
                    <?php echo $alilempb['alilem_pb_cnt']; ?>,
                    <?php echo $banayoyopb['banayoyo_pb_cnt']; ?>,
                    <?php echo $burgospb['burgos_pb_cnt']; ?>,
                    <?php echo $cabugaopb['cabugao_pb_cnt']; ?>
                   
                ]
            },
            {
                label: "Sangguniang Barangay Member",
                backgroundColor: "lightblue",
                borderColor: "blue",
                borderWidth: 1,
                data: [

                    <?php echo $alilemsbm['alilem_sbm_cnt']; ?>,
                    <?php echo $banayoyosbm ['banayoyo_sbm_cnt']; ?>,
                    <?php echo $burgossbm['burgos_smb_cnt']; ?>,
                    <?php echo $cabugaosbm['cabugao_smb_cnt']; ?>
                  
                ]
            },
            {
                label: "SK Chairperson",
                backgroundColor: "lightgreen",
                borderColor: "green",
                borderWidth: 1,
                data: [

                    <?php echo $alilemsk['alilem_sk_cnt']; ?>,
                    <?php echo $banayoyosk['banayoyo_sk_cnt']; ?>,
                    <?php echo $burgossk_is['burgos_sk_cnt']; ?>,
                    <?php echo $cabugaosk['cabugao_sk_cnt']; ?>
                  

                ]
            }

        ]
    },

        options: {

            responsive: true,
            maintainAspectRatio: false,


            legend: {
                position: 'right',
                display: true
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
    });




</script>

