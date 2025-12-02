<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharePointMigrationJobCancelledEvent extends SharePointMigrationEvent implements Parsable 
{
    /**
     * Instantiates a new SharePointMigrationJobCancelledEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharePointMigrationJobCancelledEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharePointMigrationJobCancelledEvent {
        return new SharePointMigrationJobCancelledEvent();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isCancelledByUser' => fn(ParseNode $n) => $o->setIsCancelledByUser($n->getBooleanValue()),
            'totalRetryCount' => fn(ParseNode $n) => $o->setTotalRetryCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the isCancelledByUser property value. True when a user cancels the job; otherwise, false. Read-only.
     * @return bool|null
    */
    public function getIsCancelledByUser(): ?bool {
        $val = $this->getBackingStore()->get('isCancelledByUser');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCancelledByUser'");
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
        $writer->writeBooleanValue('isCancelledByUser', $this->getIsCancelledByUser());
        $writer->writeIntegerValue('totalRetryCount', $this->getTotalRetryCount());
    }

    /**
     * Sets the isCancelledByUser property value. True when a user cancels the job; otherwise, false. Read-only.
     * @param bool|null $value Value to set for the isCancelledByUser property.
    */
    public function setIsCancelledByUser(?bool $value): void {
        $this->getBackingStore()->set('isCancelledByUser', $value);
    }

    /**
     * Sets the totalRetryCount property value. The current retry count of the job. Read-only.
     * @param int|null $value Value to set for the totalRetryCount property.
    */
    public function setTotalRetryCount(?int $value): void {
        $this->getBackingStore()->set('totalRetryCount', $value);
    }

}
