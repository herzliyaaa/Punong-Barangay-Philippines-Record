


<script>
    var dashctx = document.getElementById("canvas1");
    var canvas1 = new Chart(dashctx, {
        type: 'pie',
        data: {

            labels: [ "Ilocos Sur", "Ilocos Norte",  "Pangasinan", "La Union"

            ],

            datasets: [{
                label: " Barangay Officials Population per Region",
                data: [
                    <?php echo $is_count['is_cnt']; ?>,
                    <?php echo $in_count['in_cnt']; ?>,    
                    <?php echo $pa_count['pa_cnt']; ?>,
                    <?php echo $la_count['la_cnt']; ?>



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
    var dashctx2 = document.getElementById("canvas2");
    var canvas2 = new Chart(dashctx2, {
        type: 'bar',
        data: {

            labels: [ "Ilocos Sur", "Ilocos Norte",  "Pangasinan", "La Union"

            ],

            datasets: [{
                label: "Punong Barangay",
                backgroundColor: "#73AB84",
                borderColor: "#73AB84",
                borderWidth: 1,
                data: [
                    <?php echo $in['in_pb_cnt']; ?>,
                    <?php echo $is['is_pb_cnt']; ?>,
                    <?php echo $pa['pa_pb_cnt']; ?>,
                    <?php echo $la['la_pb_cnt']; ?>
                   
                ]
            },
            {
                label: "Sangguniang Barangay Member",
                backgroundColor: "#507DBC",
                borderColor: "#507DBC",
                borderWidth: 1,
                data: [

                    <?php echo $a['a_cnt']; ?>,
                    <?php echo $b['b_cnt']; ?>,
                    <?php echo $c['c_cnt']; ?>,
                    <?php echo $d['d_cnt']; ?>

                ]
            },
            {
                label: "SK Chairperson",
                backgroundColor: "#EFC88B",
                borderColor: "#EFC88B",
                borderWidth: 1,
                data: [

                    <?php echo $e['ilocos_n_sk_cnt']; ?>,
                    <?php echo $f['ilocos_s_sk_cnt']; ?>,
                    <?php echo $g['pangasinan_sk_cnt']; ?>,
                    <?php echo $h['la_union_sk_cnt']; ?>

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

