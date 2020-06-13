#!/bin/bash
#-----usuarios no SO
while read p; do
  userdel -f "$p"
done <alunos.txt
#-----Destruir bases de dados
php destroi_bases.php
#-----Destruir usuários no MySQL
php destroi_user_mysql.php
#-----Desdruir pasta /var/www/html/
while read p; do
 rm -R /var/www/html/"$p"
 rm -R /home/"$p"
done <alunos.txt

#rsync -chavzP -e ssh /Users/marcelotelles/facility/servidores/cursoPHP root@191.252.109.103:/root/
#aluno 1 masterforce
#DROP USER 'aluno1'@'%';
#DROP USER 'aluno2'@'%';
#Drop database aluno1;
#Drop database aluno2;
#colocar no /etc/apache2/apache2.conf LoadModule rewrite_module libexec/apache2/mod_rewrite.so
#composer create-project --prefer-dist cakephp/app site --no-interaction
