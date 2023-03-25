<template>
    <Base/>
    <main class="main">
        <!-- Side Nav Dummy-->
        <div class="main__sideNav"></div>
        <!-- End Side Nav -->
        <!-- Main Content -->
        <div class="main__content">
            <!--==================== SKILLS ====================-->
            <section class="skills section" id="skills">
                <div class="skills_container">
                    <div class="titlebar">
                        <div class="titlebar_item">
                            <h1>Skills </h1>
                        </div>
                        <div class="titlebar_item">
                            <div class="btn btn__open--modal" @click="openModal()">
                                New Skill
                            </div>
                        </div>
                    </div>

                    <div class="table">

                        <div class="table_filter">
                            <span class="table_filter-Btn ">
                                <i class="fas fa-ellipsis-h"></i>
                            </span>
                            <div>
                                <ul class="table_filter-list">
                                    <li>
                                        <p class="table_filter-link table_filter-link--active">
                                            All
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="table_search">
                            <div class="table_search-wrapper">
                                <select class="table_search-select" name="" id="">
                                    <option value="">Filter</option>
                                </select>
                            </div>
                            <div class="relative">
                                <i class="table_search-input--icon fas fa-search "></i>
                                <input class="table_search--input" type="text" placeholder="Search Skill">
                            </div>
                        </div>

                        <div class="skill_table-heading">
                            <p>Name</p>
                            <p>Proficiency</p>
                            <p>Service</p>
                            <p>Actions</p>
                        </div>
                        <!-- item 1 -->
                        <div class="skill_table-items" v-for="item in skills" :key="item.id" v-if="skills.length > 0">
                            <p>{{ item.name }}</p>
                            <div class="table_skills-bar">
                                <span class="table_skills-percentage"
                                      :style="{'width' : `${item.proficiency}%`}"></span>
                                <strong>{{ item.proficiency }}%</strong>
                            </div>
                            <p v-if="item.service">{{ item.service.name }}</p>
                            <div>
                                <button class="btn-icon success">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                                <button class="btn-icon danger">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>

                    </div>

                </div>
                <!-------------- SERVICES MODAL --------------->
                <div class="modal main__modal " :class="{show : showModal}">
                    <div class="modal__content">
                        <span class="modal__close btn__close--modal" @click="closeModal()">×</span>
                        <h3 class="modal__title">Add Skill</h3>
                        <hr class="modal_line">
                        <br>
                        <form @submit.prevent="createSkill()">
                            <div>
                                <p>Name</p>
                                <input type="text" class="input" v-model="form.name"/>

                                <p>Proficiency</p>
                                <input type="text" class="input" v-model="form.proficiency"/>

                                <p>Service</p>
                                <select class="inputSelect" name="" v-model="form.service_id">
                                    <option disabled selected>Select service</option>
                                    <option :value="service.id" v-for="service in services" :key="service.id">
                                        {{ service.name }}
                                    </option>
                                </select>
                            </div>
                            <br>
                            <hr class="modal_line">
                            <div class="model__footer">
                                <button class="btn mr-2 btn__close--modal" @click="closeModal()">
                                    Cancel
                                </button>
                                <button class="btn btn-secondary btn__close--modal ">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>
</template>

<script>
import Base from "../layouts/base.vue";
import {onMounted, ref} from "vue";
import Axios from "../../axios";

export default {
    name: "index",
    components: {Base},

    setup() {

        const showModal = ref(false)
        const hideModal = ref(true)

        const openModal = () => {
            showModal.value = !showModal.value
        }
        const closeModal = () => {
            showModal.value = !hideModal.value
        }

        const form = ref({
            name: '',
            proficiency: '',
            service_id: ''
        })
        let skills = ref([])
        let services = ref([])
        const getSkills = async () => {
            let response = await Axios.get('get-all-skills')
            skills.value = response.data.skills
        }

        const getServices = async () => {
            let response = await Axios.get('get-all-services')
            services.value = response.data.services
        }

        const createSkill =async () => {
                await Axios.post('create-skill',form.value).then(res => {
                    getSkills()
                    closeModal()
                    toast.fire({
                        icon: 'success',
                        title: 'Skill add successfully'
                    })
                })
        }

        onMounted(async () => {
            getSkills()
            getServices()
        })

        return {
            skills,
            services,
            form,
            openModal,
            closeModal,
            showModal,
            createSkill
        }
    }

}
</script>

<style scoped>

</style>
