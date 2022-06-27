require('./bootstrap');

const app = new Vue({
    el: '#app',

    data: {
        messages: [],
        newMessage: '',
        user: '',
        typing: false
    },

    created() {
        let _this = this;

        Echo.private('chat')
            .listenForWhisper('typing', (e) => {
                this.user = e.user;
                this.typing = e.typing;

                // remove is typing indicator after 0.9s
                setTimeout(function() {
                    _this.typing = false
                }, 900);
            });
    },

    methods: {
        sendMessage() {
            // add new message to messages array
            this.messages.push({
                user: Laravel.user,
                message: this.newMessage
            });

            // clear input field
            this.newMessage = '';

            // persist to database
        },

        isTyping() {
            let channel = Echo.private('chat');

            setTimeout(function() {
                channel.whisper('typing', {
                    user: Laravel.user,
                    typing: true
                });
            }, 300);
        },
    }
});

