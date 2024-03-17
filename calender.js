function createCalendar(year, month) {
    var calendar = document.getElementById("calendar");
    calendar.innerHTML = "";

   
    var firstDay = new Date(year, month, 1).getDay();
    var daysInMonth = new Date(year, month + 1, 0).getDate();

   
    var headerRow = document.createElement("tr");
    var daysOfWeek = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
    for (var i = 0; i < daysOfWeek.length; i++) {
        var th = document.createElement("th");
        th.textContent = daysOfWeek[i];
        headerRow.appendChild(th);
    }
    calendar.appendChild(headerRow);

   
    var date = 1;
    for (var i = 0; i < 6; i++) {
        var row = document.createElement("tr");
        for (var j = 0; j < 7; j++) {
            var cell = document.createElement("td");
            if (i === 0 && j < firstDay) {
                
                cell.textContent = "";
            } else if (date > daysInMonth) {
               
                cell.textContent = "";
            } else {
               
                cell.textContent = date;
                cell.classList.add("date");
                cell.dataset.date = `${year}-${month + 1}-${date}`;
                date++;
            }
            row.appendChild(cell);
        }
        calendar.appendChild(row);
    }

  
    calendar.addEventListener("click", function(event) {
        var selectedDate = event.target.dataset.date;
        if (selectedDate) {
            openModal(selectedDate);
        }
    });
}


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
        console.log("Date: " + date + ", Program Name: " + programName);
        displayConfirmationMessage(date, programName); 
        modal.style.display = "none";
    };
}


function displayConfirmationMessage(date, programName) {
    var confirmationMessage = "Program '" + programName + "' successfully assigned on " + date + ".";
    var confirmationDiv = document.createElement("div");
    confirmationDiv.textContent = confirmationMessage;
    confirmationDiv.classList.add("confirmation-message");
    document.body.appendChild(confirmationDiv);
    setTimeout(function() {
        confirmationDiv.remove();
    }, 3000);
}


document.addEventListener("DOMContentLoaded", function() {
    var currentDate = new Date();
    createCalendar(currentDate.getFullYear(), currentDate.getMonth());
});
