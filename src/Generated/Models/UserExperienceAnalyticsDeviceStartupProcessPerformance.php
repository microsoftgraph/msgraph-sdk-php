<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics device startup process performance.
*/
class UserExperienceAnalyticsDeviceStartupProcessPerformance extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserExperienceAnalyticsDeviceStartupProcessPerformance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsDeviceStartupProcessPerformance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsDeviceStartupProcessPerformance {
        return new UserExperienceAnalyticsDeviceStartupProcessPerformance();
    }

    /**
     * Gets the deviceCount property value. The count of devices which initiated this process on startup. Supports: $filter, $select, $OrderBy. Read-only.
     * @return int|null
    */
    public function getDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('deviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceCount' => fn(ParseNode $n) => $o->setDeviceCount($n->getIntegerValue()),
            'medianImpactInMs' => fn(ParseNode $n) => $o->setMedianImpactInMs($n->getIntegerValue()),
            'processName' => fn(ParseNode $n) => $o->setProcessName($n->getStringValue()),
            'productName' => fn(ParseNode $n) => $o->setProductName($n->getStringValue()),
            'publisher' => fn(ParseNode $n) => $o->setPublisher($n->getStringValue()),
            'totalImpactInMs' => fn(ParseNode $n) => $o->setTotalImpactInMs($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the medianImpactInMs property value. The median impact of startup process on device boot time in milliseconds. Supports: $filter, $select, $OrderBy. Read-only.
     * @return int|null
    */
    public function getMedianImpactInMs(): ?int {
        $val = $this->getBackingStore()->get('medianImpactInMs');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'medianImpactInMs'");
    }

    /**
     * Gets the processName property value. The name of the startup process. Examples: outlook, excel. Supports: $select, $OrderBy. Read-only.
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
     * Gets the productName property value. The product name of the startup process. Examples: Microsoft Outlook, Microsoft Excel. Supports: $select, $OrderBy. Read-only.
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
     * Gets the publisher property value. The publisher of the startup process. Examples: Microsoft Corporation, Contoso Corp. Supports: $select, $OrderBy. Read-only.
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
     * Gets the totalImpactInMs property value. The total impact of startup process on device boot time in milliseconds. Supports: $filter, $select, $OrderBy. Read-only.
     * @return int|null
    */
    public function getTotalImpactInMs(): ?int {
        $val = $this->getBackingStore()->get('totalImpactInMs');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalImpactInMs'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('deviceCount', $this->getDeviceCount());
        $writer->writeIntegerValue('medianImpactInMs', $this->getMedianImpactInMs());
        $writer->writeStringValue('processName', $this->getProcessName());
        $writer->writeStringValue('productName', $this->getProductName());
        $writer->writeStringValue('publisher', $this->getPublisher());
        $writer->writeIntegerValue('totalImpactInMs', $this->getTotalImpactInMs());
    }

    /**
     * Sets the deviceCount property value. The count of devices which initiated this process on startup. Supports: $filter, $select, $OrderBy. Read-only.
     * @param int|null $value Value to set for the deviceCount property.
    */
    public function setDeviceCount(?int $value): void {
        $this->getBackingStore()->set('deviceCount', $value);
    }

    /**
     * Sets the medianImpactInMs property value. The median impact of startup process on device boot time in milliseconds. Supports: $filter, $select, $OrderBy. Read-only.
     * @param int|null $value Value to set for the medianImpactInMs property.
    */
    public function setMedianImpactInMs(?int $value): void {
        $this->getBackingStore()->set('medianImpactInMs', $value);
    }

    /**
     * Sets the processName property value. The name of the startup process. Examples: outlook, excel. Supports: $select, $OrderBy. Read-only.
     * @param string|null $value Value to set for the processName property.
    */
    public function setProcessName(?string $value): void {
        $this->getBackingStore()->set('processName', $value);
    }

    /**
     * Sets the productName property value. The product name of the startup process. Examples: Microsoft Outlook, Microsoft Excel. Supports: $select, $OrderBy. Read-only.
     * @param string|null $value Value to set for the productName property.
    */
    public function setProductName(?string $value): void {
        $this->getBackingStore()->set('productName', $value);
    }

    /**
     * Sets the publisher property value. The publisher of the startup process. Examples: Microsoft Corporation, Contoso Corp. Supports: $select, $OrderBy. Read-only.
     * @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value): void {
        $this->getBackingStore()->set('publisher', $value);
    }

    /**
     * Sets the totalImpactInMs property value. The total impact of startup process on device boot time in milliseconds. Supports: $filter, $select, $OrderBy. Read-only.
     * @param int|null $value Value to set for the totalImpactInMs property.
    */
    public function setTotalImpactInMs(?int $value): void {
        $this->getBackingStore()->set('totalImpactInMs', $value);
    }

}
