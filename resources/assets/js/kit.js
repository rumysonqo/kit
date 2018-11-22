new Vue({
    el: '#kit',
    created:function(){
      getKit()
    },
    data : {
        search: '',
        selected: [],
        texto:'',
        headers_item: [
          { text: 'Nombre Item', value: 'insumo' },
          { text: 'Meta', value: 'cod_meta' },
          { text: 'Nombre Meta', value: 'nom_meta' },
          { text: 'Clasificador', value: 'clasificador' }
        ],
        items: [],
        pagination: {rowsPerPage:10},
        errors:[],
    },
    computed: {
      pages () {
        if (this.pagination.rowsPerPage == null ||
          this.pagination.totalItems == null
        ) return 0
        return Math.ceil(this.pagination.totalItems / this.pagination.rowsPerPage)
      }
    },

    methods:{
      async getKit(){
        var urlKit='buscar_texto/'+this.texto;
        try{
          const res = await axios.get(urlKit)
          this.items=res.data
          this.pagination.totalItems=res.data.length
        } catch(e){
          this.errors.push(e)
        }
      }
    }
  })