function add(a,b) {
    return a+b;
}

function sub(a,b) {
    return a-b;
}

function mul(a,b) {
    return a*b;
}

function div(a,b) {
    if(b!==0) {
        return a/b;
    } else {
        return "Cannot divide by zero";
    }
}

function calculate() {
    let num1 = parseFloat(document.getElementById('num1').value);
    let num2 = parseFloat(document.getElementById('num2').value);  
    let operator = document.getElementById('operator').value;
    let result;

    if(operator=='+') {
        result = add(num1, num2);
    }
    else if(operator=='-') {
        result = sub(num1, num2);
        
    }
    else if(operator=='*') {
        result = mul(num1, num2);
    }
    else if(operator=='/') {
        result = div(num1, num2);
    }
    else {
        result = "Invalid operator";
    }
    document.getElementById('result').innerText = result;
}