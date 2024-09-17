<template>
    <div class="signUp">
        <img src="../Images/spotify-transparent.png" class="main_img" alt="spotify"/>
        <div class="facebookButton">
            <button>SIGN UP WITH FACEBOOK</button>
        </div>
        <hr />
        <div>
            <p class="signUpEmail">Sign up with your email address</p>
            <form @submit.prevent="submitForm">
                <input type="text" v-model="form.email" placeholder="name@domain.com" required /><br />
                <input type="text" v-model="form.firstName" placeholder="First Name..." required /><br />
                <input type="text" v-model="form.lastName" placeholder="Last Name..." required /><br />
                <span>Date of birth:</span><br />
                <div class="date_of_birth">
                    <select id="month" v-model="form.month" required>
                        <option v-for="month in months" :key="month.value" :value="month.value">
                            {{ month.text }}
                        </option>
                    </select>
                    <select id="day" v-model="form.day" required>
                        <option v-for="day in days" :key="day" :value="day">{{ day }}</option>
                    </select>
                    <select id="year" v-model="form.year" required>
                        <option v-for="year in years" :key="year" :value="year">{{ year }}</option>
                    </select>
                </div>
                <button type="submit" id="submit">Submit!</button>
            </form>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        const currentDate = new Date();
        return {
            form: {
                email: '',
                firstName: '',
                lastName: '',
                month: currentDate.getMonth() + 1, // getMonth() is zero-based, so we add 1
                day: currentDate.getDate(),
                year: currentDate.getFullYear()
            },
            months: [
                { value: 1, text: 'January' },
                { value: 2, text: 'February' },
                { value: 3, text: 'March' },
                { value: 4, text: 'April' },
                { value: 5, text: 'May' },
                { value: 6, text: 'June' },
                { value: 7, text: 'July' },
                { value: 8, text: 'August' },
                { value: 9, text: 'September' },
                { value: 10, text: 'October' },
                { value: 11, text: 'November' },
                { value: 12, text: 'December' }
            ],
            days: [],
            years: []
        };
    },
    mounted() {
        this.populateDays();
        this.populateYears();
    },
    methods: {
        populateDays() {
            for (let day = 1; day <= 31; day++) {
                this.days.push(day);
            }
        },
        populateYears() {
            const currentYear = new Date().getFullYear();
            const oldestYear = currentYear - 125;
            for (let year = currentYear; year >= oldestYear; year--) {
                this.years.push(year);
            }
        },
        submitForm() {
            // Create a FormData object to hold the form data
            const formData = new FormData();
            formData.append('email', this.form.email);
            formData.append('first_name', this.form.firstName);
            formData.append('last_name', this.form.lastName);
            formData.append('month', this.form.month);
            formData.append('day', this.form.day);
            formData.append('year', this.form.year);

            // Send the form data using axios
            axios.post('http://localhost/Model/users.php', formData)
                .then(response => {
                    if (response.status == 200) {
                        this.$router.push('/success');
                    }
                })
                .catch(error => {
                    console.error('There was an error submitting the form:', error);
                });
        }
    }
};
</script>