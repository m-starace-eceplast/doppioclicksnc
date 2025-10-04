<script setup>
import { ref } from 'vue'

const handleClick = () => {
    alert('Stack configurato correttamente!')
}
</script>

<template>
    <v-app>
        <v-main>
            <v-container>
                <v-row justify="center">
                    <v-col cols="12" md="8">
                        <v-card>
                            <v-card-title>
                                <h1 class="text-h4">Benvenuto in Laravel + Vue + Vuetify + Inertia!</h1>
                            </v-card-title>
                            <v-card-text>
                                <p>Il tuo stack è configurato correttamente.</p>
                                <v-btn color="primary" @click="handleClick">
                                    <v-icon left>mdi-heart</v-icon>
                                    Clicca qui
                                </v-btn>
                            </v-card-text>
                        </v-card>
                    </v-col>
                </v-row>
            </v-container>
        </v-main>
    </v-app>
</template>

