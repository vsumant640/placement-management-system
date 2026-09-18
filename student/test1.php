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
<h1>Blood Relationship Test</h1>

<div class="question" id="question1">
    <p>1. Pointing to a photograph of a boy Suresh said, "He is the son of the only son of my mother." How is Suresh related to that boy?</p>
    <label>
        <input type="radio" name="q1" value="a"> a) Brother
    </label><br>
    <label>
        <input type="radio" name="q1" value="b"> b) Uncle
    </label><br>
    <label>
        <input type="radio" name="q1" value="c"> c) Cousin
    </label><br>
    <label>
        <input type="radio" name="q1" value="d"> d) Father
    </label>
</div>

<div class="question" id="question2">
    <p>2. If A+B means A is the mother of B; A-B means A is the brother B; A% B means A is the father of B and A * B means A is the sister of B, which of the following shows that P is the maternal uncle of Q?</p>
    <label>
        <input type="radio" name="q2" value="a"> a) Q-N+M*P
    </label><br>
    <label>
        <input type="radio" name="q2" value="b"> b) P+S*N-Q
    </label><br>
    <label>
        <input type="radio" name="q2" value="c"> c) P-M+N*Q
    </label><br>
    <label>
        <input type="radio" name="q2" value="d"> d) Q-S%P
    </label>
</div>

<div class="question" id="question3">
    <p>3. If A is the brother of B; B is the sister of C; and C is the father of D, how D is related to A?</p>
    <label>
        <input type="radio" name="q3" value="a"> a) Brother
    </label><br>
    <label>
        <input type="radio" name="q3" value="b"> b) Sister
    </label><br>
    <label>
        <input type="radio" name="q3" value="c"> c) Nephew
    </label><br>
    <label>
        <input type="radio" name="q3" value="d"> d) Cannot be determined
    </label>
</div>

<div class="question" id="question4">
    <p>4. If A+B means A is the brother of B; A-B means A is the sister of B and A * B means A is the father of B. Which of the following means that C is the son of M?</p>
    <label>
        <input type="radio" name="q4" value="a"> a) M-N*C+F
    </label><br>
    <label>
        <input type="radio" name="q4" value="b"> b) F-C+N*M
    </label><br>
    <label>
        <input type="radio" name="q4" value="c"> c) N+M-F*C
    </label><br>
    <label>
        <input type="radio" name="q4" value="d"> d) M*N-C+F
    </label>
</div>

<div class="question" id="question5">
    <p>5. Introducing a boy, a girl said, "He is the son of the daughter of the father of my uncle." How is the boy related to the girl?</p>
    <label>
        <input type="radio" name="q5" value="a"> a) Brother
    </label><br>
    <label>
        <input type="radio" name="q5" value="b"> b) Nephew
    </label><br>
    <label>
        <input type="radio" name="q5" value="c"> c) Uncle
    </label><br>
    <label>
        <input type="radio" name="q5" value="d"> d) Son-in-law
    </label>
</div>

<button onclick="submitTest()">Submit Test</button>

<script>
    function submitTest() {
        let score = 0;

        // Check answer for question 1
        const q1Answer = document.querySelector('input[name="q1"]:checked');
        if (q1Answer) {
            if (q1Answer.value === 'd') {
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
            if (q3Answer.value === 'd') {
                score++;
                q3Answer.parentNode.classList.add('correct');
            } else {
                q3Answer.parentNode.classList.add('incorrect');
            }
        }

        // Check answer for question 4
        const q4Answer = document.querySelector('input[name="q4"]:checked');
        if (q4Answer) {
            if (q4Answer.value === 'd') {
                score++;
                q4Answer.parentNode.classList.add('correct');
            } else {
                q4Answer.parentNode.classList.add('incorrect');
            }
        }

        // Check answer for question 5
        const q5Answer = document.querySelector('input[name="q5"]:checked');
        if (q5Answer) {
            if (q5Answer.value === 'a') {
                score++;
                q5Answer.parentNode.classList.add('correct');
            } else {
                q5Answer.parentNode.classList.add('incorrect');
            }
        }

        let message = "Your score is: " + score + "/5\n";

        // Display message
        alert(message);
    }
</script>

</body>
</html>
