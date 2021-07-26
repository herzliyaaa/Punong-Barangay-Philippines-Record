
<script>
    var dashctx3 = document.getElementById("pie_ilocos_sur");
    var pie_ilocos_sur = new Chart(dashctx3, {
        type: 'pie',
        data: {

            labels: [ "Alilem", "Banayoyo", "Burgos", "Cabugao", "Cervantes"

            ],

            datasets: [{
                label: " Barangay Officials Population per Province",
                data: [

                    <?php echo $alilem_count['alilem_cnt']; ?>,
                    <?php echo $banayoyo_count['banayoyo_cnt']; ?>,
                    <?php echo $burgos_count['burgos_cnt']; ?>,
                    <?php echo $cabugao_count['cabugao_cnt']; ?>,
                    <?php echo $cervantes_count['cervantes_cnt']; ?>



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
    var dashctx4 = document.getElementById("bar_ilocos_sur");
    var bar_ilocos_sur = new Chart(dashctx4, {
        type: 'bar',
        data: {

            labels: [ "Alilem", "Banayoyo", "Burgos", "Cabugao", "Cervantes"

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
                    <?php echo $cabugaopb['cabugao_pb_cnt']; ?>,
                   
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