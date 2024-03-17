function submitForm() {
    
    var name = document.getElementById("name").value;
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    
    if (name.trim() === '' || username.trim() === '' || email.trim() === '' || password.trim() === '') {
        alert("All fields are required.");
        return;
    }

    
    alert("Registration successful!\nName: " + name + "\nUsername: " + username + "\nEmail: " + email);
    window.location.href = "recruiter-dashboard.php";
}
