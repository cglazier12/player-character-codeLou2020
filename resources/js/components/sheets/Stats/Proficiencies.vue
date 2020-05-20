<template>
    <div>
        <div class="row">
            <div class="col-6 skills">
                <p>Acrobatics</p>
                <div class="d-flex justify-content-between skills-details">
                    <i class="fal fa-square"></i>
                    <p>- 1</p>
                </div>
            </div>
            <div class="col-6 skills">
                <p>Animal Handling</p>
                <div class="d-flex justify-content-between skills-details">
                    <i class="fal fa-square"></i>
                    <p>+ 1</p>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-6 skills">
                <p>Arcana</p>
                <div class="d-flex justify-content-between skills-details">
                    <i class="fal fa-square"></i>
                    <p>  0</p>
                </div>
            </div>
            <div class="col-6 skills">
                <p>Athletics</p>
                <div class="d-flex justify-content-between skills-details">
                    <i class="fad fa-check-square"></i>
                    <p>+ 5</p>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-6 skills">
                <p>Deception</p>
                <div class="d-flex justify-content-between skills-details">
                    <i class="fal fa-square"></i>
                    <p>+ 2</p>
                </div>
            </div>
            <div class="col-6 skills">
                <p>History</p>
                <div class="d-flex justify-content-between skills-details">
                    <i class="fad fa-check-square"></i>
                    <p>+ 2</p>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-6 skills">
                <p>Insight</p>
                <div class="d-flex justify-content-between skills-details">
                    <i class="fal fa-square"></i>
                    <p>+ 1</p>
                </div>
            </div>
            <div class="col-6 skills">
                <p>Intimidation</p>
                <div class="d-flex justify-content-between skills-details">
                    <i class="fal fa-square"></i>
                    <p>+ 2</p>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-6 skills">
                <p>Investigation</p>
                <div class="d-flex justify-content-between skills-details">
                    <i class="fal fa-square"></i>
                    <p>  0</p>
                </div>
            </div>
            <div class="col-6 skills">
                <p>Medicine</p>
                <div class="d-flex justify-content-between skills-details">
                    <i class="fal fa-square"></i>
                    <p>+ 1</p>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-6 skills">
                <p>Nature</p>
                <div class="d-flex justify-content-between skills-details">
                    <i class="fal fa-square"></i>
                    <p>  0</p>
                </div>
            </div>
            <div class="col-6 skills">
                <p>Perception</p>
                <div class="d-flex justify-content-between skills-details">
                    <i class="fad fa-check-square"></i>
                    <p>+ 3</p>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-6 skills">
                <p>Performance</p>
                <div class="d-flex justify-content-between skills-details">
                    <i class="fal fa-square"></i>
                    <p>+ 2</p>
                </div>
            </div>
            <div class="col-6 skills">
                <p>Persuasion</p>
                <div class="d-flex justify-content-between skills-details">
                    <i class="fad fa-check-square"></i>
                    <p>+ 4</p>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-6 skills">
                <p>Religion</p>
                <div class="d-flex justify-content-between skills-details">
                    <i class="fal fa-square"></i>
                    <p>  0</p>
                </div>
            </div>
            <div class="col-6 skills">
                <p>Sleight Hand</p>
                <div class="d-flex justify-content-between skills-details">
                    <i class="fal fa-square"></i>
                    <p>- 1</p>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-6 skills">
                <p>Stealth</p>
                <div class="d-flex justify-content-between skills-details">
                    <i class="fal fa-square"></i>
                    <p>- 1</p>
                </div>
            </div>
            <div class="col-6 skills">
                <p>Survival</p>
                <div class="d-flex justify-content-between skills-details">
                    <i class="fal fa-square"></i>
                    <p>+ 1</p>
                </div>
            </div>
        </div>

        <hr>

        <div class="d-flex justify-content-between tabs">
            <router-link class="single-tab mx-auto" to="/home/stats/abilities">Abilities</router-link>
            <router-link class="single-tab mx-auto" to="/home/stats/proficiencies">Proficiencies</router-link>
        </div>
    </div>
</template>
<i class="fal fa-square"></i>
<i class="fad fa-check-square"></i>
<script>
  export default {
    name: "Proficiencies"
  }
</script>

<style scoped>
    p {
        margin-bottom: 5px;
        font-weight: 400;
    }

    i {
        padding-top: 5px;
    }

    hr {
        margin: 0 0 5px 0;
    }

    .skills {
        text-align: center;
    }

    .skills-details {
        padding: 0 15px;
    }

    .tabs {
        position: absolute;
        bottom: 4.6rem;
        left: 50%;
        transform: translate(-50%, 0);
        color: #c40f0f;
    }

    .single-tab {
        color: #c40f0f;
        padding: 0 15px;
        font-size: 16px;
        font-weight: 400;
        text-decoration: none;
        text-transform: uppercase;
    }
</style>
