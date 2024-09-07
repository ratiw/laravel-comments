<?php

use Orchestra\Testbench\Factories\UserFactory;

use function Pest\Laravel\actingAs;

use Ratiw\Comments\Tests\TestCase;

uses(TestCase::class)->in(__DIR__);

function login()
{
    $user = UserFactory::new()->create();

    actingAs($user);
}
