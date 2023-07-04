<?php

use PHPUnit\Framework\TestCase;

class DashboardTest extends TestCase
{
    // User Story #49: Enhance dashboard with responsive name display
    public function testNameLength()
    {
        $dashboard = new Dashboard();

        // Test that name length is more than 3 characters
        $name = 'John Doe';
        $dashboard->setName($name);
        $this->assertTrue(strlen($dashboard->getName()) > 3);

        // Test that name can handle special characters
        $name = 'Jo$#n D&*e';
        $dashboard->setName($name);
        $this->assertSame('Jo$#n D&*e', $dashboard->getName());
    }
    }
?>