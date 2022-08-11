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
        emits: ['new'],
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
                if (!this.contact) {
                    return;
                }

                axios.post('/conversation/send', {
                    contact_id: this.contact.id,
                    text: text
                }).then((response) => {
                    this.$emit('new', response.data);
                })
            }
        },
        components: {
            MessagesFeed,
            MessageComposer
        }
    }
</script>

