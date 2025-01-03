function getBotResponse(input) {
    //rock paper scissors
    if (input == "rock") {
        return "paper";
    } else if (input == "paper") {
        return "scissors";
    } else if (input == "scissors") {
        return "rock";
    }

    // Simple responses
    if (input == "hello" || input == "hi") {
        return "Hello there!";
    } else if (input == "courses available") {
        return "There are many courses available in our institution all depending on the departmant and program you are signing up for so contact us for more info or visit our website";
    } 
    else if (input == "who are you") {
        return "Am FoSAI your facilitator";
    } 
    else if (input == "goodbye") {
        return "seee you later";
    } 
    else if (input == "where are you") {
        return "Our institution has 2 campuses located at carrefour simbok and crrefour simbock montee chapel";
    } 
    else if (input == "admission requirement") {
        return "Academic Level\nNEB +2 overall aggregate of 2.2 CGPA (55%) or above with each subject (theory and practical) grade D+ or above, and SEE Mathematics score of C+ ( 50%) or above.\nFor A-Levels, a minimum of 3.5 credits and atleast a grade of D and above.\n\nEnglish Proficiency\nEnglish NEB XII Marks greater or equals to 60% or 2.4 GPA\nFor Level 4 or Year 1 BIT\nPass in General Paper or English Language or IELTS 5.5 or PTE 47/ Meeting UCAS Tariff points of 80.\nFor Level 4 or Year 1 BBA\nPass in General Paper or English Language or IELTS 5.5 or PTE 47/ Meeting UCAS Tariff points of 96.";
    } else if(input == "name of institution"){
     return "Our Institution goes by the name Yaounde International Bussiness School(YIBS)" }
    else {
        return "Try asking something else!";
    }
}