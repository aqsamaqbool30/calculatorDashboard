<section id="inputdivs" class="container max-w-[791px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div class="cls-shadow">
        <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Body Type Calculator
            </h2>
            <div class="flex flex-col items-center justify-center m-0">
                <span class=" block tex-sm text-gray-400 m-0 p-10">
                    The Body Type Calculator is designed for females to find their "body shape," which can be used for getting targeted outfit Ideas.

                </span>
            </div>
            <p id="warning" class="text-primary_button mb-5 ms-5"></p>  

            <div class=" grid grid-cols-1 sm:grid-cols-2 sm:gap-4  px-5">
                <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                    <input type="number" id="bust" name="bust" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                    <label for="bust" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Bust Size:</label>
                </div>
                <div class="flex ">
                    <select id="bustUnit" class=" select_class maxsm:mt-5 w-full h-9 sm:h-10 outline-none border rounded-full sm:m-0 px-2 sm:px-5 text-[#a2adb9] focus:text-primary_button focus:border-primary_button cursor-pointer">
                        <option value="cm" selected>cm</option>
                        <option value="in">inches</option>
                    </select>
                </div>
            </div>
            <div class=" grid grid-cols-1 maxmd:mt-5 sm:grid-cols-2 sm:gap-4  px-5">
                <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                    <input type="number" id="waist" name="waist" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                    <label for="waist" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Waist Size:</label>
                </div>
                <div class="flex  m-0">
                    <select id="waistUnit" class=" select_class maxsm:mt-5 w-full h-9 sm:h-10 outline-none border rounded-full sm:m-0 px-2 sm:px-5 text-[#a2adb9] focus:text-primary_button focus:border-primary_button cursor-pointer">
                        <option value="cm" selected>cm</option>
                        <option value="in">inches</option>
                    </select>
                </div>
            </div>

            <div class=" grid grid-cols-1 sm:grid-cols-2 maxmd:mt-5 sm:gap-4  px-5">
                <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                    <input type="number" id="highHip" name="highHip" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                    <label for="highHip" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">High Hip Size:</label>
                </div>
                <div class="flex  m-0">
                    <select id="highHipUnit" class=" select_class maxsm:mt-5 w-full h-9 sm:h-10 outline-none border rounded-full sm:m-0 px-2 sm:px-5 text-[#a2adb9] focus:text-primary_button focus:border-primary_button cursor-pointer">
                        <option value="cm" selected>cm</option>
                        <option value="in">inches</option>
                    </select>
                </div>
            </div>


            <div class=" grid grid-cols-1 sm:grid-cols-2 sm:gap-4 maxmd:mt-5 px-5">
                <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                    <input type="number" id="hip" name="hip" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                    <label for="hip" class=" absolute top-[10px] left-[34px] text-[#a2adb9] duration-300 pointer-events-none">High Hip Size:</label>
                </div>
                <div class="flex  m-0">
                    <select id="hipUnit" class=" select_class w-full h-9 maxsm:mt-5 sm:h-10 outline-none border rounded-full sm:m-0 px-2 sm:px-5 text-[#a2adb9] focus:text-primary_button focus:border-primary_button cursor-pointer">
                        <option value="cm" selected>cm</option>
                        <option value="in">inches</option>
                    </select>
                </div>
            </div>


            <div class="flex justify-center items-center">
                <button id="Calculate" class="border mb-10 border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
            </div>
    </div>
    <div id="additionalDiv" class="hidden mt-5 bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg">
        Result
    </div>

    <div class=" mt-5 text-center">
        <div id="result"></div>
        <div id="resultbody"></div>
    </div>

</section>
<script src="./app/views/pages/body-type-calculator/body-type-script.js"></script>