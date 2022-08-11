<template>
    <div class="conversation"></div>
    <h1 class="contact-name">{{ contact ? contact.name : 'Select a contact' }}</h1>
    <MessagesFeed :contact="contact" :messages="messages"/>
    <MessageComposer @send="sendMessage"/>
</template>

<script>
    import MessagesFeed from './MessagesFeed';
    import MessageComposer from './MessageComposer';
    
    export default {
        props: {
            contact: {
                type: Object,
                default: null
            },
            messages: {
                type: Array,
                default: []
            }
        },
        methods: {
            sendMessage(text) {
                console.log(text);
            }
        },
        components: {
            MessagesFeed,
            MessageComposer
        }
    }
</script>

