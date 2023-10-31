$(document).ready(function() {
        $('#vatcalculate').click(function() {
            let providedValues = 0;
                    
                    if ($("#vatRate").val() !== "") providedValues++;
                    if ($("#netPrice").val() !== "") providedValues++;
                    if ($("#grossPrice").val() !== "") providedValues++;
                    if ($("#taxAmount").val() !== "") providedValues++;

                    if (providedValues !== 2) {
                        $("#vatresult").html(""); // Clear vatresult if there are not exactly 2 values
                        $("#vatwarning").html("Please provide any of the 2 value to find the others value");
                        $('#additionalDiv').hide();
                        return; // Exit the function
                    }

            let vatRate = parseFloat($('#vatRate').val());
            let netPrice = parseFloat($('#netPrice').val());
            let grossPrice = parseFloat($('#grossPrice').val());
            let taxAmount = parseFloat($('#taxAmount').val());

            if (!isNaN(netPrice) && !isNaN(vatRate)) {
                if (isNaN(grossPrice)) {
                    grossPrice = netPrice + (netPrice * vatRate / 100);
                    $('#vatresult').html("Gross Price: $" + grossPrice.toFixed(2));
                    $('#additionalDiv').show();
                    $("#vatwarning").html(" ");

                }
                if (isNaN(taxAmount)) {
                    taxAmount = grossPrice - netPrice;
                    $('#vatresult').append("<br>Tax Amount: $" + taxAmount.toFixed(2));
                    $('#additionalDiv').show();
                    $("#vatwarning").html(" ");

                }
            } else if (!isNaN(netPrice) && !isNaN(taxAmount)) {
                if (isNaN(vatRate)) {
                    vatRate = (taxAmount / netPrice) * 100;
                    $('#vatresult').html("VAT Rate: " + vatRate.toFixed(2) + "%");
                    $('#additionalDiv').show();
                    $("#vatwarning").html(" ");

                }
                if (isNaN(grossPrice)) {
                    grossPrice = netPrice + taxAmount;
                    $('#vatresult').append("<br>Gross Price: $" + grossPrice.toFixed(2));
                    $('#additionalDiv').show();
                    $("#vatwarning").html(" ");

                }
            } else if (!isNaN(grossPrice) && !isNaN(vatRate)) {
                let netPriceCalc = grossPrice / (1 + vatRate / 100);
                let vatAmount = grossPrice - netPriceCalc;
                $('#vatresult').html("Net Price: $" + netPriceCalc.toFixed(2) + "<br>VAT Amount: $" + vatAmount.toFixed(2));
                $('#additionalDiv').show();
                $("#vatwarning").html(" ");


            } else if (!isNaN(taxAmount) && !isNaN(vatRate)) {
                let netPrice = taxAmount / (vatRate / 100);
                let grossPrice = netPrice + taxAmount;

                $('#vatresult').html("Gross Price: $" + grossPrice.toFixed(2) + " <br>Net Price: $" + netPrice.toFixed(2));
                $('#additionalDiv').show();
                $("#vatwarning").html(" ");

            } else if (!isNaN(netPrice) && !isNaN(taxAmount)) {
                let vatRate = (taxAmount / netPrice) * 100;
                let grossPrice = netPrice + taxAmount;

                $('#vatresult').html("VAT Rate: " + vatRate.toFixed(2) + "%<br>Gross Price: $" + grossPrice.toFixed(2));
                $('#additionalDiv').show();
                $("#vatwarning").html(" ");

            } else if (!isNaN(netPrice) && !isNaN(grossPrice)) {
                if (grossPrice < netPrice) {
                    $('#vatresult').text("Error: The gross price cannot be smaller than the net price.");
                    $('#additionalDiv').show();
                    $("#vatwarning").html(" ");

                } else {
                    let vatRate = ((grossPrice - netPrice) / netPrice) * 100;
                    let taxAmount = grossPrice - netPrice;

                    $('#vatresult').html("VAT Rate: " + vatRate.toFixed(2) + "%<br>Tax Amount: $" + taxAmount.toFixed(2));
                    $('#additionalDiv').show();
                    $("#vatwarning").html(" ");

                }
            } else if (!isNaN(grossPrice) && !isNaN(taxAmount)) {
                if (grossPrice < taxAmount) {
                    $('#vatresult').text("Error: The gross price cannot be smaller than the net price.");
                } else {
                    let vatRate = (taxAmount / (grossPrice - taxAmount)) * 100;
                    let netPrice = grossPrice - taxAmount;

                    $('#vatresult').html("VAT Rate: " + vatRate.toFixed(2) + "%<br>Net Price: $" + netPrice.toFixed(2));
                    $('#additionalDiv').show();
                    $("#vatwarning").html(" ");

                }
             
            } 

        });

    });
