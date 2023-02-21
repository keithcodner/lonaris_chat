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

const channel = Echo.channel('public.chat.1');

channel.subscribed( () => {
    console.log('subscribed');
}).listen('.chat-message', (event) => {
    console.log(event);
});


window.Alpine = Alpine;

Alpine.start();
