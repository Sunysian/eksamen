let primtall = [7, 11, 13, 17, 19, 23, 43, 47, 53, 59, 61, 67];


for (i = 0; i < primtall.length; i++) {
    console.log(primtall[i]);
}


for (i = 0; i < 100; i++) {
    if (i % 2 !== 0 && i % 3 !== 0 && i % 5 !== 0 && i % 7 !== 0) {
        console.log(i);
    }
};



var arraynumber = [];


function filling(arr, x){
    for (i = 0; i < x; i++) {
        arr.push(Math.floor(Math.random() * 100) + 1);

    }
}

filling(arraynumber, 50)

arraynumber = arraynumber.sort();

console.log(arraynumber.reverse());


function removeprime(arrays) {
    for (i = 0; i < arraynumber.length; i++) {
        if (arraynumber[i] % 2 !== 0 && arraynumber[i] % 3 !== 0 && arraynumber[i] % 5 !== 0 && arraynumber[i] % 7 !== 0) {
            arrays.splice(i, 1);
        }
    };
}


removeprime(arraynumber);

console.log(arraynumber);



var arraywhatnot = [];

filling(arraywhatnot, 100)

console.log(arraywhatnot);



function reversearray(array) {
    for (let i = 0; i < array.length / 2; i++) {
        var temp = array[i];
        array[i] = array[array.length - 1 - i];
        array[array.length - 1 - i] = temp;
      }
}


reversearray(arraywhatnot);
console.log(arraywhatnot);



var arrayagain = [];
filling(arrayagain, 500);
var fillerarray = []
var extras = [];

function lookforsimilarnumbers() {
    for (i = 0; i < arrayagain.length; i++) {
        if (fillerarray.includes(arrayagain[i])) {
            extras.push(arrayagain[i]);
        } else {
            fillerarray.push(arrayagain[i]);
        }
    }
}


lookforsimilarnumbers();
console.log(fillerarray);
console.log(extras);



var arrayheltall = [];

function fillup(array, x) {
    for (i = 0; i < x; i++) {
        array.push(i);
    }
};


fillup(arrayheltall, 45);
console.log(arrayheltall);



const numbers = [2,3,5,6,7,9,10,12,15]