<template>
  <div>
    <h1>Create A Category</h1>
    <form v-on:submit.prevent="addCategory">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Category Name:</label>
            <input type="text" class="form-control" v-model="category.name">
          </div>
        </div>
        </div><br />
        <div class="form-group">
          <button class="btn btn-primary">Add Category</button>
          <router-link :to="{ name: 'DisplayCategory' }" class="btn btn-default">Cancel</router-link>
        </div>
    </form>
  </div>
</template>
<script>
  export default {
    data(){
        return{
          category:{}
        }
    },
    methods: {
      addCategory(){
        let uri = window.Laravel.baseUrl+'/api/categories';
        this.axios.post(uri, this.category).then((response) => {
          this.$router.push({name: 'CreateCategory'})
        })
    }
  }
}
</script>
