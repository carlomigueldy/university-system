import '@mdi/font/css/materialdesignicons.css'
import 'vuetify/dist/vuetify.min.css'
import Vue from 'vue'
import Vuetify from 'vuetify'
import App from './App'

Vue.use(Vuetify)

const app = new Vue({
    el: '#app',
    components: { App },
    vuetify: new Vuetify({
        icons: {
            iconfont: 'mdi',
        }
    }),
});
