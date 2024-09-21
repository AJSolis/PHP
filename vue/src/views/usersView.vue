<template>
    <div>
      <h1>Users List</h1>
      <ul v-if="users.length">
        <li v-for="user in users" :key="user.id">{{ user.first_name }} {{ user.last_name }}</li>
      </ul>
      <p v-else>No users found.</p>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        users: []
      };
    },
    methods: {
      fetchUsers() {
        fetch('http://localhost/Model/fetchUsers.php')
          .then(response => response.json())
          .then(data => {
            this.users = data;
          })
          .catch(error => {
            console.error("Error fetching users:", error);
          });
      }
    },
    mounted() {
      this.fetchUsers();
    }
  };
  </script>
  