<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserStorage extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserStorage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserStorage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserStorage {
        return new UserStorage();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'quota' => fn(ParseNode $n) => $o->setQuota($n->getObjectValue([UnifiedStorageQuota::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the quota property value. The quota property
     * @return UnifiedStorageQuota|null
    */
    public function getQuota(): ?UnifiedStorageQuota {
        $val = $this->getBackingStore()->get('quota');
        if (is_null($val) || $val instanceof UnifiedStorageQuota) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'quota'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('quota', $this->getQuota());
    }

    /**
     * Sets the quota property value. The quota property
     * @param UnifiedStorageQuota|null $value Value to set for the quota property.
    */
    public function setQuota(?UnifiedStorageQuota $value): void {
        $this->getBackingStore()->set('quota', $value);
    }

}
