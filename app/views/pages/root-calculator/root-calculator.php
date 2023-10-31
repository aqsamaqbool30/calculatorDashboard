<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5 mb-4">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Square Root Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p id="limit1" class="text-primary_button m-0"></p>
                <p id="limit3" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-3 sm:gap-4 mb-4">
                    <div class="sm:col-span-2 relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="numbSquareroot" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="numbSquareroot" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Enter Number</label>
                    </div>
                    <div class="flex justify-center items-center w-full h-10 mb-4">
                        <button id="squareRoot" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 sm:w-full h-10 sm:h-full rounded-full duration-150 text-primary_button">Calculate</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Cube Root Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p id="limit2" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-3 sm:gap-4 mb-4">
                    <div class="sm:col-span-2 relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="numbCuberoot" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="numbCuberoot" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Enter Number</label>
                    </div>
                    <div class="flex justify-center items-center w-full h-10 mb-4">
                        <button id="cubeRoot" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 sm:w-full h-10 sm:h-full rounded-full duration-150 text-primary_button">Calculate</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="result" class="hidden text-start md:text-center col-span-1 lg:col-span-2 mb-4">
            <div class="bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution1"></p>
            <p id="solution2"></p>
        </div>

        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">General Root Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p id="limit3" class="text-primary_button m-0"></p>
                <p id="limit4" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="numb1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="numb1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Base Number</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="numb2" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="numb2" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Root Number</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="generalRoot" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <div id="result2" class="hidden text-start md:text-center col-span-1 lg:col-span-2 mb-4">
            <div class=" bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution3"></p>
            <p id="solution4"></p>
        </div>
</section>

<script src="./app/views/pages/root-calculator/root-script.js"></script>