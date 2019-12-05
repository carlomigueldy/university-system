require('./bootstrap');
window.Vue = require('vue');
import App from './App'

const app = new Vue({
    el: '#app',
    components: { App },
});
