<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';

const avatar = {
    color: "transparent",
    tamano: 90,
    imagen: "http://localhost/img/DIW/logoMusic_nonebg.png"
}

</script>

<template>

    <v-container fluid class="fondoA">
        <v-row justify="center" class="h-screen m-0">
            <v-col cols="lg-6 md-12 sm-12" class="mt-3">
                <v-container class="text-center">
                    <application-logo :tamano="avatar.tamano" :color-avatar="avatar.color"
                        :imagen="avatar.imagen"></application-logo>
                </v-container>
                <slot></slot>
            </v-col>
        </v-row>
    </v-container>

</template>

<style scoped>
@import url('../../css/estilo.css');
</style>
