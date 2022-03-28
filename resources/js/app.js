/**
 Copyright 2022 Agnese Salutari.
 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at
 http://www.apache.org/licenses/LICENSE-2.0
 Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on
 an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and limitations under the License
 **/

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue';
import Vuetify from "vuetify";
import "vuetify/dist/vuetify.min.css";
import '@mdi/font/css/materialdesignicons.css'

Vue.use(Vuetify);

window.axios = require('axios');

// require('./bootstrap');
//
// window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// import ComponentName from ...;
// Vue.use('component-name', ComponentName);
import TopMenu from "./components/home/TopMenu";
Vue.component("TopMenu", TopMenu);

import Coop from "./components/home/Coop";
Vue.component("Coop", Coop);

import CoopsCollection from "./components/home/CoopsCollection";
Vue.component("CoopsCollection", CoopsCollection);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Coccapp from "./Coccapp";

const app = new Vue({
    el: '#app',
    vuetify: new Vuetify({
        icons: {iconfont: "mdi"},
        // theme: {dark: false}
    }),
    components: {
        Coccapp
    },
    template: '<Coccapp/>',
});
