<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class=" grid grid-cols-1 lg:grid-cols-2 gap-5 mb-4">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Scientific Notation Converter</h3>
            <div class="py-5 px-4 mb-4">
                <p id="limit1" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-3 sm:gap-4 mb-4">
                    <div class="sm:col-span-2 relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="numb1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="numb1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Enter Number</label>
                    </div>
                    <div class="flex justify-center items-center w-full h-10 mb-4">
                        <button id="Btncalculate" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 sm:w-full h-10 sm:h-full rounded-full duration-150 text-primary_button">Calculate</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Scientific Notation Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p id="limit2" class="text-primary_button m-0"></p>
                <p id="limit3" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="x" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="x" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Enter X</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="Xpower" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="Xpower" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Enter 10<sup>x</sup></label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="Y" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="Y" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Enter Y</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="Ypower" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="Ypower" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Enter 10<sup>x</sup></label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="percisionVal" min="1" max="100" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="percisionVal" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Percision</label>
                    </div>
                </div>
                <div class="grid grid-cols-3 sm:grid-cols-5 gap-3 mb-4">
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
                </div>
            </div>
        </div>
    </div>
    <div id="result" class="hidden text-start md:text-center col-span-1 lg:col-span-2 mb-4">
        <div class=" bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
        <p id="solution1"></p>
        <p id="solution3"></p>
        <p id="solution2"></p>
        <p id="solution4"></p>
        <p id="solution5"></p>
    </div>
</section>

<script src="./app/views/pages/scientific-notation-calculator/scientific-notation-script.js"></script>