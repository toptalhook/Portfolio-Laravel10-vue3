import './bootstrap';

import {createApp} from "vue";
import app from "./components/App.vue";

import router from './router'
createApp(app).use(router).mount('#app')
