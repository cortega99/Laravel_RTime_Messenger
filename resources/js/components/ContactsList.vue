<template>
    <div class="contacts-list"></div>
        <ul>
            <li v-for="contact in contacts" :key="contact.id">
                <div class="avatar">
                    <img :src="contact.profile_image" :alt="contact.name">
                </div>
                <div class="contact">
                    <p class="name">{{ contact.name }}</p>
                    <p class="email">{{ contact.email }}</p>
                </div>
            </li>
        </ul>
</template>

<script>
    export default {
        props: {
            contacts: {
                type: Array,
                default: []
            }
        }
        
    }
</script>