<template>
    <app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <welcome />
                    <v-divider></v-divider>
                    <news />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayoutNoLog'
    import Welcome from '@/Jetstream/Welcome'
    import News from '@/Pages/news'

    export default {
        components: {
            AppLayout,
            Welcome,
            News,
        },
    }
</script>
