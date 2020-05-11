<template>
    <div>

            <div class="row labels">
                <div class="col-5 text-center p-0">
                    <p>Name</p>
                </div>
                <div class="col-2 text-center p-0">
                    <p>Bonus</p>
                </div>
                <div class="col-5 text-center p-0">
                    <p>Damage/Type</p>
                </div>
            </div>




        <div
            class="row"
            v-for="item in list">
            <div class="col-5 name">
                {{item.name}}
            </div>
            <div class="col-2 atk-bonus">
                {{item.bonus}}
            </div>
            <div class="col-5 damage-type">
                {{item.type}}
            </div>
        </div>

        <div class="form ">
            <div class="">
                <input
                    type="text"
                    placeholder="item name"
                    v-model="equipment.name">
            </div>
            <div class="">
                <input
                    type="text"
                    placeholder="bonus"
                    v-model="equipment.bonus">
                </div>
            <div class="">
                <input
                    type="text"
                    placeholder="damage/type"
                    v-model="equipment.type">
            </div>
            <div class="d-flex justify-content-between">
                <button @click="submitEquipment">Add</button>
                <button @click="removeEquipment">Remove</button>
            </div>
        </div>


    </div>
</template>

<script>
  export default {
    name: "Equipment",
      data() {
        return {
            list: [],
            equipment: {
                name: '',
                bonus: '',
                type: '',
            }
        }
      },

      methods: {
        submitEquipment() {
            this.list.push({...this.equipment})
            // clear input fields after submission
            this.equipment.name = '';
            this.equipment.bonus = '';
            this.equipment.type = '';
        },

        removeEquipment() {
            this.list.pop({...this.equipment})
        },
        // left in for future troubleshooting.
        console() {
          console.log(this.list);
          console.log(this.equipment.bonus);
        }
      }

  }
</script>

<style scoped>
    p {
        padding-left: 0;
        padding-right: 0;
    }

    input {
        align-content: center;
    }

    button {
        font-family: 'IBM Plex Mono', sans-serif;
        font-size: 20px;
        border: none;
        padding: 0rem 1rem;
        margin: .5em auto;
        text-decoration: none;
        background: #fff9ED;
        color: #000;
        box-shadow: 2px 4px 4px rgba(0, 0, 0, 0.25)
    }

    .name {
        border-bottom: solid 1px #303030;
        border-right: solid 1px #303030;
        padding: 0;
        text-align: center;
        height: 25px;
    }

    .atk-bonus {
        border-bottom: solid 1px #303030;
        border-right: solid 1px #303030;
        padding: 0;
        text-align: center;
        height: 25px;
    }

    .damage-type {
        border-bottom: solid 1px #303030;
        padding: 0;
        text-align: center;
        height: 25px;
    }

    .form {
        position: absolute;
        bottom: 80px;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%)
    }
</style>
