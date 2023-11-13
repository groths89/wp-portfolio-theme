Different Post Types

- Skills Post Type (maybe separate out the categories)
- Timeline Events Post Type
- Projects Post Type

Contact form

- A form post type
- With a form group

Information About Me

- Get the number of Posts in Post Type

STOP managing plugins with the admin, use Bedrock instead

You can now control

- What plugin gets installed
- What version of that plugin gets installed

Remove plugin control from admin
Remove bulk action options for managing plugins

DB Migration from Local to Live

- WP Migrate Pro
- Manual way = export the sql file from MySQL

Deployment

- Use Trellis for deployment

Wordpress Dev Stack

- Create Site with command inside a dir called sites
  `composer create-project roots/bedrock site`
- /group_vars/development/wordpress_sites.yml
  - Change the name to \_\_\_.local and match that to the canonical
  - Change the admin_email
- /group_vars/development/vault.yml
  - Match the \_\_\_.local address
  - Generate passwords for each variable
- Run command `vagrant up`

For production:

- Generate the salts and passwords in production/vault.yml
- Change the domain name to your domain already set up and purchased
- Change the domain in the production/wordpres_sites.yml
- If applies remove redirect
- Add the Github Repo URL
- Change the SSL to true
- Change Cache to true
- New file inside of trellis dir `.vault_pass`
  - open up the ansible.cfg file
    - in [defaults] put vault_password_file = .vault_pass
  - Run the command `ansible-vault encrypt group_vars/all/vault.yml group_vars/development/vault.yml group_vars/production/vault.yml`
- Open up hosts/production
  - Enter the IP address of the production server
- Open up group_vars/all/users.yml
  - Uncomment https://github.com/username.keys
  - Change username to your github username
- Run command `pip install -r requirements.txt`
- Run command `ansible-galaxy install -r galaxy.yml`
- Run command `ansible-playbook server.yml -e env=production`
- Add a deploy key to github
  - SSH into the web IP of the server
  - run command `ssh-keygen -t rsa -b 4096 -C "my email address"`
  - run command `cat /home/web/.ssh/id_rsa.pub`
    - copy everything that it outputs there
    - paste it in the github deploy keys add key
- Run command `./bin/deploy.sh production domain.name`

Composer.json

- add the plugins
