<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="mb-4">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Statistics Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p class="text-label_color pb-6"><span class="text-primary_button">* </span>Please provide numbers separated by comma(,) to calculate.</p>
                <p id="limit1" class="text-primary_button m-0"></p>
                <div class="relative flex items-center border rounded-3xl w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:mt-1">
                    <textarea id="statInput" cols="108" placeholder="Enter Your Numbers" class="outline-none sm:h-32 mx-5 py-2 w-full max-w-full duration-300 focus:placeholder:text-primary_button"></textarea>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="calculateStats" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button mb-4">Calculate</button>
                </div>
            </div>
        </div>

        <div id="result" class="hidden text-start sm:text-center col-span-1 mb-4">
            <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solutionCount"></p>
            <p id="solutionSum"></p>
            <p id="solutionMean"></p>
            <p id="solutionMedian"></p>
            <p id="solutionMode"></p>
            <p id="solutionLargest"></p>
            <p id="solutionSmallest"></p>
            <p id="solutionGeometricMean" class="pb-[2px]"></p>
            <p id="solutionStandard_Deviation" class="pb-[2px]"></p>
            <p id="solutionVariance" class="pb-[2px]"></p>
            <p id="solutionSample_Standard_Deviation" class="pb-[2px]"></p>
            <p id="solutionSample_Variance" class="pb-[2px]"></p>
            <p id="solutionSorted_Data" class="py-4"></p>
        </div>
    </div>
</section>

<script src="./app/views/pages/statistics-calculator/statistics-script.js"></script>