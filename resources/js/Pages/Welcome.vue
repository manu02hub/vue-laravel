<script setup>
import { Head, Link } from '@inertiajs/vue3';

import NavPrincipal from '@/Components/NavPrincipal.vue';


defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});

</script>

<template>

    <Head title="Welcome" />

    <v-app id="inspire">

        <!-- <NavPrincipal></NavPrincipal> -->
        <v-app-bar extended>
            <v-container class="fill-height d-flex align-center">
                <v-avatar class="me-10 ms-4" color="black" size="32">
                    <v-img alt="Avatar" src="http://localhost/IMG/DWES/p2/logoRele.png"></v-img>
                </v-avatar>


                <v-btn variant="text">
                    <Link :href="route('dashboard')" class="ms-5" variant="text">SHOP</Link>
                </v-btn>
                <v-btn variant="text">
                    <Link :href="route('login')" class="ms-5" variant="text">QUIENES SOMOS</Link>
                </v-btn>

                <v-spacer></v-spacer>

                <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                        class="text-sm text-gray-700 dark:text-gray-500">Dashboard</Link>

                    <template v-else>
                        <v-btn variant="text">
                            <Link :href="route('login')" class="text-sm text-gray-700 dark:text-gray-500">Log
                            in</Link>
                        </v-btn>

                        <v-btn variant="text" v-if="canRegister">
                            <Link :href="route('register')" class="ml-4 text-sm text-gray-700 dark:text-gray-500">
                            Register</Link>
                        </v-btn>

                    </template>
                </div>

            </v-container>
        </v-app-bar>


        <v-main class="bg-grey-lighten-3">
            <v-container>
                <v-row>
                    <v-col>
                        <v-sheet min-height="70vh" rounded="lg">

                        </v-sheet>
                    </v-col>
                </v-row>
            </v-container>
        </v-main>

    </v-app>

</template>
