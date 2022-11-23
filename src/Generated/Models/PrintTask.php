<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrintTask extends Entity implements Parsable 
{
    /**
     * Instantiates a new printTask and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrintTask
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrintTask {
        return new PrintTask();
    }

    /**
     * Gets the definition property value. The definition property
     * @return PrintTaskDefinition|null
    */
    public function getDefinition(): ?PrintTaskDefinition {
        return $this->getBackingStore()->get('definition');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'definition' => fn(ParseNode $n) => $o->setDefinition($n->getObjectValue([PrintTaskDefinition::class, 'createFromDiscriminatorValue'])),
            'parentUrl' => fn(ParseNode $n) => $o->setParentUrl($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getObjectValue([PrintTaskStatus::class, 'createFromDiscriminatorValue'])),
            'trigger' => fn(ParseNode $n) => $o->setTrigger($n->getObjectValue([PrintTaskTrigger::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the parentUrl property value. The URL for the print entity that triggered this task. For example, https://graph.microsoft.com/v1.0/print/printers/{printerId}/jobs/{jobId}. Read-only.
     * @return string|null
    */
    public function getParentUrl(): ?string {
        return $this->getBackingStore()->get('parentUrl');
    }

    /**
     * Gets the status property value. The status property
     * @return PrintTaskStatus|null
    */
    public function getStatus(): ?PrintTaskStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the trigger property value. The trigger property
     * @return PrintTaskTrigger|null
    */
    public function getTrigger(): ?PrintTaskTrigger {
        return $this->getBackingStore()->get('trigger');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('definition', $this->getDefinition());
        $writer->writeStringValue('parentUrl', $this->getParentUrl());
        $writer->writeObjectValue('status', $this->getStatus());
        $writer->writeObjectValue('trigger', $this->getTrigger());
    }

    /**
     * Sets the definition property value. The definition property
     *  @param PrintTaskDefinition|null $value Value to set for the definition property.
    */
    public function setDefinition(?PrintTaskDefinition $value): void {
        $this->getBackingStore()->set('definition', $value);
    }

    /**
     * Sets the parentUrl property value. The URL for the print entity that triggered this task. For example, https://graph.microsoft.com/v1.0/print/printers/{printerId}/jobs/{jobId}. Read-only.
     *  @param string|null $value Value to set for the parentUrl property.
    */
    public function setParentUrl(?string $value): void {
        $this->getBackingStore()->set('parentUrl', $value);
    }

    /**
     * Sets the status property value. The status property
     *  @param PrintTaskStatus|null $value Value to set for the status property.
    */
    public function setStatus(?PrintTaskStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the trigger property value. The trigger property
     *  @param PrintTaskTrigger|null $value Value to set for the trigger property.
    */
    public function setTrigger(?PrintTaskTrigger $value): void {
        $this->getBackingStore()->set('trigger', $value);
    }

}
