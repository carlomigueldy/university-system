<template>
    <v-card :loading="loading">
        <v-card-title>
            <h3>getStudentPerYear(year)</h3>
        </v-card-title>
        <v-card-text>
            <div>Gets the number of students of a specific year.</div>
            <v-row>
                <v-col cols="2">
                    <b>Parameters: </b>
                </v-col>
                <v-col>
                    <v-select 
                    :items="years"
                    v-model="year" 
                    label="year"
                    filled
                    ></v-select>
                </v-col>
                <v-col>
                    <v-btn 
                    block
                    class="mt-5"
                    color="primary"
                    :loading="loading"
                    @click="fetchStudentPerYear()">
                    Fetch
                    </v-btn>
                </v-col>
            </v-row>
            <div>
                URI: {{ `/api/getStudentPerYear/${year ? year : '{year}'}` }}
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
        response: {},
        loading: false,
    }),

    methods: {
        fetchStudentPerYear() {
            this.loading = true
            const year = this.year
            axios.get(`${window.origin}/api/getStudentPerYear/${year}`)
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