<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <title>Curriculum Map</title>
    
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/process_diagram.css">
    <link rel="icon" href="assets/img/favicon.ico">

</head>

<body>

<div class="information">
    <h1 id="studName"><?php 
        $studentName = "Lanz Joseph T. Villanueva";
        echo $studentName;
    ?>
    </h1>
    <h1 id="units" >UNITS : 0</h1>
    <select id="yearLevel" onchange="yearLev(this.value), displayMaxUnits()">
        <option value="0">YEAR LEVEL:</option>
        <option value="1">FIRST YEAR</option>
        <option value="2">SECOND YEAR</option>
        <option value="3">THIRD YEAR</option>
        <option value="4">FOURTH YEAR</option>
    </select>
    <select id="semester" onchange="semTerm(this.value), displayMaxUnits()">
        <option value="0">SEMESTER/TERM:</option>
        <option value="1">FIRST TERM</option>
        <option value="2">SECOND TERM</option>
        <option value="3">THIRD TERM</option>
        <option value="4">OFF TERM</option>
    </select>
    <h1 id="maxUnits">Maximum Units : 0</h1>
</div>
<h1 id="overloading">Error! You are overloading</h1>

<div class="container">
    <div id="left"></div>
    <div id="right">
        <div id="empty"></div>
    <!-- <ol class="process_diagram">
        <li><div class="list" draggable="true" data-value="2">Programming Logic and Design</div></li>
        <li><div class="list" draggable="true" data-value="2">Computer Programming</div></li>
        <li><div class="list" draggable="true" data-value="2">Computer Programming 2 (Object-Oriented)</div></li>
        <li>
            <ul>
                <li>
                    <ol>
                        <li><div class="list" draggable="true" data-value="2">Computer Programming 3 (Java EE)</div></li>
                        <li><div class="list" draggable="true" data-value="2">Computer Programming 4 (VB.Net)</div></li>
                        <li><div class="list" draggable="true" data-value="3">Computer Programming 5</div></li>
                        <ol>
                            <li><div class="list" draggable="true" data-value="3">Computer Programming 5</div></li>
                            <ol>
                                <li><div class="list" draggable="true" data-value="3">Computer Programming 6</div></li>
                            </ol>
                        </ol>
                    </ol>
                </li>
                <li>
                    <ol>
                        <li><div class="list" draggable="true" data-value="3">Data Structures and Algorithm Analysis</div></li>
                        <li><div class="list" draggable="true" data-value="4">Software Design</div></li>
                    </ol>
                </li>
            </ul>
        </li>
        <li><div>END</div></li>
    </ol>

    <ol class="process_diagram">
        <li>
            <ul>
                <li><div class="list" draggable="true" data-value="3">Advanced Algebra</div></li>
                <li><div class="list" draggable="true" data-value="5">Engineering Mathematics</div></li>
            </ul>
        </li>
        <li><div class="list" draggable="true" data-value="4">Engineering Calculus 1</div></li>
        <li>
            <ol>
                <ul>
                    <li>
                        <ol>
                            <li><div class="list" draggable="true" data-value="4">Engineering Calculus 2</div></li>
                            <li><div class="list" draggable="true" data-value="3">Differential Equations</div></li>
                            <li><div class="list" draggable="true" data-value="3">Advance Engineering Mathematics for CpE</div></li>
                        </ol>
                    </li>
                    <li>
                        <ol>
                            <li><div class="list" draggable="true" data-value="4">Engineering Physics 1</div></li>
                            <li><div class="list" draggable="true" data-value="4">Engineering Physics 2</div></li>
                            <li><div class="list" draggable="true" data-value="3">Statics of Rigid Bodies</div></li>
                            <li><div class="list" draggable="true" data-value="3">Statics of Rigid Bodies</div></li>
                            <li><div class="list" draggable="true" data-value="2">Dynamics of Rigid Bodies</div></li>
                            <li><div class="list" draggable="true" data-value="3">Mechanics of Deformable Bodies</div></li>
                        </ol>
                    </li>
                </ul>
            </ol>
        </li>
        <li><div>END</div></li>
    </ol>
    <ol class="process_diagram">
        <li><div class="list" draggable="true" data-value="2">Computer Engineering as a Discipline</div></li>
        <li>
            <ol>
                <li><div>Node 1.1.1</div></li>
                <li>
                    <ul>
                        <li><div>Node 1.1.1.1</div></li>
                        <li><div>Node 1.1.1.2</div></li>
                    </ul>
                </li>
                <li><div>Node 1.1.2</div></li>
                <li>
                    <ul>
                        <li><div>Node 1.1.2.1</div></li>
                        <li><div>Node 1.1.2.2</div></li>
                        <li><div>Node 1.1.2.3</div></li>
                    </ul>
                </li>
            </ol>
        </li>
        <li><div>Node 1.1.2.3</div></li>
    </ol> -->

    </div>

</div>

<script src="assets/js/subjects.js"></script>
<script src="assets/js/index.js"></script>
</body>
</html>