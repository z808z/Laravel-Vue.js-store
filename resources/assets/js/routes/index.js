import Vue from 'vue';
import VueRouter from 'vue-router';
import store from '../store';

Vue.use(VueRouter);

import MainAside from '../components/MainAsideComponent';
import ProductsList from '../components/ProductsListComponent';

const routes = [
    {
        name: 'main',
        path: '/',
        components: {
            default: MainAside
        }
    },
    {
        name: 'category',
        path: '/:category',
        components: {
            default: MainAside,
            products: ProductsList
        },
        props: {
            default: false,
            products: true
        }
    },
    {
        name: 'subcategory',
        path: '/:category/:subcategory',
        components: {
            default: MainAside,
            products: ProductsList
        },
        props: {
            default: false,
            products: true
        }
    },
    {
        path: '*',
        redirect: {name: 'main'}
    }
];

export const router = new VueRouter({
    routes,
    mode: 'history'
});