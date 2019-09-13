<template>
  <card :title="$t('Color')">
    <div class="row">
      <b-button variant="outline-primary" v-b-modal.modal-prevent-closing style="margin:10px">Create</b-button>
    </div>
    
    <table class="table">
      <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Created At</th>
        <th>#</th>
      </thead>
      <tbody>
        <tr v-for="(value, index) in colors"  v-bind:key="index">
          <td>{{value.id}}</td>
          <td>{{value.name}}</td>
          <td>{{value.created_at}}</td>
          <td><a href="#" @click.prevent="deleteNote(value.id)">Delete</a></td>
        </tr>
      </tbody>
    </table>
    <ColorSelect></ColorSelect>
    <b-modal
      id="modal-prevent-closing"
      ref="modal"
      title="Submit Your Name"
      @show="resetModal"
      @hidden="resetModal"
      @ok="handleOk"
    >
      <form ref="form" @submit.stop.prevent="handleSubmit">
        <b-form-group
          :state="nameState"
          label="Name"
          label-for="name-input"
          invalid-feedback="Name is required"
        >
          <b-form-input
            id="name-input"
            v-model="name"
            :state="nameState"
            required
          ></b-form-input>
        </b-form-group>
      </form>
    </b-modal>

  </card>

</template>

<script>
import axios from "axios";
import ColorSelect from "../components/ColorSelect";
export default {
  middleware: "auth",
  data() {
    return {
      colors: [],
      errors: [],
      name: '',
      nameState: null,
      submittedNames: [],
      result: []
    };
  },

  components: {
    ColorSelect
  },

  created() {
    this.fetchData();
  },

  metaInfo() {
    return { title: this.$t("Color") };
  },
  methods: {
      deleteNote(id){
        axios.delete('/api/colors/delete/'+id, {
    
        })
        .then(response => {
          if(response.status == 200){
            this.fetchData();
          }
        })
        .catch(function (error) {
          console.log(error);
        });

      },
      checkFormValidity() {
        const valid = this.$refs.form.checkValidity()
        this.nameState = valid ? 'valid' : 'invalid'
        return valid
      },
      resetModal() {
        this.name = ''
        this.nameState = null
      },
      handleOk(bvModalEvt) {
        // Prevent modal from closing
        bvModalEvt.preventDefault()
        // Trigger submit handler
        this.handleSubmit()
      },
      handleSubmit() {
        // Exit when the form isn't valid
        if (!this.checkFormValidity()) {
          return
        }
        // Push the name to submitted names

        axios.post('/api/colors/store', {
          name: this.name
        })
        .then(response => {
          if(response.status == 200){
            let color = response.data;
            this.colors.push(color);
          }
          
        })
        .catch(function (error) {
          console.log(error);
        });

        

        // var color = [];
        // color.name = this.name;
        // color.id = 2;
        // this.colors.push(color)
        // console.log(this.colors)
        // Hide the modal manually
        
        this.$nextTick(() => {
          this.$refs.modal.hide()
        })
      },
      fetchData(){
        axios
        .get(`/api/colors/list`)
        .then(response => {
          // JSON responses are automatically parsed.
          this.colors = response.data;
        })
        .catch(e => {
          this.errors.push(e);
        });
      }
    }
};
</script>
