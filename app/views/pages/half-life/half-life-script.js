$(document).ready(function () {
  $("#calc-half-life").click(function () {
    let remaining = parseFloat($("#remains").val());
    let inital = parseFloat($("#initial").val());
    let time = parseFloat($("#time").val());
    let halfLife = parseFloat($("#half-life").val());

    let valueValidate = validateInputs(['#initial', '#remains', '#time', '#half-life'], 3, '#warningID', '#result');
    if (!valueValidate) {
      return;
    }
    if (inital <= remaining) {
      $("#warningID2").html("Remaining value can never be greater than the initial value.").addClass("pb-6")
      $("#result").addClass("hidden");
      return;
    }
    let initialQuantity, remainingQuantity, timeremain, halfLiferemain;
    if (isNaN(inital)) {
      initialQuantity = remaining / Math.pow(0.5, time / halfLife);
      $("#solution-div1").html("Inital quantity: " + initialQuantity);
      $("#solution-div3").html('');
      $("#solution-div2").html('');

    } else if (isNaN(remaining)) {
      remainingQuantity = inital * Math.pow(0.5, time / halfLife);
      $("#solution-div1").html("Remaining quantity: " + remainingQuantity);
      $("#solution-div3").html('');
      $("#solution-div2").html('');

    } else if (isNaN(time)) {
      timeremain = (Math.log(remaining / inital) / Math.log(0.5)) * halfLife;
      $("#solution-div1").html("Time: " + timeremain);
      $("#solution-div3").html('');
      $("#solution-div2").html('');

    } else if (isNaN(halfLife)) {
      halfLiferemain = time / (Math.log(inital / remaining) / Math.log(0.5));
      if (halfLiferemain < 0) { halfLiferemain = -1 * halfLiferemain; }
      let decayConstant = Math.log(2) / halfLiferemain;
      let meanLifetime = 1 / decayConstant;
      $("#solution-div1").html("Half-Life: " + halfLiferemain);
      $("#solution-div2").html("Mean Lifetime: " + meanLifetime);
      $("#solution-div3").html("Decay Constant: " + decayConstant);
    }
    $("#warningID2").html('').removeClass("pb-6");
    $("#result").removeClass("hidden");
  });

  $("#conversion-calculator").click(function () {
    let halfLife = parseFloat($("#convert-half-life").val());
    let lifeTime = parseFloat($("#convert-lifetime").val());
    let decayTime = parseFloat($("#convert-decay").val());

    let valueValidate = validateInputs(['#convert-half-life', '#convert-lifetime', '#convert-decay'], 1, '#warningIDSeond', '#result');
    if (!valueValidate) {
      return;
    }
    if (halfLife) {
      decayTime = Math.log(2) / halfLife;
      console.log(decayTime);
      lifeTime = 1 / decayTime;
      console.log(lifeTime);
      $("#solution-div1").html("Decay Constant (λ): " + decayTime);
      $("#solution-div2").html("Mean Life Time (τ): " + lifeTime);
      console.log('halfLife');
    } else if (lifeTime) {
      decayTime = 1 / lifeTime;
      halfLife = Math.log(2) / decayTime;
      $("#solution-div1").html("Half-Life( t<sub>1/2</sub> ): " + halfLife);
      $("#solution-div2").html("Decay Constant (λ): " + decayTime);
      console.log('lifeTime');
    } else if (decayTime) {
      halfLife = Math.log(2) / decayTime;
      lifeTime = 1 / decayTime;
      $("#solution-div1").html("Half-Life( t<sub>1/2</sub> ): " + halfLife);
      $("#solution-div2").html("Mean Life Time (τ): " + lifeTime);
      console.log('decayTime');
    }
    $("#result").removeClass("hidden");
  });
});