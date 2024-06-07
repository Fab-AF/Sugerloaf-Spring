// $(document).ready(function () {
//   // Show medical container by default
//   //   $("#medicalContainer").show();
//   $("#smsContainer").hide();
//   $("#medicalButton").addClass("selected");

//   // Handle click event for medical button
//   $("#medicalButton").click(function () {
//     $(this).addClass("selected");
//     $("#smsButton").removeClass("selected");
//     $("#medicalContainer").show();
//     $("#smsContainer").hide();
//   });

//   // Handle click event for SMS button
//   $("#smsButton").click(function () {
//     $(this).addClass("selected");
//     $("#medicalButton").removeClass("selected");
//     $("#medicalContainer").hide();
//     $("#smsContainer").show();
//   });
// });
document.addEventListener("DOMContentLoaded", function () {
  // Show medical container by default
  //   document.getElementById("medicalContainer").style.display = "block";
  document.getElementById("smsContainer").style.display = "none";
  document.getElementById("medicalButton").classList.add("selected");

  // Handle click event for medical button
  document
    .getElementById("medicalButton")
    .addEventListener("click", function () {
      this.classList.add("selected");
      document.getElementById("smsButton").classList.remove("selected");
      document.getElementById("medicalContainer").style.display = "flex";
      document.getElementById("smsContainer").style.display = "none";
    });

  // Handle click event for SMS button
  document.getElementById("smsButton").addEventListener("click", function () {
    this.classList.add("selected");
    document.getElementById("medicalButton").classList.remove("selected");
    document.getElementById("medicalContainer").style.display = "none";
    document.getElementById("smsContainer").style.display = "flex";
  });
});
