<link rel="stylesheet" href="./app/views/pages/fat-intake-calculator/fat-intake-calculator-style.css">

<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Healthy Weight Calculator
                (Metric Units)
            </h3>

            <div class="py-5 px-4">

                <div class=" grid grid-cols-1 sm:gap-4">
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="height" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="height" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (cm):</label>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <button id="calculate" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button"> Calculate</button>

                </div>
            </div>
        </div>
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Healthy Weight Calculator
                (US Units)
            </h3>
            <div class="py-5 px-4">

                <div class=" grid md:grid-cols-2 sm:gap-4">
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="heightFeet" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="heightFeet" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (feet):</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="heightInches" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="heightInches" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (inches):</label>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <button id="calculates" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button"> Calculate</button>

                </div>
            </div>
        </div>

    </div>
    <div id="additionalDiv" style="display: none;" class="bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg">
        Result
    </div>

    <div class=" text-center flex justify-center items-center">
        <div id="weightRangeResult"></div>
    </div>

    <div class=" text-center flex justify-center items-center mb-0 pb-0">
        <span id="severelyUnderweight" class="pe-2"></span>
        <span id="underweight" class="pe-4"></span>
        <span id="overweight" class="pe-4"></span>
        <span id="obeseClass1" class="pe-4"></span>
        <span id="obeseClass2" class="pe-4"></span>
        <span id="obeseClass3" class="ps-4"></span>
    </div>
    <div class="text-center flex justify-center items-center">
        <div class="hidden" id="img">
            <img src="https://d26tpo4cm8sb6k.cloudfront.net/img/healthy-weight.png" alt="">
        </div>
    </div>

</section>

<script src="./app/views/pages/healthy-weight-calculator/healthy-weight-calculator-script.js"></script>