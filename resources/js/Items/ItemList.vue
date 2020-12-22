<template>
    <v-app>
    <v-card>
        <v-card-title>
            <v-text-field
                v-model="search"
                append-icon="mdi-magnify"
                label="Buscar"
                single-line
                hide-details
                ></v-text-field>
        </v-card-title>
        <v-data-table
            :headers="headers"
            :items="desserts"
            :search="search"
            loading
            loading-text="Cargando Manifiesto de Destiny 2... Un momento por favor..."
            :single-expand="singleExpand"
            item-key="item_lore"
            show-expand
        >

            <template v-slot:item.name="{ item }">

                <v-img :src="item.img_url" :alt="item.name" width="50px" height="50px"></v-img>
                {{item.name}}

            </template>

            <template v-slot:expanded-item="{ headers, item }">
                <td :colspan="headers.length">
                    <h2>Historia</h2>
                    <div>
                        {{ item.item_lore }}
                    </div>
                </td>
            </template>

            <template v-slot:item.actions="{ item }">
                <v-btn
                    class="mx-2"
                    fab
                    dark
                    small
                    color="pink"
                    @click="saveItem(item)"
                >
                    <v-icon dark>
                        mdi-heart
                    </v-icon>
                </v-btn>
                <v-btn
                    class="mx-2"
                    fab
                    dark
                    small
                    color="primary"
                    @click="deleteItem(item)"
                >
                    <v-icon dark>
                        mdi-minus
                    </v-icon>
                </v-btn>
            </template>

        </v-data-table>
    </v-card>
    </v-app>
</template>

<script>
export default {
name: "ItemList",
    data () {
    return {
        search: '',
        btnSaved: 0,
        idDel: "",
        BORRAR: -5,
        expanded: [],
        singleExpand: true,
        titulo: 'Buscador de Objetos',
        editedItem: {
            id:"",
            isTracked:"",
            isObtained: ""
        },
        defaultItem: {
            id: "",
            isTracked:"",
            isObtained: "",
        },
        headers: [
            {
                text: 'Nombre',
                align: 'start',
                filterable: true,
                value: 'name',
            },
            { text: 'Calidad', value: 'quality' },
            { text: 'Donde se obtiene', value: 'drop_from' },
            { text: 'Temporada', value: 'sea_name' },
            { text: 'Actions', value: 'actions', sortable: false},
        ],
        desserts: [],
        inventario: []
    }
},
    created() {
        this.fetchData('LoreItem')
        this.fetchData('Inventario/'+this.$page.user.id)
    },
    computed: {
        formTitle () {
            return this.editedIndex === -1 ? 'Nuevo Item' : 'Editar Item'
        },
    },
    methods: {
        async fetchData(url) {
            let resp = await axios.get(url)
                .then(items => {
                    console.log(items)
                    if (url === 'LoreItem') {
                        this.desserts = items.data
                    } else {
                        this.inventario = items.data
                    }

                })
                .catch((error) => {
                    console.log(error);

                })
                .then(() => {

                })
        },
        isInInventory(isOnInventory) {
            let found = 0;
            let id = 0;
            this.inventario.forEach(function (item){
                if(Number(item.FK_ID_ITEM) === Number(isOnInventory.id)){
                    console.log('Y esto hay'+item.TRACKED_ID)
                    found = 1;
                    id = item.TRACKED_ID;
                }
            })
            this.BORRAR = id;
            if (found === 0){
                console.log('no estaba '+isOnInventory.name + " "+ isOnInventory.id)
            }

        },
        deleteItem(item) {
            this.isInInventory(item)
            console.log(this.BORRAR+'esto llego')
            if(this.BORRAR > 0) {
                axios.delete('Inventario/' + this.BORRAR)
                    .then((respuesta) => {
                        console.log(respuesta + ' Probando es item es ' + item.name)
                    }, (error) => {
                        console.log(error)
                        alert('No Tienes este objeto en tu inventario!!!')
                    })
                this.BORRAR = -1;
                this.inventario = []
                this.fetchData('Inventario/' + this.$page.user.id)
            }
            else {
                alert('Este artículo no esta en tu inventario.')
            }

        },
        saveItem(item) {
            this.isInInventory(item)
            if(this.BORRAR > 0){
                alert('Ya tienes este objeto en tu inventario!!!')
            } else {
                axios.post('Inventario', {id: item.id, id_item: item.TRACKED_ID, isTracked: true, isObtained: false})
                    .then(function (response) {
                        console.log(response)
                    })
                    .catch((error) => {
                        console.log(error);

                    })
                this.inventario = []
                this.fetchData('Inventario/' + this.$page.user.id)
                this.BORRAR = -1
            }
        },
    },


}
</script>

<style scoped>

</style>
