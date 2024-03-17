document.getElementById("jobForm").addEventListener("submit", function(event) {
    event.preventDefault(); 

    var jobTitle = document.getElementById("jobTitle").value;
    var jobDescription = document.getElementById("jobDescription").value;
    var jobType = document.getElementById("jobType").value;
    var salary = document.getElementById("salary").value;
    var joiningDate = document.getElementById("joiningDate").value;
    var experience = document.getElementById("experience").value;
    var skills = document.getElementById("skills").value;

    var jobPost = {
        title: jobTitle,
        description: jobDescription,
        type: jobType,
        salary: salary,
        joiningDate: joiningDate,
        experience: experience,
        skills: skills
    };

    console.log(jobPost);

    this.reset();
});
