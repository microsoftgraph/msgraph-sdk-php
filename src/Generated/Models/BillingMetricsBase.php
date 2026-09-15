<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class BillingMetricsBase extends Entity implements Parsable 
{
    /**
     * Instantiates a new BillingMetricsBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BillingMetricsBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BillingMetricsBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.billingMetricsInitial': return new BillingMetricsInitial();
                case '#microsoft.graph.billingMetricsRecent': return new BillingMetricsRecent();
            }
        }
        return new BillingMetricsBase();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'foreignAssociatedTenantBillingManagementActiveCount' => fn(ParseNode $n) => $o->setForeignAssociatedTenantBillingManagementActiveCount($n->getStringValue()),
            'foreignAssociatedTenantCount' => fn(ParseNode $n) => $o->setForeignAssociatedTenantCount($n->getStringValue()),
            'foreignAssociatedTenantProvisioningActiveCount' => fn(ParseNode $n) => $o->setForeignAssociatedTenantProvisioningActiveCount($n->getStringValue()),
            'localAssociatedTenantBillingManagementActiveCount' => fn(ParseNode $n) => $o->setLocalAssociatedTenantBillingManagementActiveCount($n->getStringValue()),
            'localAssociatedTenantCount' => fn(ParseNode $n) => $o->setLocalAssociatedTenantCount($n->getStringValue()),
            'localAssociatedTenantIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setLocalAssociatedTenantIds($val);
            },
            'localAssociatedTenantProvisioningActiveCount' => fn(ParseNode $n) => $o->setLocalAssociatedTenantProvisioningActiveCount($n->getStringValue()),
            'watermarkDateTime' => fn(ParseNode $n) => $o->setWatermarkDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the foreignAssociatedTenantBillingManagementActiveCount property value. The foreignAssociatedTenantBillingManagementActiveCount property
     * @return string|null
    */
    public function getForeignAssociatedTenantBillingManagementActiveCount(): ?string {
        $val = $this->getBackingStore()->get('foreignAssociatedTenantBillingManagementActiveCount');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'foreignAssociatedTenantBillingManagementActiveCount'");
    }

    /**
     * Gets the foreignAssociatedTenantCount property value. The foreignAssociatedTenantCount property
     * @return string|null
    */
    public function getForeignAssociatedTenantCount(): ?string {
        $val = $this->getBackingStore()->get('foreignAssociatedTenantCount');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'foreignAssociatedTenantCount'");
    }

    /**
     * Gets the foreignAssociatedTenantProvisioningActiveCount property value. The foreignAssociatedTenantProvisioningActiveCount property
     * @return string|null
    */
    public function getForeignAssociatedTenantProvisioningActiveCount(): ?string {
        $val = $this->getBackingStore()->get('foreignAssociatedTenantProvisioningActiveCount');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'foreignAssociatedTenantProvisioningActiveCount'");
    }

    /**
     * Gets the localAssociatedTenantBillingManagementActiveCount property value. The localAssociatedTenantBillingManagementActiveCount property
     * @return string|null
    */
    public function getLocalAssociatedTenantBillingManagementActiveCount(): ?string {
        $val = $this->getBackingStore()->get('localAssociatedTenantBillingManagementActiveCount');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localAssociatedTenantBillingManagementActiveCount'");
    }

    /**
     * Gets the localAssociatedTenantCount property value. The localAssociatedTenantCount property
     * @return string|null
    */
    public function getLocalAssociatedTenantCount(): ?string {
        $val = $this->getBackingStore()->get('localAssociatedTenantCount');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localAssociatedTenantCount'");
    }

    /**
     * Gets the localAssociatedTenantIds property value. The localAssociatedTenantIds property
     * @return array<string>|null
    */
    public function getLocalAssociatedTenantIds(): ?array {
        $val = $this->getBackingStore()->get('localAssociatedTenantIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localAssociatedTenantIds'");
    }

    /**
     * Gets the localAssociatedTenantProvisioningActiveCount property value. The localAssociatedTenantProvisioningActiveCount property
     * @return string|null
    */
    public function getLocalAssociatedTenantProvisioningActiveCount(): ?string {
        $val = $this->getBackingStore()->get('localAssociatedTenantProvisioningActiveCount');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localAssociatedTenantProvisioningActiveCount'");
    }

    /**
     * Gets the watermarkDateTime property value. The watermarkDateTime property
     * @return DateTime|null
    */
    public function getWatermarkDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('watermarkDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'watermarkDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('foreignAssociatedTenantBillingManagementActiveCount', $this->getForeignAssociatedTenantBillingManagementActiveCount());
        $writer->writeStringValue('foreignAssociatedTenantCount', $this->getForeignAssociatedTenantCount());
        $writer->writeStringValue('foreignAssociatedTenantProvisioningActiveCount', $this->getForeignAssociatedTenantProvisioningActiveCount());
        $writer->writeStringValue('localAssociatedTenantBillingManagementActiveCount', $this->getLocalAssociatedTenantBillingManagementActiveCount());
        $writer->writeStringValue('localAssociatedTenantCount', $this->getLocalAssociatedTenantCount());
        $writer->writeCollectionOfPrimitiveValues('localAssociatedTenantIds', $this->getLocalAssociatedTenantIds());
        $writer->writeStringValue('localAssociatedTenantProvisioningActiveCount', $this->getLocalAssociatedTenantProvisioningActiveCount());
        $writer->writeDateTimeValue('watermarkDateTime', $this->getWatermarkDateTime());
    }

    /**
     * Sets the foreignAssociatedTenantBillingManagementActiveCount property value. The foreignAssociatedTenantBillingManagementActiveCount property
     * @param string|null $value Value to set for the foreignAssociatedTenantBillingManagementActiveCount property.
    */
    public function setForeignAssociatedTenantBillingManagementActiveCount(?string $value): void {
        $this->getBackingStore()->set('foreignAssociatedTenantBillingManagementActiveCount', $value);
    }

    /**
     * Sets the foreignAssociatedTenantCount property value. The foreignAssociatedTenantCount property
     * @param string|null $value Value to set for the foreignAssociatedTenantCount property.
    */
    public function setForeignAssociatedTenantCount(?string $value): void {
        $this->getBackingStore()->set('foreignAssociatedTenantCount', $value);
    }

    /**
     * Sets the foreignAssociatedTenantProvisioningActiveCount property value. The foreignAssociatedTenantProvisioningActiveCount property
     * @param string|null $value Value to set for the foreignAssociatedTenantProvisioningActiveCount property.
    */
    public function setForeignAssociatedTenantProvisioningActiveCount(?string $value): void {
        $this->getBackingStore()->set('foreignAssociatedTenantProvisioningActiveCount', $value);
    }

    /**
     * Sets the localAssociatedTenantBillingManagementActiveCount property value. The localAssociatedTenantBillingManagementActiveCount property
     * @param string|null $value Value to set for the localAssociatedTenantBillingManagementActiveCount property.
    */
    public function setLocalAssociatedTenantBillingManagementActiveCount(?string $value): void {
        $this->getBackingStore()->set('localAssociatedTenantBillingManagementActiveCount', $value);
    }

    /**
     * Sets the localAssociatedTenantCount property value. The localAssociatedTenantCount property
     * @param string|null $value Value to set for the localAssociatedTenantCount property.
    */
    public function setLocalAssociatedTenantCount(?string $value): void {
        $this->getBackingStore()->set('localAssociatedTenantCount', $value);
    }

    /**
     * Sets the localAssociatedTenantIds property value. The localAssociatedTenantIds property
     * @param array<string>|null $value Value to set for the localAssociatedTenantIds property.
    */
    public function setLocalAssociatedTenantIds(?array $value): void {
        $this->getBackingStore()->set('localAssociatedTenantIds', $value);
    }

    /**
     * Sets the localAssociatedTenantProvisioningActiveCount property value. The localAssociatedTenantProvisioningActiveCount property
     * @param string|null $value Value to set for the localAssociatedTenantProvisioningActiveCount property.
    */
    public function setLocalAssociatedTenantProvisioningActiveCount(?string $value): void {
        $this->getBackingStore()->set('localAssociatedTenantProvisioningActiveCount', $value);
    }

    /**
     * Sets the watermarkDateTime property value. The watermarkDateTime property
     * @param DateTime|null $value Value to set for the watermarkDateTime property.
    */
    public function setWatermarkDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('watermarkDateTime', $value);
    }

}
