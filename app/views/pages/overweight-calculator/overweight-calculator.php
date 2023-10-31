<link rel="stylesheet" href="./app/views/pages/fat-intake-calculator/fat-intake-calculator-style.css">

<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Overweight Calculator (Metric Units)
            </h3>
            <form id="calculator-form">

                <div class="py-5 px-4">

                    <div class=" grid md:grid-cols-2 sm:gap-4">
                        <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="age" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="age" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Age:</label>
                        </div>
                        <div class="flex m-0 maxmd:mt-5">
                            <select id="gender" class="w-full h-9 sm:h-10 outline-none border rounded-full sm:m-0 px-2 sm:px-5 text-[#a2adb9] focus:text-primary_button focus:border-primary_button cursor-pointer">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="relative maxmd:mt-5 flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="height" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="height" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (in cm):</label>
                        </div>

                        <div class="relative maxmd:mt-5 flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="weight" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="weight" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Weight (in kg):</label>
                        </div>
                    </div>


                    <div class="flex justify-center maxmd:mt-5 items-center">
                        <input type="submit" value="Calculate" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">

                    </div>
                </div>
            </form>
        </div>
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Overweight Calculator (US Units)
            </h3>
            <form id="calculator-forms">

                <div class="py-5 px-4">

                    <div class=" grid md:grid-cols-2 sm:gap-4">
                        <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="ages" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="ages" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Age:</label>
                        </div>
                        <div class="flex m-0">
                            <select id="genders" class="maxmd:mt-5 w-full h-9 sm:h-10 outline-none border rounded-full sm:m-0 px-2 sm:px-5 text-[#a2adb9] focus:text-primary_button focus:border-primary_button cursor-pointer">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="relative flex  maxmd:mt-5 items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="feet" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="feet" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (feet):</label>
                        </div>
                        <div class="relative flex  maxmd:mt-5 items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="inches" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="inches" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (inches):</label>
                        </div>
                    </div>
                    <div class=" grid md:grid-cols-1 maxmd:mt-5 sm:gap-4">
                        <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="weights" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="weights" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Weight (in kg):</label>
                        </div>
                    </div>

                    <div class="flex justify-center maxmd:mt-5 items-center">
                        <input type="submit" value="Calculate" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">

                    </div>
                </div>
            </form>
        </div>

    </div>
    <div id="additionalDiv" style="display: none;" class="bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg">
        Result
    </div>

    <div class=" text-center flex justify-center items-center">
        <div id="result"></div>
    </div>
</section>

<script src="./app/views/pages/overweight-calculator/overweight-calculator-script.js"></script>