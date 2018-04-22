$(function(){

    //get the pie chart canvas
    var ctx1 = $("#pie-chartcanvas-1");

    //pie chart data
    var data1 = { 
        labels: ["rating 1", "rating 2", "rating 3", "rating 4", "rating 5"],
        datasets: [
            {
                label: "TeamA Score",
                data: [10, 50, 25, 70, 40],
                backgroundColor: [
                    "#4D4D4D",
                    "#5DA5DA",
                    "#FAA43A",
                    "#60BD68",
                    "#F15854"
                ],
                borderColor: [
                    "#FFFFFF",
                    "#FFFFFF",
                    "#FFFFFF",
                    "#FFFFFF",
                    "#FFFFFF"
                ],
                borderWidth: [2, 2, 2, 2, 2]

            }
        ]
    };

    

    //options
    var options = {
        responsive: true,
        title: {
            display: true,
            position: "top",
            text: "Pie Chart",
            fontSize: 5,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "top",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        }
    };

    //create Chart class object
    var chart1 = new Chart(ctx1, {
        type: "pie",
        data: data1,
        options: {}
    });

   
});