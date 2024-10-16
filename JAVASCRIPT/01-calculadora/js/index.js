let op1;
let op2;
let num1;
let num2;

do {
    op1 = prompt('Bienvenido a su calculadora web.\n¿Qué operación desea realizar?\n1. Suma\n2. Resta\n3. Multiplicación\n4. División');
    num1 = prompt('Ingrese el primer número');
    num2 = prompt('Ingrese el segundo número');
} while(operation(op1, num1, num2) != 2)

function operation(option1, n1, n2) {
    switch(parseInt(option1, 10)) {
        case 1: {
            console.log('El resultado de la suma es: ' + (parseInt(n1, 10) + parseInt(n2, 10)));
            op2 = prompt('¿Desea seguir calculando? (1. Si / 2. No): ');
            return op2;
        }
        case 2: {
            console.log('El resultado de la resta es: ' + (parseInt(n1, 10) - parseInt(n2, 10)));
            op2 = prompt('¿Desea seguir calculando? (1. Si / 2. No): ');
            return op2;
        }
        case 3: {
            console.log('El resultado de la multiplicación es: ' + (parseInt(n1, 10) * parseInt(n2, 10)));
            op2 = prompt('¿Desea seguir calculando? (1. Si / 2. No): ');
            return op2;
        }
        case 4: {
            if(parseInt(n2, 10) != 0) {
                console.log('El resultado de la división es: ' + (parseInt(n1, 10) / parseInt(n2, 10)));
                op2 = prompt('¿Desea seguir calculando? (1. Si / 2. No): ');
            } else {
                op2 = prompt('No es posible dividir algo entre 0.\n¿Desea seguir calculando? (1. Si / 2. No): ');
            }
            return op2;
        }
        default:
            op2 = prompt('Valor ingresado no válido.\n¿Desea seguir calculando? (1. Si / 2. No): ');
            return op2;
    }
}