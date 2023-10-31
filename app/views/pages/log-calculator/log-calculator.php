<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 gap-5 mb-4">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Log Calculator (Logarithm)</h3>
            <div class="py-5 px-4 mb-4">
                <p class="pb-6 text-gray-400"><span class="text-primary_button">*</span>Please provide any two values to calculate the third in the logarithm equation: <span class="font-bold">log<sub>b</sub> x = y</span>. It can accept 'e' as a input for base.</p>
                <p id="warningID" class="hidden pb-6 text-primary_button m-0">Please provide two values to perform the calculations.</p>
                <div class="grid grid-cols-1 md:grid-cols-3 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input id="base" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="base" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Base (Value of b)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="valueX" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="valueX" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Argument (Value of x)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="valueY" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="valueY" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Result (Value of y)</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="calclog" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>
        <div id="result" class="hidden text-start md:text-center col-span-1 lg:col-span-2 mb-4">
            <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution1"></p>
            <p class="font-bold py-3">Formula: log<sub>b</sub> x = y</p>
            <p id="solution2"></p>
            <p id="solution3"></p>
        </div>
</section>

<script src="./app/views/pages/log-calculator/log-script.js"></script>