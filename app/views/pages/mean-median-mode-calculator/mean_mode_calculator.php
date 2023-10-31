<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 gap-5 mb-4">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Mean, Median, Mode, Range Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <span class="block font-semibold pb-6 text-gray-400">Please provide numbers separated by comma(,) to calculate.</span>
                <p id="warnspan" class="text-primary_button m-0"></p>
                <div class="relative flex items-center border rounded-3xl w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:mt-1">
                    <textarea id="inputTextarea" cols="108" placeholder="Enter Your Numbers" class="outline-none sm:h-32 mx-5 py-2 duration-300"></textarea>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="btnCalcualte" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>
    </div>

    <div id="resultDiv" class="hidden text-center col-span-1 mb-4">
        <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
        <p id="meanResult"></p>
        <p id="medianResult"></p>
        <p id="modeResult"></p>
        <p id="rangeResult"></p>
        <p id="geometricMeanResult"></p>
        <p id="largestResult"></p>
        <p id="smallestResult"></p>
        <p id="sumResult"></p>
        <p id="countResult"></p>
        <p id="sortedDataSetResult"></p>
        <div id="chartContainer" style="display: none;" class="w-[500px] max-w-full h-[370px] mx-auto"></div>
    </div>
</section>

<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<script src="./app/views/pages/mean-median-mode-calculator/mean-median-mode-script.js"></script>
<script>
    window.onload = function() {
        // Get the textarea element and calculate the chart values on button click
        var textarea = document.getElementById("inputTextarea");
        var calculateButton = document.getElementById("btnCalcualte");

        calculateButton.addEventListener("click", function() {
            // Split the textarea value into an array of numbers
            var values = textarea.value.split(",").map(function(item) {
                return parseInt(item.trim(), 10);
            });

            // Initialize the chart with the calculated values
            var options = {

                data: [{
                    type: "column",
                    dataPoints: values.map(function(value, index) {
                        return {
                            label: (index + 1).toString(),
                            y: value
                        };
                    })
                }]
            };

            // Render the chart
            var chart = new CanvasJS.Chart("chartContainer", options);
            chart.render();

            // Show the chart container
            document.getElementById("chartContainer").style.display = "block";
        });
    };
</script>