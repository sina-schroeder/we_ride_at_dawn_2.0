document.addEventListener("DOMContentLoaded", function() {
  // Function to format time
  function formatTime(time) {
    return new Date(time).toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
  }

  // Add an event listener to the button that triggers on click
  document.getElementById('show-me-btn').addEventListener('click', function() {
    // Retrieve the selected values from the dropdown menu and date input
    const location = document.getElementById('location-select').value;
    const selectedDate = document.getElementById('date-select').value;

    // Create the URL for the API call, including the selected location and date
    const apiUrl = `unload.php?city=${encodeURIComponent(location)}&date=${encodeURIComponent(selectedDate)}`;

    // Use fetch() to send a GET request to the specified URL
    fetch(apiUrl)
      .then(response => response.json()) // Convert the response to JSON
      .then(data => {
        if (data.error) {
          alert(data.error);
        } else {
          // Update the HTML elements with the fetched data
          document.querySelector('.date').textContent = selectedDate; // Display selected date
          document.getElementById('sunriseTime').innerText = formatTime(data.sunrise);
          document.getElementById('sunsetTime').innerText = formatTime(data.sunset);
        }
      })
      .catch(error => {
        // Log errors to the console and display an error message
        console.error('Error fetching data:', error);
        alert('Error fetching data.');
      });
  });
});