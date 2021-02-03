let app = new Vue ({
    el: '#app',
    data : {
        discs: '',
        Artists: "",

    },

    mounted () {
        axios
        .get('./database_dischi.php')
        .then(response =>{
            // console.log(response.data);
            this.discs = response.data;
        })
    },
  
})