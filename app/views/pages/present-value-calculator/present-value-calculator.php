<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Present Value of Future Money
            </h3>
            <div class="py-5 px-4">
                <p id="warning" class=" text-primary_button mb-5 ms-2"></p>

                <div class=" grid md:grid-cols-3 sm:gap-4">
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="futureValue" step="any" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="futureValue" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Future Value ($): </label>
                    </div>
                    <div class="relative maxsm:mt-5 flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="numPeriods" step="any" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="numPeriods" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Number of Periods: </label>
                    </div>

                    <div class="relative flex maxsm:mt-5 items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="interestRate" step="any" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="interestRate" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Interest Rate (%):</label>
                    </div>


                </div>
                <div class="flex justify-center items-center maxmd:mt-5">
                    <button id="calculate" class="border  border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Present Value of Periodical Deposits</h3>

            <div class="py-5 px-4">
                <p id="warnings" class=" text-primary_button mb-5 ms-2"></p>

                <div class=" grid grid-cols-1 md:grid-cols-3 sm:gap-4 ">
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="numPeriodsDeposits" step="any" class=" w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="numPeriodsDeposits" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Number of Periods: </label>
                    </div>
                    <div class="relative flex maxsm:mt-5 items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="interestRateDeposits" step="any" class=" w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="interestRateDeposits" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Interest Rate (%): </label>
                    </div>
                    <div class="relative flex maxsm:mt-5 items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="periodicDeposit" step="any" class=" w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="periodicDeposit" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Periodic Deposit ($): </label>
                    </div>
                </div>
                <div class="flex items-center justify-center m-0 mb-5 maxsm:text-sm maxsm:mt-5 ">
                    <div class="pe-4 sm:pe-24">
                        <span>Deposit Frequency:
                        </span>
                    </div>
                    <div class="ps-4 pe-5">
                        <input type="radio" id="end" name="depositFrequency" value="end" checked>
                        <span for="end">End of Period</span>
                    </div>
                    <div class="px-5">
                        <input type="radio" id="beginning" name="depositFrequency" value="beginning">
                        <span for="beginning">Beginning of Period</span>
                    </div>
                </div>


                <div class="flex justify-center items-center">
                    <button id="calculatePresentbtn" class="border maxmd:mt-5 border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>


    </div>
    <div id="additionalDiv" class=" hidden bg-primary_button mt-5 text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg">
        Result
    </div>

    <div class=" text-center content-center mt-5 justify-center items-center">

        <div id="presentValueResult" class=" font-bold"></div>
        <div id="chartContainer" class="hidden h-80"></div>

    </div>
</section>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<script src="./app/views/pages/present-value-calculator/present-value-calculator-script.js"></script>