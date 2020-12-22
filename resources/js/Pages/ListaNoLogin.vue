<template>
    <app-layout-no-log>
        <div class="py-12" style="margin-top: 5%">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <ListaItems />
                </div>
            </div>
        </div>
    </app-layout-no-log>
</template>

<script>
import AppLayoutNoLog from '@/Layouts/AppLayoutNoLog'
import ListaItems from "@/Items/ListaItems";

export default {
    components: {
        AppLayoutNoLog,
        ListaItems
    },
}
</script>
