<template>
    <div class="chat-composer">
        <input type="text" placeholder="Start typing your message..">
        <button class="btn btn-primary">Send</button>
    </div>
</template>

<script>
export default {

}
</script>

<style>
.chat-composer {
    display: flex;
    margin: 0;
}
.chat-composer input{
    flex: 1 auto;
}
.chat-composer button{
    flex: 0;
}
</style>
