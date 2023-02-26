<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html class=''>

<head>
    <meta charset='UTF-8'>
    <meta name="robots" content="noindex">
    <link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
    <link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>
    <link rel='stylesheet prefetch' href='https://applesvg.com/assets/front/css/lonaris_chat_styles.css'>
    

    <style>
        .modal {
          transition: opacity 0.25s ease;
        }
        body.modal-active {
          overflow-x: hidden;
          overflow-y: visible !important;
        }
    </style>
    <script>
        try {
          Typekit.load({
            async: true
          });
        } catch (e) {}
    </script>
</head>

<body>
    <div id="frame">
        <div id="sidepanel">
            <div id="profile">
                <div class="wrap">
                    <img id="profile-img" src="{{  auth()->user()->avatar}}" class="online" alt="" />
                    <p> {{  auth()->user()->name}} </p>
                    <i class="fa fa-chevron-down expand-button" aria-hidden="true"></i>
                    <div id="status-options">
                        <ul>
                            <li id="status-online" class="active">
                                <span class="status-circle"></span>
                                <p>Online</p>
                            </li>
                            <li id="status-away">
                                <span class="status-circle"></span>
                                <p>Away</p>
                            </li>
                            <li id="status-busy">
                                <span class="status-circle"></span>
                                <p>Busy</p>
                            </li>
                            <li id="status-offline">
                                <span class="status-circle"></span>
                                <p>Offline</p>
                            </li>
                        </ul>
                    </div>
                    <div id="expanded">
                        <label for="twitter">
                <i class="fa fa-facebook fa-fw" aria-hidden="true"></i>
              </label>
                        <input name="twitter" type="text" value="{{ auth()->user()->name}}" />
                        <label for="twitter">
                <i class="fa fa-twitter fa-fw" aria-hidden="true"></i>
              </label>
                        <input name="twitter" type="text" value="{{ auth()->user()->email}}" />
                        <label for="twitter">
                <i class="fa fa-instagram fa-fw" aria-hidden="true"></i>
              </label>
                        <input name="twitter" type="text" value="{{  auth()->user()->status}}" />
                    </div>
                </div>
            </div>
            <div id="search">
                <label for="">
            <i class="fa fa-search" aria-hidden="true"></i>
          </label>
                <input type="text" placeholder="Search contacts..." />
            </div>
            <div id="contacts">

                <ul>
                    @foreach ($your_convo_collection as $convo)
                        <li id="{{$convo->end_user_id}}" 
                            class="contact convo"
                            data1="{{$convo->end_user_id}}"
                            data2="{{$convo->end_user_avatar}}"
                            data3="{{$convo->end_user_name}}"
                            data4="{{$convo->last_message}}"
                            data5="{{$convo->convo_id}}"
                            data6="false"  {{-- if side panel convo has been checked --}}
                            >

                            
                            <div class="wrap">
                                <span class="contact-status busy"></span>
                                <img src="{{$convo->end_user_avatar}}" alt="" />
                                <div class="meta">
                                    <p class="name">{{$convo->end_user_name}}</p>
                                    <p class="preview">{{$convo->last_message}}</p>
                                </div>
                            </div>
                        </li>
                        
                    @endforeach
                </ul>
            </div>
            <div id="bottom-bar">
                <button id="addcontact" class="modal-open bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full" >
            <i class="fa fa-user-plus fa-fw" aria-hidden="true"></i>
            <span>Add contact</span>
          </button>
                <button id="settings">
            <i class="fa fa-cog fa-fw" aria-hidden="true"></i>
            <span>Settings</span>
          </button>
            </div>
        </div>
        <div class="content">
            <div class="contact-profile">
                <img id="other_person_avatar" src="https://applesvg.com/assets/images/chatbot.png" alt="" />
                <p id="recipient_name">Lonaris Chat Bot</p>
                <div class="social-media">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </div>
            </div>
            <div class="messages">
                <ul id="message_list">


                    <li class="sent">
                        <img src="https://applesvg.com/assets/images/chatbot.png" alt="" />
                        <p>Welcome to Lonaris Chat, pick one of your friends to talk to!</p>
                    </li>

                    {{-- <li class="replies">
                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                        <p>Excuses don't win championships.</p>
                    </li> --}}
                </ul>
            </div>
            <div class="message-input">
                <form id="form">
                    <div class="wrap">
                        <input id="input-message" type="text" placeholder="Write your message..." />
                        <i class="fa fa-paperclip attachment" aria-hidden="true"></i>

                    </div>
                </form>
            </div>
        </div>

        <div id="hidden_chat" style="display:none;"></div>

    </div>
  
    <!--Modal-->
    <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

        <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

            <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
          </svg>
                <span class="text-sm">(Esc)</span>
            </div>

            <!-- Add margin if you want to see some of the overlay behind the modal-->
            <div class="modal-content py-4 text-left px-6">
                <!--Title-->
                <div class="flex justify-between items-center pb-3">
                    <p class="text-2xl font-bold">Message a New User</p>
                    <div class="modal-close cursor-pointer z-50">
                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
              </svg>
                    </div>
                </div>

                <!--Body-->
                <p>Pick a user to message: </p>
                <br /><br />
                <select id="user_picker" class="form-select p-2 m-4"  >
                    <option value="0" selected>- Select User -</option>
                    @foreach ($all_users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
                <br /><br />
                <!--Footer-->
                <div class="flex justify-end pt-2">
                    <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>
                    <button id="start_convo" class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2 border-solid border-2">Message</button>
                    
                </div>

            </div>
        </div>
    </div>
    <div>

    </div>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script>
        $(function(){

            //Global vars
            let current_convo = "";
            let current_name = "";
            let current_avatar = "";
            let current_private_ch = "";
            let current_end_user_id = "";

            //--when you click conversation---
            $('.convo').click(function(){

                let already_picked = $(this).attr('data6');
                current_convo = $(this).attr('data5');
                current_name = $(this).attr('data3');
                current_avatar = $(this).attr('data2');
                current_end_user_id = $(this).attr('data1');

                //Get chat history if there is one
                loadChatFromLS(current_convo);

                $('.convo').removeClass("active");
                $(this).addClass('active');

                $('#other_person_avatar').attr("src", current_avatar);
                $('#message_list').empty();
                $('#recipient_name').text(current_name);

                current_private_ch = 'private.chat.'+current_convo;
                
                if(already_picked == "false"){
                    $(this).attr("data6", "true");
                    subscribe_to_convo_ch(current_convo, current_name, current_avatar, current_private_ch);
                }

            });

            //-------Default Subscribe--------
            const form = document.getElementById('form');
            const inputMessage = document.getElementById('input-message');

            form.addEventListener('submit', function(event){
                event.preventDefault();
                const userInput = inputMessage.value;

                axios.post('/chat-message', {
                    message: userInput,
                    convo: current_convo,
                    sender: '{{auth()->user()->id}}',
                    receiver: current_end_user_id 
                })

                updateChatLS(current_convo);

                inputMessage.value = "";
            });

            function subscribe_to_convo_ch(id, name, avatar, prv_channel){
                
                const channel = window.Echo.private(prv_channel);
                console.log(prv_channel);
            
                channel.subscribed( () => {
                    console.log('subscribed to '+name+' chat. With channel: ' +id);
                }).listen('.chat-message', (event) => {
                    console.log(event);
            
                    const message = event.message;

                    if(event.sender ==  '{{auth()->user()->id}}'){
                        $('<li class="sent"><img src="'+current_avatar+'" alt="" ><p>' + message + '</p></li>').appendTo($('.messages ul'));
                    }else{
                        $('<li class="replies"><img src="{{auth()->user()->avatar}}" alt="" ><p>' + message + '</p></li>').appendTo($('.messages ul'));
                    }
                });
               
            }

            function updateChatLS(chatID){

                //if statement is so not to create a ls with blank content
                if (localStorage.getItem(chatID) === null) {
                    localStorage.setItem(chatID, '');
                }

                localStorage.setItem(chatID, '');

                //var retrievedObject = localStorage.getItem(chatID);
                var appendedData = $('#message_list').html();
                localStorage.setItem(chatID, appendedData);
            }

            function loadChatFromLS(chatID){
                //if statement is so not to create a ls with blank content
                if (localStorage.getItem(chatID) === null) {
                    localStorage.setItem(chatID, '');
                }

                var retrievedObject = localStorage.getItem(chatID);
                $('#message_list').empty();
                $('#message_list').append(retrievedObject); 
              

            }

            function loadChatFromDB(chatID, chatData){

            }



            function run(){
                return fetch('/sanctum/csrf-cookie', {
                    headers: {
                        'content-type': 'application/json',
                        'accept': 'application/json'
                    },
                    credentials: 'include'
                })
                // .then(() => logout())
                // .then(() => {
                //     return login();
                // })
                .then(() => {
                    const channel = Echo.private('private.chat.0000');
                
                    channel.subscribed( () => {
                        console.log('subscribed to private chat with chat bot');
                    }).listen('.chat-message', (event) => {
                        console.log(event);
                
                        const message = event.message;
                
                        $('<li class="sent"><img src="http://emilcarlsson.se/assets/mikeross.png" alt="" ><p>' + message + '</p></li>').appendTo($('.messages ul'));
                    });
                });
            }

            //Run app
            //run();


            //-----------Jquery Extended Function-------------
            jQuery.extend({
                getValues: function(data, url) {
                    var result = null;
                    $.ajax({
                        url: url,
                        type: 'post',
                        async: true,
                        data: data,
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        async: false,
                        success: function(datas) {
                            result = datas;
                        }
                    });
                    return result;
                }
            });

            //----------Stuff to make things work-------------
            $('#start_convo').click(function(){

                let user_picker_val = $('#user_picker').val();
                if(user_picker_val == 0){
                    alert('Please select a valid user.');
                }else{
                    let create_convo = $.getValues({value1: user_picker_val}, '{{route("create-convo")}}');

                    alert(create_convo);

                }
            });


        });
        
    </script>

    <script>
      //-----------------------STUFF I DIDN'T PROGRAM-------------------------------    

      var openmodal = document.querySelectorAll('.modal-open')

      for (var i = 0; i < openmodal.length; i++) {
          openmodal[i].addEventListener('click', function(event) {
              event.preventDefault()
              toggleModal()
          })
      }

      const overlay = document.querySelector('.modal-overlay')
      overlay.addEventListener('click', toggleModal)

      var closemodal = document.querySelectorAll('.modal-close')
      for (var i = 0; i < closemodal.length; i++) {
          closemodal[i].addEventListener('click', toggleModal)
      }

      document.onkeydown = function(evt) {
          evt = evt || window.event
          var isEscape = false
          if ("key" in evt) {
              isEscape = (evt.key === "Escape" || evt.key === "Esc")
          } else {
              isEscape = (evt.keyCode === 27)
          }
          if (isEscape && document.body.classList.contains('modal-active')) {
              toggleModal()
          }
      };


      function toggleModal() {
          const body = document.querySelector('body')
          const modal = document.querySelector('.modal')
          modal.classList.toggle('opacity-0')
          modal.classList.toggle('pointer-events-none')
          body.classList.toggle('modal-active')
      }
      //--------------------------------------------

      $(".messages").animate({
          scrollTop: $(document).height()
      }, "fast");
      $("#profile-img").click(function() {
          $("#status-options").toggleClass("active");
      });
      $(".expand-button").click(function() {
          $("#profile").toggleClass("expanded");
          $("#contacts").toggleClass("expanded");
      });
      $("#status-options ul li").click(function() {
          $("#profile-img").removeClass();
          $("#status-online").removeClass("active");
          $("#status-away").removeClass("active");
          $("#status-busy").removeClass("active");
          $("#status-offline").removeClass("active");
          $(this).addClass("active");
          if ($("#status-online").hasClass("active")) {
              $("#profile-img").addClass("online");
          } else if ($("#status-away").hasClass("active")) {
              $("#profile-img").addClass("away");
          } else if ($("#status-busy").hasClass("active")) {
              $("#profile-img").addClass("busy");
          } else if ($("#status-offline").hasClass("active")) {
              $("#profile-img").addClass("offline");
          } else {
              $("#profile-img").removeClass();
          };
          $("#status-options").removeClass("active");
      });

      function newMessage() {
          message = $(".message-input input").val();
          if ($.trim(message) == '') {
              return false;
          }
          $('<li class = "sent" > < img src = "http://emilcarlsson.se/assets/mikeross.png" alt = "" /> <p> ' + message + '</p> </li>').appendTo($('.messages ul'));
          $('.message-input input').val(null);
          $('.contact.active .preview').html(' < span > You: < /span>' + message);
          $(".messages").animate({
              scrollTop: $(document).height()
          }, "fast");
      };
    </script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>