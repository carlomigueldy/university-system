<template>
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3><code class="method">getSubjectSemesterYear(year, semester, subject_id)</code></h3>
                <code class="comment">
                    Gets the number of students that took a specific subject in a specific semester with a specific year.
                </code>
                <div class="p-2">
                    <b>Parameters: </b>
                    <input 
                    type="text" 
                    v-model="year" 
                    placeholder="year">
                    <select v-model="semester">
                        <option value="1">1st Semester</option>
                        <option value="2">2nd Semester</option>
                    </select>
                    <input 
                    type="text" 
                    v-model="subject_id" 
                    placeholder="subject_id">
                    <button @click="fetchSubjectSemesterYear()">Fetch</button>
                </div>
                <div class="app-uri pt-2">
                    URI: {{ `/api/getSubjectSemesterYear/${year ? year : '{year}'}/${semester ? semester : '{semester}'}/${subject_id ? subject_id : '{subject_id}'}` }}
                </div>
            </div>
        </div>

        <div class="bg-dark p-5">
            <code class="response">
                {{ response }}
                <div class="app-result mt-3">
                    Result: {{ response.count }}
                </div>
            </code>
        </div>
    </div>
</template>

<script>
export default {
    data: () => ({
        year: '',
        semester: '',
        subject_id: '',
        response: {},
    }),

    methods: {
        fetchSubjectSemesterYear() {
            const year = this.year
            const semester = this.semester
            const subject_id = this.subject_id
            axios.get(`${window.origin}/api/getSubjectSemesterYear/${year}/${semester}/${subject_id}`)
            .then(res => {
                this.response = res.data
                console.log(res.data)
            })
        },
    }
}
</script>