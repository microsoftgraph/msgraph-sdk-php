<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DeviceInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DeviceInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceInfo {
        return new DeviceInfo();
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
     * Gets the deviceId property value. Unique identifier set by Azure Device Registration Service at the time of registration.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        $val = $this->getBackingStore()->get('deviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceId'");
    }

    /**
     * Gets the displayName property value. The display name for the device.
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
     * Gets the enrollmentProfileName property value. Enrollment profile applied to the device.
     * @return string|null
    */
    public function getEnrollmentProfileName(): ?string {
        $val = $this->getBackingStore()->get('enrollmentProfileName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrollmentProfileName'");
    }

    /**
     * Gets the extensionAttribute1 property value. Extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute1(): ?string {
        $val = $this->getBackingStore()->get('extensionAttribute1');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensionAttribute1'");
    }

    /**
     * Gets the extensionAttribute10 property value. Extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute10(): ?string {
        $val = $this->getBackingStore()->get('extensionAttribute10');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensionAttribute10'");
    }

    /**
     * Gets the extensionAttribute11 property value. Extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute11(): ?string {
        $val = $this->getBackingStore()->get('extensionAttribute11');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensionAttribute11'");
    }

    /**
     * Gets the extensionAttribute12 property value. Extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute12(): ?string {
        $val = $this->getBackingStore()->get('extensionAttribute12');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensionAttribute12'");
    }

    /**
     * Gets the extensionAttribute13 property value. Extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute13(): ?string {
        $val = $this->getBackingStore()->get('extensionAttribute13');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensionAttribute13'");
    }

    /**
     * Gets the extensionAttribute14 property value. Extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute14(): ?string {
        $val = $this->getBackingStore()->get('extensionAttribute14');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensionAttribute14'");
    }

    /**
     * Gets the extensionAttribute15 property value. Extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute15(): ?string {
        $val = $this->getBackingStore()->get('extensionAttribute15');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensionAttribute15'");
    }

    /**
     * Gets the extensionAttribute2 property value. Extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute2(): ?string {
        $val = $this->getBackingStore()->get('extensionAttribute2');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensionAttribute2'");
    }

    /**
     * Gets the extensionAttribute3 property value. Extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute3(): ?string {
        $val = $this->getBackingStore()->get('extensionAttribute3');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensionAttribute3'");
    }

    /**
     * Gets the extensionAttribute4 property value. Extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute4(): ?string {
        $val = $this->getBackingStore()->get('extensionAttribute4');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensionAttribute4'");
    }

    /**
     * Gets the extensionAttribute5 property value. Extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute5(): ?string {
        $val = $this->getBackingStore()->get('extensionAttribute5');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensionAttribute5'");
    }

    /**
     * Gets the extensionAttribute6 property value. Extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute6(): ?string {
        $val = $this->getBackingStore()->get('extensionAttribute6');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensionAttribute6'");
    }

    /**
     * Gets the extensionAttribute7 property value. Extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute7(): ?string {
        $val = $this->getBackingStore()->get('extensionAttribute7');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensionAttribute7'");
    }

    /**
     * Gets the extensionAttribute8 property value. Extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute8(): ?string {
        $val = $this->getBackingStore()->get('extensionAttribute8');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensionAttribute8'");
    }

    /**
     * Gets the extensionAttribute9 property value. Extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute9(): ?string {
        $val = $this->getBackingStore()->get('extensionAttribute9');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensionAttribute9'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'enrollmentProfileName' => fn(ParseNode $n) => $o->setEnrollmentProfileName($n->getStringValue()),
            'extensionAttribute1' => fn(ParseNode $n) => $o->setExtensionAttribute1($n->getStringValue()),
            'extensionAttribute10' => fn(ParseNode $n) => $o->setExtensionAttribute10($n->getStringValue()),
            'extensionAttribute11' => fn(ParseNode $n) => $o->setExtensionAttribute11($n->getStringValue()),
            'extensionAttribute12' => fn(ParseNode $n) => $o->setExtensionAttribute12($n->getStringValue()),
            'extensionAttribute13' => fn(ParseNode $n) => $o->setExtensionAttribute13($n->getStringValue()),
            'extensionAttribute14' => fn(ParseNode $n) => $o->setExtensionAttribute14($n->getStringValue()),
            'extensionAttribute15' => fn(ParseNode $n) => $o->setExtensionAttribute15($n->getStringValue()),
            'extensionAttribute2' => fn(ParseNode $n) => $o->setExtensionAttribute2($n->getStringValue()),
            'extensionAttribute3' => fn(ParseNode $n) => $o->setExtensionAttribute3($n->getStringValue()),
            'extensionAttribute4' => fn(ParseNode $n) => $o->setExtensionAttribute4($n->getStringValue()),
            'extensionAttribute5' => fn(ParseNode $n) => $o->setExtensionAttribute5($n->getStringValue()),
            'extensionAttribute6' => fn(ParseNode $n) => $o->setExtensionAttribute6($n->getStringValue()),
            'extensionAttribute7' => fn(ParseNode $n) => $o->setExtensionAttribute7($n->getStringValue()),
            'extensionAttribute8' => fn(ParseNode $n) => $o->setExtensionAttribute8($n->getStringValue()),
            'extensionAttribute9' => fn(ParseNode $n) => $o->setExtensionAttribute9($n->getStringValue()),
            'isCompliant' => fn(ParseNode $n) => $o->setIsCompliant($n->getBooleanValue()),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'mdmAppId' => fn(ParseNode $n) => $o->setMdmAppId($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'operatingSystem' => fn(ParseNode $n) => $o->setOperatingSystem($n->getStringValue()),
            'operatingSystemVersion' => fn(ParseNode $n) => $o->setOperatingSystemVersion($n->getStringValue()),
            'ownership' => fn(ParseNode $n) => $o->setOwnership($n->getStringValue()),
            'physicalIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPhysicalIds($val);
            },
            'profileType' => fn(ParseNode $n) => $o->setProfileType($n->getStringValue()),
            'systemLabels' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSystemLabels($val);
            },
            'trustType' => fn(ParseNode $n) => $o->setTrustType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isCompliant property value. Indicates the device compliance status with Mobile Management Device (MDM) policies. Default is false.
     * @return bool|null
    */
    public function getIsCompliant(): ?bool {
        $val = $this->getBackingStore()->get('isCompliant');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCompliant'");
    }

    /**
     * Gets the manufacturer property value. Manufacturer of the device.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        $val = $this->getBackingStore()->get('manufacturer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'manufacturer'");
    }

    /**
     * Gets the mdmAppId property value. Application identifier used to register device into MDM.
     * @return string|null
    */
    public function getMdmAppId(): ?string {
        $val = $this->getBackingStore()->get('mdmAppId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mdmAppId'");
    }

    /**
     * Gets the model property value. Model of the device.
     * @return string|null
    */
    public function getModel(): ?string {
        $val = $this->getBackingStore()->get('model');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'model'");
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
     * Gets the operatingSystem property value. The type of operating system on the device.
     * @return string|null
    */
    public function getOperatingSystem(): ?string {
        $val = $this->getBackingStore()->get('operatingSystem');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operatingSystem'");
    }

    /**
     * Gets the operatingSystemVersion property value. The version of the operating system on the device.
     * @return string|null
    */
    public function getOperatingSystemVersion(): ?string {
        $val = $this->getBackingStore()->get('operatingSystemVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operatingSystemVersion'");
    }

    /**
     * Gets the ownership property value. Ownership of the device. This property is set by Intune.
     * @return string|null
    */
    public function getOwnership(): ?string {
        $val = $this->getBackingStore()->get('ownership');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ownership'");
    }

    /**
     * Gets the physicalIds property value. A collection of physical identifiers for the device.
     * @return array<string>|null
    */
    public function getPhysicalIds(): ?array {
        $val = $this->getBackingStore()->get('physicalIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'physicalIds'");
    }

    /**
     * Gets the profileType property value. The profile type of the device.
     * @return string|null
    */
    public function getProfileType(): ?string {
        $val = $this->getBackingStore()->get('profileType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'profileType'");
    }

    /**
     * Gets the systemLabels property value. List of labels applied to the device by the system.
     * @return array<string>|null
    */
    public function getSystemLabels(): ?array {
        $val = $this->getBackingStore()->get('systemLabels');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'systemLabels'");
    }

    /**
     * Gets the trustType property value. Type of trust for the joined device.
     * @return string|null
    */
    public function getTrustType(): ?string {
        $val = $this->getBackingStore()->get('trustType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trustType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('enrollmentProfileName', $this->getEnrollmentProfileName());
        $writer->writeStringValue('extensionAttribute1', $this->getExtensionAttribute1());
        $writer->writeStringValue('extensionAttribute10', $this->getExtensionAttribute10());
        $writer->writeStringValue('extensionAttribute11', $this->getExtensionAttribute11());
        $writer->writeStringValue('extensionAttribute12', $this->getExtensionAttribute12());
        $writer->writeStringValue('extensionAttribute13', $this->getExtensionAttribute13());
        $writer->writeStringValue('extensionAttribute14', $this->getExtensionAttribute14());
        $writer->writeStringValue('extensionAttribute15', $this->getExtensionAttribute15());
        $writer->writeStringValue('extensionAttribute2', $this->getExtensionAttribute2());
        $writer->writeStringValue('extensionAttribute3', $this->getExtensionAttribute3());
        $writer->writeStringValue('extensionAttribute4', $this->getExtensionAttribute4());
        $writer->writeStringValue('extensionAttribute5', $this->getExtensionAttribute5());
        $writer->writeStringValue('extensionAttribute6', $this->getExtensionAttribute6());
        $writer->writeStringValue('extensionAttribute7', $this->getExtensionAttribute7());
        $writer->writeStringValue('extensionAttribute8', $this->getExtensionAttribute8());
        $writer->writeStringValue('extensionAttribute9', $this->getExtensionAttribute9());
        $writer->writeBooleanValue('isCompliant', $this->getIsCompliant());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeStringValue('mdmAppId', $this->getMdmAppId());
        $writer->writeStringValue('model', $this->getModel());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('operatingSystem', $this->getOperatingSystem());
        $writer->writeStringValue('operatingSystemVersion', $this->getOperatingSystemVersion());
        $writer->writeStringValue('ownership', $this->getOwnership());
        $writer->writeCollectionOfPrimitiveValues('physicalIds', $this->getPhysicalIds());
        $writer->writeStringValue('profileType', $this->getProfileType());
        $writer->writeCollectionOfPrimitiveValues('systemLabels', $this->getSystemLabels());
        $writer->writeStringValue('trustType', $this->getTrustType());
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
     * Sets the deviceId property value. Unique identifier set by Azure Device Registration Service at the time of registration.
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the displayName property value. The display name for the device.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the enrollmentProfileName property value. Enrollment profile applied to the device.
     * @param string|null $value Value to set for the enrollmentProfileName property.
    */
    public function setEnrollmentProfileName(?string $value): void {
        $this->getBackingStore()->set('enrollmentProfileName', $value);
    }

    /**
     * Sets the extensionAttribute1 property value. Extension attribute.
     * @param string|null $value Value to set for the extensionAttribute1 property.
    */
    public function setExtensionAttribute1(?string $value): void {
        $this->getBackingStore()->set('extensionAttribute1', $value);
    }

    /**
     * Sets the extensionAttribute10 property value. Extension attribute.
     * @param string|null $value Value to set for the extensionAttribute10 property.
    */
    public function setExtensionAttribute10(?string $value): void {
        $this->getBackingStore()->set('extensionAttribute10', $value);
    }

    /**
     * Sets the extensionAttribute11 property value. Extension attribute.
     * @param string|null $value Value to set for the extensionAttribute11 property.
    */
    public function setExtensionAttribute11(?string $value): void {
        $this->getBackingStore()->set('extensionAttribute11', $value);
    }

    /**
     * Sets the extensionAttribute12 property value. Extension attribute.
     * @param string|null $value Value to set for the extensionAttribute12 property.
    */
    public function setExtensionAttribute12(?string $value): void {
        $this->getBackingStore()->set('extensionAttribute12', $value);
    }

    /**
     * Sets the extensionAttribute13 property value. Extension attribute.
     * @param string|null $value Value to set for the extensionAttribute13 property.
    */
    public function setExtensionAttribute13(?string $value): void {
        $this->getBackingStore()->set('extensionAttribute13', $value);
    }

    /**
     * Sets the extensionAttribute14 property value. Extension attribute.
     * @param string|null $value Value to set for the extensionAttribute14 property.
    */
    public function setExtensionAttribute14(?string $value): void {
        $this->getBackingStore()->set('extensionAttribute14', $value);
    }

    /**
     * Sets the extensionAttribute15 property value. Extension attribute.
     * @param string|null $value Value to set for the extensionAttribute15 property.
    */
    public function setExtensionAttribute15(?string $value): void {
        $this->getBackingStore()->set('extensionAttribute15', $value);
    }

    /**
     * Sets the extensionAttribute2 property value. Extension attribute.
     * @param string|null $value Value to set for the extensionAttribute2 property.
    */
    public function setExtensionAttribute2(?string $value): void {
        $this->getBackingStore()->set('extensionAttribute2', $value);
    }

    /**
     * Sets the extensionAttribute3 property value. Extension attribute.
     * @param string|null $value Value to set for the extensionAttribute3 property.
    */
    public function setExtensionAttribute3(?string $value): void {
        $this->getBackingStore()->set('extensionAttribute3', $value);
    }

    /**
     * Sets the extensionAttribute4 property value. Extension attribute.
     * @param string|null $value Value to set for the extensionAttribute4 property.
    */
    public function setExtensionAttribute4(?string $value): void {
        $this->getBackingStore()->set('extensionAttribute4', $value);
    }

    /**
     * Sets the extensionAttribute5 property value. Extension attribute.
     * @param string|null $value Value to set for the extensionAttribute5 property.
    */
    public function setExtensionAttribute5(?string $value): void {
        $this->getBackingStore()->set('extensionAttribute5', $value);
    }

    /**
     * Sets the extensionAttribute6 property value. Extension attribute.
     * @param string|null $value Value to set for the extensionAttribute6 property.
    */
    public function setExtensionAttribute6(?string $value): void {
        $this->getBackingStore()->set('extensionAttribute6', $value);
    }

    /**
     * Sets the extensionAttribute7 property value. Extension attribute.
     * @param string|null $value Value to set for the extensionAttribute7 property.
    */
    public function setExtensionAttribute7(?string $value): void {
        $this->getBackingStore()->set('extensionAttribute7', $value);
    }

    /**
     * Sets the extensionAttribute8 property value. Extension attribute.
     * @param string|null $value Value to set for the extensionAttribute8 property.
    */
    public function setExtensionAttribute8(?string $value): void {
        $this->getBackingStore()->set('extensionAttribute8', $value);
    }

    /**
     * Sets the extensionAttribute9 property value. Extension attribute.
     * @param string|null $value Value to set for the extensionAttribute9 property.
    */
    public function setExtensionAttribute9(?string $value): void {
        $this->getBackingStore()->set('extensionAttribute9', $value);
    }

    /**
     * Sets the isCompliant property value. Indicates the device compliance status with Mobile Management Device (MDM) policies. Default is false.
     * @param bool|null $value Value to set for the isCompliant property.
    */
    public function setIsCompliant(?bool $value): void {
        $this->getBackingStore()->set('isCompliant', $value);
    }

    /**
     * Sets the manufacturer property value. Manufacturer of the device.
     * @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the mdmAppId property value. Application identifier used to register device into MDM.
     * @param string|null $value Value to set for the mdmAppId property.
    */
    public function setMdmAppId(?string $value): void {
        $this->getBackingStore()->set('mdmAppId', $value);
    }

    /**
     * Sets the model property value. Model of the device.
     * @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value): void {
        $this->getBackingStore()->set('model', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the operatingSystem property value. The type of operating system on the device.
     * @param string|null $value Value to set for the operatingSystem property.
    */
    public function setOperatingSystem(?string $value): void {
        $this->getBackingStore()->set('operatingSystem', $value);
    }

    /**
     * Sets the operatingSystemVersion property value. The version of the operating system on the device.
     * @param string|null $value Value to set for the operatingSystemVersion property.
    */
    public function setOperatingSystemVersion(?string $value): void {
        $this->getBackingStore()->set('operatingSystemVersion', $value);
    }

    /**
     * Sets the ownership property value. Ownership of the device. This property is set by Intune.
     * @param string|null $value Value to set for the ownership property.
    */
    public function setOwnership(?string $value): void {
        $this->getBackingStore()->set('ownership', $value);
    }

    /**
     * Sets the physicalIds property value. A collection of physical identifiers for the device.
     * @param array<string>|null $value Value to set for the physicalIds property.
    */
    public function setPhysicalIds(?array $value): void {
        $this->getBackingStore()->set('physicalIds', $value);
    }

    /**
     * Sets the profileType property value. The profile type of the device.
     * @param string|null $value Value to set for the profileType property.
    */
    public function setProfileType(?string $value): void {
        $this->getBackingStore()->set('profileType', $value);
    }

    /**
     * Sets the systemLabels property value. List of labels applied to the device by the system.
     * @param array<string>|null $value Value to set for the systemLabels property.
    */
    public function setSystemLabels(?array $value): void {
        $this->getBackingStore()->set('systemLabels', $value);
    }

    /**
     * Sets the trustType property value. Type of trust for the joined device.
     * @param string|null $value Value to set for the trustType property.
    */
    public function setTrustType(?string $value): void {
        $this->getBackingStore()->set('trustType', $value);
    }

}
