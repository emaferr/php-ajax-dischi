import 'bootstrap';

const app = new Vue({
    el: '#app',
    data: {
        albums: null,
    },
    mounted() {
        axios.get('../api/albums.php')
        .then(resp => {
            this.albums = resp.data;
            console.log(this.albums)
        }).catch(e => {
            console.log(e);
        })
    }    
})