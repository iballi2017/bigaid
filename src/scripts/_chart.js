
function handlePieChart() {

    /**DONATION PIE-CHART DATASET */
    var continentDataList = [<?=$donobj;?>];

    const ctx = document.getElementById("myChart");
    var continentTitles = [];
    var continentData = [];
    var continentColor = [];
    continentDataList.forEach((continent) => {
      continentTitles.push(continent.title);
      continentData.push(continent.data);
      continentColor.push(continent.color);
    });

    var chartOptions = {
      type: "pie",
      data: {
        // labels: ["Africa", "Europe", "America"],
        labels: continentTitles,
        datasets: [{
          label: " % Donation",
          data: continentData.map((num) => {
            return num / 100;
          }),
          backgroundColor: continentColor,
          borderWidth: 5,
        }, ],
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: "bottom",
          },
          title: {
            display: false,
            text: "Donation by Region/Country",
          },
        },
      },
    };

    var chart;

    if (ctx) {
      // remove any instance of ctx
      const chart_init = Chart.getChart("myChart");
      if (chart_init != undefined) {
        chart_init.destroy();
      }
      chart = new Chart(ctx, chartOptions);
    }


    /**Handle Pie-chart Data Update On Scroll */
    window.addEventListener("scroll", () => {
      display();
    });

    function display() {
      var milestonesPieChart = document.querySelector(".pie-chart");
      var topElem = milestonesPieChart?.offsetTop;
      var bottomElem =
        milestonesPieChart?.offsetTop + milestonesPieChart?.clientHeight;
      var topScreen = window.pageYOffset;
      var bottomScreen = window.pageYOffset + window.innerHeight;
      if (bottomScreen > topElem && topScreen < bottomElem) {
        chart?.show(0, 2);
      } else {
        chart?.hide(0, 2);
      }
    }
  }

  
  handlePieChart();