<script>

import { Link } from '@inertiajs/vue3';
import ApplicationLogoVue from '@/Components/ApplicationLogo.vue';

export default {
    data() {
        return {
            canLogin: Boolean,
            canRegister: Boolean,
            avatar: {
                color: "transparent",
                tamano: 64,
                imagen: "http://localhost/img/DIW/logoMusic_nonebg.png"
            }
        }
    },
    components: {
        Link,
        ApplicationLogoVue,
    }
}

</script>

<template>

    <v-app id="inspire">
        <v-app-bar flat color="grey-darken-4">
            <v-container class="fill-height d-flex align-center">
                <ApplicationLogoVue :color-avatar="avatar.color" :tamano="avatar.tamano" :imagen="avatar.imagen"
                    class="me-3 ms-4">
                </ApplicationLogoVue>

                <v-btn variant="text" class="text-cyan-accent-2">
                    MUSIC WORLD
                </v-btn>

                <v-spacer></v-spacer>

                <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <v-btn variant="text" v-if="$page.props.auth.user" class="mt-1">
                        <Link :href="route('dashboard')" class="text-cyan-accent-2 text-decoration-none">DASHBOARD
                        </Link>
                    </v-btn>


                    <template v-else>
                        <v-btn variant="text">
                            <Link :href="route('login')" class="text-cyan-accent-2 text-decoration-none">Log
                            in</Link>
                        </v-btn>

                        <v-btn variant="text" v-if="canRegister">
                            <Link :href="route('register')" class="text-cyan-accent-2 text-decoration-none">
                            Register</Link>
                        </v-btn>

                    </template>
                </div>

            </v-container>
        </v-app-bar>


        <v-main class="bg-grey-darken-4 mt-5">
            <v-container>
                <v-row>
                    <v-col cols="12">
                        <v-sheet min-height="70vh" rounded="lg" theme="dark">
                            <slot></slot>
                        </v-sheet>
                    </v-col>
                </v-row>
            </v-container>
        </v-main>

    </v-app>

</template>

