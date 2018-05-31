<template>
    <div class="columns is-multiline">
        <div class="column is-one-quarter" v-for="product in products">
            <div class="card">
              <div class="card-image">
                <figure class="image">
                  <img :src="product.img" alt="Placeholder image">
                </figure>
              </div>
              <div class="card-content">
                <div class="media">
                  <div class="media-content">
                    <p class="title is-4">{{ product.name }}</p>
                  </div>
                </div>
                <div class="content">
                    {{ product.description }}
                </div>
              </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['category', 'subcategory'],
        computed: {
            products() {
                return this.$store.getters.getProducts;
            }
        },
        methods: {
            loadProducts: function ($category) {
                this.$store.dispatch('loadProducts', $category);
            }
        },
        watch: {
            category: function () {
                this.loadProducts(this.category);
            },
            subcategory: function () {
                this.loadProducts((this.subcategory) ? this.subcategory : this.category);
            }
        },
        created() {
            this.loadProducts((this.subcategory) ? this.subcategory : this.category);
        }
    }
</script>