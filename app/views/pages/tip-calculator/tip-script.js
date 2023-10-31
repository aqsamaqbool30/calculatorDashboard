$(document).ready(function () {
  $('#tipCalculator').click(function () {
    let price = parseFloat($('#priceBeforeTip').val());
    let validate = validateInputs(['#priceBeforeTip'], 1, '#limit1', '#result');
    if (!validate) {
      return;
    }
    tipPercentCalculator(price);
    $('#result').removeClass('hidden');
  });

  function tipPercentCalculator(price) {
    const percentages = [5, 10, 12, 14, 15, 18, 20, 25, 30, 50];
    let matrixAdditionHTML = `<table class="matrix-table"><tr class="bg-primary_button text-white">
            <th><p class="py-2 px-3 sm:px-5">Tip %</p></th>
            <th><p class="py-2 px-3 sm:px-5">Tip Amount</p></th>
            <th><p class="py-2 px-3 sm:px-5">Total</p></th>
        </tr>`;

    for (let i = 0; i < percentages.length; i++) {
      let tipPercent = percentages[i];
      let tipAmount = price * (tipPercent / 100);
      let totalAmount = price + tipAmount;
      let extraClass = tipPercent === 15 ? 'text-primary_button font-semibold' : '';

      matrixAdditionHTML += `
                <tr class="${extraClass}">
                    <td><p class="py-1 px-3 sm:px-5">${tipPercent}%</p></td>
                    <td><p class="py-1 px-3 sm:px-5">$${tipAmount.toFixed(2)}</p></td>
                    <td><p class="py-1 px-3 sm:px-5">$${totalAmount.toFixed(2)}</p></td>
                </tr>`;
    }
    matrixAdditionHTML += '</table>';
    $('#tableAdditionHTML').html(matrixAdditionHTML).removeClass('hidden');
    for (let i = 1; i < 5; i++) {
      $(`#solution${i}`).html('');
    }
  }

  $('#sharedBillCalc').click(function () {
    let sharedPrice = parseFloat($('#sharedPrice').val());
    let tip = parseFloat($('#tip').val());
    let numberOfPeople = parseInt($('#numberOfPeople').val());

    let validate = validateInputs(['#sharedPrice', '#tip', '#numberOfPeople'], 3, '#limit2', '#result');
    if (!validate) {
      return;
    }
    let totalBill = sharedPrice + sharedPrice * (tip / 100);
    let sharedBill = totalBill / numberOfPeople;
    let tipAmount = sharedBill - sharedPrice / numberOfPeople;

    $('#solution1').html(`<b>Tip: $${numberOfPeople * tipAmount.toFixed(2)}</b>`);
    $('#solution2').html(`<b>Total Amount: $${(numberOfPeople * sharedBill).toFixed(2)}</b>`);
    $('#solution3').html(`Tip Amount per Person: $${tipAmount.toFixed(2)}`);
    $('#solution4').html(`Shared Bill per Person: $${sharedBill.toFixed(2)}`);
    $('#tableAdditionHTML').empty().addClass('hidden');
    $('#result').removeClass('hidden');
  });
});
