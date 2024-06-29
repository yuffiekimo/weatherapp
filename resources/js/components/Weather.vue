<script setup>

import { ref } from 'vue'
import moment from 'moment'

const props = defineProps(['city'])
const displayWeather = ref('')
const imageUrl = ref('')

console.log(props.city)

const getWeather = async () => {
    const response = await fetch(`/api/weather?city=${props.city}`)
    displayWeather.value = await response.json()
    imageUrl.value = `<img src="https://openweathermap.org/img/wn/${displayWeather.value.weather[0].icon}@2x.png" width="100px">`
}

getWeather()

</script>

<template>
    <!-- {{ displayWeather }} -->
    <div v-if="displayWeather">
        <h4>Weather</h4>

        <div class="h-100 p-5 bg-body-tertiary border rounded-3">

            <div class="d-flex">
                <h6 class="flex-grow-1">{{ displayWeather.name }}</h6>
                <h6>{{ moment.unix(displayWeather.dt).format('MMM DD YYYY h:mm a') }}</h6>
            </div>

            <div class="d-flex flex-column text-center mt-5 mb-4">
                <h6 class="display-4 mb-0 font-weight-bold" style="color: #1C2331;"> {{
                    Math.round(displayWeather.main.temp) }}°C </h6>
                <span class="small" style="color: #868B94">{{ displayWeather.weather[0].description }}</span>
                <span class="small" style="color: #868B94">feels like {{ Math.round(displayWeather.main.feels_like) }}°C
                </span>
            </div>

            <div class="d-flex align-items-center">
                <div class="flex-grow-1" style="font-size: 1rem;">
                    <div><i class="fas fa-wind fa-fw" style="color: #868B94;"></i> <span class="ms-1"> {{
                            displayWeather.wind.speed }} km/h </span></div>
                    <div><i class="fas fa-tint fa-fw" style="color: #868B94;"></i> <span class="ms-1"> {{
                            displayWeather.main.humidity }}% </span></div>
                    <div><i class="fas fa-gauge fa-fw" style="color: #868B94;"></i> <span class="ms-1"> {{
                            displayWeather.main.pressure }}hPA </span></div>
                    <div><i class="fas fa-eye fa-fw" style="color: #868B94;"></i> <span class="ms-1"> {{
                            displayWeather.visibility / 1000 }}km </span></div>
                </div>
                <div>
                    <span v-html="imageUrl"></span>
                </div>
            </div>

        </div>

    </div>

</template>