<!--<template>
  <div class="flyer">
    <hr />

    <div class="container" style="display: list-item;">
      <div class="text">Rechercher Votre Trajet</div>
      <form @submit.prevent="rechercher">
        <div class="form-row">
          <div class="input-data">
            <input type="text" required id="lieu_depart" v-model="trajetr.lieu_depart">
            <div class="underline"></div>
            <label for="">Lieu de Depart</label>
          </div>
          <div class="input-data">
            <input type="text" id="lieu_arrive" required v-model="trajetr.lieu_arrive">
            <div class="underline"></div>
            <label for="">Lieu d'arrivé</label>
          </div>
          <div class="input-data">
            <input type="text" required id="temps_depart" v-model="trajetr.temps_depart">
            <div class="underline"></div>
            <label for="">date</label>
          </div>

          <button type="submit" class="btn btn-outline-primary">
            <i class="fa-solid fa-magnifying-glass"></i> Rechercher
          </button>
        </div>

      </form>
    </div>

    <div class="sep"
      style="width: 100%; height: 60px;background-color: rgba(255, 255, 255, 0.5);margin-top:50px;margin-bottom:50px">
    </div>


    <div class="result" id="res" v-if="trajetres && trajetres.length > 0" style="display: list-item;text-align: center;">
      <button type="button" class="btn btn-danger" @click="fermerres()"><i class="fa-solid fa-xmark"></i>Annuler</button>

      <span v-for="trajet in trajetres" :key="trajet.id">

        <div class="container" style="display: flex; flex-direction: row;">

          <div class="icon">
            <i class="fa-solid fa-car fa-shake" style=" height: 150px; margin-right: 10px;"></i>

          </div>
          <div class="details"
            style="display: flex;flex-direction: row; justify-content: space-between; align-items: center; ">

            <div style="margin: 50px;">
              <h5><i class="fa-solid fa-location-dot fa-fade"></i> {{ trajet.lieu_depart }}</h5>
            </div>
            <span class="separ" style="height: 30px; width: 4px; background-color: black;"></span>
            <div style="margin: 50px;">
              <h5><i class="fa-solid fa-location-dot fa-fade"></i> {{ trajet.lieu_arrive }}</h5>
            </div>
            <span class="separ" style="height: 30px; width: 4px; background-color: black;"></span>

            <div style="margin: 50px;">
              <h5><i class="fa-solid fa-calendar-days fa-fade"></i> {{ trajet.temps_depart }}</h5>
            </div>
            <span class="separ" style="height: 30px; width: 4px; background-color: black;"></span>

            <div style="margin: 50px;">
              <h5><i class="fa-solid fa-euro-sign fa-fade"></i> {{ trajet.prix }}</h5>
            </div>
            <span class="separ" style="height: 30px; width: 4px; background-color: black;"></span>

            <div style="margin-left: 300px;"><router-link :to="{ name: 'detailTrajets', params: { id: trajet.id } }">


                <button class="btn btn-primary">details</button> </router-link></div>

          </div>

        </div>

      </span>
    </div>
    <div class="result" id="res" v-else style="text-align: center;">
      <button type="button" class="btn btn-danger" @click="fermerres()"><i class="fa-solid fa-xmark"></i>Annuler</button>
      <br>

      <div class="alert alert-danger " role="alert">
        pas de trajet de {{ trajetr.lieu_depart }} a {{ trajetr.lieu_arrive }}</div>
    </div>




    <div class="sep"
      style="width: 100%; height: 60px;background-color: rgba(255, 255, 255, 0.5);margin-top:50px;margin-bottom:50px">
    </div>

    <div class="about">
      <div class="card1"
        style=" background-color:#fff;border-radius:20px;padding:20px 60px; width:22rem;box-shadow:0px 5px 15px rgba(0,0,0,0.25);height:20rem;margin: 30px; overflow: hidden;background-color: rgba(255, 255, 255, 0.5);">
        <p style=" padding-bottom:20px">

          En faisant le choix de produire un site entièrement en logiciel libre nous garantissons ainsi la souveraineté
          numérique de tous les usagers du covoiturage et la protection des données. Chacun peut contribuer au code source
          et faire de la mobilité partagée </p>
        <a class="btn btn-primary">Details</a>
      </div>
      <div class="card1"
        style=" background-color:#fff;border-radius:20px; padding:20px 60px; width:22rem;box-shadow:0px 5px 15px rgba(0,0,0,0.25);height:20rem;margin:30px; overflow: hidden;background-color: rgba(255, 255, 255, 0.5);">
        <p style=" padding-bottom:20px">

          Wasselni est un service de covoiturage gratuit, c'est-à-dire que le site ne prélève aucune commission sur les
          trajets, et c’est aussi sans publicité ! Les trajets sont donc moins chers pour les covoitureurs qui en
          partagent les frais. </p>
        <a class="btn btn-primary">Deatils</a>
      </div>
      <div class="card1"
        style=" background-color:#fff;border-radius:20px;padding:20px 60px; width:22rem;box-shadow:0px 5px 15px rgba(0,0,0,0.25);height:20rem; margin:30px; overflow: hidden;background-color: rgba(255, 255, 255, 0.5);">
        <p style=" padding-bottom:20px">

          Vous recherchez un accompagnement pour développer le covoiturage sur votre territoire ?

          Découvrez nos offres issues de 15 ans d'expérience et éprouvées auprès de 360 collectivités déjà accompagnées.
        </p>
        <a class="btn btn-primary">Details</a>
      </div>

    </div>

    <hr>

    <div class="sep" style="width: 100%; height: 40px;margin30px;background-color: rgba(255, 255, 255, 0.5);"></div>

    <div class="affiche">
      <div class="left">
        <img src="./img/cov1.png" alt="" style="height: 400px; width: 400px;">
        <p style="margin-left: 20px;">Possédez-vous un véhicule?
          Ne conduisez plus seuls !
          Faites des rencontres inoubliables et économisez plein de sous en partageant vos places libres et en
          transportant des colis.<br><br>
          <a class="btn btn-primary">Inscrivez-vous</a>
        </p>
      </div>
      <div class="right">
        <p style="margin-left: 20px;font-size: 16px;font-weight: 60px;"> Vous cherchez une voiture?
          3 solutions s’offrent à vous:
          Trouvez un conducteur qui vous emmène à votre destination finale
          Envoyez vos colis avec un conducteur de confiance
          Louez une voiture à 1€ et faites du covoiturage pour économiser vos frais de carburant et de péage
          <br>
          <br>
          <a class="btn btn-primary p-t 1">Inscrivez-vous</a>
        </p>

        <img src="./img/png.png" alt="" style="height: 500px; width: 600px;">

      </div>
    </div>
  </div>

  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="./img/img3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="./img/img2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="./img/cover.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</template>-->
<template>
  
<div class="background1">
  
  <h1 style="font-size: 150%; margin-top: 20px;">Search for your Destination</h1>
    
  <form @submit.prevent="rechercher">  
<div class="row mt-5" h-5 >
  <div class="search" style="display:flex;justify-content:center;align-items: center;" >
    <i class="fa-solid fa-car"></i><input type="text" id="lieu_depart" class="form-control" placeholder="Departure Point" aria-label="First name" style="width:15rem; margin-left:10px; margin-right:10px"  v-model="trajetr.lieu_depart"><i class="fa-solid fa-location-dot"></i>
  
  
    <input type="text" id="lieu_arrive" class="form-control" placeholder="Destination" aria-label="Last name" style="width:15rem; margin-left:10px; margin-right:10px"  v-model="trajetr.lieu_arrive"><i class="fa-solid fa-calendar-days"></i>
  
  
    <input type="date" class="form-control" id="temps_depart" placeholder="Last name" aria-label="Last name" style="width:15rem; margin-left:10px; margin-right:10px"  v-model="trajetr.temps_depart" onchange="formatDate()">
    
    <button type="submit" class="btn btn-outline-dark" >Search</button>


</div>


</div>
</form>

<div class="image-text">
                
            </div>
   

</div>
 

<div class="liste" >
  <h1 style=" margin margin-top: 40px;">Explore the Latest Announcement
 <span class="badge bg-secondary">New</span></h1>

<div class="parent"  >
  
  
  <div class="cardtrajet col" v-for="trajet in trajets" :key="trajet.id">
      <div class="content-box">
          <span class="card-title">{{ trajet.lieu_depart }}</span>
          <p class="card-content">
            {{ trajet.lieu_arrive }} <br>nombre de places : {{ trajet.nbplace }}
            </p>
            <router-link :to="{ name: 'detailTrajets', params: { id: trajet.id } }">            <span class="see-more">Detail</span></router-link>
      </div>
      <div class="date-box">
          <span class="month">{{trajet.temps_depart}}</span>
          
      </div>
  </div>
</div>
</div>
<div class="info" style="height: 700px; background-color: rgb(255, 254, 254); color: aliceblue; display: flex;justify-content:space-around;align-items: center;">
  
  <div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="login">
				<form class="form">
					<label for="chk" aria-hidden="true">Log in</label>
					<input class="input" type="email" name="email" placeholder="Email" required="">
					<input class="input" type="password" name="pswd" placeholder="Password" required="">
					<button>Log in</button>
				</form>
			</div>

      <div class="register">
				<form class="form">
					<label for="chk" aria-hidden="true">Register</label>
					<input class="input" type="text" name="txt" placeholder="Username" required="">
					<input class="input" type="email" name="email" placeholder="Email" required="">
					<input class="input" type="password" name="pswd" placeholder="Password" required="">
					<button>Register</button>
				</form>
			</div>
	</div>
  <div class="loader">
  <div class="scanner">
    <span>Join Us and Start the Journey...</span>
  </div>
  <br><br><br>
  <h1 style="color: rgba(79, 31, 5, 0.315);">Do you have a car? Sign up and add your route!</h1>
  <router-link to="/AjouterTrajet">
  <button class="btn2" type="button">
  <strong>Add route</strong>
  <div id="container-stars">
    <div id="stars"></div>
  </div>

  <div id="glow">
    <div class="circle"></div>
    <div class="circle"></div>
  </div>
</button></router-link>
</div>

</div>
<div class="about" style="margin-top: 100px; display:flex ;flex-direction: column; justify-content: center;align-items: center; background-color: rgb(201, 156, 8); height: 500px;margin-bottom: 100px;">
  <h1>Our Promises</h1>
  <div class="cardscontainer" style="display:flex;flex-direction:row;">
  <div class="card">
    <h2>ompanion</h2>
</div>
<div class="card">
    <h2>Confidence  </h2>
    
</div>
<div class="card">
    <h2>Economic</h2>
</div>
<div class="card">
    <h2>Fast</h2>
</div>
</div>
<button class="btn-about"> Learn More!
</button>
</div>
<div class="popular" style="display: flex; flex-direction: column;justify-content: center; text-align: center;">
  <h1>Popular Traject!</h1>
<div class="pop" style="height: 500px;display: flex;justify-content: space-around;  align-items: center; ">
  <div class="img-card">
<img src="./img/cover.jpg" alt="">
<h5 style="margin-top: 1.4rem; ">Connecting people, reducing carbon footprint – join the ride-sharing revolution!</h5>
</div>
<div class="img-card">
<img src="./img/covoiturage.jpg" alt="">
<h5 style="margin-top: 1.4rem; ">"From strangers to friends – building connections on the road less traveled."

</h5>
</div>
<div class="img-card">
<img src="./img/car.png" alt="">
<h5 style="margin-top: 1.4rem; ">Pooling resources, reducing emissions – let’s ride together for a better planet.</h5>
</div>
<div class="img-card">
<img src="./img/cov.png" alt="">
<h5 style="margin-top: 1.4rem; ">Sharing the ride, sharing the journey – because together, we travel farther.</h5>
</div>
</div>
</div>
</template>




<script setup>
import { useRoute, useRouter } from 'vue-router';
import 'animate.css';

import axios from 'axios';
import { ref, onMounted } from 'vue';
import Button from 'primevue/button';


import 'primeicons/primeicons.css'
import TabView from 'primevue/tabview';
import TabPanel from 'primevue/tabpanel';
const trajets = ref([]);
const trajetr = ref({});
const trajetres = ref({});
const router = useRouter()

const fetchtrajet = async () => {
  try {
    const response = await axios.get('http://localhost:8000/api/trajets/');
    trajets.value = response.data;
    console.log(trajets.value)

  } catch (error) {
    console.error('Error fetching trajets:', error);
  }
};

const rechercher = async () => {
  try {
    const response = await axios.get(`http://localhost:8000/api/rechercher?lieu_depart=${trajetr.value.lieu_depart}&lieu_arrive=${trajetr.value.lieu_arrive}`);
    trajetres.value = response.data;
    router
    //router.push({ name: 'recherche', params: { trajetres: trajetres.value } });
    console.log( 'resultat de la recherche', trajetres);
    router.push({ name: 'recherche', params: { trajetres: JSON.stringify(trajetres.value) } });

    
    
  } catch (error) {
    console.error('Error fetching trajets:', error);
  }
};
const fermerres = () => {
  //document.getElementById('res').style.display = 'none';
  const resDiv = document.getElementById('res');
  resDiv.innerHTML = '';
  resDiv.style.display = 'list-item';  // Vous pouvez ajuster 'block' selon la valeur par défaut souhaitée

};


onMounted(() => {
  fetchtrajet();
});
</script>


<style scoped>
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');


* {
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  padding: 10px;
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
}
.btn2  {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 13rem;
  overflow: hidden;
  height: 3rem;
  background-size: 300% 300%;
  backdrop-filter: blur(1rem);
  border-radius: 5rem;
  transition: 0.5s;
  animation: gradient_301 5s ease infinite;
  border: double 4px transparent;
  background-image: linear-gradient(#212121, #212121),  linear-gradient(137.48deg, #ffdb3b 10%,#FE53BB 45%, #8F51EA 67%, #0044ff 87%);
  background-origin: border-box;
  background-clip: content-box, border-box;
}

#container-stars {
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  overflow: hidden;
  transition: 0.5s;
  backdrop-filter: blur(1rem);
  border-radius: 5rem;
}

strong {
  z-index: 2;
  font-family: 'Avalors Personal Use';
  font-size: 12px;
  letter-spacing: 5px;
  color: #FFFFFF;
  text-shadow: 0 0 4px white;
}

#glow {
  position: absolute;
  display: flex;
  width: 12rem;
}

.circle {
  width: 100%;
  height: 30px;
  filter: blur(2rem);
  animation: pulse_3011 4s infinite;
  z-index: -1;
}

.circle:nth-of-type(1) {
  background: rgba(254, 83, 186, 0.636);
}

.circle:nth-of-type(2) {
  background: rgba(142, 81, 234, 0.704);
}

.btn:hover #container-stars {
  z-index: 1;
  background-color: #212121;
}

.btn:hover {
  transform: scale(1.1)
}

.btn:active {
  border: double 4px #FE53BB;
  background-origin: border-box;
  background-clip: content-box, border-box;
  animation: none;
}

.btn:active .circle {
  background: #FE53BB;
}

#stars {
  position: relative;
  background: transparent;
  width: 200rem;
  height: 200rem;
}

#stars::after {
  content: "";
  position: absolute;
  top: -10rem;
  left: -100rem;
  width: 100%;
  height: 100%;
  animation: animStarRotate 90s linear infinite;
}

#stars::after {
  background-image: radial-gradient(#ffffff 1px, transparent 1%);
  background-size: 50px 50px;
}

#stars::before {
  content: "";
  position: absolute;
  top: 0;
  left: -50%;
  width: 170%;
  height: 500%;
  animation: animStar 60s linear infinite;
}

#stars::before {
  background-image: radial-gradient(#ffffff 1px, transparent 1%);
  background-size: 50px 50px;
  opacity: 0.5;
}

@keyframes animStar {
  from {
    transform: translateY(0);
  }

  to {
    transform: translateY(-135rem);
  }
}

@keyframes animStarRotate {
  from {
    transform: rotate(360deg);
  }

  to {
    transform: rotate(0);
  }
}

@keyframes gradient_301 {
  0% {
    background-position: 0% 50%;
  }

  50% {
    background-position: 100% 50%;
  }

  100% {
    background-position: 0% 50%;
  }
}

@keyframes pulse_3011 {
  0% {
    transform: scale(0.75);
    box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.7);
  }

  70% {
    transform: scale(1);
    box-shadow: 0 0 0 10px rgba(0, 0, 0, 0);
  }

  100% {
    transform: scale(0.75);
    box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
  }
}

.img-card{
  border-radius: 250px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 200px;
  line-height: 1.4;
  

}
.img-card img{
  height: 250px;border-radius: 250px; width: 250px;
  box-shadow:  0px 5px 15px rgba(0,0,0.25,0.25); 
  border: 3px solid #f8cc08;
}
.parent {
  width:100%;
  padding: 20px;
  perspective: 1000px;
  
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
}
.liste{
  margin-top: 20px;
  text-align: center;
 
}
.cardtrajet {
  
  padding-top: 50px;
  /* border-radius: 10px; */
  border: 3px solid rgb(255, 255, 255);
  transform-style: preserve-3d;
  background: linear-gradient(135deg,#0000 18.75%,#f3f3f3 0 31.25%,#0000 0),
      repeating-linear-gradient(45deg,#f3f3f3 -6.25% 6.25%,#ffffff 0 18.75%);
  background-size: 60px 60px;
  background-position: 0 0, 0 0;
  background-color: #952222;
  width: 100%;
  box-shadow: rgba(142, 142, 142, 0.3) 0px 30px 30px -10px;
  transition: all 0.5s ease-in-out;
}

.cardtrajet:hover {
  background-position: -100px 100px, -100px 100px;
  transform: rotate3d(0.5, 1, 0, 30deg);
}

.content-box {
  background: rgba(206, 162, 1, 0.732);
  /* border-radius: 10px 100px 10px 10px; */
  transition: all 0.5s ease-in-out;
  padding: 60px 25px 25px 25px;
  transform-style: preserve-3d;
}

.content-box .card-title {
  display: inline-block;
  color: white;
  font-size: 25px;
  font-weight: 900;
  transition: all 0.5s ease-in-out;
  transform: translate3d(0px, 0px, 50px);
}

.content-box .card-title:hover {
  transform: translate3d(0px, 0px, 60px);
}

.content-box .card-content {
  margin-top: 10px;
  font-size: 12px;
  font-weight: 700;
  color: #f2f2f2;
  transition: all 0.5s ease-in-out;
  transform: translate3d(0px, 0px, 30px);
}

.content-box .card-content:hover {
  transform: translate3d(0px, 0px, 60px);
}

.content-box .see-more {
  cursor: pointer;
  margin-top: 1rem;
  display: inline-block;
  font-weight: 900;
  font-size: 9px;
  text-transform: uppercase;
  color: rgb(7, 185, 255);
  /* border-radius: 5px; */
  background: white;
  padding: 0.5rem 0.7rem;
  transition: all 0.5s ease-in-out;
  transform: translate3d(0px, 0px, 20px);
}

.content-box .see-more:hover {
  transform: translate3d(0px, 0px, 60px);
}

.date-box {
  position: absolute;
  top: 30px;
  right: 30px;
  height: 60px;
  width: 60px;
  background: white;
  border: 1px solid rgb(7, 185, 255);
  /* border-radius: 10px; */
  padding: 10px;
  transform: translate3d(0px, 0px, 80px);
  box-shadow: rgba(100, 100, 111, 0.2) 0px 17px 10px -10px;
}

.date-box span {
  display: block;
  text-align: center;
}

.date-box .month {
  color: rgb(4, 193, 250);
  font-size: 9px;
  font-weight: 700;
}

.date-box .date {
  font-size: 20px;
  font-weight: 900;
  color: rgb(4, 193, 250);
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
   
}
.card {
  position: relative;
  width: 300px;
  height: 200px;
  background-color: #f2f2f2;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  perspective: 1000px;
  box-shadow: 0 0 0 5px #ffffff80;
  transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  background: url('./img/cover.jpg') no-repeat center center;
  background-size: cover;
  position: relative;
  margin: 30px;
}

.card svg {
  width: 48px;
  fill: #333;
  transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.card:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 16px rgba(255, 255, 255, 0.2);
}

.card__content {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  padding: 20px;
  box-sizing: border-box;
  background-color: #f2f2f2;
  transform: rotateX(-90deg);
  transform-origin: bottom;
  transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.card:hover .card__content {
  transform: rotateX(0deg);
}

.card__title {
  margin: 0;
  font-size: 24px;
  color: #333;
  font-weight: 700;
}

.card:hover svg {
  scale: 0;
}

.card__description {
  margin: 10px 0 0;
  font-size: 14px;
  color: #777;
  line-height: 1.4;
}

.card22{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 400px;
    width: 400px;
}

.background1{
 margin-top: -10px;
  height:400px;
  width: 100%;
  
    background-image: url("./img/capture.jpg");
    background-size: cover;
    background-position: center;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;


}
.main {
  position: relative;
  display: flex;
  flex-direction: column;
  background-color: #ecc607;
  max-height: 420px;
  overflow: hidden;
  border-radius: 12px;
  box-shadow: 7px 7px 10px 3px #24004628;
}

.form {
  display: flex;
  flex-direction: column;
  gap: 14px;
  padding: 18px;
}

/*checkbox to switch from sign up to login*/
#chk {
  display: none;
}

/*Login*/
.login {
  position: relative;
  width: 100%;
  height: 100%;
}

.login label {
  margin: 25% 0 5%;
}

label {
  color: #fff;
  font-size: 2rem;
  justify-content: center;
  display: flex;
  font-weight: bold;
  cursor: pointer;
  transition: .5s ease-in-out;
}

.input {
  width: 100%;
  height: 40px;
  background: #e0dede;
  padding: 10px;
  border: none;
  outline: none;
  border-radius: 4px;
}

/*Register*/
.register {
  background: #eee;
  border-radius: 60% / 10%;
  transform: translateY(5%);
  transition: .8s ease-in-out;
}

.register label {
  color: #573b8a;
  transform: scale(.6);
}

#chk:checked ~ .register {
  transform: translateY(-60%);
}

#chk:checked ~ .register label {
  transform: scale(1);
  margin: 10% 0 5%;
}

#chk:checked ~ .login label {
  transform: scale(.6);
  margin: 5% 0 5%;
}   
/*Button*/
.form button {
  width: 85%;
  height: 40px;
  margin: 12px auto 10%;
  color: #fff;
  background: #573b8a;
  font-size: 1rem;
  font-weight: bold;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: .2s ease-in;
}

.form button:hover {
  background-color: #6d44b8;
}

.image-text {
  font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  font-size: 1.5rem;
    height: 400px;
    margin-right: 100px;
    margin-left: 700px;
    margin-top: 150px;
   
    /*background: rgba(0, 0, 0, 0.5);*/
    color: rgb(0, 0, 0);
}
.scanner span {
  color: transparent;
  font-size: 4rem;
  position: relative;
  overflow: hidden;
}

.scanner span::before {
  content: "Join Us and Sign-up fo Free!    More than 100 users ";
  position: absolute;
  top: 0;
  left: 0;
  width: 0;
  height: 100%;
  border-right: 3px solid #f6e208;
  overflow: hidden;
  color: #f1e908;
  animation: load91371 2s linear infinite;
}

@keyframes load91371 {
  0%, 10%, 100% {
    width: 0;
  }

  10%,20%,30%,40%,50%,60%,70%,80%,90%,100% {
    border-right-color: transparent;
  }

  11%,21%,31%,41%,51%,61%,71%,81%,91% {
    border-right-color: #17FEFF;
  }

  60%, 80% {
    width: 100%;
  }
}
.card {
  width: 190px;
  height: 254px;
  background: #07182E;
  position: relative;
  display: flex;
  place-content: center;
  place-items: center;
  overflow: hidden;
  border-radius: 20px;
}

.card h2 {
  z-index: 1;
  color: white;
  font-size: 2em;
}

.card::before {
  content: '';
  position: absolute;
  width: 100px;
  background-image: linear-gradient(180deg, rgb(0, 183, 255), rgb(255, 48, 255));
  height: 130%;
  animation: rotBGimg 3s linear infinite;
  transition: all 0.2s linear;
}

@keyframes rotBGimg {
  from {
    transform: rotate(0deg);
  }

  to {
    transform: rotate(360deg);
  }
}

.card::after {
  content: '';
  position: absolute;
  background: #07182E;
  ;
  inset: 5px;
  border-radius: 15px;
}  
/* .card:hover:before {
  background-image: linear-gradient(180deg, rgb(81, 255, 0), purple);
  animation: rotBGimg 3.5s linear infinite;
} */

.btn-about {
  font-size: 18px;
  letter-spacing: 2px;
  text-transform: uppercase;
  display: inline-block;
  text-align: center;
  font-weight: bold;
  padding: 0.7em 2em;
  border: 3px solid #FF0072;
  border-radius: 2px;
  position: relative;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.1);
  color: #FF0072;
  text-decoration: none;
  transition: 0.3s ease all;
  z-index: 1;
}

.btn-about:before {
  transition: 0.5s all ease;
  position: absolute;
  top: 0;
  left: 50%;
  right: 50%;
  bottom: 0;
  opacity: 0;
  content: '';
  background-color: #150b10;
  z-index: -1;
}

.btn-about:hover, button:focus {
  color: white;
}

.btn-about:hover:before, button:focus:before {
  transition: 0.5s all ease;
  left: 0;
  right: 0;
  opacity: 1;
}

.btn-about:active {
  transform: scale(0.9);
}
.image-text h1{
  line-height: 1.5;
}
.image-text h2{
  line-height: 1.5;
}
.image-text p{
  line-height: 1.5;
}
</style>

