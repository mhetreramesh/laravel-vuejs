<template>
  <div>
    <h1>Create An Article</h1>
    <form v-on:submit.prevent="addItem">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Article Name:</label>
            <input type="text" class="form-control" v-model="item.name">
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Article Price:</label>
              <input type="text" class="form-control col-md-6" v-model="item.price" />
            </div>
          </div>
        </div><br />
        <div class="form-group">
          <button class="btn btn-primary">Add Article</button>
          <router-link :to="{ name: 'DisplayItem' }" class="btn btn-default">Cancel</router-link>
        </div>
    </form>
  </div>
</template>
<script>
  export default {
    data(){
        return{
          item:{}
        }
    },
    methods: {
      addItem(){
        let uri = window.Laravel.baseUrl+'/items';
        this.axios.post(uri, this.item).then((response) => {
          this.$router.push({name: 'DisplayItem'})
        })
    }
  }
}
</script>
