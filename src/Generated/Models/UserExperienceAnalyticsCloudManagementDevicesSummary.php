<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * The user experience work from anywhere Cloud management devices summary.
*/
class UserExperienceAnalyticsCloudManagementDevicesSummary implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new userExperienceAnalyticsCloudManagementDevicesSummary and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsCloudManagementDevicesSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsCloudManagementDevicesSummary {
        return new UserExperienceAnalyticsCloudManagementDevicesSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the coManagedDeviceCount property value. Total number of  co-managed devices. Read-only.
     * @return int|null
    */
    public function getCoManagedDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('coManagedDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'coManagedDeviceCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'coManagedDeviceCount' => fn(ParseNode $n) => $o->setCoManagedDeviceCount($n->getIntegerValue()),
            'intuneDeviceCount' => fn(ParseNode $n) => $o->setIntuneDeviceCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'tenantAttachDeviceCount' => fn(ParseNode $n) => $o->setTenantAttachDeviceCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the intuneDeviceCount property value. The count of intune devices that are not autopilot registerd. Read-only.
     * @return int|null
    */
    public function getIntuneDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('intuneDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'intuneDeviceCount'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the tenantAttachDeviceCount property value. Total count of tenant attach devices. Read-only.
     * @return int|null
    */
    public function getTenantAttachDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('tenantAttachDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantAttachDeviceCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('coManagedDeviceCount', $this->getCoManagedDeviceCount());
        $writer->writeIntegerValue('intuneDeviceCount', $this->getIntuneDeviceCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('tenantAttachDeviceCount', $this->getTenantAttachDeviceCount());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the coManagedDeviceCount property value. Total number of  co-managed devices. Read-only.
     * @param int|null $value Value to set for the coManagedDeviceCount property.
    */
    public function setCoManagedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('coManagedDeviceCount', $value);
    }

    /**
     * Sets the intuneDeviceCount property value. The count of intune devices that are not autopilot registerd. Read-only.
     * @param int|null $value Value to set for the intuneDeviceCount property.
    */
    public function setIntuneDeviceCount(?int $value): void {
        $this->getBackingStore()->set('intuneDeviceCount', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the tenantAttachDeviceCount property value. Total count of tenant attach devices. Read-only.
     * @param int|null $value Value to set for the tenantAttachDeviceCount property.
    */
    public function setTenantAttachDeviceCount(?int $value): void {
        $this->getBackingStore()->set('tenantAttachDeviceCount', $value);
    }

}
