<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 gap-5 mb-4">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Long Division Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p id="wrongInput" class="text-primary_button m-0"></p>
                <p id="warning" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="divider" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="divider" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Divider</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mx-auto mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="dividend" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="dividend" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Dividend</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="calcDivision" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>
        <div id="result" class="hidden text-start md:text-center col-span-1 mb-4">
            <div class="bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution1"></p>
            <p id="solution2"></p>
            <p id="solution3"></p>
            <p id="solution4"></p>
        </div>
</section>

<script src="./app/views/pages/long-division-calculator/long-division-script.js"></script>