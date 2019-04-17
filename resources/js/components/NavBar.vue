<template>
  <div>
  <b-navbar fluid style="background-color: #333; z-index: 1020; height: 37px">
        <b-button-group>
          <b-btn variant="link" style="color: #fac800;">personal</b-btn>
          <b-btn variant="link" style="color: #69c4b4">pro</b-btn>
          <b-btn variant="link" style="color: #ff7b00">corporativo</b-btn>
        </b-button-group>
        <b-btn variant="link" class="ml-auto" style="color: #0095DB;">mi cnt</b-btn>
  </b-navbar>
  <b-navbar toggleable="sm" type="dark" variant="primary" sticky class="py-0">
    <b-navbar-brand href="/">
      <img src="/img/cnt-logo-white-navbar.png" alt="cnt-logo" class="ml-4">
    </b-navbar-brand>
    <b-btn @click="navbarCollapse = !navbarCollapse" variant="link" class="ml-auto">
      <img src="/img/hamburger.png" alt="">
    </b-btn>
  </b-navbar>
  <b-collapse id="nav_collapse" v-model="navbarCollapse">
    <b-container class="mt-4">
      <b-row no-gutters align-v="center"	>
        <b-col cols="4">
          <img src="/img/no-soy-cliente.svg" alt="" class="d-block ml-md-auto mr-md-4 bubble-menu">
        </b-col>
        <b-col cols="8">
          <b-row class="ml-1 line-menu" no-gutters>
            <b-col class="align-items-center">
              <img src="/img/caret-right-purple.svg" alt="" style="height: 2rem;" class="mr-1">
              <span class="purple">Aprovecha nuestros paquetes</span>
            </b-col>
          </b-row>
          <b-row class="ml-1 line-menu" no-gutters>
            <b-col class="align-items-center">
              <a href="/movil-pospago">
                <img src="/img/caret-right-purple.svg" alt="" style="height: 2rem;" class="mr-1">
                <span class="purple">Móvil</span>
              </a>
            </b-col>
          </b-row>
          <b-row class="ml-1 line-menu" no-gutters>
            <b-col class="align-items-center ">
              <img src="/img/caret-right-purple.svg" alt="" style="height: 2rem;" class="mr-1">
              <span class="purple">Internet</span>
            </b-col>
          </b-row>
          <b-row class="ml-1 line-menu" no-gutters>
            <b-col class="align-items-center">
              <img src="/img/caret-right-purple.svg" alt="" style="height: 2rem;" class="mr-1">
              <span class="purple">TV</span>
            </b-col>
          </b-row>
          <b-row class="ml-1 line-menu" no-gutters>
            <b-col class="align-items-center">
              <img src="/img/caret-right-purple.svg" alt="" style="height: 2rem;" class="mr-1">
              <span class="purple">Fijo</span>
            </b-col>
          </b-row>
          <b-row class="ml-1 line-menu" no-gutters>
            <b-col class="align-items-center">
              <img src="/img/caret-right-purple.svg" alt="" style="height: 2rem;" class="mr-1">
              <span class="purple">Ofertas y promociones</span>
            </b-col>
          </b-row>
        </b-col>
      </b-row>
      <b-row no-gutters align-v="center" class="mt-4">
      <b-col cols="4">
        <img src="/img/soy-cliente.svg" alt="" class="d-block ml-md-auto mr-md-4 bubble-menu">
      </b-col>
      <b-col cols="8">
        <b-row class="ml-1 line-menu" no-gutters>
          <b-col class="align-items-center">
            <img src="/img/caret-right-teal.svg" alt="" style="height: 2rem;" class="mr-1">
            <span class="teal">Encuentra más servicios</span>
          </b-col>
        </b-row>
        <b-row class="ml-1 line-menu" no-gutters>
          <b-col class="align-items-center">
            <img src="/img/caret-right-teal.svg" alt="" style="height: 2rem;" class="mr-1">
            <span class="teal">Renovación</span>
          </b-col>
        </b-row>
        <b-row class="ml-1 line-menu" no-gutters>
          <b-col class="align-items-center ">
            <img src="/img/caret-right-teal.svg" alt="" style="height: 2rem;" class="mr-1">
            <span class="teal">Prepago</span>
          </b-col>
        </b-row>
        <b-row class="ml-1 line-menu" no-gutters>
          <b-col class="align-items-center">
            <img src="/img/caret-right-teal.svg" alt="" style="height: 2rem;" class="mr-1">
            <span class="teal">TV</span>
          </b-col>
        </b-row>
      </b-col>
    </b-row>
    <b-row no-gutters align-v="center" class="mt-4">
      <b-col cols="4">
        <img src="/img/necesito-ayuda.svg" alt="" class="d-block ml-md-auto mr-md-4 bubble-menu">
      </b-col>
      <b-col cols="8">
        <b-row class="ml-1 line-menu" no-gutters>
          <b-col class="align-items-center">
            <img src="/img/caret-right-blue.svg" alt="" style="height: 2rem;" class="mr-1">
            <span class="blue">Encuentra tu solución</span>
          </b-col>
        </b-row>
        <b-row class="ml-1 line-menu" no-gutters>
          <b-col class="align-items-center">
            <img src="/img/caret-right-blue.svg" alt="" style="height: 2rem;" class="mr-1">
            <span class="blue">Configuraciones</span>
          </b-col>
        </b-row>
        <b-row class="ml-1 line-menu" no-gutters>
          <b-col class="align-items-center ">
            <img src="/img/caret-right-blue.svg" alt="" style="height: 2rem;" class="mr-1">
            <span class="blue">Contáctanos</span>
          </b-col>
        </b-row>
      </b-col>
    </b-row>
    </b-container>
  </b-collapse>
  </div>
</template>
<script>
  export default {
    data () {
      return {
        navbarCollapse: false
      }
    },
    methods: {
      handleScroll (event) {
        this.navbarCollapse = false
      }
    },
    created () {
      window.addEventListener('scroll', this.handleScroll)
    },
    destroyed () {
      window.removeEventListener('scroll', this.handleScroll)
    }
  }
</script>
<style>
  #nav_collapse {
    position: absolute;
    top: calc(-100vh + 90px + 36px);
    right: 0;
    width: 100%;
    height: calc(100vh - 90px - 36px) !important;
    background: white;
    transition: top .35s ease;
    display: block !important;
    overflow-y: scroll;
    padding-bottom: 2rem;
  }

  #nav_collapse::-webkit-scrollbar {
    width: 10px;
  }

  /* Track */
  #nav_collapse::-webkit-scrollbar-track {
    background: transparent;
  }

  /* Handle */
  #nav_collapse::-webkit-scrollbar-thumb {
    background: #0095DB;
  }

  /* Handle on hover */
  #nav_collapse::-webkit-scrollbar-thumb:hover {
    background: #0095DB;
  }

  #nav_collapse.show {
    top: 126px;
  }

  .caret-menu {
    height: 2rem;

  }
  .line-menu {
    border-top: gainsboro solid 1px;
    font-size: 1.1rem;
  }
  .line-menu:last-child {
    border-bottom: gainsboro solid 1px;
  }

  .line-menu img {
    opacity: 0;
  }

  .line-menu:hover .purple {
    color: #931787;
  }

  .line-menu:hover .teal {
    color: #69c4b4;
  }

  .line-menu:hover .blue {
    color: #0095DB;
  }


  .line-menu:hover img{
    opacity: 1;
  }
  .bubble-menu {
    max-height: 200px;
  }

</style>