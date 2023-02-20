import './bootstrap';
import Alpine from 'alpinejs';

const form = document.getElementById('form');
const inputMassage = document.getElementById('input-message');

form.addEventListener('submit', function(event){
    event.preventDefault();
    const userInpute = inputMassage.val()

    axios.post('/chat-message', {
        message: userInpute
    })

    inputMassage.val = "";
});

const channel = Echo.channel('public.chat.1');

channel.subscribed( () => {
    console.log('subscribed');
}).listen('.chat-message', (event) => {
    console.log(event);
});


window.Alpine = Alpine;

Alpine.start();
