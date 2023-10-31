<link rel="stylesheet" href="./app/views/pages/statistics-calculator/statistics-style.css">

<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 mb-4">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Statistics Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p id="countWarning" class="text-primary_button m-0"></p>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 m-0">
                    <div class="order-last sm:order-first m-0">
                        <div class="mb-4">
                            <div class="w-full mb-4 maxsm:text-15px">
                                <p id="otherSolution" class="inline-block"></p>
                                <p id="counting" class="inline-block">Count = 0</p>
                            </div>
                            <div class="relative flex items-center border rounded-full w-full my-0 maxsm:text-15px">
                                <input type="text" id="expressionsInputs" class="rounded-full w-full h-9 sm:h-10 my-0 px-5 text-xs md:text-sm outline-none" placeholder=" " disabled>
                            </div>
                        </div>
                        <div class="grid grid-cols-5 gap-2 [&>*]:maxcosm:text-[14px] m-0">
                            <div class="flex justify-center items-center mb-3">
                                <button class="border border-primary_button bg-primary_button/20 hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button btn_design" value="7">7</button>
                            </div>
                            <div class="flex justify-center items-center mb-3">
                                <button class="border border-primary_button bg-primary_button/20 hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button btn_design" value="8">8</button>
                            </div>
                            <div class="flex justify-center items-center mb-3">
                                <button class="border border-primary_button bg-primary_button/20 hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button btn_design" value="9">9</button>
                            </div>
                            <div class="flex justify-center items-center mb-3">
                                <button title="Mean (average) of the Values" id="averageMeanValue" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button font-semibold overline calculationBtn">x</button>
                            </div>
                            <div class="flex justify-center items-center mb-3">
                                <button title="Mean of the Square of the Values" id="averageMeanValueSquare" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button font-semibold overline calculationBtn">x<sup>2</sup></button>
                            </div>
                            <div class="flex justify-center items-center mb-3">
                                <button class="border border-primary_button bg-primary_button/20 hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button btn_design" value="4">4</button>
                            </div>
                            <div class="flex justify-center items-center mb-3">
                                <button class="border border-primary_button bg-primary_button/20 hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button btn_design" value="5">5</button>
                            </div>
                            <div class="flex justify-center items-center mb-3">
                                <button class="border border-primary_button bg-primary_button/20 hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button btn_design" value="6">6</button>
                            </div>
                            <div class="flex justify-center items-center mb-3">
                                <button title="Sum of all the Values" id="sumOfVlaues" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button font-semibold calculationBtn calculationBtn">Σx</button>
                            </div>
                            <div class="flex justify-center items-center mb-3">
                                <button title="Sum of square all the Values" id="squareOfSumOfVlaues" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button font-semibold calculationBtn calculationBtn">Σx<sup>2</sup></button>
                            </div>
                            <div class="flex justify-center items-center mb-3">
                                <button class="border border-primary_button bg-primary_button/20 hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button btn_design" value="1">1</button>
                            </div>
                            <div class="flex justify-center items-center mb-3">
                                <button class="border border-primary_button bg-primary_button/20 hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button btn_design" value="2">2</button>
                            </div>
                            <div class="flex justify-center items-center mb-3">
                                <button class="border border-primary_button bg-primary_button/20 hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button btn_design" value="3">3</button>
                            </div>
                            <div class="flex justify-center items-center mb-3">
                                <button title="Population Standard Deviation" id="populationStandardDeviation" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button font-semibold calculationBtn">σ</button>
                            </div>
                            <div class="flex justify-center items-center mb-3">
                                <button title="Population Standard Variance" id="PopulationStandardVariance" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button font-semibold calculationBtn">σ<sup>2</sup></button>
                            </div>
                            <div class="flex justify-center items-center mb-3">
                                <button class="border border-primary_button bg-primary_button/20 hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button btn_design" value="0">0</button>
                            </div>
                            <div class="flex justify-center items-center mb-3">
                                <button class="border border-primary_button bg-primary_button/20 hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button font-semibold btn_design" value=".">.</button>
                            </div>
                            <div class="flex justify-center items-center mb-3">
                                <button title="Exponent" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button font-semibold btn_design" value="^">EXP</button>
                            </div>
                            <div class="flex justify-center items-center mb-3">
                                <button title="Sample Standard Deviation" id="sampleStandardDeviation" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button font-semibold calculationBtn">s</button>
                            </div>
                            <div class="flex justify-center items-center mb-3">
                                <button title="Sample Standard Variance" id="sampleStandardVariance" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button font-semibold calculationBtn">s<sup>2</sup></button>
                            </div>
                            <div class="flex justify-center items-center mb-3">
                                <button title="Clear All Data" id="clearAllData" class="border border-primary_button bg-primary_button/20 hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button font-semibold">CAD</button>
                            </div>
                            <div class="flex justify-center items-center mb-3">
                                <button title="Clear input" id="clearInput" class="border border-primary_button bg-primary_button/20 hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button font-semibold">C</button>
                            </div>
                            <div class="flex justify-center items-center mb-3">
                                <button title="Add a number" id="addData" class="border border-primary_button bg-primary_button/20 hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button font-extrabold">ADD</button>
                            </div>
                            <div class="flex justify-center items-center mb-3">
                                <button id="btnPlusMinus" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button font-semibold">±</button>
                            </div>
                            <div class="flex justify-center items-center mb-3">
                                <button title="Geometric Mean" id="geometricMean" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button font-semibold calculationBtn">GM</button>
                            </div>
                        </div>
                    </div>
                    <div id="valueDivs" class="order-first sm:order-last lg:col-span-2 m-0 border cls-shadow p-4"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="./app/views/pages/statistics-calculator/statistics-pad-script.js"></script>