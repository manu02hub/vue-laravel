<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout>

        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <v-card theme="dark" id="cartaLogin" class="cartaAuth">
            <v-container>
                <v-card-title class="text-cyan-accent-2 mt-3">BIENVENIDO DE NUEVO</v-card-title>
                <v-form @submit.prevent="submit">

                    <TextInput id="email" label="Correo electronico" type="email" v-model="form.email" required />
                    <!-- <InputError :message="form.errors.email" /> -->

                    <TextInput id="password" label="Contraseña" type="password" v-model="form.password" required />
                    <!-- <InputError :message="form.errors.password" /> -->

                    <Checkbox name="remember" v-model:checked="form.remember" />


                    <v-card-actions>
                        <div class="flex items-center justify-end me-5">
                            <Link :href="route('register')"
                            class="text-decoration-none text-cyan-accent-2">
                            ¿Aún no tienes cuenta?
                            </Link>

                            <PrimaryButton class="ml-4 bg-cyan-accent-2" :class="{ 'opacity-25': form.processing }"
                                id="btnRegistro" :disabled="form.processing">
                                Iniciar Sesión
                            </PrimaryButton>
                        </div>
                    </v-card-actions>
                </v-form>
            </v-container>
        </v-card>
    </GuestLayout>
</template>

<style scoped>
#cartaLogin{
    opacity: 0.8;
    box-shadow: 0px 0px 46px -10px rgba(24, 255, 255, 0.75);
}
</style>
