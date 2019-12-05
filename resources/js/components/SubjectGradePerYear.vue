<template>
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3><code class="method">getSubjectGradePerYear(year, subject_id, grade)</code></h3>
                <code class="comment">
                    Gets the total number of students with specific grade of a specific subject with a specific year.
                </code>
                <div class="p-2">
                    <b>Parameters: </b>
                    <input 
                    type="text" 
                    v-model="year" 
                    placeholder="year">
                    <input 
                    type="text" 
                    v-model="subject_id" 
                    placeholder="subject_id">
                    <select 
                    type="text" 
                    v-model="grade" 
                    placeholder="grade">
                        <option>1.0</option>
                        <option>1.25</option>
                        <option>1.50</option>
                        <option>1.75</option>
                        <option>2.0</option>
                        <option>2.25</option>
                        <option>2.50</option>
                        <option>2.75</option>
                        <option>3.0</option>
                        <option>5.0</option>
                        <option>INC</option>
                        <option>DROP</option>
                    </select>
                    <button @click="fetchSubjectGradePerYear()">Fetch</button>
                </div>
                <div class="app-uri pt-2">
                    URI: {{ `/api/getSubjectGradePerYear/${year ? year : '{year}'}/${subject_id ? subject_id : '{subject_id}'}/${grade ? grade : '{grade}'}` }}
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
        subject_id: '',
        grade: '',
        response: {},
    }),

    methods: {
        fetchSubjectGradePerYear() {
            const year = this.year
            const subject_id = this.subject_id
            const grade = this.grade
            axios.get(`${window.origin}/api/getSubjectGradePerYear/${year}/${subject_id}/${grade}`)
            .then(res => {
                this.response = res.data
                console.log(res.data)
            })
        },
    }
}
</script>