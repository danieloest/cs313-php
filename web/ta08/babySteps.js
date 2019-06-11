let arguments = process.argv;
let sum = 0;
for (var i = 2; i < arguments.length; i++)
{
    sum += +arguments[i];
}

console.log(sum);