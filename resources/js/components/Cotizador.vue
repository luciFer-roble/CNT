<template>
  <b-container fluid class="px-0">
    <b-container fluid style="background-color: #dfe0e4;">
      <b-row class="py-3 text-center text-blue">
        <b-col>
          <h2 class="mb-0"><strong>Aprovecha nuestros paquetes</strong></h2>
        </b-col>
      </b-row>
    </b-container>
    <b-container fluid :style="{backgroundColor: mainBg}">
      <b-container class="px-0">
        <b-tabs
            no-nav-style
            v-model="tabIndex"
            nav-wrapper-class="service-tab-wrapper"
            lazy
        >
          <b-tab
                  :title-item-class="tabIndex === 0 ? 'service-plus-tab internet-plus-tab active-tab justify-content-center' : 'service-plus-tab justify-content-center'"
          >
            <template slot="title">
              <div class="py-1">
                <div class="d-flex justify-content-center">
                  <svg version="1.1"
                       xmlns="http://www.w3.org/2000/svg"
                       xmlns:xlink="http://www.w3.org/1999/xlink"
                       x="0px" y="0px"
                       xml:space="preserve"
                       viewBox="0 0 60 60"
                       class="service-plus-svg"
                       :style="tabIndex === 0 ? {fill: '#fff'} : {fill: internetPlus.color}"
                  >
                      <g>
                        <g>
                          <g>
                            <path class="st0" d="M30.6,21.6c2.9,0,5.5,1,7.6,2.6l3.3-2.4c-2.9-2.5-6.7-4.1-10.9-4.1c-4.2,0-8,1.6-10.9,4.1l3.3,2.4
                              C25.1,22.6,27.7,21.6,30.6,21.6z"/>
                            <path class="st0" d="M30.6,13.4c5.6,0,10.6,2.2,14.3,5.8l3.2-2.4c-4.5-4.5-10.7-7.4-17.6-7.4S17.5,12.3,13,16.8l3.2,2.4
                              C20,15.6,25,13.4,30.6,13.4z"/>
                            <path class="st0" d="M30.6,5.6c8.2,0,15.6,3.4,20.8,8.9l3.2-2.4c-6-6.4-14.5-10.4-24-10.4s-18,4-24,10.4l3.2,2.4
                              C15,9,22.4,5.6,30.6,5.6z"/>
                          </g>
                          <path class="st0" d="M33.1,25.9c-0.8-0.2-1.6-0.2-2.5-0.2c-7,0-12.7,5.6-12.7,12.6c0,4.6,2.6,8.7,6.3,10.9c0.1,0,0.1,0.1,0.1,0.1
                            c0.7,0.4,1.2,1.2,1.2,2.1c0,0.2,0,0.5-0.1,0.7c0,0,0,0,0,0.1l-1.4,4.7l0,0c0,0.1,0,0.1,0,0.2c0,0.3,0.3,0.6,0.6,0.6
                            c0.1,0,0.3,0,0.4-0.1l0,0l12.5-8.8c3.4-2.2,5.7-6.1,5.7-10.5C43.3,32.2,38.9,27.1,33.1,25.9z"/>
                        </g>
                      </g>
                  </svg>
                </div>
                <div class="service-plus-title text-center" :style="tabIndex === 0 ? {color: '#fff'} : {color: internetPlus.color}">
                  internet+
                </div>
              </div>
            </template>

            <internet
                    :color="internetPlus.color"
                    @change="value => internetSelected = value"
            ></internet>
            <fixed
                    :color="internetPlus.color"
                    @change="value => fixedSelected = value"
            ></fixed>
            <mobile
                    :color="internetPlus.color"
                    @change="value => mobileSelected = value"
            ></mobile>
            <tv
                    :color="internetPlus.color"
                    @change="value => tvSelected = value"
            ></tv>
            <total
                    :color="internetPlus.color"
                    :total-price="totalPrice"
                    :selected="selectedNumber"
            ></total>
            <b-container class="py-4">
              <b-row>
                <b-col>
                  <lead-modal :color="internetPlus.color"
                  ></lead-modal>
                </b-col>
              </b-row>
            </b-container>
            <b-container :style="{backgroundColor: internetPlus.color}" class="pb-4">
              <b-row>
                <b-col>
                  <h6 class="text-white"><strong>Condiciones:</strong></h6>
                  <div class="conditions-block">
                    <p>Una vez activada la línea, el usuario contará con un paquete de datos durante la permanencia del contrato, la cantidad de megas dependerá del CBM contratado.</p>
                    <p>De acuerdo al CBM contratado de $12,99 a $99,99, incluye una bolsa de minutos incluidos para llamar gratis ($0 costo) a todas las operadoras fijas y móviles a nivel nacional. Los minutos gratis de acuerdo al CBM contratado se detallan en la tabla siguiente. Una vez terminados los minutos incluidos, la tarifa onnet es de $0,04 + imp a números fijos y móviles de CNT y la tarifa off net es de $0,12 + imp para planes de $12,99 a $99,99.</p>
                    <p>Los minutos incluidos así como los paquetes de megas no poseen rollover, por lo que si el cliente no los utiliza dentro del mes no se acumulan.</p>
                    <p>Modalidad: Pospago controlados. No cuenta con SMS de texto sin embargo puede enviar sms bajo demanda o contratar un paquete adicional• No aplica fondo de equipos a excepcion del plan de $99,99 que cuenta con 3CBMS .</p>
                    <p>Una vez consumido el paquete de datos, el MB adicional tendrá una tarifa de $0,0214+ imp. que se descontará del saldo disponible.• Se podrá activar paquetes de SMS onnet, offnet e Internacional, paquetes de VOZ y paquetes de MB adicionales.</p>
                    <p>Los minutos gratis aplica para llamadas hacia números móviles y fijos onnet y offnet. Las llamadas a números 1700 Y numeros especiales no se incluyen dentro de los minutos incluidos, el precio del minuto bajo demanda a estos destinos es de 0,10 + imp, en caso de que haga una recarga o contrate un paquete de voz. No aplica para llamadas internacionales.• Aplica para portabilidad, nuevos clientes, cambios de plan a un CBM superior, upgrade entre los mismos planes.</p>
                    &nbsp<br>
                    <p>La tarifa del paquete es $28,50 + imp. por la comercialización del Paquete HD. Precio final $36,71.</p>
                    <p>La tarifa por equipos (decodificadores) adicionales es de $7,00 + imp por cada uno; se puede contratar máximo 3 equipos adicionales por contrato.</p>
                    <p>Costo de instalación del equipo principal $20,00 + impuestos ($25,76 con imp.), y equipos adicionales $10,00 + impuestos ($12,88 con imp.).</p>
                    <p>El Paquete HD contiene la siguiente cantidad de señales: 10 canales SD Nacionales, 51 canales SD Internacionales, 30 Canales HD y 10 señales de Audio.</p>
                    <p>En caso de cancelación del plan antes del año se procederá al cobro de costos de instalación no contemplados en la contratación inicial, conforme lo establecido en el contrato de adhesión suscrito entre el cliente/suscriptor y la CNT EP.</p>
                    <p>Notificacion hacia Arcotel con Oficio No. GNRI-GREG-03-1041-2018.</p>
                  </div>
                </b-col>
              </b-row>
            </b-container>
          </b-tab>
          <b-tab
                  :title-item-class="tabIndex === 1 ? 'service-plus-tab tv-plus-tab active-tab justify-content-center' : 'service-plus-tab justify-content-center'"
          >
            <template slot="title">
              <div class="py-1">
                <div class="d-flex justify-content-center">
                  <svg version="1.1"
                       xmlns="http://www.w3.org/2000/svg"
                       xmlns:xlink="http://www.w3.org/1999/xlink"
                       x="0px" y="0px"
                       xml:space="preserve"
                       viewBox="0 0 60 60"
                       class="service-plus-svg"
                       :style="tabIndex === 1 ? {fill: '#fff'} : {fill: tvPlus.color}"
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
                <div class="service-plus-title text-center" :style="tabIndex === 1 ? {color: '#fff'} : {color: tvPlus.color}">
                  tv+
                </div>
              </div>
            </template>
            <tv
                    :color="tvPlus.color"
                    @change="value => tvSelected = value"
            ></tv>
            <mobile
                    :color="tvPlus.color"
                    @change="value => mobileSelected = value"
            ></mobile>
            <internet
                    :color="tvPlus.color"
                    @change="value => internetSelected = value"
            ></internet>
            <fixed
                    :color="tvPlus.color"
                    @change="value => fixedSelected = value"
            ></fixed>
            <total
                    :color="tvPlus.color"
                    :total-price="totalPrice"
                    :selected="selectedNumber"
            ></total>
            <b-container class="py-4">
              <b-row>
                <b-col>
                  <lead-modal :color="tvPlus.color"
                  ></lead-modal>
                </b-col>
              </b-row>
            </b-container>
            <b-container :style="{backgroundColor: tvPlus.color}" class="pb-4">
              <b-row>
                <b-col>
                  <h6 class="text-white"><strong>Condiciones:</strong></h6>
                  <div class="conditions-block">
                    <p>Una vez activada la línea, el usuario contará con un paquete de datos durante la permanencia del contrato, la cantidad de megas dependerá del CBM contratado.</p>
                    <p>De acuerdo al CBM contratado de $12,99 a $99,99, incluye una bolsa de minutos incluidos para llamar gratis ($0 costo) a todas las operadoras fijas y móviles a nivel nacional. Los minutos gratis de acuerdo al CBM contratado se detallan en la tabla siguiente. Una vez terminados los minutos incluidos, la tarifa onnet es de $0,04 + imp a números fijos y móviles de CNT y la tarifa off net es de $0,12 + imp para planes de $12,99 a $99,99.</p>
                    <p>Los minutos incluidos así como los paquetes de megas no poseen rollover, por lo que si el cliente no los utiliza dentro del mes no se acumulan.</p>
                    <p>Modalidad: Pospago controlados. No cuenta con SMS de texto sin embargo puede enviar sms bajo demanda o contratar un paquete adicional• No aplica fondo de equipos a excepcion del plan de $99,99 que cuenta con 3CBMS .</p>
                    <p>Una vez consumido el paquete de datos, el MB adicional tendrá una tarifa de $0,0214+ imp. que se descontará del saldo disponible.• Se podrá activar paquetes de SMS onnet, offnet e Internacional, paquetes de VOZ y paquetes de MB adicionales.</p>
                    <p>Los minutos gratis aplica para llamadas hacia números móviles y fijos onnet y offnet. Las llamadas a números 1700 Y numeros especiales no se incluyen dentro de los minutos incluidos, el precio del minuto bajo demanda a estos destinos es de 0,10 + imp, en caso de que haga una recarga o contrate un paquete de voz. No aplica para llamadas internacionales.• Aplica para portabilidad, nuevos clientes, cambios de plan a un CBM superior, upgrade entre los mismos planes.</p>
                    &nbsp<br>
                    <p>La tarifa del paquete es $28,50 + imp. por la comercialización del Paquete HD. Precio final $36,71.</p>
                    <p>La tarifa por equipos (decodificadores) adicionales es de $7,00 + imp por cada uno; se puede contratar máximo 3 equipos adicionales por contrato.</p>
                    <p>Costo de instalación del equipo principal $20,00 + impuestos ($25,76 con imp.), y equipos adicionales $10,00 + impuestos ($12,88 con imp.).</p>
                    <p>El Paquete HD contiene la siguiente cantidad de señales: 10 canales SD Nacionales, 51 canales SD Internacionales, 30 Canales HD y 10 señales de Audio.</p>
                    <p>En caso de cancelación del plan antes del año se procederá al cobro de costos de instalación no contemplados en la contratación inicial, conforme lo establecido en el contrato de adhesión suscrito entre el cliente/suscriptor y la CNT EP.</p>
                    <p>Notificacion hacia Arcotel con Oficio No. GNRI-GREG-03-1041-2018.</p>
                  </div>
                </b-col>
              </b-row>
            </b-container>
          </b-tab>
          <b-tab
                  :title-item-class="tabIndex === 2 ? 'service-plus-tab mobile-plus-tab active-tab justify-content-center' : 'service-plus-tab justify-content-center'"
          >
            <template slot="title">
              <div class="py-1">
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
                      <path :style="tabIndex === 2 ? {fill: '#fff'} : {fill: mobilePlus.color}" d="M27.7,51.4c0,1.1-0.9,2.1-2.1,2.1c-1.1,0-2.1-0.9-2.1-2.1c0-1.1,0.9-2.1,2.1-2.1
                        C26.8,49.3,27.7,50.2,27.7,51.4z"/>
                      <g>
                        <path style="fill:none;" d="M12.1,54.4c0,0.7,0.6,1.4,1.4,1.4h24.2c0.7,0,1.4-0.6,1.4-1.4v-7.2h-27V54.4z"/>
                        <path :style="tabIndex === 2 ? {fill: '#fff'} : {fill: mobilePlus.color}" d="M39.1,43.9h-27V12.2h18.3c1.1-1.3,2.4-2.4,3.9-3.2H12.1V5.6c0-0.7,0.6-1.4,1.4-1.4h24.2
                          c0.7,0,1.4,0.6,1.4,1.4v1.8c0.6-0.1,1.1-0.1,1.7-0.1c0.5,0,1,0,1.5,0.1V5.6c0-2.5-2.1-4.6-4.6-4.6H13.5C11,1,8.9,3.1,8.9,5.6v48.8
                          c0,2.5,2.1,4.6,4.6,4.6h24.2c2.5,0,4.6-2.1,4.6-4.6V36.3l-3.2,2.3V43.9z M39.1,54.4c0,0.7-0.6,1.4-1.4,1.4H13.5
                          c-0.7,0-1.4-0.6-1.4-1.4v-7.2h27V54.4z"/>
                      </g>
                      <path :style="tabIndex === 2 ? {fill: '#fff'} : {fill: mobilePlus.color}" d="M42.8,10.7c-0.6-0.1-1.3-0.2-2-0.2c-5.7,0-10.3,4.6-10.3,10.3c0,3.8,2.1,7.1,5.1,8.9
                        c0,0,0.1,0,0.1,0.1c0.6,0.4,1,1,1,1.8c0,0.2,0,0.4-0.1,0.6c0,0,0,0,0,0L35.6,36l0,0c0,0,0,0.1,0,0.1c0,0.3,0.2,0.5,0.5,0.5
                        c0.1,0,0.2,0,0.3-0.1l0,0l10.1-7.2c2.8-1.8,4.6-5,4.6-8.5C51.1,15.8,47.5,11.7,42.8,10.7z"/>
                    </g>
                  </svg>
                </div>
                <div class="service-plus-title text-center" :style="tabIndex === 2 ? {color: '#fff'} : {color: mobilePlus.color}">
                  móvil+
                </div>
              </div>
            </template>
            <mobile
                    :color="mobilePlus.color"
                    @change="value => mobileSelected = value"
            ></mobile>
            <tv
                    :color="mobilePlus.color"
                    @change="value => tvSelected = value"
            ></tv>
            <internet
                    :color="mobilePlus.color"
                    @change="value => internetSelected = value"
            ></internet>
            <fixed
                    :color="mobilePlus.color"
                    @change="value => fixedSelected = value"
            ></fixed>
            <total
                    :color="mobilePlus.color"
                    :total-price="totalPrice"
                    :selected="selectedNumber"
            ></total>
            <b-container class="py-4">
              <b-row>
                <b-col>
                  <lead-modal :color="mobilePlus.color"
                  ></lead-modal>
                </b-col>
              </b-row>
            </b-container>
            <b-container :style="{backgroundColor: mobilePlus.color}" class="pb-4">
              <b-row>
                <b-col>
                  <h6 class="text-white"><strong>Condiciones:</strong></h6>
                  <div class="conditions-block">
                    <p>Una vez activada la línea, el usuario contará con un paquete de datos durante la permanencia del contrato, la cantidad de megas dependerá del CBM contratado.</p>
                    <p>De acuerdo al CBM contratado de $12,99 a $99,99, incluye una bolsa de minutos incluidos para llamar gratis ($0 costo) a todas las operadoras fijas y móviles a nivel nacional. Los minutos gratis de acuerdo al CBM contratado se detallan en la tabla siguiente. Una vez terminados los minutos incluidos, la tarifa onnet es de $0,04 + imp a números fijos y móviles de CNT y la tarifa off net es de $0,12 + imp para planes de $12,99 a $99,99.</p>
                    <p>Los minutos incluidos así como los paquetes de megas no poseen rollover, por lo que si el cliente no los utiliza dentro del mes no se acumulan.</p>
                    <p>Modalidad: Pospago controlados. No cuenta con SMS de texto sin embargo puede enviar sms bajo demanda o contratar un paquete adicional• No aplica fondo de equipos a excepcion del plan de $99,99 que cuenta con 3CBMS .</p>
                    <p>Una vez consumido el paquete de datos, el MB adicional tendrá una tarifa de $0,0214+ imp. que se descontará del saldo disponible.• Se podrá activar paquetes de SMS onnet, offnet e Internacional, paquetes de VOZ y paquetes de MB adicionales.</p>
                    <p>Los minutos gratis aplica para llamadas hacia números móviles y fijos onnet y offnet. Las llamadas a números 1700 Y numeros especiales no se incluyen dentro de los minutos incluidos, el precio del minuto bajo demanda a estos destinos es de 0,10 + imp, en caso de que haga una recarga o contrate un paquete de voz. No aplica para llamadas internacionales.• Aplica para portabilidad, nuevos clientes, cambios de plan a un CBM superior, upgrade entre los mismos planes.</p>
                    &nbsp<br>
                    <p>La tarifa del paquete es $28,50 + imp. por la comercialización del Paquete HD. Precio final $36,71.</p>
                    <p>La tarifa por equipos (decodificadores) adicionales es de $7,00 + imp por cada uno; se puede contratar máximo 3 equipos adicionales por contrato.</p>
                    <p>Costo de instalación del equipo principal $20,00 + impuestos ($25,76 con imp.), y equipos adicionales $10,00 + impuestos ($12,88 con imp.).</p>
                    <p>El Paquete HD contiene la siguiente cantidad de señales: 10 canales SD Nacionales, 51 canales SD Internacionales, 30 Canales HD y 10 señales de Audio.</p>
                    <p>En caso de cancelación del plan antes del año se procederá al cobro de costos de instalación no contemplados en la contratación inicial, conforme lo establecido en el contrato de adhesión suscrito entre el cliente/suscriptor y la CNT EP.</p>
                    <p>Notificacion hacia Arcotel con Oficio No. GNRI-GREG-03-1041-2018.</p>
                  </div>
                </b-col>
              </b-row>
            </b-container>
          </b-tab>
        </b-tabs>
      </b-container>
    </b-container>

  </b-container>
</template>
<script>
  import Internet from './cotizador/Internet.vue'
  import Fixed from './cotizador/Fixed.vue'
  import Mobile from './cotizador/Mobile.vue'
  import Tv from './cotizador/Tv.vue'
  import Total from './cotizador/Total.vue'

  export default {
    components: {
      Internet,
      Fixed,
      Mobile,
      Tv,
      Total
    },
    data () {
      return {
        showLeadModal: false,
        leadModalColor: '',
        tabIndex: 0,
        internetPlus: {
          color: '#0095DB'
        },
        tvPlus: {
          color: '#931787'
        },
        mobilePlus: {
          color: '#ff7b00'
        },
        internetSelected: null,
        fixedSelected: null,
        mobileSelected: null,
        tvSelected: null
      }
    },
    watch: {
      tabIndex () {
        this.internetSelected = null
        this.fixedSelected = null
        this.mobileSelected = null
        this.tvSelected = null
      }
    },
    computed: {
      mainBg () {
        switch (this.tabIndex) {
          case 0:
            return '#0095DB'
          case 1:
            return '#931787'
          case 2:
            return '#ff7b00'
          default:
            break
        }
      },
      totalPrice () {
        let totalPrice = 0
        if (this.internetSelected) {
          totalPrice += this.internetSelected
        }
        if (this.mobileSelected) {
          totalPrice += this.mobileSelected
        }
        if (this.fixedSelected) {
          this.fixedSelected.forEach(fixed => {
            totalPrice += fixed.price
          })
        }
        if (this.tvSelected) {
          this.tvSelected.forEach(tv => {
            totalPrice += tv.price
          })
        }
        return totalPrice
      },
      selectedNumber () {
        let selected = 0
        if (this.internetSelected) {
          selected++
        }
        if (this.mobileSelected) {
          selected++
        }
        if (this.fixedSelected) {
          selected++
        }
        if (this.tvSelected) {
          selected++
        }
        return selected
      }
    },
    methods: {
      openLeadModal (color) {
        this.showLeadModal = true
        this.leadModalColor = color
      }
    }
  }

</script>
<style>

  .service-tab-wrapper {
    margin-left: -15px;
    margin-right: -15px;
    background: white;
  }
  .service-plus-tab {
    width: 33.33333333333%;
    background: #fff;
  }
  .service-plus-svg {
    height: 40px;
  }
  .service-plus-title {
    font-size: 1.25rem;
  }

  .internet-plus-tab.active-tab {
    background-color: #0095DB;
  }

  .tv-plus-tab.active-tab {
    background-color: #931787;
  }

  .mobile-plus-tab.active-tab {
    background-color: #ff7b00;
  }

  .internet-plus-img {
    height: 40px;
    width: 40px;
  }


</style>