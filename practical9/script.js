const colors = ['orange', 'blue', 'green', 'yellow', 'red']

let currIndex = 0;
function changeColor() {
    document.body.style.backgroundColor = colors[currIndex];
    currIndex = (currIndex+1)%(colors.length);
}