<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Employer;
use App\Models\Job;

class JobTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     */
    public function test_belongs_to_employer()
    {
        // Arrange
        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            'employer_id' => $employer->id,
        ]);

        // Act & Assert
        $this->assertTrue($job->employer->is($employer));
    }

    public function can_have_tags()
    {
        $job = Job::factory()->create();

        $job->tag('Frontend');

        $this->assertCount(1, $job->tags);
    }
}
