<template>
    <v-app>
        <v-container fluid dark>
        <v-data-iterator
            :items="d2_items"
            :items-per-page.sync="itemsPerPage"
            :page="page"
            :search="search"
            :sort-by="sortBy.toLowerCase()"
            :sort-desc="sortDesc"
            :single-expand="singleExpand"
            hide-default-footer
            loading
            loading-text="Cargando Manifiesto de Destiny 2... Un momento por favor..."
        >

            <template v-slot:header>
                <v-toolbar
                    dark
                    color="blue darken-3"
                    class="mb-1"
                >
                    <v-text-field
                        v-model="search"
                        clearable
                        flat
                        solo-inverted
                        hide-details
                        prepend-inner-icon="mdi-magnify"
                        label="Buscar Item"
                    ></v-text-field>
                    <!--
                    <template v-if="$vuetify.breakpoint.mdAndUp">
                        <v-spacer></v-spacer>
                        <v-select
                            v-model="sortBy"
                            flat
                            solo-inverted
                            hide-details
                            :items="etiqueta_titulo"
                            prepend-inner-icon="mdi-magnify"
                            label="Sort by"
                        ></v-select>
                        <v-spacer></v-spacer>
                        <v-btn-toggle
                            v-model="sortDesc"
                            mandatory
                        >
                            <v-btn
                                large
                                depressed
                                color="blue"
                                :value="false"
                            >
                                <v-icon>mdi-arrow-up</v-icon>
                            </v-btn>
                            <v-btn
                                large
                                depressed
                                color="blue"
                                :value="true"
                            >
                                <v-icon>mdi-arrow-down</v-icon>
                            </v-btn>
                        </v-btn-toggle>
                    </template>
                    -->
                </v-toolbar>
            </template>

            <template v-slot:default="{ items, isExpanded, expand }">
                <v-row>
                    <v-col
                        v-for="item in d2_items"
                        :key="item.name"
                        cols="12"
                        sm="6"
                        md="4"
                        lg="3"
                    >
                        <v-card>
                            <v-card-title>
                                <h4>{{ item.name }}</h4>
                            </v-card-title>
                            <v-card-title>
                                <v-img :src="item.img_url" :alt="item.name"></v-img>
                            </v-card-title>
                            <v-switch
                                :input-value="isExpanded(item)"
                                :label="isExpanded(item) ? 'Expanded' : 'Closed'"
                                class="pl-4 mt-0"
                                @change="(v) => expand(item, v)"
                            ></v-switch>
                            <v-divider></v-divider>
                            <v-list
                                v-if="isExpanded(item)"
                                dense
                            >
                                <v-list-item>
                                    <v-list-item-content>Temporada: </v-list-item-content>
                                    <v-list-item-content class="align-end">
                                        {{ item.sea_name }}
                                    </v-list-item-content>
                                </v-list-item>
                                <v-list-item>
                                    <v-list-item-content>Obtenido de:</v-list-item-content>
                                    <v-list-item-content class="align-end">
                                        {{ item.drop_from }}
                                    </v-list-item-content>
                                </v-list-item>
                            </v-list>
                        </v-card>
                    </v-col>
                </v-row>
            </template>

            <template v-slot:footer>
                <v-row
                    class="mt-2"
                    align="center"
                    justify="center"
                >
                    <span class="grey--text">Items per page</span>
                    <v-menu offset-y>
                        <template v-slot:activator="{ on, attrs }">
                            <v-btn
                                dark
                                text
                                color="primary"
                                class="ml-2"
                                v-bind="attrs"
                                v-on="on"
                            >
                                {{ itemsPerPage }}
                                <v-icon>mdi-chevron-down</v-icon>
                            </v-btn>
                        </template>
                        <v-list>
                            <v-list-item
                                v-for="(number, index) in itemsPerPageArray"
                                :key="index"
                                @click="updateItemsPerPage(number)"
                            >
                                <v-list-item-title>{{ number }}</v-list-item-title>
                            </v-list-item>
                        </v-list>
                    </v-menu>

                    <v-spacer></v-spacer>

                    <span
                        class="mr-4
            grey--text"
                    >
            Page {{ page }} of {{ numberOfPages }}
          </span>
                    <v-btn
                        fab
                        dark
                        color="blue darken-3"
                        class="mr-1"
                        @click="formerPage"
                    >
                        <v-icon>mdi-chevron-left</v-icon>
                    </v-btn>
                    <v-btn
                        fab
                        dark
                        color="blue darken-3"
                        class="ml-1"
                        @click="nextPage"
                    >
                        <v-icon>mdi-chevron-right</v-icon>
                    </v-btn>
                </v-row>
            </template>

        </v-data-iterator>
        </v-container>
    </v-app>
</template>

<script>
export default {
    name: 'AdminItem',
    data() {
        return {
            itemsPerPageArray: [4,8,12],
            search:'',
            filter: {},
            sortDesc: false,
            page: 1,
            itemsPerPage: 4,
            sortBy: 'name',
            dialog: false,
            dialogDelete: false,
            expanded: [],
            singleExpand: true,
            titulo: 'Administración de Objetos',
            etiqueta_titulo: [
                'Nombre',
                'Icono',
                'Calidad',
                'Obtenido',
                'Temporada',
                'Tipo',
            ],
            d2_items: [],
            editedIndex: -1,
            updatedItem: false,
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
        }
    },

    computed: {
        formTitle () {
            return this.editedIndex === -1 ? 'Nuevo Item' : 'Editar Item'
        },
        numberOfPages () {
            return Math.ceil(this.d2_items.length / this.itemsPerPage)
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
            console.log(this.$page.user.id)
            axios.get('Inventario/'+this.$page.user.id)
                .then(datos => {
                    console.log(datos.data)
                    this.d2_items = datos.data
                })
                .catch((error) =>
                { console.log(error);

                })
                .then(() =>{

                })
        },
        update_item () {
            axios.put('Inventario/' + this.editedItem.id, this.editedItem)
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
            axios.delete('Inventario/' + this.editedItem.id)
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
        nextPage () {
            if (this.page + 1 <= this.numberOfPages) this.page += 1
        },
        formerPage () {
            if (this.page - 1 >= 1) this.page -= 1
        },
        updateItemsPerPage (number) {
            this.itemsPerPage = number
        },
    },
}
</script>

<style scoped>

</style>
