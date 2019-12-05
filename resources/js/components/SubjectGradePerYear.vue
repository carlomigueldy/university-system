<template>
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3><code class="method">getSubjectGradePerYear(year, subject_id, grade)</code></h3>
                <code class="comment">
                    Gets the total number of students with specific grade of a specific subject with a specific year.
                </code>
                <div class="p-2 text-center">
                    <b>Parameters: </b>
                    <input 
                        type="text" 
                        v-model="year" 
                        placeholder="year"
                    >
                    <input 
                        type="text" 
                        v-model="subject_id" 
                        placeholder="subject_id"
                    >
                    <input 
                        type="text" 
                        v-model="grade" 
                        placeholder="grade"
                    >
                    <button @click="fetchSubjectGradePerYear()">Fetch</button>
                </div>
                <div class="bg-dark p-5">
                    <code class="response"> {{ response }} </code>
                </div>
            </div>
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