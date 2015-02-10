// Setup your quiz text and questions here

// NOTE: pay attention to commas, IE struggles with those bad boys

var basicJSON = {
    "info": {
        "name":    "Present Tense",
        "main":    "<p> To Drink: Komela</p>",
        "results": "<h5>Take another quiz</h5><p>Keep learning by taking more quizes.</p>",
        "level1":  "DRC Champion",
        "level2":  "DRC Heavyweight",
        "level3":  "DRC Lightweight",
        "level4":  "DRC Featherweight",
        "level5":  "DRC Amature"  // no comma here
    },
       "questions": [
        { // Question 1 - Multiple Choice, Single True Answer
            "q": "What is the Lingala Subject Marker and verb for 'I Drink'?",
            "a": [
                {"option": "Ozo Mela",    "correct": false},
                {"option": "Bazo Mela",     "correct": false},
                {"option": "Tozo Mela",  "correct": false},
                {"option": "Nazo Mela",  "correct": true}
            ],
            "correct": "<p><span>That's right!</span>.</p>",
            "incorrect": "<p><span>Uhh no.</span> Better luck next time. The correct answer is <em>Nazo Mela</em>.</p>" // no comma here
        },
        { // Question 2 - Multiple Choice, Multiple True Answers, Select Any
            "q": "What is the Lingala Subject Marker and verb for 'You Drink'?",
            "a": [
                {"option": "Nazo Mela",   "correct": false},
                {"option": "Azo Mela",   "correct": false},
                {"option": "Ozo Mela",  "correct": true},
                {"option": "Bozo Mela",   "correct": false} // no comma here
            ],
            "select_any": true,
            "correct": "<p><span>Nice!</span> Yes! That is correct. Keep it up!</p>",
            "incorrect": "<p><span>Hmmm.</span> Nice try. The correct answer is <em>Ozo Mela</em>.</p>" // no comma here
        },
        { // Question 3 - Multiple Choice, Multiple True Answers, Select All
            "q": "What is the Lingala Subject Marker and verb for 'He/She Drinks'?",
            "a": [
                {"option": "Bazo Mela",  "correct": false},
                {"option": "Ezo Mela",  "correct": false},
                {"option": "Ozo Mela",  "correct": false},
                {"option": "Azo Mela",  "correct": true} // no comma here
            ],
            "correct": "<p><span>Brilliant!</span> You're doing a great job.</p>",
            "incorrect": "<p><span>Not Quite.</span> But nice try. The correct answer is <em>Azo Mela</em>.</p>" // no comma here
        },
        { // Question 4
            "q": "What is the Lingala Subject Marker and verb for 'It Drinks'?",
            "a": [
                {"option": "Tozo Mela",    "correct": false},
                {"option": "Ezo Mela", "correct": true},
                {"option": "Azo Mela",      "correct": false},
                {"option": "Ozo Mela",   "correct": false} // no comma here
            ],
            "correct": "<p><span>Goodness!</span> Correct!</p>",
            "incorrect": "<p><span>Fail.</span> Sorry. The correct answer is <em>Ezo Mela</em>.</p>" // no comma here
        },
        { // Question 5
            "q": "What is the Lingala Subject Marker and verb for 'We Drink'?",
            "a": [
                {"option": "Bozo Mela",    "correct": false},
                {"option": "Bazo Mela",    "correct": false},
                {"option": "Ezo Mela",    "correct": false},
                {"option": "Tozo Mela",     "correct": true} // no comma here
            ],
            "correct": "<p><span>Great Job!</span> You must be very smart!</p>",
            "incorrect": "<p><span>Sorry.</span> The correct answer is <em>Tozo Mela</em>.</p>" // no comma here
        }, 
        { // Question 6 - Multiple Choice, Single True Answer
            "q": "What is the Lingala Subject Marker and verb for 'You Drink'?",
            "a": [
                {"option": "Ozo Mela",    "correct": false},
                {"option": "Bazo Mela",     "correct": false},
                {"option": "Bozo Mela",  "correct": true},
                {"option": "Ezo Mela",     "correct": false} // no comma here
            ],
            "correct": "<p><span>That's right!</span></p>",
            "incorrect": "<p><span>Uhh no.</span> Better luck next time. The correct answer is <em>Bozo Mela</em>.</p>" // no comma here
        },
        { // Question 7 - Multiple Choice, Multiple True Answers, Select Any
            "q": "What is the Lingala Subject Marker and verb for 'They Drink'?",
            "a": [
                {"option": "Bazo Mela",   "correct": true},
                {"option": "Ozo Mela",   "correct": false},
                {"option": "Azo Mela",  "correct": false},
                {"option": "Bozo Mela",   "correct": false} // no comma here
            ],
            "select_any": true,
            "correct": "<p><span>Nice!</span> Yes! You are amazing!</p>",
            "incorrect": "<p><span>Hmmm.</span> Nice try. The correct answer is <em>Bazo Mela</em>.</p>" // no comma here
        } // no comma here
    ]
};
