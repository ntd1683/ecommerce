import emitter from 'tiny-emitter/instance'
import { createApp } from 'vue'

import colorInput from '../components/colorInput.vue'
import modal from '../components/modal.vue'

// Vue app
const app = createApp({
    data() {
        return {
            showModal: false,
        }
    },
})

// Vue app
const form = createApp({})

app.component('v-modal', modal)
form.component('v-color', colorInput)

form.mount('#form-vue')

app.mount('#modal')

// Emitter
window.$event = emitter
