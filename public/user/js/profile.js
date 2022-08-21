// Fetch Profile

function ViewProfile() {

    fetch('/auth/profile')
        .then(response => response.json())
        .then(data => {
            $('#user_name').val(data.name);
            $('#username').val(data.username);
            $('#user_email').val(data.email);
            $('#user_phone').val(data.phone);
        });

}


// document.getElementById("ProfileUpdate").onclick = function (e) {

//     e.preventDefault()

//     var name = document.getElementById("user_name").value;
//     var username = document.getElementById("username").value;
//     var email = document.getElementById("user_email").value;
//     var phone = document.getElementById("user_phone").value;
//     var profile_image = document.getElementById("profile_image").value;
//     var success_profile = document.getElementById("success_profile");

//     if(name.length < 1){
//         return false
//     }
//     if(username.length < 1){
//         return false
//     }
//     if(email.length < 1){
//         return false
//     }
//      if(phone.length < 1){
//         return false
//     }

//     document.getElementById("ProfileUpdate").innerHTML = "Updating Profile"

//     const data = { name, username, email, phone, profile_image};

//     fetch('/api/auth/profile/update', {
//         method: 'PUT', // or 'PUT'
//         headers: {
//             "Accept": "application/json",
//             "Content-Type": "application/json"
//           },
//         body: JSON.stringify(data),
//     })
//         .then(response => response.json())
//         .then(data => {
//             // console.log('Success:', data);

//             if(data.message){

//                 setTimeout(() => {

//                     email_error.innerHTML = `
//                     <div class="alert alert-danger alert-dismissible fade show" role="alert">
//                     <span id="success_profile">The email must be a valid email address.</span>
//                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//                 </div>
//                     `

//                     document.getElementById("ProfileUpdate").innerHTML = "Update"

//                 }, 2000);

//                 setTimeout(() => {
//                     email_error.style.display = "none"
//                 }, 5000);

//             }

//             if(data.success){

//                 setTimeout(() => {
//                     success_profile.innerHTML = `
//                     <div class="alert alert-success alert-dismissible fade show" role="alert">
//                     <span id="success_profile">Profile updated successfully</span>
//                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//                 </div>
//                     `

//                     document.getElementById("ProfileUpdate").innerHTML = "Update"

//                 }, 2000);

//                 setTimeout(() => {
//                     success_profile.style.display = "none"
//                 }, 5000);


//             }
//            // ProfileUpdate.disabled = true
//         })
//         .catch((error) => {
//             // console.error('Error:', error);
//         });



// }


ViewProfile();


//  document.getElementById('uploadProfileImage').onsubmit = function(e){
//      e.preventDefault()
//      console.log("HELLO");
//  }
