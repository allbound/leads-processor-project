<?php

namespace Tests\Unit;

use App\Http\Controllers\LeadProcessorController;
use PHPUnit\Framework\TestCase;

class LeadsProcessorTest extends TestCase
{
    /**
     * Test the upload method on LeadsProcessorController
     *
     * @return void
     */
    public function testUpload() {
        $c = new LeadProcessorController();
        $result = $c->index(TRUE);

        if($result) {
            $this->assert(true);
        }
    }
}
