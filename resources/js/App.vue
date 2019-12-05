<template>
    <div class="container app-font">
        <div class="text-center">
            <h1 class="mt-5"> 
                <span class="text-danger">E</span>xtract 
                <span class="text-success">T</span>ransform 
                <span class="text-primary">L</span>oad 
                <span class="text-info">API</span> 
            </h1>
            <h6>by <a href="https://carlomigueldy.com" target="_blank">Carlo Miguel Dy</a> </h6>
        </div>
        <div class="mt-5">
            <a href="https://www.tutorialspoint.com/r/r_linear_regression.htm" target="_blank" class="my-font">Linear Regression Tutorial</a>
            <SubjectGradePerYear class="mb-5" />
            <GenderPerYear class="mb-5" />
            <StudentPerYear class="mb-5" />
            <CurriculumPerYear class="mb-5" />
            <SubjectSemesterYear class="mb-5" />
        </div>
    </div>
</template>

<script>
import SubjectGradePerYear from './components/SubjectGradePerYear'
import GenderPerYear from './components/GenderPerYear'
import StudentPerYear from './components/StudentPerYear'
import CurriculumPerYear from './components/CurriculumPerYear'
import SubjectSemesterYear from './components/SubjectSemesterYear'

export default {
    components: {
        SubjectGradePerYear,
        GenderPerYear,
        StudentPerYear,
        CurriculumPerYear,
        SubjectSemesterYear,
    }
}
</script>

<style>
.app-font {
    font-family:'Courier New', Courier, monospace;
}

.app-uri {
    color: darkblue;
    font-weight: bold;
}

.app-result {
    color: lightgreen;
    font-size: 16px;
}

.comment {
    color: black;
    font-weight: 500;
    font-size: 18px;
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