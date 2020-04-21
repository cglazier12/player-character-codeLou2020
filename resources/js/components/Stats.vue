<template>
    <div>
        <router-view></router-view>
        <div class="d-flex justify-content-between tabs">
            <router-link class="single-tab mx-auto" to="/home/stats/abilities">Abilities</router-link>
            <router-link class="single-tab mx-auto" to="/home/stats/proficiencies">Proficiencies</router-link>
        </div>
    </div>
</template>

<script>
  export default {
    name: "Stats"
  }
</script>

<style scoped>
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
