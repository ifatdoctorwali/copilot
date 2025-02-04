<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question Reader</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Question Listening Feature</h1>
        </div>
        <div class="main-content">
            <div class="question-container">
                <h2>Click on a question to hear it:</h2>
                <ul class="preset-questions">
                    <div class="quick-questions">
            <button class="question-btn" onclick="askQuestion('How can I learn JavaScript?')">How can I learn JavaScript?</button>
            <button class="question-btn" onclick="askQuestion('What are the best practices for responsive design?')">What are the best practices for responsive design?</button>
            <button class="question-btn" onclick="askQuestion('How to optimize website performance?')">How to optimize website performance?</button>
            <button class="question-btn" onclick="askQuestion('Explain CSS Grid vs Flexbox')">Explain CSS Grid vs Flexbox</button>
            <button class="question-btn" onclick="askQuestion('What is React and why use it?')">What is React and why use it?</button>
            <button class="question-btn" onclick="askQuestion('How to handle API requests?')">How to handle API requests?</button>
            <button class="question-btn" onclick="askQuestion('Explain database types and their uses')">Explain database types and their uses</button>
            <button class="question-btn" onclick="askQuestion('What are Web Security best practices?')">What are Web Security best practices?</button>
            <button class="question-btn" onclick="askQuestion('How to deploy a website?')">How to deploy a website?</button>
            <button class="question-btn" onclick="askQuestion('Explain version control with Git')">Explain version control with Git</button>>
 <button onclick="askQuestion('What is artificial intelligence?')">What is artificial intelligence?</button>
                    <button onclick="askQuestion('How does machine learning work?')">How does machine learning work?</button>
                    <button onclick="askQuestion('What are the benefits of AI?')">What are the benefits of AI?</button>
                    <button onclick="askQuestion('Explain neural networks')">Explain neural networks</button>
                    <button onclick="askQuestion('What is deep learning?')">What is deep learning</button>
                    <button onclick="askQuestion('How is AI used in healthcare?')">How is AI used in healthcare?</button>
                    <button onclick="askQuestion('What is natural language processing?')">What is natural language processing?</button>
                    <button onclick="askQuestion('Future of artificial intelligence?')">Future of artificial intelligence?</button>
                    <button onclick="askQuestion('AI ethics and challenges?')">AI ethics and challenges?</button>
                    <button onclick="askQuestion('How to start learning AI?')">How to start learning AI?</button>
                </ul>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
