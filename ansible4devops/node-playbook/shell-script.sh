# -- RUN --
# vagrant up
# vagrant ssh app1 -c "sudo sh -x /vagrant/shell-script.sh"

# Import Remi GPG key - see: http://rpms.famillecollet.com/RPM-GPG-KEY-remi
wget http://rpms.famillecollet.com/RPM-GPG-KEY-remi \
    -O /etc/pki/rpm-gpg/RPM-GPG-KEY-remi
rpm --import /etc/pki/rpm-gpg/RPM-GPG-KEY-remi
# Install Remi repo.
rpm -Uvh --quiet \
    http://rpms.famillecollet.com/enterprise/remi-release-6.rpm
# Install EPEL repo.
yum -y install epel-release
# Install Node.js (npm plus all its dependencies).
yum -y --enablerepo=epel install npm