

/*
 * Graph : this is the class that allows us to use charts in the website
 * chartBluePrint: Is a function used to get a chart type and it properties
 *
 **/
class Graph{
     chartBluePrint(ctx,graphType,colors){
        new Chart(ctx, {
            type: graphType,
            data: {
              labels: ['Jan', 'Feb', 'May', 'June', 'July', 'Ague'],
              datasets: [{
                label: 'total sale',
                data: [60, 200, 100, 300, 10, 90],
                borderWidth: 1,
                borderColor: "#6200FF",
                backgroundColor:colors
              }]
            },
            options: {
              scales: {
                y: {
                  beginAtZero: true
                }
              }
            }
          });
    }
}

export default Graph;