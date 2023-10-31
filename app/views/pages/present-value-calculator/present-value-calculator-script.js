$(document).ready(function () {
  $("#calculate").click(function () {
    let futureValue = parseFloat($("#futureValue").val());
    let numPeriods = parseFloat($("#numPeriods").val());
    let interestRate = parseFloat($("#interestRate").val()) / 100;
    if (isNaN(futureValue) || isNaN(numPeriods) || isNaN(futureValue)) {
      $("#warning").html("please provide all the required fields");
    } else {
      let presentValue = futureValue / Math.pow(1 + interestRate, numPeriods);
      let totalInterest = futureValue - presentValue;
      $("#warning").html(" ");
      $("#presentValueResult").html(
        "Present Value: $" +
          presentValue.toFixed(2) +
          "<br> Total Interest: $" +
          totalInterest.toFixed(2),
      );
      $("#additionalDiv").show();
    }
  });

  $('#calculatePresentbtn').click(function () {
    let numPeriods = parseFloat($('#numPeriodsDeposits').val());
    let interestRate = parseFloat($('#interestRateDeposits').val()) / 100;
    let periodicDeposit = parseFloat($('#periodicDeposit').val());
    let depositFrequency = $("input[name='depositFrequency']:checked").val();

    if (isNaN(numPeriods) || isNaN(interestRate) || isNaN(periodicDeposit)) {
      $("#warnings").html("please provide all the required fields");
      return;
    } else {
      let presentValue = 0;
      let futureValue = 0;
      let totalPrincipal = 0;
      let totalInterest = 0;

      for (let i = 1; i <= numPeriods; i++) {
        let depositFactor = depositFrequency === 'beginning' ? 1 + interestRate : 1;

        presentValue += periodicDeposit * depositFactor * (1 / Math.pow(1 + interestRate, i));
      }

      futureValue = presentValue * Math.pow(1 + interestRate, numPeriods);
      totalPrincipal = periodicDeposit * numPeriods;
      totalInterest = futureValue - totalPrincipal;

      let totalPrincipalPercentage = (totalPrincipal / futureValue) * 100;
      let totalInterestPercentage = (totalInterest / futureValue) * 100;
      $("#warnings").html(" ");

      $("#presentValueResult").html(
        "Present Value: $" +
          presentValue.toFixed(2) +
          " <br> Future Value: $" +
          futureValue.toFixed(2) +
          " <br>Total Principal: $" +
          totalPrincipal.toFixed(2) +
          " (" +
          totalPrincipalPercentage.toFixed(0) +
          "%)" +
          " <br>Total Interest: $" +
          totalInterest.toFixed(2) +
          " (" +
          totalInterestPercentage.toFixed(0) +
          "%)",
      );

      let chart = new CanvasJS.Chart('chartContainer', {
        animationEnabled: true,
        title: {
          text: 'Breakdown',
        },
        data: [
          {
            type: 'pie',
            startAngle: 240,
            yValueFormatString: '##0"%"',
            indexLabel: '{label} {y}',
            dataPoints: [
              {
                y: totalPrincipalPercentage.toFixed(0),
                label: 'Principal',
                color: '#ff823c',
              },
              {
                y: totalInterestPercentage.toFixed(0),
                label: 'Interest',
                color: '#d5d0d6',
              },
            ],
          },
        ],
      });
      chart.render();
      $("#chartContainer").show();
    }
    $("#additionalDiv").show();
  });
});