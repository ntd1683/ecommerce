import emitter from 'tiny-emitter/instance'
import { createApp } from 'vue'

import modal from '../components/modal.vue'

// Vue app
const app = createApp({
    data() {
        return {
            showModal: false,
        }
    },
})

app.component('v-modal', modal)

app.mount('#modal')

// Emitter
window.$event = emitter
