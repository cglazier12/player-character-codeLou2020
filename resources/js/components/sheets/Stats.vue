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
        bottom: 4.6rem;
        left: 50%;
        transform: translate(-50%, 0);
        color: #c40f0f;
    }

    .single-tab {
        color: #c40f0f;
        padding: 0 15px;
        font-size: 16px;
        font-weight: 500;
        text-decoration: none;
        text-transform: uppercase;
    }

</style>
