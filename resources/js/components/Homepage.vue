<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <countries-search />
            </div>
        </div>
    </div>
</template>

<script>
import CountriesSearch from "./CountriesSearch.vue";

export default {
    components: {
        CountriesSearch,
    },
};
</script>
