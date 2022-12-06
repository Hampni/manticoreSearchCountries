<template>
    <div class="container" style="padding-top: 10em">
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-l">
                <form action="/search">
                    <input
                        class="form-control"
                        v-model="requestCountry"
                        type="text"
                        name="sdf"
                        id="dsaf"
                        placeholder="start typing country name"
                        style="border: 1px solid red"
                    />
                </form>
                <div style="padding-top: 10px">
                    <div v-for="country in countries" :key="country.id">
                        <button
                            @click="chooseCountry(country.name)"
                            v-if="(country.name != requestCountry && country.name)"
                            type="button"
                            class="btn btn-secondary btn-lg btn-block"
                        >
                            {{ country.name }}
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <button @click="submit()" type="button" class="btn btn-primary">
                    Submit
                </button>
            </div>
        </div>
    </div>
</template>

<script>
import { searchCountry } from "../api.js";

export default {
    data() {
        return {
            countries: [],
            requestCountry: "",
        };
    },

    mounted() {},

    methods: {
        sendRequest() {
            console.log("hello world");
        },

        async searchCountry() {
            let rowData = await searchCountry(this.requestCountry);
            let countriesList = await rowData;
            this.countries = countriesList.data;
        },

        submit() {
            alert(`Sending ${this.requestCountry}`);
        },

        chooseCountry(countryName) {
            this.requestCountry = countryName;
        },
    },

    watch: {
        requestCountry() {
            this.searchCountry();
        },
    },
};
</script>
