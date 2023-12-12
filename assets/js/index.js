const sub = document.createElement('script');
sub.src = "subjects.js";

let yearL = 0;
let semT = 0;

let valUnits = document.getElementById("left").children;

var MaxUnits = [
    [0, 0,  0,  0,  0],
    [0, 26, 23, 20, 10],
    [0, 21, 20, 20, 10],
    [0, 23, 23, 19, 10],
    [0, 17, 12, 10, 10],
];

var rightB = document.getElementById("right");

for (let i = 0; i < Subjects.length; i++){
    createAttr(i);
}

units(valUnits, yearL, semT);

function yearLev(yL){
    yearL = parseInt(yL);
}

function semTerm(sT){
    semT = parseInt(sT);
}

var lists = document.getElementsByClassName("list");
var rightBox = document.getElementById("right");
var leftBox = document.getElementById("left");

for(list of lists){
    list.addEventListener("dragstart", function(e){
        let selected = e.target;

        rightBox.addEventListener("dragover", function(e){
            e.preventDefault();
        });
        rightBox.addEventListener("drop", function(e){
            rightBox.appendChild(selected);
            selected = null;
            units(valUnits, yearL, semT);
        });

        leftBox.addEventListener("dragover", function(e){
            e.preventDefault();
        });
        leftBox.addEventListener("drop", function(e){
            leftBox.appendChild(selected);
            selected = null;
            units(valUnits, yearL, semT);
        });
    })
}

function units(valUnits, yearL, semT){
    let numUnits = 0;
    let maxUnits = MaxUnits[yearL][semT];

    for (let i = 0; i < valUnits.length; i++){
        let val = valUnits[i].getAttribute('data-value');
        numUnits = numUnits + parseInt(val); 
    };
    if (numUnits > maxUnits){
        document.getElementById("overloading").style.display = "block";
    }
    else {
        document.getElementById("overloading").style.display = "none";
    }
    document.getElementById("units").innerHTML = "UNITS : " + numUnits;

}

function displayMaxUnits(){
    document.getElementById("maxUnits").innerHTML = "Maximum Units : " + MaxUnits[yearL][semT];
}

function createAttr(i){
    const h2 = document.getElementById("empty");
    var html = "<div class='list' draggable='true' data-value='" + Subjects[i].units + "'>" + Subjects[i].desc + "</div>";
    h2.insertAdjacentHTML("afterend", html);
}