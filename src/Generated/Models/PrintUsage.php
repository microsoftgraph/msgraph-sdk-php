<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class PrintUsage extends Entity implements Parsable 
{
    /**
     * @var int|null $completedBlackAndWhiteJobCount The completedBlackAndWhiteJobCount property
    */
    private ?int $completedBlackAndWhiteJobCount = null;
    
    /**
     * @var int|null $completedColorJobCount The completedColorJobCount property
    */
    private ?int $completedColorJobCount = null;
    
    /**
     * @var int|null $incompleteJobCount The incompleteJobCount property
    */
    private ?int $incompleteJobCount = null;
    
    /**
     * @var Date|null $usageDate The usageDate property
    */
    private ?Date $usageDate = null;
    
    /**
     * Instantiates a new printUsage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrintUsage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrintUsage {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.printUsageByPrinter': return new PrintUsageByPrinter();
                case '#microsoft.graph.printUsageByUser': return new PrintUsageByUser();
            }
        }
        return new PrintUsage();
    }

    /**
     * Gets the completedBlackAndWhiteJobCount property value. The completedBlackAndWhiteJobCount property
     * @return int|null
    */
    public function getCompletedBlackAndWhiteJobCount(): ?int {
        return $this->completedBlackAndWhiteJobCount;
    }

    /**
     * Gets the completedColorJobCount property value. The completedColorJobCount property
     * @return int|null
    */
    public function getCompletedColorJobCount(): ?int {
        return $this->completedColorJobCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'completedBlackAndWhiteJobCount' => function (ParseNode $n) use ($o) { $o->setCompletedBlackAndWhiteJobCount($n->getIntegerValue()); },
            'completedColorJobCount' => function (ParseNode $n) use ($o) { $o->setCompletedColorJobCount($n->getIntegerValue()); },
            'incompleteJobCount' => function (ParseNode $n) use ($o) { $o->setIncompleteJobCount($n->getIntegerValue()); },
            'usageDate' => function (ParseNode $n) use ($o) { $o->setUsageDate($n->getDateValue()); },
        ]);
    }

    /**
     * Gets the incompleteJobCount property value. The incompleteJobCount property
     * @return int|null
    */
    public function getIncompleteJobCount(): ?int {
        return $this->incompleteJobCount;
    }

    /**
     * Gets the usageDate property value. The usageDate property
     * @return Date|null
    */
    public function getUsageDate(): ?Date {
        return $this->usageDate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('completedBlackAndWhiteJobCount', $this->completedBlackAndWhiteJobCount);
        $writer->writeIntegerValue('completedColorJobCount', $this->completedColorJobCount);
        $writer->writeIntegerValue('incompleteJobCount', $this->incompleteJobCount);
        $writer->writeDateValue('usageDate', $this->usageDate);
    }

    /**
     * Sets the completedBlackAndWhiteJobCount property value. The completedBlackAndWhiteJobCount property
     *  @param int|null $value Value to set for the completedBlackAndWhiteJobCount property.
    */
    public function setCompletedBlackAndWhiteJobCount(?int $value ): void {
        $this->completedBlackAndWhiteJobCount = $value;
    }

    /**
     * Sets the completedColorJobCount property value. The completedColorJobCount property
     *  @param int|null $value Value to set for the completedColorJobCount property.
    */
    public function setCompletedColorJobCount(?int $value ): void {
        $this->completedColorJobCount = $value;
    }

    /**
     * Sets the incompleteJobCount property value. The incompleteJobCount property
     *  @param int|null $value Value to set for the incompleteJobCount property.
    */
    public function setIncompleteJobCount(?int $value ): void {
        $this->incompleteJobCount = $value;
    }

    /**
     * Sets the usageDate property value. The usageDate property
     *  @param Date|null $value Value to set for the usageDate property.
    */
    public function setUsageDate(?Date $value ): void {
        $this->usageDate = $value;
    }

}
