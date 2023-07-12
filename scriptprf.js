document.getElementById("profileForm").addEventListener("submit", function(e) {
  e.preventDefault();

  // Get form values
  var name = document.getElementById("name").value;
  var age = document.getElementById("age").value;
  var email = document.getElementById("email").value;

  // Create profile card HTML
  var profileCard = document.createElement("div");
  profileCard.classList.add("profile-card");
  profileCard.innerHTML = "<h2>" + name + "</h2><p><strong>Age:</strong> " + age + "</p><p><strong>Email:</strong> " + email + "</p>";

  // Add profile card to the profile list
  document.getElementById("profileList").appendChild(profileCard);

  // Clear form inputs
  document.getElementById("name").value = "";
  document.getElementById("age").value = "";
  document.getElementById("email").value = "";
});
