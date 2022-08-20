//adding submit logic to the form
var form = document.getElementById('form');
form.addEventListener("submit", process);

function process(e) {
    e.preventDefault();

    //getting all the input
    var name = document.getElementById('name').value;
    var lname = document.getElementById('lname').value;
    var age = document.getElementById('age').value;
    var city = document.getElementById('city').value;
    var address = document.getElementById('address').value;
    var gender = document.querySelector('input[name=gender]:checked').value;
    var about = document.getElementById('about').value;
    var infoSec = document.getElementById('info');

    var ok = true;
    var messages = [];

    var messagesDisplay = document.getElementById("messages");

    //statements
    if (age <= 0 || age > 100) {
        ok = false;
        messages.push("Invalid age value!");
    }

    if (name.length == 0 || name.length < 3) {
        ok = false;
        messages.push("Name must be 3 characters minimum!");
    }

    if (lname.length == 0 || lname.length < 4) {
        ok = false;
        messages.push("Last name must be 4 characters minimum!");
    }

    if (address.length == 0 || address.length < 10) {
        ok = false;
        messages.push("Address must have 10 characters minimum!");
    }

    //display error messages
    for (let i = 0; i < messages.length; i++) {
        if (messages.length <= 4) {
            messagesDisplay.innerHTML += `<p>${messages[i]}</p>`
        }
    }

    //remove error messages after 1.5s
    setTimeout(function () {
        messagesDisplay.innerHTML = ``;
    }, 1500)

    //make a new request
    var request = new XMLHttpRequest();
    request.open("GET", "process.php", true)
    request.onload = function () {
        if (ok) {

            //show info container
            infoSec.style.display = 'block';

            //fill the info container
            infoSec.innerHTML =
                `
                    <h3 class="display-3 text-success text-center">Information sent!</h3>
                    <p><span class="fw-bold">Name</span>: ${name}</p>
                    <p><span class="fw-bold">Last name</span>: ${lname}</p>
                    <p><span class="fw-bold">Age</span>: ${age}</p>
                    <p><span class="fw-bold">City</span>: ${city}</p>
                    <p><span class="fw-bold">Address</span>: ${address}</p>
                    <p><span class="fw-bold">Gender</span>: ${gender}</p>
                    <p><span class="fw-bold">About</span>: ${about}</p>
                    `;
            //hide form
            form.style.display = 'none';
        }
    }

    request.send();
}