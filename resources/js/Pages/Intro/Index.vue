<script setup>
import { ref } from 'vue'

// Dati reattivi
</script>

<template>
    <v-app>
        <v-container fluid class="d-flex align-center justify-center fill-height pa-0">
            <div class="outer-square">
                <v-row no-gutters class="inner-row">
                    <!-- Prima sezione -->
                    <v-col cols="12" sm="6" md="6" class="inner-square bg-grey-lighten-2">
                        <v-row class="fill-height ma-0" align="center" justify="center">
                            <v-col class="text-center pa-4">
                                <h1 class="text-h3 text-md-h2 font-weight-bold mb-4">
                                    Welcome to Our App
                                </h1>
                                <p class="text-subtitle-1 text-md-h6 mb-6">
                                    Your journey starts here.
                                </p>
                                <v-btn color="primary" size="large" :block="$vuetify.display.xs">
                                    Get Started
                                </v-btn>
                            </v-col>
                        </v-row>
                    </v-col>

                    <!-- Seconda sezione -->
                    <v-col cols="12" sm="6" md="6" class="inner-square bg-grey-lighten-3">
                        <v-row class="fill-height ma-0" align="center" justify="center">
                            <v-col class="text-center pa-4">
                                <h2 class="text-h4 text-md-h3 font-weight-medium mb-4">
                                    Join Us Today
                                </h2>
                                <p class="text-body-1 text-md-subtitle-1 mb-6">
                                    Create an account to get the most out of our services.
                                </p>
                                <v-btn color="secondary" size="large" :block="$vuetify.display.xs">
                                    Sign Up
                                </v-btn>
                            </v-col>
                        </v-row>
                    </v-col>
                </v-row>

                <v-row no-gutters class="inner-row">
                    <!-- Terza sezione -->
                    <v-col cols="12" sm="6" md="6" class="inner-square bg-grey-lighten-4">
                        <v-row class="fill-height ma-0" align="center" justify="center">
                            <v-col class="text-center pa-4">
                                <h2 class="text-h4 text-md-h3 font-weight-medium mb-4">
                                    Discover Features
                                </h2>
                                <p class="text-body-1 text-md-subtitle-1 mb-6">
                                    Explore what we have to offer.
                                </p>
                                <v-btn color="info" size="large" :block="$vuetify.display.xs">
                                    Learn More
                                </v-btn>
                            </v-col>
                        </v-row>
                    </v-col>

                    <!-- Quarta sezione -->
                    <v-col cols="12" sm="6" md="6" class="inner-square bg-grey-lighten-5">
                        <v-row class="fill-height ma-0" align="center" justify="center">
                            <v-col class="text-center pa-4">
                                <h2 class="text-h4 text-md-h3 font-weight-medium mb-4">
                                    Contact Support
                                </h2>
                                <p class="text-body-1 text-md-subtitle-1 mb-6">
                                    We're here to help you 24/7.
                                </p>
                                <v-btn color="success" size="large" :block="$vuetify.display.xs">
                                    Contact Us
                                </v-btn>
                            </v-col>
                        </v-row>
                    </v-col>
                </v-row>
            </div>
        </v-container>
    </v-app>
</template>

<style scoped>
.fill-height {
    height: 100vh;
}

.outer-square {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.inner-row {
    flex: 1;
}

.inner-square {
    border: 1px solid #ccc;
    min-height: 50vh;
}

/* Responsive adjustments */
@media (max-width: 600px) {
    .fill-height {
        height: auto;
        min-height: 100vh;
    }

    .inner-square {
        min-height: 40vh;
    }
}

@media (min-width: 960px) {
    .inner-square {
        min-height: 50vh;
    }
}
</style>