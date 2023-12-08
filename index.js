units();

let lists = document.getElementsByClassName("list");
let rightBox = document.getElementById("right");
let leftBox = document.getElementById("left");

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
    var valUnits = document.getElementById("left").children;
    for (let i = 0; i < valUnits.length; i++){
        var val = valUnits[i].getAttribute('data-value');
        numUnits = numUnits + parseInt(val); 
    };
    document.getElementById("units").innerHTML = "UNITS : " + numUnits;
}