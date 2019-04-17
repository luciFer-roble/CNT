<template>
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
</template>
<script>
  import VueSelect from 'vue-select'

  export default {
    components: { VueSelect },
    props: ['color', 'plans'],
    data () {
      return {
        selectedPlan: null,
//        plans: [
//          {
//            label: 'Plan Móvil Gigas - 14,55$',
//            price: 14.55,
//            benefits: `
//              <ul>
//                <li>1.2 GB</li>
//                <li>Whatsapp, Facebook, Instagram Libres</li>
//                <li>25 minutos a todas operadoas</li>
//              </ul>
//            `
//          },
//          {
//            label: 'Plan Móvil Gigas - 22,39$',
//            price: 22.39,
//            benefits: `
//              <ul>
//                <li>2.5 Gigas</li>
//                <li>Whatsapp, Instagram Libres</li>
//                <li>Facebook 500 Megas</li>
//                <li>Deezer 6 meses</li>
//                <li>70 minutos a todas operadoas</li>
//              </ul>
//            `
//          },
//          {
//            label: 'Plan Móvil Gigas - 35,83$',
//            price: 35.83,
//            benefits: `
//              <ul>
//                <li>4 GB</li>
//                <li>Whatsapp, Facebook, Twitter, Instagram Libres</li>
//                <li>Deezer 6 meses</li>
//                <li>120 minutos a todas operadoas</li>
//              </ul>
//            `
//          },
//        ]
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