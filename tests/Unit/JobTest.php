<?php

test('it belongs to an employer', function () {
    //Arrange
    $employer = \App\Models\Employer::factory()->create();
    $job = \App\Models\Job::factory()->create([
        'employer_id' => $employer->id
    ]);

    //Act and Assert
    expect($job->employer->is($employer))->toBeTrue();
    //Assert
});

it('can have tags', function (){
    //Arrange
    $job = \App\Models\Job::factory()->create();
    $tags = \App\Models\Tag::factory()->count(3)->create();

    //Act
    $job->tag('Frontend');

    //Assert
    expect($job->tags)->toHaveCount(1);
});


