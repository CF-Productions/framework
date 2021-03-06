<?php

function varnish_init(){


exec_script("
	echo '####### varnish yes ##############'
	sudo apt-get --yes --force-yes install varnish  
	echo '####### FIM varnish yes ##############'	
	sudo rm  /etc/default/varnish 
	sudo rm -rf /var/lib/varnish/default/
	sudo mkdir /var/lib/varnish/default/
	sudo chmod 777 -R /var/lib/varnish
	sudo chmod 777 -R /etc/varnish
");

put_template('etc-default-varnish','/etc/default/varnish');

exec_script("
	sudo rm /etc/varnish/default.vcl
	sudo ln -s /home/cloud/conf/varnish_sem_redirec_cron.conf /etc/varnish/default.vcl
	sudo chmod 777 -R /etc/varnish
	sudo rm  /etc/apache2/ports.conf
");

put_template('apache-port-8080.conf','/etc/apache2/ports.conf');
apache_tunning();

}
