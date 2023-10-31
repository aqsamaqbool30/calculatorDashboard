<section id="inputdivs" class="container max-w-[991px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div class="cls-shadow">
        <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Food Energy Converter</h3>

            <div class="flex flex-col items-center justify-center m-0">
                <span class=" block tex-sm text-gray-400 m-0 p-10">The calculator below computes the total surface area of a human body, referred to as body surface area (BSA). Direct measurement of BSA is difficult, and as such many formulas have been published that estimate BSA. The calculator below provides results for some of the most popular formulas.

                </span>
            </div>
        <p id="warning" class="text-primary_button
         mb-5 ms-5"></p>  

            <div class=" grid grid-cols-1 sm:grid-cols-3 sm:gap-4 px-5 ">
                <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                    <input type="number" id="value" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                    <label for="value" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Enter Value</label>
                </div>
                <div class="flex maxsm:mt-5 m-0">
                    <select id="fromUnit" class="w-full h-9 sm:h-10 outline-none border rounded-full sm:m-0 px-2 sm:px-5 text-[#a2adb9] focus:text-primary_button focus:border-primary_button cursor-pointer">
                        <option value="kcal" selected>Calorie [Nutritional, kcal]</option>
                        <option value="cal">calorie [cal]</option>
                        <option value="kJ">Kilojoules [kJ]</option>
                        <option value="J">joules [J]</option>

                    </select>
                </div>
                <div class="flex maxsm:mt-5 m-0">
                    <select id="toUnit" class="w-full h-9 sm:h-10 outline-none border rounded-full sm:m-0 px-2 sm:px-5 text-[#a2adb9] focus:text-primary_button focus:border-primary_button cursor-pointer">
                        <option value="kcal">Calorie [Nutritional, kcal]</option>
                        <option value="cal" selected>calorie [cal]</option>
                        <option value="kJ">Kilojoules [kJ]</option>
                        <option value="J">joules [J]</option>
                    </select>
                </div>
            </div>
            <div class="flex justify-center maxmd:mt-5 items-center">
                <button id="convertBtn" class="border mb-10 border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
            </div>
    </div>
    <div id="additionalDiv" class=" mt-5 hidden bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg">
        Result
    </div>

    <div class=" text-center mt-5 flex justify-center items-center">
        <div id="result">

        </div>
    </div>
</section>
<script src="./app/views/pages/food-energy-converter/food-energy-converter-script.js"></script>