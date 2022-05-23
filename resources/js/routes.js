import AllLoan from './components/AllLoan.vue';
import CreateLoan from './components/CreateLoan.vue';
import EditLoan from './components/EditLoan.vue';

export const routes = [{
        name: 'home',
        path: '/',
        component: AllLoan
    },
    {
        name: 'create',
        path: '/create',
        component: CreateLoan
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditLoan
    }
];