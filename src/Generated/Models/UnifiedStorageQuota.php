<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class UnifiedStorageQuota extends Entity implements Parsable 
{
    /**
     * Instantiates a new UnifiedStorageQuota and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedStorageQuota
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedStorageQuota {
        return new UnifiedStorageQuota();
    }

    /**
     * Gets the deleted property value. The deleted property
     * @return int|null
    */
    public function getDeleted(): ?int {
        $val = $this->getBackingStore()->get('deleted');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deleted'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deleted' => fn(ParseNode $n) => $o->setDeleted($n->getIntegerValue()),
            'manageWebUrl' => fn(ParseNode $n) => $o->setManageWebUrl($n->getStringValue()),
            'remaining' => fn(ParseNode $n) => $o->setRemaining($n->getIntegerValue()),
            'services' => fn(ParseNode $n) => $o->setServices($n->getCollectionOfObjectValues([ServiceStorageQuotaBreakdown::class, 'createFromDiscriminatorValue'])),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
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
     * Gets the remaining property value. The remaining property
     * @return int|null
    */
    public function getRemaining(): ?int {
        $val = $this->getBackingStore()->get('remaining');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remaining'");
    }

    /**
     * Gets the services property value. The services property
     * @return array<ServiceStorageQuotaBreakdown>|null
    */
    public function getServices(): ?array {
        $val = $this->getBackingStore()->get('services');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ServiceStorageQuotaBreakdown::class);
            /** @var array<ServiceStorageQuotaBreakdown>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'services'");
    }

    /**
     * Gets the state property value. The state property
     * @return string|null
    */
    public function getState(): ?string {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Gets the total property value. The total property
     * @return int|null
    */
    public function getTotal(): ?int {
        $val = $this->getBackingStore()->get('total');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'total'");
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
        $writer->writeIntegerValue('deleted', $this->getDeleted());
        $writer->writeStringValue('manageWebUrl', $this->getManageWebUrl());
        $writer->writeIntegerValue('remaining', $this->getRemaining());
        $writer->writeCollectionOfObjectValues('services', $this->getServices());
        $writer->writeStringValue('state', $this->getState());
        $writer->writeIntegerValue('total', $this->getTotal());
        $writer->writeIntegerValue('used', $this->getUsed());
    }

    /**
     * Sets the deleted property value. The deleted property
     * @param int|null $value Value to set for the deleted property.
    */
    public function setDeleted(?int $value): void {
        $this->getBackingStore()->set('deleted', $value);
    }

    /**
     * Sets the manageWebUrl property value. The manageWebUrl property
     * @param string|null $value Value to set for the manageWebUrl property.
    */
    public function setManageWebUrl(?string $value): void {
        $this->getBackingStore()->set('manageWebUrl', $value);
    }

    /**
     * Sets the remaining property value. The remaining property
     * @param int|null $value Value to set for the remaining property.
    */
    public function setRemaining(?int $value): void {
        $this->getBackingStore()->set('remaining', $value);
    }

    /**
     * Sets the services property value. The services property
     * @param array<ServiceStorageQuotaBreakdown>|null $value Value to set for the services property.
    */
    public function setServices(?array $value): void {
        $this->getBackingStore()->set('services', $value);
    }

    /**
     * Sets the state property value. The state property
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the total property value. The total property
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->getBackingStore()->set('total', $value);
    }

    /**
     * Sets the used property value. The used property
     * @param int|null $value Value to set for the used property.
    */
    public function setUsed(?int $value): void {
        $this->getBackingStore()->set('used', $value);
    }

}
