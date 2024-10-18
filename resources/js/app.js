import './bootstrap';
import { createApp } from 'vue';
import "@fortawesome/fontawesome-free/css/all.css";
import { createRouter, createWebHistory } from "vue-router";
import { routes } from "./routes";
import 'bootstrap/dist/css/bootstrap.min.css'
import App from './App.vue'
import 'animate.css';
import '@fortawesome/fontawesome-free/css/all.css';
import '@fortawesome/fontawesome-free/js/all.js';
import InputGroup from 'primevue/inputgroup';
import InputGroupAddon from 'primevue/inputgroupaddon';

/*import PrimeVue from 'primevue/config';
import 'primevue/resources/themes/lara-light-green/theme.css'*/
import 'primevue/resources/themes/saga-blue/theme.css'; // Remplacez par le thème de votre choix
import 'primevue/resources/primevue.min.css';
import 'primeicons/primeicons.css'
import PrimeVue from 'primevue/config';
import InputText from 'primevue/inputtext';
import Button from 'primevue/button';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import Accordion from 'primevue/accordion';
import AccordionTab from 'primevue/accordiontab';


let app = createApp(App)
const router = createRouter({
    history: createWebHistory(),
    routes: routes,
})
app.use(PrimeVue);
app.use(PrimeVue, { unstyled: true });
app.use(PrimeVue, { ripple: true });
app.use(PrimeVue, { inputStyle: "filled" });


//app.component('InputText ', inputtext);
app.component('Button', Button);
app.use(router);
app.mount("#app")
router.beforeEach(async (to, from, next) => {
    if (to.matched.some(record => record.meta.isAuth)) {
    let token = localStorage.getItem('token');
    if (!token) {
    next("/login");
    } else {
    console.log(token);
    next(); // Mettre next() ici après avoir vérifiél'authentification
    }
    } else {
    next(); // Mettre next() ici si la route n'a pas besoind'authentification
    }
    });