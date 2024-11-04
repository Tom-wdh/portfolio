//
// for(let i = 1; i < myArray.length; i++) {
//     console.log(myArray[i]);
// }
// // Objecten
// const person = {
//     name: "Mischa",
//     height: 186
// }
//
// // const user = new person()
// const person2 = {
//     name: "Damien",
//     height: 183
// }
// // console.log(myObj.person01.firstname)
//
// // const object = { a: 1, b: 2, c: 3 };
//
// //'i' are properties of object person2
// for (const i in person2) {
//     console.log(i + ": " + person2[i]);
// }
//
// let arrayX = ["x", "y", "z"]
// console.log(...arrayX)
// // Expected output:
// // person: Stephan Hoeksema
//
/*function Car(make, model, year) {
    this.make = make;
    this.model = model;
    this.year = year;
}

let jsDisplay = document.getElementById('js');
//let myCar = new Car('Kia', 'Ceed', 2022);
//jsDisplay.innerHTML = myCar.make + " " + myCar.year;

let myArray = ["Stephan", "Arie", "Eva"];

myArray.push("Stefanie");
myArray[1] = "Bassima";
jsDisplay.innerHTML = myArray.length + "<br>";

myArray.forEach((element) => jsDisplay.innerHTML = jsDisplay.innerHTML + (element) + "<br>");
*/



// Grab references to elements
var element = document.getElementById('project_1');
var element2 = document.getElementById('project_2');
var element3 = document.getElementById('project_3');
var element4 = document.getElementById('project_4');
var element5 = document.getElementById('project_5');
var element6 = document.getElementById('project_6');
var element7 = document.getElementById('project_7');
var modal = document.getElementById('myModal');
var modal2 = document.getElementById('myModal2');
var modal3 = document.getElementById('myModal3');
var modal4 = document.getElementById('myModal4');
var modal5 = document.getElementById('myModal5');
var modal6 = document.getElementById('myModal6');
var modal7 = document.getElementById('myModal7');
var closeBtn = document.getElementsByClassName('close')[0];
var closeBtn2 = document.getElementsByClassName('close2')[0];
var closeBtn3 = document.getElementsByClassName('close3')[0];
var closeBtn4 = document.getElementsByClassName('close4')[0];
var closeBtn5 = document.getElementsByClassName('close5')[0];
var closeBtn6 = document.getElementsByClassName('close6')[0];
var closeBtn7 = document.getElementsByClassName('close7')[0];

// Show the modal when the element is clicked
element.addEventListener('click', function() {
    modal.style.display = "block";
});

element2.addEventListener('click', function() {
    modal2.style.display = "block";
});

element3.addEventListener('click', function() {
    modal3.style.display = "block";
});

element4.addEventListener('click', function() {
    modal4.style.display = "block";
});

element5.addEventListener('click', function() {
    modal5.style.display = "block";
});

element6.addEventListener('click', function() {
    modal6.style.display = "block";
});

element7.addEventListener('click', function() {
    modal7.style.display = "block";
});

// Close the modal when the "x" is clicked
closeBtn.addEventListener('click', function() {
    modal.style.display = "none";
});

// Close the modal when clicking outside the modal content
window.addEventListener('click', function(event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
});

closeBtn2.addEventListener('click', function() {
    modal2.style.display = "none";
});

// Close the modal when clicking outside the modal content
window.addEventListener('click', function(event) {
    if (event.target === modal2) {
        modal2.style.display = "none";
    }
});

closeBtn3.addEventListener('click', function() {
    modal3.style.display = "none";
});

// Close the modal when clicking outside the modal content
window.addEventListener('click', function(event) {
    if (event.target === modal3) {
        modal3.style.display = "none";
    }
});

closeBtn4.addEventListener('click', function() {
    modal4.style.display = "none";
});

// Close the modal when clicking outside the modal content
window.addEventListener('click', function(event) {
    if (event.target === modal4) {
        modal4.style.display = "none";
    }
});

closeBtn5.addEventListener('click', function() {
    modal5.style.display = "none";
});

// Close the modal when clicking outside the modal content
window.addEventListener('click', function(event) {
    if (event.target === modal5) {
        modal5.style.display = "none";
    }
});

closeBtn6.addEventListener('click', function() {
    modal6.style.display = "none";
});

// Close the modal when clicking outside the modal content
window.addEventListener('click', function(event) {
    if (event.target === modal6) {
        modal6.style.display = "none";
    }
});

closeBtn7.addEventListener('click', function() {
    modal7.style.display = "none";
});

// Close the modal when clicking outside the modal content
window.addEventListener('click', function(event) {
    if (event.target === modal7) {
        modal7.style.display = "none";
    }
});

closeBtn.addEventListener('click', function() {
    modal.style.display = "none";
});

// Close the modal when clicking outside the modal content
window.addEventListener('click', function(event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
});


function checkCheckboxes(event) {
    event.preventDefault(); // Prevent form submission for testing

    const gameChecked = document.getElementById("games").checked;
    const programChecked = document.getElementById("programs").checked;

    // Hide game items if the checkbox is not checked
    const gameItems = document.querySelectorAll('.game');
    gameItems.forEach(item => {
        if (!gameChecked) {
            item.style.display = 'none';
        } else {
            item.style.display = ''; // Reset display if checked
        }
    });

    // Hide program items if the checkbox is not checked
    const programItems = document.querySelectorAll('.program');
    programItems.forEach(item => {
        if (!programChecked) {
            item.style.display = 'none';
        } else {
            item.style.display = ''; // Reset display if checked
        }
    });
}