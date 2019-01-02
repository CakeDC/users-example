<?php
use Migrations\AbstractSeed;

/**
 * Demo seed.
 */
class DemoSeed extends AbstractSeed
{
    private $Users;
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $Table = $this->getUsersTable();
        $Table->getConnection()->transactional(function() {
            $this->addUsers();
            $this->addArticles();

            return true;
        });

    }

    /**
     * Add demo articles
     *
     * @return void
     */
    protected function addArticles()
    {
        $Table = $this->getUsersTable();
        $user1 = $Table->findByUsername('user1')->firstOrFail();
        $user2 = $Table->findByUsername('user2')->firstOrFail();

        $data = [
            [
                'id' => 100,
                'user_id' => $user1->id,
                'title' => 'CakePHP is awesome',
                'slug' => 'cakephp-awesom',
                'body' => 'CakePHP makes building web applications simpler, faster, while requiring less code. A modern PHP 7 framework offering a flexible database access layer and a powerful scaffolding system that makes building both small and complex systems simpler, easier and, of course, tastier. Build fast, grow solid with CakePHP.',
                'published' => '1',
                'created' => date('Y-m-d H:i:s', strtotime('-2 day')),
                'modified' => date('Y-m-d H:i:s', strtotime('-2 day'))
            ],
            [
                'id' => 110,
                'user_id' => $user2->id,
                'title' => 'Errors to fix today on your site',
                'slug' => 'errors-to-fix-today-on-your-site',
                'body' => "Running a website can lead to massive success for you business, however, without the proper maintenance, you can be losing out. \nSome errors your site can be suffering from may be minor, such as spelling mistakes, however, there may be errors that can have significant impacts such as pending security updates. See more at https://www.cakedc.com/megan_lalk/2018/01/09/errors-to-fix-today-on-your-site",
                'published' => '1',
                'created' => date('Y-m-d H:i:s', strtotime('-1 day')),
                'modified' => date('Y-m-d H:i:s', strtotime('-1 day'))
            ],
            [
                'id' => 120,
                'user_id' => $user1->id,
                'title' => 'Simplicity is important - here’s why',
                'slug' => 'simplicity-is-important',
                'body' => "When it comes to web design, simplicity is not valued enough. \nSimplicity is important - but why? Simplicity reduces navigation confusion, makes the website look more sophisticated and can help in increasing site conversions (sign ups, contacts). \nAll too often, web designers tend to miss the point of simplicity and over do the amount of information given on a single page - the need to get everything across at once can seriously hinder how much a website visitor is able take in. Over complicated pages can lead to higher than average bounce rates or lower on-page conversions.",
                'published' => '1',
                'created' => date('Y-m-d H:i:s', strtotime('-12 hours')),
                'modified' => date('Y-m-d H:i:s', strtotime('-12 hours'))
            ],
            [
                'id' => 125,
                'user_id' => $user1->id,
                'title' => 'What your website users are trying to tell you',
                'slug' => 'what-your-website-uses-are-trying-to-tell-you',
                'body' => "Every visitor to your website has a goal in mind - this may not be a conscious goal, but they are visiting your site for a reason. So listening to your users feedback is key to meeting their expectations! As a business owner, be sure to keep these in consideration and as a developer, be sure to pass these recommendations through to your clients.\n What are some things that users are trying to tell you and how do you find out?. See more ate https://www.cakedc.com/megan_lalk/2017/11/21/what-your-website-users-are-trying-to-tell-you",
                'published' => '1',
                'created' => date('Y-m-d H:i:s', strtotime('-12 hours')),
                'modified' => date('Y-m-d H:i:s', strtotime('-12 hours'))
            ],
        ];

        $table = $this->table('articles');
        $table->insert($data)->save();
    }
    /**
     * Add some test users
     *
     * @return void
     * @throws Exception
     */
    protected function addUsers()
    {
        $Table = $this->getUsersTable();
        if($Table->exists(['username' => 'user1'])) {
            throw new OutOfBoundsException(__('You probably already have inserted demo users'));
        }

        $password = filter_var(env('USERS_TEST_PASSWORD', FILTER_SANITIZE_STRING));
        $password = trim($password);

        if (empty($password)) {
            throw new InvalidArgumentException(__('Please configure the env key "USERS_TEST_PASSWORD" at config/.env'));
        }

        $users = [
            [
                'username' => 'user1',
                'password' => $password,
                'email' => 'user1@example.com',
                'active' => 1,
                'role' => 'user'
            ],
            [
                'username' => 'user2',
                'password' => $password,
                'email' => 'user2@example.com',
                'active' => 1,
                'role' => 'user'
            ],
            [
                'username' => 'admin1',
                'password' => $password,
                'email' => 'admin1@example.com',
                'active' => 1,
                'role' => 'admin'
            ],
            [
                'username' => 'admin2',
                'password' => $password,
                'email' => 'admin2@example.com',
                'active' => 1,
                'role' => 'admin'
            ]
        ];

        $users = $Table->newEntities($users, ['fields' => ['username', 'password', 'email', 'role', 'active']]);

        if (!$Table->saveMany($users)) {
            throw new UnexpectedValueException(__('Could not save the users.'));
        }
    }

    /**
     * @return \Cake\ORM\Table
     */
    protected function getUsersTable()
    {
        if ($this->Users === null) {
            $this->Users = \Cake\ORM\TableRegistry::getTableLocator()->get('CakeDC/Users.Users');
        }

        return $this->Users;
    }
}
