<template>
  <b-container style="background-color: white;" :style="{color: color}" class="pb-2 border-bottom">
    <b-row class="pt-4 px-2">
      <b-col>
        <div class="d-flex justify-content-center">
          <svg version="1.1"
                         xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink"
                         x="0px" y="0px"
                         xml:space="preserve"
                         viewBox="0 0 60 60"
                         class="service-plus-svg"
                         :style="{fill: color}"
                    >
            <g>
              <g>
                <rect x="1.3" y="54.4" class="st0" width="57.1" height="3.2"/>
              </g>
              <g>
                <path class="st0" d="M52.1,10.3h-1.4c0.1,0.5,0.1,1,0.1,1.5c0,0.6,0,1.2-0.1,1.7h1.5c1.8,0,3.2,1.4,3.2,3.2v27.6
                  c0,1.8-1.4,3.2-3.2,3.2H7.7c-1.8,0-3.2-1.4-3.2-3.2V16.6c0-1.8,1.4-3.2,3.2-3.2h16.6c-0.1-0.6-0.1-1.1-0.1-1.7c0-0.5,0-1,0.1-1.5
                  H7.7c-3.5,0-6.4,2.9-6.4,6.4v27.6c0,3.5,2.9,6.4,6.4,6.4h44.4c3.5,0,6.4-2.9,6.4-6.4V16.6C58.5,13.1,55.6,10.3,52.1,10.3z"/>
              </g>
              <path class="st1" d="M39.4,1.8c-0.6-0.1-1.3-0.2-2-0.2c-5.6,0-10.1,4.5-10.1,10.1c0,3.7,2,7,5.1,8.8c0,0,0.1,0,0.1,0.1
                c0.6,0.4,1,1,1,1.7c0,0.2,0,0.4-0.1,0.6c0,0,0,0,0,0l-1.1,3.8l0,0c0,0,0,0.1,0,0.1c0,0.3,0.2,0.5,0.5,0.5c0.1,0,0.2,0,0.3-0.1l0,0
                l10-7.1c2.7-1.8,4.5-4.9,4.5-8.4C47.6,6.8,44.1,2.7,39.4,1.8z"/>
            </g>
          </svg>
        </div>
        <div class="service-plus-title text-center" :style="{color: color}">
          televisión
        </div>
      </b-col>
    </b-row>
    <b-row class="mb-3">
      <b-col>
        <div class="text-center"><h4>Precio: <strong>{{calculatedPrice.toFixed(2)}}$*</strong></h4> </div>
      </b-col>
    </b-row>
    <b-row>
      <b-col>
        <b-form-checkbox-group
                v-model="selected"
                stacked
                @change="value => $emit('change', value)"
        >
          <template>
            <b-form-checkbox v-for="(plan, index) in plans" :value="plan" class="table-checkbox" :key="index">
              <b-row>
                <b-col cols="9">{{plan.name}}</b-col>
                <b-col cols="3" class="text-right"><strong>{{plan.price.toFixed(2)}}$*</strong></b-col>
              </b-row>
            </b-form-checkbox>
          </template>
        </b-form-checkbox-group>
      </b-col>
    </b-row>
    <b-row class="mt-2">
      <b-col>
        <small class="float-right">* precio con impuestos del servicio</small>
      </b-col>
    </b-row>
  </b-container>
</template>
<script>
  export default {
    props: ['color'],
    data () {
      return {
        selected: [],
        plans: [
          {
            name: 'Paquete HD',
            price: 36.20
          },
          {
            name: 'Paquete Fox Premium',
            price: 12.70
          },
          {
            name: 'Paquete HBO Premium',
            price: 12.70
          },
        ]
      }
    },
    computed: {
      calculatedPrice () {
        let price = 0
        this.selected.forEach(plan => {
          price += plan.price
        })
        return price
      }
    }
  }
</script>
<style>
  .table-checkbox label {
    width: 100% !important;
  }
</style>