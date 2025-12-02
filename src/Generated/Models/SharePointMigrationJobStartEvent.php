<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharePointMigrationJobStartEvent extends SharePointMigrationEvent implements Parsable 
{
    /**
     * Instantiates a new SharePointMigrationJobStartEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharePointMigrationJobStartEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharePointMigrationJobStartEvent {
        return new SharePointMigrationJobStartEvent();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isRestarted' => fn(ParseNode $n) => $o->setIsRestarted($n->getBooleanValue()),
            'totalRetryCount' => fn(ParseNode $n) => $o->setTotalRetryCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the isRestarted property value. True if the job is restarted. False if it's the initial start. Read-only.
     * @return bool|null
    */
    public function getIsRestarted(): ?bool {
        $val = $this->getBackingStore()->get('isRestarted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRestarted'");
    }

    /**
     * Gets the totalRetryCount property value. The current retry count of the job. Read-only.
     * @return int|null
    */
    public function getTotalRetryCount(): ?int {
        $val = $this->getBackingStore()->get('totalRetryCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalRetryCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isRestarted', $this->getIsRestarted());
        $writer->writeIntegerValue('totalRetryCount', $this->getTotalRetryCount());
    }

    /**
     * Sets the isRestarted property value. True if the job is restarted. False if it's the initial start. Read-only.
     * @param bool|null $value Value to set for the isRestarted property.
    */
    public function setIsRestarted(?bool $value): void {
        $this->getBackingStore()->set('isRestarted', $value);
    }

    /**
     * Sets the totalRetryCount property value. The current retry count of the job. Read-only.
     * @param int|null $value Value to set for the totalRetryCount property.
    */
    public function setTotalRetryCount(?int $value): void {
        $this->getBackingStore()->set('totalRetryCount', $value);
    }

}
