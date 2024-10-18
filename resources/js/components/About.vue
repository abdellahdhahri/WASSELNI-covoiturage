<template>
    <div class="parcour" v-for="trajet in trajetres" :key="trajet.id">
        <h1>{{ trajet.lieu_depart }}</h1>

    </div>
   <div class="about">
    <h1>About Us</h1>
    <p>Welcome to Tunisie Covoiturage, where journeys become shared adventures and miles become moments. At [Your Company Name], we believe in the power of collective travel, forging connections, and reducing our carbon footprint one shared ride at a time.</p>
    <h1>Our Mission: Connecting Communities, Driving Sustainability

</h1>
<p>We are more than just a ride-sharing platform; we're a movement towards a greener, more connected world. Our mission is to empower communities through shared mobility, making transportation more sustainable and building meaningful connections along the way.</p>
<h2>Why Choose Tunisie Covoiturage?</h2>
<p>Green Commuting: We're committed to reducing emissions and promoting eco-friendly transportation options. Join us in creating a positive impact on the environment with every shared journey.

Community-Centric: Tunisie Covoiturage is more than a platform; it's a community. Connect with like-minded travelers, share stories, and make friends on the road less traveled.

Convenience and Affordability: Enjoy the convenience of shared rides at an affordable cost. Save money, reduce traffic, and make your daily commute more enjoyable.</p>
<h2>Join the [Your Company Name] Community Today</h2>
<p>Whether you're a daily commuter, an occasional traveler, or someone looking to share the ride and make a difference, Tunisie covoiturage is the platform for you. Embrace the journey, embrace shared mobility, and let's drive towards a sustainable future together.</p>
<p>Ready to share the ride? Sign up with Tunisie Covoiturage and be part of the movement towards a more connected, eco-conscious world.</p>

</div>

</template>
<script scoped>
import InputGroup from 'primevue/inputgroup';
import InputGroupAddon from 'primevue/inputgroupaddon';
import 'primeicons/primeicons.css'
import Button from 'primevue/button';

</script>
<style scoped>
.about{
    height: 600px;
    background-color: rgb(248, 215, 2);
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
    flex-wrap: nowrap;
    flex-direction: column;
}

</style>