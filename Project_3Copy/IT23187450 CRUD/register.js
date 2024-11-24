// Function to validate the registration form
function validateForm() {
    var firstName = document.getElementById("First Name").value;
    var lastName = document.getElementById("Last Name").value;
    var email = document.getElementById("Email").value;
    var phoneNumber = document.getElementById("Phone Number").value;
    var password = document.getElementById("New Password").value;
    var confirmPassword = document.getElementById("Comfirm Password").value;

    // Simple validation to ensure all fields are filled
    if (firstName == "" || lastName == "" || email == "" || phoneNumber == "" || password == "" || confirmPassword == "") {
        alert("Please fill in all fields.");
        return false;
    }

    // Additional validation, for example, checking password match
    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }

    // You can add more validation rules here as needed

    return true; // Form is valid
}

// Event listener to trigger form validation on submit
document.querySelector("form").addEventListener("submit", function(event) {
    if (!validateForm()) {
        event.preventDefault(); // Prevent form submission if validation fails
    }
});

function validateForm() {
    var newPassword = document.getElementById("New Password").value;
    var confirmPassword = document.getElementById("Confirm Password").value;

    if (newPassword != confirmPassword) {
        alert("Passwords do not match");
        return false;
    }
    return true;
}