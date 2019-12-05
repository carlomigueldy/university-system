<template>
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3><code class="method">getStudentPerYear(year)</code></h3>
                <code class="comment">
                    Gets the number of students of a specific year.
                </code>
                <div class="p-2">
                    <b>Parameters: </b>
                    <input 
                        type="text" 
                        v-model="year" 
                        placeholder="year">
                    <button @click="fetchStudentPerYear()">Fetch</button>
                </div>
                <div class="app-uri pt-2">
                    URI: {{ `/api/getStudentPerYear/${year ? year : '{year}'}` }}
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
        response: {},
    }),

    methods: {
        fetchStudentPerYear() {
            const year = this.year
            axios.get(`${window.origin}/api/getStudentPerYear/${year}`)
            .then(res => {
                this.response = res.data
                console.log(res.data)
            })
        },
    }
}
</script>