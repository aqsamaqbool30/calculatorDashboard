<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5 mb-4">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Height Calculator <span class="text-base">(Metric Units)</span></h3>
            <div class="py-5 px-4 mb-4">
                <p id="limit1" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="age" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="age" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Child's Age</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="currentHeight" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="currentHeight" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Child's Height (cm)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="weight" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="weight" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Child's Weight (Kg)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="motherHeight" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="motherHeight" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Mother's Height (cm)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="fatherHeight" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="fatherHeight" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Father's Height (cm)</label>
                    </div>
                    <div class="col-span-2 flex justify-center gap-7 maxsm:text-15px mb-4">
                        <span>Child's Gender: </span>
                        <div class="flex items-center cursor-pointer mb-4">
                            <input type="radio" id="male" name="gender" value="male" class="w-4 sm:w-5 h-4 sm:h-5 mr-2" checked>
                            <label for="male" class="radiolabel">Male</label>
                        </div>
                        <div class="flex items-center cursor-pointer mb-4">
                            <input type="radio" id="female" name="gender" value="female" class="w-4 sm:w-5 h-4 sm:h-5 mr-2">
                            <label for="female" class="radiolabel">Female</label>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="heightWithMatric" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <div id="result" class="hidden text-center col-span-1 lg:col-span-2 [&>*]:py-2 mb-4">
            <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution1"></p>
            <p id="solution2"></p>
            <p id="solution3"></p>
            <p id="solution4"></p>
            <p id="solution5"></p>
            <p id="solution6"></p>
        </div>
    </div>
</section>

<script src="./app/views/pages/height-calculator/height-script.js"></script>