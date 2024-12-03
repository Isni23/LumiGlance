<template>
    <div class="dashboard">
        <div class="container mt-5">
            <h1 class="text-center">Welcome to LumiGlance Dashboard</h1>
            <div class="card mt-4">
                <div class="card-body">
                    <h2 class="card-title">User  Information</h2>
                    <p>Name: {{ user.name }}</p>
                    <p>Email: {{ user.email }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            user: {}
        };
    },
    mounted() {
        this.fetchUser ();
    },
    methods: {
        fetchUser () {
            axios.get('/api/user')
                .then(response => {
                    this.user = response.data;
                })
                .catch(error => {
                    console.error(error);
                });
        }
    }
};
</script>

<style scoped>
.dashboard {
    padding: 20px;
}
.card {
    border: 1px solid #ccc;
    border-radius: 5px;
}
</style>