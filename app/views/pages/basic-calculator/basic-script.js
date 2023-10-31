$(document).ready(function () {
  // EXP --> exponent function

  // All clear fucntion => AC
  $('#btnAllClear').click(function () {
    $('#NumberInput').val('');
    $('#AnswerInput').val('');
  });

  // random function => RAND
  $('#btnRandomGenerator').click(function () {
    let numb = Math.random() * '0.10';
    $('#NumberInput').val($('#NumberInput').val() + numb);
    console.log($('#NumberInput').val());
  });

    // back btn => delete one value per click => BACK
    $("#btnRemove").click(function () {
        // $('#NumberInput').val().length - 1;
        $('#NumberInput').val($('#NumberInput').val().substring(0, $('#NumberInput').val().length - 1));
    });

    $("#showButton").click(function () {
        var messageDiv = $("#message");
        // Set the text content of the message div
        messageDiv.text("This is a message.");
        // Show the message, delay for 2000 milliseconds (2 seconds), and then fade out
        messageDiv.fadeIn().delay(2000).fadeOut();
    });

  let inp1_data;
  let inp2_data;
  //  memrory function = adds memrory => M+
  $('#btnMemoryAdd').click(function () {
    $('#memoryID').addClass('pb-6');
    $('#memoryID').html('Saved in the memory.').fadeIn().delay(1200).fadeOut();
    inp1_data = $('#NumberInput').val();
    inp2_data = $('#AnswerInput').val();
    console.log(inp1_data);
    console.log(inp2_data);
  });

    //  memrory function = removes memory => M-
    $("#btnMemoryRemove").click(function () {
        $("#memoryID").addClass("pb-6");
        $("#memoryID").html("Memory Cleared!").fadeIn().delay(1200).fadeOut();
        inp1_data = '';
        inp2_data = '';
    });

  //  memrory function = shows memory => MR
  $('#btnMemoryShow').click(function () {
    if (inp1_data === '' && inp2_data === '') {
      $('#memoryID').addClass('pb-6');
      $('#memoryID').html('Nothing stored in the memory.').fadeIn().delay(1200).fadeOut();
    } else {
      $('#NumberInput').val(inp1_data);
      $('#AnswerInput').val(inp2_data);
    }
  });

  let finalAsnwer;
  // fucntion for equalto =>  =
  $('#btnSolution').click(function () {
    let answervalue = $('#NumberInput').val();
    allvalues = answervalue;
    for (var i = 0; i < answervalue.length; i++) {
      answervalue = answervalue.replace(/×/g, '*').replace(/\^/g, '**');
    }
    console.log(answervalue);

    finalAsnwer = eval(answervalue);
    $('#AnswerInput').val(finalAsnwer);

    $('#history').removeClass('hidden');
    $('#history').append(`<p> ${allvalues}  =  ${finalAsnwer}</p>`);
    // $("#history").html("<b>Previous Calculations: </b>" + allvalues + " = " + finalAsnwer);
  });

  // ANS btn => Stores Answer and shows it
  $('#btnAnswer').click(function () {
    if (finalAsnwer === undefined) {
      $('#memoryID').addClass('pb-6');
      $('#memoryID').html('No answer stored.').fadeIn().delay(1200).fadeOut();
      return;
    } else {
      $('#NumberInput').val($('#NumberInput').val() + finalAsnwer);
    }
  });

  // calculations
  let operatorAdded = false;
  let periodAdded = false;
  // function for appending buttons (0-9) and mathematical operators
  let btn_val;
  let currentNumber = '';
  $('.btn_design').click(function () {
    btn_val = $(this).val();
    if (btn_val === '+' || btn_val === '-' || btn_val === '×' || btn_val === '*' || btn_val === '/' || btn_val === '^') {
      if (!operatorAdded) {
        $('#NumberInput').val($('#NumberInput').val() + ' ' + btn_val + ' ');
        operatorAdded = true;
        periodAdded = false;
      }
    } else if (btn_val === '.') {
      if (!periodAdded) {
        $('#NumberInput').val($('#NumberInput').val() + btn_val);
        periodAdded = true;
      }
    } else {
      $('#NumberInput').val($('#NumberInput').val() + btn_val);
      operatorAdded = false;
    }
    // currentValue = $("#NumberInput").val();
    currentNumber = getCurrentNumber($('#NumberInput').val());
  });

  let plusMinusAdded = false;
  // $("#btnPlusMinus").click(function () {
  //     var inputValue = $("#NumberInput").val();

  //     // Check if the current input value contains a minus sign
  //     if (inputValue.includes("-")) {
  //         // Remove the minus sign
  //         $("#NumberInput").val(inputValue.replace("-", ""));
  //     } else {
  //         // Add the minus sign
  //         $("#NumberInput").val("-" + inputValue);
  //     }

  //     // Reset the flags
  //     plusMinusAdded = true; // Flag to remember the action
  //     periodAdded = false;
  //     operatorAdded = false;
  // });
  // Plus-Minus button click handler
  $('#btnPlusMinus').click(function () {
    if (currentNumber !== '') {
      if (currentNumber[0] === '-') {
        // Remove the minus sign
        currentNumber = currentNumber.substring(1);
      } else {
        // Add the minus sign
        currentNumber = '-' + currentNumber;
      }

      // Update the input field with the modified currentNumber
      updateInputWithCurrentNumber();
    }
  });

  // Function to get the current number from the input string
  function getCurrentNumber(inputValue) {
    var lastSpaceIndex = inputValue.lastIndexOf(' ');
    return inputValue.substring(lastSpaceIndex + 1);
  }

  // Function to update the input with the current number
  function updateInputWithCurrentNumber() {
    var inputValue = $('#NumberInput').val();
    var lastSpaceIndex = inputValue.lastIndexOf(' ');
    var updatedInput = inputValue.substring(0, lastSpaceIndex + 1) + currentNumber;
    $('#NumberInput').val(updatedInput);
  }
});
