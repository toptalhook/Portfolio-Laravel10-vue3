<template>
    <div class="base">
        <Header/>
        <Sidebar/>

    </div>


</template>

<script>
import Header from "./header.vue";
import Sidebar from "./sidebar.vue";
import {ref} from "vue";
export default {
    name: "base",
    components: {Header,Sidebar},


}
</script>

<style >
@import "base.css";
</style>
