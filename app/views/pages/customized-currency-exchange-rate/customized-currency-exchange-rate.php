<section class="container max-w-[991px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-1 gap-5">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">With Live Exchange Rate
            </h3>
            <div class="py-5 px-4">
            <p id="warning" class=" text-primary_button mb-5 ms-2"></p>
                <div class=" grid md:grid-cols-2 sm:gap-4">
                    
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="exchangeRate" step="any" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="exchangeRate" class="absolute top-[10px] left-[34px] text-[#a2adb9] duration-300 pointer-events-none">Exchange rate for currency A/B:</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="amountToExchange" step="any" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="amountToExchange" class="absolute top-[10px] left-[34px] text-[#a2adb9] duration-300 pointer-events-none">Amount to exchange:</label>
                    </div>
                </div>


                <div class="flex justify-center items-center">
                    <button id="calculateExchange" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>
    </div>
    <div id="additionalDiv" style="display: none;" class=" mt-5 bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg">
        Result
    </div>

    <div class=" text-center flex justify-center items-center  mt-5">
        <div id="result"></div>
    </div>
</section>
<script>
    $(document).ready(function() {
        $('#calculateExchange').click(function() {
            var exchangeRate = parseFloat($('#exchangeRate').val());
            var amountToExchange = parseFloat($('#amountToExchange').val());

            console.log(exchangeRate, amountToExchange);

            if (!isNaN(exchangeRate) && !isNaN(amountToExchange)) {
                var resultA = amountToExchange;
                var resultB = amountToExchange * exchangeRate;

                var resultStringA = 'Currency A ' + resultA.toFixed(2) + ' = Currency B ' + resultB.toFixed(2);
                var resultStringB = 'Currency B ' + resultA.toFixed(2) + ' = Currency A ' + (amountToExchange / exchangeRate).toFixed(2);

                $('#result').html(resultStringA + '<br>' + resultStringB);
                $('#additionalDiv').show();
                $('#warning').html(' ');

            } else {
                $('#warning').html('Please enter valid numbers.');

            }
        });
    });
</script>