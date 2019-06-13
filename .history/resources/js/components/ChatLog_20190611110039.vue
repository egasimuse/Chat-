<template>
    <div class="chat-log">
        <chat-message v-for="message in messages" :message="message"></chat-message>
    </div>
</template>

<script>
export default {
    data(){
        return {
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
