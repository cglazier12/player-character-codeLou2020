<template>
    <div>
        <div class="d-flex justify-content-center">
            <h5>Alignment</h5>
        </div>
        <div class="row">
            <div class="col-6 ability">
                <p>Strength</p>
                <div class="scores d-flex justify-content-around">
                    <input v-model="sheet.sheet.strength"/>
                    <h2>{{sheet.sheet.strength}}</h2>
                    <h5>+ 3</h5>
                </div>
            </div>
            <div class="col-6 ability">
                <p>Dexterity</p>
                <div class="scores d-flex justify-content-around">
                    <input v-model="sheet.sheet.dexterity"/>
                    <h2>{{sheet.sheet.dexterity}}</h2>
                    <h5>- 1</h5>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6 ability">
                <p>Constitution</p>
                <div class="scores d-flex justify-content-around">
                    <input v-model="sheet.sheet.constitution"/>
                    <h2>{{sheet.sheet.constitution}}</h2>
                    <h5>+ 2</h5>
                </div>
            </div>
            <div class="col-6 ability">
                <p>Intelligence</p>
                <div class="scores d-flex justify-content-around">
                    <input v-model="sheet.sheet.intelligence"/>
                    <h2>{{sheet.sheet.intelligence}}</h2>
                    <h5>  0</h5>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6 ability">
                <p>Wisdom</p>
                <div class="scores d-flex justify-content-around">
                    <input v-model="sheet.sheet.wisdom"/>
                    <h2>{{sheet.sheet.wisdom}}</h2>
                    <h5>+ 1</h5>
                </div>
            </div>
            <div class="col-6 ability">
                <p>Charisma</p>
                <div class="scores d-flex justify-content-around">
                    <input v-model="sheet.sheet.charisma"/>
                    <h2>{{sheet.sheet.charisma}}</h2>
                    <h5>+ 1</h5>
                </div>
            </div>
        </div>
        <!-- End Ability Section -->
        <!-- Start Vitals Section -->
        <div class="d-flex justify-content-center">
            <h5>Vitals</h5>
        </div>

        <div class="row">
            <div class="col-3 vitals">
                <input v-model="sheet.sheet.armor_class"/>
                <p>AC</p>
                <h4>{{sheet.sheet.armor_class}}</h4>
            </div>
            <div class="col-6 vitals health">
                <input v-model="sheet.sheet.initiative"/>
                <p>Initiative</p>
                <h4>{{sheet.sheet.initiative}}</h4>
            </div>
            <div class="col-3 vitals">
                <input v-model="sheet.sheet.speed"/>
                <p>Speed</p>
                <h4>{{sheet.sheet.speed}}</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-6 ability health">
                <input v-model="sheet.sheet.hp_current"/>
                <p>Current HP</p>
                <h4>{{sheet.sheet.hp_current}}</h4>
            </div>
            <div class="col-6 ability health">
                <input v-model="sheet.sheet.hp_temp"/>
                <p>Temporary HP</p>
                <h4>{{sheet.sheet.hp_temp}}</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-6 ability">
                <p>Hit Dice</p>
                <div class="d-flex justify-content-between hit-dice">
                    <p class="small-text">1d{{sheet.sheet.hit_dice}}</p>
                    <h4 class="hit-die">1</h4>
                </div>
            </div>

            <div class="col-6 ability health">
                <input v-model="sheet.sheet.credits"/>
                <p>Credits</p>
                <h4>{{sheet.sheet.credits}}</h4>
            </div>

        </div>

        <div class="d-flex justify-content-around tabs">
            <router-link class="single-tab mx-auto" to="/home/stats/abilities">Abilities</router-link>
            <router-link class="single-tab mx-auto" to="/home/stats/proficiencies">Proficiencies</router-link>
        </div>

    </div>
</template>

<script>
    import { mapState } from 'vuex'
    export default {
        name: "Abilities",
        data() {
            return {
                sheet: {}
            }
        },
        mounted() {
            axios.post('/sheet/fetch/abilities')

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
            axios.post('/sheet/update/abilities', update)
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

    /*Base Component Styles*/

    p {
        margin: 10px 0 4px 0;
        text-align: center;
        font-size: 18px;
        font-weight: 400;
    }

    h2 {
        margin-bottom: 5px;
    }

    h4 {
        text-align: center;
    }

    h5 {
        margin-top: 10px;
        margin-bottom: 5px;
    }
    /*this is the parent container of the input fields*/
    .scores {
        position: relative;
    }
    /*this is the hidden input field. using the v-model directive it is binded to the h2 elements associated with the database object*/
    /*so a user can update the object in their own instance and then save it/post it back to the database.*/
    /* this process is replicated for other editable fields */
    .ability input {
        border: none;
        position: absolute;
        bottom: 5px;
        left: 16px;
        background: transparent;
        color: transparent;
        padding: 0;
        height: 45px;
        width: 50px;
    }

    .vitals {
        position: relative;
    }
    /*this is the hidden input field. using the v-model directive it is binded to the h2 elements associated with the database object*/
    /*so a user can update the object in their own instance and then save it/post it back to the database.*/
    /* this process is replicated for other editable fields */
    .vitals input {
        border: none;
        position: absolute;
        bottom: 5px;
        left: 22px;
        background: transparent;
        color: transparent;
        padding: 0;
        height: 33px;
        width: 50px;
    }

    .ability {
        position: relative;
    }
    /*this is the hidden input field. using the v-model directive it is binded to the h2 elements associated with the database object*/
    /*so a user can update the object in their own instance and then save it/post it back to the database.*/
    /* this process is replicated for other editable fields */
    .health input {
        border: none;
        position: absolute;
        bottom: 5px;
        left: 68px;
        background: transparent;
        color: transparent;
        padding: 0;
        height: 33px;
        width: 50px;
    }

    .small-text {
        margin-top: 14px;
        font-weight: 300;
        font-size: 10px;
    }

    /*Ability Section Styles*/

    .ability {
        border-bottom: 1px solid #c40f0f;
    }

    .ability:first-child {
        border-right: 1px solid #c40f0f;
    }

    /*Vitals Section Styles*/

    .vitals {
        border-bottom: solid 1px #c40f0f;
    }

    .vitals:nth-child(-n+2) {
        border-right: solid 1px #c40f0f;
    }

    .hit-dice {
        padding: 0 15px;
    }


    .tabs {
        position: absolute;
        bottom: 80px;
        left: 35px;
    }

    .single-tab {
        color: #303030;
        padding: 0 15px;
        font-size: 16px;
        font-weight: 300;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
</style>
