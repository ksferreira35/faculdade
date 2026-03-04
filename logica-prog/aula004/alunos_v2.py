import mysql.connector

cnx = mysql.connector.connect(user='root', password='ceub123456', host='localhost', database='db_teste')
cs = cnx.cursor()
sql = "SELECT * FROM aluno;"
cs.execute(sql, [])

total_alunos = 0
soma_medias = 0.0
for (ra, nome, nota1, nota2) in cs:

    total_alunos += 1

    print(ra, nome, nota1, nota2)

    media = (nota1 + nota2) / 2
    print('Média=', media)

    soma_medias += media
    if media >= 5:
        print('Aprovado')
    else:
        print('Reprovado')

    if media == 0:
        print('Menção = SR')
    elif media < 2:
        print('Menção = II')
    elif media < 5:
        print('Menção = MI')
    elif media < 7:
        print('Menção = MM')
    elif media < 9:
        print('Menção = MS')
    else:
        print('Menção = SS')

    print('-' * 30)

# Número total de alunos = 99
print('Total de alunos=', total_alunos)
# Média Geral da turma = 9.99
media_geral = soma_medias / total_alunos
print('Média Geral da Turma=', media_geral)

cs.close()
cnx.close()