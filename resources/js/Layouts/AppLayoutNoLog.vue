<template>
    <div class="min-h-screen destiny2">
        <nav class="bg-white border-b border-gray-100">
            <!-- Primary Navigation Menu -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="flex-shrink-0 flex items-center">
                            <inertia-link :href="route('dashboard')">
                                <v-img max-height="72" max-width="72" src="https://i.imgur.com/uO07Ybx.png"></v-img>
                            </inertia-link>
                        </div>

                        <!-- Navigation Links -->
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <jet-nav-link :href="route('Home')" :active="route().current('Home')">
                                Noticias
                            </jet-nav-link>
                            <jet-nav-link :href="route('guides.gnl')" :active="route().current('guides.gnl')">
                                Guías/Tutoriales
                            </jet-nav-link>
                            <jet-nav-link :href="route('items.listanl')" :active="route().current('items.listanl')">
                                Buscador de Items
                            </jet-nav-link>
                            <jet-nav-link :href="route('login')" :active="route().current('login')">
                                Iniciar Sesión
                            </jet-nav-link>
                            <jet-nav-link :href="route('register')" :active="route().current('register')">
                                Registrarse
                            </jet-nav-link>
                        </div>
                    </div>



                    <!-- Hamburger -->
                    <div class="-mr-2 flex items-center sm:hidden">
                        <button @click="showingNavigationDropdown = ! showingNavigationDropdown" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Responsive Navigation Menu -->
            <div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}" class="sm:hidden">
                <div class="pt-2 pb-3 space-y-1">
                    <jet-responsive-nav-link :href="route('Home')" :active="route().current('Home')">
                        Dashboard
                    </jet-responsive-nav-link>
                </div>

                <!-- Responsive Settings Options -->
                <div class="pt-4 pb-1 border-t border-gray-200">

                </div>
            </div>
        </nav>

        <!-- Page Heading -->


        <!-- Page Content -->
        <main>
            <slot></slot>
        </main>

        <!-- Modal Portal -->
        <portal-target name="modal" multiple>
        </portal-target>
    </div>
</template>

<script>
    import JetApplicationMark from '@/Jetstream/ApplicationMark'
    import JetDropdown from '@/Jetstream/Dropdown'
    import JetDropdownLink from '@/Jetstream/DropdownLink'
    import JetNavLink from '@/Jetstream/NavLink'
    import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink'

    export default {
        components: {
            JetApplicationMark,
            JetDropdown,
            JetDropdownLink,
            JetNavLink,
            JetResponsiveNavLink,
        },

        data() {
            return {
                isAdmin: false,
                management: [],
                showingNavigationDropdown: false,
            }
        },
        created(){
            this.listAdmin();

        },

        methods: {
            ifInArray(value){
                for(let i = 0; i < this.management.length; i++){
                    if(this.management.find(x => x.fk_id_user === value)){
                        console.log('DENTRO'+ this.isAdmin)
                        return true;
                    }
                }
                return false;


            },
            listAdmin(){
              axios.get('Admins')
                .then(datos => {
                    this.management = datos.data
                }
                )
            },

            logout() {
                axios.post(route('logout').url()).then(response => {
                    window.location = '/';
                })
            },
        }
    }
</script>
