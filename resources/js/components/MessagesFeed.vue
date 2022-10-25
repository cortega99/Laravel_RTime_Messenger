<template>
    <div class="feed-container">
        <ul class="feed-messenger" ref="feed" v-if="contact">
            <li v-for="message in messages" :class="`message-${message.to === contact.id ? 'sent' : 'received'}`" :key="message.id">
                <div :class="`text-${message.to === contact.id ? 'sent' : 'received'}`">
                    {{ message.text }}
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        props: {
            contact: {
                type: Object
            },
            messages: {
                type: Array,
                required: true
            }
        },
        methods: {
            scrollToBottom() {
                setTimeout(() => {
                    this.$refs.feed.scrollTop = this.$refs.feed.scrollHeight;
                }, 50);
            }
        },
        watch: {
            contact: {
                handler(contact) {
                    this.scrollToBottom();
                },
                deep: true
            },
            messages: {
                handler(message) {
                    this.scrollToBottom();
                },
                deep: true
            }
        }
    }
</script>