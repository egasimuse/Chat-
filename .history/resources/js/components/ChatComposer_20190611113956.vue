<template>
    <div class="chat-composer">
        <input type="text" placeholder="Start typing your message.." v-model="messageText">
        <button class="btn btn-primary" @click="sendMessage">Send</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            messageText: ''
        }
    },
    methods: {
        sendMessage() {
            console.log('message send')
        }
    }
}
</script>

<style>
.chat-composer {
    display: flex;
}
.chat-composer input{
    flex: 1 auto;
}
.chat-composer button{
    flex: 0;
}
</style>
