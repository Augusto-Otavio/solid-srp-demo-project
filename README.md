# Cadastro e Listagem de Usuários (SRP em PHP)

Este projeto demonstra a aplicação do Princípio da Responsabilidade Única (SRP) em PHP. O sistema, originalmente focado no cadastro de usuários, foi complementado com uma funcionalidade de listagem para exibir os dados persistidos.

A persistência dos dados é feita em um arquivo de texto (`storage/users.txt`), e a arquitetura do projeto é dividida em camadas (Apresentação, Aplicação, Domínio e Infraestrutura) для garantir a separação de responsabilidades.

## Como Executar o Projeto

### Pré-requisitos

* [XAMPP](https://www.apachefriends.org/pt_br/index.html) instalado.
* [Composer](https://getcomposer.org/) instalado globalmente.

### Passo a Passo

1.  **Clone ou baixe** este projeto para a pasta `htdocs` do seu XAMPP.
    * O caminho final deve ser algo como: `C:/xampp/htdocs/solid-srp-demo/`.

2.  **Abra o terminal** na pasta raiz do projeto.

3.  **Execute o Composer** para gerar os arquivos de autoloading:
    ```sh
    composer install
    ```

4.  **Inicie o servidor Apache** pelo painel de controle do XAMPP.

5.  **Acesse as páginas** pelo seu navegador:
    * **Página de Cadastro:** `http://localhost/solid-srp-demo/public/`
    * **Página de Listagem:** `http://localhost/solid-srp-demo/public/users.php`

## Listagem de Usuários (Exercício 1)

Esta seção documenta a funcionalidade de listagem de usuários, que foi adicionada como parte do Exercício 1.

* **URL de Acesso:** `http://localhost/solid-srp-demo/public/users.php`.
* **Resultado Esperado:** Ao acessar a URL, o sistema exibe uma tabela HTML contendo o nome e o e-mail de todos os usuários cadastrados. Se não houver usuários, uma mensagem indicando que a lista está vazia será mostrada.
* **Limitações:** A listagem é de apenas leitura e não inclui funcionalidades avançadas como paginação, ordenação ou filtros.

### Teste Manual da Listagem

Conforme solicitado, aqui estão os passos para testar a nova funcionalidade:

#### 1. Teste com a Lista Vazia
* **Passos:**
    1.  Garanta que o arquivo `storage/users.txt` esteja vazio ou tenha sido removido.
    2.  Acesse a URL `http://localhost/solid-srp-demo/public/users.php`.
* **Resultado Esperado:** A página deve exibir a mensagem "Nenhum usuário cadastrado.".

#### 2. Teste com Usuários Cadastrados
* **Passos:**
    1.  Utilize o formulário na página inicial (`index.php`) para cadastrar 2 ou 3 usuários.
    2.  Após o cadastro, acesse a URL `http://localhost/solid-srp-demo/public/users.php`.
* **Resultado Esperado:** A página deve exibir uma tabela com os nomes e e-mails de todos os usuários que você cadastrou. A senha **não** deve ser exibida.
