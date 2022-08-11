<template>
    <div class="contacts-list"></div>
        <ul class="side-bar">
            <li v-for="(contact, index) in contacts" :key="contact.id" @click="selectContact(index, contact)" :class="`side-bar-${index === selected ? 'selected-true' : 'selected-false'}`">
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
        },
        data () {
            return {
                selected: 0
            };
        },
        methods: {
            selectContact(index, contact) {
                this.selected = index;

                this.$emit('selected', contact);
            }
        }
        
    }
</script>

<style lang="scss" scoped>
.contacts-list {
    flex: 2;
}
</style>