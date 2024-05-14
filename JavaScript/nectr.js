$("#smsContent").hide();

$("#medicalBtn").click(function () {
  $(this).addClass("selected");
  $("#smsBtn").removeClass("selected");
  $("#smsContent").hide();
  $("#medicalContent").show();
});

$("#smsBtn").click(function () {
  $(this).addClass("selected");
  $("#medicalBtn").removeClass("selected");
  $("#medicalContent").hide();
  $("#smsContent").show();
});
