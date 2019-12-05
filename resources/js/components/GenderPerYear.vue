<template>
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3><code class="method">getGenderPerYear(year, gender)</code></h3>
                <code class="comment">
                    Gets the number of a specific gender of a specific year.
                </code>
                <div class="p-2 text-center">
                    <b>Parameters: </b>
                    <input 
                        type="text" 
                        v-model="year" 
                        placeholder="year"
                    >
                    <select 
                    type="text" 
                    v-model="gender" 
                    placeholder="gender">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                    <button @click="fetchGenderPerYear()">Fetch</button>
                </div>
                <div class="bg-dark p-5">
                    <code class="response">
                        {{ response }}
                        <div>
                            Count: {{ response.count }}
                        </div>
                    </code>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: () => ({
        year: '',
        gender: '',
        response: {},
    }),

    methods: {
        fetchGenderPerYear() {
            const year = this.year
            const gender = this.gender
            axios.get(`${window.origin}/api/getGenderPerYear/${year}/${gender}`)
            .then(res => {
                this.response = res.data
                console.log(res.data)
            })
        },
    }
}
</script>