import emitter from 'tiny-emitter/instance'
import { createApp } from 'vue'

import modal from '../components/modal.vue'

function setCookie(name, value, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

let showModalHomepage = true;

if (getCookie('banner') !== "") {
    showModalHomepage = false;
}
// Vue app
const app = createApp({
    data() {
        return {
            showModal: false,
            showModalHomepage: showModalHomepage,
        }
    },
})


app.component('v-modal', modal)

app.mount('#modal')

// Emitter
window.$event = emitter

window.getCookie = getCookie;
window.setCookie = setCookie;
