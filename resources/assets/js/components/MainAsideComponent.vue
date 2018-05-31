<template>
    <aside class="menu">
        <ul class="menu-list">
            <li v-for="category in categories">
                <router-link :to="'/' + category.slug">
                    <a>{{category.name}}</a>
                </router-link>
                <ul v-if="category.children.length != 0">
                    <li v-for="subcategory in category.children">
                        <router-link :to="'/' + category.slug + '/' + subcategory.slug" :key="$route.fullPath">
                            <a>{{subcategory.name}}</a>
                        </router-link>
                    </li>
                </ul>
            </li>
       </ul>
    </aside>
</template>

<script>
    export default {
        computed: {
            categories() {
                return this.$store.getters.getCategories;
            }
        },
        methods: {
            loadCategories: function () {
                this.$store.dispatch('loadCategories');
            }
        },
        created() {
            this.loadCategories();
        }
    }
</script>