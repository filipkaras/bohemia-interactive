import Vue from 'vue';
import Companies from './components/Companies.vue';

require('./bootstrap');

window.Vue = Vue;

const app = new Vue({
    el: '#app',
    render: f => f(Companies)
});
