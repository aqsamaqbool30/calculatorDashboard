<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div class="accordion grid grid-cols-1 mb-4">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Circle Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <span class="block tex-sm pb-6 text-gray-400"><span class="text-primary_button">*</span>Please enter any value below to calculate the remaining values of a circle.</span>
                <p id="limit1" class="text-primary_button m-0"></p>
                <p id="limit2" class="text-primary_button m-0"></p>
                <div class="grid sm:grid-cols-2 md:grid-cols-4 sm:gap-2 md:gap-4 mb-4">
                    <div class="relative mb-5 md:mb-8">
                        <input type="number" id="radius" class="border rounded-full w-full h-9 sm:h-10 px-5 p-2 focus:outline-none peer focus:border-primary_button focus:text-primary_button maxsm:text-15px" placeholder=" " required>
                        <label for="radius" class="absolute top-2 left-5 peer-focus:-top-5 peer-valid:-top-5 peer-focus:text-primary_button text-label_color pointer-events-none transition-all duration-300">Radius (R)</label>
                    </div>
                    <div class="relative mb-5 md:mb-8">
                        <input type="number" id="diameter" class="border rounded-full w-full h-9 sm:h-10 px-5 p-2 focus:outline-none peer focus:border-primary_button focus:text-primary_button maxsm:text-15px" placeholder=" " required>
                        <label for="diameter" class="absolute top-2 left-5 peer-focus:-top-5 peer-valid:-top-5 peer-focus:text-primary_button text-label_color pointer-events-none transition-all duration-300">Diameter (D)</label>
                    </div>
                    <div class="relative mb-5 md:mb-8">
                        <input type="number" id="circumference" class="border rounded-full w-full h-9 sm:h-10 px-5 p-2 focus:outline-none peer focus:border-primary_button focus:text-primary_button maxsm:text-15px" placeholder=" " required>
                        <label for="circumference" class="absolute top-2 left-5 peer-focus:-top-5 peer-valid:-top-5 peer-focus:text-primary_button text-label_color pointer-events-none transition-all duration-300">Circumference (C)</label>
                    </div>
                    <div class="relative mb-5 md:mb-8">
                        <input type="number" id="area" class="border rounded-full w-full h-9 sm:h-10 px-5 p-2 focus:outline-none peer focus:border-primary_button focus:text-primary_button maxsm:text-15px" placeholder=" " required>
                        <label for="area" class="absolute top-2 left-5 peer-focus:-top-5 peer-valid:-top-5 peer-focus:text-primary_button text-label_color pointer-events-none transition-all duration-300">Area (A)</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="calcCirlce" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>
    </div>
    <div id="result" class="hidden text-start md:text-center mb-4">
        <div class="bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
        <p id="solution1"></p>
        <p id="solution2"></p>
        <p id="solution3"></p>
        <p id="solution4"></p>
        <p id="solution5"></p>
    </div>
</section>

<script src="./app/views/pages/circle-calculator/circle-script.js"></script>