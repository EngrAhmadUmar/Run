// let form = document.getElementById("requestRide").onsubmit = function (e) {

//     e.preventDefault()

//     var pickup = document.getElementById("pickup").value;
//     var dropoff = document.getElementById("dropoff").value;
//     var price = document.getElementById("price").value;
//     var package_name = document.getElementById("package_name").value;
//     var receiver_name = document.getElementById("receiver_name").value;
//     var receiver_phone = document.getElementById("phone").value;
//     var success_order = document.getElementById("success_order");
//     var error_order = document.getElementById("error_order");
//     let submitBtn = document.getElementById("RequestBtn")

//     submitBtn.innerHTML = "Requesting Orders ......."

//     const data = { pickup, dropoff, price, package_name, receiver_name, receiver_phone };

//     fetch('/api/order', {
//         method: 'POST', // or 'PUT'
//         headers: {
//             "Accept": "application/json",
//             "Content-Type": "application/json"
//         },
//         body: JSON.stringify(data),
//     }).then(response => response.json())
//         .then(data => {

//             if (data.success) {

//                 success_order.innerHTML = ""

//                 setTimeout(() => {

//                     success_order.innerHTML = `
//                         <div class="alert alert-success alert-dismissible fade show" role="alert">
//                         <span id="success_profile"> You have successfuly place an order </span>
//                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//                         </div>
//                     `

//                     document.getElementById("RequestBtn").innerHTML = "Order"

//                 }, 4000);

//                 setTimeout(() => {
//                     success_order.style.display = "none"
//                 }, 8000);

//             }

//             if (data.error) {
//                 setTimeout(() => {

//                     error_order.innerHTML = `
//                         <div class="alert alert-danger alert-dismissible fade show" role="alert">
//                         <span id="success_profile"> An Error occur while placing order </span>
//                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//                         </div>
//                     `

//                     document.getElementById("RequestBtn").innerHTML = "Order"

//                 }, 4000);

//                 setTimeout(() => {
//                     error_order.style.display = "none"
//                 }, 8000);
//             }

//         })
//         .catch((error) => {
//             console.error('Error:', error);
//             setTimeout(() => {

//                 error_order.innerHTML = `
//                     <div class="alert alert-danger alert-dismissible fade show" role="alert">
//                     <span id="success_profile"> An Error occur while placing order </span>
//                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//                     </div>
//                 `

//                 document.getElementById("RequestBtn").innerHTML = "Order"

//             }, 4000);

//             setTimeout(() => {
//                 error_order.style.display = "none"
//             }, 8000);
//         });



// }


// FETCH ORDERS

