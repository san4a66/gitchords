import {createApp} from 'vue/dist/vue.esm-bundler.js'
import Index from '../js/components/IndexComponent.vue'
import router from './router'

import'./bootstrap';

createApp({
    components:{Index},

}).use(router).mount('#app')
