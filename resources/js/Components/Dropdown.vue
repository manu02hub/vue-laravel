<script setup>
</script>

<template>

    <v-menu transition="slide-y-transition" theme="dark">

        <template v-slot:activator="{ props }">
            <v-btn color="cyan-accent-2" class="ma-2" v-bind="props" variant="outlined">
                <slot name="trigger" />
            </v-btn>
        </template>
        <!-- <v-list>
            <v-list-item>
                <v-list-item-title>
                    <slot name="content" />
                </v-list-item-title>
            </v-list-item>
        </v-list> -->
    </v-menu>

</template>
