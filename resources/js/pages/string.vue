<template>
  <card :title="$t('Find String')">
    <div class="row" align="right">
        <button class="btn-primary btn" @click="addRow" style="margin:10px">Add word</button>
    </div>
    <form ref="form" @submit.stop.prevent="handleSubmit">
      <table class="table">
          <thead>
              <th>Input your word</th>
          </thead>
          <tbody>
              <tr v-for="(input, index) in inputs" v-bind:key="index">
                <td>
                    <input name="string[]" type="text" v-model="input.string" required>
                    <button class="btn-sm btn-primary" @click="deleteRow(index)">Delete</button>
                </td>
              </tr>
          </tbody>
          <tfoot>
              <button class="btn btn-success" style="margin:10px" type="button" @click="handleSubmit">Search</button>
          </tfoot>
      </table>
    </form>
    <p v-if="this.Stringstate"> Result is : {{this.results}}</p>
    <p v-else> Not Found</p>
  </card>

</template>

<script>
import axios from "axios";
export default {
  middleware: "auth",
  data() {
    return {
      
      inputs: [],
      results : "",
      Stringstate : "",
    };
  },

  
  created() {
    //this.fetchData();
  },

  metaInfo() {
    return { title: this.$t("Find String") };
  },
  methods: {

      addRow() {
      this.inputs.push({
        string: ''

      })
    },
    deleteRow(index) {
      this.inputs.splice(index,1)
    },
      
      
      
    
      handleSubmit() {
        // Exit when the form isn't valid
    
        // Push the name to submitted names

        axios.post('/api/scg/findString', {
          string: this.inputs
        })
        .then(response => {
          if(response.status == 200){
            this.Stringstate = true
            this.results = response.data;
          }
          else{
              this.Stringstate = false
          }
        })
        .catch(function (error) {
          console.log(error);
        });
      },
    
    }
};
</script>
