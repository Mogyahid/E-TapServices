import "alpinejs";

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

import Echo from "laravel-echo";

window.Pusher = require("pusher-js");

window.Echo = new Echo({
    broadcaster: "pusher",
    key: "df3a6044d6a8c874f2ab",
    cluster: "ap1",
    forceTLS: true,
    authEndpoint: "/broadcasting/auth"
});
