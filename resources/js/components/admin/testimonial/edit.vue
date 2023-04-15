<template>
    <Base/>
    <main class="main">
        <!-- Side Nav Dummy-->
        <div class="main__sideNav"></div>
        <!-- End Side Nav -->
        <!-- Main Content -->
        <div class="main__content">
            <section class="about section" id="testimonial">
                <div class="about_container">
                    <div class="titlebar">
                        <div class="titlebar_item">
                            <h1>Edit Testimonial</h1>
                        </div>
                        <div class="titlebar_item">
                            <div class="btn btn-secondary">
                                Update Testimonial
                            </div>
                        </div>
                    </div>
                    <div class="card_wrapper">
                        <div class="wrapper_left">
                            <div class="card">

                                <p>Name</p>
                                <input type="text" class="input" v-model="form.name"/>

                                <p>Function</p>
                                <input type="text" class="input" v-model="form.function" />
 
                                <p>Testimony</p>
                                <textarea cols="10" rows="5" v-model="form.testimony" ></textarea>

                            </div>
                        </div>

                        <div class="wrapper_right ">
                            <div class="card">
                                <p>Photo</p>
                                <div class="testimonial_img-container">
                                    <img :src="getPhoto()" alt="" class="testimonial_img">
                                </div>
                                <input type="file" id="fileimg" @change="changePhoto"/>
                                <br>
                                <p>Rating ?/5</p>
                                <input type="text" class="input" v-model="form.rating" />
                            </div>
                        </div>

                    </div>
                    <div class="titlebar">
                        <div class="titlebar_item">

                        </div>
                        <div class="titlebar_item">
                            <div class="btn btn-secondary" @click="updateTestimonial()">
                                Update Testimonial
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
import {ref,onMounted} from "vue";
import Axios from "../../axios";
import {useRouter} from "vue-router";

const router = useRouter()


let form = ref({
    id: '',
    name: '',
    function: '',
    testimony: '',
    rating: '',
    photo: ''
})
const props = defineProps({
    id: {
        type: String,
        default: ''
    }
})

const getSingleTestimonial = async () => {
 let response =await Axios.get(`get-edit-testimonial/${props.id}`)
    form.value = response.data.testimonial
}
onMounted(async () => {
    getSingleTestimonial()
})
const getPhoto = () => {
    let photo = "/img/upload/avatar.png"
    if (form.value.photo) {
        if (form.value.photo.indexOf('base64') !== -1) {
            photo = form.value.photo
        } else {
            photo = '/img/upload/' + form.value.photo
        }
    }
    return photo
}

const updateTestimonial = async () => {
  await Axios.post(`update-testimonial/${form.value.id}`,form.value).then(res =>{
      router.push('/admin/testimonials')
      toast.fire({
          icon : 'success',
          title : 'Testimonial updated successfully'
      })
  })
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
</script>

<style scoped>

</style>
