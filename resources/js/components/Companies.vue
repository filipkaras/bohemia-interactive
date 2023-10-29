<template>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Employee count</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="company in companies">
                <td>{{ company.id }}</td>
                <td>{{ company.name }}</td>
                <td>{{ company.email }}</td>
                <td>{{ company.users.length }}</td>
            </tr>
        </tbody>
    </table>
</template>
<script>
import axios from 'axios';
export default {
    data() {
        return {
            companies: []
        };
    },
    mounted() {
        this.getCompanies();
    },
    methods: {
        getCompanies() {
            axios.get('/api/companies').then(res => {
                this.companies = res.data
            });
        }
    }
}
</script>

