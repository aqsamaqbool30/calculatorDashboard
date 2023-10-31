$(document).ready(function () {
  $("#convertBtn").click(function () {
    var amount = parseFloat($("#amount").val());
    var fromCurrency = $("#fromCurrency").val();
    var toCurrency = $("#toCurrency").val();

    if (isNaN(amount)) {
      $("#warning").html(" Please enter a valid amount. ");
      return;
    }

    var apiUrl = `https://v6.exchangerate-api.com/v6/b71ba5a6f69833fe3ac900ec/latest/${fromCurrency}`;

    fetch(apiUrl)
      .then((response) => response.json())
      .then((data) => {
        var exchangeRateTo = data.conversion_rates[toCurrency];
        var convertedAmountTo = (amount * exchangeRateTo).toFixed(5);
        var exchangeRateFrom = data.conversion_rates[toCurrency]; // Note the change here
        var convertedAmountFrom = (amount / exchangeRateFrom).toFixed(5); // Note the change here
        $("#result").html(
          `${amount} ${fromCurrency} = ${convertedAmountTo} ${toCurrency}<br>${amount} ${toCurrency} = ${convertedAmountFrom} ${fromCurrency}`,
        );
      })
      .catch((error) => {
        $("#result").text("An error occurred while fetching data.");
      });
    $("#additionalDiv").show();
  });
});
