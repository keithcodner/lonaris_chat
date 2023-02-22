<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">



<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html class=''>

<head>
   
    <meta charset='UTF-8'>
    <meta name="robots" content="noindex">
    <link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
    <link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
   

    

    <script>
        try{Typekit.load({ async: true });}catch(e){}
    </script>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>
    <link rel='stylesheet prefetch' href='https://applesvg.com/assets/front/css/lonaris_chat_styles.css'>

</head>

<body>

    <div id="frame">
        <div id="sidepanel">
            <div id="profile">
                <div class="wrap">
                    <img id="profile-img" src="http://emilcarlsson.se/assets/mikeross.png" class="online" alt="" />
                    <p>Mike Ross</p>
                    <i class="fa fa-chevron-down expand-button" aria-hidden="true"></i>
                    <div id="status-options">
                        <ul>
                            <li id="status-online" class="active"><span class="status-circle"></span>
                                <p>Online</p>
                            </li>
                            <li id="status-away"><span class="status-circle"></span>
                                <p>Away</p>
                            </li>
                            <li id="status-busy"><span class="status-circle"></span>
                                <p>Busy</p>
                            </li>
                            <li id="status-offline"><span class="status-circle"></span>
                                <p>Offline</p>
                            </li>
                        </ul>
                    </div>
                    <div id="expanded">
                        <label for="twitter"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></label>
                        <input name="twitter" type="text" value="mikeross" />
                        <label for="twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></label>
                        <input name="twitter" type="text" value="ross81" />
                        <label for="twitter"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i></label>
                        <input name="twitter" type="text" value="mike.ross" />
                    </div>
                </div>
            </div>
            <div id="search">
                <label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
                <input type="text" placeholder="Search contacts..." />
            </div>
            <div id="contacts">
                <ul>

                    <li class="contact active">
                        <div class="wrap">
                            <span class="contact-status busy"></span>
                            <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                            <div class="meta">
                                <p class="name">Harvey Specter</p>
                                <p class="preview">Wrong. You take the gun, or you pull out a bigger one. Or, you call their bluff. Or, you do any one of a hundred and forty six other things.</p>
                            </div>
                        </div>
                    </li>
{{--                     
                    <li class="contact">
                        <div class="wrap">
                            <span class="contact-status online"></span>
                            <img src="http://emilcarlsson.se/assets/louislitt.png" alt="" />
                            <div class="meta">
                                <p class="name">Louis Litt</p>
                                <p class="preview">You just got LITT up, Mike.</p>
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="wrap">
                            <span class="contact-status away"></span>
                            <img src="http://emilcarlsson.se/assets/rachelzane.png" alt="" />
                            <div class="meta">
                                <p class="name">Rachel Zane</p>
                                <p class="preview">I was thinking that we could have chicken tonight, sounds good?</p>
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="wrap">
                            <span class="contact-status online"></span>
                            <img src="http://emilcarlsson.se/assets/donnapaulsen.png" alt="" />
                            <div class="meta">
                                <p class="name">Donna Paulsen</p>
                                <p class="preview">Mike, I know everything! I'm Donna..</p>
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="wrap">
                            <span class="contact-status busy"></span>
                            <img src="http://emilcarlsson.se/assets/jessicapearson.png" alt="" />
                            <div class="meta">
                                <p class="name">Jessica Pearson</p>
                                <p class="preview">Have you finished the draft on the Hinsenburg deal?</p>
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="wrap">
                            <span class="contact-status"></span>
                            <img src="http://emilcarlsson.se/assets/haroldgunderson.png" alt="" />
                            <div class="meta">
                                <p class="name">Harold Gunderson</p>
                                <p class="preview">Thanks Mike! :)</p>
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="wrap">
                            <span class="contact-status"></span>
                            <img src="http://emilcarlsson.se/assets/danielhardman.png" alt="" />
                            <div class="meta">
                                <p class="name">Daniel Hardman</p>
                                <p class="preview">We'll meet again, Mike. Tell Jessica I said 'Hi'.</p>
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="wrap">
                            <span class="contact-status busy"></span>
                            <img src="http://emilcarlsson.se/assets/katrinabennett.png" alt="" />
                            <div class="meta">
                                <p class="name">Katrina Bennett</p>
                                <p class="preview">I've sent you the files for the Garrett trial.</p>
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="wrap">
                            <span class="contact-status"></span>
                            <img src="http://emilcarlsson.se/assets/charlesforstman.png" alt="" />
                            <div class="meta">
                                <p class="name">Charles Forstman</p>
                                <p class="preview">Mike, this isn't over.</p>
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="wrap">
                            <span class="contact-status"></span>
                            <img src="http://emilcarlsson.se/assets/jonathansidwell.png" alt="" />
                            <div class="meta">
                                <p class="name">Jonathan Sidwell</p>
                                <p class="preview"><span>You:</span> That's bullshit. This deal is solid.</p>
                            </div>
                        </div>
                    </li> 
                    
                    --}}
                </ul>
            </div>
            <div id="bottom-bar">
                <button id="addcontact"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> <span>Add contact</span></button>
                <button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>Settings</span></button>
            </div>
        </div>
        <div class="content">
            <div class="contact-profile">
                <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                <p>Harvey Specter</p>
                <div class="social-media">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </div>
            </div>
            <div class="messages">
                <ul>
                    <li class="sent">
                        <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                        <p>How the hell am I supposed to get a jury to believe you when I am not even sure that I do?!</p>
                    </li>
{{--                     
                    <li class="replies">
                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                        <p>When you're backed against the wall, break the god damn thing down.</p>
                    </li>
                    <li class="replies">
                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                        <p>Excuses don't win championships.</p>
                    </li>
                    <li class="sent">
                        <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                        <p>Oh yeah, did Michael Jordan tell you that?</p>
                    </li>
                    <li class="replies">
                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                        <p>No, I told him that.</p>
                    </li>
                    <li class="replies">
                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                        <p>What are your choices when someone puts a gun to your head?</p>
                    </li>
                    <li class="sent">
                        <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                        <p>What are you talking about? You do what they say or they shoot you.</p>
                    </li>
                    <li class="replies">
                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                        <p>Wrong. You take the gun, or you pull out a bigger one. Or, you call their bluff. Or, you do any one of a hundred and forty six other things.</p>
                    </li> --}}
                </ul>
            </div>
            <div class="message-input">
                <form id="form"> 
                    <div class="wrap">
                        <input id="input-message" type="text" placeholder="Write your message..." />
                        <i class="fa fa-paperclip attachment" aria-hidden="true"></i>
                        {{-- <button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button> --}}
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script>
        $(".messages").animate({ scrollTop: $(document).height() }, "fast");
        
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
        	
        	if($("#status-online").hasClass("active")) {
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
        	if($.trim(message) == '') {
        		return false; 
        	}
        	$('<li class="sent"><img src="http://emilcarlsson.se/assets/mikeross.png" alt="" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
        	$('.message-input input').val(null);
        	$('.contact.active .preview').html('<span>You: </span>' + message);
        	$(".messages").animate({ scrollTop: $(document).height() }, "fast");
        };
        
        // $('.submit').click(function(e) {
        //     e.preventDefault();
        //   newMessage();
        // });
        
        // $(window).on('keydown', function(e) {
            
        //   if (e.which == 13) {
        //     e.preventDefault();
        //     newMessage();
        //     return false;
        //   }
        // });
        //# sourceURL=pen.js
    </script>
      <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>