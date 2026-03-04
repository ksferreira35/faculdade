print("\033[1;33m-=\033[m" * 30)
print("\033[1;35mCalculadora\033[m".center(70))
print("\033[1;33m-=\033[m" * 30)

x = float(input("Número 1: "))
y = float(input("Número 2: "))

print(f"{x} + {y} = {x + y}")
print(f"{x} - {y} = {x - y}")
print(f"{x} * {y} = {x * y}")
print(f"{x} / {y} = {x / y}")