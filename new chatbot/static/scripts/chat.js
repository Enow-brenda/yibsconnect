//text to speech
let speech= new SpeechSynthesisUtterance();
listen.addEventListener('click', function(){
    var speech= true;
    window.SpeechRecognition = window.webkitSpeechRecognition;
    const recognition=new SpeechRecognition();
    recognition.interrimResults = true;
    
    recognition.addEventListener('result',e=>{
        let transcript =Array.from(e.results)
        .map(result =>result[0])
        .map(result => result.transcript)
   console.log(transcript)
        let userHtml = '<p class="userText"><span>' + transcript + '</span></p>';

    //$("#textInput").val("");
    document.getElementById("textInput").value="";
   // $("#chatbox").append(userHtml);
   document.getElementById("chatbox").innerHTML+=userHtml
    
    document.getElementById("chat-bar-bottom").scrollIntoView(true);

    setTimeout(() => {
        getHardResponse(transcript);
    }, 1000)
      if(transcript==""){
        botResponse="Sorry, i didnot hear you"
        let botHtml = '<p class="botText"><span>' + botResponse + '</span></p>';
        document.getElementById("chatbox").innerHTML+=botHtml
        speech.text=botHtml;
        window.speechSynthesis.speak(speech);
        //$("#chatbox").append(botHtml);
    
        document.getElementById("chat-bar-bottom").scrollIntoView(true);
      }
       
    
        
    })
    if(speech == true)
    recognition.start();
})
// Collapsible
var coll = document.getElementsByClassName("collapsible");

for (let i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function () {
        this.classList.toggle("active");

        var content = this.nextElementSibling;

        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }

    });
}

function getTime() {
    let today = new Date();
    hours = today.getHours();
    minutes = today.getMinutes();

    if (hours < 10) {
        hours = "0" + hours;
    }

    if (minutes < 10) {
        minutes = "0" + minutes;
    }

    let time = hours + ":" + minutes;
    return time;
}

// Gets the first message
function firstBotMessage() {
    let firstMessage = "Hi,i Am your Virtual Assistant";
    document.getElementById("botStarterMessage").innerHTML = '<p class="botText"><span>' + firstMessage + '</span></p>';
    speech.text=firstMessage;
    window.speechSynthesis.speak(speech);

    let time = getTime();
     document.getElementById('chat-timestamp').innerHTML=time;
    //$("#chat-timestamp").append(time);
    document.getElementById("userInput").scrollIntoView(true);
}

firstBotMessage();

// Retrieves the response
function getHardResponse(userText) {
    let botResponse = getBotResponse(userText);
    let botHtml = '<table><tr><td><img src="bot.jpg" alt="Image" width="40px" ></td><td><p class="botText"><span>' + botResponse + '</span></p></td></tr></table> ';
    document.getElementById("chatbox").innerHTML+=botHtml
    speech.text=botHtml;
    window.speechSynthesis.speak(speech);
    //$("#chatbox").append(botHtml);

    document.getElementById("chat-bar-bottom").scrollIntoView(true);
}

//Gets the text text from the input box and processes it
function getResponse() {
    //let userText = $("#textInput").val();
    let userText=document.getElementById("textInput").value

    //if (userText == "") {
        //userText = "I love Code Palace!";
    //}

    let userHtml = '<p class="userText"><span>' + userText + '</span></p>';

    //$("#textInput").val("");
    document.getElementById("textInput").value="";
   // $("#chatbox").append(userHtml);
   document.getElementById("chatbox").innerHTML+=userHtml
    
    document.getElementById("chat-bar-bottom").scrollIntoView(true);

    setTimeout(() => {
        getHardResponse(userText);
    }, 1000)

}

// Handles sending text via button clicks


function sendButton() {
    getResponse();
}

function heartButton() {
    
    let userText=buttonSendText()
    console.log(userText);
    
}


// Press enter to send a message
//$("#textInput")
let input=document.getElementById("textInput")
input.addEventListener("keydown",function(event){
    if (event.keyCode === 13) {
        getResponse();
    }
});
