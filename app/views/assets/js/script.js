$(document).ready(function () {
  // nvbar toggle
  $("#main_nav_btn").click(function () {
    if ($(".main_nav_div").hasClass("hidden")) {
      $(".main_nav_div").removeClass("hidden").addClass("duration-300");
    } else {
      $(".main_nav_div").addClass("hidden duration-300");
    }
  });

  // closing on small menu
  $(".close_btn").click(function () {
    console.log("yes");
    $(this).parents(".drp_btn").find(".drp_list").addClass("hidden");
  });

  // dropdown toggle
  $(".drp_a").click(function () {
    // active
    // $(".drp_a").removeClass("text-primary_button");
    // $(this).addClass("text-primary_button");
    // dropdowns
    if ($(this).parents(".drp_btn").find(".drp_list").hasClass("hidden")) {
      $(".drp_list").addClass("hidden");
      $(this)
        .parents(".drp_btn")
        .find(".drp_list")
        .removeClass("hidden")
        .addClass("duration-300");
      // caret rotate
      $(".caret_cls").removeClass("rotate-180");
      $(this).find(".caret_cls").addClass("rotate-180");
    } else {
      $(this)
        .parents(".drp_btn")
        .find(".drp_list")
        .addClass("hidden duration-300");
      $(this).find(".caret_cls").removeClass("rotate-180");
    }
  });

  // to close dropdown after outside click
  $(document).on("click", function (event) {
    // Check if the clicked element is not part of the navbar or its dropdown
    if (!$(event.target).closest(".main_nav_div, .drp_list").length) {
      $(".main_nav_div").addClass("hidden duration-300");
      $(".drp_list").addClass("hidden duration-300");
      $(".caret_cls").removeClass("rotate-180");
    }
  });

  // accordion
  $(".accordion")
    .find(".faq_close")
    .click(function () {
      let isfaq_open = $(this).hasClass("faq_open");
      $(".faq_close").removeClass("faq_open");
      if (!isfaq_open) {
        $(this).toggleClass("faq_open");
      }
      if ($(this).hasClass("rounded-full")) {
        $(".faq_close").addClass("rounded-full").removeClass("rounded-md");
        $(this).removeClass("rounded-full").addClass("rounded-md");
        console.log("wroking-1");
      } else {
        $(this).addClass("rounded-full").removeClass("rounded-md");
        console.log("wroking-2");
      }
      $(this).next().slideToggle("normal");
      //Hide the other panels
      $(".accordion-content").not($(this).next()).slideUp("normal");
    });

  // Category toggle
  $(".tabs_btn").click(function () {
    $(".tabs_btn")
      .removeClass("text-primary_button border-cls")
      .addClass("text-secondary_color");
    $(this)
      .addClass("text-primary_button border-cls")
      .removeClass("text-secondary_color");
    // dropdowns
    $(".categ_border").removeClass("border border-primary_button border-b-0");
    if (
      $(this)
        .parents(".categ_border")
        .hasClass("border border-primary_button border-b-0")
    ) {
      $(this)
        .parents(".categ_border")
        .removeClass("border border-primary_button border-b-0");
    } else {
      $(this)
        .parents(".categ_border")
        .addClass("border border-primary_button border-b-0");
      console.log("border");
    }
    if (
      $(this).parents(".categ_btn").find(".categ_content").hasClass("hidden")
    ) {
      $(".categ_content").addClass("hidden");
      $(this)
        .parents(".categ_btn")
        .find(".categ_content")
        .removeClass("hidden");
      // console.log("working");
    }
    // else {
    //     $(this).find(".categ_content").addClass("hidden");
    //     console.log("working");
    // }
  });

  // scroll with animation
  $(".scroll_animate").on("click", function (event) {
    let targetId = $(this).data("href"); // Get the target div ID from custom data attribute
    console.log(targetId);
    let targetOffset = $("#" + targetId).offset().top; // Get the top offset of the target div
    let scrollToOffset = targetOffset - 120; // Subtract 120 pixels as offset
    $("html, body").animate({ scrollTop: scrollToOffset }, 400); // Scroll to the target div with animation
  });
});
