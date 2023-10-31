<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="mb-4">
        <!--  1st ->> 2D distance -->
        <div class="m-0 cls-shadow h-full bg-white rounded-lg max-w-[450px] mx-auto">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Basic Calculator</h3>
            <div class="py-5 px-4 cls-shadow mx-auto rounded-lg mb-4">
                <p id="memoryID" class="text-primary_button m-0 duration-300"></p>
                <p id="limit1" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 gap-6 mb-4">
                    <div class="relative flex items-center border rounded-full w-full my-0 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="text" id="NumberInput" class="w-full h-9 sm:h-10 my-0 px-5 text-xs md:text-sm outline-none" placeholder=" " disabled>
                        <label for="NumberInput" class="absolute top-[10px] left-[34px] maxcosm:text-[14px] text-label_color duration-300 pointer-events-none">Math Expressions:</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full my-0 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="text" id="AnswerInput" class="w-full h-9 sm:h-10 my-0 px-5 text-xs md:text-sm outline-none" placeholder=" " value="" disabled>
                        <label for="AnswerInput" class="absolute top-[10px] left-[34px] maxcosm:text-[14px] text-label_color duration-300 pointer-events-none">Solution</label>
                    </div>
                </div>

                <div class="grid grid-cols-5 gap-2 [&>*]:maxcosm:text-[11px] mb-4">
                    <div class="flex justify-center items-center mb-3">
                        <button class="border border-primary_button bg-primary_button/20 hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button btn_design" value="7">7</button>
                    </div>
                    <div class="flex justify-center items-center mb-3">
                        <button class="border border-primary_button bg-primary_button/20 hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button btn_design" value="8">8</button>
                    </div>
                    <div class="flex justify-center items-center mb-3">
                        <button class="border border-primary_button bg-primary_button/20 hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button btn_design" value="9">9</button>
                    </div>
                    <div class="flex justify-center items-center mb-3">
                        <button class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button btn_design" value="+">+</button>
                    </div>
                    <div class="flex justify-center items-center mb-3">
                        <button id="btnRemove" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button xs:font-semibold">BACK</button>
                    </div>
                    <div class="flex justify-center items-center mb-3">
                        <button class="border border-primary_button bg-primary_button/20 hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button btn_design" value="4">4</button>
                    </div>
                    <div class="flex justify-center items-center mb-3">
                        <button class="border border-primary_button bg-primary_button/20 hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button btn_design" value="5">5</button>
                    </div>
                    <div class="flex justify-center items-center mb-3">
                        <button class="border border-primary_button bg-primary_button/20 hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button btn_design" value="6">6</button>
                    </div>
                    <div class="flex justify-center items-center mb-3">
                        <button class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button btn_design" value="-">–</button>
                    </div>
                    <div class="flex justify-center items-center mb-3">
                        <button id="btnAnswer" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button xs:font-semibold">Ans</button>
                    </div>
                    <div class="flex justify-center items-center mb-3">
                        <button class="border border-primary_button bg-primary_button/20 hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button btn_design" value="1">1</button>
                    </div>
                    <div class="flex justify-center items-center mb-3">
                        <button class="border border-primary_button bg-primary_button/20 hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button btn_design" value="2">2</button>
                    </div>
                    <div class="flex justify-center items-center mb-3">
                        <button class="border border-primary_button bg-primary_button/20 hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button btn_design" value="3">3</button>
                    </div>
                    <div class="flex justify-center items-center mb-3">
                        <button class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button btn_design" value="×">×</button>
                    </div>
                    <div class="flex justify-center items-center mb-3">
                        <button id="btnMemoryAdd" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button xs:font-semibold">M+</button>
                    </div>
                    <div class="flex justify-center items-center mb-3">
                        <button class="border border-primary_button bg-primary_button/20 hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button btn_design" value="0">0</button>
                    </div>
                    <div class="flex justify-center items-center mb-3">
                        <button class="border border-primary_button bg-primary_button/20 hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button font-semibold btn_design" value=".">.</button>
                    </div>
                    <div class="flex justify-center items-center mb-3">
                        <button id="btnExponent" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button xs:font-semibold btn_design" value="^">EXP</button>
                    </div>
                    <div class="flex justify-center items-center mb-3">
                        <button class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button btn_design" value="/">÷</button>
                    </div>
                    <div class="flex justify-center items-center mb-3">
                        <button id="btnMemoryRemove" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button xs:font-semibold">M-</button>
                    </div>
                    <div class="flex justify-center items-center mb-3">
                        <button id="btnPlusMinus" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button xs:font-semibold">±</button>
                    </div>
                    <div class="flex justify-center items-center mb-3">
                        <button id="btnRandomGenerator" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button xs:font-semibold">RND</button>
                    </div>
                    <div class="flex justify-center items-center mb-3">
                        <button id="btnAllClear" class="border border-primary_button bg-primary_button/20 hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button xs:font-semibold">AC</button>
                    </div>
                    <div class="flex justify-center items-center mb-3">
                        <button id="btnSolution" class="border border-primary_button bg-primary_button/20 hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button xs:font-semibold">=</button>
                    </div>
                    <div class="flex justify-center items-center mb-3">
                        <button id="btnMemoryShow" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button xs:font-semibold">MR</button>
                    </div>
                </div>
                <div>
                    <div id="history" class="hidden text-label_color maxcosm:text-[11px] mb-4">
                        <p class="font-semibold">Previous Calculations:</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="./app/views/pages/basic-calculator/basic-script.js"></script>