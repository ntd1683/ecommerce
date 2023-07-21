<script setup>
    import { ref } from 'vue'

    const { value } = defineProps({
        name: {
            type: String,
            required: true,
        },
        value: {
            type: String,
            required: true,
        },
    })

    const modalValue = ref(value)
</script>

<template>
    <div class="flex relative">
        <input type="color" class="opacity-0 w-0 absolute top-8" ref="colorRef" v-model="modalValue" />

        <span
            class="w-5 h-5 left-2.5 top-4 border border-gray-300 absolute"
            :style="{ 'background-color': modalValue }"
            ref="previewColor"
            @click="$refs.colorRef.click()"
        ></span>
        <input
            :name="name"
            v-model="modalValue"
            type="text"
            autocomplete="off"
            spellcheck="false"
            class="w-full mt-2 pl-10 py-1.5 border-gray-300 focus:border-primary focus:ring-primary rounded-md shadow-sm"
            ref="input"
            pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$"
        />
    </div>
</template>
