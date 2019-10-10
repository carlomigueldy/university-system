require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    data: () => ({
        auth: {},
        access_token: '',
        form: {
            email: '',
            password: '',
        },
    }),
    mounted() {
        // this.authUser()
    },
    methods: {
        authUser() {
            axios.get('api/auth/user', {
                headers: {
                    'Authorization': `Bearer ${this.access_token}`
                }
            })
            .then(res => this.auth = res.data)
            .catch(err => console.log(err.response))
        },
        login() {
            axios.post('api/auth/login', {
                email: this.form.email, 
                password: this.form.password,
            })
            .then(res => {
                this.access_token = res.data.access_token
            })
            .catch(err => console.log(err.response))
        },
    }
});
