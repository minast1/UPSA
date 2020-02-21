
require('./bootstrap');
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import { InertiaApp } from '@inertiajs/inertia-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import Vue from 'vue'

Vue.use(InertiaApp)
// Install BootstrapVue
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

const app = document.getElementById('app')

if(app){
	
new Vue({
  render: h => h(InertiaApp, {
    props: {
      initialPage: JSON.parse(app.dataset.page),
      resolveComponent: name => require(`./Pages/${name}`).default,
    },
  }),
}).$mount(app)

 }
