<template>
        <div class="input-group" style="width:70%">
            <div class="custom-file">
                <input type="file" class="custom-file-input" ref="file" name="img" @change="cambiar">
                <input type="text" class="custom-file-label btn-block" v-model="img">
            </div>
            <div class="input-group-append">
                <span class="input-group-text bl" >Cargar</span>
            </div>
        </div>

</template>

<script>
    export default {
        data:()=>({
            img: ''
        }),
        methods:{
            cambiar:function () {
                this.img = this.$refs.file.files[0].name;
            },

        },
        created() {
        }
    }
</script>

<style scoped>

</style>