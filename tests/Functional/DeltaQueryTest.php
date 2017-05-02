<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Test\GraphTestBase;
use Microsoft\Graph\Model;

class DeltaQueryTest extends TestCase
{
    private $_client;

    protected function setUp()
    {
        $graphTestBase = new GraphTestBase();
        $this->_client = $graphTestBase->graphClient;
    }

	public function testDeltaQuery()
    {
        $this->_client->setApiVersion("beta");
        $deltaPageRequest = $this->_client->createCollectionRequest("GET", "/groups/delta")
            ->setReturnType(Model\Group::class);
        while (!$deltaPageRequest->isEnd()) {
            $groups = $deltaPageRequest->getPage();
            foreach ($groups as $group) {
                // Deserialize members@delta into user array
                $properties = $group->getProperties();
                if (array_key_exists("members@delta", $properties))
                {
                    $members = array();
                    foreach ($properties["members@delta"] as $member) {
                        $members[] = new Model\User($member);
                    }
                    $this->assertNotNull($members[0]->getId());
                }
            }
        }
        $deltaLink = $deltaPageRequest->getDeltaLink();
        $this->assertNotNull($deltaLink);

        $deltaPageRequest2 = $this->_client->createCollectionRequest("GET", $deltaLink)
            ->setReturnType(Model\Group::class);
        $groups = $deltaPageRequest2->getPage();

        // Count is likely 0 but collection should not be null
        $this->assertNotNull($groups);
    }
}