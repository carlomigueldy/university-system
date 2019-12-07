<template>
    <v-card dark color="green" :loading="loading">
        <v-card-title>
            <h3>getCollegeGenderYear(year, college_id, gender)</h3>
        </v-card-title>
        <v-card-text>
            <div>Gets all the number of students of a specific gender in a specific college in a specific year.</div>
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
                    v-model="college_id" 
                    :items="colleges"
                    item-text="name"
                    item-value="id"
                    label="college"
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
                URI: {{ `/api/getCollegeGenderYear/${year ? year : '{year}'}/${college_id ? college_id : '{college_id}'}/${gender ? gender : '{gender}'}` }}
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
        colleges: Array,
    },
    
    data: () => ({
        year: '',
        college_id: '',
        gender: '',
        response: {},
        loading: false,
    }),

    methods: {
        fetchGenderPerYear() {
            this.loading = true
            const year = this.year
            const gender = this.gender
            const college_id = this.college_id
            axios.get(`${window.origin}/api/getCollegeGenderYear/${year}/${college_id}/${gender}`)
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