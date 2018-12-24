
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');
var Vue = require('vue');
//window.Vue = Vue;
Vue.component('task', require('./components/Task.vue'));