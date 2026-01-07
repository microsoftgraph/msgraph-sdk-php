<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CloudPcLaunchDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CloudPcLaunchDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcLaunchDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcLaunchDetail {
        return new CloudPcLaunchDetail();
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
     * Gets the cloudPcId property value. The unique identifier of the Cloud PC.
     * @return string|null
    */
    public function getCloudPcId(): ?string {
        $val = $this->getBackingStore()->get('cloudPcId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudPcId'");
    }

    /**
     * Gets the cloudPcLaunchUrl property value. The connect URL of the Cloud PC.
     * @return string|null
    */
    public function getCloudPcLaunchUrl(): ?string {
        $val = $this->getBackingStore()->get('cloudPcLaunchUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudPcLaunchUrl'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cloudPcId' => fn(ParseNode $n) => $o->setCloudPcId($n->getStringValue()),
            'cloudPcLaunchUrl' => fn(ParseNode $n) => $o->setCloudPcLaunchUrl($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'windows365SwitchCompatibilityFailureReasonType' => fn(ParseNode $n) => $o->setWindows365SwitchCompatibilityFailureReasonType($n->getEnumValue(Windows365SwitchCompatibilityFailureReasonType::class)),
            'windows365SwitchCompatible' => fn(ParseNode $n) => $o->setWindows365SwitchCompatible($n->getBooleanValue()),
        ];
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
     * Gets the windows365SwitchCompatibilityFailureReasonType property value. Indicates the reason the Cloud PC isn't compatible with Windows 365 Switch. Possible values are: osVersionNotSupported, hardwareNotSupported, unknownFutureValue. osVersionNotSupported indicates that the user needs to update their Cloud PC operating system version. hardwareNotSupported indicates that the Cloud PC needs more CPUs or RAM to support the functionality.
     * @return Windows365SwitchCompatibilityFailureReasonType|null
    */
    public function getWindows365SwitchCompatibilityFailureReasonType(): ?Windows365SwitchCompatibilityFailureReasonType {
        $val = $this->getBackingStore()->get('windows365SwitchCompatibilityFailureReasonType');
        if (is_null($val) || $val instanceof Windows365SwitchCompatibilityFailureReasonType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windows365SwitchCompatibilityFailureReasonType'");
    }

    /**
     * Gets the windows365SwitchCompatible property value. Indicates whether the Cloud PC supports switch functionality. If the value is true, it supports switch functionality; otherwise, false.
     * @return bool|null
    */
    public function getWindows365SwitchCompatible(): ?bool {
        $val = $this->getBackingStore()->get('windows365SwitchCompatible');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windows365SwitchCompatible'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('cloudPcId', $this->getCloudPcId());
        $writer->writeStringValue('cloudPcLaunchUrl', $this->getCloudPcLaunchUrl());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('windows365SwitchCompatibilityFailureReasonType', $this->getWindows365SwitchCompatibilityFailureReasonType());
        $writer->writeBooleanValue('windows365SwitchCompatible', $this->getWindows365SwitchCompatible());
        $writer->writeAdditionalData($this->getAdditionalData());
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
     * Sets the cloudPcId property value. The unique identifier of the Cloud PC.
     * @param string|null $value Value to set for the cloudPcId property.
    */
    public function setCloudPcId(?string $value): void {
        $this->getBackingStore()->set('cloudPcId', $value);
    }

    /**
     * Sets the cloudPcLaunchUrl property value. The connect URL of the Cloud PC.
     * @param string|null $value Value to set for the cloudPcLaunchUrl property.
    */
    public function setCloudPcLaunchUrl(?string $value): void {
        $this->getBackingStore()->set('cloudPcLaunchUrl', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the windows365SwitchCompatibilityFailureReasonType property value. Indicates the reason the Cloud PC isn't compatible with Windows 365 Switch. Possible values are: osVersionNotSupported, hardwareNotSupported, unknownFutureValue. osVersionNotSupported indicates that the user needs to update their Cloud PC operating system version. hardwareNotSupported indicates that the Cloud PC needs more CPUs or RAM to support the functionality.
     * @param Windows365SwitchCompatibilityFailureReasonType|null $value Value to set for the windows365SwitchCompatibilityFailureReasonType property.
    */
    public function setWindows365SwitchCompatibilityFailureReasonType(?Windows365SwitchCompatibilityFailureReasonType $value): void {
        $this->getBackingStore()->set('windows365SwitchCompatibilityFailureReasonType', $value);
    }

    /**
     * Sets the windows365SwitchCompatible property value. Indicates whether the Cloud PC supports switch functionality. If the value is true, it supports switch functionality; otherwise, false.
     * @param bool|null $value Value to set for the windows365SwitchCompatible property.
    */
    public function setWindows365SwitchCompatible(?bool $value): void {
        $this->getBackingStore()->set('windows365SwitchCompatible', $value);
    }

}
