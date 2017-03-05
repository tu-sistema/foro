<?php

class ExampleTest extends FeatureTestCase
{
    
    function test_basic_example()
    {
        $user = factory(\App\User::class)->create([
            'name' => 'Ivan Fontana',
            'email' => 'ivanfontana4@gmail.com',
        ]);

        $this->actingAs($user, 'api')
             ->visit('api\user')
             ->see('Ivan Fontana')
             ->see('ivanfontana4@gmail.com');
    }
}
