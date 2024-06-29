import "./bootstrap";
import "bootstrap";
import "@popperjs/core";

import { createApp } from "vue";
import Cities from "./components/Cities.vue";
import Weather from "./components/Weather.vue";
import Venues from "./components/Venues.vue";

const app = createApp();

app.component("cities", Cities);
app.component("weather", Weather);
app.component("venues", Venues);

app.mount("#app");
