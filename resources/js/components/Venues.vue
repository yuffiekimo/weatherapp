<script setup>

import { ref } from 'vue'

const props = defineProps(['city'])
const nearVenues = ref('')
const geoloc = ref('')

const listNearVenues = async (v) => {
    const response = await fetch(`/api/venues/search?near=${v}`)
    const result = await response.json()
    nearVenues.value = result.results
    // console.log(nearVenues)

    nearVenues.value.forEach(element => {
        element.geocodes.main.gmap = `            
                <i class="far fa-map"></i>
                <a target="_blank" href="https://maps.google.com/?q=${element.geocodes.main.latitude},${element.geocodes.main.longitude}">Show</a>
                `
    });
}

listNearVenues(props.city)

</script>

<template>

    <div v-if="nearVenues">
        <h4>{{ props.city }} Nearby Places</h4>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item" v-for="(nearVenue, i) of nearVenues" :key="nearVenue">
                <h2 class="accordion-header" :id="`h_${i}`">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        :data-bs-target="`#c_${i}`" aria-expanded="true" :aria-controls="`c_${i}`">
                        {{ nearVenue.name }}
                    </button>
                </h2>
                <div :id="`c_${i}`" class="accordion-collapse collapse" :aria-labelledby="`h_${i}`"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>{{ nearVenue.categories[0].name }}</strong>
                        <br />
                        <span>
                            {{ nearVenue.location.formatted_address }}
                        </span>
                        <br />
                        <span>
                            Distance: {{ nearVenue.distance }} Lat: {{ nearVenue.geocodes.main.latitude }} Long: {{
                                nearVenue.geocodes.main.longitude }}
                        </span>
                        <br />
                        <span v-html="nearVenue.geocodes.main.gmap"></span>
                    </div>
                </div>
            </div>
        </div>

    </div>

</template>