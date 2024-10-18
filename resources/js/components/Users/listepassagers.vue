

<template>
    <div>
       
    <h2 class="text-center">Passagers List</h2>
    <table class="table">
    <thead>
    <tr>
    <th>nom</th>
    <th>prenom</th>
    <th>numero de telephone</th>
    <th>adresse e-mail</th>
    <!-- <th>Actions</th> -->
    </tr>
    </thead>
    <tbody>
    <tr v-for="user in users" :key="user.id">
    <td>{{ user.name }}</td>
    <td>{{ user.prenom }}</td>
    <td>{{ user.phone_number }}</td>
    <td>{{ user.email }}</td>
    
    
    <div class="btn-group" role="group">
    <button class="btn btn-danger"
    @click="deleteuser(user.id)">Delete</button>
    
    </div>
  
    
    </tr>
    </tbody>
    </table>
    </div>
    </template>
   
<script setup>
import axios from 'axios';
import {ref , onMounted } from 'vue';
const users = ref([]);

const fetchusers=async ()=> {
await axios.get('http://localhost:8000/api/users').then((response)=>{users.value = response.data}).catch ((error) =>{
console.error('Error fetching users:', error);
});

}


const deleteuser=async (id)=> {

await axios
.delete(`http://localhost:8000/api/users/${id}`)
.then(() => {
let i = users.value.map(data =>

data.id).indexOf(id);

users.value.splice(i, 1)
});

}
onMounted(() => {
fetchusers();
});


</script>