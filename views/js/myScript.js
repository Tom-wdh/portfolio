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

let lang = false;


function langChange() {
    if (lang === false) {
        changeLang();
    } else {
        changeLangBack();
    }
}
function changeLang() {
    document.getElementById("about").innerHTML = "About Me";
    document.getElementById("welcome").innerHTML = "Welcome to my portfolio";
    document.getElementById("projects").innerHTML = "Projects";
    document.getElementById("itch").innerHTML = "My Itch";
    document.getElementById("translate").innerHTML = "Translate";
    lang = true;

}


function changeLangBack(){
    document.getElementById("about").innerHTML = "Over Mij";
    document.getElementById("welcome").innerHTML = "Welkom bij mijn portfolio";
    document.getElementById("projects").innerHTML = "Projecten";
    document.getElementById("itch").innerHTML = "Mijn Itch";
    document.getElementById("translate").innerHTML = "Vertalen";
    lang = false;
}