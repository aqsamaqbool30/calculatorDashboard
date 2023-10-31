<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5 mb-4">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Z-Score Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p id="warning" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-3 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="rawScore" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="rawScore" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Value of x</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="population" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="population" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Value of μ</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="standardDeviation" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="standardDeviation" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Value of σ</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="zScore" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Probability between Two Z-scores</h3>
            <div class="py-5 px-4 mb-4">
                <p id="warning1" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="leftBound" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="leftBound" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Left Bound, Z<sub>1</sub></label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="rightBound" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="rightBound" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Right Bound, Z<sub>2</sub></label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="leftrightBound" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <div id="result" class="hidden text-center col-span-1 lg:col-span-2 mb-4">
            <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution1" class="text-lg"></p>
            <p id="solution2"></p>
            <p id="solution3"></p>
            <p id="solution4"></p>
            <p id="solution5"></p>
        </div>

        <div class="lg:col-span-2 m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Z-Score Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p id="instruction" class="tex-sm pb-6 text-gray-400"><span class="text-primary_button">*</span>Please provide any <b>one</b> value to convert between z-score and probability.</p>
                <p id="warning3" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-3 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="input1" step="0.1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="input1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Z-score, <b>Z</b></label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="input2" step="0.1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="input2" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none"><b>P</b>(x < Z)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="input3" step="0.1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="input3" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none"><b>P</b>(x > Z)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="input4" step="0.1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="input4" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none"><b>P</b>(0 to Z or Z to 0)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="input5" step="0.1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="input5" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none"><b>P</b>(-Z < x < Z)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="input6" step="0.1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="input6" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none"><b>P</b>(-Z < x or x < Z)</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="zScoreCalculate" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <div id="result2" class="hidden text-center col-span-1 lg:col-span-2 mb-4">
            <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution6"></p>
            <div clas="flex maxsm:flex-col justify-center items-center">
                <p id="solution7" class="inline-block mr-3"></p>
                <div class="inline-block w-[75px] mx-auto relative my-0 pb-1">
                    <div id="firstCurve" class="absolute top-0 bottom-0 left-0 -z-10 m-0 h-full bg-secondary_color"></div>
                    <img src="<?php echo $assetConfig['asset_url']; ?>/images/normal-distribution-curve.png" alt="" class="w-[75px] mx-auto">
                </div>
            </div>
            <div clas="flex maxsm:flex-col justify-center items-center">
                <p id="solution8" class="inline-block mr-3"></p>
                <div class="inline-block w-[75px] mx-auto relative my-0 pb-1">
                    <div id="secondCurve" class="absolute top-0 bottom-0 right-0 -z-10 m-0 h-full bg-secondary_color"></div>
                    <img src="<?php echo $assetConfig['asset_url']; ?>/images/normal-distribution-curve.png" alt="" class="w-[75px] mx-auto">
                </div>
            </div>
            <div clas="flex maxsm:flex-col justify-center items-center">
                <p id="solution9" class="inline-block mr-3"></p>
                <div class="inline-block w-[75px] mx-auto relative my-0 pb-1">
                    <div id="thirdCurve" class="absolute top-0 bottom-0 right-1/2 translate-x-1/2 -z-10 m-0 h-full bg-secondary_color"></div>
                    <img src="<?php echo $assetConfig['asset_url']; ?>/images/normal-distribution-curve.png" alt="" class="w-[75px] mx-auto">
                </div>
            </div>
            <div clas="flex maxsm:flex-col justify-center items-center">
                <p id="solution10" class="inline-block mr-3"></p>
                <div class="inline-block w-[75px] mx-auto relative my-0 pb-1">
                    <div id="fourthCurve" class="absolute top-0 bottom-0 left-1/2 -translate-x-1/2 -z-10 m-0 h-full bg-secondary_color"></div>
                    <img src="<?php echo $assetConfig['asset_url']; ?>/images/normal-distribution-curve.png" alt="" class="w-[75px] mx-auto">
                </div>
            </div>
            <div clas="flex maxsm:flex-col justify-center items-center">
                <p id="solution11" class="inline-block mr-3"></p>
                <div class="inline-block w-[75px] mx-auto relative my-0 pb-1">
                    <div id="fifthCurve" class="absolute top-0 bottom-0 left-0 -z-10 m-0 h-full bg-secondary_color"></div>
                    <div id="sixthCurve" class="absolute top-0 bottom-0 right-0 -z-10 m-0 h-full bg-secondary_color"></div>
                    <img src="<?php echo $assetConfig['asset_url']; ?>/images/normal-distribution-curve.png" alt="" class="w-[75px] mx-auto">
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jstat/1.5.3/jstat.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/9.5.1/math.min.js"></script>
<script src="./app/views/pages/z-index-calculator/z-index-script.js"></script>