document.addEventListener("DOMContentLoaded", function () {
  // Get references to elements
  const nectrContainer = document.getElementById("nectr");
  const smsContainer = document.getElementById("sms");
  const nectrMenu = document.querySelector(".exploremenu li:nth-child(1)");
  const smsMenu = document.querySelector(".exploremenu li:nth-child(2)");

  // Hide SMS container by default
  smsContainer.style.display = "none";

  // Function to toggle between Nectr and SMS containers
  function toggleContainers(showNectr) {
    if (showNectr) {
      nectrContainer.style.display = "flex";
      smsContainer.style.display = "none";
    } else {
      nectrContainer.style.display = "none";
      smsContainer.style.display = "flex";
    }
  }

  // Function to add underline to active menu item
  function setActiveMenu(menuItem) {
    // Remove underline from all menu items
    document.querySelectorAll(".exploremenu li").forEach((item) => {
      item.style.textDecoration = "none";
      item.style.borderBottom = "none";
      item.style.borderRadius = "0";
      item.style.padding = "0";
    });
    // Add underline to the selected menu item
    menuItem.style.textDecoration = "none";
    menuItem.style.borderBottom = "1px solid #000"; // Adjust color and thickness as needed
    menuItem.style.borderRadius = "10rem"; // Adjust border radius as needed
    menuItem.style.padding = "1rem 1rem";
  }

  // Set underline for default selected menu item (Nectr)
  setActiveMenu(nectrMenu);

  // Event listeners for menu items
  nectrMenu.addEventListener("click", function () {
    toggleContainers(true);
    setActiveMenu(nectrMenu);
  });

  smsMenu.addEventListener("click", function () {
    toggleContainers(false);
    setActiveMenu(smsMenu);
  });
});

// ******************************************NECTR CONTAINER****************************************************
function updateLoadMoreButtonColor(colorClass) {
  var loadMoreButtons = document.querySelectorAll(".lodamore");
  loadMoreButtons.forEach(function (button) {
    button.classList.remove(
      "rootcolour",
      "orangecolor",
      "bluecolour",
      "pinkcolour",
      "darkpinkcolour"
    );
    button.classList.add(colorClass);
  });
}

window.onload = function () {
  shownectr1img();
};

function shownectr1img() {
  hideAllImages();
  document.querySelector(".nectrrecreationimg1").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton1");
  button.classList.add("rootcolour");
  updateLoadMoreButtonColor("rootcolour");
  console.log("called");
}

function shownectr2img() {
  hideAllImages();
  document.querySelector(".nectrrecreationimg2").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton2");
  button.classList.add("orangecolor");
  updateLoadMoreButtonColor("orangecolor");
  console.log("called");
}

function shownectr3img() {
  hideAllImages();
  document.querySelector(".nectrrecreationimg3").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton3");
  button.classList.add("bluecolour");
  updateLoadMoreButtonColor("bluecolour");
  console.log("called");
}

function shownectr4img() {
  hideAllImages();
  document.querySelector(".nectrrecreationimg4").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton4");
  button.classList.add("pinkcolour");
  updateLoadMoreButtonColor("pinkcolour");
  console.log("called");
}

function shownectr5img() {
  hideAllImages();
  document.querySelector(".nectrrecreationimg5").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton5");
  button.classList.add("rootcolour");
  updateLoadMoreButtonColor("rootcolour");
  console.log("called");
}

function shownectr6img() {
  hideAllImages();
  document.querySelector(".nectrrecreationimg6").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton6");
  button.classList.add("bluecolour");
  updateLoadMoreButtonColor("bluecolour");
  console.log("called");
}

function showmedical1img() {
  hideAllImages();
  document.querySelector(".nectrmedicalimg1").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton7");
  button.classList.add("rootcolour");
  updateLoadMoreButtonColor("rootcolour");
  console.log("called");
}

function showmedical2img() {
  hideAllImages();
  document.querySelector(".nectrmedicalimg2").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton8");
  button.classList.add("orangecolor");
  updateLoadMoreButtonColor("orangecolor");
  console.log("called");
}

function showmedical3img() {
  hideAllImages();
  document.querySelector(".nectrmedicalimg3").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton9");
  button.classList.add("bluecolour");
  updateLoadMoreButtonColor("bluecolour");
  console.log("called");
}

// Function to hide all images
function hideAllImages() {
  var images = document.querySelectorAll(".leftcanimage");
  images.forEach(function (image) {
    image.style.display = "none";
  });
}

function removeYellowActiveStyle() {
  var buttons = document.querySelectorAll(".categorybuttonmenu");
  buttons.forEach(function (button) {
    button.classList.remove("yellowactivebutton");
    button.classList.remove("rootcolour");
    button.classList.remove("orangecolor");
    button.classList.remove("bluecolour");
    button.classList.remove("pinkcolour");
    button.classList.remove("darkpinkcolour");
  });
}

// *********************************************SMS CONTAINER JS************************************************************

function smsshownectr1img() {
  hideAllImages();
  document.querySelector(".smsnectrrecreationimg1").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton11");
  button.classList.add("pinkcolour");
  updateLoadMoreButtonColor("pinkcolour");
}

function smsshownectr2img() {
  hideAllImages();
  document.querySelector(".smsnectrrecreationimg2").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton12");
  button.classList.add("orangecolor");
  updateLoadMoreButtonColor("orangecolor");
}

function smsshownectr3img() {
  hideAllImages();
  document.querySelector(".smsnectrrecreationimg3").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton13");
  button.classList.add("darkpinkcolour");
  updateLoadMoreButtonColor("darkpinkcolour");
}

function smsshownectr4img() {
  hideAllImages();
  document.querySelector(".smsnectrrecreationimg4").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton14");
  button.classList.add("pinkcolour");
  updateLoadMoreButtonColor("pinkcolour");
}

function smsshownectr5img() {
  hideAllImages();
  document.querySelector(".smsnectrrecreationimg5").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton15");
  button.classList.add("darkpinkcolour");
  updateLoadMoreButtonColor("darkpinkcolour");
}

function smsshowmedical1img() {
  hideAllImages();
  document.querySelector(".smsnectrmedicalimg1").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton16");
  button.classList.add("pinkcolour");
  updateLoadMoreButtonColor("pinkcolour");
}

function smsshowmedical2img() {
  hideAllImages();
  document.querySelector(".smsnectrmedicalimg2").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton17");
  button.classList.add("orangecolor");
  updateLoadMoreButtonColor("orangecolor");
}

// Function to hide all images
function hideAllImages() {
  var images = document.querySelectorAll(".leftcanimage");
  images.forEach(function (image) {
    image.style.display = "none";
  });
}
function removeYellowActiveStyle() {
  var buttons = document.querySelectorAll(".categorybuttonmenu");
  buttons.forEach(function (button) {
    button.classList.remove("yellowactivebutton");
    button.classList.remove("rootcolour");
    button.classList.remove("orangecolor");
    button.classList.remove("bluecolour");
    button.classList.remove("pinkcolour");
    button.classList.remove("darkpinkcolour");
  });
}
