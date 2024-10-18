<template>


    <!--<div class="marge">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card card-default">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">

                                <label for="email" class="col-sm-3 col-form-label text-md-right">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" v-model="user.email" required
                                        autofocus autocomplete="off">

                                </div>
                            </div>
                            <div class="form-group row">

                                <label for="password" class="col-md-3 col-form-label text-md-right">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" v-model="user.password"
                                        required autocomplete="off">

                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">

                                    <button type="submit" class="btn btn-primary" @click="handleLogin">

                                        Login
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <br>
    <br>
    <div class="card-header">
        

    <div class="card22 flex flex-col md:flex-row gap-5">
 <h1>Login</h1>
        <InputGroup>
            <InputGroupAddon>
                <i class="pi pi-user"></i>
            </InputGroupAddon>
            <InputText id="email" type="email" placeholder="Username" v-model="user.email" />
        </InputGroup>

        <InputGroup>
            <InputGroupAddon>
                <i class="pi pi-lock"></i>
            </InputGroupAddon>
            <Password id="password" type="password" placeholder="Password" :feedback="false"  toggleMask v-model="user.password"/>
        </InputGroup>

        <Button type="button" label="Connect" icon="pi pi-check" :loading="loading" @click="handleLogin" />

    </div>
</div>

    


</template>
<script setup>
import axios from 'axios';
import { useRouter } from 'vue-router';
import api from '../config/api.js';
import Password from 'primevue/password';
import InputText from 'primevue/inputtext';
import InputGroup from 'primevue/inputgroup';
import InputGroupAddon from 'primevue/inputgroupaddon';
import { ref } from 'vue';

const router = useRouter()
let user = {
    email: '',
    password: ''
};
const loading = ref(false);

const load = () => {
    loading.value = true;
    setTimeout(() => {
        loading.value = false;
    }, 2000);
};

const handleLogin = async () => {
    if (!user.email || !user.password) {
        alert('Veuillez entrer votre email et mot de passe');
        return;
    }

    try {
        const response = await axios.post('http://127.0.0.1:8000/api/login/', user);
        localStorage.setItem('user', JSON.stringify(response.data.user));
        localStorage.setItem('token', response.data.token);
        router.push("/dashboard");
        console.log('Utilisateur connecté:', response.data.user.name);
    } catch (err) {
        console.log(err);
        alert('Adresse ou mot de passe incorrect');
    }
}
</script>

<style scoped>
.marge {
    position: fixed;
    width: 100%;
    height: 300px;
    margin: 5% auto;
    padding: 20px;
    border: 5px solid #ccc;
    background-color: #fff;
}
.card-header{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border-radius:20px;
     width:22rem;
     box-shadow:0px 5px 15px rgba(0,0,0,0.25);
    width: 600px;
    margin-left: 480px;
    overflow: hidden;
    background-color: rgba(255, 255, 255, 0.5);
    margin-top: 30px;
    margin-bottom: 80px;
   
}

.card22{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 400px;
    width: 400px;
}
.card22-InputGroupAddon{
    width: 800px;
}
</style>