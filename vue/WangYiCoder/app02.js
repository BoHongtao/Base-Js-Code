/**
 * Created by john on 2018/11/8.
 */
new Vue({
    el:"#vue-app",
    data:{
        age:22,
        x:0,
        y:0
    },
    methods:{
        add:function () {
            this.age++;
        },
        sub:function () {
            this.age--;
        },
        updateXY:function (event) {
            this.x = event.offsetX;
            this.y = event.offsetY;
        }
    }
});