<section id="inputdivs" class="container max-w-[791px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div class="cls-shadow">
        <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Body Surface Area Calculator</h3>

        <div class="flex flex-col items-center justify-center m-0">
            <span class=" hello block tex-sm text-gray-400 m-0 p-10">The calculator below computes the total surface area of a human body, referred to as body surface area (BSA). Direct measurement of BSA is difficult, and as such many formulas have been published that estimate BSA. The calculator below provides results for some of the most popular formulas.
            </span>

        </div>
        <p id="warning" class=" text-primary_button mb-5 ms-5"></p>
        <div class="flex items-center justify-center mb-5 maxsm:text-sm">
            <div class="pe-4 sm:pe-24">
                <span for="gender" class=" text-label_color">Gender</span>
            </div>
            <div class="px-5">
                <input type="radio" id="genderMale" name="gender" value="male" checked>
                <label for="genderMale" class="radiolabel">Male</label>
            </div>

            <div class="px-5">
                <input type="radio" id="genderFemale" name="gender" value="female">
                <label for="genderFemale" class="radiolabel">Female</label>

            </div>
        </div>
        <div class=" grid grid-cols-1 sm:grid-cols-2 sm:gap-4 px-5">
            <div class="relative flex maxsm:mt-5 items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                <input type="text" id="weight" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                <label for="weight" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Weight:</label>
            </div>
            <div class="flex  m-0">
                <select id="weightUnit" class=" select_class maxsm:mt-5 w-full h-9 sm:h-10 outline-none border rounded-full sm:m-0 px-2 sm:px-5 text-[#a2adb9] focus:text-primary_button focus:border-primary_button cursor-pointer">
                    <option value="kilograms" selected>Kilograms</option>
                    <option value="pounds">Pounds</option>
                    <option value="grams">Grams</option>
                </select>
            </div>


        </div>
        <div class="flex items-center justify-center my-5  maxsm:text-sm">
            <div class="pe-4 sm:pe-24">
                <span for="heightUnit" class=" text-label_color">Height Unit:</span>
            </div>
            <div class="px-5">
                <input type="radio" id="heightUnitCm" name="heightUnit" value="cm">
                <span for="heightUnitCm" class="radiolabel">cm</span>
            </div>

            <div class="px-5">
                <input type="radio" id="heightUnitFt" name="heightUnit" value="ft" checked>
                <span for="heightUnitFt" class="radiolabel">feet</span>
            </div>
        </div>
        <div id="heightFields" class=" grid grid-cols-1 sm:grid-cols-2 sm:gap-4 px-5">
            <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                <input type="text" id="heightFeet" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                <label for="heightFeet" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (Feet):</label>
            </div>
            <div class="relative maxsm:mt-5 flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                <input type="text" id="heightInches" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                <label for="heightInches" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (Inches):</label>
            </div>
        </div>
        <div id="heightCmField" style="display: none;" class=" grid grid-cols-1 px-5">
            <div class="relative maxsm:mt-5 flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                <input type="text" id="heightCm" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                <label for="heightCm" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (cm):</label>
            </div>

        </div>
        <div class="flex justify-center items-center">
            <button id="calculateBtn" class="border mt-5 mb-10 border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
        </div>
    </div>
    <div id="additionalDiv" class=" hidden mt-5 bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg">
        Result
    </div>

    <div class=" text-center mt-5 flex justify-center items-center">
        <div id="results">

        </div>
    </div>
</section>
<script src="./app/views/pages/body-surface-area-calculator/body-surface-area-script.js"></script>