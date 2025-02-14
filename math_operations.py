import sys

num1 = int(sys.argv[1])
num2 = int(sys.argv[2])
ope = sys.argv[3] # add, sub, mul, div

print("<h1>Calculate result</h1>")

print("<h2>your input</h2>")
print(f"<div>- Number1: {num1}</div>")
print(f"<div>- Number2: {num2}</div>")
print(f"<div>- Operation: {ope}</div>")

calcResult = 0
if ope == "add":
    calcResult = num1 + num2
elif ope == "sub":
    calcResult = num1 - num2
elif ope == "mul":
    calcResult = num1 * num2
else:
    if num2 == 0:
        # error message
        print('<h2 style="color:red">division by zero is not allowed!!</h2>')
        sys.exit() 
    else:
        calcResult = num1 / num2

print("<h2>calculate additional process</h2>")
if calcResult > 100:
    print("<div>result will be multiplied by 2</div>")
    calcResult *= 2
elif calcResult < 0:
    print("<div>result will be added to 50</div>")
    calcResult += 50

print("<h2>calculate result</h2>")
print(f"<div>{calcResult}</div>")




