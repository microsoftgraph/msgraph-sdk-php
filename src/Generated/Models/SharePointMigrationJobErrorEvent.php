<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharePointMigrationJobErrorEvent extends SharePointMigrationEvent implements Parsable 
{
    /**
     * Instantiates a new SharePointMigrationJobErrorEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharePointMigrationJobErrorEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharePointMigrationJobErrorEvent {
        return new SharePointMigrationJobErrorEvent();
    }

    /**
     * Gets the error property value. The error property
     * @return PublicError|null
    */
    public function getError(): ?PublicError {
        $val = $this->getBackingStore()->get('error');
        if (is_null($val) || $val instanceof PublicError) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'error'");
    }

    /**
     * Gets the errorLevel property value. The errorLevel property
     * @return SharePointMigrationJobErrorLevel|null
    */
    public function getErrorLevel(): ?SharePointMigrationJobErrorLevel {
        $val = $this->getBackingStore()->get('errorLevel');
        if (is_null($val) || $val instanceof SharePointMigrationJobErrorLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorLevel'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([PublicError::class, 'createFromDiscriminatorValue'])),
            'errorLevel' => fn(ParseNode $n) => $o->setErrorLevel($n->getEnumValue(SharePointMigrationJobErrorLevel::class)),
            'objectId' => fn(ParseNode $n) => $o->setObjectId($n->getStringValue()),
            'objectType' => fn(ParseNode $n) => $o->setObjectType($n->getEnumValue(SharePointMigrationObjectType::class)),
            'objectUrl' => fn(ParseNode $n) => $o->setObjectUrl($n->getStringValue()),
            'totalRetryCount' => fn(ParseNode $n) => $o->setTotalRetryCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the objectId property value. The object ID. Read-only.
     * @return string|null
    */
    public function getObjectId(): ?string {
        $val = $this->getBackingStore()->get('objectId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'objectId'");
    }

    /**
     * Gets the objectType property value. The objectType property
     * @return SharePointMigrationObjectType|null
    */
    public function getObjectType(): ?SharePointMigrationObjectType {
        $val = $this->getBackingStore()->get('objectType');
        if (is_null($val) || $val instanceof SharePointMigrationObjectType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'objectType'");
    }

    /**
     * Gets the objectUrl property value. The object URL. Read-only.
     * @return string|null
    */
    public function getObjectUrl(): ?string {
        $val = $this->getBackingStore()->get('objectUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'objectUrl'");
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
        $writer->writeObjectValue('error', $this->getError());
        $writer->writeEnumValue('errorLevel', $this->getErrorLevel());
        $writer->writeStringValue('objectId', $this->getObjectId());
        $writer->writeEnumValue('objectType', $this->getObjectType());
        $writer->writeStringValue('objectUrl', $this->getObjectUrl());
        $writer->writeIntegerValue('totalRetryCount', $this->getTotalRetryCount());
    }

    /**
     * Sets the error property value. The error property
     * @param PublicError|null $value Value to set for the error property.
    */
    public function setError(?PublicError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the errorLevel property value. The errorLevel property
     * @param SharePointMigrationJobErrorLevel|null $value Value to set for the errorLevel property.
    */
    public function setErrorLevel(?SharePointMigrationJobErrorLevel $value): void {
        $this->getBackingStore()->set('errorLevel', $value);
    }

    /**
     * Sets the objectId property value. The object ID. Read-only.
     * @param string|null $value Value to set for the objectId property.
    */
    public function setObjectId(?string $value): void {
        $this->getBackingStore()->set('objectId', $value);
    }

    /**
     * Sets the objectType property value. The objectType property
     * @param SharePointMigrationObjectType|null $value Value to set for the objectType property.
    */
    public function setObjectType(?SharePointMigrationObjectType $value): void {
        $this->getBackingStore()->set('objectType', $value);
    }

    /**
     * Sets the objectUrl property value. The object URL. Read-only.
     * @param string|null $value Value to set for the objectUrl property.
    */
    public function setObjectUrl(?string $value): void {
        $this->getBackingStore()->set('objectUrl', $value);
    }

    /**
     * Sets the totalRetryCount property value. The current retry count of the job. Read-only.
     * @param int|null $value Value to set for the totalRetryCount property.
    */
    public function setTotalRetryCount(?int $value): void {
        $this->getBackingStore()->set('totalRetryCount', $value);
    }

}
