<script setup>

import { ref } from 'vue'

let cityList = ['Tokyo', 'Yokohama', 'Kyoto', 'Osaka', 'Sapporo', 'Nagoya']

const weatherComponentKey = ref(Date.now())
const venuesComponentKey = ref(Date.now())
const cities = ref(cityList)
const selected = ref('')

selected.value = cityList.at(0)

const updateComponents = (t) => {
    selected.value = t;
    weatherComponentKey.value = Date.now()
    venuesComponentKey.value = Date.now() + 1
}

const isActive = (c) => {
    let res = (selected.value == c) ? 'active' : ''
    return `nav-link ${res}`
}

</script>

<template>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">City Traveler</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" v-for="city of cities" @click="updateComponents(city)">
                        <a :class=isActive(city) href="#">{{ city }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-4">

        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <weather :key="weatherComponentKey" :city="selected" />
            </div>
            <div class="col-md-6">
                <venues :key="venuesComponentKey" :city="selected" />
            </div>
        </div>

    </div>
</template>