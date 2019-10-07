<template>
  <card :title="$t('Line Message API')">
    <div class="row">
      <div class="col-md-6">
        <div align="center">
          <img src="../../../public/images/qr.png">
          <p class="font-small">Please add QR code for chat with bot</p>
        </div>
      </div>
      <div class="col-md-6">
        <label class="font-small">Add QR and chat with bot before broadcast</label>
        <textarea placeholder="Type anythings to Broadcast" v-model="message" class="form-control fix-height" name="message" ref="message"></textarea>
        <button type="button" ref="sendmessage" class="btn btn-primary" :disabled="clickable" style="float:right;margin-top:10px;" @click="sendMessage">Broadcast</button>
      </div>
    </div>
    <p style="color:red" v-if="!this.isSuccess && this.isSuccess!=''">Broadcast Failed</p>
    <p v-else-if="this.isSuccess" style="color:green"> Your messages is Broadcast !!</p>
  </card>

</template>

<script>
import axios from "axios";
export default {
  middleware: "auth",
  data() {
    return {
      message: "",
      results : "",
      isSuccess : "",
      isDisable : false,
    };
  },

  computed: {
    clickable() {
        // if something
        if(this.isDisable){
          return true;
        }
        else{
          return false;
        }
    }
  },

  created() {
    //this.fetchData();
  },

  metaInfo() {
    return { title: this.$t("Find String") };
  },
  methods: {

      sendMessage(){
        if(!this.message){
          this.$refs.message.focus()
          return false
        }
        else{
          this.isDisable = true;

          axios.post('/api/scg/sendmessage', {
            message: this.message
          })
        .then(response => {
          if(response.status == 200){
            this.isSuccess = true
            this.message = "";
            this.isDisable = false;
          }
          else{
              this.isSuccess = false
              this.isDisable = false;
          }
        })
        .catch(function (error) {
          this.isDisable = false;
          console.log(error);
        });
        }
      }
    }
};
</script>
<style>
  .font-small{
    font-size: 14px;
  }
  .fix-height{
    min-height: 150px;
  }
</style>
