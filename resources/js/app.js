import './bootstrap';
import Alpine from 'alpinejs';

const form = document.getElementById('form');
const inputMessage = document.getElementById('input-message');

form.addEventListener('submit', function(event){
    event.preventDefault();
    const userInput = inputMessage.value;

    axios.post('/chat-message', {
        message: userInput
    })

    inputMessage.value = "";
});

function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) {
        return parts.pop().split(';').shift();
    }
}

function request(url, options) {
    // get cookie
    const csrfToken = getCookie('XSRF-TOKEN');
    return fetch(url, {
        headers: {
            'content-type': 'application/json',
            'accept': 'application/json',
            'X-XSRF-TOKEN': decodeURIComponent(csrfToken),
        },
        credentials: 'include',
        ...options,
    })
}

function logout() {
    return request('/logout', {
        method: 'POST'
    });
}

function login() {
    return request('/login', {
        method: "POST",
        body: JSON.stringify({
            email: 'ttt@tttt.tttt',
            'password': '1Megaman'
        })
    });
    

}

function run(){
    return fetch('/sanctum/csrf-cookie', {
        headers: {
            'content-type': 'application/json',
            'accept': 'application/json'
        },
        credentials: 'include'
    }).then(() => logout())
    .then(() => {
        return login();
    }).then(() => {
        const channel = Echo.private('private.chat.1');
    
        channel.subscribed( () => {
            console.log('subscribed');
        }).listen('.chat-message', (event) => {
            console.log(event);
    
            const message = event.message;
    
            $('<li class="sent"><img src="http://emilcarlsson.se/assets/mikeross.png" alt="" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
        });
    });
}
run();




window.Alpine = Alpine;

Alpine.start();
