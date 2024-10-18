<template>
    <div class="col-md-6 offset-md-3 border rounded p-4 mt-5 mb-5
    shadow">
        <h4 align="center">Add Announcement</h4>
        <form @submit.prevent="ajouterTrajet">
            <div class="row">
                <div class="col-md-6">
                    <label for="lieu_depart" class="form-label">Departure</label>

                    <input type="text" class="form-control" id="reference" v-model="trajet.lieu_depart">

                </div>
                <div class="col-md-6 ms-auto">

                    <label for="lieu_arrive" class="form-
    label">Destination</label>

                    <input type="texte" class="form-control" id="designation" v-model="trajet.lieu_arrive">

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">.
                    <label for="temps_depart" class="form-label">Departure Time</label>

                    <input type="date" class="form-control" id="marque" v-model="trajet.temps_depart">
                </div>
                <div class="col-md-6">.
                    <label for="temps_arrive" class="form-label">Arrival Time
</label>

                    <input type="date" class="form-control" id="marque" v-model="trajet.temps_arrive">
                </div>
                <div class="col-md-6 ms-auto">
                    <label for="prix" class="form-label">Price</label>

                    <input type="texte" class="form-control" id="qtestock" v-model="trajet.prix">

                </div>
                <div class="col-md-6 ms-auto">
                    <label for="vehicule" class="form-label">Vehicle</label>

                    <input type="texte" class="form-control" id="qtestock" v-model="trajet.vehicule">

                </div>
                <div class="col-md-6 ms-auto">
                    <label for="nbplace" class="form-label">Number Of Places</label>

                    <input type="texte" class="form-control" id="qtestock" v-model="trajet.nbplace">

                </div>
                <div class="col-md-6 ms-auto">
                    <label for="Hour" class="form-label">Hour</label>

                    <input type="texte" class="form-control" id="qtestock" v-model="trajet.heure">

                </div>
            </div>


            <br />
            <button type="submit" className="btn btn-outline-primary">
                <i class="fa-solid fa-floppy-disk"></i>Submit

            </button>
            <router-link to="/" class="btn btn-outline-danger mx-2">

                <i class="fa-solid fa-xmark"></i>Cancel
            </router-link>
        </form>
    </div>
</template>
<script setup>
import axios from 'axios';
import { ref } from "vue"
import { useRouter } from 'vue-router';
const router = useRouter()

const trajet = ref({
    lieu_depart: "",
    lieu_arrive: "",
    temps_depart: "",
    temps_arrive: "",
    heure:"",
    prix: 0.0,
    nbplace:0.0,
    vehicule: "",

})
const ajouterTrajet = async () => {
    await
        axios.post("http://localhost:8000/api/trajets/", trajet.value)
            .then(() => (

                router.push({ name: 'dashboard' })
                
            ))

            .catch(err => console.log(err))

}
</script>
<style scoped></style>