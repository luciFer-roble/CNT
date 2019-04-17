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
                    >
            <g>
              <path :style="{fill: color}" d="M27.7,51.4c0,1.1-0.9,2.1-2.1,2.1c-1.1,0-2.1-0.9-2.1-2.1c0-1.1,0.9-2.1,2.1-2.1
                C26.8,49.3,27.7,50.2,27.7,51.4z"/>
              <g>
                <path style="fill:none;" d="M12.1,54.4c0,0.7,0.6,1.4,1.4,1.4h24.2c0.7,0,1.4-0.6,1.4-1.4v-7.2h-27V54.4z"/>
                <path :style="{fill: color}" d="M39.1,43.9h-27V12.2h18.3c1.1-1.3,2.4-2.4,3.9-3.2H12.1V5.6c0-0.7,0.6-1.4,1.4-1.4h24.2
                  c0.7,0,1.4,0.6,1.4,1.4v1.8c0.6-0.1,1.1-0.1,1.7-0.1c0.5,0,1,0,1.5,0.1V5.6c0-2.5-2.1-4.6-4.6-4.6H13.5C11,1,8.9,3.1,8.9,5.6v48.8
                  c0,2.5,2.1,4.6,4.6,4.6h24.2c2.5,0,4.6-2.1,4.6-4.6V36.3l-3.2,2.3V43.9z M39.1,54.4c0,0.7-0.6,1.4-1.4,1.4H13.5
                  c-0.7,0-1.4-0.6-1.4-1.4v-7.2h27V54.4z"/>
              </g>
              <path :style="{fill: color}" d="M42.8,10.7c-0.6-0.1-1.3-0.2-2-0.2c-5.7,0-10.3,4.6-10.3,10.3c0,3.8,2.1,7.1,5.1,8.9
                c0,0,0.1,0,0.1,0.1c0.6,0.4,1,1,1,1.8c0,0.2,0,0.4-0.1,0.6c0,0,0,0,0,0L35.6,36l0,0c0,0,0,0.1,0,0.1c0,0.3,0.2,0.5,0.5,0.5
                c0.1,0,0.2,0,0.3-0.1l0,0l10.1-7.2c2.8-1.8,4.6-5,4.6-8.5C51.1,15.8,47.5,11.7,42.8,10.7z"/>
            </g>
          </svg>
        </div>
        <div class="service-plus-title text-center" :style="{color: color}">
          telefonía móvil
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
        <vue-select
          v-model="selectedPlan"
          :options="plans"
          placeholder="Selecciona tu plan"
          @change="value => $emit('change', value.price)"
        >
          <template slot="option" slot-scope="option">
            <b-row class="mobile-plan-name">
              <b-col class="py-1 px-0" :style="{backgroundColor: color}">
                <h4 class="mb-0 ml-1">{{option.label}}</h4>
              </b-col>
            </b-row>
            <b-row class="mobile-plan-details py-1" :style="{color: color}">
              <b-col class="mobile-plan-benefits">
                <div v-html="option.benefits"></div>
              </b-col>
            </b-row>
          </template>
        </vue-select>
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
  import VueSelect from 'vue-select'

  export default {
    components: { VueSelect },
    props: ['color'],
    data () {
      return {
        selectedPlan: null,
        plans: [
          {
            label: 'Plan Móvil Gigas - 14,55$',
            price: 14.55,
            benefits: `
              <ul>
                <li>1.2 GB</li>
                <li>Whatsapp, Facebook, Instagram Libres</li>
                <li>25 minutos a todas operadoas</li>
              </ul>
            `
          },
          {
            label: 'Plan Móvil Gigas - 22,39$',
            price: 22.39,
            benefits: `
              <ul>
                <li>2.5 Gigas</li>
                <li>Whatsapp, Instagram Libres</li>
                <li>Facebook 500 Megas</li>
                <li>Deezer 6 meses</li>
                <li>70 minutos a todas operadoas</li>
              </ul>
            `
          },
          {
            label: 'Plan Móvil Gigas - 35,83$',
            price: 35.83,
            benefits: `
              <ul>
                <li>4 GB</li>
                <li>Whatsapp, Facebook, Twitter, Instagram Libres</li>
                <li>Deezer 6 meses</li>
                <li>120 minutos a todas operadoas</li>
              </ul>
            `
          },
        ]
      }
    },
    computed: {
      calculatedPrice () {
        return this.selectedPlan ? this.selectedPlan.price : 0
      }
    }
  }
</script>
<style>
  .table-checkbox label {
    width: 100% !important;
  }
  .mobile-plan-name {
    color: white;
  }

  .mobile-plan-price {
    font-size: 2.5rem;
  }

  .v-select .dropdown-menu > .highlight > a {
    /*
     * required to override bootstrap 3's
     * .dropdown-menu > li > a:hover {} styles
     */
    background: #bfd5f6;
    color: #fff;
  }
</style>