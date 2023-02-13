<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Dashboard" />

    <AdminLayout class="fondoB">

        <v-container>
            <v-row>
                <v-col cols="lg-3 md-4 sm-6" v-for="song in $page.props.canciones">
                    <v-card theme="dark" class="mt-8">
                        <v-card class="mt-3 mb-3 me-3 ms-3">
                            <v-img :src="song.img" height="200px" cover></v-img>
                        </v-card>
                        <v-card-title>
                            {{ song.titulo }}
                        </v-card-title>

                        <v-card-subtitle>
                            Artistas: {{ song.cantantes }}
                        </v-card-subtitle>

                        <audio controls player class="mt-3 ms-2 me-2 anchoAudio">
                            <source :src="song.mp3" type="audio/mp3">
                        </audio>

                        <v-card-actions>
                            <v-btn prepend-icon="mdi-pencil" color="yellow" size="small">
                                <Link :href="route('song-edit', song.id)" class="text-decoration-none text-yellow">
                                edit
                                </Link>
                            </v-btn>
                            <v-btn prepend-icon="mdi-delete" color="red-accent-4" size="small">
                                <Link :href="route('song-destroy', song.id)"
                                    class="text-decoration-none text-red-accent-4">
                                delete
                                </Link>
                            </v-btn>

                            <!-- <v-btn color="success" icon="mdi-play-circle" size="x-large" >
                            </v-btn> -->
                        </v-card-actions>
                    </v-card>
                </v-col>
            </v-row>

            <!-- <audio controls>
                <source src="http://localhost/img/DWES/p3/Yandel,%20Feid%20%20-%20Yandel%20150%20(Video%20Oficial).mp3" type="audio/mp3">
            </audio> -->

        </v-container>

    </AdminLayout>
</template>

<style scoped>

@import url('../../css/estilo.css');

</style>
