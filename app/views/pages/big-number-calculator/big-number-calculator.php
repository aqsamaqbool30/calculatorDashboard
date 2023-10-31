<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="grid grid-cols-1 mb-4">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Big Number Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p class="block pb-6 text-gray-400"><span class="text-primary_button">*</span>Use percision to determine after how many digits the decimal takes place in the result.</p>
                <p id="warning1" class="text-primary_button m-0"></p>
                <p id="warning" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-5 sm:gap-4 mb-4">
                    <div class="col-span-2 relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="valueX" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="valueX" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Enter value of X</label>
                    </div>
                    <div class="col-span-2 relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="valueY" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="valueY" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Enter value of Y</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="percision" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="percision" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Percision</label>
                    </div>
                </div>
                <div class="grid grid-cols-3 sm:grid-cols-6 colg:grid-cols-11 gap-3 mb-4">
                    <div class="flex justify-center items-center mb-4">
                        <button id="xPlusY" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button">X + Y</button>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="xMinusY" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button">X - Y</button>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="xProductY" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button">X * Y</button>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="xDivisionY" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button">X / Y</button>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="xPowerY" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button">X ^ Y</button>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="xSqareroot" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button">√X</button>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="xSqaure" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button">X<sup>2</sup></button>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="factorialX" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button">X!</button>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="mod" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button">MOD</button>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="gcd" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button">GCD</button>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="lcm" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button">LCM</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="result" class="hidden text-start md:text-center col-span-1 lg:col-span-2 mb-4">
        <div class=" bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
        <p id="solution1"></p>
        <p id="solution2"></p>
    </div>
</section>

<script src="./app/views/pages/big-number-calculator/big-number-script.js"></script>