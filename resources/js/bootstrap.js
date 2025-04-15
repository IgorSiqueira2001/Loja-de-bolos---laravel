import axios from 'axios';
import '/resources/scss/app.scss';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
