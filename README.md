Configuração do Banco de Dados
------------------------------

O arquivo SQL fornecido é um despejo do banco de dados e contém a estrutura da tabela `contacts` e alguns dados de exemplo.

Certifique-se de ter um servidor MySQL ou MariaDB em execução e uma interface como o phpMyAdmin para importar o arquivo SQL. Você pode importá-lo usando o phpMyAdmin seguindo estas etapas:

a. Acesse o phpMyAdmin no seu navegador.

b. Crie um novo banco de dados chamado `alpha_contact_book` (ou use um banco de dados existente).

c. No phpMyAdmin, vá para a guia "SQL" e cole o conteúdo do arquivo SQL na caixa de texto.

d. Clique em "Executar" para criar a tabela `contacts` e inserir os dados de exemplo.

Certifique-se de que as credenciais do banco de dados no arquivo PHP estejam corretas. No arquivo PHP, as credenciais são definidas como:

-   Servidor: `localhost`
-   Usuário: `user_contact_book`
-   Senha: `alphacode@2023`
-   Banco de Dados: `alpha_contact_book`