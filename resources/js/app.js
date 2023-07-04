import './bootstrap';
import { createApp, defineAsyncComponent } from 'vue'


import example from './component/example.vue'

// Vue app
const app = createApp({})

app.component('v-example', example)

app.mount('#app')
