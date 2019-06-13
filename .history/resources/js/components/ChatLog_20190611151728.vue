<template>
    <div class="chat-log">
        <chat-message v-for="message in messages" :message="message"></chat-message>
    </div>
</template>

<script>
export default {
    props: ['messages']
}
</script>

<style>
.chat-log .chat-message:nth-child(even) {
    background-color: #ccc;
}
.empty {
    padding: 1rem;
    text-align: center;
}
</style>
