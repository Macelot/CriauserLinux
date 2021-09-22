# CriauserLinux  
1_cria_curso.sh é o arquivo principal.  
Serão criados os usuários no Debian, de acordo com os nomes dos usuários do arquivo alunos.txt.  
o arquivo alunos.txt deve ter o nome de cada aluno que deseja acesar o servidor, um nome por linha.  
A senha de cada usuário é 123. No primeiro login será solicitada a troca de senha.   
Também será criada uma base de dados para cada aluno, cada aluno terá um usuário no banco de dados com o mesmo nome do usuário do sistema
com senha 123. Esta senha pode ser trocada depois pelo aluno.  
## Cada aluno terá sua home em /var/www/html/  
O arquivo 1_cria_curso.sh vai chamar o arquivo cria_bases.php para criar uma base de dados para cada aluno, portando deve ser colocadas 
as credenciais de acesso ao banco neste arquivo, assim como cria_user_mysql.php.  
Caso seja necessário desfazer as operações, pode ser usado o arquivo 0_destroi_curso.sh.   
O arquivo 0_destroi_curso.sh vai chamar destroi_bases.php e destroi_user_mysql.php, que deve ser configurados com as credenciais de acesos ao banco de dados.


