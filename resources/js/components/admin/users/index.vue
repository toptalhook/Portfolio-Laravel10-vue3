<template>
    <Base/>
    <main class="main">
        <!-- Side Nav Dummy-->
        <div class="main__sideNav"></div>
        <!-- End Side Nav -->
        <!-- Main Content -->
        <div class="main__content">
            <section class="users section" id="users">
                <div class="users_container">
                    <div class="titlebar">
                        <div class="titlebar_item">
                            <h1>Users </h1>
                        </div>
                        <div class="titlebar_item">
                            <div class="btn btn__open--modal" @click="openModal()">
                                New User
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
                                <input class="table_search--input" type="text" placeholder="Search User">
                            </div>
                        </div>

                        <div class="user_table-heading">
                            <p>Photo</p>
                            <p>Name</p>
                            <p>Role</p>
                            <p>Actions</p>
                        </div>
                        <!-- item 1 -->
                        <div class="user_table-items" v-for="item in users" :key="item.id" v-if="users.length > 0">
                            <p>
                                <img :src="ourImage(item.photo)" alt="" class="user_img-list">
                            </p>
                            <p>{{ item.name }}</p>
                            <p>{{ item.type }}</p>
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
            </section>
            <!-------------- USER MODAL --------------->
            <div class="modal main__modal " :class="{show : showModal}">
                <div class="modal__content">
                    <form @submit.prevent="createUser()">
                    <span class="modal__close btn__close--modal">×</span>
                    <h3 class="modal__title">Add User</h3>
                    <hr class="modal_line">
                    <br>
                    <div>
                        <p>Name</p>
                        <input type="text" class="input" v-model="form.name"/>

                        <p>Email</p>
                        <input type="text" class="input" v-model="form.email"/>

                        <p>Bio</p>
                        <textarea cols="20" rows="3" class="textarea" v-model="form.bio"></textarea>

                        <p>Type</p>
                        <select class="inputSelect" name="" id="" v-model="form.type">
                            <option disabled>Select Role</option>
                            <option value="admin">Admin</option>
                            <option value="user">Standard User</option>
                        </select>

                        <p>Password</p>
                        <input type="password" id="password" class="input" v-model="form.password">
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
        </div>

    </main>


</template>

<script setup>
import Base from "../layouts/base.vue";
import {onMounted, ref} from "vue";
import Axios from "../../axios";

let users = ref([])
const showModal = ref(false)
const hideModal = ref(true)
let form = ref({
    name : '',
    type: '',
    bio : '',
    email : '',
    password : ''
})

const openModal = () => {
    showModal.value = !showModal.value
}
const closeModal = () => {
    showModal.value = !hideModal.value
}

const createUser = async () => {
  await Axios.post('create-user',form.value).then(res =>{
      getUsers()
      closeModal()
      toast.fire({
          icon : 'success',
          title : 'User created successfully'
      })
  })
}

const getUsers = async () => {
    let response = await Axios.get('get-all-users')
    users.value = response.data.users
}

onMounted(async () => {
    getUsers()
})

const ourImage = (img) => {
    return "/img/upload/" + img
}


</script>

<style scoped>

</style>
