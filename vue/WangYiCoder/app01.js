/**
 * Created by john on 2018/11/8.
 */
new Vue({
    el:"#vue-app",
    data:{
        name:'bohongtao',
        job:'Coder',
        url:"https://www.bohongtao.online",
        dom:"<a href='https://www.bohongtao.online'>插入dom</a>"
    },
    methods:{
        greet: function () {
            return "你好";
        },
        say:function (str) {
            return "我是"+this.name +"我说："+str
        }
        
    }
});