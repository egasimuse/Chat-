<template>
    <div class="chat-log">
        <chat-message v-for="message in messages" v-bind:message="message"></chat-message>
    </div>
</template>

<script>
export default {
    data(){
        return {
            messages: [
                {
                    id: '1',
                    message: "this is message text",
                    user: "Pesho slabakov"
                },
                {
                    id: '2',
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
