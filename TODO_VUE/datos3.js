var app = new Vue({
    el: '.vue',
    data: {
        src: 'http://i19.photobucket.com/albums/b189/smileybutt6969/ferrari.jpg'
    },
    methods: {
        mostrarMensaje: function() {
            return 'Aprende Vue facilmente -Message, Esta es la Funcion'
        }
    }
})