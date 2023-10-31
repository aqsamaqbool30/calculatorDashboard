<section class="container max-w-[1024px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-1 gap-5">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">VAT Calculator
            </h3>
            <span class=" block tex-sm text-gray-400 m-0 p-5">
                Calculate the required amount or maintenance margin needed for investors to make securities purchase on margin.
            </span>
            <div class="py-5 px-4">
            <p id="vatwarning" class="text-primary_button mb-5 ms-2"></p>

                <div class=" grid md:grid-cols-2 sm:gap-4">
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="text" id="vatRate" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="vatRate" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">VAT Rate (%):</label>
                    </div>
                    <div class="relative flex items-center border maxsm:mt-4 rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="text" id="netPrice" class="  w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="netPrice" class="absolute top-[10px] left-[34px] text-[#a2adb9] duration-300 pointer-events-none">Net Price:</label>
                    </div>
                    <div class="relative flex items-center border maxsm:mt-4 rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="text" id="grossPrice" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="grossPrice" class="absolute top-[10px] left-[34px] text-[#a2adb9] duration-300 pointer-events-none">Gross price </label>
                    </div>
                    <div class="relative flex items-center border maxsm:mt-4 rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="text" id="taxAmount" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="amountToExchange" class="absolute top-[10px] left-[34px] text-[#a2adb9] duration-300 pointer-events-none">Tax amount </label>
                    </div>
                </div>


                <div class="flex justify-center items-center">
                    <button id="vatcalculate" class="border maxsm:mt-4 border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>


    </div>
    <div id="additionalDiv" class="hidden mt-4 bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg">
        Result
    </div>

    <div class=" text-center flex justify-center items-center mt-4">
        <div id="vatresult" class="font-bold "></div>
    </div>
</section>


<script src="./app/views/pages/vat-calculator/vat-calculator-script.js"></script>

