new Vue({
    el: '#app',
    data() {
        return{
            modal: true,
            faction : ["La Coallition", "La Colonnie"],
            select: null,
            name: null,
            message: 'Hello Vue.js!',
            clearScren: 0,
            player: 0,
            user: null,
            life: 0,

        }
    },
    created(){
    },
    methods : {
        selectFaction: function(label){
            this.select = label
        },
        saves: function(){
            this.clearScren = 1
            console.log(this.name);
        },
        selectPlayer: function(player) {
            this.clearScren = 2
            let self = this
            axios.post("http://localhost/bdvtpoo/backend/run.php", {
                action : player,
                life: this.player
            }).then( function (response) {
                self.player = response.data.player.life
                console.log(self.player);
            }).catch(function (error) {
                console.log(error);
            })
        }
    }
})