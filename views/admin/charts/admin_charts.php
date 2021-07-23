<script>
    var dashctx = document.getElementById("dash_Chart");
    var dash_Chart = new Chart(dashctx, {
        type: 'bar',
        data: {

            labels: ["NCR", "CAR", "Region 1", "Region 2", "Region 3", "Region 4A", "Region 4B", "Region 5", "Region 6", "Region 7", "Region 8",
                "Region 9",
                "Region 10", "Region 11", "Region 12"
                // , "Region 13", "Barmm"
            ],

            datasets: [{
                label: " Population per Purok",
                data: [

                    12, 19, 3, 5, 2, 3, 
                    12, 19, 3, 5, 2, 3, 
                    12, 19, 3
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