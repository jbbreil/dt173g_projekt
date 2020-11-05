const intro = document.querySelectorAll('#intro-text-b path');

for (let i = 0; i < intro.length; i++) {
    console.log(`Letter ${i} is ${intro[i].getTotalLength()}`);
}