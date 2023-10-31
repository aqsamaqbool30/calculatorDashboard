<section id="inputdivs" class="container max-w-[991px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div class="cls-shadow">
        <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Commission Calculator

            </h2>
            <div class="flex flex-col items-center justify-center m-0">
                <span class=" block tex-sm text-gray-400 m-0 p-10">The Commission Calculator can compute any one of the following, given inputs for the remaining two: sales price, commission rate, or commission for a simple percentage commission structure.  </span>
               
            </div>
            <p id="warning" class=" text-primary_button mb-5 ms-6"></p>
            <div class=" grid grid-cols-1 sm:grid-cols-3 sm:gap-4 px-5">
                <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                    <input type="number" id="salesPrice" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                    <label for="salesPrice" class="absolute top-[10px] left-[34px] text-[#a2adb9] duration-300 pointer-events-none">Sales Price ($):</label>
                </div>
                <div class="relative maxsm:mt-5 flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                    <input type="number" id="commissionRate" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                    <label for="commissionRate" class="absolute top-[10px] left-[34px] text-[#a2adb9] duration-300 pointer-events-none">Commission Rate (%):</label>
                </div>
                <div class="relative maxsm:mt-5 flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                    <input type="number" id="commission" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                    <label for="commission" class="absolute top-[10px] left-[34px] text-[#a2adb9] duration-300 pointer-events-none">Commission ($):</label>
                </div>
            </div>


            <div class="flex justify-center items-center">
                <button id="calculate" class="border mb-10 border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
            </div>
    </div>
    <div id="additionalDiv" class="hidden mt-5 bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg">
        Result
    </div>

    <div class=" text-center justify-center mt-5 items-center">
        <div id="result"></div>
        <div id="calculationSteps"></div>

    </div>
</section>
<script src="./app/views/pages/commission-calculator/commission-calculator-script.js"></script>