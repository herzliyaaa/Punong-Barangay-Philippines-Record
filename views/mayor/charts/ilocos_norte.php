<script>
    var dashctx = document.getElementById("pie_ilocos_norte");
    var pie_ilocos_norte = new Chart(dashctx, {
        type: 'pie',
        data: {

            labels: ["Adams", "Bacarra", "Badoc", "Burgos", "Carasi"

            ],

            datasets: [{
                label: " Barangay Officials Population per Region",
                data: [
                    <?php echo $adams_count['adams_cnt']; ?>,
                    <?php echo $bacarra_count['bacarra_cnt']; ?>,
                    <?php echo $badoc_count['badoc_cnt']; ?>,
                    <?php echo $burgos_count['burgos_cnt']; ?>,
                    <?php echo $carasi_count['carasi_cnt']; ?>


                ],

                backgroundColor: [

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
            duration: 2 // general animation time
        },
        hover: {
            animationDuration: 2 // duration of animations when hovering an item
        },
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
    var ilocos_norte_ctx = document.getElementById("bar_ilocos_norte");
    var bar_ilocos_norte = new Chart(ilocos_norte_ctx, {
        type: 'bar',
        data: {

            labels: [ "Adams", "Bacarra",  "Badoc", "Burgos", "Carasi"

            ],

            datasets: [{
                label: "Punong Barangay",
                backgroundColor: "#73AB84",
                borderColor: "#73AB84",
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
                backgroundColor: "#507DBC",
                borderColor: "#507DBC",
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
                backgroundColor: "#EFC88B",
                borderColor: "#EFC88B",
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
                    beginAtZero: true,
                    maxRotation: 0,
                    autoSkip: true
                }
            }]
        }

        }
    });






</script>

