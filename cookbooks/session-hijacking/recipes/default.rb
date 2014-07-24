package "apache2" do
  action :install
end

package "php5" do
  action :install
end

bash "add_php_session_save_path" do
  user "root"
  cwd "/etc/php5/apache2"
  code <<-EOS
    echo 'session.save_path = "/var/lib/php5"' >> php.ini
  EOS
end

bash "clear_var" do
  user "root"
  cwd "/var"
  code <<-EOH
    rm -rf www
  EOH
end

remote_directory "/var/www" do
  source "www"
  owner "root"
  group "root"
end

cookbook_file "/var/lib/php5/sess_2b100iei9775d2kn4vj5o65c97" do
  source "sess_2b100iei9775d2kn4vj5o65c97"
  mode 606
end

service "apache2" do
  supports :start => true, :stop => true, :restart => true
  action :restart
end