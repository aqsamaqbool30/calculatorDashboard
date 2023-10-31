$(document).ready(function () {
  calculateProbabilities('#probA', '#probB', '#probGenetate');
  function calculateProbabilities(firstval, secondval, btnId) {
    $(btnId).click(function () {
      $('#instruction').addClass('text-gray-400').removeClass('text-primary_button');
      let probA = parseFloat($(firstval).val());
      let probB = parseFloat($(secondval).val());

      let validate = validateInputs([firstval, secondval], 2, '#firstWarn', '#result');
      if (!validate) {
        return;
      } else if (probA > 1 || probA < 0 || probB > 1 || probB < 0) {
        $('#instruction').removeClass('text-gray-400').addClass('text-primary_button');
        $('#result').addClass('hidden');
        return;
      }
      let probANot = 1 - probA;
      let probBNot = 1 - probB;
      let probAandB = probA * probB;
      let probAorB = probA + probB - probAandB;
      let probAorBNotBoth = probAorB - probAandB;
      let probNeitherAorB = 1 - probAorB;
      let probAOnly = probA - probAandB;
      let probBOnly = probB - probAandB;

      $('#solution-div1').append("<p>Probability of A NOT occurring &nbsp; <b>P(A')</b>: " + probANot.toFixed(1) + '</p>');
      $('#solution-div2').append("<p>Probability of B NOT occurring &nbsp; <b>P(B')</b>: " + probBNot.toFixed(1) + '</p>');
      $('#solution-div3').append('<p>Probability of A and B both occurring &nbsp; <b>P(A∩B)</b>: ' + probAandB.toFixed(1) + '</p>');
      $('#solution-div4').append('<p>Probability that A or B or both occur &nbsp; <b>P(A∪B)</b>: ' + probAorB.toFixed(1) + '</p>');
      $('#solution-div5').append('<p>Probability that A or B occurs but NOT both &nbsp; <b>P(AΔB)</b>: ' + probAorBNotBoth.toFixed(1) + '</p>');
      $('#solution-div6').append("<p>Probability of neither A nor B occurring &nbsp; <b>P((A∪B)')</b>: " + probNeitherAorB.toFixed(1) + '</p>');
      $('#solution-div7').append('<p>Probability of A occurring but NOT B &nbsp; <b>P(A \\ B)</b>: ' + probAOnly.toFixed(1) + '</p>');
      $('#solution-div8').append('<p>Probability of B occurring but NOT A &nbsp; <b>P(B \\ A)</b>: ' + probBOnly.toFixed(1) + '</p>');
      $('#solution-div9').addClass('my-6');
      $('#solution-div10').html("<b>P(A')</b> = 1 - P(A') <br> =  + 1 - " + probA + '<br> = ' + probANot.toFixed(1));
      $('#solution-div11').html("<b>P(B')</b> = 1 - P(B') <br> =  + 1 - " + probB + '<br> = ' + probBNot.toFixed(1));
      $('#solution-div12').html('<b>P(A∩B)</b> = P(A) × P(B) <br> = ' + probA + ' * ' + probB + '<br> = ' + probAandB.toFixed(1));
      $('#solution-div13').html('<b>P(A∪B)</b> = P(A) + P(B) - P(A∩B) <br> = ' + probA + ' + ' + probB + ' - ' + probAandB + '<br> = ' + probAorB.toFixed(1));
      $('#solution-div14').html('<b>P(AΔB)</b> = P(A) + P(B) - 2P(A∩B) <br> = ' + probA + ' + ' + probB + ' - ' + ('2 *' + probAandB) + '<br> = ' + probAorBNotBoth.toFixed(1));
      $('#solution-div15').html("<b>P((A∪B)')</b> = 1 - P(A∪B) <br> =  + 1 - " + probAorB + '<br> = ' + probNeitherAorB.toFixed(1));
      $('#solution-div16').html('<b>P(A \\ B)</b> = P(A) × (1- P(B)) <br> = ' + probA + ' * 1 - ' + probB + '<br> = ' + probAOnly.toFixed(1));
      $('#solution-div17').html('<b>P(B \\ A)</b> = (1 - P(A)) × P(B) <br> = 1 - ' + probA + ' * ' + probA + '<br> = ' + probBOnly.toFixed(1));
      for (let i = 1; i <= 8; i++) {
        $(`#solution-div${i}`).removeClass('hidden');
      }
      $('#result').removeClass('hidden');
    });
  }

  $('#probDistribution').click(function () {
    let meanVal = parseFloat($('#mean').val());
    let deviation = parseFloat($('#standardDeviation').val());
    let leftBound = parseFloat($('#leftBound').val());
    let rightBound = parseFloat($('#rightBound').val());
    let Lb1 = -Infinity;
    let Rb1 = leftBound;
    let Lb2 = rightBound;
    let Rb2 = Infinity;
    let validate = validateInputs(['#mean', '#standardDeviation', '#leftBound', '#rightBound'], 4, '#limit4', '#result');
    if (!validate) {
      return;
    }
    let solution1 = calculateProbability(meanVal, deviation, leftBound, rightBound);
    let solution2 = calculateProbability(meanVal, deviation, Lb1, Rb1);
    let solution3 = calculateProbability(meanVal, deviation, Lb2, Rb2);
    let solution4 = 1 - solution1;
    $('#solution-div10').html(`<b>The probability between ${leftBound} and ${rightBound} is: </b>` + solution1.toFixed(6).replace(/\.?00+$/, ''));
    $('#solution-div11').html(`<br><b>The probability outisde ${leftBound} and ${rightBound} is: </b>` + solution4.toFixed(6).replace(/\.?00+$/, ''));
    $('#solution-div12').html(`<b>The probability of ${leftBound} or less (≤ ${leftBound}): </b>` + solution2.toFixed(6).replace(/\.?00+$/, ''));
    $('#solution-div13').html(`<b>The probability of ${rightBound} or more (≥ ${rightBound}): </b>` + solution3.toFixed(6).replace(/\.?00+$/, ''));
    $('#solution-div9').removeClass('my-6');
    for (let i = 13; i <= 17; i++) {
      $(`#solution-div${i}`).html('');
    }
    for (let i = 1; i <= 8; i++) {
      $(`#solution-div${i}`).addClass('hidden');
    }
    $('#result').removeClass('hidden');
  });
  function calculateProbability(mean, stdDev, Lb, Rb) {
    let Z_Lb = (Lb - mean) / stdDev;
    let Z_Rb = (Rb - mean) / stdDev;
    let probabilityWithinInterval = math.erf(Z_Rb / Math.sqrt(2)) / 2 - math.erf(Z_Lb / Math.sqrt(2)) / 2;
    return probabilityWithinInterval;
  }

  $('#independentProbability').click(function () {
    let probabilityA = parseFloat($('#probabilityA').val());
    let repeatA = parseFloat($('#repeatA').val());
    let probabilityB = parseFloat($('#probabilityB').val());
    let repeatB = parseFloat($('#repeatB').val());
    let validate = validateInputs(['#probabilityA', '#repeatA', '#probabilityB', '#repeatB'], 4, '#thirdWarning', '#result2');
    if (!validate) {
      return;
    } else if (probabilityA > 1 || probabilityA < 0 || probabilityB > 1 || probabilityB < 0) {
      $('#newwarning').html('Please provide values for probability of Event A and Event B between 0 and 1.');
      $('#newwarning').addClass('pb-6');
      $('#result2').addClass('hidden');
      return;
    }
    let probabilityOfANtimes = Math.pow(probabilityA, repeatA);
    probabilityOfANtimes = probabilityOfANtimes;
    let probabilityOfANot = Math.pow(1 - probabilityA, repeatA);
    let probabilityOfA = 1 - probabilityOfANot;
    let probabilityOfBNtimes = Math.pow(probabilityB, repeatB);
    probabilityOfBNtimes = probabilityOfBNtimes;
    let probabilityOfBNot = Math.pow(1 - probabilityB, repeatB);
    let probabilityOfB = 1 - probabilityOfBNot;
    let probabilityOfANtimesAndBNtimes = probabilityOfANtimes * probabilityOfBNtimes;
    let probabilityOfNeitherAOrB = probabilityOfANot * probabilityOfBNot;
    let probabilityOfBothAAndB = probabilityOfA * probabilityOfB;
    let probabilityOfANtimesButNotB = probabilityOfANtimes * probabilityOfBNot;
    let probabilityOfBNtimesButNotA = probabilityOfBNtimes * probabilityOfANot;
    let probabilityOfAButNotB = probabilityOfA * probabilityOfBNot;
    let probabilityOfBButNotA = probabilityOfB * probabilityOfANot;

    $('#solution-prob1').html('<b>Probability of A occurring ' + repeatA + ' times:</b> = ' + probabilityA + '<sup>' + repeatA + '</sup> = ' + probabilityOfANtimes.toFixed(9));
    $('#solution-prob2').html('<b>Probability of A NOT occurring:</b> = (1 - ' + probabilityA + ') <sup>' + repeatA + '</sup> = ' + probabilityOfANot.toFixed(9));
    $('#solution-prob3').html('<b>Probability of A occurring:</b> = 1 - (1 - ' + probabilityA + ') <sup>' + repeatA + '</sup> = ' + probabilityOfA.toFixed(9));
    $('#solution-prob4').html('<b>Probability of B occurring ' + repeatB + ' times:</b> = ' + probabilityB + '<sup>' + repeatB + '</sup> = ' + probabilityOfBNtimes.toFixed(9));
    $('#solution-prob5').html('<b>Probability of B NOT occurring:</b> = (1 - ' + probabilityB + ') <sup>' + repeatB + '</sup> = ' + probabilityOfBNot.toFixed(9));
    $('#solution-prob6').html('<b>Probability of B occurring:</b> = 1 - (1 - ' + probabilityB + ') <sup>' + repeatB + '</sup> = ' + probabilityOfB.toFixed(9));
    $('#solution-prob7').html('<b>Probability of A occurring ' + repeatA + ' times and B occurring ' + repeatB + ' times:</b> = ' + probabilityA + '<sup>' + repeatA + '</sup> * ' + probabilityB + '<sup>' + repeatB + '</sup> = ' + probabilityOfANtimesAndBNtimes.toFixed(9));
    $('#solution-prob8').html('<b>Probability of neither A nor B occurring:</b> = (1 - ' + probabilityA + ') <sup>' + repeatA + '</sup> * ( + 1 - ' + probabilityB + ') <sup>' + repeatB + '</sup> = ' + probabilityOfNeitherAOrB.toFixed(9));
    $('#solution-prob10').html('<b>Probability of both A and B occurring:</b> = (1 - (1 - ' + probabilityA + ') <sup>' + repeatA + '</sup> ) * (1 - ( + 1 - ' + probabilityB + ') <sup>' + repeatB + '</sup> ) = ' + probabilityOfBothAAndB.toFixed(9));
    $('#solution-prob11').html('<b>Probability of A occurring ' + repeatA + ' times but not B:</b> = ' + probabilityA + '<sup>' + repeatA + '</sup> * ( + 1 - ' + probabilityB + ') <sup> ' + repeatB + '</sup > = ' + probabilityOfANtimesButNotB.toFixed(9));
    $('#solution-prob12').html('<b>Probability of B occurring ' + repeatB + ' times but not A:</b> = ' + probabilityB + '<sup>' + repeatB + '</sup> * ( + 1 - ' + probabilityA + ') <sup> ' + repeatA + '</sup > = ' + probabilityOfBNtimesButNotA.toFixed(9));
    $('#solution-prob13').html('<b>Probability of A occurring but not B:</b> = (1 - (1 - ' + probabilityA + ') <sup>' + repeatA + '</sup> ) * ( + 1 - ' + probabilityB + ') <sup>' + repeatB + '</sup> = ' + probabilityOfAButNotB.toFixed(9));
    $('#solution-prob14').html('<b>Probability of B occurring but not A:</b> = (1 - (1 - ' + probabilityB + ') <sup>' + repeatB + '</sup> ) * ( + 1 - ' + probabilityA + ') <sup>' + repeatB + '</sup> = ' + probabilityOfBButNotA.toFixed(9));
    for (let i = 1; i < 5; i++) {
      $(`#solution-prob${i}A`).html('');
    }
    $('#newwarning').empty().removeClass('pb-6');
    $('#result2').removeClass('hidden');
  });

  $('#probabilityGenerateAny').click(function () {
    $('#warningforuth').addClass('pb-6');
    let newprobabilityofA = parseFloat($('#newprobabilityofA').val());
    let newprobabilityofB = parseFloat($('#newprobabilityofB').val());
    let probNotA = parseFloat($('#probNotA').val());
    let probNotB = parseFloat($('#probNotB').val());
    let abIntersect = parseFloat($('#abIntersect').val());
    let abunion = parseFloat($('#abunion').val());
    let abDifference = parseFloat($('#abDifference').val());
    let abunionNot = parseFloat($('#abunionNot').val());

    let nonNaNCount = [newprobabilityofA, newprobabilityofB, probNotA, probNotB, abIntersect, abunion, abunionNot, abDifference].filter((value) => !isNaN(value)).length;
    let warningMessage = '';
    if (nonNaNCount !== 2 || newprobabilityofA > 1 || newprobabilityofA < 0 || newprobabilityofB > 1 || newprobabilityofB < 0 || probNotA > 1 || probNotA < 0 || probNotB > 1 || probNotB < 0 || abIntersect > 1 || abIntersect < 0 || abunion > 1 || abunion < 0 || abDifference > 1 || abDifference < 0 || abunionNot > 1 || abunionNot < 0 || abDifference < newprobabilityofA || abDifference < newprobabilityofB || abunion < newprobabilityofA || abunion < newprobabilityofB || abIntersect > newprobabilityofA || abIntersect > newprobabilityofB) {
      if (nonNaNCount !== 2) {
        warningMessage = 'Please provide 2 values to perform the calculation. You have provided ' + nonNaNCount + '.';
      } else if (newprobabilityofA > 1 || newprobabilityofA < 0 || newprobabilityofB > 1 || newprobabilityofB < 0 || probNotA > 1 || probNotA < 0 || probNotB > 1 || probNotB < 0 || abIntersect > 1 || abIntersect < 0 || abunion > 1 || abunion < 0 || abDifference > 1 || abDifference < 0 || abunionNot > 1 || abunionNot < 0) {
        warningMessage = 'Please provide values for all the required probability events between 0 and 1.';
      } else if (abIntersect > newprobabilityofA || abIntersect > newprobabilityofB) {
        warningMessage = 'P(A∩B) cannot be larger than P(A) or P(B).';
      } else if (abunion < newprobabilityofA || abunion < newprobabilityofB) {
        warningMessage = 'P(A∪B) cannot be smaller than P(A) or P(B).';
      } else if (abDifference < newprobabilityofA || abDifference < newprobabilityofB) {
        warningMessage = 'Unable to find the probabilities.';
      }
      $('#warningforuth').html(warningMessage);
      $('#result2').addClass('hidden');
      return;
    } else {
      $('#warningforuth').empty();
    }

    let probabilityOFA, probabilityOFB, P_notA, P_notB, P_intersectAB, P_unionAB, P_AorB, P_neitherAnorB;
    if (!isNaN(newprobabilityofA)) {
      probabilityOFA = newprobabilityofA;
      if (!isNaN(newprobabilityofB)) {
        probabilityOFB = newprobabilityofB;
      } else if (!isNaN(probNotA)) {
        $('#warningforuth').html("Please provide 2 values other than P(A) and P(A').");
        $('#result2').addClass('hidden');
        return;
      } else if (!isNaN(probNotB)) {
        probabilityOFB = 1 - probNotB;
      } else if (!isNaN(abIntersect)) {
        probabilityOFB = abIntersect / newprobabilityofA;
      } else if (!isNaN(abunion)) {
        probabilityOFB = (abunion - newprobabilityofA) / (1 - newprobabilityofA);
      } else if (!isNaN(abDifference)) {
        probabilityOFB = (abDifference - newprobabilityofA) / (1 - 2 * newprobabilityofA);
      } else if (!isNaN(abunionNot)) {
        let Pabunion = 1 - abunionNot;
        probabilityOFB = (Pabunion - newprobabilityofA) / (1 - newprobabilityofA);
      }
    } else if (!isNaN(newprobabilityofB)) {
      probabilityOFB = newprobabilityofB;
      if (!isNaN(probNotA)) {
        probabilityOFA = 1 - probNotA;
      } else if (!isNaN(probNotB)) {
        $('#warningforuth').html("Please provide 2 values other than P(B) and P(B').");
        $('#result2').addClass('hidden');
        return;
      } else if (!isNaN(abIntersect)) {
        probabilityOFA = abIntersect / newprobabilityofB;
      } else if (!isNaN(abunion)) {
        probabilityOFA = (abunion - newprobabilityofB) / (1 - newprobabilityofB);
      } else if (!isNaN(abDifference)) {
        probabilityOFA = (abDifference - newprobabilityofB) / (1 - 2 * newprobabilityofB);
      } else if (!isNaN(abunionNot)) {
        let Pabunion = 1 - abunionNot;
        probabilityOFA = (Pabunion - newprobabilityofB) / (1 - newprobabilityofB);
      }
    } else if (!isNaN(probNotA)) {
      probabilityOFA = 1 - probNotA;
      if (!isNaN(probNotB)) {
        probabilityOFB = 1 - probNotB;
      } else if (!isNaN(abIntersect)) {
        probabilityOFB = abIntersect / probabilityOFA;
      } else if (!isNaN(abunion)) {
        probabilityOFB = (abunion - probabilityOFA) / (1 - probabilityOFA);
      } else if (!isNaN(abDifference)) {
        probabilityOFB = (abDifference - probabilityOFA) / (1 - 2 * probabilityOFA);
      } else if (!isNaN(abunionNot)) {
        let Pabunion = 1 - abunionNot;
        probabilityOFB = (Pabunion - probabilityOFA) / (1 - probabilityOFA);
      }
    } else if (!isNaN(probNotB)) {
      probabilityOFB = 1 - probNotB;
      if (!isNaN(probNotB)) {
        probabilityOFB = 1 - probNotB;
      } else if (!isNaN(abIntersect)) {
        probabilityOFA = abIntersect / probabilityOFB;
      } else if (!isNaN(abunion)) {
        probabilityOFA = (abunion - probabilityOFB) / (1 - probabilityOFB);
      } else if (!isNaN(abDifference)) {
        probabilityOFA = (abDifference - probabilityOFB) / (1 - 2 * probabilityOFB);
      } else if (!isNaN(abunionNot)) {
        let Pabunion = 1 - abunionNot;
        probabilityOFA = (Pabunion - probabilityOFB) / (1 - probabilityOFB);
      }
    } else if (!isNaN(abIntersect)) {
      if ((abIntersect === 0 && abunion === 1) || (abIntersect === 0.1 && abunion === 0.9) || (abIntersect === 0.2 && abunion === 0.8)) {
        let Aprobability = quadraticEquation(abIntersect);
        let Bprobability = quadraticEquation(abIntersect);
        $('#solution-prob1').html('<b>Solution1:<br>P(A): </b>' + Math.abs(Aprobability[0]));
        $('#solution-prob2').html('<b>P(B): </b>' + Math.abs(Bprobability[1]));
        $('#solution-prob3').html("<b>P(A'): </b>" + (1 - -1 * Aprobability[0]));
        $('#solution-prob4').html("<b>P(B'): </b>" + (1 - -1 * Bprobability[1]));
        $('#solution-prob1A').html('<b><br>Solution1:<br><br>P(A): </b>' + Math.abs(Aprobability[1]));
        $('#solution-prob2A').html('<b>P(B): </b>' + Math.abs(Bprobability[0]));
        $('#solution-prob3A').html("<b>P(A'): </b>" + (1 - Math.abs(Aprobability[1])));
        $('#solution-prob4A').html("<b>P(B'): </b>" + (1 - Math.abs(Bprobability[0])));
        $('#solution-prob5').html('<b><br>In both cases:<br><br>P(A∪B): </b>' + abunion);
        $('#solution-prob6').html('<b>P(A∩B): </b>' + abIntersect);
        $('#solution-prob7').html('<b>P(AΔB): </b>' + (abunion - abIntersect));
        $('#solution-prob8').html("<b>P((A∪B)'): </b>" + (1 - abunion));
        $('#result2').removeClass('hidden');
        return;
      } else if (abIntersect > 0.2 || abunion < 0.8 || !isNaN(abDifference) || !isNaN(abunionNot)) {
        $('#warningforuth').html('No meaningful solution for the provided values.');
        $('#result2').addClass('hidden');
        return;
      }
    } else if ((!isNaN(abunion) && !isNaN(abDifference)) || (!isNaN(abunion) && !isNaN(abunionNot)) || (!isNaN(abDifference) && !isNaN(abunionNot))) {
      $('#warningforuth').html('No meaningful solution for the provided values.');
      $('#result2').addClass('hidden');
      return;
    }

    P_notA = Anot(probabilityOFA);
    P_notB = Bnot(probabilityOFB);
    P_unionAB = AUnionB(probabilityOFA, probabilityOFB);
    P_intersectAB = AintersectionB(probabilityOFA, probabilityOFB);
    P_AorB = AorBNotBoth(probabilityOFA, probabilityOFB);
    P_neitherAnorB = NeitherAnorB(probabilityOFA, probabilityOFB);

    $('#solution-prob1').html('<b>P(A): </b>' + probabilityOFA);
    $('#solution-prob2').html('<b>P(B): </b>' + probabilityOFB);
    $('#solution-prob3').html("<b>P(A'): </b>" + P_notA);
    $('#solution-prob4').html("<b>P(B'): </b>" + P_notB);
    $('#solution-prob5').html('<b>P(A∪B): </b>' + P_unionAB);
    $('#solution-prob6').html('<b>P(A∩B): </b>' + P_intersectAB);
    $('#solution-prob7').html('<b>P(AΔB): </b>' + P_AorB);
    $('#solution-prob8').html("<b>P((A∪B)'): </b>" + P_neitherAnorB);
    for (let i = 1; i < 5; i++) {
      $(`#solution-prob${i}A`).html('');
    }
    for (let i = 9; i < 14; i++) {
      $(`#solution-prob${i}`).html('');
    }
    $('#warningforuth').removeClass('pb-6');
    $('#result2').removeClass('hidden');
  });

  function Anot(a) {
    let aNot = 1 - a;
    return aNot;
  }
  function Bnot(b) {
    let Bnot = 1 - b;
    return Bnot;
  }
  function AUnionB(a, b) {
    let union = a + b - a * b;
    return union;
  }
  function AintersectionB(a, b) {
    let intersection = a * b;
    return intersection;
  }
  function AorBNotBoth(a, b) {
    let AorBNotBoth = a + b - 2 * (a * b);
    return AorBNotBoth;
  }
  function NeitherAnorB(a, b) {
    let NeitherAnorB = (1 - a) * (1 - b);
    return NeitherAnorB;
  }
  function quadraticEquation(c) {
    let solution1 = (-1 + Math.sqrt(Math.pow(-1, 2) - 4 * 1 * c)) / 2;
    let solution2 = (-1 - Math.sqrt(Math.pow(-1, 2) - 4 * 1 * c)) / 2;
    return [solution1, solution2];
  }
});
