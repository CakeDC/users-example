# CakeDC Users Example

An example application using CakeDC/Users with public actions, login with email instead of username and email.

Public actions:

- /
- /articles/view/[n]
- /login
- logout

Protected actions:

- /articles/edit
- /articles/delete

## Installation

1. Clone the repository
```bash 
git@github.com:CakeDC/users-example.git
cd users-example
```

2. Install with composer
```bash
composer install --prefer-dist
```

3. Setup your database info at config/app.php, see Datasources.default

4. At config/.env, set your facebook/twitter credentials for social login
and reCaptcha credentials.  

5. Execute setup script, this run the needed migrations and create demo users and articles.

```bash
 ./setup.sh ApasswordForAllDemoUsersToUseAtLoginPage
```

Now you can access the app with one of the following users using the password you choosed:

- user1
- user2
- admin1
- admin2

