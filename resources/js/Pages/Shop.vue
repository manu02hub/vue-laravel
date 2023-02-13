<script setup>
import { Head } from '@inertiajs/vue3';
import ShopLayout from '@/Layouts/ShopLayout.vue';

</script>

<template>

    <Head title="Shop" />

    <ShopLayout>
        <v-row>
            <v-col cols="lg-12 md-12 sm-12" v-for="song in $page.props.cancionesHome">
                <v-card theme="dark" width="95%" class="ms-6 fondoB">
                    <div class="d-flex flex-no-wrap">
                        <v-avatar class="ma-3" size="125" rounded="0">
                            <v-img :src="song.img"></v-img>
                        </v-avatar>

                        <v-row>
                            <v-col cols="12">
                                <v-card-title class="text-h5">
                                    {{ song.titulo }}
                                </v-card-title>
                                <v-card-subtitle>Artistas: {{ song.cantantes }}</v-card-subtitle>
                                <audio controls player class="mt-3 ms-2 me-2 w-75">
                                    <source :src="song.mp3" type="audio/mp3">
                                </audio>
                            </v-col>
                        </v-row>
                    </div>
                </v-card>
            </v-col>
        </v-row>
    </ShopLayout>
</template>

<style scoped>

@import url('../../css/estilo.css');

</style>
