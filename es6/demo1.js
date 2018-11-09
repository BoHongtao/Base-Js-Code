/**
 * Created by john on 2018/11/9.
 */


/* * * * * * * * * * * * * * * *
 * * * * 作用域 * * * * * * * * *
 ** * * * * * * * * * * * * * */
function a(flag){
    if(flag){
        var str = 'hello';
        console.log(str);
    }else{
        console.log(str);
    }
}

function aa(flag){
    var str;
    if(flag){
        str = 'hello';
        console.log(str);
    }else{
        console.log(str);
    }
}
function aaa(flag) {
    if(flag){
        let str = 'hello';
        console.log(str);
    }else{
        console.log(str);
    }
}

//错误的用法
function b() {
    const name = 'bohongtao';
    name = '机智的Coder'
}

/* * * * * * * * * * * * * * * *
 * * * * 字符串的处理 * * * * * *
 ** * * * * * * * * * * * * * */
function Splicing_es5(){
    var name = 'bohongtao';
    console.log("hello "+name);
}
function Splicing_es6(){
    const name = '机智的Coder';
    console.log(`hello ${name}`);
}

// Splicing_es5();
// Splicing_es6();

/*
// 1. 判断子串是否包含 return bool
const str = 'helloworld';
console.log(str.includes('d'));// bool
// 2. 重复字符串
const repeat_str = "ha";
console.log(repeat_str.repeat(2));
// 3. startsWith 和 endsWith 判断是否以 给定文本 开始或者结束
// 这个是我最喜欢的功能啊，和python一样，使用频率挺高的
const test_str =  'hello world!';
console.log(test_str.startsWith('hello'));
console.log(test_str.endsWith('!'));

*/

/* * * * * * * * * * * * * * * *
 * * * * 函数 * * * * * * * * * *
 ** * * * * * * * * * * * * * */

function default_value_es5(flag) {
    flag = flag || 'error';
    console.log(flag)
    //console.log(flag || 'error')  其实我可以这样写的
}
function default_value_es6(flag='error') {
    console.log(flag)
}

var people01 = name => 'hello ' + name;

var people02 = (name, age) => {
    const fullName = 'hello'
    return `hello ${name} ,you is ${age}`
}

/* * * * * * * * * * * * * * * *
 * * * * 对象 * * * * * * * * * *
 ** * * * * * * * * * * * * * */

function people_es5(name,age) {
    return {
        name:name,
        age:age
    }
}
function people_es6(name,age) {
    return {
        name,
        age
    }
}
// console.log(people_es6('bohongtao',23))



const people = {
    name: 'bohongtao',
    age: 23
};
//es5
// const name = people.name;
// const age = people.age;
// console.log(name + ' --- ' + age);
//es6
// const { name, age } = people
// console.log(`${name} --- ${age}`)

//数组
// const info = ['bohongtao', '22'];
// const [name, age] = info;
// console.log(name);
// console.log(age);



//数组
const info1 = ['name', 'age'];
const info2 = [...info1, 'sex', 'like'];
console.log(info2);

//数组
const before = ['name','age','sex'];
const [first, ...after] = before;
console.log(after);