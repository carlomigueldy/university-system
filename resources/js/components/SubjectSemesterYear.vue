<template>
    <v-card :loading="loading">
        <v-card-title>
            <h3>getSubjectSemesterYear(year, semester, subject_id)</h3>
        </v-card-title>
        <v-card-text>
            <div>Gets the number of students that took a specific subject in a specific semester with a specific year.</div>
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
                    <v-select 
                    :items="semesters"
                    label="semester"
                    item-text="semester"
                    item-value="id"
                    v-model="semester"
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
                    @click="fetchSubjectSemesterYear()">
                    Fetch
                    </v-btn>
                </v-col>
            </v-row>
            <div>
                URI: {{ `/api/getSubjectSemesterYear/${year ? year : '{year}'}/${semester ? semester : '{semester}'}/${subject_id ? subject_id : '{subject_id}'}` }}
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
        semester: '',
        subject_id: '',
        response: {},
        loading: false,
        semesters: [
            {
                id: 1,
                semester: '1st Semester',
            },
            {
                id: 2,
                semester: '2nd Semester',
            }
        ]
    }),

    methods: {
        fetchSubjectSemesterYear() {
            this.loading = true
            const year = this.year
            const semester = this.semester
            const subject_id = this.subject_id
            axios.get(`${window.origin}/api/getSubjectSemesterYear/${year}/${semester}/${subject_id}`)
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