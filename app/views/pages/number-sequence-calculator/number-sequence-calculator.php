<section id="inputdivs" class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5 mb-4">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Arithematic Sequence Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p id="warning1" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-3 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="firstNumber" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="firstNumber" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">First Number</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="commonDifference" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="commonDifference" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Value of (f)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="requiredNumber" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="requiredNumber" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">n<sup>th</sup> Number</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="arithmeticSequence" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Generate</button>
                </div>
            </div>
        </div>
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Geometric Sequence Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p id="warning2" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-3 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="geometricNumber" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="geometricNumber" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">First Number</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="geometricDifference" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="geometricDifference" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Value of (f)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="geometricRequired" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="geometricRequired" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">n<sup>th</sup> Number</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="geometricSequence" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Generate</button>
                </div>
            </div>
        </div>
        <div id="result" class="hidden text-center col-span-2 mb-4">
            <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution1"></p>
            <p id="solution2"></p>
        </div>
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Fibonacci Sequence Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p id="warning3" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-4 sm:gap-4 mb-4">
                    <div class="col-span-3 mb-4">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="fibonacciNumber" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="fibonacciNumber" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Enter n<sup>th</sup> Number to obtain</label>
                        </div>
                    </div>
                    <div class="col-span-1 flex justify-center items-center w-full h-10 mb-4">
                        <button id="fibonacciBtn" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 sm:w-full h-10 sm:h-full rounded-full duration-150 text-primary_button">Calculate</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="result1" class="hidden text-center col-span-2 mb-4">
            <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution3"></p>
            <p id="solution4"></p>
        </div>
    </div>
</section>

<script src="./app/views/pages/number-sequence-calculator/number-sequence-script.js"></script>