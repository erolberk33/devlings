// // Tarih 25.07.27 


// /*********************************************************************  İKİ SAYILI HESAPLAMA  ****************************************************************************************/

// var firstNumber = 0;
// var secondNumber = 0;
// var fourtransactions;
// var operatorClicked = false;

// //onclick veridğim buttonların value değerlerini ekrana ekliyoruz.
// function appendToDisplay(value) {
//     document.getElementById('display').value += value;
//     if (operatorClicked) {
//         secondNumber += value;
//         console.log('Sayi Iki :' + secondNumber);
//     } else {
//         firstNumber += value;
//         console.log('Sayi Bir :' + firstNumber);
//     }
   
// }


// // operatörleri belirlediğimiz yer 
// function transactions(value) {
//     document.getElementById('display').value += value;
//     fourtransactions = value;
//     operatorClicked = true;
//     console.log('Operator : ' + value);

// }

// // ekranı temizlemek için 
// function clearScreen() {
//     document.getElementById('display').value = "";
//     firstNumber = "";
//     secondNumberNumber = "";
//     fourtransactions = "";
   
// }

// //eşittire tıklandığında işlemi yapması için sayibir , operatör bilgisi ve sayiiki bilgisini alıp switch ile işlem yaptırdım
// function calculate(){

//     var result;
//     var num1 = parseFloat(firstNumber);
//     var num2 = parseFloat(secondNumber);

//     switch (fourtransactions) {
//         case '+':
//             result = num1 + num2;
//             break;
//         case '-':
//             result = num1 - num2;
//             break;
//         case '*':
//             result = num1 * num2;
//             break;
//         case '/':
//             result = num1 / num2;
//             break;
//         default:
//             result = 'Error';
//     }

  
//     document.getElementById('display').value = result;
//       // sonuç bulduktan sonra verileri temizledim.
//     firstNumber = '';
//     secondNumber = '';
//     operatorClicked = false;
// }




/************************************************************************   İKİ SAYIDAN FAZLASI İLE İŞLEMLER   **********************************************************************************/

var currentInput = '';
var operations = [];

function appendToDisplay(value) {
    currentInput += value;
    document.getElementById('display').value += value;
}

function transactions(operator) {
    if (currentInput !== '') {
        operations.push(parseFloat(currentInput));
        operations.push(operator);
        currentInput = '';
        document.getElementById('display').value += operator;
    }
}

function clearScreen() {
    document.getElementById('display').value = '';
    currentInput = '';
    operations = [];
}

function calculate() {
    if (currentInput !== '') {
        operations.push(parseFloat(currentInput));
        currentInput = '';
    }

    var result = operations[0];
    for (var i = 1; i < operations.length; i += 2) {
        var operator = operations[i];
        var nextNumber = operations[i + 1];

        switch (operator) {
            case '+':
                result += nextNumber;
                break;
            case '-':
                result -= nextNumber;
                break;
            case '*':
                result *= nextNumber;
                break;
            case '/':
                result /= nextNumber;
                break;
            default:
                result = 'Error';
        }
    }

    document.getElementById('display').value = result;
    currentInput = result.toString();
    operations = [];
}


 


