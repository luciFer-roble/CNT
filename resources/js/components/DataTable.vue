<template> 

<div class="table-responsive-sm">
    <vue-good-table v-if="tableData.length>0"
        :columns="columns"
        :rows="tableData"
        :pagination-options="{enabled: true,perPage: 10}"
        :globalSearch="true" >
          <template slot="table-row" slot-scope="props">
                  <span  class="btn btn-link p-0 m-0"  v-if="props.column.field == 'action'">
                        <i  class="fa fa-fw fa-pencil-alt" v-on:click="editar(props.row.id)"></i>
                    </span>
                    <span  class="btn text-danger p-0 m-0"  v-if="props.column.field == 'action'">
                        <i  class="fa fa-fw fa-trash-alt" v-on:click="confirmar(props.row)"></i>
                    </span>
            <span v-else>
              {{props.formattedRow[props.column.field]}}
            </span>
          </template>
           
   </vue-good-table>
   <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h4 class="modal-title center-block">¿Está seguro de que desea eliminar el registro?</h4>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-light" data-dismiss="modal" >Cancelar</a>
                        <button type="button"  v-on:click="borrar(idborrar)" class="btn">{{ boton2 }}</button>
                    </div>
                </div>
            </div>
        </div>
</div>  


</template>

<script type="text/ecmascript-6">
import { VueGoodTable } from 'vue-good-table';
export default {
  components:{
            VueGoodTable,
        },
  props: {
    columns:{
        type: Array,
        default() {
            return [];
        }
    },
    fetchUrl: {type:String, required: true},
    dir: {type:String, required: true},

  },
  data() {
    return {
      tableData: [],
      boton1: 'Actualizar',
      boton2: 'Borrar',
      idborrar: "",
      direccion: "",
      errors: []
    }
  },
  created() {
     this.fetchData()
  },
  methods: {
        fetchData() {
           axios.get(this.fetchUrl
                ).then((response)=>{this.tableData=response.data;}
                ).catch(function (error) {console.log(error);});
        },
        editar(id){
        this.direccion=this.dir+id+'/edit';
           window.location.href = this.direccion;
        },
        confirmar:function(row) {
              this.idborrar=row.id;
                $('#modal1').modal('show');
        }, 
        borrar:function (id) {
        this.direccion='/'+this.dir+id;
                axios.delete(this.direccion)
                    .then(function (response) {
                        window.location.href = response.data;
                    })
                    .catch(error => {
                        module.status = error.response.data.status;
                    });


            }

    },

  filters: {
    columnHead(value) {
      return value.split('_').join(' ').toUpperCase()
    }
  },
  name: 'DataTable'
}
</script>

<style scoped>
</style>
