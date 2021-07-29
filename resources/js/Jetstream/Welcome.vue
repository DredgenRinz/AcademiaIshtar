<template>
    <div>
        <b-carousel
            id="carousel"
            v-model="slide"
            :interval="3500"
            controls
            indicators
            img-width="1024"
            img-height="480"
            style="text-shadow: 1px 1px 2px #333;"
            @sliding-start="onSlideStart"
            @sliding-end="onSlideEnd"
        >
            <!-- Text slides with image -->
            <b-carousel-slide
                caption="Solsticio de Héroes"
                text="Termina el 3 de Agosto"
                img-src="https://www.bungie.net/pubassets/pkgs/151/151738/WJ_Solstice_of_Heroes_Presskit_Tower_07.jpg?cv=3983621215&av=4051991004"
            ></b-carousel-slide>

            <!-- Slides with custom text -->
            <b-carousel-slide img-src="https://www.bungie.net/pubassets/pkgs/151/151738/JB_Vault-of_Glass_GEAR_16-9.jpg?cv=3983621215&av=4051991004">
                <h1>CÁMARA DE CRISTAL MAESTRO YA DISPONIBLE</h1>
            </b-carousel-slide>

            <b-carousel-slide
                caption="Ocaso Gran Maestro: La Deshonrada"
                text="Obtén precio sombrío, Palíndromo o el Enjambre antes el 3 de Agosto"
                img-src="https://www.bungie.net/pubassets/pkgs/148/148944/S13_Strike_Weapons.jpg?cv=3983621215&av=4051991004"
            ></b-carousel-slide>

            <!-- Slides with img slot -->
            <!-- Note the classes .d-block and .img-fluid to prevent browser default image alignment -->
            <b-carousel-slide>
                <template #img>
                    <img
                        class="d-block img-fluid w-100"
                        width="1024"
                        height="480"
                        src="https://www.bungie.net/pubassets/pkgs/152/152019/Destiny_Showcase_Tune-in_ES-MX-16-9.jpg?cv=3983621215&av=4051991004"
                        alt="image slot"
                    >
                </template>
            </b-carousel-slide>
        </b-carousel>
    </div>
</template>

<script>
import JetApplicationLogo from "@/Jetstream/ApplicationLogo";

export default {
    data() {
        return {
            slide: 0,
            sliding: null
        }
    },
    components: {
        JetApplicationLogo,
    },
    methods: {
        onSlideStart(slide) {
            this.sliding = true
        },
        onSlideEnd(slide) {
            this.sliding = false
        }
    }
}
</script>
