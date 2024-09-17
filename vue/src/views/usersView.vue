<template>
  <div class="about">
    <h1>Users Page</h1>
  </div>
</template>

<script>
import axios from 'axios';

export default {
    methods: {
        fetchUsers()
        {
            // Send the form data using axios
            axios.fetch('http://localhost/Model/users.php', formData)
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
