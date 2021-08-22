<?php

namespace Tests\Feature\Models;

use App\Models\Faq;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FaqTest extends TestCase
{
    use RefreshDatabase, DatabaseMigrations, ModelHelperTesting;


    protected function model(): Model
    {
        return new Faq();
    }
}
