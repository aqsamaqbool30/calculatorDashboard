 <section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
     <div id="inputdivs" class="accordion grid grid-cols-2 gap-5 mb-4">
         <div class="m-0 cls-shadow h-full bg-white rounded-lg">
             <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Single Random Number Generator</h3>
             <div class="py-5 px-4 mb-4">
                 <p id="limit1" class="text-primary_button m-0"></p>
                 <div class="flex maxsm:flex-col justify-between mb-4">
                     <div class="relative flex items-center border rounded-full w-full sm:w-[49%] mb-5 md:mb-8 sm:mr-3 focus-within:text-primary_button maxsm:text-15px">
                         <input type="number" id="minNumber" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                         <label for="minNumber" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Minimum Number</label>
                     </div>
                     <div class="relative flex items-center border rounded-full w-full sm:w-[49%] mb-5 md:mb-8 focus-within:text-primary_button maxsm:mt-1">
                         <input type="number" id="maxNumber" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                         <label for="maxNumber" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Maximum Number</label>
                     </div>
                 </div>
                 <div class="flex justify-center items-center mb-4">
                     <button id="generate" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Generate</button>
                 </div>
             </div>
         </div>
         <!-- second calculator >> Comprehensive -->
         <div class="m-0 cls-shadow h-full bg-white rounded-lg">
             <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Comprehensive Version</h3>
             <div class="py-5 px-4 mb-4">
                 <p id="limit2" class="text-primary_button m-0"></p>
                 <span class="block mb-3 font-semibold maxsm:text-15px text-gray-400">Select Number Type:</span>
                 <div class="flex justify-center gap-10 maxsm:text-15px mb-4">
                     <div class="flex items-center mb-4">
                         <input id="integ" type="radio" name="number_type" value="integer" class="w-4 sm:w-5 h-4 sm:h-5 mr-2">
                         <label for="integ" class="radiolabel">Integer</label>
                     </div>
                     <div class="flex items-center mb-4">
                         <input id="deci" type="radio" name="number_type" value="decimal" class="w-4 sm:w-5 h-4 sm:h-5 mr-2" checked>
                         <label for="deci" class="radiolabel">Decimal</label>
                     </div>
                 </div>
                 <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 m-0 maxsm:text-sm">
                     <div class="relative flex items-center border rounded-full mb-5 md:mb-8 sm:mr-3 focus-within:text-primary_button">
                         <input type="number" id="min_range" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                         <label for="min_range" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Minimum Number</label>
                     </div>
                     <div class="relative flex items-center border rounded-full mb-5 md:mb-8 sm:ml-3 focus-within:text-primary_button">
                         <input type="number" id="max_range" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                         <label for="max_range" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Maximum Number</label>
                     </div>
                     <div class="relative flex items-center border rounded-full mb-5 md:mb-8 sm:mr-3 focus-within:text-primary_button">
                         <input type="number" id="precision" step="0.1" min="0" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                         <label for="precision" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Precision</label>
                     </div>
                     <div class="relative flex items-center border rounded-full mb-5 md:mb-8 sm:ml-3 focus-within:text-primary_button">
                         <input type="number" id="num_count" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                         <label for="num_count" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Numbers to Generate</label>
                     </div>
                 </div>
                 <span class="block mb-3 font-semibold maxsm:text-15px text-gray-400">Select Order:</span>
                 <div class="flex justify-center items-center mb-4">
                     <div class="flex justify-start xs:justify-center items-center mb-4 mr-10">
                         <input id="ascen" type="radio" name="order" value="ascending" class="w-4 sm:w-5 h-4 sm:h-5 mr-2" checked><label for="ascen" class="radiolabel">Asending</label>
                     </div>
                     <div class="flex justify-start xs:justify-center items-center mb-4 mr-10">
                         <input id="dscen" type="radio" name="order" value="descending" class="w-4 sm:w-5 h-4 sm:h-5 mr-2"> <label for="dscen" class="radiolabel">Descending</label>
                     </div>
                     <div class="flex justify-start xs:justify-center items-center mb-4">
                         <input id="any" type="radio" name="order" value="any" class="w-4 sm:w-5 h-4 sm:h-5 mr-2"> <label for="any" class="radiolabel">Any</label>
                     </div>
                 </div>
                 <div class="flex justify-center items-center mb-4">
                     <button id="generate_random_num" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-60 h-10 rounded-full duration-150 text-primary_button">Generate Random Numbers</button>
                 </div>
             </div>
         </div>
     </div>
     <div id="result" class="hidden text-start md:text-center col-span-1 lg:col-span-2 mb-4">
         <div class=" bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
         <div id="randomInteger" class="random-input m-0"></div>
         <div id="random_result" class="text-center m-0"></div>
     </div>
 </section>

 <script src="./app/views/pages/random-number-calculator/random-number-script.js"></script>