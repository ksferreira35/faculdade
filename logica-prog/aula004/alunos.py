import mysql.connector

cnx = mysql.connector.connect(user='root', password='ceub123456', host='localhost', database='db_teste')
cs = cnx.cursor()
sql = "SELECT * FROM aluno;"
cs.execute(sql, [])

for (ra, nome, nota1, nota2) in cs:
    print(ra, nome, nota1, nota2)
    
cs.close()
cnx.close()

