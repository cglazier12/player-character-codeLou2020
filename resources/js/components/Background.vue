<template>
    <div>
        <h5>Personality</h5>
        <p>{{sheet.sheet.personality}}</p>
        <h5>Ideals</h5>
        <p>{{sheet.sheet.ideals}}</p>
        <h5>Bonds</h5>
        <p>{{sheet.sheet.bonds}}</p>
        <h5>Flaws</h5>
        <p>{{sheet.sheet.flaws}}</p>
        <textarea v-model="sheet.sheet.personality"></textarea>
        <textarea v-model="sheet.sheet.ideals"></textarea>
        <textarea v-model="sheet.sheet.bonds"></textarea>
        <textarea v-model="sheet.sheet.flaws"></textarea>
    </div>
</template>

<script>
  export default {
    name: "Background",
      data() {
          return {
              options: [
                  { text: 'Personality', value: 'sheet.sheet.personality'},
                  { text: 'Ideals', value: 'sheet.sheet.ideals'},
                  { text: 'Bonds', value: 'sheet.sheet.bonds'},
                  { text: 'Flaws', value: 'sheet.sheet.flaws'}
              ],
              selected: '',
              sheet: {}
          }
      },
      mounted() {
          axios.post('/sheet/fetch')

          .then(response=>{
              //this is necessary in vue or at least the way axios is bringing in the database object object
              //response.data is assigned to an empty array in data().
              //this is so the vue component can have access to the database objects individual attributes
              let sheet = JSON.parse(JSON.stringify(response.data))
              this.sheet = sheet;
              console.log(sheet);
              console.log(this.sheet.sheet);

          })

      },

      beforeDestroy() {
          let update = this.sheet.sheet
          axios.post('/sheet/update', update)
          .then(function (response) {
              console.log(response);
          })
          .catch(function (error) {
              console.log(error);
          });
      }
  }
</script>

<style scoped>
    textarea {
        width: 100%;
    }

</style>
