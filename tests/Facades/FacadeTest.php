<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Facebook\Facades;

use BrianFaust\Facebook\Facades\Facebook;
use BrianFaust\Facebook\FacebookManager;
use BrianFaust\Tests\Facebook\AbstractTestCase;
use GrahamCampbell\TestBenchCore\FacadeTrait;

class FacadeTest extends AbstractTestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'facebook.auth.manager';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return Facebook::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return FacebookManager::class;
    }
}
