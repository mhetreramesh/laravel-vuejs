import Vue from 'vue';

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

import App from './App.vue';
import CreateItem from './components/CreateItem.vue';
import DisplayItem from './components/DisplayItem.vue';
import EditItem from './components/EditItem.vue';
import DisplayCategory from './components/DisplayCategory.vue';

const routes = [
  {
        name: 'DisplayItem',
        path: '/',
        component: DisplayItem
  },
  {
    name: 'CreateItem',
    path: '/items/create',
    component: CreateItem
  },
  {
        name: 'EditItem',
        path: '/edit/:id',
        component: EditItem
  },
  {
        name: 'DisplayCategory',
        path: '/categories',
        component: DisplayCategory
  }
];

const router = new VueRouter({ mode: 'history', routes: routes});
new Vue(Vue.util.extend({ router }, App)).$mount('#app');
