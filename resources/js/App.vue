<template>
    <div class="container">
        <div class="mt-5">
            <a href="https://www.tutorialspoint.com/r/r_linear_regression.htm" target="_blank">Linear Regression</a>
            <SubjectGradePerYear class="mb-3" />
            <GenderPerYear class="mb-3" />

        </div>
    </div>
</template>

<script>
import SubjectGradePerYear from './components/SubjectGradePerYear'
import GenderPerYear from './components/GenderPerYear'

export default {
    components: {
        SubjectGradePerYear,
        GenderPerYear,
    }
}
</script>

<style>
.comment {
    color: black;
    font-weight: 500;
} 

.method {
    color: blueviolet;
    font-weight: bold;
}

.response {
    color: lightskyblue;
    font-weight: 700;
}
</style>