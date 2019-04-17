<template>
  <b-row>
    <b-col>
      <div class="d-flex align-items-center justify-content-center" style="height: 2rem">
        <div class="mr-3">Prepago</div>
        <div>
          <vue-switches
                  v-model="payment"
                  theme="bootstrap"
                  color="primary"
                  type-bold
          ></vue-switches>
        </div>
        <div class="ml-3">Pospago</div>
      </div>
    </b-col>
  </b-row>
</template>
<script>
  import VueSwitches from 'vue-switches'
  export default {
    components: {VueSwitches},
    props: ['terminal'],
    data () {
      return {
        payment: false
      }
    }
  }
</script>
<style>
  label.vue-switcher {
    margin-bottom: 0;
  }
</style>