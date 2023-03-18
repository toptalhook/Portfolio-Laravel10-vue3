import axios from "axios";

export let baseUrl = 'http://127.0.0.1:8000/api/'

const Axios =axios.create({
    baseURL : `${baseUrl}v1/`
});
Axios.defaults.withCredentials = true;

export default Axios;
