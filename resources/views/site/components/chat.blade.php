<div class="floating-chat">
  <span class="notification-number">2</span>
  <i class="fas fa-comment-dots"></i>
  <div class="chat">
    {{-- <div class="header">
      <span class="title">
        what's on your mind?
      </span>
      <button>
        <i class="fa fa-times" aria-hidden="true"></i>
      </button>

    </div> --}}
    {{-- <ul class="messages">
      <li class="other">asdasdasasdasdasasdasdasasdasdasasdasdasasdasdasasdasdas</li>
      <li class="other">Are we dogs??? 🐶</li>
      <li class="self">no... we're human</li>
      <li class="other">are you sure???</li>
      <li class="self">yes.... -___-</li>
      <li class="other">if we're not dogs.... we might be monkeys 🐵</li>
      <li class="self">i hate you</li>
      <li class="other">don't be so negative! here's a banana 🍌</li>
      <li class="self">......... -___-</li>
    </ul>
    <div class="footer">
      <div class="text-box" contenteditable="true" disabled="true"></div>
      <button id="sendMessage">send</button>
    </div> --}}

    <div class="page">
      <div class="marvel-device nexus5">
        <div class="top-bar"></div>
        <div class="sleep"></div>
        <div class="volume"></div>
        <div class="camera"></div>
        <div class="screen">
          <div class="screen-container">
            <div class="status-bar">
              <div class="time"></div>
              <div class="battery">
                <i class="zmdi zmdi-battery"></i>
              </div>
              <div class="network">
                <i class="zmdi zmdi-network"></i>
              </div>
              <div class="wifi">
                <i class="zmdi zmdi-wifi-alt-2"></i>
              </div>
              <div class="star">
                <i class="zmdi zmdi-star"></i>
              </div>
            </div>
            <div class="chat"> 
              <div class="chat-container">
                <div class="user-bar">
                  <div class="back">
                    <i class="zmdi zmdi-arrow-left"></i>
                  </div>
                  <div class="avatar">
                    <img src="\assets\img\logo\favicon.png" alt="Avatar">
                  </div>
                  <div class="name">
                    <span>New Project</span>
                    <span class="status">online</span>
                  </div> 
                  <div class="actions more">
                    <i class="zmdi zmdi-more-vert"></i>
                  </div>
                  <div class="actions attachment">
                    <i class="zmdi zmdi-attachment-alt"></i>
                  </div>
                  <div class="actions">
                    <i class="zmdi zmdi-phone"></i>
                  </div>
                </div>
                <div class="conversation">
                  <div class="conversation-container">
                    {{-- <div class="message sent">
                      What happened last night?
                      <span class="metadata">
                        <span class="time"></span><span class="tick"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="15" id="msg-dblcheck-ack" x="2063" y="2076">
                            <path
                              d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.88a.32.32 0 0 1-.484.032l-.358-.325a.32.32 0 0 0-.484.032l-.378.48a.418.418 0 0 0 .036.54l1.32 1.267a.32.32 0 0 0 .484-.034l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.88a.32.32 0 0 1-.484.032L1.892 7.77a.366.366 0 0 0-.516.005l-.423.433a.364.364 0 0 0 .006.514l3.255 3.185a.32.32 0 0 0 .484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z"
                              fill="#4fc3f7" />
                          </svg></span>
                      </span>
                    </div> --}}
                    <div class="message received">
                      Hello, nice to meet you!
                      <span class="metadata"><span class="time"></span></span>
                    </div>
                    <div class="message received">
                      Do you want to see my new project?
                      ask me with yes or not
                      <span class="metadata"><span class="time"></span></span>
                    </div>
                    <div class="message sent">
                      Yes.
                      <span class="metadata">
                        <span class="time"></span><span class="tick"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="15" id="msg-dblcheck-ack" x="2063" y="2076">
                            <path
                              d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.88a.32.32 0 0 1-.484.032l-.358-.325a.32.32 0 0 0-.484.032l-.378.48a.418.418 0 0 0 .036.54l1.32 1.267a.32.32 0 0 0 .484-.034l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.88a.32.32 0 0 1-.484.032L1.892 7.77a.366.366 0 0 0-.516.005l-.423.433a.364.364 0 0 0 .006.514l3.255 3.185a.32.32 0 0 0 .484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z"
                              fill="#4fc3f7" />
                          </svg></span>
                      </span>
                    </div>
                    <div class="message received" style="z-index: 999999">
                      <video  style="max-width: 100%;" controls>
                        <source src="\assets\img\portfolio\animations\ApresentaçãoNP.mp4" type="video/mp4">
                      </video>
                      <span class="metadata"><span class="time"></span></span>
                    </div>
                    <div class="message received">
                      <span id="random">You were hugging an old man with a beard screaming "DUMBLEDORE YOU'RE
                        ALIVE!"</span>
                      <span class="metadata"><span class="time"></span></span>
                    </div>
                  </div>
                  <form class="conversation-compose">
                    <div class="emoji">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" id="smiley" x="3147" y="3209">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M9.153 11.603c.795 0 1.44-.88 1.44-1.962s-.645-1.96-1.44-1.96c-.795 0-1.44.88-1.44 1.96s.645 1.965 1.44 1.965zM5.95 12.965c-.027-.307-.132 5.218 6.062 5.55 6.066-.25 6.066-5.55 6.066-5.55-6.078 1.416-12.13 0-12.13 0zm11.362 1.108s-.67 1.96-5.05 1.96c-3.506 0-5.39-1.165-5.608-1.96 0 0 5.912 1.055 10.658 0zM11.804 1.01C5.61 1.01.978 6.034.978 12.23s4.826 10.76 11.02 10.76S23.02 18.424 23.02 12.23c0-6.197-5.02-11.22-11.216-11.22zM12 21.355c-5.273 0-9.38-3.886-9.38-9.16 0-5.272 3.94-9.547 9.214-9.547a9.548 9.548 0 0 1 9.548 9.548c0 5.272-4.11 9.16-9.382 9.16zm3.108-9.75c.795 0 1.44-.88 1.44-1.963s-.645-1.96-1.44-1.96c-.795 0-1.44.878-1.44 1.96s.645 1.963 1.44 1.963z"
                          fill="#7d8489" />
                      </svg>
                    </div>
                    <input class="input-msg" name="input" placeholder="Type a message" autocomplete="false" type="text" spellcheck="true" /> 
                    <div class="photo" style="cursor: not-allowed;">
                      <i class="fas fa-camera"></i>
                    </div>
                    <button class="send">
                      <div class="circle">
                        <i class="fas fa-paper-plane"></i>
                      </div>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

{{-- tyemplate whatapp --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
<script> 

/* Time */

var deviceTime = document.querySelector('.status-bar .time');
var messageTime = document.querySelectorAll('.message .time');

deviceTime.innerHTML = moment().format('h:mm');

setInterval(function() {
	deviceTime.innerHTML = moment().format('h:mm');
}, 1000);

for (var i = 0; i < messageTime.length; i++) {
	messageTime[i].innerHTML = moment().format('h:mm A');
}

/* Message */

var form = document.querySelector('.conversation-compose');
var conversation = document.querySelector('.conversation-container');

form.addEventListener('submit', newMessage);

function newMessage(e) {
	var input = e.target.input;

	if (input.value) {
		var message = buildMessage(input.value);
		conversation.appendChild(message);
		animateMessage(message);
	}

	input.value = '';
	conversation.scrollTop = conversation.scrollHeight;

	e.preventDefault();
}

function buildMessage(text) {
	var element = document.createElement('div');

	element.classList.add('message', 'sent');

	element.innerHTML = text +
		'<span class="metadata">' +
			'<span class="time">' + moment().format('h:mm A') + '</span>' +
			'<span class="tick tick-animation">' +
				'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" id="msg-dblcheck" x="2047" y="2061"><path d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.88a.32.32 0 0 1-.484.032l-.358-.325a.32.32 0 0 0-.484.032l-.378.48a.418.418 0 0 0 .036.54l1.32 1.267a.32.32 0 0 0 .484-.034l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.88a.32.32 0 0 1-.484.032L1.892 7.77a.366.366 0 0 0-.516.005l-.423.433a.364.364 0 0 0 .006.514l3.255 3.185a.32.32 0 0 0 .484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z" fill="#92a58c"/></svg>' +
				'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" id="msg-dblcheck-ack" x="2063" y="2076"><path d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.88a.32.32 0 0 1-.484.032l-.358-.325a.32.32 0 0 0-.484.032l-.378.48a.418.418 0 0 0 .036.54l1.32 1.267a.32.32 0 0 0 .484-.034l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.88a.32.32 0 0 1-.484.032L1.892 7.77a.366.366 0 0 0-.516.005l-.423.433a.364.364 0 0 0 .006.514l3.255 3.185a.32.32 0 0 0 .484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z" fill="#4fc3f7"/></svg>' +
			'</span>' +
		'</span>';

	return element;
}

function animateMessage(message) {
	setTimeout(function() {
		var tick = message.querySelector('.tick');
		tick.classList.remove('tick-animation');
	}, 500);
}
</script>


{{-- =============== --}}
<script>
  var element = $('.floating-chat');
var myStorage = localStorage;

if (!myStorage.getItem('chatID')) {
    myStorage.setItem('chatID', createUUID());
}

setTimeout(function() {
    element.addClass('enter');
}, 1000);

element.click(openElement);
 
function openElement() {
    var messages = element.find('.messages');
    var textInput = element.find('.text-box');
    element.find('>i').hide();
    element.addClass('expand');
    element.find('.chat').addClass('enter');
    var strLength = textInput.val().length * 2;
    textInput.keydown(onMetaAndEnter).prop("disabled", false).focus();
    element.off('click', openElement);
    element.find('.header button').click(closeElement);
    element.find('#sendMessage').click(sendNewMessage);
    messages.scrollTop(messages.prop("scrollHeight"));
}

function closeElement() {
    element.find('.chat').removeClass('enter').hide();
    element.find('>i').show();
    element.removeClass('expand');
    element.find('.header button').off('click', closeElement);
    element.find('#sendMessage').off('click', sendNewMessage);
    element.find('.text-box').off('keydown', onMetaAndEnter).prop("disabled", true).blur();
    setTimeout(function() {
        element.find('.chat').removeClass('enter').show()
        element.click(openElement);
    }, 500);
}

function createUUID() {
    // http://www.ietf.org/rfc/rfc4122.txt
    var s = [];
    var hexDigits = "0123456789abcdef";
    for (var i = 0; i < 36; i++) {
        s[i] = hexDigits.substr(Math.floor(Math.random() * 0x10), 1);
    }
    s[14] = "4"; // bits 12-15 of the time_hi_and_version field to 0010
    s[19] = hexDigits.substr((s[19] & 0x3) | 0x8, 1); // bits 6-7 of the clock_seq_hi_and_reserved to 01
    s[8] = s[13] = s[18] = s[23] = "-";

    var uuid = s.join("");
    return uuid;
}

function sendNewMessage() {
    var userInput = $('.text-box');
    var newMessage = userInput.html().replace(/\<div\>|\<br.*?\>/ig, '\n').replace(/\<\/div\>/g, '').trim().replace(/\n/g, '<br>');

    if (!newMessage) return;

    var messagesContainer = $('.messages');

    messagesContainer.append([
        '<li class="self">',
        newMessage,
        '</li>'
    ].join(''));

    // clean out old message
    userInput.html('');
    // focus on input
    userInput.focus();

    messagesContainer.finish().animate({
        scrollTop: messagesContainer.prop("scrollHeight")
    }, 250);
}

function onMetaAndEnter(event) {
    if ((event.metaKey || event.ctrlKey) && event.keyCode == 13) {
        sendNewMessage();
    }
}
</script>