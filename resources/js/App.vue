<template>
    <v-app class="app-font">
        <div class="text-center">
            <h1 class="mt-5"> 
                <span class="text-danger">E</span>xtract 
                <span class="text-success">T</span>ransform 
                <span class="text-primary">L</span>oad 
                <span class="text-info">API</span> 
            </h1>
            <h6>by <a href="https://carlomigueldy.com" target="_blank">Carlo Miguel Dy</a> </h6>
        </div>
        <v-container class="mt-5">
            <a href="https://www.tutorialspoint.com/r/r_linear_regression.htm" target="_blank" class="my-font">Linear Regression Tutorial</a>
            <v-content>
                <SubjectGradePerYear :years="years" class="mb-5" />
                <GenderPerYear :years="years" class="mb-5" />
                <StudentPerYear :years="years" class="mb-5" />
                <CurriculumPerYear :years="years" class="mb-5" />
                <CurriculumStandingPerYear :standings="standings" :years="years" class="mb-5" />
                <SubjectSemesterYear :years="years" class="mb-5" />
                <CollegeGenderYear :years="years" :colleges="colleges" />
            </v-content>
        </v-container>
    </v-app>
</template>

<script>
import SubjectGradePerYear from './components/SubjectGradePerYear'
import GenderPerYear from './components/GenderPerYear'
import StudentPerYear from './components/StudentPerYear'
import CurriculumPerYear from './components/CurriculumPerYear'
import SubjectSemesterYear from './components/SubjectSemesterYear'
import CurriculumStandingPerYear from './components/CurriculumStandingPerYear'
import CollegeGenderYear from './components/CollegeGenderYear'

export default {
    components: {
        SubjectGradePerYear,
        GenderPerYear,
        StudentPerYear,
        CurriculumPerYear,
        SubjectSemesterYear,
        CurriculumStandingPerYear,
        CollegeGenderYear,
    },

    data: () => ({
        years: [],
        standings: [
            '1st Year',
            '2nd Year',
            '3rd Year',
            '4th Year',
        ],
        colleges: [
            {
                id: 1,
                name: 'College of Computer Studies',
            },
            {
                id: 2,
                name: 'College of Business Administration and Accountancy',
            },
            {
                id: 3,
                name: 'College of Social Arts and Sciences',
            },
            {
                id: 4,
                name: 'College of Nursing',
            },
            {
                id: 5,
                name: 'College of Education',
            },
            {
                id: 6,
                name: 'College of Engineering and Technology',
            },
            {
                id: 7,
                name: 'College of Science and Mathematics',
            },
        ],
    }),

    created() {
        const year = 1980
        for (let i = 0; i < 39; i++) {
            this.years.push(year + i)
        }

        console.log(this.years)
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