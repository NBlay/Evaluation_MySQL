# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure('2') do |config|
    config.vm.box = 'ubuntu/xenial64'
    config.vm.network 'private_network', ip: '192.168.33.10'
    config.vm.synced_folder 'C:\Users\atomi\Desktop\Evaluation MySQL\Evaluation_MySQL', '/var/www/html/'
    config.vm.provider 'virtualbox' do |v|
        v.name = 'VM_Eval'
    end
end
