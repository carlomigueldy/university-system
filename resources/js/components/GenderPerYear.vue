<template>
    <v-card :loading="loading">
        <v-card-title>
            <h3>getGenderPerYear(year, gender)</h3>
        </v-card-title>
        <v-card-text>
            <div>Gets the number of a specific gender of a specific year.</div>
            <v-row>
                <v-col cols="2">
                    <b>Parameters: </b>
                </v-col>
                <v-col>
                    <v-select 
                    v-model="year" 
                    :items="years"
                    label="year"
                    filled
                    ></v-select>
                </v-col>
                <v-col>
                    <v-select 
                    :items="['Male', 'Female']"
                    v-model="gender" 
                    label="gender"
                    filled
                    ></v-select>
                </v-col>
                <v-col>
                    <v-btn 
                    class="mt-5"
                    block
                    color="primary"
                    :loading="loading"
                    @click="fetchGenderPerYear()">
                    Fetch
                    </v-btn>
                </v-col>
            </v-row>
            <div>
                URI: {{ `/api/getGenderPerYear/${year ? year : '{year}'}/${gender ? gender : '{gender}'}` }}
            </div>
        </v-card-text>

        <div class="bg-dark p-5">
            <div class="response">
                {{ response }}
                <div class="app-result mt-3">
                    Result: {{ response.count }}
                </div>
            </div>
        </div>
    </v-card>
</template>

<script>
import axios from 'axios'

export default {
    props: {
        years: Array,
    },
    
    data: () => ({
        year: '',
        gender: '',
        response: {},
        loading: false,
    }),

    methods: {
        fetchGenderPerYear() {
            this.loading = true
            const year = this.year
            const gender = this.gender
            axios.get(`${window.origin}/api/getGenderPerYear/${year}/${gender}`)
            .then(res => {
                this.response = res.data
                this.loading = false
                console.log(res.data)
            })
            .catch(err => {
                this.loading = false
                console.log(err.response)
            })
        },
    }
}
</script>