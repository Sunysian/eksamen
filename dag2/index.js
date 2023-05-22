// let antallBoller = 12;
// antallBoller -= 4;
// antallBoller += 24;
// let bollerPerPerson = antallBoller / 4;
// let alfabet = "abcdefghijklmnopqrstvuwxyzøæå";

// console.log(bollerPerPerson)



// // console.log(8 + "4");     this one will add the number to the string, giving us the result of 84.
// // console.log(8 * "4");     this will act as a math equation, giving us the result of 32.
// // console.log(8 / "4");     this will act as a math equation, giving us the result of 2.
// // console.log(8 – "4");     we will get an error message.


// let a = 3;
// let b = 7;
// let c = 4;

// while (a < 24) {
//     a++;
//     console.log(a);
// }


// var antallTimer = 54;
// var antallMinutter = 32;
// var antallSekunder = 7353;
// var sum;

// function utregning() {
//     sum = 0;
//     sum += antallTimer * 3600;
//     sum += antallMinutter * 60;
//     sum += antallSekunder;
//     console.log(sum);
// };

// utregning();


// function uttregning() {
//     sum = 0;
//     sum = antallSekunder / 60;
//     console.log(sum);
//     sum = sum / 60;
//     console.log(sum);
// }

// uttregning()



// var wordy = alfabet[7]+alfabet[0]+alfabet[11]+alfabet[11]+alfabet[14];

// console.log(wordy.toUpperCase());

var biggest = 0;
var listy = [5,4,9,3,10,3,2,4,9,3,2,11];

for (i = 0; i < listy.length; i++){
    if (listy[i] > biggest) {
        biggest = listy[i];
        console.log(biggest);
    }
    if (listy[i] % 2 === 0){
        console.log(listy[i] + " is an even number");
    } else {
        console.log(listy[i] + " is an odd number");
    }
};


var listt = [2000,2343,4532,6426,1400,1000,1540,1111,2420];

for (i = 0; i < listt.length; i++){
    if (listt[i] % 4 === 0){
        console.log(listt[i] + " is a leap year");
    }
};



var mmm = 0;

while (mmm < 101) {
    console.log(mmm);
    mmm++;
}

mmm = 0;

for (i = 0; i < 101; i++) {
    console.log(i);
}

mmm = 0;

for (i = 0; i < 101; i++) {
    if (i % 10 !== 0){
        console.log(i);
    }
}


for (i = 0; i < 11; i++){
    for (var j = 0; j < 11; j++) {
        console.log(i + " * " + j + " = " + i*j);
    }
}