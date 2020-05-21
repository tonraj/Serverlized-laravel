import VueRouter from 'vue-router';
import Deploy from './components/Deploy';
import Dashboard from './components/Dashboard';
import ManageServer from './components/ManageServer';


let routes = [
    {
        path: '/',
        component: Dashboard
    },
    {
        path: '/deploy',
        component: Deploy
    },
    {
        path: '/manage/:id',
        component: ManageServer
    }
];
 
 
export default new VueRouter({
    routes,
});