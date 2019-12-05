<template>
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3><code class="method">getCurriculumPerYear(year, curriculum_id)</code></h3>
                <code class="comment">
                    Gets the number of students of a specific curriculum in a specific year.
                </code>
                <div class="p-2">
                    <b>Parameters: </b>
                    <input 
                    type="text" 
                    v-model="year" 
                    placeholder="year">
                    <input 
                    type="text" 
                    v-model="curriculum_id" 
                    placeholder="curriculum_id">
                    <button @click="fetchCurriculumPerYear()">Fetch</button>
                </div>
                <div class="app-uri pt-2">
                    URI: {{ `/api/getCurriculumPerYear/${year ? year : '{year}'}/${curriculum_id ? curriculum_id : '{curriculum_id}'}` }}
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
        curriculum_id: '',
        response: {},
    }),

    methods: {
        fetchCurriculumPerYear() {
            const year = this.year
            const curriculum_id = this.curriculum_id
            axios.get(`${window.origin}/api/getCurriculumPerYear/${year}/${curriculum_id}`)
            .then(res => {
                this.response = res.data
                console.log(res.data)
            })
        },
    }
}
</script>