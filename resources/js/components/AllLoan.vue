<template>
    <div>
        <h2 class="text-center">Products List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <!--<th>Actions</th>-->
                </tr>
            </thead>
            <tbody>
                <tr v-for="loan in loans": key="loan.id">
                    <td>{{loan.id}}</td>
                    <td>{{loan.name}}</td>
                    <td>{{loan.amount}}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <router-link: to="{name: 'edit', params: {id: loan.id}}" class="btn btn-success">Edit</router-link>
                            <button class="btn btn-danger" @click="deleteLoan(loan.id)">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default{
       data(){
          return{loans:[]}
        },
       created(){
            this.axios.get('http://localhost:8000/api/loans/').then(response => {
                this.loans = response.data;
             });
        },
       methods:{
           deleteProduct(id){
                this.axios.delete('http://localhost:8000/api/loans/${id}').then(response =>{
                    let i=this.loans.map(data=>data.id).indexOf(id);
                    this.loans.splice(i, 1)
                });
            }
        }
    } 
</script>