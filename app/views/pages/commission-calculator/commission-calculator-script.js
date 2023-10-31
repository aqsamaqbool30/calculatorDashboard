$(document).ready(function () {
  $("#calculate").click(function () {
    const [salesPrice, commissionRate, commission] = [
      parseFloat($("#salesPrice").val()),
      parseFloat($("#commissionRate").val()),
      parseFloat($("#commission").val())
    ];

    if (
      (isNaN(salesPrice) && isNaN(commissionRate) && isNaN(commission)) ||
      (isNaN(salesPrice) && isNaN(commissionRate)) ||
      (isNaN(salesPrice) && isNaN(commission)) ||
      (isNaN(commissionRate) && isNaN(commission))
    ) {
      $("#warning").text("Please provide any two values.");
      $("#calculationSteps").html("");
      return;
    }

    const calculatedCommission = salesPrice * (commissionRate / 100);
    const calculatedRate = (commission / salesPrice) * 100;
    const calculatedSalesPrice = commission / (commissionRate / 100);

    if (!isNaN(salesPrice) && !isNaN(commissionRate) && isNaN(commission)) {
      $("#result").text("Commission: $" + calculatedCommission.toFixed(2));
    } else if (isNaN(commissionRate)) {
      $("#result").text("Commission Rate: " + calculatedRate.toFixed(4) + "%");
    } else if (isNaN(salesPrice)) {
      $("#result").text("Sales Price: $" + calculatedSalesPrice.toFixed(2));
    }

    const steps = `
      ${isNaN(salesPrice) ? "" : `Sales Price = $${salesPrice.toFixed(2)}`} 
      ${isNaN(commissionRate) ? "" : `× ${commissionRate.toFixed(2)}%`}  
      ${isNaN(commission) ? "" : `= $${commission.toFixed(2)}`}
    `;
    $("#calculationSteps").html(steps);
    $("#additionalDiv").show();
    $("#warning").text(" ");
  });
});
