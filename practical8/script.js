function createAlert() {
    alert("This is an alert");
}

function createPrompt() {
    let name = prompt("Enter your name: ");
    document.getElementById("output1").innerText = "Welcome " + name;
}

function createConfirm() {
    let result = window.confirm("Do you like JavaScript?");
    if(result) {
        document.getElementById("output2").innerText = "Glad you like JavaScript";
    } else {
        document.getElementById("output2").innerText = "Sorry to hear that";
    }
}

let newWin;
function createOpen() {
    newWin = window.open("https://www.example.com", "__blank", "width=400, height=300");
}

function createClose() {
    if(newWin) {
        newWin.close();
    } else{
        alert("No new window open");
    }
}

function createPrint() {
    window.print();
}