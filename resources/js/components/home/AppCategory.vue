<template>
    <h1>Category</h1>
</template>

<script>
export default {
    data(){
        return{
            datas:this.$route.params.slug,
            // datas:'ok'
        }
    },
    created(){
       this.asyncData()
    },
    watch:{
        '$route': 'asyncData'
    },
    methods:{
        asyncData(){
            axios.get(`/api/category/${this.$route.params.slug}`)
            .then(res=>console.log(res.data))
        }
    }
}
</script>

<style>

</style>

data () {
        return { person: null }
    },
    created () {
        // Initial load fetch your data
        this.asyncData()
    },
    watch: {
       // call the method again if the route changes
       '$route': 'asyncData'
    }
    methods: {
       asyncData () {
           // ... your person fetching code
       }
    }