<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 gap-5 mb-4">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Triangle Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p class="block tex-sm pb-6 text-gray-400"><span class="text-primary_button">*</span>Please enter any <span class="font-semibold">three</span> values including at least <span class="font-semibold">one side</span>.</p>
                <p id="warninID" class="text-primary_button"></p>
                <p id="sidesWarning" class="text-primary_button"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="sideA" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="sideA" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Side a</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="sideB" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="sideB" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Side b</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="sideC" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="sideC" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Side c</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="angleA" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="angleA" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Angle A</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="angleB" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="angleB" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Angle B</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="angleC" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="angleC" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Angle C</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="calcTriangle" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Generate</button>
                </div>
            </div>
        </div>

        <div id="solutionDiv" class="hidden text-start md:text-center mb-4">
            <div class="bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution1"></p>
            <p id="solution2"></p>
            <p id="solution3"></p>
            <p id="solution4"></p>
            <p id="solution5"></p>
            <p id="solution6"></p>
            <p id="solution7"></p>
            <p id="solution8"></p>
            <p id="solution9"></p>
            <p id="solution10"></p>
            <p id="solution11"></p>
            <p id="solution12"></p>
            <p id="solution13"></p>
            <p id="solution14"></p>
        </div>
    </div>
</section>

<script src="./app/views/pages/triangle-calculator/triangle-script.js"></script>