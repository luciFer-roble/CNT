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
        <div class="service-plus-title text-center" :style="{color: color}">
          internet
        </div>
      </b-col>
    </b-row>
    <b-row class="mb-3">
      <b-col>
        <div class="text-center"><h4>Precio: <strong>{{plans[sliderValue].price.toFixed(2)}}$*</strong></h4> </div>
        <div class="d-flex justify-content-center align-items-center" >
          <div class="text-center">
            bajada<br>
            <strong>{{plans[sliderValue].download}} MB</strong>
          </div>
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 60 60" style="height: 90px; enable-background:new 0 0 60 60;" xml:space="preserve">
          <g>
            <g>
              <path :style="{fill: color}" d="M51,16.3c0,0.2,0,0.3-0.1,0.5c-0.1,0.3-0.5,0.9-1.7,0.9l-4.9,0c-0.9,0-1.6,0.7-1.6,1.6l0,15.5
                c0,1.6-1.3,2.9-2.9,2.9l-7.6,0c-0.8,0-1.5-0.3-2-0.8c-0.5-0.5-0.8-1.3-0.8-2l0-15.5c0-0.9-0.7-1.6-1.6-1.6l-5.3,0
                c-1.2,0-1.6-0.5-1.7-0.9c-0.1-0.1-0.1-0.3-0.1-0.5c0-0.4,0.2-0.9,0.7-1.4L33.8,2.4c1.1-1.1,2.9-1.1,4.1,0l12.5,12.5
                C50.8,15.4,51,15.8,51,16.3z M41.4,19.2c0-1.6,1.3-2.9,2.9-2.9l5.6,0l-13-13c-0.6-0.6-1.6-0.6-2.3,0l-13,13l6,0
                c1.6,0,2.9,1.3,2.9,2.9l0,15.5c0,0.4,0.2,0.8,0.5,1.1c0.3,0.3,0.7,0.5,1.1,0.5l7.6,0c0.9,0,1.6-0.7,1.6-1.6L41.4,19.2L41.4,19.2z"
                />
            </g>
            <g>
              <path :style="{fill: color}" d="M42.1,43.7c0,0.7-0.3,1.3-0.9,1.9L28.7,58.1c-0.7,0.7-1.6,1.1-2.6,1.1c-1,0-1.9-0.4-2.6-1.1
                L11,45.7c-0.6-0.6-0.9-1.3-0.9-1.9c0-0.3,0.1-0.6,0.1-0.8c0.2-0.4,0.7-1.3,2.4-1.3h4.9c0.2,0,0.4-0.1,0.6-0.2
                c0.2-0.2,0.2-0.3,0.2-0.6l0-15.6c0-1,0.4-1.9,1.1-2.6c0.6-0.6,1.4-1,2.3-1.1v1.3c-0.5,0.1-1,0.3-1.4,0.7c-0.5,0.5-0.7,1-0.7,1.6
                c0,0,0,0.1,0,0.1l0,15.5l0,0.1c0,0.5-0.2,1-0.6,1.4c-0.4,0.4-0.9,0.6-1.5,0.6h-4.9c-0.7,0-1.1,0.2-1.3,0.6c0,0.1-0.1,0.2-0.1,0.3
                c0,0.3,0.2,0.7,0.5,1l12.5,12.5c0.5,0.5,1.1,0.7,1.7,0.7c0.6,0,1.2-0.2,1.7-0.7l12.5-12.5c0.4-0.4,0.5-0.7,0.5-1
                c0-0.1,0-0.2-0.1-0.3c-0.2-0.4-0.6-0.6-1.3-0.6l-4.9,0l0-1.3l5,0c1.7,0,2.3,0.9,2.4,1.3C42,43.2,42.1,43.4,42.1,43.7z"/>
            </g>
          </g>
          </svg>
          <div class="text-center">
            subida<br>
            <strong>{{plans[sliderValue].upload}} MB</strong>
          </div>
        </div>
      </b-col>
    </b-row>
    <b-row class="px-2">
      <b-col>
        <vue-slider
                v-model="sliderValue"
                tooltip="none"
                height="14px"
                :dot-style="dotStyle"
                :rail-style="railStyle"
                :process-style="processStyle"
                :min="0"
                :max="plans.length - 1"
                @change="value => $emit('change', plans[value].price)"
        ></vue-slider>
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
  import VueSlider from 'vue-slider-component'
  export default {
    components: { VueSlider },
    props: ['color'],
    data () {
      return {
        sliderValue: 0,
        plans: [
          {
            download: 5,
            upload: 2,
            price: 23.40
          },
          {
            download: 25,
            upload: 15,
            price: 40.32
          },
          {
            download: 50,
            upload: 50,
            price: 55.89
          },
          {
            download: 100,
            upload: 100,
            price: 123.20
          }
        ]
      }
    },
    computed: {
      dotStyle () {
        return {
          cursor: 'pointer',
          width: '100%',
          height: '100%',
          borderRadius: '50%',
          backgroundColor: this.color,
          boxSizing: 'border-box',
        }
      },
      railStyle () {
        return {
          backgroundColor: 'transparent',
          border: 'solid 2px' + this.color,
          borderRadius: '15px',
          boxSizing: 'border-box',
        }
      },
      processStyle () {
        return {
          backgroundColor: this.color,
          borderRadius: '15px',
          border: 'solid 1px' + this.color
        }
      }
    }
  }
</script>