var remainingTime = localStorage.getItem('cooldownRemainingTime');

if (remainingTime && remainingTime > 0) {
    startCountdown(remainingTime);
}

function startCountdown(remainingTime) {
    var countdownInterval = setInterval(function () {
        remainingTime--;
        if (remainingTime >= 0) {
            // Update local storage with the latest remaining time
            localStorage.setItem('cooldownRemainingTime', remainingTime);
            postMessage(remainingTime); // Send remaining time to the main script
        } else {
            clearInterval(countdownInterval);
        }
    }, 1000);
}

// Function to fetch remaining cooldown time from the server every 1 second
function fetchCooldownTime() {
    // Make an AJAX request to fetch the remaining cooldown time
    // You may need to adjust this URL and data based on your server-side implementation
    $.ajax({
        url: "cooldown_time.php",
        method: "GET",
        data: { username: 'exampleUsername' }, // Replace 'exampleUsername' with the actual username
        success: function(response) {
            remainingTime = response.cooldownTime;
        },
        error: function(xhr, status, error) {
            console.error("Error fetching cooldown time:", error);
        }
    });
}

// Call fetchCooldownTime() every 1 second to continuously update the remaining time
setInterval(fetchCooldownTime, 1000);
