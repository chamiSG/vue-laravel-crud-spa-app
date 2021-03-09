import AllProduct from './components/AllProduct.vue';
import CreateProfile from './components/CreateProfile.vue';
import EditProduct from './components/EditProduct.vue';
import Profile from './components/Profile.vue';
 
export const routes = [
    {
        name: 'home',
        path: '/',
        component: Profile
    },
    {
        name: 'create',
        path: '/create',
        component: CreateProfile
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditProduct
    },
    {
        name: 'profile',
        path: '/profile',
        component: Profile
    }
];