// $("#smsContent").hide();

// $("#medicalBtn").click(function () {
//   $(this).addClass("selected");
//   $("#smsBtn").removeClass("selected");
//   $("#smsContent").hide();
//   $("#medicalContent").show();
// });

// $("#smsBtn").click(function () {
//   $(this).addClass("selected");
//   $("#medicalBtn").removeClass("selected");
//   $("#medicalContent").hide();
//   $("#smsContent").show();
// });
document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("smsContent").style.display = "none";

  document.getElementById("medicalBtn").addEventListener("click", function () {
    this.classList.add("selected");
    document.getElementById("smsBtn").classList.remove("selected");
    document.getElementById("smsContent").style.display = "none";
    document.getElementById("medicalContent").style.display = "flex";
  });

  document.getElementById("smsBtn").addEventListener("click", function () {
    this.classList.add("selected");
    document.getElementById("medicalBtn").classList.remove("selected");
    document.getElementById("medicalContent").style.display = "none";
    document.getElementById("smsContent").style.display = "flex";
  });
});
