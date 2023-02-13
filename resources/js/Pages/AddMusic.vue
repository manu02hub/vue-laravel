<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import TextFile from '@/Components/TextFile.vue';
import InputError from '@/Components/InputError.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    titulo: '',
    cantantes: '',
    img: '',
    mp3: '',
    terms: false,

});

const submit = () => {
    form.post(route('song-store'));
};
</script>

<template>

    <Head title="AddMusic" />

    <AdminLayout id="fondoDashboard" class="fondoB">

        <v-container>
            <v-row justify="center">
                <v-col cols="lg-8 md-12 sm-12">
                    <v-card theme="dark">
                        <!-- <p>{{ $page.props.auth.user.id }}</p> -->
                        <v-container>
                            <v-card-title class="text-cyan-accent-2">Nueva Canción</v-card-title>
                            <v-form @submit.prevent="submit">

                                <!-- <TextInput id="id_user" type="text" v-model="form.id_user" :value=$page.props.auth.user.id /> -->

                                <TextInput id="titulo" label="Nombre de la Canción" type="text" v-model="form.titulo"
                                    required autofocus />
                                <InputError :message="form.errors.titulo" />

                                <TextInput id="cantantes" label="Cantantes" type="text" v-model="form.cantantes"
                                    required />
                                <InputError :message="form.errors.cantantes" />

                                <!-- <TextInput id="mp3" label="Cancion" type="password" v-model="form.password" required /> -->

                                <TextFile id="img" label="Cancion Imagen" v-model="form.img"
                                    prepend-icon="mdi-image-plus" required></TextFile>
                                <InputError :message="form.errors.img" />

                                <TextFile id="mp3" label="Cancion mp3" v-model="form.mp3" prepend-icon="mdi-music"
                                    required></TextFile>
                                <InputError :message="form.errors.mp3" />


                                <!-- <v-btn type="submit" block class="mt-2" color="cyan-accent-2">Submit</v-btn> -->
                                <PrimaryButton class="bg-cyan-accent-2" :class="{ 'opacity-25': form.processing }"
                                    id="btnRegistro" :disabled="form.processing">
                                    Añadir Canción
                                </PrimaryButton>
                            </v-form>
                        </v-container>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>

    </AdminLayout>
</template>

<style>

@import url('../../css/estilo.css');
/* #fondoDashboard {
    background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(0, 0, 0, 1) 0%, rgba(24, 255, 255, 1) 100%);
} */
</style>
