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
        >

            <template v-slot:item.name="{ item }">

                <v-img :src="item.img_url" :alt="item.name" width="50px" height="50px"></v-img>
                {{item.name}}

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
            { text: 'Historia', value: 'item_lore'}
        ],
        desserts: [],
    }
},
    created() {
        this.fetchData('LoreItem')
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
    },


}
</script>

<style scoped>

</style>
