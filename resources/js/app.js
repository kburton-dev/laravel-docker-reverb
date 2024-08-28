import './bootstrap';

const privateChanelId = 69;
const privateOutput = document.getElementById('ws-private-output');
window.Echo.private(`private.channel.${privateChanelId}`)
    .listen('PrivateExampleEvent', (e) => {
        privateOutput.innerHTML += `<br> ${e.foo}`
    });

const publicOutput = document.getElementById('ws-public-output');
window.Echo.channel(`public.channel`)
    .listen('PublicExampleEvent', (e) => {
        publicOutput.innerHTML += `<br> ${e.foo}`
    });

