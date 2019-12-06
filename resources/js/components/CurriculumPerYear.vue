<template>
    <v-card :loading="loading">
        <v-card-title>
            <h3>getCurriculumPerYear(year, curriculum_id)</h3>
        </v-card-title>
        <v-card-text>
            <div>Gets the number of students of a specific curriculum in a specific year.</div>
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
                    <v-text-field 
                    v-model="curriculum_id" 
                    label="curriculum_id"
                    filled
                    ></v-text-field>
                </v-col>
                <v-col>
                    <v-btn 
                    block 
                    :loading="loading"
                    color="primary" 
                    @click="fetchCurriculumPerYear()">
                    Fetch
                    </v-btn>
                </v-col>
            </v-row>
            <div>
                URI: {{ `/api/getCurriculumPerYear/${year ? year : '{year}'}/${curriculum_id ? curriculum_id : '{curriculum_id}'}` }}
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
        curriculum_id: '',
        response: {},
        loading: false,
    }),

    methods: {
        fetchCurriculumPerYear() {
            this.loading = true
            const year = this.year
            const curriculum_id = this.curriculum_id
            axios.get(`${window.origin}/api/getCurriculumPerYear/${year}/${curriculum_id}`)
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