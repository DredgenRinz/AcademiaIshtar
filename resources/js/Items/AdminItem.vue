<template>
    <v-app>
        <v-data-table
            dense
            :headers="etiqueta_titulo"
            :items="d2_items"
            :search="search"
            :single-expand="singleExpand"
            :expanded.sync="expanded"
            item-key="item_lore"
            show-expand
            sort-by="id"
            class="elevation-1"
            loading
            loading-text="Cargando Manifiesto de Destiny 2... Un momento por favor..."
        >
            <template v-slot:top>
                <v-toolbar
                    flat
                >
                    <v-toolbar-title>{{titulo}}</v-toolbar-title>
                    <v-divider
                        class="mx-4"
                        inset
                        vertical
                    ></v-divider>
                    <v-card-title>
                        <v-text-field
                            v-model="search"
                            append-icon="mdi-magnify"
                            label="Buscar"
                            single-line
                            hide-details
                        ></v-text-field>
                    </v-card-title>
                    <v-spacer></v-spacer>
                    <v-dialog
                        v-model="dialog"
                        max-width="500px"
                    >
                        <template v-slot:activator="{ on, attrs }">
                            <v-btn
                                color="primary"
                                dark
                                class="mb-2"
                                v-bind="attrs"
                                v-on="on"
                            >
                                Agregar Nuevo Item
                            </v-btn>
                        </template>
                        <v-card>
                            <v-card-title>
                                <span class="headline">{{ formTitle }}</span>
                            </v-card-title>

                            <v-card-text>
                                <v-container>
                                    <v-row>
                                        <v-col
                                            cols="12"
                                            sm="6"
                                            md="4"
                                        >
                                            <v-text-field
                                                v-model="editedItem.name"
                                                label="Nombre Item"
                                            ></v-text-field>
                                        </v-col>
                                        <v-col
                                            cols="12"
                                            sm="6"
                                            md="4"
                                        >
                                            <v-text-field
                                                v-model="editedItem.img_url"
                                                label="Icono"
                                            ></v-text-field>
                                        </v-col>
                                        <v-col
                                            cols="12"
                                            sm="6"
                                            md="4"
                                        >
                                            <v-text-field
                                                v-model="editedItem.quality"
                                                label="Calidad"
                                            ></v-text-field>
                                        </v-col>
                                        <v-col
                                            cols="12"
                                            sm="6"
                                            md="4"
                                        >
                                            <v-text-field
                                                v-model="editedItem.item_lore"
                                                label="Historia"
                                            ></v-text-field>
                                        </v-col>
                                        <v-col
                                            cols="12"
                                            sm="6"
                                            md="4"
                                        >
                                            <v-text-field
                                                v-model="editedItem.drop_from"
                                                label="Obtención"
                                            ></v-text-field>
                                        </v-col>
                                        <v-col
                                            cols="12"
                                            sm="6"
                                            md="4"
                                        >
                                            <v-text-field
                                                v-model="editedItem.fk_id_seasons"
                                                label="Temporada"
                                            ></v-text-field>
                                        </v-col>
                                        <v-col
                                            cols="12"
                                            sm="6"
                                            md="4"
                                        >
                                            <v-text-field
                                                v-model="editedItem.fk_id_weapon"
                                                label="Es Arma?"
                                            ></v-text-field>
                                        </v-col>
                                        <v-col
                                            cols="12"
                                            sm="6"
                                            md="4"
                                        >
                                            <v-text-field
                                                v-model="editedItem.fk_id_armor"
                                                label="Es Armadura?"
                                            ></v-text-field>
                                        </v-col>
                                        <v-col
                                            cols="12"
                                            sm="6"
                                            md="4"
                                        >
                                            <v-text-field
                                                v-model="editedItem.fk_id_accessory"
                                                label="Es Accesorio?"
                                            ></v-text-field>
                                        </v-col>
                                        <v-col
                                            cols="12"
                                            sm="6"
                                            md="4"
                                        >
                                            <v-text-field
                                                v-model="editedItem.fk_id_book"
                                                label="Es Libro?"
                                            ></v-text-field>
                                        </v-col>

                                    </v-row>
                                </v-container>
                            </v-card-text>

                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn
                                    color="blue darken-1"
                                    text
                                    @click="close"
                                >
                                    Cancel
                                </v-btn>
                                <v-btn
                                    color="blue darken-1"
                                    text
                                    @click="save"
                                >
                                    Guardar
                                </v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-dialog>
                    <v-dialog v-model="dialogDelete" max-width="500px">
                        <v-card>
                            <v-card-title class="headline">¿Estás seguro de eliminar este Item?</v-card-title>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn color="blue darken-1" text @click="closeDelete">Cancel</v-btn>
                                <v-btn color="blue darken-1" text @click="deleteItemConfirm">OK</v-btn>
                                <v-spacer></v-spacer>
                            </v-card-actions>
                        </v-card>
                    </v-dialog>
                </v-toolbar>
            </template>

            <template v-slot:item.img_url="{ item }">

                <v-img :src="item.img_url" :alt="item.name" width="50px" height="50px"></v-img>

            </template>

            <template v-slot:item.fk_id_seasons="{ item }">

                {{item.season_name}}

            </template>

            <template v-slot:item.fk_id_weapon="{ item }">

                <h1 v-if="item.fk_id_weapon!== null" >Arma</h1>
                <h1 v-if="item.fk_id_armor!== null" >Armadura</h1>
                <h1 v-if="item.fk_id_accessory!== null" >Accesorio</h1>
                <h1 v-if="item.fk_id_book!== null" >Libro</h1>

            </template>

            <template v-slot:item.actions="{ item }">
                <v-icon
                    small
                    class="mr-2"
                    @click="editItem(item)"
                >
                    mdi-pencil
                </v-icon>
                <v-icon
                    small
                    @click="deleteItem(item)"
                >
                    mdi-delete
                </v-icon>
            </template>

            <template v-slot:expanded-item="{ headers, item }">
                <td :colspan="headers.length">
                    <h2>Historia</h2>
                    <div>
                        {{ item.item_lore }}
                    </div>
                </td>
            </template>

            <template v-slot:no-data>
                <v-btn
                    color="primary"
                    @click="initialize"
                >
                    Recargar
                </v-btn>
            </template>

        </v-data-table>
    </v-app>
</template>

<script>
export default {
    name: 'AdminItem',
    data() {
        return {
            search:'',
            dialog: false,
            dialogDelete: false,
            expanded: [],
            singleExpand: true,
            numberOfPages: '',
            titulo: 'Administración de Objetos',
            etiqueta_titulo: [
                {
                    text: 'Nombre',
                    align: 'start',
                    sortable: false,
                    value: 'name',
                },
                {text: 'Icono', value: 'img_url'},
                {text: 'Calidad', value: 'quality'},
                {text: 'Obtención', value: 'drop_from'},
                {text: 'Temporada', value: 'sea_name'},
                {text: 'Tipo', value: 'fk_id_weapon'},
                {text: 'Actualizado por', value: 'admin'},
                {text: 'Actions', value: 'actions', sortable: false},
            ],
            d2_items: [],
            editedIndex: -1,
            updatedItem: false,
            editedItem: {
                id:"",
                name: '',
                img_url: '',
                quality: '',
                item_lore: '',
                drop_from: '',
                fk_id_seasons: '',
                fk_id_weapon: null,
                fk_id_armor: null,
                fk_id_accessory: null,
                fk_id_book: null,
            },
            defaultItem: {
                id: "",
                name: '',
                img_url: '',
                quality: '',
                item_lore: '',
                drop_from: '',
                fk_id_seasons: '',
                fk_id_weapon: null,
                fk_id_armor: null,
                fk_id_accessory: null,
                fk_id_book: null,
            },
        }
    },

    computed: {
        formTitle () {
            return this.editedIndex === -1 ? 'Nuevo Item' : 'Editar Item'
        },
    },

    watch: {
        dialog (val) {
            val || this.close()
        },
        dialogDelete (val) {
            val || this.closeDelete()
        },
    },

    created () {
        this.initialize()
    },

    methods: {
        initialize () {
            axios.get('LoreItem')
                .then(datos => {
                    console.log(datos)
                    this.d2_items = datos.data
                })
                .catch((error) =>
                { console.log(error);

                })
                .then(() =>{

                })
        },
        create_item () {
            axios.post('LoreItem',this.editedItem)
                .then(function (response){
                    console.log(response)
                })
                .catch((error) =>
                { console.log(error);

                })
                .then(() =>{

                })
        },
        update_item () {
            axios.put('LoreItem/' + this.editedItem.id, this.editedItem)
                .then(function (response){
                    console.log(response)
                })
                .catch((error) =>
                { console.log(error);

                })
                .then(() =>{

                })
        },

        editItem (item) {
            this.editedIndex = this.d2_items.indexOf(item)
            this.editedItem = Object.assign({}, item)
            this.dialog = true
            this.updatedItem = true
        },

        deleteItem (item) {
            this.editedIndex = this.d2_items.indexOf(item)
            this.editedItem = Object.assign({}, item)
            this.dialogDelete = true
        },

        deleteItemConfirm () {
            this.d2_items.splice(this.editedIndex, 1)
            axios.delete('LoreItem/' + this.editedItem.id)
                .then((respuesta) => {
                    console.log(respuesta)
                }, (error) => {
                    console.log(error)
                })
            this.closeDelete()
        },

        close () {
            this.dialog = false
            this.$nextTick(() => {
                this.editedItem = Object.assign({}, this.defaultItem)
                this.editedIndex = -1
                this.updatedItem = false
                this.initialize()
            })
        },

        closeDelete () {
            this.dialogDelete = false
            this.$nextTick(() => {
                this.editedItem = Object.assign({}, this.defaultItem)
                this.editedIndex = -1
            })
        },

        save () {
            if (this.editedIndex > -1) {
                Object.assign(this.d2_items[this.editedIndex], this.editedItem)
                this.update_item()
            } else {
                this.d2_items.push(this.editedItem)
                this.create_item()
            }
            this.close()
        },
    },
}
</script>

<style scoped>

</style>
