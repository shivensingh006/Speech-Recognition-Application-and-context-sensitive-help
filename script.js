
function speechRecognition(){
var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition
var SpeechGrammarList = SpeechGrammarList || webkitSpeechGrammarList
var SpeechRecognitionEvent = SpeechRecognitionEvent || webkitSpeechRecognitionEvent

var recognition = new SpeechRecognition();
var speechRecognitionList = new SpeechGrammarList();
recognition.grammars = speechRecognitionList;
//recognition.continuous = false;
recognition.lang = 'en-US';
recognition.interimResults = false;
recognition.maxAlternatives = 1;

var diagnostic = document.querySelector('.output');
var bg = document.querySelector('body');
var hints = document.querySelector('.hints');


recognition.start();

recognition.onresult = function(event) {
  var last = event.results.length - 1;
  var voice_value = event.results[last][0].transcript;
	console.log(voice_value);
   //Redirect to any page on based on voice
	var querySelector = document.querySelectorAll("a");
	console.log(querySelector.length);
		for (var i = 0; i < querySelector.length; i++){
				if (querySelector[i].getAttribute("do_action") && voice_value.toLowerCase() == querySelector[i].getAttribute("do_action").toLowerCase()){
					console.log(querySelector[i].getAttribute("do_action").toLowerCase());
					var do_action = querySelector[i].getAttribute("href");
					window.location.replace(do_action);
				}
			
	}
	
	
	//Start form related action from voice 
	var inputs = document.getElementsByTagName("input");
	for(var i = 0; i < inputs.length; i++) {
		
		//This is for checkbox
		if(inputs[i].type == "checkbox") {
			var chech_value = inputs[i].value;
			if(voice_value.toLowerCase() == 'check '+chech_value.toLowerCase()){
				inputs[i].checked = true; 
				checkProtocol(false);
			}else if(voice_value.toLowerCase() == 'uncheck '+chech_value.toLowerCase()){
				console.log('checkfalse');
				inputs[i].checked = false;
				checkProtocol(false);
			}
			
		}  
		
		//This is for textbox
		if(inputs[i].type == "text") {
			if(inputs[i].getAttribute("do_action") && voice_value.toLowerCase().indexOf(inputs[i].getAttribute("do_action").toLowerCase()) > -1){
				let value = voice_value.toLowerCase().replace(inputs[i].getAttribute("do_action").toLowerCase(), '');
				inputs[i].value=value;
			}
			
		}
	}
	
	
   //Submit form
   if (voice_value.toLowerCase().indexOf('validate') > -1) {
	  document.querySelector('[type="submit"]').click();
   }
}


recognition.onspeechend = function() {
 speechRecognition();
}

recognition.onnomatch = function(event) {
  //diagnostic.textContent = "I didn't recognise that voice_value.";
}

recognition.onerror = function(event) {
  diagnostic.textContent = 'Error occurred in recognition: ' + event.error;
}

}

speechRecognition();