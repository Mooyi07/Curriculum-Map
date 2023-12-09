units();

var MaxUnits = [
    [0, 0,  0,  0,  0],
    [0, 26, 23, 20, 10],
    [0, 21, 20, 20, 10],
    [0, 23, 23, 19, 10],
    [0, 17, 12, 10, 10],
];

var yearL = 0;
var semT = 0;

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
            units();
        });

        leftBox.addEventListener("dragover", function(e){
            e.preventDefault();
        });
        leftBox.addEventListener("drop", function(e){
            leftBox.appendChild(selected);
            selected = null;
            units();
        });
    })
}

function units(){
    let numUnits = 0;
    let maxUnits = MaxUnits[yearL][semT];

    let valUnits = document.getElementById("left").children;
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

function yearLev(yL){
    yearL = parseInt(yL);
    displayMaxUnits();
}

function semTerm(sT){
    semT = parseInt(sT);
    displayMaxUnits();
}

function displayMaxUnits(){
    document.getElementById("maxUnits").innerHTML = "Maximum Units : " + MaxUnits[yearL][semT];
}