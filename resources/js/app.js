
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

<<<<<<< HEAD
Vue.component('navbar', require('./components/Navbar.vue').default);
Vue.component('general-movies', require('./components/GeneralMovies.vue').default);
Vue.component('edit-profile', require('./components/EditProfile.vue').default);
Vue.component('pop-up-vid', require('./components/PopUpVid.vue').default);

=======

Vue.component('navbar', require('./components/Navbar.vue').default);
Vue.component('general-movies', require('./components/GeneralMovies.vue').default);
Vue.component('logo', require('./components/Logo.vue').default);
Vue.component('login', require('./components/Login.vue').default);
Vue.component('signin', require('./components/Signin.vue').default);
Vue.component('slogan', require('./components/Slogan.vue').default);
Vue.component('chooseuser', require('./components/Chooseuser.vue').default);
>>>>>>> e498e711745ef7c50b75d490637bd51a93c361a0
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
