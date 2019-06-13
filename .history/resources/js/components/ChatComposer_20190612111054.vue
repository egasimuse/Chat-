<template>
    <div class="chat-composer">
        <input type="text" placeholder="Start typing your message.." v-model="messageText" @keyup.enter="sendMessage">
        <button class="btn btn-primary" @click="sendMessage">Send</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            messageText: '',
            name: ''
        }
    },
    methods: {
        async sendMessage() {
            await axios.get('/send').then(response => {
                this.name = response.data;
            });
            this.$emit('messagesent', {
                message: this.messageText,
                name: this.user
            });
            this.messageText = '';
        }
    }
}
</script>

<style>
.chat-composer {
    display: flex;
}
.chat-composer input {
    flex: 1 auto;
    padding: .5rem 1rem;
}
.chat-composer button {
    border-radius: 0;
}
</style>
