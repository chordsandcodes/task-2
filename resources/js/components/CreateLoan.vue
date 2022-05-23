<template>
    <div>
        <h3 class="text-center">Create Loan</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addLoan">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="loan.name">
                    </div>
                    <div class="form-group">
                        <label>Amount</label>
                        <input type="text" class="form-control" v-model="loan.amount">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
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
        methods:{
            addLoan(){
                this.axios.post('http://localhost:8000/api/loans', this.product).then(response =>(this.$router.push({name: 'home'})))
                .catch(err=> console.log(err))
                .finally(()=> this.loadin=false)
                         }
                }
               } 
</script>