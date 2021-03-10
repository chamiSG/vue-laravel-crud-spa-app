import AllResume from './views/AllResume.vue';
import CreateResume from './views/CreateResume.vue';
import EditProduct from './views/EditProduct.vue';
import Resume from './views/Resume.vue';
 
export const routes = [
    {
        name: 'home',
        path: '/',
        component: Resume
    },
    {
        name: 'create',
        path: '/create',
        component: CreateResume
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditProduct
    },
    {
        name: 'resume',
        path: '/resume',
        component: AllResume
    }
];