<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#calculate').on('click', function() {
            let x1 = parseFloat($('#x1').val());
            let y1 = parseFloat($('#y1').val());
            let x2 = parseFloat($('#x2').val());
            let y2 = parseFloat($('#y2').val());

            // Calculate Distance
            let distance = Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2));

            // Calculate Slope and Angle (in radians)
            let slope = (y2 - y1) / (x2 - x1);
            let angle = Math.atan(slope);

            // Calculate the Equation of the Line
            let m = slope;
            let c = y1 - m * x1;

            // Create the scaling factor (you can adjust this value as needed)
            let scale = 50;

            // Scale the points for drawing on the canvas
            let canvas = document.getElementById('graph');
            let ctx = canvas.getContext('2d');
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            let scaledX1 = x1 * scale;
            let scaledY1 = canvas.height - y1 * scale;
            let scaledX2 = x2 * scale;
            let scaledY2 = canvas.height - y2 * scale;

            // Draw the first point
            ctx.beginPath();
            ctx.arc(scaledX1, scaledY1, 5, 0, 2 * Math.PI);
            ctx.fillStyle = '#FF823C';
            ctx.fill();

            // Draw the second point
            ctx.beginPath();
            ctx.arc(scaledX2, scaledY2, 5, 0, 2 * Math.PI);
            ctx.fillStyle = '#FF823C';
            ctx.fill();

            // Draw a line connecting the points
            ctx.beginPath();
            ctx.moveTo(scaledX1, scaledY1);
            ctx.lineTo(scaledX2, scaledY2);
            ctx.strokeStyle = '#FF823C';
            ctx.stroke();

            // Output the results
            console.log('Distance: ' + distance);
            console.log('Slope: ' + slope);
            console.log('Angle (in radians): ' + angle);
            console.log('Equation of the Line: y = ' + m + 'x + ' + c);
        });
    });
</script>


<!DOCTYPE html>
<html>

<head>
    <title>Point Calculation and Graph</title>
    <!-- <link href="<?php echo $assetConfig['asset_url']; ?>/css/output.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="../app/views/assets/css/output.css">

    <!-- <style>
        #graph::before {
            content: '';
            position: absolute;
            top: 0px;
            left: 0px;
            width: 40px;
            height: 40px;
            background-color: red;
        }
    </style> -->
</head>

<body>
    <label for="x1">Point 1 (x1, y1): </label>
    <input type="number" id="x1">
    <input type="number" id="y1">
    <br>
    <label for="x2">Point 2 (x2, y2): </label>
    <input type="number" id="x2">
    <input type="number" id="y2">
    <br>
    <button id="calculate" class="border">Calculate</button>
    <br>
    <!-- <div id="graph-div" class="relative before:content-['^'] before:absolute before:top-0 before:left-0 before:w-6 before:h-4"> -->
    <div id="graph-div" class="relative w-[400px] h-[400px] before:content-['^'] before:absolute before:top-0 before:left-0 after:content-['^'] after:absolute after:bottom-0 after:right-0 after:rotate-90 text-3xl">
        <canvas id="graph" width="400" height="400" style="aspect-ratio: auto 150 / 150; border-left: 1px solid black; border-bottom: 1px solid black;"></canvas>

    </div>
</body>

</html>