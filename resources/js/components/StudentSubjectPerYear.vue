<template>
    <v-card dark color="indigo lighten-3" :loading="loading">
        <v-card-title>
            <h3>getStudentSubjectPerYear(year, subject_id)</h3>
        </v-card-title>
        <v-card-text>
            <div>Gets the total number of students with specific grade of a specific subject with a specific year.</div>
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
                    v-model="subject_id" 
                    label="subject_id"
                    filled
                    ></v-text-field>
                </v-col>
                <v-col>
                    <v-btn 
                    block
                    class="mt-5"
                    color="primary"
                    :loading="loading"
                    @click="fetchStudentSubjectPerYear()">
                    Fetch
                    </v-btn>
                </v-col>
            </v-row>
            <div>
                URI: {{ `/api/getStudentSubjectPerYear/${year ? year : '{year}'}/${subject_id ? subject_id : '{subject_id}'}` }}
            </div>
        </v-card-text>

        <div class="bg-dark p-5">
            <div class="response">
                {{ response }}
                <div class="app-result mt-3">
                    <div>Result: {{ response.count }}</div>
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
        subject_id: '',
        response: {},
        loading: false,
    }),

    methods: {
        fetchStudentSubjectPerYear() {
            this.loading = true
            const year = this.year
            const subject_id = this.subject_id
            axios.get(`${window.origin}/api/getStudentSubjectPerYear/${year}/${subject_id}`)
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