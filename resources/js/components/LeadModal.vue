<template>
  <div>
    <b-btn
            class="lead-btn"
            block
            :style="{color: color}"
            @click="show = true"
    >
      lo quiero
    </b-btn>
    <b-modal
      :visible="show"
      title="lo quiero"
      content-class="lead-modal"
      header-bg-variant="primary"
      header-text-variant="light"
      ok-title="Contáctame"
      cancel-title="Cancelar"
      scrollable
      @ok="show = false"
      @hidden="show = false"
      lazy
    >
      <b-card class="mb-4">
        <strong style="font-size: 1.2rem" class="text-primary">¿Interesado?</strong>
        <br>Déjanos tus datos y nos pondremos en contacto contigo.
        <div class="text-right text-primary" style="font-size: 1.2rem;"><strong>Gracias por confiar en CNT.</strong></div>
      </b-card>
      <b-form-group
              v-model="name"
              invalid-feedback="Ups, nos falta tu nombre."
              :state="name.length > 0"
      >
        <b-input
                placeholder="Tus nombres y apellidos"
                v-model="name"
                :state="name.length > 0"
        ></b-input>
      </b-form-group>
      <!--<b-form-group-->
              <!--v-model="identification"-->
              <!--invalid-feedback="¡La cédula!"-->
              <!--:state="identification.length > 0"-->
      <!--&gt;-->
        <!--<b-input-->
                <!--placeholder="Tu número de cédula"-->
                <!--v-model="identification"-->
                <!--:state="identification.length > 0"-->
                <!--mask="111111111-1"-->
        <!--&gt;</b-input>-->
      <!--</b-form-group>-->
      <b-form-group
              v-model="mobile"
              invalid-feedback="¡Te queremos llamar!"
              :state="mobile.length > 0"
      >
        <b-input
                placeholder="Tu número de móvil"
                v-model="mobile"
                :state="mobile.length > 0"
                mask="111 11 11 111"
        ></b-input>
      </b-form-group>
      <b-form-group
              v-model="email"
              invalid-feedback="Por correo, ¿te parece?"
              :state="email.length > 0 && /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,10}(?:\.[a-z]{2})?)$/.test(email)"
      >
        <b-input
                placeholder="Tu correo electrónico"
                v-model="email"
                :state="email.length > 0 && /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,10}(?:\.[a-z]{2})?)$/.test(email)"
        ></b-input>
      </b-form-group>
      <b-form-group
              v-model="fixed"
      >
        <b-input
                placeholder="Tu número fijo"
                v-model="fixed"
                mask="11 1111 111"
        ></b-input>
      </b-form-group>
      <b-form-group
              v-model="comments"
              description="Di lo que te haría feliz."
      >
        <b-textarea
                placeholder="¿Comentarios?"
                v-model="comments"
                :rows="4"
                :max-rows="8"
        ></b-textarea>
      </b-form-group>
    </b-modal>
  </div>
</template>
<script>
  export default {
    props: ['csrf', 'color'],
    data () {
      return {
        show: false,
        name: '',
        identification: '',
        mobile: '',
        email: '',
        fixed: '',
        comments: ''
      }
    }
  }
</script>
<style>
  .lead-modal {
    position: absolute;
    top: 0;
    left: 0;
    font-size: .9rem;
    color: black;
  }
</style>