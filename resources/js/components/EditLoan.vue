<template>
    <div>
        <h3 class="text-center">Edit Loan</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateLoan">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="loan.name">
                    </div>
                    <div class="form-group">
                        <label>Amount</label>
                        <input type="text" class="form-control" v-model="loan.amount">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default{
        data(){
            return{loan:{}}
              },
        created(){
            this.axios.get(`http://localhost:8000/api/loans/${this.$route.params.id}`).then((res)=> 
                    {this.loan = res.data;});
                 },
        methods:{
            updateLoan(){
                this.axios.patch(`http://localhost:8000/api/loan/${this.$route.params.id}`, this.product).then((res)=> 
                {this.$router.push({name: 'home'});});
                           }
                 }
                } 
</script>