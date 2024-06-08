//*********************************************** */ API CALL***********************************
function fetchAndPopulateCMS(slug, containerId) {
  fetch("http://sugerloaf.fabaf.in/api/v1/cms/details", {
    method: "POST",
    headers: {
      Authorization: "Bearer dfd6828eb83819226543",
      "Content-Type": "application/json",
    },
    body: JSON.stringify({ slug: slug }),
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        // Create elements for the page title, description, and status
        const titleElement = document.createElement("h2");
        // titleElement.textContent = data.data.title;

        const descriptionElement = document.createElement("div");
        descriptionElement.innerHTML = data.data.description;

        // Append title and description to the container
        const container = document.getElementById(containerId);
        container.appendChild(titleElement);
        container.appendChild(descriptionElement);
      } else {
        console.error("Failed to fetch CMS details:", data.message);
      }
    })
    .catch((error) => {
      console.error("Error fetching CMS details:", error);
    });
}

// Call the function for each CMS page
fetchAndPopulateCMS("sms-medical-bevrages", "sms-medical-bevrages");
