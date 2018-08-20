new Vue({
    el: '#crud',

    created: function() {
        this.getKeeps();
    },

    data: {
        Keeps: []
    },

    methods: {
        getKeeps: function() {
            var urlKeeps = 'task'; //seria para la ruta del index
            axios.get(urlKeeps).then(response => {
                this.Keeps = reponse.data
            });
        }
    }
});