<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Model;
use Microsoft\Graph\Core\Enum;

class ModelTest extends TestCase
{
    private $entities;
    private $enums;
    private $complexTypes;

    public function setUp()
    {
        $this->entities = array();
        $this->enums = array();
        $this->complexTypes = array();

        $dir = new DirectoryIterator('src/Model');
        foreach ($dir as $fileInfo)
        {
            $filename = $fileInfo->getFileName();
            $classname = explode(".", $filename)[0];
            if ($classname != null) {
                $class = "Microsoft\\Graph\\Model\\" . explode(".", $fileInfo->getFileName())[0];
                switch(get_parent_class($class)) {
                    case Model\Entity::class:
                        $this->entities[] = $class;
                        break;
                    case Enum::class:
                        $this->enums[] = $class;
                        break;
                    default:
                        $this->complexTypes[] = $class;
                        break;
                }
            }
        }
    }

    public function testBaseEntity()
    {
        $entity = new Model\Entity();
        $this->assertInstanceOf(Model\Entity::class, $entity);
    }

    public function testEntity()
    {
        foreach ($this->entities as $entityClass) {
            $entity = new $entityClass();
            $this->assertInstanceOf($entityClass, $entity);
        }
    }

    public function testComplexTypes()
    {
        foreach ($this->complexTypes as $complexTypeClass) {
            $complexEntity = new $complexTypeClass();
            $this->assertInstanceOf($complexTypeClass, $complexEntity);
        }
    }
}