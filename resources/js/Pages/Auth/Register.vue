<script setup>
import InputLabel from '@/Components/InputLabel.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,

});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout>

        <Head title="Register" />

        <v-card theme="dark" class="cartaAuth" id="cartaRegistro">
            <v-container>
                <v-card-title class="text-cyan-accent-2 mt-3">BIENVENIDO A MUSIC WORLD</v-card-title>
                <v-form @submit.prevent="submit">
                    <TextInput id="name" label="Nombre de usuario" type="text" v-model="form.name" required autofocus />
                    <!-- <InputError :message="form.errors.name" /> -->

                    <TextInput id="email" label="Correo electronico" type="email" v-model="form.email" required />
                    <!-- <InputError :message="form.errors.email" /> -->

                    <TextInput id="password" label="Contraseña" type="password" v-model="form.password" required />
                    <!-- <InputError :message="form.errors.password" /> -->

                    <TextInput id="password_confirmation" label="Confirmar contreseña" type="password"
                        v-model="form.password_confirmation" required />
                    <!-- <InputError :message="form.errors.password_confirmation" /> -->
                    <v-card-actions>
                        <div class="flex items-center justify-end">
                            <Link :href="route('login')" class="text-decoration-none text-cyan-accent-2">
                            ¿Ya estás registrado?
                            </Link>

                            <PrimaryButton class="ml-4 bg-cyan-accent-2" :class="{ 'opacity-25': form.processing }"
                                id="btnRegistro" :disabled="form.processing">
                                Registrar
                            </PrimaryButton>
                        </div>
                    </v-card-actions>
                </v-form>
            </v-container>
        </v-card>
    </GuestLayout>
</template>

<style>

#cartaRegistro{
    opacity: 0.8;
    box-shadow: 0px 0px 46px -10px rgba(24, 255, 255, 0.75);
}
</style>
