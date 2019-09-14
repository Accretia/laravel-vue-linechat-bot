<template>
  <card :title="$t('Line Message API')">
    
    
    XXX
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
      
      checkFormValidity() {
        const valid = this.$refs.form.checkValidity()
        this.nameState = valid ? 'valid' : 'invalid'
        return valid
      },
      
    
      handleSubmit() {
        // Exit when the form isn't valid
        if (!this.checkFormValidity()) {
          return
        }
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
