# Sistema de Login e Cadastro

## Sumário
1. [Introdução](#introdução)
2. [Tecnologias Usadas](#tecnologias-usadas)
3. [Configuração](#configuração)
4. [Visualização do Projeto](#visualização-do-projeto)


## Introdução
Este projeto é um sistema de login e cadastro desenvolvido em PHP. Ele permite que os usuários se registrem e façam login, com todas as informações armazenadas em um banco de dados MySQL.

## Tecnologias Usadas
![PHP](https://img.shields.io/badge/-PHP-0D1117?style=for-the-badge&logo=PHP&labelColor=0D1117&textColor=0D1117)&nbsp;
![HTML5](https://img.shields.io/badge/-HTML5-0D1117?style=for-the-badge&logo=HTML5&labelColor=0D1117&textColor=0D1117)&nbsp;
![CSS3](https://img.shields.io/badge/-CSS3-0D1117?style=for-the-badge&logo=CSS3&labelColor=0D1117&textColor=0D1117)&nbsp;
![MySQL](https://img.shields.io/badge/-MySQL-0D1117?style=for-the-badge&logo=MySQL&labelColor=0D1117&textColor=0D1117)&nbsp;
![XAMPP](https://img.shields.io/badge/-XAMPP-0D1117?style=for-the-badge&logo=XAMPP&labelColor=0D1117&textColor=0D1117)&nbsp;


## Configuração

### 1. Instalação do XAMPP
- Baixe e instale o XAMPP a partir do [site oficial](https://www.apachefriends.org/download.html).

  ![xampp](https://github.com/Lairton-dev/sistema-login/blob/master/documents/Captura%20de%20tela%202024-06-12%20100924.png?raw=true)

### 2. Configuração do XAMPP
- Abra o "XAMPP Control Panel" pesquisando por ele na barra de busca do Windows.

  ![xampp](https://github.com/Lairton-dev/sistema-login/blob/master/documents/Captura%20de%20tela%202024-06-12%20101523.png?raw=true)

- Inicie os serviços Apache e MySQL clicando em "Start".

  ![Xampp](https://github.com/Lairton-dev/sistema-login/blob/master/documents/Captura%20de%20tela%202024-06-12%20094639.png?raw=true)

### 3. Preparação do Ambiente
- Abra o explorador de arquivos com `Win+E` e navegue até a pasta de instalação do XAMPP (geralmente `C:\xampp`).
- Vá para a pasta `htdocs` e apague seu conteúdo. Crie uma nova pasta com um nome de sua escolha e baixe os arquivos do repositório para esta pasta (exceto a pasta `documents`).

### 4. Configuração do Banco de Dados
- No XAMPP Control Panel, clique em "Admin" ao lado do MySQL para abrir o phpMyAdmin.

  ![xampp](https://github.com/Lairton-dev/sistema-login/blob/master/documents/Captura%20de%20tela%202024-06-12%20101907.png?raw=true)

- Crie um banco de dados chamado **database** e uma tabela chamada **users** com a seguinte estrutura:

  ![phpmyadmin](https://github.com/Lairton-dev/sistema-login/blob/master/documents/phpmyadmin.png?raw=true)

### 5. Verificação
- Verifique o arquivo `database.php` na pasta `server` para garantir que a conexão com o banco de dados foi bem-sucedida. Se houver erros, verifique os nomes do banco de dados e da tabela.

### 6. Teste
- No seu navegador, acesse `localhost/nome-da-sua-pasta/` para ver a página de login funcionando. Teste o sistema para garantir que tudo está funcionando corretamente.

## Visualização do Projeto

### Tela de Login
![Login](https://github.com/Lairton-dev/sistema-login/blob/master/documents/tela-login.png?raw=true)

### Tela de Cadastro
![Cadastro](https://github.com/Lairton-dev/sistema-login/blob/master/documents/tela-cadastro.png?raw=true)



