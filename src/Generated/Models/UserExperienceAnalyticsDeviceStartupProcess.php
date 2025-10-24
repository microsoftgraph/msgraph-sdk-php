<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics device startup process details.
*/
class UserExperienceAnalyticsDeviceStartupProcess extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserExperienceAnalyticsDeviceStartupProcess and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsDeviceStartupProcess
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsDeviceStartupProcess {
        return new UserExperienceAnalyticsDeviceStartupProcess();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'managedDeviceId' => fn(ParseNode $n) => $o->setManagedDeviceId($n->getStringValue()),
            'processName' => fn(ParseNode $n) => $o->setProcessName($n->getStringValue()),
            'productName' => fn(ParseNode $n) => $o->setProductName($n->getStringValue()),
            'publisher' => fn(ParseNode $n) => $o->setPublisher($n->getStringValue()),
            'startupImpactInMs' => fn(ParseNode $n) => $o->setStartupImpactInMs($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the managedDeviceId property value. The Intune device id of the device. Supports: $select, $OrderBy. Read-only.
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        $val = $this->getBackingStore()->get('managedDeviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDeviceId'");
    }

    /**
     * Gets the processName property value. The name of the process. Examples: outlook, excel. Supports: $select, $OrderBy. Read-only.
     * @return string|null
    */
    public function getProcessName(): ?string {
        $val = $this->getBackingStore()->get('processName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processName'");
    }

    /**
     * Gets the productName property value. The product name of the process. Examples: Microsoft Outlook, Microsoft Excel. Supports: $select, $OrderBy. Read-only.
     * @return string|null
    */
    public function getProductName(): ?string {
        $val = $this->getBackingStore()->get('productName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productName'");
    }

    /**
     * Gets the publisher property value. The publisher of the process. Examples: Microsoft Corporation, Contoso Corp. Supports: $select, $OrderBy. Read-only.
     * @return string|null
    */
    public function getPublisher(): ?string {
        $val = $this->getBackingStore()->get('publisher');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publisher'");
    }

    /**
     * Gets the startupImpactInMs property value. The impact of startup process on device boot time in milliseconds. Supports: $select, $OrderBy. Read-only.
     * @return int|null
    */
    public function getStartupImpactInMs(): ?int {
        $val = $this->getBackingStore()->get('startupImpactInMs');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startupImpactInMs'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('managedDeviceId', $this->getManagedDeviceId());
        $writer->writeStringValue('processName', $this->getProcessName());
        $writer->writeStringValue('productName', $this->getProductName());
        $writer->writeStringValue('publisher', $this->getPublisher());
        $writer->writeIntegerValue('startupImpactInMs', $this->getStartupImpactInMs());
    }

    /**
     * Sets the managedDeviceId property value. The Intune device id of the device. Supports: $select, $OrderBy. Read-only.
     * @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value): void {
        $this->getBackingStore()->set('managedDeviceId', $value);
    }

    /**
     * Sets the processName property value. The name of the process. Examples: outlook, excel. Supports: $select, $OrderBy. Read-only.
     * @param string|null $value Value to set for the processName property.
    */
    public function setProcessName(?string $value): void {
        $this->getBackingStore()->set('processName', $value);
    }

    /**
     * Sets the productName property value. The product name of the process. Examples: Microsoft Outlook, Microsoft Excel. Supports: $select, $OrderBy. Read-only.
     * @param string|null $value Value to set for the productName property.
    */
    public function setProductName(?string $value): void {
        $this->getBackingStore()->set('productName', $value);
    }

    /**
     * Sets the publisher property value. The publisher of the process. Examples: Microsoft Corporation, Contoso Corp. Supports: $select, $OrderBy. Read-only.
     * @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value): void {
        $this->getBackingStore()->set('publisher', $value);
    }

    /**
     * Sets the startupImpactInMs property value. The impact of startup process on device boot time in milliseconds. Supports: $select, $OrderBy. Read-only.
     * @param int|null $value Value to set for the startupImpactInMs property.
    */
    public function setStartupImpactInMs(?int $value): void {
        $this->getBackingStore()->set('startupImpactInMs', $value);
    }

}
