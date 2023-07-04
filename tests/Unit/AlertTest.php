<?php

use PHPUnit\Framework\TestCase;

class DashboardTest extends TestCase
{
// User Story #39: Integrate alert system on dashboard for system issues
public function testAlertSystem()
{
    $dashboard = new Dashboard();

    // Test that alert is displayed when there are system issues
    $dashboard->setSystemIssue(true);
    $this->assertTrue($dashboard->showAlert());

    // Test that alert is not displayed when there are no system issues
    $dashboard->setSystemIssue(false);
    $this->assertFalse($dashboard->showAlert());
}
    }
?>