let seconds = 0;
let intervalId = null;

function updateTime() {
    const hrs = String(Math.floor(seconds/3600)).padStart(2, "0");
    const min = String(Math.floor((seconds%3600)/60)).padStart(2, "0");
    const sec = String(seconds%60).padStart(2, "0");
    document.getElementById('time').innerHTML = `${hrs}:${min}:${sec}`; 
}

function startTimer() {
    if(!intervalId)
    {
        intervalId = setInterval(()=>{
            seconds++;
            updateTime();            
        }, 1000);

    }
}

function pauseTimer() {
    clearInterval(intervalId);
    intervalId = null;
}

function resetTimer() {
    pauseTimer();
    seconds = 0;
    updateTime();
}

