<template>


<!--<section class="content">
    <div class="content_left" >
<table class="table-borderless">
  
  <tbody>
    <tr>
      <th scope="row">Lieu de depart : </th>
    </tr>
    <tr>
        <td>{{trajets.lieu_depart}}</td>
    </tr>
    <tr>
      <th scope="row">Lieu d'arrivé : </th>      
    </tr>
    <tr>
        <td>{{trajets.lieu_arrive}}</td>
    </tr>
    <tr>
      <th scope="row">Temps de depart : </th>
      
    </tr>
    <tr>
        <td>{{trajets.temps_depart}}</td>
    </tr>
    <tr>
      <th scope="row">Temps d'arrivé : </th>      
    </tr>
    <tr>
        <td>{{trajets.temps_depart}}</td>
    </tr>
    <tr>
      <th scope="row">Prix par place : </th>      
    </tr>
    <tr>
        <td>{{trajets.prix}}</td>
    </tr>
    <tr>
      <th scope="row">Vehicule : </th>
      
    </tr>
    <tr>
        <td>{{trajets.vehicule}}</td>

    </tr>

    
  </tbody>
</table>
</div>



    ==============================================
    <section class="content"><div class="content_left" >
        
        <h3>lieu de depart : </h3>
        <span>{{ trajets.lieu_depart }}</span>

        <h3>lieu d'arrivé : </h3>
        <span>{{ trajets.lieu_arrive }}</span>
        <h3>temps de depart : </h3>
        <span>{{ trajets.temps_depart }}</span>
        <h3>temps d'arrivé : </h3>
        <span>{{ trajets.temps_arrive }}</span>
        <h3>temps prix : </h3>
        <span>{{ trajets.prix }}</span>
        <h3>vehicule : </h3>
        <span>{{ trajets.vehicule }}</span>
        <h3>Chauffeur : </h3>
        

    </div>
    <div class="container_right" >
        <h1>map</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d104888.48554062765!2d10.650696972948474!3d34.76150777746942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13002cda1486c695%3A0x22dfe0a62c50ce6f!2sSfax!5e0!3m2!1sfr!2stn!4v1700755610376!5m2!1sfr!2stn" width="800" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
</section>-->

    <div class="plan">
		<div class="inner">
			<span class="pricing">
				<span>
					${{ trajets.prix }} <small></small>
				</span>
			</span>
			<p class="title">Announcement</p>
			<p class="info">Make sure to reserve your places</p>
			<ul class="features">
				<li>
					<span class="icon">
						<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path d="M0 0h24v24H0z" fill="none"></path>
							<path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
						</svg>
					</span>
					<span> Deparature : <strong>{{ trajets.lieu_depart }}</strong></span>
				</li>
				<li>
					<span class="icon">
						<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path d="M0 0h24v24H0z" fill="none"></path>
							<path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
						</svg>
					</span>
					<span>Destination : <strong>{{ trajets.lieu_arrive }}</strong></span>
				</li>
				<li>
					<span class="icon">
						<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path d="M0 0h24v24H0z" fill="none"></path>
							<path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
						</svg>
					</span>
					<span><strong>number of places : </strong>{{ trajets.nbplace }}</span>
				</li>
                <li>
					<span class="icon">
						<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path d="M0 0h24v24H0z" fill="none"></path>
							<path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
						</svg>
					</span>
					<span><strong>Date : </strong>{{ trajets.temps_depart }}</span>
				</li>
        <li>
					<span class="icon">
						<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path d="M0 0h24v24H0z" fill="none"></path>
							<path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
						</svg>
					</span>
					<span><strong>Hour : </strong>{{ trajets.heure }}</span>
				</li>
			</ul>
			<div class="action">
			<a class="button" href="#">
				Reserve
			</a>
      <button @onclick="goBack" class="button">
				Go Back
			</button>
			</div>
		</div>
	</div>
    
    <!--===================================-->
</template>
<style scoped>
.plan {
  border-radius: 16px;
  box-shadow: 0 30px 30px -25px rgba(0, 38, 255, 0.205);
  padding: 10px;
  background-color: #fff;
  color: #697e91;
  max-width: 1000px;
  margin-left: 300px;
  margin-top: 80px;
  margin-bottom:80px;
}

.plan strong {
  font-weight: 600;
  color: #425275;
}

.plan .inner {
  align-items: center;
  padding: 20px;
  padding-top: 40px;
  background-color: #ecf0ff;
  border-radius: 12px;
  position: relative;
}

.plan .pricing {
  position: absolute;
  top: 0;
  right: 0;
  background-color: #bed6fb;
  border-radius: 99em 0 0 99em;
  display: flex;
  align-items: center;
  padding: 0.625em 0.75em;
  font-size: 1.25rem;
  font-weight: 600;
  color: #425475;
}

.plan .pricing small {
  color: #919170;
  font-size: 0.75em;
  margin-left: 0.25em;
}

.plan .title {
  font-weight: 600;
  font-size: 1.25rem;
  color: #425675;
}

.plan .title + * {
  margin-top: 0.75rem;
}

.plan .info + * {
  margin-top: 1rem;
}

.plan .features {
  display: flex;
  flex-direction: column;
}

.plan .features li {
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.plan .features li + * {
  margin-top: 0.75rem;
}

.plan .features .icon {
  background-color: #1FCAC5;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  border-radius: 50%;
  width: 20px;
  height: 20px;
}

.plan .features .icon svg {
  width: 14px;
  height: 14px;
}

.plan .features + * {
  margin-top: 1.25rem;
}

.plan .action {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: end;
}

.plan .button {
  background-color: #6558d3;
  border-radius: 6px;
  color: #fff;
  font-weight: 500;
  font-size: 1.125rem;
  text-align: center;
  border: 0;
  outline: 0;
  width: 100%;
  padding: 0.625em 0.75em;
  text-decoration: none;
}

.plan .button:hover, .plan .button:focus {
  background-color: #4133B7;
}
.content{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    height: 40rem;
}
.container_right{
    width: 50%;
    border: 4px;
    border-width: 2px; /* Épaisseur de la bordure */
    border-style: solid; /* Style de la bordure (par exemple, solid, dashed, dotted) */
    border-color: #000;
    overflow: hidden;
    border-width: 2px; /* Épaisseur de la bordure */
    border-style: solid; /* Style de la bordure (par exemple, solid, dashed, dotted) */
    border-color: #000;
    border-radius: 30px;
}
.container_right h1{
    text-align: center;
}
.content_left{
    margin-top: 50px ;
    margin-left: 40px;
}
.container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(5px);
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 3px;
            font-size: 14px;
        }
        button[type="submit"] {
            width: 100%;
            padding: 8px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
</style>
<script setup>
import axios from "axios";
import {ref,onMounted} from 'vue';
import { useRouter,useRoute } from 'vue-router';
const router = useRouter() ;
const route = useRoute();
const trajets =ref({
    lieu_depart : "",
    lieu_arrive : "",
    temps_depart : "",
     temps_arrive : "",
    prix : "",
    vehicule : "",

});
console.log(route.params.id)
  
const gettrajet = async(id) => {
  console.log(route.params.id);

    await axios.get('http://localhost:8000/api/trajets/'+route.params.id).then((response) =>{trajets.value = response.data;}).catch ((error) =>{
console.error('Error fetching users:', error);

});
}
const goBack = () => {
  // Utilisez la méthode go(-1) pour revenir à la page précédente
  router.go(-1);
};
console.log(trajets);

onMounted(() => {
gettrajet();
});
</script>
