<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Average Calculator</h3>
            <div class="py-5 px-4">
                <span class="text-sm sm:text-base font-semibold">Please provide numbers separated by comma(,) to calculate.</span>
                <div class="">
                    <div class="relative flex items-center border rounded-3xl w-full mb-5 md:mb-8 mt-5 focus-within:text-primary_button focus-within:border-primary_button maxsm:mt-1 placeholder:text-sm sm:placeholder:text-base ">
                        <textarea id="averageInput" cols="108" placeholder="Enter Your Numbers" class="outline-none sm:h-32 mx-5 py-2 duration-300 focus:placeholder:text-primary_button"></textarea>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <button id="avergeBtn" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>
    </div>

    <div id="result" class="hidden bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg">Result</div>
    <div class="text-center">
        <p id="solution1"></p>
        <p id="solution2"></p>
        <p id="solution3"></p>
        <p id="solution4"></p>
        <p id="solution5"></p>
        <p id="solution6"></p>
        <p id="solution7"></p>
        <p id="solution8"></p>
    </div>
</section>

<script src="./app/views/pages/average-calculator/average-script.js"></script>