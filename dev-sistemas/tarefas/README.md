# Taskr — Sistema de Gerenciamento de Tarefas

Sistema web de gerenciamento de tarefas desenvolvido em PHP com PDO e MySQL.

---

## Credenciais de acesso

| Campo   | Valor    |
|---------|----------|
| Usuario | `admin`  |
| Senha   | `123456` |

---

## Como rodar

**1.** Execute o arquivo `banco.sql` no phpMyAdmin para criar o banco de dados e o usuário de teste.

**2.** Coloque a pasta `tarefas/` dentro do diretório do servidor local:
- XAMPP → `htdocs/tarefas/`
- WAMP → `www/tarefas/`

**3.** Acesse no navegador:
```
http://localhost/tarefas/login.php
```

---

## Tecnologias

- PHP com PDO (prepared statements)
- MySQL
- Bootstrap 5 via CDN

---

## Estrutura de arquivos

```
tarefas/
├── banco.sql        # Cria o banco, tabelas e usuário de teste
├── conexao.php      # Conexão com o banco via PDO
├── layout.php       # Navbar compartilhada (Bootstrap 5 importado aqui)
├── login.php        # Tela de login — autenticação com MD5 e sessão
├── logout.php       # Encerra a sessão e redireciona para login
├── index.php        # Lista as tarefas do usuário logado
├── nova.php         # Formulário para criar nova tarefa
├── editar.php       # Formulário para editar tarefa existente
├── concluir.php     # Atualiza o status da tarefa para "concluida"
└── excluir.php      # Exclui uma tarefa do banco
```

---

## Funcionalidades

- Login e logout com controle de sessão (`$_SESSION`)
- Senha armazenada com MD5
- Listagem de tarefas com badge colorido de status
- Criar, editar, concluir e excluir tarefas
- Proteção contra SQL Injection via PDO prepared statements
- Todas as páginas verificam se o usuário está logado antes de exibir conteúdo
