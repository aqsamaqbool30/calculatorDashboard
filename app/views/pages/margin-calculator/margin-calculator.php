<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Stock Trading Margin Calculator

            </h3>
            <span class=" block tex-sm text-gray-400 m-0 p-5">
                Calculate the required amount or maintenance margin needed for investors to make securities purchase on margin.
            </span>


            <div class="py-5 px-4">

                <p id="warning2" class="text-primary_button mb-5 ms-2"></p>


                <div class=" grid md:grid-cols-2 sm:gap-4">
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="stockPrice" step="0.01" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="stockPrice" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Stock Price ($): </label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="numberOfShares" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="numberOfShares" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Number of Shares:</label>
                    </div>
                </div>
                <div class=" grid md:grid-cols-1 sm:gap-4">
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="marginRequirement" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="marginRequirement" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Margin Requirement (%):</label>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <button id="calculateButtons_margin" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Currency Exchange Margin Calculator
            </h3>
            <span class=" block tex-sm text-gray-400 m-0 p-5">
                Calculate the minimum amount to maintain in the margin account to make currency trading.

            </span>
            <div class="py-5 px-4">
                <p id="warning" class="text-primary_button mb-5 ms-2"></p>

                <div class=" grid md:grid-cols-3 sm:gap-4">
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" step="0.01" id="exchangeRate" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="exchangeRate" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Exchange rate </label>
                    </div>
                    <div class="flex  m-0">
                        <select id="marginRatio" class=" select_class w-full h-9 sm:h-10 outline-none border rounded-full sm:m-0 px-2 sm:px-5 text-[#a2adb9] focus:text-primary_button focus:border-primary_button cursor-pointer">
                            <option value="" selected>Margin ratio </option>
                            <option value="1">1:1</option>
                            <option value="5">5:1</option>
                            <option value="10">10:1</option>
                            <option value="20">20:1</option>
                            <option value="25">25:1</option>
                            <option value="30">30:1</option>
                            <option value="40">40:1</option>
                            <option value="50">50:1</option>

                        </select>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="units" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="units" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Units</label>
                    </div>

                </div>

                <div class="flex justify-center items-center">
                    <button id="calculateBtn" class="border mt-5 border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

    </div>
    <div id="additionalDiv" class="hidden mt-5 bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg">
        Result
    </div>

    <div class=" text-center flex justify-center mt-5 items-center">
        <div id="requiredAmount"></div>
    </div>


    <div id="inputdivs" class="accordion grid grid-cols-1  gap-5 mt-10">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Profit Margin Calculator
            </h3>
            <span class=" block tex-sm text-gray-400 m-0 p-5">
                Please provide any two of the following to calculate the rest values. </span>
            <div class="py-5 px-4">
                <p id="warning3" class="text-primary_button mb-5 ms-2"></p>

                <div class=" grid md:grid-cols-2 sm:gap-4">
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="cost" step="0.01" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="cost" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Cost ($):</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="revenue" step="0.01" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="revenue" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Revenue ($):</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="margin" step="0.01" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="margin" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Margin (%):</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="profit" step="0.01" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="profit" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Margin Requirement (%):</label>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <button id="calculate" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>
    </div>
    <div id="additionalDivs" class=" hidden mt-5 bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg">
        Result
    </div>
    <div class=" text-center flex mt-5 justify-center items-center">
        <div id="result"></div>
    </div>
</section>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<script src="./app/views/pages/margin-calculator/margin-calculator-script.js"></script>