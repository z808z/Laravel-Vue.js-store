import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';

Vue.use(Vuex);

const mainStore = new Vuex.Store({
    state: {
        categories: '',
        products: ''
    },
    getters: {
        getCategories: state => {
            return state.categories;
        },
        getProducts: state => {
            return state.products;
        }
    },
    mutations: {
        updateCategories(state, payload) {
            state.categories = payload.categories;
        },
        updateProducts(state, payload) {
            state.products = payload.products;
        }
    },
    actions: {
        loadCategories(context) {
            let url = '/api/categories/';
            axios.get(url)
                .then(response => {
                    context.commit({
                        type: 'updateCategories',
                        categories: response.data
                    });
                })
                .catch(e => {
                    this.errors.push(e)
                })
        },
        loadProducts(context, category) {
            let url = '/api/categories/' + category;
            axios.get(url)
                .then(response => {
                    context.commit({
                        type: 'updateProducts',
                        products: response.data
                    });
                })
                .catch(e => {
                    this.errors.push(e)
                })
        }
    }
});

export default mainStore;
