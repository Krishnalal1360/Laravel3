// Public channel
/*window.Echo.channel('my-channel').listen('my-event', (e) => {
    document.getElementById('message').innerHTML += `<p>${e.message}</p>`;
});*/

// Private channel
/*window.Echo.private('my-channel').listen('my-event', (e) => {
    document.getElementById('message').innerHTML += `<p>${e.message}</p>`;
});*/
//
var userId = document.querySelector('meta[name="user_id"]').getAttribute('content');
window.Echo.private('my-channel.' + userId).listen('NewMessage', (e) => {
    document.getElementById('message').innerHTML += `<p>${e.message}</p>`;
});

window.Echo.join('online')
           .here((users) => {
            console.log(users);
           })
           .joining((users) => {
            console.log(users);
           })
           .leaving((users) => {
            console.log(users);
           })
           .error((error) => {
            console.error(error);
           });