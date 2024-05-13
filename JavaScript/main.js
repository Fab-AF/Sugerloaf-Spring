AOS.init();

// You can also pass an optional settings object
// below listed default settings
AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: "DOMContentLoaded", // name of the event dispatched on the document, that AOS should initialize on
  initClassName: "aos-init", // class applied after initialization
  animatedClassName: "aos-animate", // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)

  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 400, // values from 0 to 3000, with step 50ms
  easing: "ease", // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: "top-bottom", // defines which position of the element regarding to window should trigger the animation
});
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
    menuItem.style.padding = "0.5rem";
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
// ****************************************************************************
// JavaScript code to handle button clicks, toggle container visibility, and change button background color

document.addEventListener("DOMContentLoaded", function () {
  const nectrrecreationBtn = document.getElementById("nectrrecreationBtn");
  const nectrmedicalBtn = document.getElementById("nectrmedicalBtn");
  const nectrrecreationContainer = document.getElementById("nectrrecreation");
  const nectrmedicalContainer = document.getElementById("nectrmedical");

  // Function to add CSS style to selected button
  function setSelectedButtonStyle(selectedButton) {
    selectedButton.style.backgroundColor = "#e2e0df";
    selectedButton.style.border = "1px solid #e2e0df";
  }

  // Function to remove CSS style from unselected button
  function resetButtonStyles() {
    nectrrecreationBtn.style.backgroundColor = "";
    nectrmedicalBtn.style.backgroundColor = "";
  }

  nectrrecreationBtn.addEventListener("click", function () {
    nectrrecreationBtn.classList.add("selected");
    nectrmedicalBtn.classList.remove("selected");
    nectrrecreationContainer.style.display = "flex";
    nectrmedicalContainer.style.display = "none";
    resetButtonStyles();
    setSelectedButtonStyle(nectrrecreationBtn);
  });

  nectrmedicalBtn.addEventListener("click", function () {
    nectrmedicalBtn.classList.add("selected");
    nectrrecreationBtn.classList.remove("selected");
    nectrmedicalContainer.style.display = "flex";
    nectrrecreationContainer.style.display = "none";
    resetButtonStyles();
    setSelectedButtonStyle(nectrmedicalBtn);
  });

  // Initially show nectrrecreation container and hide nectrmedical container
  nectrrecreationContainer.style.display = "flex";
  nectrmedicalContainer.style.display = "none";

  // Set default background color for selected button
  setSelectedButtonStyle(nectrrecreationBtn);
});

// *****************************************************************************************************************
const smsrecreationBtn = document.getElementById("smsrecreationBtn");
const smsbevragesBtn = document.getElementById("smsbevragesBtn");
const smsrecreationContainer = document.getElementById("smsrecreation");
const smsmedicalContainer = document.getElementById("smsmedical");

function setSelectedButtonStyle(selectedButton) {
  selectedButton.style.backgroundColor = "#e2e0df";
  selectedButton.style.border = "1px solid #e2e0df";
}

function resetButtonStyles() {
  smsrecreationBtn.style.backgroundColor = "";
  smsbevragesBtn.style.backgroundColor = "";
}

smsrecreationBtn.addEventListener("click", function () {
  smsrecreationBtn.classList.add("selected");
  smsbevragesBtn.classList.remove("selected");
  smsrecreationContainer.style.display = "flex";
  smsmedicalContainer.style.display = "none";
  resetButtonStyles();
  setSelectedButtonStyle(smsrecreationBtn);
});

smsbevragesBtn.addEventListener("click", function () {
  smsbevragesBtn.classList.add("selected");
  smsrecreationBtn.classList.remove("selected");
  smsmedicalContainer.style.display = "flex";
  smsrecreationContainer.style.display = "none";
  resetButtonStyles();
  setSelectedButtonStyle(smsbevragesBtn);
});

smsrecreationContainer.style.display = "flex";
smsmedicalContainer.style.display = "none";

setSelectedButtonStyle(smsrecreationBtn);

// ******************************************NECTR CONTAINER****************************************************
window.onload = function () {
  shownectr1img();
};
function shownectr1img() {
  // Hide all images
  hideAllImages();
  // Show only the image associated with this function
  document.querySelector(".nectrrecreationimg1").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton1");
  button.classList.add("yellowactivebutton");
}

function shownectr2img() {
  // Hide all images
  hideAllImages();
  // Show only the image associated with this function
  document.querySelector(".nectrrecreationimg2").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton2");
  button.classList.add("yellowactivebutton");
}

function shownectr3img() {
  // Hide all images
  hideAllImages();
  // Show only the image associated with this function
  document.querySelector(".nectrrecreationimg3").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton3");
  button.classList.add("yellowactivebutton");
}

function shownectr4img() {
  // Hide all images
  hideAllImages();
  // Show only the image associated with this function
  document.querySelector(".nectrrecreationimg4").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton4");
  button.classList.add("yellowactivebutton");
}

function shownectr5img() {
  // Hide all images
  hideAllImages();
  // Show only the image associated with this function
  document.querySelector(".nectrrecreationimg5").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton5");
  button.classList.add("yellowactivebutton");
}

function showmedical1img() {
  // Hide all images
  hideAllImages();
  // Show only the image associated with this function
  document.querySelector(".nectrmedicalimg1").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton6");
  button.classList.add("yellowactivebutton");
}

function showmedical2img() {
  // Hide all images
  hideAllImages();
  // Show only the image associated with this function
  document.querySelector(".nectrmedicalimg2").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton7");
  button.classList.add("yellowactivebutton");
}

function showmedical3img() {
  // Hide all images
  hideAllImages();
  // Show only the image associated with this function
  document.querySelector(".nectrmedicalimg3").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton8");
  button.classList.add("yellowactivebutton");
}

function showmedical4img() {
  // Hide all images
  hideAllImages();
  // Show only the image associated with this function
  document.querySelector(".nectrmedicalimg4").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton9");
  button.classList.add("yellowactivebutton");
}

function showmedical5img() {
  // Hide all images
  hideAllImages();
  // Show only the image associated with this function
  document.querySelector(".nectrmedicalimg5").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton10");
  button.classList.add("yellowactivebutton");
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
  });
}

// *********************************************SMS CONTAINER JS************************************************************

function smsshownectr1img() {
  hideAllImages();
  document.querySelector(".smsnectrrecreationimg1").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton11");
  button.classList.add("yellowactivebutton");
}

function smsshownectr2img() {
  hideAllImages();
  document.querySelector(".smsnectrrecreationimg2").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton12");
  button.classList.add("yellowactivebutton");
}

function smsshownectr3img() {
  hideAllImages();
  document.querySelector(".smsnectrrecreationimg3").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton13");
  button.classList.add("yellowactivebutton");
}

function smsshownectr4img() {
  hideAllImages();
  document.querySelector(".smsnectrrecreationimg4").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton14");
  button.classList.add("yellowactivebutton");
}

function smsshownectr5img() {
  hideAllImages();
  document.querySelector(".smsnectrrecreationimg5").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton15");
  button.classList.add("yellowactivebutton");
}

function smsshowmedical1img() {
  hideAllImages();
  document.querySelector(".smsnectrmedicalimg1").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton16");
  button.classList.add("yellowactivebutton");
}

function smsshowmedical2img() {
  hideAllImages();
  document.querySelector(".smsnectrmedicalimg2").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton17");
  button.classList.add("yellowactivebutton");
}

function smsshowmedical3img() {
  hideAllImages();
  document.querySelector(".smsnectrmedicalimg3").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton18");
  button.classList.add("yellowactivebutton");
}

function smsshowmedical4img() {
  hideAllImages();
  document.querySelector(".smsnectrmedicalimg4").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton19");
  button.classList.add("yellowactivebutton");
}

function smsshowmedical5img() {
  hideAllImages();
  document.querySelector(".smsnectrmedicalimg5").style.display = "block";
  removeYellowActiveStyle();
  var button = document.getElementById("yellowactivebutton20");
  button.classList.add("yellowactivebutton");
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
  });
}
