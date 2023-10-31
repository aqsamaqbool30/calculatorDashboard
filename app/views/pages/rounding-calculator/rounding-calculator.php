<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 gap-5 mb-4">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Rounding Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p class="block pb-6 text-gray-400"><span class="text-primary_button">*</span>Percision is used to determine after how many digits the decimal takes place in the result.</p>
                <p id="warning" class="text-primary_button m-0"></p>
                <p id="warningID" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="number" step="0.1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="number" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Enter Number</label>
                    </div>
                    <div id="percisionDIv" class="hidden items-center relative border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="percisionID" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="percisionID" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Percision (0 - 100)</label>
                    </div>
                    <select id="numberSelect" class="select_class w-full h-9 sm:h-10 text-sm md:text-base outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <?php include './app/views/components/rounding-select-values.php'; ?>
                    </select>
                </div>
                <div class="flex justify-center gap-7 maxsm:text-15px mb-4">
                    <span class="text-label_color">Calculate with: </span>
                    <div class="flex items-center cursor-pointer mb-4">
                        <input type="radio" id="selectPercisionValue" name="std_calcualtion" value="selectPercisionValue" class="w-4 sm:w-5 h-4 sm:h-5 mr-2" checked>
                        <label for="selectPercisionValue" class="radiolabel text-label_color">Select a precision level</label>
                    </div>
                    <div class="flex items-center cursor-pointer mb-4">
                        <input type="radio" id="inputPercisionValue" name="std_calcualtion" value="inputPercisionValue" class="w-4 sm:w-5 h-4 sm:h-5 mr-2">
                        <label for="inputPercisionValue" class="radiolabel text-label_color">Input a precision level</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="rounding-number" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>
    </div>
    <div id="result" class="hidden text-start md:text-center col-span-1 lg:col-span-2 mb-4">
        <div class=" bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
        <p id="solution1"></p>
    </div>
</section>

<script src="./app/views/pages/rounding-calculator/rounding-script.js"></script>