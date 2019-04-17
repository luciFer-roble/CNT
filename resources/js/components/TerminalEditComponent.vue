<template>
<div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" ref="modaledit">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Actualizar </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group" v-if="mostrar">
                            <div class="alert alert-danger" style="opacity: 0.7 !important;">
                                <ul v-for="error in errors">
                                    <li>{{ error[0]  }}</li>
                                </ul>
                            </div>
                        </div>
                         <div class="form-group">
                             <div class="form-group">
                                        <label for="name">Nombre:</label>
                                        <input type="text" class="form-control" v-model="name" name="name" >
                                    </div>
                                    <div class="form-group">
                                        <label for="brand">Marca:</label>
                                        <input type="text" class="form-control" v-model="brand" name="brand" >
                                    </div>
                                    <div class="input-group" style="width:70%">
                                        <div class="custom-file">
                                             <input type="file" class="custom-file-input" ref="file" name="img" @change="cambiar">
                                            <input type="text" class="custom-file-label btn-block" v-model="img">
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text bl" id="">Cargar</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="copy">Copia:</label>
                                        <input type="text" class="form-control" v-model="copy" name="copy" >
                                    </div>
                                    <div class="form-group">
                                        <label for="state">Estado:</label>
                                        <input type="text" class="form-control" v-model="state" name="state" >
                                    </div>

                                    <div class="form-group">
                                        <label for="cash_price">Precio</label>
                                        <input type="text" class="form-control" v-model="cash_price" name="cash_price" >
                                    </div>                                  

                                    <div class="form-group">
                                        <label for="from_price">Precio Desde</label>
                                        <input type="text" class="form-control" v-model="from_price" name="from_price" > 
                                    </div>

                                    <div class="form-group">
                                        <label for="screen_size">Tamaño Pantalla</label>
                                        <input type="text" class="form-control" v-model="screen_size" name="screen_size" >
                                    </div>

                                    <div class="form-group">
                                        <label for="front_cam">Camara Frontal</label>
                                        <input type="text" class="form-control" v-model="front_cam" name="front_cam"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label for="back_cam">Camara Trasera:</label>
                                        <input type="text" class="form-control" v-model="back_cam" name="back_cam"
                                        >
                                    </div>

                                    <div class="form-group">
                                        <label for="os ">Sistema Operativo</label>
                                        <input type="text" class="form-control" v-model="os" name="os"
                                        >
                                    </div>

                                    <div class="form-group">
                                        <label for="memory">Memoria</label>
                                        <input type="text" class="form-control" v-model="memory" name="memory"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label for="extensible_memory">Memoria Extensible:</label>
                                        <input type="text" class="form-control" v-model="extensible_memory" name="extensible_memory"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label for="height">Alto:</label>
                                        <input type="text" class="form-control" v-model="height" name="height"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label for="wv-modelth">Ancho:</label>
                                        <input type="text" class="form-control" v-model="wv-modelth" name="wv-modelth"
                                        >
                                    </div>

                                    <div class="form-group">
                                        <label for="depth ">Grosor:</label>
                                        <input type="text" class="form-control" v-model="depth" name="depth"
                                        >
                                    </div>

                                    <div class="form-group">
                                        <label for="battery">Bateria</label>
                                        <input type="text" class="form-control" v-model="battery" name="battery"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label for="colors">Colores:</label>
                                        <input type="text" class="form-control" v-model="colors" name="colors"
                                        >
                                    </div>  

                        </div>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-light" data-dismiss="modal" v-bind:class="{ disabled: actualizando }" >Cancelar</a>
                        <button type="button"  v-bind:class="{ disabled: actualizando, 'btn-secondary': actualizando, 'btn-primary' : !actualizando }" @click="update" class="btn " >{{ boton1 }}</button>
                    </div>
                </div>
            </div>
        </div>
        </template>


<script type="text/ecmascript-6">
export default {
  props: {
    terminal:{
        type: Object
        }
    },

  },
  data() {
    return {
      boton1: 'Actualizar',
      boton2: 'Borrar',
      idborrar: "",
      direccion: "",
      errors: [],
       name:'',
       brand:'',
       description:'',
       img:'',
       copy:'',
       benefits:'',
       state:'',
       colors:'',
       screen_size:'',
       front_cam:'',
       back_cam:'',
       os:'',
       memory:'',
       extensible_memory:'',
       height:'',
       width:'',
       depth:'',
       battery:'',
       cash_price:'',
       from_price:'',
    }
  },
  created() {
     this.edit()
  },
  methods: {
        cambiar:function () {
                this.img = this.$refs.file.files[0].name;
            },

        edit:function () {
                this.errors = [];
                this.mostrar = false;
                this.actualizando = false;
                this.name = this.terminal.name;
                this.brand = this.terminal..brand;
                this.description = this.terminal.descripcionn;
                this.img = this.terminal..img;
                this.copy = this.terminal.copy;
                this.benefits = this.terminal.benefits;
                this.state = this.terminal.state;
                this.colors = this.terminal.colors;
                this.screen_size = this.terminal.screen_size;
                this.front_cam = this.terminal.front_cam;
                this.back_cam = this.terminal.back_cam;
                this.os = this.terminal.os;
                this.memory = this.terminal.memory;
                this.extensible_memory = this.terminal.extensible_memory;
                this.height = this.terminal.height;
                this.width = this.terminal.width;
                this.depth = this.terminal.depth;
                this.battery = this.terminal.battery;
                this.cash_price = this.terminal.cash_price;
                this.from_price = this.terminal.from_price;
                $(this.$refs.modaledit).modal('show');
            },
        
            update:function () {
                this.actualizando = true;
                this.boton1 = 'Actualizando';
                this.file = this.$refs.file.files[0];
                let formData = new FormData();
                formData.append('id', this.id);
                formData.append('descripcion', this.descripcion);
                formData.append('archivo', this.file);
                formData.append('_method', 'put')
                axios.post('/formatos/'+this.id, formData,
                    {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    })
                    .then(function (response) {
                        //$(this.$refs.modaledit).modal('hide');
                        window.location = response.data.redirect;
                    })
                    .catch(error => {
                        this.actualizando = false;
                        this.boton1 = 'Actualizar';
                        module.status = error.response.data.status;
                        this.errors = error.response.data;
                        this.mostrar = true;
                    });


            },

    },

}
</script>

<style scoped>
</style>
