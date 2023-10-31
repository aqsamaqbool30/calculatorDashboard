$(document).ready(function () {
  $('#expenditureApproach').click(function () {
    let personalConsumption = parseFloat($('#personal').val());
    let governmentConsumption = parseFloat($('#government').val());
    let exportedGoods = parseFloat($('#exports').val());
    let imports = parseFloat($('#imports').val());
    let investment = parseFloat($('#grossInvestment').val());

    let validate = validateInputs(['#personal', '#government', '#exports', '#imports', '#grossInvestment'], 5, '#limit1', '#result');
    if (!validate) {
      return;
    }
    let gpdSolution = personalConsumption + governmentConsumption + (exportedGoods - imports) + investment;
    $('#solution1').html('<b>GDP</b> =	personal consumption + government consumption + net exports of goods and services (exports – imports) + gross investment');
    $('#solution2').html('= ' + personalConsumption + ' + ' + governmentConsumption + ' + (' + exportedGoods + ' - ' + imports + ') + ' + investment + '<br>= ' + gpdSolution);
    $('#solution3').html('');
    $('#solution4').html('');
    $('#result').removeClass('hidden');
  });

  $('#ResourceCostIncomeApproach').click(function () {
    let employee = parseFloat($('#employee').val());
    let proprietors = parseFloat($('#proprietors').val());
    let rentalIncome = parseFloat($('#rentalIncome').val());
    let corporateProfits = parseFloat($('#corporateProfits').val());
    let businessTax = parseFloat($('#businessTax').val());
    let interestIncome = parseFloat($('#interest').val());
    let depreciation = parseFloat($('#depreciation').val());
    let netIncomeOfForeigners = parseFloat($('#incomeOfForeigners').val());

    let validate = validateInputs(['#employee', '#proprietors', '#rentalIncome', '#corporateProfits', '#businessTax', '#interest', '#depreciation', '#incomeOfForeigners'], 8, '#limit2', '#result');
    if (!validate) {
      return;
    }
    let gnpSolution = employee + proprietors + rentalIncome + corporateProfits + interestIncome;
    let gpdSolution = gnpSolution + businessTax + depreciation + netIncomeOfForeigners;
    $('#solution1').html("<b>GNP</b> =	employee compensation + proprietors' income + rental income + corporate profits + interest income");
    $('#solution2').html('= ' + employee + ' + ' + proprietors + ' + ' + rentalIncome + ' + ' + corporateProfits + ' + ' + interestIncome + '<br>= ' + gnpSolution);
    $('#solution3').html('<b>GDP</b> =	GNP + indirect business taxes + depreciation + net income of foreigners*');
    $('#solution4').html('= ' + gnpSolution + ' + ' + businessTax + ' + ' + depreciation + ' + ' + netIncomeOfForeigners + '<br>= ' + gpdSolution);
    $('#result').removeClass('hidden');
  });
});
