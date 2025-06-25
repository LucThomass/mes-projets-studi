const canvasElement = document.getElementById('example');
const ctx = canvasElement.getContext('2d');

ctx.beginPath();
ctx.moveTo(75, 50);
ctx.lineTo(75, 75);
ctx.moveTo(100, 50);
ctx.lineTo(100, 75);
ctx.stroke();
ctx.moveTo(150, 50);
ctx.lineTo(175, 75);
ctx.lineTo(125, 75);
ctx.closePath();
ctx.stroke();