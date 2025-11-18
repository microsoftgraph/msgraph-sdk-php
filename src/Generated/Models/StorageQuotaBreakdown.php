<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class StorageQuotaBreakdown extends Entity implements Parsable 
{
    /**
     * Instantiates a new StorageQuotaBreakdown and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StorageQuotaBreakdown
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StorageQuotaBreakdown {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.serviceStorageQuotaBreakdown': return new ServiceStorageQuotaBreakdown();
            }
        }
        return new StorageQuotaBreakdown();
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'manageWebUrl' => fn(ParseNode $n) => $o->setManageWebUrl($n->getStringValue()),
            'used' => fn(ParseNode $n) => $o->setUsed($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the manageWebUrl property value. The manageWebUrl property
     * @return string|null
    */
    public function getManageWebUrl(): ?string {
        $val = $this->getBackingStore()->get('manageWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'manageWebUrl'");
    }

    /**
     * Gets the used property value. The used property
     * @return int|null
    */
    public function getUsed(): ?int {
        $val = $this->getBackingStore()->get('used');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'used'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('manageWebUrl', $this->getManageWebUrl());
        $writer->writeIntegerValue('used', $this->getUsed());
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the manageWebUrl property value. The manageWebUrl property
     * @param string|null $value Value to set for the manageWebUrl property.
    */
    public function setManageWebUrl(?string $value): void {
        $this->getBackingStore()->set('manageWebUrl', $value);
    }

    /**
     * Sets the used property value. The used property
     * @param int|null $value Value to set for the used property.
    */
    public function setUsed(?int $value): void {
        $this->getBackingStore()->set('used', $value);
    }

}
