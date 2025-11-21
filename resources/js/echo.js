// Persist messages across HMR reloads
window.messages = window.messages || [];

const alpineComponent = document.querySelector('[x-data]')?.__x?.$data;

window.Echo.channel('my-channel').listen('.my-event', (e) => {
    if (alpineComponent) {
        alpineComponent.messages.push(e.message);
    } else {
        // fallback for dev HMR reload
        window.messages.push(e.message);
        const div = document.getElementById('msg');
        if (div) {
            div.innerHTML = window.messages.map(m => `<p>${m}</p>`).join('');
        }
    }
});