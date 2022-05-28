import { createRouter,createWebHashHistory } from 'vue-router'
import Home from "./Home";
import AllParticipants from "./components/Participants/AllParticipants";
import AddParticipants from "./components/Participants/AddParticipants";
import EditParticipants from "./components/Participants/EditParticipant";
import Register from './components/Authentification/Register.vue';
import Login from './components/Authentification/Login.vue';
import Profile from './components/Authentification/Profile.vue';
import Logout from './components/Authentification/Logout.vue';
const routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/participants',
        name: 'participants',
        component: AllParticipants
    },
    {
        path: '/addParticipant',
        name: 'addParticipant',
        component: AddParticipants
    },
    {
        path: '/editParticipant',
        name: 'editParticipant',
        component: EditParticipants
    },
    {
        name: 'register',
        path: '/register',
        component: Register
    },
    {
        name: 'login',
        path: '/login',
        component: Login
    },
    {
        name: 'profile',
        path: '/profile',
        component: Profile
        
    },
    {
        name: 'logout',
        path: '/logout',
        component: Logout
    }
];
const router = createRouter({
    history: createWebHashHistory(),
    routes
})

export default router