<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SocialAccountsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SocialAccountsTable Test Case
 */
class SocialAccountsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SocialAccountsTable
     */
    protected $SocialAccounts;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.SocialAccounts',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SocialAccounts') ? [] : ['className' => SocialAccountsTable::class];
        $this->SocialAccounts = $this->getTableLocator()->get('SocialAccounts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->SocialAccounts);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
