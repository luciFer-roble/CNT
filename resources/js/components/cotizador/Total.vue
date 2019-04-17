<template>
  <b-container class="px-0 total-row">
    <b-row no-gutters>
      <b-col :style="{backgroundColor: color}" class="text-white text-center py-3 px-1">
        <div><strong>Precio normal:</strong></div>
        <div>{{totalPrice.toFixed(2)}}</div>
      </b-col>
      <b-col :style="{backgroundColor: color}" class="text-white text-center py-3 px-1">
        <div><strong>Tu descuento +:</strong></div>
        <div>{{ discount.percent }}%</div>
        <div><small>{{ discount.value.toFixed(2) }}$</small></div>
      </b-col>
      <b-col class="text-center py-3 px-1" style="background-color: white" :style="{color: color}">
        <div><strong>Tu precio +:</strong></div>
        <div>{{finalPrice.toFixed(2)}}</div>
      </b-col>
    </b-row>
  </b-container>
</template>
<script>
  export default {
    props: ['color', 'totalPrice', 'selected'],
    data () {
      return {

      }
    },
    computed: {
      discount () {
        let discount = 0
        switch (this.selected) {
          case 1:
            discount = 0
            break
          case 2:
            discount = 10
            break
          case 3:
            discount = 15
            break
          case 4:
            discount = 20
            break
          default:
            break
        }
        return {
          percent: discount,
          value: discount > 0 ? this.totalPrice * (discount / 100) : 0
        }
      },
      finalPrice () {
        return this.totalPrice - (this.totalPrice * (this.discount.percent / 100))
      }
    }
  }
</script>
<style>
  .total-row {
    font-size: 1.15rem;
  }
</style>