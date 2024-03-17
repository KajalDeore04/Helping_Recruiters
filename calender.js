






// script.js

// Function to create a calendar for a specific month and year
function createCalendar(year, month) {
    var calendar = document.getElementById("calendar");
    calendar.innerHTML = ""; // Clear previous calendar

    // Get the first day of the month and the number of days in the month
    var firstDay = new Date(year, month, 1).getDay();
    var daysInMonth = new Date(year, month + 1, 0).getDate();

    // Create table header for days of the week
    var headerRow = document.createElement("tr");
    var daysOfWeek = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
    for (var i = 0; i < daysOfWeek.length; i++) {
        var th = document.createElement("th");
        th.textContent = daysOfWeek[i];
        headerRow.appendChild(th);
    }
    calendar.appendChild(headerRow);

    // Create table rows and cells for each day in the month
    var date = 1;
    for (var i = 0; i < 6; i++) {
        var row = document.createElement("tr");
        for (var j = 0; j < 7; j++) {
            var cell = document.createElement("td");
            if (i === 0 && j < firstDay) {
                // Add empty cells before the first day of the month
                cell.textContent = "";
            } else if (date > daysInMonth) {
                // Add empty cells after the last day of the month
                cell.textContent = "";
            } else {
                // Add cells with dates
                cell.textContent = date;
                cell.classList.add("date");
                cell.dataset.date = `${year}-${month + 1}-${date}`;
                date++;
            }
            row.appendChild(cell);
        }
        calendar.appendChild(row);
    }

    // Event listener to open modal when clicking on a date
    calendar.addEventListener("click", function(event) {
        var selectedDate = event.target.dataset.date;
        if (selectedDate) {
            openModal(selectedDate);
        }
    });
}

// Function to open modal for program assignment
function openModal(date) {
    var modal = document.getElementById("programModal");
    modal.style.display = "block";
    var closeBtn = document.getElementsByClassName("close")[0];
    closeBtn.onclick = function() {
        modal.style.display = "none";
    };
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
    
    var programForm = document.getElementById("programForm");
    programForm.onsubmit = function(event) {
        event.preventDefault();
        var programName = document.getElementById("programName").value;
        // Here, you can do further processing with the selected date and program name
        // For now, let's log the selected date and program name to the console
        console.log("Date: " + date + ", Program Name: " + programName);
        displayConfirmationMessage(date, programName); // Display confirmation message
        modal.style.display = "none";
    };
}

// Function to display confirmation message
function displayConfirmationMessage(date, programName) {
    var confirmationMessage = "Program '" + programName + "' successfully assigned on " + date + ".";
    var confirmationDiv = document.createElement("div");
    confirmationDiv.textContent = confirmationMessage;
    confirmationDiv.classList.add("confirmation-message");
    document.body.appendChild(confirmationDiv);
    setTimeout(function() {
        confirmationDiv.remove();
    }, 3000); // Remove confirmation message after 3 seconds
}

// Call function to create calendar for the current month when the page loads
document.addEventListener("DOMContentLoaded", function() {
    var currentDate = new Date();
    createCalendar(currentDate.getFullYear(), currentDate.getMonth());
});
