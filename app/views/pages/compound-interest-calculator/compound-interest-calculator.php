<section class="container max-w-[991px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1  lg:gap-5">
        <div class="lg:m-0 cls-shadow h-full bg-white rounded-lg maxlg:pb-6">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Half-Life Calculator</h3>
            <div class="py-5 px-4">
                <span class="block tex-sm pb-6 text-gray-400"><span class="text-primary_button">*</span>Enter any three values to get the fourth.</span>
                <div class="grid grid-cols-1 sm:grid-cols-3 sm:gap-4">


                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="time" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="time" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">time (t)</label>
                    </div>
                    <div class="flex m-0">
                        <select id="compoundFrom" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full sm:m-0 px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button cursor-pointer">
                            <option value="annually">Annually</option>
                            <option value="semiannually">Semiannually</option>
                            <option value="quarterly">Quarterly</option>
                            <option value="monthly">Monthly</option>
                            <option value="semimonthly">Semimonthly</option>
                            <option value="biweekly">Biweekly</option>
                            <option value="weekly">Weekly</option>
                            <option value="daily">Daily</option>
                            <option value="continuously">Continuously</option>
                        </select>
                    </div>

                    <div class="flex  m-0">
                        <select id="compoundTo" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full sm:m-0 px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button cursor-pointer">
                            <option value="annually">Annually</option>
                            <option value="semiannually">Semiannually</option>
                            <option value="quarterly">Quarterly</option>
                            <option value="monthly">Monthly</option>
                            <option value="semimonthly">Semimonthly</option>
                            <option value="biweekly">Biweekly</option>
                            <option value="weekly">Weekly</option>
                            <option value="daily">Daily</option>
                            <option value="continuously">Continuously</option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <button id="calculate" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>



    </div>
    <div class="text-center col-span-2">
        <div id="result" class="hidden bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg">Result</div>

    </div>

</section>

<script src="./app/views/pages/half-life/half-life-script.js"></script>