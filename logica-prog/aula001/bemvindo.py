from datetime import datetime

nome = str(input("\033[1;35mDigite o seu nome:\033[m "))

print(f"\033[1;32mSeja bem vindo ao Python!\033[m \033[1;36m{nome}. \n\033[33mAgora são {datetime.now()}\033[m")
