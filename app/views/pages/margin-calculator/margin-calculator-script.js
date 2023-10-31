$(document).ready(function () {
      $('#calculateBtn').click(function () {
            let rate = parseFloat($('#exchangeRate').val());
            let ratio = parseFloat($('#marginRatio').val());
            let units = parseInt($('#units').val());

    if (isNaN(rate) || isNaN(ratio) || isNaN(units)) {
      $("#warning").text("Please provide all input values.");
    } else {
      $("#warning").text(" ");
      $("#requiredAmount").html(
        " <br>Amount required: </br>" + ((units * rate) / ratio).toFixed(3),
      );
      $("#additionalDiv").show();
    }
  });

  $("#calculateButtons_margin").click(function () {
    let stockPrice = parseFloat($("#stockPrice").val());
    let numberOfShares = parseFloat($("#numberOfShares").val());
    let marginRequirement = parseFloat($("#marginRequirement").val()) / 100;
    if (
      isNaN(stockPrice) ||
      isNaN(numberOfShares) ||
      isNaN(marginRequirement)
    ) {
      $("#warning2").text("Please provide all input values.");
    } else {
      $("#warning2").text(" ");
      $("#requiredAmount").html(
        " <br>Amount required: </br>" +
          "$" +
          (stockPrice * numberOfShares * marginRequirement).toFixed(2),
      );
      $("#additionalDiv").show();
    }
  });


  
  // $("#calculate").click(function () {
  //   let cost = parseFloat($("#cost").val());
  //   let revenue = parseFloat($("#revenue").val());
  //   let margin = parseFloat($("#margin").val());
  //   let profit = parseFloat($("#profit").val());

  //   if (!isNaN(cost) && !isNaN(revenue)) {
  //     profit = revenue - cost;
  //     margin = (profit / revenue) * 100;
  //     markup = (profit / cost) * 100;
  //     $("#result").html(
  //       "profit: $" +
  //         profit.toFixed(2) +
  //         "<br> margin: " +
  //         margin.toFixed(2) +
  //         " %" +
  //         " <br> markup: " +
  //         markup.toFixed(2) +
  //         "%",
  //     );
  //   } else if (!isNaN(cost) && !isNaN(margin)) {
  //     revenue = cost / (1 - margin / 100);
  //     profit = revenue - cost;
  //     markup = (profit / cost) * 100;
  //     $("#result").html(
  //       "profit: $" +
  //         profit.toFixed(2) +
  //         "<br> revenue: $" +
  //         revenue.toFixed(2) +
  //         " <br> markup: " +
  //         markup.toFixed(2) +
  //         "%",
  //     );
  //   } else if (!isNaN(cost) && !isNaN(profit)) {
  //     revenue = profit + cost;
  //     markup = (profit / cost) * 100;
  //     margin = (profit / revenue) * 100;
  //     $("#result").html(
  //       "margin: " +
  //         margin.toFixed(2) +
  //         "%" +
  //         "<br> revenue: $" +
  //         revenue.toFixed(2) +
  //         " <br> markup: " +
  //         markup.toFixed(2) +
  //         "%",
  //     );
  //   } else if (!isNaN(revenue) && !isNaN(profit)) {
  //     margin = (profit / revenue) * 100;
  //     cost = revenue - profit;
  //     markup = (profit / cost) * 100;
  //     $("#result").html(
  //       "margin: " +
  //         margin.toFixed(2) +
  //         "%" +
  //         "<br> cost: $" +
  //         cost.toFixed(2) +
  //         " <br> markup: " +
  //         markup.toFixed(2) +
  //         "%",
  //     );
  //   } else if (!isNaN(revenue) && !isNaN(margin)) {
  //     profit = revenue * (margin / 100);
  //     cost = revenue - profit;
  //     markup = (profit / cost) * 100;

  //     $("#result").html(
  //       "profit: $" +
  //         profit.toFixed(2) +
  //         "%" +
  //         "<br> cost: $" +
  //         cost.toFixed(2) +
  //         " <br> markup: " +
  //         markup.toFixed(2) +
  //         "%",
  //     );
  //   } else if (!isNaN(margin) && !isNaN(profit)) {
  //     revenue = profit / (margin / 100);
  //     cost = revenue - profit;
  //     markup = (profit / cost) * 100;
  //     $("#result").html(
  //       " revenue: $" +
  //         revenue.toFixed(2) +
  //         "%" +
  //         "<br> cost: $" +
  //         cost.toFixed(2) +
  //         " <br> markup: " +
  //         markup.toFixed(2) +
  //         "%",
  //     );
  //     $("#additionalDivs").show();
  //   } else {
  //     $("#warning3").html("please provide any two values");
  //   }
  // });



  $("#calculate").click(function () {
    let providedValues = 0;
  
    if ($("#cost").val() !== "") providedValues++;
    if ($("#revenue").val() !== "") providedValues++;
    if ($("#margin").val() !== "") providedValues++;
    if ($("#profit").val() !== "") providedValues++;
  
    if (providedValues !== 2) {
      $("#result").html(""); // Clear result if there are not exactly 2 values
      $("#warning3").html("Please provide exactly two values.");
      return; // Exit the function
    }
  
    let cost = parseFloat($("#cost").val());
    let revenue = parseFloat($("#revenue").val());
    let margin = parseFloat($("#margin").val());
    let profit = parseFloat($("#profit").val());
  
    if (!isNaN(cost) && !isNaN(revenue)) {
      profit = revenue - cost;
      margin = (profit / revenue) * 100;
      markup = (profit / cost) * 100;
      $("#additionalDivs").show();
      $("#warning3").html(" ");
      $("#result").html(
        "profit: $" +
          profit.toFixed(2) +
          "<br> margin: " +
          margin.toFixed(2) +
          " %" +
          " <br> markup: " +
          markup.toFixed(2) +
          "%"
      );
    } else if (!isNaN(cost) && !isNaN(margin)) {
      revenue = cost / (1 - margin / 100);
      profit = revenue - cost;
      markup = (profit / cost) * 100;
      $("#warning3").html(" ");
      $("#additionalDivs").show();
      $("#result").html(
        "profit: $" +
          profit.toFixed(2) +
          "<br> revenue: $" +
          revenue.toFixed(2) +
          " <br> markup: " +
          markup.toFixed(2) +
          "%"
      );
    } else if (!isNaN(cost) && !isNaN(profit)) {
      revenue = profit + cost;
      markup = (profit / cost) * 100;
      margin = (profit / revenue) * 100;
      $("#warning3").html(" ");
      $("#additionalDivs").show();
      $("#result").html(
        "margin: " +
          margin.toFixed(2) +
          "%" +
          "<br> revenue: $" +
          revenue.toFixed(2) +
          " <br> markup: " +
          markup.toFixed(2) +
          "%"
      );
    } else if (!isNaN(revenue) && !isNaN(profit)) {
      margin = (profit / revenue) * 100;
      cost = revenue - profit;
      markup = (profit / cost) * 100;
      $("#warning3").html(" ");
      $("#additionalDivs").show();
      $("#result").html(
        "margin: " +
          margin.toFixed(2) +
          "%" +
          "<br> cost: $" +
          cost.toFixed(2) +
          " <br> markup: " +
          markup.toFixed(2) +
          "%"
      );
    } else if (!isNaN(revenue) && !isNaN(margin)) {
      profit = revenue * (margin / 100);
      cost = revenue - profit;
      markup = (profit / cost) * 100;
      $("#warning3").html(" ");
      $("#additionalDivs").show();
      $("#result").html(
        "profit: $" +
          profit.toFixed(2) +
          "%" +
          "<br> cost: $" +
          cost.toFixed(2) +
          " <br> markup: " +
          markup.toFixed(2) +
          "%"
      );
    } else if (!isNaN(margin) && !isNaN(profit)) {
      revenue = profit / (margin / 100);
      cost = revenue - profit;
      markup = (profit / cost) * 100;
      $("#warning3").html(" ");
      $("#additionalDivs").show();
      $("#result").html(
        " revenue: $" +
          revenue.toFixed(2) +
          "%" +
          "<br> cost: $" +
          cost.toFixed(2) +
          " <br> markup: " +
          markup.toFixed(2) +
          "%"
      );

    } else {
      $("#result").html(""); // Clear result if there are not exactly 2 values
      $("#warning3").html("Please provide any two values");
      $("#additionalDivs").hide();
    }
  });
  

});
