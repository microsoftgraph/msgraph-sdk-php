<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class PrintUsage extends Entity implements Parsable 
{
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
        return $this->getBackingStore()->get('completedBlackAndWhiteJobCount');
    }

    /**
     * Gets the completedColorJobCount property value. The completedColorJobCount property
     * @return int|null
    */
    public function getCompletedColorJobCount(): ?int {
        return $this->getBackingStore()->get('completedColorJobCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'completedBlackAndWhiteJobCount' => fn(ParseNode $n) => $o->setCompletedBlackAndWhiteJobCount($n->getIntegerValue()),
            'completedColorJobCount' => fn(ParseNode $n) => $o->setCompletedColorJobCount($n->getIntegerValue()),
            'incompleteJobCount' => fn(ParseNode $n) => $o->setIncompleteJobCount($n->getIntegerValue()),
            'usageDate' => fn(ParseNode $n) => $o->setUsageDate($n->getDateValue()),
        ]);
    }

    /**
     * Gets the incompleteJobCount property value. The incompleteJobCount property
     * @return int|null
    */
    public function getIncompleteJobCount(): ?int {
        return $this->getBackingStore()->get('incompleteJobCount');
    }

    /**
     * Gets the usageDate property value. The usageDate property
     * @return Date|null
    */
    public function getUsageDate(): ?Date {
        return $this->getBackingStore()->get('usageDate');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('completedBlackAndWhiteJobCount', $this->getCompletedBlackAndWhiteJobCount());
        $writer->writeIntegerValue('completedColorJobCount', $this->getCompletedColorJobCount());
        $writer->writeIntegerValue('incompleteJobCount', $this->getIncompleteJobCount());
        $writer->writeDateValue('usageDate', $this->getUsageDate());
    }

    /**
     * Sets the completedBlackAndWhiteJobCount property value. The completedBlackAndWhiteJobCount property
     *  @param int|null $value Value to set for the completedBlackAndWhiteJobCount property.
    */
    public function setCompletedBlackAndWhiteJobCount(?int $value): void {
        $this->getBackingStore()->set('completedBlackAndWhiteJobCount', $value);
    }

    /**
     * Sets the completedColorJobCount property value. The completedColorJobCount property
     *  @param int|null $value Value to set for the completedColorJobCount property.
    */
    public function setCompletedColorJobCount(?int $value): void {
        $this->getBackingStore()->set('completedColorJobCount', $value);
    }

    /**
     * Sets the incompleteJobCount property value. The incompleteJobCount property
     *  @param int|null $value Value to set for the incompleteJobCount property.
    */
    public function setIncompleteJobCount(?int $value): void {
        $this->getBackingStore()->set('incompleteJobCount', $value);
    }

    /**
     * Sets the usageDate property value. The usageDate property
     *  @param Date|null $value Value to set for the usageDate property.
    */
    public function setUsageDate(?Date $value): void {
        $this->getBackingStore()->set('usageDate', $value);
    }

}
