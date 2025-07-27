Neste projeto, foi desenvolvido um sistema simples de cadastro de usuários com a funcionalidade de adicionar tarefas para cada um deles. (Sistema de Controle de Tarefas (To-Do List))
Eu dividi o meu código em arquivos para cada funcionalidade, como cadastrar, listar, editar e excluir usuários. A conexão com o banco de dados foi feita usando o arquivo config.php.

Para as tarefas, foi criada uma tabela separada chamada tarefas, que possui uma conexão com a tabela usuarios através de Foreign Key. Garantindo assim, a conexão do usuário e a criação da tarefa. Na hora de cadastrar a tarefa, adicionei um atributo "data de criação", o current_timestamp(), que automaticamente coloca a data exata. Para o atributo "status" adicionei enum, assim podendo escolher entre "pendente" ou "concluída".

Utilizei o modelo Bootstrap para melhorar a aparência do sistema, já que o foco desse projeto não era uma criação de FRONT END, então utilizei o Bootstrap para deixa os formulários e as tabelas mais organizados e fáceis de usar. Também foram utilizadas estruturas como switch, if e while.

Com esse projeto, utilizei CRUD completo (inserção, seleção , remoção e atualização), interação com banco de dados no phpMyAdmin, e organização de código em páginas separadas. Redirecionamento das telas através do menu.
