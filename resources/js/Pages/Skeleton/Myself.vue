<template>
    <div data-app>
        <v-layout row justify-center>
            <v-dialog
                v-model="dialog"
                max-width="290">
                <v-card
                    class="mx-auto"
                    max-width="344"
                    outlined
                    >
                        <v-list-item three-line>
                            <v-list-item-content>
                                <div class="overline mb-4"></div>
                                <v-list-item-title class="headline mb-1">Aquí se muestra tu perfil</v-list-item-title>
                                <v-list-item-subtitle>Podrás editar tu usuario, email, contraseña o Eliminar tu cuenta</v-list-item-subtitle>
                            </v-list-item-content>
                        </v-list-item>

                        <v-card-actions>
                            <v-btn text onclick="closeDialog()">OK</v-btn>
                        </v-card-actions>
                    </v-card>
            </v-dialog>
        </v-layout>
    </div>
</template>

<script>

    export default {
        data(){
          return{
              dialog: false
          }
        },
        props: [

        ],
        methods: {
            showModal(){
                this.dialog = true;
            },
            closeDialog(){
                this.dialog = false;
            }
        }
    }

</script>

<style>

</style>
