Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        disc: []
    },
    methods: {
        getDiscAPI: function() {
            axios.get('http://localhost:8888/php-ajax-dischi/server.php')
            .then((response) => {
                this.disc = response.data;
            });
        }
    },
    created: function() {
        this.getDiscAPI();
    }
});