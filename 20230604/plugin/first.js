a = 100; // 變數作為暫存使用，它可以被重新覆蓋再利用
b = 200;

title = "冷笑話";   //將文字存到變數去，用""標記起來，讓程式知道這是文字不是指令

title += ":";   // 等同於 title = title + "："

who = "小明";
where = "超商";
why = "為什麼";
when = "繳費";
how = "坐著輪椅";

whoAmI='Loki'; //駝峰命名法
// who_am_i='Loki';

//請試著善用變數組合出 console.log 顯示這句話 => 冷笑話：為什麼小明去"超商繳費"後，小明出來卻要坐著輪椅？
ansES5 = title + why + who + "去" + '"' + where + when + '"後，' + who + '出來卻要' + how + '？';  //ES5:字串相加用+符號
ansES6 = `${title}${why}${who}去"${where + when}"後，${who}出來卻要${how}？`; //ES6，以替換的方式做處理
string='1234567';
es6String=`1
2
3
4
5
67`;

console.log(ansES6);