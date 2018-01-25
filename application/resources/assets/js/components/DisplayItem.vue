<template>
    <div>
        <h1>Articles</h1>

        <div class="row">
          <div class="col-md-10"></div>
          <div class="col-md-2">
            <router-link :to="{ name: 'CreateItem' }" class="btn btn-primary">Create Article</router-link>
          </div>
        </div><br />
        <div class="loading" v-if="loading">
            Loading...
        </div>
        <table class="table table-hover" v-else>
            <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Actions</td>
            </tr>
            </thead>

            <tbody>
                <tr v-for="item in items">
                    <td>{{ item.id }}</td>
                    <td>{{ item.name }}</td>
                    <td>{{ item.price }}€</td>
                    <td>{{ item.quantity }}</td>
                    <td><router-link :to="{name: 'EditItem', params: { id: item.id }}" class="btn btn-primary">Edit</router-link></td>
                    <td><button class="btn btn-danger" v-on:click="deleteItem(item.id)">Delete</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>

    export default {
        data(){
            return{
                items: [],
                loading: true,
            }
        },

        created: function()
        {
            this.fetchItems()
        },

        methods: {
            fetchItems()
            {
              let uri = `${window.Laravel.baseUrl}/api/items`
              this.axios.get(uri).then((response) => {
                  this.loading = false
                  this.items = response.data
              });
            },
            deleteItem(id)
            {
              let uri = `${window.Laravel.baseUrl}/api/items/${id}`
              this.$router.push({path: '/'})
            }
        }
    }
</script>
