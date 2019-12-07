<template>
    <v-card dark color="teal darken-4" :loading="loading">
        <v-card-title>
            <h3>getCurriculumStandingPerYear(year, curriculum_id, standing)</h3>
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
                    <v-select 
                    :items="standings"
                    v-model="standing" 
                    label="standing"
                    filled
                    ></v-select>
                </v-col>
                <v-col>
                    <v-btn 
                    block 
                    :loading="loading"
                    color="primary" 
                    @click="fetchCurriculumStandingPerYear()">
                    Fetch
                    </v-btn>
                </v-col>
            </v-row>
            <div>
                URI: {{ `/api/getCurriculumPerYear/${year ? year : '{year}'}/${curriculum_id ? curriculum_id : '{curriculum_id}'}/${standing ? standing : '{standing}'}` }}
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
        standings: Array,
    },
    
    data: () => ({
        year: '',
        curriculum_id: '',
        standing: '',
        response: {},
        loading: false,
    }),

    methods: {
        fetchCurriculumStandingPerYear() {
            this.loading = true
            const year = this.year
            const curriculum_id = this.curriculum_id
            const standing = this.standing
            axios.get(`${window.origin}/api/getCurriculumStandingPerYear/${year}/${curriculum_id}/${standing}`)
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