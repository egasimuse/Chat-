<template>
    <div class="chat-message mb-2">
        <p>{{ message.message }}</p>
        <small>{{ message.name }}</small>
    </div>
</template>

<script>
export default {
    props: ['message']
}
</script>

<style>
.chat-message {
    padding: 1rem;
}
.chat-message > p {
    margin-bottom: .5rem;
}
</style>


