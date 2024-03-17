document.addEventListener("DOMContentLoaded", function () {
    const candidates = [
        { name: "Candidate 1", position: "Manager", employmentType: "Full Time", experience: "Lorem ipsum dolor sit amet consectetur.", contact: "1234567890", link: "applicant1.php" },
        { name: "Candidate 2", position: "Engineer", employmentType: "Part Time", experience: "Dolor sit amet consectetur adipiscing elit.", contact: "9876543210", link: "applicant2.php" },
        { name: "Candidate 3", position: "Engineer", employmentType: "Part Time", experience: "Dolor sit amet consectetur adipiscing elit.", contact: "9876543210", link: "applicant2.php" },

        { name: "Candidate 4", position: "Designer", employmentType: "Part Time", experience: "Dolor sit amet consectetur adipiscing elit.", contact: "9876543210", link: "applicant2.php" },

        { name: "Candidate 5", position: "Engineer", employmentType: "Intern", experience: "Dolor sit amet consectetur adipiscing elit.", contact: "9876543210", link: "applicant2.php" },

        { name: "Candidate 6", position: "Engineer", employmentType: "Part Time", experience: "Dolor sit amet consectetur adipiscing elit.", contact: "9876543210", link: "applicant2.php" },

       
    ];

    const searchInput = document.getElementById("searchInput");
    const candidateContainer = document.getElementById("candidateContainer");

   
function createCandidateCard(candidate) {
    const card = document.createElement("div");
    card.classList.add("col-lg-6", "col-md-8", "col-sm-10", "mb-4");

    card.innerHTML = `
        <div class="card">
            <h4 class="card-header text-center">${candidate.name}</h4>
            <div class="card-body">
                <p class="card-text"><strong>Position : </strong>${candidate.position}</p>
                <p class="card-text"><strong>Employment Type : </strong>${candidate.employmentType}</p>
                <p class="card-text"><strong>Experience : </strong>${candidate.experience}</p>
                <p class="card-text"><strong>Contact : </strong>${candidate.contact}</p>
                <a href="${candidate.link}" class="btn">More About</a> <!-- Link to applicant1.php -->
            </div>
        </div>
    `;

    return card;
}


    
    function displayCandidates() {
        candidateContainer.innerHTML = "";
        candidates.forEach(candidate => {
            const card = createCandidateCard(candidate);
            candidateContainer.appendChild(card);
        });
    }

function filterCandidates() {
    const searchText = searchInput.value.toLowerCase().trim();
    candidateContainer.innerHTML = "";
    candidates.forEach(candidate => {
        
        if (
            candidate.name.toLowerCase().includes(searchText) ||
            candidate.position.toLowerCase().includes(searchText) ||
            candidate.employmentType.toLowerCase().includes(searchText) ||
            candidate.experience.toLowerCase().includes(searchText) ||
            candidate.contact.toLowerCase().includes(searchText) ||
            candidate.link.toLowerCase().includes(searchText)
        ) {
            const card = createCandidateCard(candidate);
            candidateContainer.appendChild(card);
        }
    });
}


    
    displayCandidates();

    
    document.getElementById("search-btn").addEventListener("click", filterCandidates);

   
    searchInput.addEventListener("input", filterCandidates);
});
