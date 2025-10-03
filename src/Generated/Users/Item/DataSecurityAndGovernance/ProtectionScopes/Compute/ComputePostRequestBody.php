<?php

namespace Microsoft\\Graph\\Generated\Users\Item\DataSecurityAndGovernance\ProtectionScopes\Compute;

use Microsoft\\Graph\\Generated\Models\DeviceMetadata;
use Microsoft\\Graph\\Generated\Models\IntegratedApplicationMetadata;
use Microsoft\\Graph\\Generated\Models\PolicyLocation;
use Microsoft\\Graph\\Generated\Models\PolicyPivotProperty;
use Microsoft\\Graph\\Generated\Models\UserActivityTypes;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ComputePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ComputePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ComputePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ComputePostRequestBody {
        return new ComputePostRequestBody();
    }

    /**
     * Gets the activities property value. The activities property
     * @return UserActivityTypes|null
    */
    public function getActivities(): ?UserActivityTypes {
        $val = $this->getBackingStore()->get('activities');
        if (is_null($val) || $val instanceof UserActivityTypes) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activities'");
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the deviceMetadata property value. The deviceMetadata property
     * @return DeviceMetadata|null
    */
    public function getDeviceMetadata(): ?DeviceMetadata {
        $val = $this->getBackingStore()->get('deviceMetadata');
        if (is_null($val) || $val instanceof DeviceMetadata) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceMetadata'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'activities' => fn(ParseNode $n) => $o->setActivities($n->getEnumValue(UserActivityTypes::class)),
            'deviceMetadata' => fn(ParseNode $n) => $o->setDeviceMetadata($n->getObjectValue([DeviceMetadata::class, 'createFromDiscriminatorValue'])),
            'integratedAppMetadata' => fn(ParseNode $n) => $o->setIntegratedAppMetadata($n->getObjectValue([IntegratedApplicationMetadata::class, 'createFromDiscriminatorValue'])),
            'locations' => fn(ParseNode $n) => $o->setLocations($n->getCollectionOfObjectValues([PolicyLocation::class, 'createFromDiscriminatorValue'])),
            'pivotOn' => fn(ParseNode $n) => $o->setPivotOn($n->getEnumValue(PolicyPivotProperty::class)),
        ];
    }

    /**
     * Gets the integratedAppMetadata property value. The integratedAppMetadata property
     * @return IntegratedApplicationMetadata|null
    */
    public function getIntegratedAppMetadata(): ?IntegratedApplicationMetadata {
        $val = $this->getBackingStore()->get('integratedAppMetadata');
        if (is_null($val) || $val instanceof IntegratedApplicationMetadata) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'integratedAppMetadata'");
    }

    /**
     * Gets the locations property value. The locations property
     * @return array<PolicyLocation>|null
    */
    public function getLocations(): ?array {
        $val = $this->getBackingStore()->get('locations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PolicyLocation::class);
            /** @var array<PolicyLocation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'locations'");
    }

    /**
     * Gets the pivotOn property value. The pivotOn property
     * @return PolicyPivotProperty|null
    */
    public function getPivotOn(): ?PolicyPivotProperty {
        $val = $this->getBackingStore()->get('pivotOn');
        if (is_null($val) || $val instanceof PolicyPivotProperty) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pivotOn'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('activities', $this->getActivities());
        $writer->writeObjectValue('deviceMetadata', $this->getDeviceMetadata());
        $writer->writeObjectValue('integratedAppMetadata', $this->getIntegratedAppMetadata());
        $writer->writeCollectionOfObjectValues('locations', $this->getLocations());
        $writer->writeEnumValue('pivotOn', $this->getPivotOn());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the activities property value. The activities property
     * @param UserActivityTypes|null $value Value to set for the activities property.
    */
    public function setActivities(?UserActivityTypes $value): void {
        $this->getBackingStore()->set('activities', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the deviceMetadata property value. The deviceMetadata property
     * @param DeviceMetadata|null $value Value to set for the deviceMetadata property.
    */
    public function setDeviceMetadata(?DeviceMetadata $value): void {
        $this->getBackingStore()->set('deviceMetadata', $value);
    }

    /**
     * Sets the integratedAppMetadata property value. The integratedAppMetadata property
     * @param IntegratedApplicationMetadata|null $value Value to set for the integratedAppMetadata property.
    */
    public function setIntegratedAppMetadata(?IntegratedApplicationMetadata $value): void {
        $this->getBackingStore()->set('integratedAppMetadata', $value);
    }

    /**
     * Sets the locations property value. The locations property
     * @param array<PolicyLocation>|null $value Value to set for the locations property.
    */
    public function setLocations(?array $value): void {
        $this->getBackingStore()->set('locations', $value);
    }

    /**
     * Sets the pivotOn property value. The pivotOn property
     * @param PolicyPivotProperty|null $value Value to set for the pivotOn property.
    */
    public function setPivotOn(?PolicyPivotProperty $value): void {
        $this->getBackingStore()->set('pivotOn', $value);
    }

}
