

// Referenties naar alle objecten
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

// Laat de modal zien wanneer erop geklikt wordt
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

// Sluit de modal wanneer op x wordt geklikt
closeBtn.addEventListener('click', function() {
    modal.style.display = "none";
});

// Sluit de modal wanneer er er buiten wordt geklikt
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

window.addEventListener('click', function(event) {
    if (event.target === modal3) {
        modal3.style.display = "none";
    }
});

closeBtn4.addEventListener('click', function() {
    modal4.style.display = "none";
});

window.addEventListener('click', function(event) {
    if (event.target === modal4) {
        modal4.style.display = "none";
    }
});

closeBtn5.addEventListener('click', function() {
    modal5.style.display = "none";
});

window.addEventListener('click', function(event) {
    if (event.target === modal5) {
        modal5.style.display = "none";
    }
});

closeBtn6.addEventListener('click', function() {
    modal6.style.display = "none";
});

window.addEventListener('click', function(event) {
    if (event.target === modal6) {
        modal6.style.display = "none";
    }
});

closeBtn7.addEventListener('click', function() {
    modal7.style.display = "none";
});

window.addEventListener('click', function(event) {
    if (event.target === modal7) {
        modal7.style.display = "none";
    }
});

closeBtn.addEventListener('click', function() {
    modal.style.display = "none";
});

window.addEventListener('click', function(event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
});


function checkCheckboxes(event) {
    event.preventDefault(); // Vermijd inleveren van form voor testen

    const gameChecked = document.getElementById("games").checked;
    const programChecked = document.getElementById("programs").checked;

    // Hide game items if the checkbox is not checked
    const gameItems = document.querySelectorAll('.game');
    gameItems.forEach(item => {
        if (!gameChecked) {
            item.style.display = 'none';
        } else {
            item.style.display = ''; // Reset display als gevinkt is
        }
    });

    // Verberg de niet gefilterde programma's
    const programItems = document.querySelectorAll('.program');
    programItems.forEach(item => {
        if (!programChecked) {
            item.style.display = 'none';
        } else {
            item.style.display = ''; // Reset display als gevinkt is
        }
    });
}