window.Vue = require('vue');

import App from './views/App.vue';

const app = new Vue({
    el: '#app',
    rende: h=> h(App)
});
