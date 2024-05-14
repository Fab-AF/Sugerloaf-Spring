$(document).ready(function () {
  // Show medical container by default
  //   $("#medicalContainer").show();
  $("#smsContainer").hide();
  $("#medicalButton").addClass("selected");

  // Handle click event for medical button
  $("#medicalButton").click(function () {
    $(this).addClass("selected");
    $("#smsButton").removeClass("selected");
    $("#medicalContainer").show();
    $("#smsContainer").hide();
  });

  // Handle click event for SMS button
  $("#smsButton").click(function () {
    $(this).addClass("selected");
    $("#medicalButton").removeClass("selected");
    $("#medicalContainer").hide();
    $("#smsContainer").show();
  });
});
