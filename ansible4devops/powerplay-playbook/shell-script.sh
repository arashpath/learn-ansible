# -- RUN --
# vagrant up
# vagrant ssh app1 -c "sudo sh -x /vagrant/shell-script.sh"

# Install Apache.
yum install --quiet -y httpd httpd-devel
# Copy configuration files.
cp /path/to/config/httpd.conf /etc/httpd/conf/httpd.conf
cp /path/to/config/httpd-vhosts.conf /etc/httpd/conf/httpd-vhosts.conf
# Start Apache and configure it to run at boot.
service httpd start
chkconfig httpd on