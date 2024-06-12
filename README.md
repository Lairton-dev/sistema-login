# Sistema de login e cadastro
### Tecnologias usadas:
![PHP](https://img.shields.io/badge/-PHP-0D1117?style=for-the-badge&logo=PHP&labelColor=0D1117&textColor=0D1117)&nbsp;
![HTML5](https://img.shields.io/badge/-HTML5-0D1117?style=for-the-badge&logo=HTML5&labelColor=0D1117&textColor=0D1117)&nbsp;
![CCS3](https://img.shields.io/badge/-CSS3-0D1117?style=for-the-badge&logo=CSS3&labelColor=0D1117&textColor=0D1117)&nbsp;
![MySql](https://img.shields.io/badge/-MysQl-0D1117?style=for-the-badge&logo=MysQl&labelColor=0D1117&textColor=0D1117)&nbsp;
![XAMPP](https://img.shields.io/badge/-XAMPP-0D1117?style=for-the-badge&logo=XAMPP&labelColor=0D1117)&nbsp;

# Como configurar o sistema no seu PC?

- Antes, instale o XAMPP em sua máquina clicando no link: https://www.apachefriends.org/download.html.
  
  ![xampp](https://github.com/Lairton-dev/sistema-login/blob/master/documents/Captura%20de%20tela%202024-06-12%20100924.png?raw=true)

- Com o XAMPP instalado, na sua barra de busca do Windows que vc encontra nas sua barra de tarefas. Pesquise por "XAMPP Control Painel" e execute o programa.

  ![xampp](https://github.com/Lairton-dev/sistema-login/blob/master/documents/Captura%20de%20tela%202024-06-12%20101523.png?raw=true)

- Com o XAMPP Control Painel aberto, execute clicando em start nas opções apache e o mysql:

![Xampp](https://github.com/Lairton-dev/sistema-login/blob/master/documents/Captura%20de%20tela%202024-06-12%20094639.png?raw=true)

- Abra agora o explorador de arquivos do windows clicando no atalho Win+E e entre na unidade onde vc instalou o XAMPP e busque pela pasta xampp.
  
- Encontrado a pasta xampp, entre na psta e busque por htdocs e apague tudo que tiver dentro sem medo!
  
- crie uma pasta com qualquer nome que desejar e baixe os arquivos do repositório para essa pasta, exceto a pasta documents do repositório.

- No seu navegador de internet, busque por localhost/nome-da-sua-pasta/ e vc verá a página de login funcionando, porém vc ainda não criou o banco de dados e a tabela.

- Abra novamente o XAMPP Control Painel e na opção MySql, click no botão de admin que fica ao lado do botão start e não desligue nada!

- Crie o banco de dados no phpmyadmin xom nome Database, e uma tabela chamada users com a seguinte estrutura:

![phpmyadmin](https://github.com/Lairton-dev/sistema-login/blob/master/documents/phpmyadmin.png?raw=true)

- Agora, verifique se o arquivo database.php não apresentou algum erro. Caso não tenha apresente erros, isso pode signifcar que a conexão foi bem sucedida! se aprensentou erros, verifique se o nome do banco de dados é: Database e o nome da tabela é users e está estruturado como a imagem acima.

- Verifique agora se o sistema está funcionando corretamente!

  
## Tela de Login
![Login](https://github.com/Lairton-dev/sistema-login/blob/master/documents/tela-login.png?raw=true)

## Tela de cadastro
![Cadastro](https://github.com/Lairton-dev/sistema-login/blob/master/documents/tela-cadastro.png?raw=true)


