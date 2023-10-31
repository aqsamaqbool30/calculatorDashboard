<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5 mb-4">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Pythagorean Theorem Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p class="tex-sm pb-6 text-gray-400"><span class="text-primary_button">*</span>Enter any 2 values below to solve the Pythagorean <b>Equation: a<sup>2</sup> + b<sup>2</sup> = c<sup>2</sup></b>.</p>
                <p id="warningC" class="text-primary_button"></p>
                <div class="grid grid-cols-1 sm:grid-cols-3 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="valueA" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="valueA" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Value A</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="valueB" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="valueB" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Value B</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="valueC" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="valueC" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Value C</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="theoremCalc" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Pythagorean Theorem Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p class="tex-sm pb-6 text-gray-400"><span class="text-primary_button">*</span>Enter any 2 values below to solve the Pythagorean <b>Equation: √a<sup>2</sup> + √b<sup>2</sup> = c<sup>2</sup></b>.</p>
                <p id="warningSquareRoot" class="text-primary_button"></p>
                <div class="grid grid-cols-1 sm:grid-cols-3 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="squareRootvalueA" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="squareRootvalueA" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Value √A</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="squareRootvalueB" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="squareRootvalueB" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Value √B</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="squareRootvalueC" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="squareRootvalueC" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Value √C</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="squareRoottheoremCalc" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <div id="result" class="hidden text-start md:text-center col-span-1 lg:col-span-2 mb-4">
            <div class=" bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution1"></p>
            <p id="solution2"></p>
            <p id="solution3"></p>
            <p id="solution4"></p>
            <p id="solution5"></p>
            <p id="solution6"></p>
            <p id="solution7" class="font-semibold py-4 text-base md:text-lg">Calculation Steps:</p>
            <p id="solutionCalc"></p>
            <p id="solution8"></p>
            <p id="solution9"></p>
            <p id="solution10"></p>
            <p id="solution11"></p>
            <p id="solution12"></p>
            <p id="solution13"></p>
        </div>
    </div>
</section>

<script src="./app/views/pages/pythagorean-theorem-calculator/pythagorean-theorem-script.js"></script>