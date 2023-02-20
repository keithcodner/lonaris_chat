import './bootstrap';
import Alpine from 'alpinejs';

const form = $('#form');
const inputMassage = $('#input-message');

form.addEventListener('submit', function(event){
    const inputValue = inputMassage.val()

    axios.post('/chat-message', {
        message: inputValue
    });
})

const channel = Echo.channel('public.playground.1');

channel.subscribed( () => {
    console.log('subscribed');
}).listen('.playgroundzzz', (event) => {
    console.log(event);
});


window.Alpine = Alpine;

Alpine.start();
