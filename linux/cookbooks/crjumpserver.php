<?php
function jumpserver_init(){
  exec_script("
    sudo cloud-init localserver;
    sudo cloud-init aide;
    sudo cloud-init usuariosinfraamazon;

    #Diret�rios e permiss�es

	sudo mkdir /home/configs/scripts -p;
	sudo -u root echo PATH='/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games:/home/configs/scripts/' > /etc/environment;

	#Cria��o de grupos

	addgroup infra;
	addgroup subad-admin
  ");
    
 }
