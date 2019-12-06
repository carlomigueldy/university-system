<template>
    <v-card :loading="loading">
        <v-card-title>
            <h3>getSubjectGradePerYear(year, subject_id, grade)</h3>
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
                    <v-select 
                    v-model="grade" 
                    label="grade"
                    :items="['1.0','1.25','1.50','1.75','2.0','2.25','2.50','2.75','3.0','5.0','INC','DROP']"
                    filled
                    ></v-select>
                </v-col>
                <v-col>
                    <v-btn 
                    block
                    class="mt-5"
                    color="primary"
                    :loading="loading"
                    @click="fetchSubjectGradePerYear()">
                    Fetch
                    </v-btn>
                </v-col>
            </v-row>
            <div>
                URI: {{ `/api/getSubjectGradePerYear/${year ? year : '{year}'}/${subject_id ? subject_id : '{subject_id}'}/${grade ? grade : '{grade}'}` }}
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
        subject_id: '',
        grade: '',
        response: {},
        loading: false,
    }),

    methods: {
        fetchSubjectGradePerYear() {
            this.loading = true
            const year = this.year
            const subject_id = this.subject_id
            const grade = this.grade
            axios.get(`${window.origin}/api/getSubjectGradePerYear/${year}/${subject_id}/${grade}`)
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