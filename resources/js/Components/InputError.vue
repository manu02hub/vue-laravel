<script setup>
defineProps(['message']);
</script>

<template>
    <!-- <div v-show="message">
        <p class="mt-1 text-red-accent-2">
            {{ message }}
        </p>
    </div> -->
    <div v-show="message">
        <span class="mt-1 text-red-accent-2">
            {{ message }}
        </span>
    </div>

</template>
