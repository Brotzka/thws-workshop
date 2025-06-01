import './bootstrap';
import 'bootstrap';

import { createApp } from 'vue';
import AlertButton from './components/AlertButton.vue';

const app = createApp({})

app.component('alert-button', AlertButton);

app.mount('#app');
