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

                    <?php echo $ncr_count['ncr_cnt']; ?>,
                    <?php echo $car_count['car_cnt']; ?>,
                    <?php echo $region1_count['region1_cnt']; ?>,
                    <?php echo $region2_count['region2_cnt']; ?>,
                    <?php echo $region3_count['region3_cnt']; ?>,
                    <?php echo $region4a_count['region4a_cnt ']; ?>,
                    <?php echo $region4b_count['region4b_cnt']; ?>,
                    <?php echo $region5_count['region5_cnt']; ?>,
                    <?php echo $region6_count['region6_cnt']; ?>,
                    <?php echo $region7_count['region7_cnt']; ?>,
                    <?php echo $region8_count['region8_cnt']; ?>,
                    <?php echo $region9_count['region9_cnt']; ?>,
                    <?php echo $region10_count['region10_cnt']; ?>,
                    <?php echo $region11_count['region11_cnt']; ?>,
                    <?php echo $region12_count['region12_cnt']; ?>
                ],

                backgroundColor: [
                    '#051d9d',

                    '#f8bb28',
                    '#e83838',
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
</script>


<script>
var barChartData = {
  labels: [
    "Absence of OB",
    "Closeness",
    "Credibility",
    "Heritage",
    "M Disclosure",
    "Provenance",
    "Reliability",
    "Transparency"
  ],
  datasets: [
    {
      label: "American Express",
      backgroundColor: "pink",
      borderColor: "red",
      borderWidth: 1,
      data: [3, 5, 6, 7,3, 5, 6, 7]
    },
    {
      label: "Mastercard",
      backgroundColor: "lightblue",
      borderColor: "blue",
      borderWidth: 1,
      data: [4, 7, 3, 6, 10,7,4,6]
    },
    {
      label: "Paypal",
      backgroundColor: "lightgreen",
      borderColor: "green",
      borderWidth: 1,
      data: [10,7,4,6,9,7,3,10]
    },
    {
      label: "Visa",
      backgroundColor: "yellow",
      borderColor: "orange",
      borderWidth: 1,
      data: [6,9,7,3,10,7,4,6]
    }
  ]
};

var chartOptions = {
  responsive: true,
  legend: {
    position: "top"
  },
  title: {
    display: true,
    text: "Chart.js Bar Chart"
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


<!-- var data = {
labels: ["Chocolate", "Vanilla", "Strawberry"],
datasets: [
{
label: "Blue",
backgroundColor: "blue",
data: [3,7,4]
},
{
label: "Red",
backgroundColor: "red",
data: [4,3,5]
},
{
label: "Green",
backgroundColor: "green",
data: [7,2,6]
}
]
};

var myBarChart = new Chart(ctx, {
type: 'bar',
data: data,
options: {
barValueSpacing: 20,
scales: {
yAxes: [{
ticks: {
min: 0,
}
}]
}
}
}); -->