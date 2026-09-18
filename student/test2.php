<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Family Relationship Test</title>
    <?php include_once 'includes/head.php' ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .question {
            margin-bottom: 15px;
        }
        .correct {
            color: green;
        }
        .incorrect {
            color: red;
        }
    </style>
</head>
<body>
<?php include_once 'includes/nav.php' ?>

<h1>Mathematical logic aptitude</h1>

<div class="question" id="question1">
    <p>1. 1. If for a certain quantity of books, the publisher has to pay Rs. 30,600 as printing cost, then what will be amount of royalty to be paid for these books?
</p>
    <label>
        <input type="radio" name="q1" value="a"> a) Rs 19,450
    </label><br>
    <label>
        <input type="radio" name="q1" value="b"> b) Rs 21,200
    </label><br>
    <label>
        <input type="radio" name="q1" value="c"> c) Rs 22,950
    </label><br>
    <label>
        <input type="radio" name="q1" value="d"> d) Rs 26,150
    </label>
</div>

<div class="question" id="question2">
    <p>2. What is the central angle of the sector corresponding to the expenditure incurred on Royalty?</p>
    <label>
        <input type="radio" name="q2" value="a"> a) 15
    </label><br>
    <label>
        <input type="radio" name="q2" value="b"> b) 24
    </label><br>
    <label>
        <input type="radio" name="q2" value="c"> c) 54
    </label><br>
    <label>
        <input type="radio" name="q2" value="d"> d) 48
    </label>
</div>

<div class="question" id="question3">
    <p>3. The price of the book is marked 20% above the C.P. If the marked price of the book is Rs. 180, then what is the cost of the paper used in a single copy of the book</p>
    <label>
        <input type="radio" name="q3" value="a"> a) Rs 36
    </label><br>
    <label>
        <input type="radio" name="q3" value="b"> b) Rs 37.50
    </label><br>
    <label>
        <input type="radio" name="q3" value="c"> c) Rs 42
    </label><br>
    <label>
        <input type="radio" name="q3" value="d"> d) Rs 44.25
    </label>
</div>

<div class="question" id="question4">
    <p>4. If 5500 copies are published and the transportation cost on them amounts to Rs. 82500, then what should be the selling price of the book so that the publisher can earn a profit of 25%?</p>
    <label>
        <input type="radio" name="q4" value="a"> a) Rs 187.50
    </label><br>
    <label>
        <input type="radio" name="q4" value="b"> b) Rs 191.50
    </label><br>
    <label>
        <input type="radio" name="q4" value="c"> c) Rs 175
    </label><br>
    <label>
        <input type="radio" name="q4" value="d"> d) Rs 180
    </label>
</div>

<div class="question" id="question5">
    <p>5. 5. Royalty on the book is less than the printing cost by:
</p>
    <label>
        <input type="radio" name="q5" value="a"> a) 5%
    </label><br>
    <label>
        <input type="radio" name="q5" value="b"> b) 33.20%
    </label><br>
    <label>
        <input type="radio" name="q5" value="c"> c) 20%
    </label><br>
    <label>
        <input type="radio" name="q5" value="d"> d) 25%
    </label>
</div>

<button onclick="submitTest()">Submit Test</button>

<script>
    function submitTest() {
        let score = 0;

        // Check answer for question 1
        const q1Answer = document.querySelector('input[name="q1"]:checked');
        if (q1Answer) {
            if (q1Answer.value === 'c') {
                score++;
                q1Answer.parentNode.classList.add('correct');
            } else {
                q1Answer.parentNode.classList.add('incorrect');
            }
        }

        // Check answer for question 2
        const q2Answer = document.querySelector('input[name="q2"]:checked');
        if (q2Answer) {
            if (q2Answer.value === 'c') {
                score++;
                q2Answer.parentNode.classList.add('correct');
            } else {
                q2Answer.parentNode.classList.add('incorrect');
            }
        }

        // Check answer for question 3
        const q3Answer = document.querySelector('input[name="q3"]:checked');
        if (q3Answer) {
            if (q3Answer.value === 'a') {
                score++;
                q3Answer.parentNode.classList.add('correct');
            } else {
                q3Answer.parentNode.classList.add('incorrect');
            }
        }

        // Check answer for question 4
        const q4Answer = document.querySelector('input[name="q4"]:checked');
        if (q4Answer) {
            if (q4Answer.value === 'a') {
                score++;
                q4Answer.parentNode.classList.add('correct');
            } else {
                q4Answer.parentNode.classList.add('incorrect');
            }
        }

        // Check answer for question 5
        const q5Answer = document.querySelector('input[name="q5"]:checked');
        if (q5Answer) {
            if (q5Answer.value === 'd') {
                score++;
                q5Answer.parentNode.classList.add('correct');
            } else {
                q5Answer.parentNode.classList.add('incorrect');
            }
        }

        alert("Your score is: " + score + "/5");
    }
</script>

</body>
</html>
