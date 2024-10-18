<template>
    <div class="marge">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Register</div>

                    <div class="card-body">
                        <form @submit.prevent="handleSubmit" >
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right">Name</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" v-model="user.name" required autofocus autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="prenom" class="col-sm-4 col-form-label text-md-right">First name</label>
                                <div class="col-md-6">
                                    <input id="prenom" type="text" class="form-control" v-model="user.prenom" required autofocus autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone_number" class="col-sm-4 col-form-label text-md-right">Phone</label>
                                <div class="col-md-6">
                                    <input id="phone_number" type="text" class="form-control" v-model="user.phone_number" required autofocus autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" v-model="user.email" required autofocus autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" v-model="user.password" required autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">Password Confirmation</label>
                                <div class="col-md-6">
                                    <input id="password_confirmation" type="password" class="form-control" v-model="user.password_confirmation" required autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import axios from "axios"
import { useRouter } from 'vue-router';
const router = useRouter()
let user = {}

const handleSubmit = async () => {
    axios.post('http://localhost:8000/api/register', user)
        .then(response => {
            console.log(response)
            router.replace({ name: 'login' })
        })
        .catch(err => { console.log(err); alert(err) })
}
</script>

<style scoped>
.marge {
    width: 100%;
    height: 300px;
    margin: 5% auto;
    padding: 50px;
    background-color: #fff;
    margin-bottom: 100px;
}
</style>
