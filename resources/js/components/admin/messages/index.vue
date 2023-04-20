<template>
<Base/>
    <main class="main">
        <!-- Side Nav Dummy-->
        <div class="main__sideNav"></div>
        <!-- End Side Nav -->
        <!-- Main Content -->
        <div class="main__content">
            <section class="messages section" id="messages">
                <div class="messages_container">
                    <div class="titlebar">
                        <div class="titlebar_item">
                            <h1>Messages </h1>
                        </div>
                        <div class="titlebar_item">

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
                                <input class="table_search--input" type="text" placeholder="Search Message">
                            </div>
                        </div>

                        <div class="message_table-heading">
                            <p>Name</p>
                            <p>Email</p>
                            <p>Subject</p>
                            <p>Description</p>
                            <p>Status</p>
                            <p>Actions</p>
                        </div>
                        <!-- item 1 -->
                        <div class="message_table-items" v-for="item in messages" :key="item.id" v-if="messages.length > 0">
                            <p>{{ item.name }}</p>
                            <p>{{ item.email }}</p>
                            <p>{{ item.subject }} </p>
                            <p>{{ item.description }}</p>
                            <p>
                                <span class="badge_read" @click="updateStatus(item.id,0)" v-if="item.status === 1">
                                    Read
                                </span>
                                <span class="badge_unread" @click="updateStatus(item.id,1)" v-if="item.status === 0">
                                    Unread
                                </span>
                            </p>
                            <div>
                                <button class="btn-icon danger" >
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </main>
</template>

<script setup>
import Base from "../layouts/base.vue";
import {onMounted, ref} from "vue";
import Axios from "../../axios";

let messages = ref([])
const getMessages = async () => {
  await Axios.get('get-all-messages').then(res => {
      messages.value = res.data.messages
  })
}

const updateStatus = (id,status) => {

    const formData = new FormData()
    formData.append('status',status)

    Axios.post('change-status/'+id,formData).then(res=>{
        toast.fire({
            icon:'success',
            title : 'Status change successfully'
        })
        getMessages()
    })
}

onMounted(async() =>{
    getMessages()
})
</script>

<style scoped>

</style>
