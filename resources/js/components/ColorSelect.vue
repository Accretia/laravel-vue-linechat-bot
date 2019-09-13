<template>
   <select>
       <option value="">-- Select</option>
       <option v-for="(value, index) in colors"  v-bind:key="index" :value="value.id" >{{value.name}}</option>
   </select>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      colors: [],
      errors: []
    }
  },

  // Fetches posts when the component is created.
  created() {

    axios.get(`/api/colors/list`)
        .then(response => {
          // JSON responses are automatically parsed.
          this.colors = response.data
        })
        .catch(e => {
          this.errors.push(e)
        })
    // async / await version (created() becomes async created())
    //

  }
}
</script>