<template>
    <div>
        <h1>Categories</h1>

        <div class="row">
          <div class="col-md-10"></div>
          <div class="col-md-2">
            <router-link :to="{ name: 'CreateCategory' }" class="btn btn-primary">Create Category</router-link>
          </div>
        </div><br />
        <div class="loading" v-if="loading">
            Loading...
        </div>
        <table class="table table-hover" v-else>
            <thead>
            <tr>
                <td>ID</td>
                <td>Category</td>
                <td>Parent</td>
                <td>Actions</td>
            </tr>
            </thead>

            <tbody>
                <tr v-for="category in categories">
                    <td>{{ category.id }}</td>
                    <td>{{ category.name }}</td>
                    <td>{{ category.parent ? category.parent.name : '-' }}</td>
                    <td><router-link :to="{name: 'EditCategory', params: { id: category.id }}" class="btn btn-primary">Edit</router-link></td>
                    <td><button class="btn btn-danger" v-on:click="deleteCategory(category.id)">Delete</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>

    export default {
        data(){
            return{
                categories: [],
                loading: true,
            }
        },

        created: function()
        {
            this.fetchCategories()
        },

        methods: {
            fetchCategories()
            {
              let uri = `${window.Laravel.baseUrl}/api/categories`;
              this.axios.get(uri).then((response) => {
                  this.loading = false
                  this.categories = response.data
              });
            },
            deleteCategory(id)
            {
                for (var key in this.categories) {
                    if (this.categories[key].id == id) {
                        this.categories.splice(key, 1)
                    }
                }
                let uri = `${window.Laravel.baseUrl}/api/categories/${id}`
                this.axios.delete(uri)
            }
        }
    }
</script>
