<template>
    <div class="login">
        <div class="formLogin">
            <p class="text-danger" v-if="error">{{error}}</p>
            <form @submit.prevent="login">
                <input type="email" placeholder="Enter your email" v-model="form.email"  >
                <br>
                <input type="password" placeholder="Enter your password" v-model="form.password">
                <br>
                <input type="submit" value="Login" class="submit">

            </form>
        </div>
    </div>
</template>

<script>
import {reactive, ref} from "vue";
import Axios, {baseUrl} from "../axios";
import {useRouter} from 'vue-router'
export default {
    name: "login",
    data: () => ({}),
    setup() {

        let form = reactive({
            name: '',
            email: '',
            password: ''
        });
        let error = ref()
        const router = useRouter()
        const login = async () => {
            await Axios.get(`${baseUrl}csrf-cookie`).then(res => {
                return Axios.post(`login`, form).then(res => {
                    if (res.data.success){
                        localStorage.setItem('token',res.data.data.token)
                        router.push('/admin/home')
                    }else {
                       error.value =res.data.message
                    }
                })
            })
        }
        return {
            login,
            form,
            error

        }
    }

}
</script>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Fira sanse', 'sans-serif';
    font-size: 16px;
}

.login {
    background: #a0d2f8;
    padding: 0;
    margin: 0;
    width: 100%;
    height: 100vh;
}

.formLogin {
    display: flex;
    align-items: center;
    width: 22.8em;
    height: 55em;
    margin: 0 auto 0 auto;
    overflow: hidden;
}

input {
    background: rgba(228, 232, 243, 0.8);
    background-position: 0.5em 0.6em;
    border: none;
    color: rgba(80, 80, 80, 1);
    padding: 0 0 0 4rem;
    margin: 0 0 1em;
    width: 20em;
    height: 2.8em;
    outline: none;
    transition: background-color 0.4s;
}

input:hover {
    background-color: rgba(255, 255, 255, 255);
}

input:focus {
    background-color: rgba(255, 255, 255, 255);
}

.submit {
    color: rgba(35, 35, 35, 0.8);
    background: rgba(220, 220, 220, 1);
    padding: 0;
    margin: 2.5em 0 0 5em;
    width: 10em;
    text-transform: uppercase;
    cursor: pointer;
    transition: background-color 0.4s;
}

.submit:hover {
    background: #308099;
    color: #ffffff;
}

.submit:focus {
    background: #308099;
    color: #ffffff;
}
.text-danger{
    color: red;
}
</style>
