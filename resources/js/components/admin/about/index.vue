<template>
    <Base/>

    <main class="main">
        <!-- Side Nav Dummy-->
        <div class="main__sideNav"></div>
        <!-- End Side Nav -->
        <!-- Main Content -->
        <div class="main__content">
            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <div class="about_container">
                    <div class="titlebar">
                        <div class="titlebar_item">
                            <h1>About Us</h1>
                        </div>
                        <div class="titlebar_item">
                            <div class="btn btn-secondary" @click.prevent="updateAbout">
                                Save Changes
                            </div>
                        </div>
                    </div>
                    <div class="card_wrapper">
                        <div class="wrapper_left">
                            <div class="card">
                                <p>Full Name</p>
                                <input type="text" class="input" v-model="form.name"/>

                                <p>Email</p>
                                <input type="email" class="input" v-model="form.email"/>

                                <p>Address</p>
                                <input type="text" class="input" v-model="form.address"/>

                                <p>Description</p>
                                <textarea cols="10" rows="5" v-model="form.description"></textarea>

                            </div>
                            <div class="card">
                                <p>Tagline</p>
                                <input type="text" class="input" v-model="form.tagline"/>
                            </div>
                        </div>

                        <div class="wrapper_right ">
                            <div class="card">
                                <div class="avatar_profile">
                                    <img :src="getPhoto()" alt="" class="avatar_profile_img">
                                </div>
                                <input type="file" id="fileimg" @change="changePhoto"/>
                            </div>
                            <div class="card">
                                <p>CV</p>
                                <input type="file" id="filecv" @change="uploadCv"/>
                            </div>
                        </div>

                    </div>
                    <div class="titlebar">
                        <div class="titlebar_item">

                        </div>
                        <div class="titlebar_item">
                            <div class="btn btn-secondary" @click.prevent="updateAbout">
                                Save Changes
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</template>

<script>
import Base from "../layouts/base.vue";
import {onMounted, reactive, ref} from "vue";
import Axios from "../../axios";

export default {
    name: "index",
    components: {Base},

    setup() {
        let form = ref({
            name: '',
            photo: '',
            email: '',
            address: '',
            description: '',
            tagline: '',
            cv: '',
        })
        const getAbout = async () => {
            let response = await Axios.get('/edit-about')
            form.value = response.data
            console.log('form', form.value)
        }
        const getPhoto = () => {
            let photo = "/img/avatar.png"
            if (form.value.photo) {
                if (form.value.photo.indexOf('base64') !== -1) {
                    photo = form.value.photo
                } else {
                    photo = '/img/upload/' + form.value.photo
                }
            }
            return photo
        }

        const changePhoto = (e) => {
            let file = e.target.files[0];
            let render = new FileReader();
            let limit = 1024 * 1024 * 2
            if (file['size'] > limit) {
                Swal({
                    icon: 'error',
                    title: 'Ooops...',
                    text: 'You are uploading a large file'
                })
                return false
            }
            render.onloadend = (file) => {
                form.value.photo = render.result
            }
            render.readAsDataURL(file)
        }

        const uploadCv = (e) => {
            let file = e.target.files[0];
            let render = new FileReader();
            let limit = 1024 * 1024 * 2
            if (file['size'] > limit) {
                Swal({
                    icon: 'error',
                    title: 'Ooops...',
                    text: 'You are uploading a large file'
                })
                return false
            }
            render.onloadend = (file) => {
                form.value.cv = render.result
            }
            render.readAsDataURL(file)
        }

        onMounted(async () => {
            await getAbout()
        })


        const updateAbout = async () => {
            await Axios.post(`/update-about/${form.value.id}`, form.value)
                .then(res => {
                    toast.fire({
                        icon: 'success',
                        title: 'Update successfully'
                    })
                })
        }

        return {
            form,
            getPhoto,
            changePhoto,
            uploadCv,
            updateAbout,
        }
    }

}
</script>

<style scoped>

</style>
