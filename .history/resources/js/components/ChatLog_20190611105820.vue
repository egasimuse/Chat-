<template>
    <div class="chat-log">
        <chat-message></chat-message>
        <chat-message></chat-message>
        <chat-message></chat-message>
    </div>
</template>

<script>
export default {
    data(){
        {
            messages: [
                {
                    message: "this is message text",
                    user: "Pesho slabakov"
                },
                {
                    message: "Nekvo nekvo asdsada",
                    user: "Pesho slabakov"
                }
            ]
        }
    }
}
</script>

<style>

</style>
