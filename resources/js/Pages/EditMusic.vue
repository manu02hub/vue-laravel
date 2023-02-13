<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import TextFile from '@/Components/TextFile.vue';
import InputError from '@/Components/InputError.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

let form = useForm({
    titulo: '',
    cantantes: '',
    img: '',
    mp3: '',
    // terms: false,
});

const submit = (id) => {
    form.post(route('song-update', id));
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
                            <v-card-title class="text-cyan-accent-2">EDITAR CANCIÓN</v-card-title>
                            <v-form @submit.prevent="submit($page.props.cancion.id)">
                                <!-- :value=$page.props.cancion.id -->
                                <!-- <TextInput id="id" type="hidden" v-model="form.id"
                                    v-model:model-value="$page.props.cancion.id" /> -->

                                <TextInput clearable id="titulo" label="Nombre de la Canción" type="text"
                                    v-model='form.titulo' v-model:model-value="$page.props.cancion.titulo" />
                                <!-- <InputError :message="form.errors.titulo" /> -->

                                <TextInput clearable id="cantantes" label="Cantantes" type="text"
                                    v-model='form.cantantes' v-model:model-value="$page.props.cancion.cantantes" />
                                <!-- <InputError :message="form.errors.cantantes" /> -->

                                <!-- <TextInput id="mp3" label="Cancion" type="password" v-model="form.password" required /> -->

                                <TextFile id="img" label="Cancion Imagen" v-model="form.img"
                                    prepend-icon="mdi-image-plus"></TextFile>
                                <!-- <InputError :message="form.errors.img" /> -->

                                <TextFile id="mp3" label="Cancion mp3" v-model="form.mp3" prepend-icon="mdi-music">
                                </TextFile>
                                <!-- <InputError :message="form.errors.mp3" /> -->


                                <!-- <v-btn type="submit" block class="mt-2" color="cyan-accent-2">Submit</v-btn> -->
                                <PrimaryButton class="bg-cyan-accent-2" :class="{ 'opacity-25': form.processing }"
                                    id="btnRegistro" :disabled="form.processing">
                                    Editar Canción
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
</style>
