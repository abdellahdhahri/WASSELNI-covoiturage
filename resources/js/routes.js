import Accueil from './components/acceuil.vue';
import listepassagers from './components/Users/listepassagers.vue';
import listeTrajets    from './components/Trajets/listeTrajet.vue';
import AjouterTrajet    from './components/Trajets/AjouterTrajet.vue';
import detailTrajets  from './components/Trajets/detailTrajets.vue';
import recherche  from './components/Trajets/recherche.vue';
import EditTrajet  from './components/Trajets/Edittrajet.vue';
import Login from './components/authentification/login.vue';
import Dashboard from './components/admin/dashboard.vue';
import Register from './components/authentification/register.vue'
import about from './components/About.vue'
export const routes = [
    {
        name: "login",
        path: "/login",
        component: Login,
        },
        {
            name: "about",
            path: "/about",
            component: about,
            },
        {

            name: "dashboard",
            path: '/dashboard',
            component: Dashboard,
            
            },
            {
                name: "register",
                path: "/register",
                component: Register,
                },
{
name: 'accueil',
path: '/',
component: Accueil
},
{
name: 'listepassagers',
path: '/listepassagers',
component: listepassagers
},
{
name: 'listeTrajets',
path: '/listeTrajets',
component: listeTrajets
},
{
    name: 'AjouterTrajet',
    path: '/AjouterTrajet',
    component: AjouterTrajet,
    meta:{isAuth:true}
    },
{
    name: 'detailTrajets',
    path: '/detailTrajets/:id',
    component: detailTrajets
    }
    ,
{
    name: 'recherche',
    path: '/recherche/:trajetres',
    component: recherche,
    props: (route) => ({ trajetres: route.params.trajetres }),
   
    },
    {

        name: "Edittrajet",
        path: "/Edittrajet/:id",
        component: EditTrajet
    },
];