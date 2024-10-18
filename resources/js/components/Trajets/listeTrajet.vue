<template>
    <div style="margin-top: 40px; margin-bottom: 40px;" >




        <!--===========================================-->

        <router-link :to="{ name: 'AjouterTrajet' }" class="btn btn-primary">Ajouter</router-link>
        <h2 class="text-center">My Announcement List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Deparature</th>
                    <th>Destination</th>
                    <th>time of dep</th>
                    <th>time</th>
                    <th>Price</th>
                    <th>Car</th>
                    <!-- <th>Actions</th> -->
                </tr>
            </thead>
            <tbody>


                <tr v-for="trajet in trajets" :key="trajet.id">
                    <td>{{ trajet.lieu_depart }}</td>
                    <td>{{ trajet.lieu_arrive }}</td>
                    <td>{{ trajet.temps_depart }}</td>
                    <td>{{ trajet.temps_arrive }}</td>
                    <td>{{ trajet.prix }}</td>
                    <td>{{ trajet.vehicule }}</td>

                    <td>
                        <router-link
                :to="{ name: 'Edittrajet', params: { id: trajet.id } }"
                class="btn btn-outline-warning mx-2"
              >
                <i class="fa-solid fa-pen-to-square"></i>
                Update
              </router-link>
                        <div class="btn-group" role="group">
                            <button class="btn btn-danger" @click="deletetrajet(trajet.id)">Delete</button>
                        </div>
                        
                    </td>


                </tr>
            </tbody>

        </table>
    </div>
</template>

<script setup>
import axios from 'axios';
import { ref, onMounted } from 'vue';
const trajets = ref([]);

const fetchtrajet = async () => {
    await axios.get('http://127.0.0.1:8000/api/trajets').then((response) => { trajets.value = response.data }).catch((error) => {
        console.error('Error fetching users:', error);
    });

}
console.log(trajets);


const deletetrajet = async (id) => {

    await axios.delete(`http://localhost:8000/api/trajets/${id}`)
        .then(() => {
            let i = trajets.value.map(data =>

                data.id).indexOf(id);

            trajets.value.splice(i, 1)
        });

}
onMounted(() => {
    fetchtrajet();
});


</script>