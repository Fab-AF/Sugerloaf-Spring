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
  once: true, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: "top-bottom", // defines which position of the element regarding to window should trigger the animation
});

// *************************************** API Call ******************************************/

// fetch("http://sugerloaf.fabaf.in/api/v1/cms/list", {
//   method: "GET",
//   headers: {
//     Authorization: "Bearer dfd6828eb83819226543",
//   },
// })
//   .then((response) => response.json())
//   .then((data) => {
//     if (data.success) {
//       // Get the container to hold the content
//       const cmsContent = document.getElementById("cms-content");

//       // Loop through the CMS pages
//       for (const [slug, page] of Object.entries(data.data)) {
//         // Fetch details for each CMS page
//         fetch("http://sugerloaf.fabaf.in/api/v1/cms/details", {
//           method: "POST",
//           headers: {
//             Authorization: "Bearer dfd6828eb83819226543",
//             "Content-Type": "application/json",
//           },
//           body: JSON.stringify({ slug: slug }),
//         })
//           .then((response) => response.json())
//           .then((detailsData) => {
//             // Check if the API call was successful
//             console.log(detailsData);
//             if (detailsData.success) {
//               // Create elements for the page title, description, and status
//               const titleElement = document.createElement("h2");
//               titleElement.textContent = page.title;

//               const descriptionElement = document.createElement("div");
//               descriptionElement.innerHTML = detailsData.data.description;

//               // Create a container for the page content
//               const contentElement = document.createElement("div");
//               contentElement.appendChild(descriptionElement);

//               // Append title and content to the container
//               cmsContent.appendChild(titleElement);
//               cmsContent.appendChild(contentElement);
//             } else {
//               console.error(
//                 "Failed to fetch CMS details:",
//                 detailsData.message
//               );
//             }
//           })
//           .catch((error) => {
//             console.error("Error fetching CMS details:", error);
//           });
//       }
//     } else {
//       console.error("Failed to fetch CMS data:", data.message);
//     }
//   })
//   .catch((error) => {
//     console.error("Error fetching CMS data:", error);
//   });
// Function to make API call and populate HTML for each CMS page
