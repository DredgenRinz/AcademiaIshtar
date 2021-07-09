<template>
    <app-layout-no-log>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <guias />
                </div>
            </div>
        </div>
    </app-layout-no-log>
</template>

<script>
import AppLayoutNoLog from '@/Layouts/AppLayoutNoLog'
import guias from "@/guides/guias";

export default {
    components: {
        AppLayoutNoLog,
        guias
    },
}
</script>
