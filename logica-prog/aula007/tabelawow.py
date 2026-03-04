from prettytable import PrettyTable


tabela = PrettyTable(["Nome", "Idade", "Cidade"])

tabela.add_row(["Alice", 25, "São Paulo"])
tabela.add_row(["Bob", 30, "Rio de Janeiro"])
tabela.add_row(["Carol", 22, "Belo Horizonte"])

print(tabela)