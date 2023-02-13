<script>

import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import { Link } from '@inertiajs/vue3';

export default {
    data: () => ({
        drawer: null,
        links: [
            ['mdi-inbox-arrow-down', 'Mi Música'],
            ['mdi-send', 'Cerrar Sesión'],
        ],
        avatar: {
            color: "transparent",
            tamano: 86,
            imagen: "http://localhost/img/DIW/logoMusic_nonebg.png"
        }
    }),

    components: {
        ApplicationLogo,
        Dropdown,
        DropdownLink,
        Link
    }
}
</script>

<template>
    <v-app id="inspire">

        <v-navigation-drawer v-model="drawer" theme="dark">

            <ApplicationLogo :color-avatar="avatar.color" :tamano="avatar.tamano" :imagen="avatar.imagen" class="mt-2">
                <Link :href="route('dashboard')" class="text-white text-decoration-none">MUSIC WORLD
                </Link>
            </ApplicationLogo>

            <v-list>
                <v-list-item prependIcon="mdi-music-box-multiple">
                    <Link :href="route('dashboard')" class="text-white text-decoration-none">Mi música
                    </Link>
                </v-list-item>
                <v-list-item prependIcon="mdi-music-note-plus">
                    <Link :href="route('song-create')" class="text-white text-decoration-none">Añadir canción
                    </Link>
                </v-list-item>
                <v-list-item prependIcon="mdi-logout">
                    <Link :href="route('logout')" class="text-white text-decoration-none" method="post" as="button">
                    Cerar Sesión
                    </Link>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>

        <v-main>
            <v-system-bar class="pb-6 pt-6" color="grey-darken-4">
                <v-spacer></v-spacer>
                <Dropdown>
                    <template #trigger>
                        {{ $page.props.auth.user.name }}
                    </template>
                </Dropdown>
            </v-system-bar>
            <v-container class="py-8 px-6" fluid>
                <v-row>
                    <slot></slot>
                </v-row>
            </v-container>
        </v-main>
    </v-app>

</template>

