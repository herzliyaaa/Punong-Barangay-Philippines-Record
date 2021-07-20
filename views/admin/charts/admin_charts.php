<script>
    var dashctx = document.getElementById("dash_Chart");
    var dash_Chart = new Chart(dashctx, {
        type: 'bar',
        data: {

            labels: ["NCR", "CAR", "Region 1", "Region 2", "Region 3", "Region 4A", "Region 4B", "Region 5", "Region 6", "Region 7", "Region 8",
                "Region 9",
                "Region 10", "Region 11", "Region 12", "Region 13", "Barmm"
            ],

            datasets: [{
                label: " Population per Purok",
                data: [

                    <?php echo $ncr_count['ncr_cnt']; ?>,
                    <?php echo $car_count['car_cnt']; ?>,
                    <?php echo $region1_count['region1_cnt']; ?>,
                    <?php echo $region2_count['region2_cnt']; ?>,
                    <?php echo $region3_count['region3_cnt']; ?>,
                    <?php echo $region4a_count['region4a_cnt ']; ?>,
                    <?php echo $region4b_count['region4b_cnt']; ?>,
                    <?php echo $region5_count['region5_cnt']; ?>
                   

                ],

                backgroundColor: [
                    'rgb(246, 66, 66)',
                    'rgb(246, 66, 66)',
                    'rgb(246, 66, 66)',
                    'rgb(246, 66, 66)',
                    'rgb(246, 66, 66)',
                    'rgb(246, 66, 66)',
                    'rgb(246, 66, 66)',
                    'rgb(246, 66, 66)',
                    'rgb(246, 66, 66)',
                    'rgb(246, 66, 66)',
                    'rgb(246, 66, 66)',
                    'rgb(246, 66, 66)',
                    'rgba(54, 162, 235)'
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

            responsive: false,
            maintainAspectRatio: false,


            legend: {
                position: 'top',
                display: true
            }


        },
    });