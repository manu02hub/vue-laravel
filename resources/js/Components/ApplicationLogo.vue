<script setup>

defineProps({
    colorAvatar: String,
    tamano: Number,
    imagen: String
});

</script>


<template>
    <v-avatar :color="colorAvatar" :size="tamano">
        <v-img alt="Avatar" :src="imagen"></v-img>
    </v-avatar>
    <slot></slot>
</template>
