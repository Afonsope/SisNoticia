# SisNoticia
### Sistema de Cadastro e Autenticação de Usuário em PHP

Este repositório contém um sistema de cadastro e autenticação de usuários desenvolvido em PHP, utilizando um banco de dados MySQL. O sistema permite o registro de novos usuários, login, cadastro de notícias e exibição de um painel de usuário.

#### Estrutura do Projeto:

1. **Formulário de Cadastro de Usuário**:
   - Um formulário HTML que coleta nome, e-mail e senha do usuário.
   - Os dados são enviados para `cadastrar_usuario.php` para processamento.

2. **Formulário de Login**:
   - Um formulário para usuários existentes inserirem seu e-mail e senha.
   - Mensagens de erro são exibidas caso as credenciais estejam incorretas.
   - Os dados são processados em `processar_login.php`.

3. **Banco de Dados**:
   - Estrutura de tabelas para usuários (`usuario`) e notícias (`noticia`).
   - O banco de dados é criado e gerenciado com o MySQL, e o acesso é feito via PDO para maior segurança e facilidade.

4. **Processamento do Cadastro**:
   - O sistema verifica se o e-mail já está cadastrado e, se não, realiza o cadastro do usuário com a senha criptografada.
   - Utiliza `password_hash` para proteger senhas.

5. **Login e Sessão**:
   - Após o login bem-sucedido, o usuário é redirecionado para um painel onde pode ver suas informações e sair.
   - As sessões são gerenciadas para manter o estado do usuário durante a navegação.

6. **Cadastro de Notícias**:
   - Um formulário para os usuários cadastrados envia título, texto da notícia e uma imagem.
   - As notícias são armazenadas no banco de dados junto com o ID do usuário que as criou.

7. **Painel do Usuário**:
   - O painel exibe uma mensagem de boas-vindas com o nome do usuário logado e opções para sair ou cadastrar uma nova notícia.

8. **Configuração do Banco de Dados**:
   - Configurações detalhadas para conexão com o banco de dados e tratamento de erros.

#### Tecnologias Utilizadas:
- **Linguagens**: PHP, HTML
- **Banco de Dados**: MySQL
- **Frontend**: Bootstrap para design responsivo

#### Recursos Adicionais:
- **Validação de E-mail**: O sistema valida se o e-mail informado é válido antes de realizar o cadastro.
- **Segurança**: As senhas são criptografadas, e a verificação de login é feita de forma segura.
