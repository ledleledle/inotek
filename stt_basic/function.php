<script>
var langs =
[
 ['Indonesia',['id-ID']],
 ['English-UK',  ['en-GB']]
 
 ];
for (var i = 0; i < langs.length; i++) {
  select_language.options[i] = new Option(langs[i][0], i);
}
select_language.selectedIndex = 1;
updateCountry();
select_dialect.selectedIndex = 1;
showInfo('info_start');
function updateCountry() {
  for (var i = select_dialect.options.length - 1; i >= 0; i--) {
    select_dialect.remove(i);
  }
  var list = langs[select_language.selectedIndex];
  for (var i = 1; i < list.length; i++) {
    select_dialect.options.add(new Option(list[i][1], list[i][0]));
  }
  select_dialect.style.visibility = list[1].length == 1 ? 'hidden' : 'visible';
}

var final_transcript = '';
var recognizing = false;
var ignore_onend;
var start_timestamp;
if (!('webkitSpeechRecognition' in window)) {
  upgrade();
} else {
  start_button.style.display = 'inline-block';
  var recognition = new webkitSpeechRecognition();
  recognition.continuous = true;
  recognition.interimResults = true;
  recognition.onstart = function() {
    recognizing = true;
    showInfo('info_speak_now');
    start_img.src = 'stt_basic/mic-animate.gif';

  };
  recognition.onerror = function(event) {
    if (event.error == 'no-speech') {
      start_img.src = 'stt_basic/mic.gif';
      showInfo('info_no_speech');
      ignore_onend = true;

      
    }
    if (event.error == 'audio-capture') {
      start_img.src = 'stt_basic/mic.gif';
      showInfo('info_no_microphone');
      ignore_onend = true;

     
    }
    if (event.error == 'not-allowed') {
      if (event.timeStamp - start_timestamp < 100) {
        showInfo('info_blocked');
      } else {
        showInfo('info_denied');
      }
      ignore_onend = true;
     
    }
	//alert('error tidak ada koneksi internet');

  };
  recognition.onend = function() {
    recognizing = false;
    if (ignore_onend) {

      return;
    }
    copy_button.style.display = 'inline-block';//tombol muncul showButtons('inline-block');
    start_img.src = 'stt_basic/mic.gif';
    if (!final_transcript) {
      showInfo('info_start');
      copy_button.style.display = 'none'; //jika tidak ada suara tombol hasil tdk muncul
      return;

    }
    showInfo('');
    if (window.getSelection) {
      window.getSelection().removeAllRanges();
      var range = document.createRange();
      range.selectNode(document.getElementById('final_span'));
      window.getSelection().addRange(range);    
    }
    
  };
  recognition.onresult = function(event) {
    var interim_transcript = '';
    for (var i = event.resultIndex; i < event.results.length; ++i) {
      if (event.results[i].isFinal) {
        final_transcript += event.results[i][0].transcript;
      } else {
        interim_transcript += event.results[i][0].transcript;
      }
    }
    final_transcript = capitalize(final_transcript);
    final_span.innerHTML = linebreak(final_transcript);
    interim_span.innerHTML = linebreak(interim_transcript);
    if (final_transcript || interim_transcript) {
      //showButtons('inline-block');
      copy_button.style.display = 'none';
    }

    
  };
}
function upgrade() {
  start_button.style.visibility = 'hidden';
  showInfo('info_upgrade');
}
var two_line = /\n\n/g;
var one_line = /\n/g;
function linebreak(s) {
  return s.replace(two_line, '<p></p>').replace(one_line, '<br>');
}
var first_char = /\S/;
function capitalize(s) {
  return s.replace(first_char, function(m) { return m.toUpperCase(); });
}

function copyButton() {
  if (recognizing) {
    recognizing = false;
    recognition.stop();
  }
  copy_button.style.display = 'none';
  copy_info.style.display = 'inline-block';
  showInfo('');
  //alert(final_transcript); //tampilkan string hasil stt
  showInfo('info_start');
  final_span.innerHTML = '';
  interim_span.innerHTML = '';
}

function startButton(event) {
  if (recognizing) {
    recognition.stop();
    return;
  }
  final_transcript = '';
  recognition.lang = select_dialect.value;
  recognition.start();
  ignore_onend = false;
  final_span.innerHTML = '';
  interim_span.innerHTML = '';
  start_img.src = 'stt_basic/mic-slash.gif';
  showInfo('info_allow');
  showButtons('none');
  start_timestamp = event.timeStamp;
  //alert('ga ono mic');  
}

//kirim data dari javascript ke php, post method
function click() {     
    var data = final_transcript;     
    document.getElementById("data").value = data;     
    document.getElementById("form").submit();   
  }   
var klik = document.getElementById("copy_button");  
klik.addEventListener("click", click);

function showInfo(s) {
  if (s) {
    for (var child = info.firstChild; child; child = child.nextSibling) {
      if (child.style) {
        child.style.display = child.id == s ? 'inline' : 'none';
      }
    }
    info.style.visibility = 'visible';
  } else {
    info.style.visibility = 'hidden';
  }
}
var current_style;
function showButtons(style) {
  if (style == current_style) {
    return;
  }
  current_style = style;
  copy_button.style.display = style;
  copy_info.style.display = 'none';
}


</script>