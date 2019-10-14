<template>
        <table class='w-75 table'>
            <tr>
                <th>ID</th>
                <th>Region</th>
                <th>Pokedex</th>
            </tr>
            <tr v-for="fila in filas" :key="fila.id">
                <td>{{ fila.id }}</td>
                <td>{{ fila.region }}</td>
                <td>{{ fila.pokedex }}</td>
                <td><button>Del</button></td>
                <td><button>Edit</button></td>
            </tr>
        </table>
</template>

<script>
    export default {
        data(){
            return {
                filas: [{
                    id: '1',
                    region: 'Kanto',
                    pokedex: '151'
                }]
            };
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>