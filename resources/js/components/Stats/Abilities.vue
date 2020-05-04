<template>
    <div>
        <div class="d-flex justify-content-center">
            <h5>Abilities</h5>
        </div>
        <div class="row">
            <div class="col-6 ability">
                <p>Strength</p>
                <div class="scores d-flex justify-content-around">
                    <h2>16</h2>
                    <h5>+ 3</h5>
                </div>
            </div>
            <div class="col-6 ability">
                <p>Dexterity</p>
                <div class="scores d-flex justify-content-around">
                    <h2>9</h2>
                    <h5>- 1</h5>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6 ability">
                <p>Constitution</p>
                <div class="scores d-flex justify-content-around">
                    <h2>15</h2>
                    <h5>+ 2</h5>
                </div>
            </div>
            <div class="col-6 ability">
                <p>Intelligence</p>
                <div class="scores d-flex justify-content-around">
                    <h2>11</h2>
                    <h5>  0</h5>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6 ability">
                <p>Wisdom</p>
                <div class="scores d-flex justify-content-around">
                    <h2>13</h2>
                    <h5>+ 1</h5>
                </div>
            </div>
            <div class="col-6 ability">
                <p>Charisma</p>
                <div class="scores d-flex justify-content-around">
                    <h2>14</h2>
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
                <p>AC</p>
                <h4>17</h4>
            </div>
            <div class="col-6 vitals">
                <p>Initiative</p>
                <h4>-1</h4>
            </div>
            <div class="col-3 vitals">
                <p>Speed</p>
                <h4>{{ speed }}</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-6 ability">
                <p>Current HP</p>
                <h4>{{ currentHP }}</h4>
            </div>
            <div class="col-6 ability">
                <p>Temporary HP</p>
                <h4>{{ tempHP }}</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-6 ability">
                <p>Hit Dice</p>
                <div class="d-flex justify-content-between hit-dice">
                    <p class="small-text">1d10</p>
                    <h4 class="hit-die">1</h4>
                </div>
            </div>
            <div class="col-6 ability">
                <p>Death Saves</p>
            </div>
        </div>

        <div class="d-flex justify-content-around tabs">
            <router-link class="single-tab mx-auto" to="/home/stats/abilities">Abilities</router-link>
            <router-link class="single-tab mx-auto" to="/home/stats/proficiencies">Proficiencies</router-link>
        </div>

    </div>
</template>

<script>

    export default {
        name: "Abilities",
        computed: {
            tempHP () {
                return store.state.tempHP
            }
        },
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

    .small-text {
        margin-top: 14px;
        font-weight: 300;
        font-size: 10px;
    }

    /*Ability Section Styles*/

    .ability {
        border-bottom: 1px solid #303030;
    }

    .ability:first-child {
        border-right: 1px solid #303030;
    }

    /*Vitals Section Styles*/

    .vitals {
        border-bottom: solid 1px #303030;
    }

    .vitals:nth-child(-n+2) {
        border-right: solid 1px #303030;
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
