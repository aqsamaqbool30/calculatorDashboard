<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 gap-5 mb-4">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Permutation and Combination Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p id="warning" class="text-primary_button"></p>
                <p id="warning2" class="text-primary_button"></p>
                <div class="grid grid-cols-1 md:grid-cols-2 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input min="0" step="1" type="number" id="totalSet" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="totalSet" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Total Amount in a Set (n)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input min="0" step="1" type="number" id="subSet" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="subSet" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Amount in each Sub-Set (r)</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="permutation-combination" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <div id="result" class="hidden text-start md:text-center col-span-1 lg:col-span-2 mb-4">
            <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
           <div class="wordBreakPermutation"> <p id="solution1" class="break-words"></p> <div>
          <div class="wordBreakPermutation">  <p id="solution2" class="break-words mt-1"></p> <div>
            <!-- <p id="solution3"></p> -->
        </div>
</section>

<script src="./app/views/pages/permutation-combination-calculator/permutation-combination-script.js"></script>