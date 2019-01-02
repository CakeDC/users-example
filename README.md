# CakeDC Users Demo

A demo project using CakeDC/Users plugin to help how to use it.


## Installation

1. Clone the repository
```bash 
git@github.com:CakeDC/usersdemo.git
cd usersdemo
```

2. Install with composer
```bash
composer install --prefer-dist
```

3. Setup your database info at config/app.php, see Datasources.default

4. Execute setup script, this run the needed migrations and create demo users and articles.

```bash
 ./setup.sh ApasswordForAllDemoUsersToUseAtLoginPage
```

Now you can access the app with one of the following users using the password you choosed:

- user1
- user2
- admin1
- admin2

