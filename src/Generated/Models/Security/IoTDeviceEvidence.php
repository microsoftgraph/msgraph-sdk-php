<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class IoTDeviceEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new IoTDeviceEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.ioTDeviceEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IoTDeviceEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IoTDeviceEvidence {
        return new IoTDeviceEvidence();
    }

    /**
     * Gets the deviceId property value. The deviceId property
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
     * Gets the deviceName property value. The deviceName property
     * @return string|null
    */
    public function getDeviceName(): ?string {
        $val = $this->getBackingStore()->get('deviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceName'");
    }

    /**
     * Gets the devicePageLink property value. The devicePageLink property
     * @return string|null
    */
    public function getDevicePageLink(): ?string {
        $val = $this->getBackingStore()->get('devicePageLink');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'devicePageLink'");
    }

    /**
     * Gets the deviceSubType property value. The deviceSubType property
     * @return string|null
    */
    public function getDeviceSubType(): ?string {
        $val = $this->getBackingStore()->get('deviceSubType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceSubType'");
    }

    /**
     * Gets the deviceType property value. The deviceType property
     * @return string|null
    */
    public function getDeviceType(): ?string {
        $val = $this->getBackingStore()->get('deviceType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'devicePageLink' => fn(ParseNode $n) => $o->setDevicePageLink($n->getStringValue()),
            'deviceSubType' => fn(ParseNode $n) => $o->setDeviceSubType($n->getStringValue()),
            'deviceType' => fn(ParseNode $n) => $o->setDeviceType($n->getStringValue()),
            'importance' => fn(ParseNode $n) => $o->setImportance($n->getEnumValue(IoTDeviceImportanceType::class)),
            'ioTHub' => fn(ParseNode $n) => $o->setIoTHub($n->getObjectValue([AzureResourceEvidence::class, 'createFromDiscriminatorValue'])),
            'ioTSecurityAgentId' => fn(ParseNode $n) => $o->setIoTSecurityAgentId($n->getStringValue()),
            'ipAddress' => fn(ParseNode $n) => $o->setIpAddress($n->getObjectValue([IpEvidence::class, 'createFromDiscriminatorValue'])),
            'isAuthorized' => fn(ParseNode $n) => $o->setIsAuthorized($n->getBooleanValue()),
            'isProgramming' => fn(ParseNode $n) => $o->setIsProgramming($n->getBooleanValue()),
            'isScanner' => fn(ParseNode $n) => $o->setIsScanner($n->getBooleanValue()),
            'macAddress' => fn(ParseNode $n) => $o->setMacAddress($n->getStringValue()),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            'nics' => fn(ParseNode $n) => $o->setNics($n->getCollectionOfObjectValues([NicEvidence::class, 'createFromDiscriminatorValue'])),
            'operatingSystem' => fn(ParseNode $n) => $o->setOperatingSystem($n->getStringValue()),
            'owners' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setOwners($val);
            },
            'protocols' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setProtocols($val);
            },
            'purdueLayer' => fn(ParseNode $n) => $o->setPurdueLayer($n->getStringValue()),
            'sensor' => fn(ParseNode $n) => $o->setSensor($n->getStringValue()),
            'serialNumber' => fn(ParseNode $n) => $o->setSerialNumber($n->getStringValue()),
            'site' => fn(ParseNode $n) => $o->setSite($n->getStringValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getStringValue()),
            'sourceRef' => fn(ParseNode $n) => $o->setSourceRef($n->getObjectValue([UrlEvidence::class, 'createFromDiscriminatorValue'])),
            'zone' => fn(ParseNode $n) => $o->setZone($n->getStringValue()),
        ]);
    }

    /**
     * Gets the importance property value. The importance property
     * @return IoTDeviceImportanceType|null
    */
    public function getImportance(): ?IoTDeviceImportanceType {
        $val = $this->getBackingStore()->get('importance');
        if (is_null($val) || $val instanceof IoTDeviceImportanceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'importance'");
    }

    /**
     * Gets the ioTHub property value. The ioTHub property
     * @return AzureResourceEvidence|null
    */
    public function getIoTHub(): ?AzureResourceEvidence {
        $val = $this->getBackingStore()->get('ioTHub');
        if (is_null($val) || $val instanceof AzureResourceEvidence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ioTHub'");
    }

    /**
     * Gets the ioTSecurityAgentId property value. The ioTSecurityAgentId property
     * @return string|null
    */
    public function getIoTSecurityAgentId(): ?string {
        $val = $this->getBackingStore()->get('ioTSecurityAgentId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ioTSecurityAgentId'");
    }

    /**
     * Gets the ipAddress property value. The ipAddress property
     * @return IpEvidence|null
    */
    public function getIpAddress(): ?IpEvidence {
        $val = $this->getBackingStore()->get('ipAddress');
        if (is_null($val) || $val instanceof IpEvidence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipAddress'");
    }

    /**
     * Gets the isAuthorized property value. The isAuthorized property
     * @return bool|null
    */
    public function getIsAuthorized(): ?bool {
        $val = $this->getBackingStore()->get('isAuthorized');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAuthorized'");
    }

    /**
     * Gets the isProgramming property value. The isProgramming property
     * @return bool|null
    */
    public function getIsProgramming(): ?bool {
        $val = $this->getBackingStore()->get('isProgramming');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isProgramming'");
    }

    /**
     * Gets the isScanner property value. The isScanner property
     * @return bool|null
    */
    public function getIsScanner(): ?bool {
        $val = $this->getBackingStore()->get('isScanner');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isScanner'");
    }

    /**
     * Gets the macAddress property value. The macAddress property
     * @return string|null
    */
    public function getMacAddress(): ?string {
        $val = $this->getBackingStore()->get('macAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'macAddress'");
    }

    /**
     * Gets the manufacturer property value. The manufacturer property
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
     * Gets the model property value. The model property
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
     * Gets the nics property value. The nics property
     * @return array<NicEvidence>|null
    */
    public function getNics(): ?array {
        $val = $this->getBackingStore()->get('nics');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, NicEvidence::class);
            /** @var array<NicEvidence>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nics'");
    }

    /**
     * Gets the operatingSystem property value. The operatingSystem property
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
     * Gets the owners property value. The owners property
     * @return array<string>|null
    */
    public function getOwners(): ?array {
        $val = $this->getBackingStore()->get('owners');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'owners'");
    }

    /**
     * Gets the protocols property value. The protocols property
     * @return array<string>|null
    */
    public function getProtocols(): ?array {
        $val = $this->getBackingStore()->get('protocols');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protocols'");
    }

    /**
     * Gets the purdueLayer property value. The purdueLayer property
     * @return string|null
    */
    public function getPurdueLayer(): ?string {
        $val = $this->getBackingStore()->get('purdueLayer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'purdueLayer'");
    }

    /**
     * Gets the sensor property value. The sensor property
     * @return string|null
    */
    public function getSensor(): ?string {
        $val = $this->getBackingStore()->get('sensor');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensor'");
    }

    /**
     * Gets the serialNumber property value. The serialNumber property
     * @return string|null
    */
    public function getSerialNumber(): ?string {
        $val = $this->getBackingStore()->get('serialNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serialNumber'");
    }

    /**
     * Gets the site property value. The site property
     * @return string|null
    */
    public function getSite(): ?string {
        $val = $this->getBackingStore()->get('site');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'site'");
    }

    /**
     * Gets the source property value. The source property
     * @return string|null
    */
    public function getSource(): ?string {
        $val = $this->getBackingStore()->get('source');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'source'");
    }

    /**
     * Gets the sourceRef property value. The sourceRef property
     * @return UrlEvidence|null
    */
    public function getSourceRef(): ?UrlEvidence {
        $val = $this->getBackingStore()->get('sourceRef');
        if (is_null($val) || $val instanceof UrlEvidence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceRef'");
    }

    /**
     * Gets the zone property value. The zone property
     * @return string|null
    */
    public function getZone(): ?string {
        $val = $this->getBackingStore()->get('zone');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'zone'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeStringValue('devicePageLink', $this->getDevicePageLink());
        $writer->writeStringValue('deviceSubType', $this->getDeviceSubType());
        $writer->writeStringValue('deviceType', $this->getDeviceType());
        $writer->writeEnumValue('importance', $this->getImportance());
        $writer->writeObjectValue('ioTHub', $this->getIoTHub());
        $writer->writeStringValue('ioTSecurityAgentId', $this->getIoTSecurityAgentId());
        $writer->writeObjectValue('ipAddress', $this->getIpAddress());
        $writer->writeBooleanValue('isAuthorized', $this->getIsAuthorized());
        $writer->writeBooleanValue('isProgramming', $this->getIsProgramming());
        $writer->writeBooleanValue('isScanner', $this->getIsScanner());
        $writer->writeStringValue('macAddress', $this->getMacAddress());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeStringValue('model', $this->getModel());
        $writer->writeCollectionOfObjectValues('nics', $this->getNics());
        $writer->writeStringValue('operatingSystem', $this->getOperatingSystem());
        $writer->writeCollectionOfPrimitiveValues('owners', $this->getOwners());
        $writer->writeCollectionOfPrimitiveValues('protocols', $this->getProtocols());
        $writer->writeStringValue('purdueLayer', $this->getPurdueLayer());
        $writer->writeStringValue('sensor', $this->getSensor());
        $writer->writeStringValue('serialNumber', $this->getSerialNumber());
        $writer->writeStringValue('site', $this->getSite());
        $writer->writeStringValue('source', $this->getSource());
        $writer->writeObjectValue('sourceRef', $this->getSourceRef());
        $writer->writeStringValue('zone', $this->getZone());
    }

    /**
     * Sets the deviceId property value. The deviceId property
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the deviceName property value. The deviceName property
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the devicePageLink property value. The devicePageLink property
     * @param string|null $value Value to set for the devicePageLink property.
    */
    public function setDevicePageLink(?string $value): void {
        $this->getBackingStore()->set('devicePageLink', $value);
    }

    /**
     * Sets the deviceSubType property value. The deviceSubType property
     * @param string|null $value Value to set for the deviceSubType property.
    */
    public function setDeviceSubType(?string $value): void {
        $this->getBackingStore()->set('deviceSubType', $value);
    }

    /**
     * Sets the deviceType property value. The deviceType property
     * @param string|null $value Value to set for the deviceType property.
    */
    public function setDeviceType(?string $value): void {
        $this->getBackingStore()->set('deviceType', $value);
    }

    /**
     * Sets the importance property value. The importance property
     * @param IoTDeviceImportanceType|null $value Value to set for the importance property.
    */
    public function setImportance(?IoTDeviceImportanceType $value): void {
        $this->getBackingStore()->set('importance', $value);
    }

    /**
     * Sets the ioTHub property value. The ioTHub property
     * @param AzureResourceEvidence|null $value Value to set for the ioTHub property.
    */
    public function setIoTHub(?AzureResourceEvidence $value): void {
        $this->getBackingStore()->set('ioTHub', $value);
    }

    /**
     * Sets the ioTSecurityAgentId property value. The ioTSecurityAgentId property
     * @param string|null $value Value to set for the ioTSecurityAgentId property.
    */
    public function setIoTSecurityAgentId(?string $value): void {
        $this->getBackingStore()->set('ioTSecurityAgentId', $value);
    }

    /**
     * Sets the ipAddress property value. The ipAddress property
     * @param IpEvidence|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?IpEvidence $value): void {
        $this->getBackingStore()->set('ipAddress', $value);
    }

    /**
     * Sets the isAuthorized property value. The isAuthorized property
     * @param bool|null $value Value to set for the isAuthorized property.
    */
    public function setIsAuthorized(?bool $value): void {
        $this->getBackingStore()->set('isAuthorized', $value);
    }

    /**
     * Sets the isProgramming property value. The isProgramming property
     * @param bool|null $value Value to set for the isProgramming property.
    */
    public function setIsProgramming(?bool $value): void {
        $this->getBackingStore()->set('isProgramming', $value);
    }

    /**
     * Sets the isScanner property value. The isScanner property
     * @param bool|null $value Value to set for the isScanner property.
    */
    public function setIsScanner(?bool $value): void {
        $this->getBackingStore()->set('isScanner', $value);
    }

    /**
     * Sets the macAddress property value. The macAddress property
     * @param string|null $value Value to set for the macAddress property.
    */
    public function setMacAddress(?string $value): void {
        $this->getBackingStore()->set('macAddress', $value);
    }

    /**
     * Sets the manufacturer property value. The manufacturer property
     * @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the model property value. The model property
     * @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value): void {
        $this->getBackingStore()->set('model', $value);
    }

    /**
     * Sets the nics property value. The nics property
     * @param array<NicEvidence>|null $value Value to set for the nics property.
    */
    public function setNics(?array $value): void {
        $this->getBackingStore()->set('nics', $value);
    }

    /**
     * Sets the operatingSystem property value. The operatingSystem property
     * @param string|null $value Value to set for the operatingSystem property.
    */
    public function setOperatingSystem(?string $value): void {
        $this->getBackingStore()->set('operatingSystem', $value);
    }

    /**
     * Sets the owners property value. The owners property
     * @param array<string>|null $value Value to set for the owners property.
    */
    public function setOwners(?array $value): void {
        $this->getBackingStore()->set('owners', $value);
    }

    /**
     * Sets the protocols property value. The protocols property
     * @param array<string>|null $value Value to set for the protocols property.
    */
    public function setProtocols(?array $value): void {
        $this->getBackingStore()->set('protocols', $value);
    }

    /**
     * Sets the purdueLayer property value. The purdueLayer property
     * @param string|null $value Value to set for the purdueLayer property.
    */
    public function setPurdueLayer(?string $value): void {
        $this->getBackingStore()->set('purdueLayer', $value);
    }

    /**
     * Sets the sensor property value. The sensor property
     * @param string|null $value Value to set for the sensor property.
    */
    public function setSensor(?string $value): void {
        $this->getBackingStore()->set('sensor', $value);
    }

    /**
     * Sets the serialNumber property value. The serialNumber property
     * @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value): void {
        $this->getBackingStore()->set('serialNumber', $value);
    }

    /**
     * Sets the site property value. The site property
     * @param string|null $value Value to set for the site property.
    */
    public function setSite(?string $value): void {
        $this->getBackingStore()->set('site', $value);
    }

    /**
     * Sets the source property value. The source property
     * @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value): void {
        $this->getBackingStore()->set('source', $value);
    }

    /**
     * Sets the sourceRef property value. The sourceRef property
     * @param UrlEvidence|null $value Value to set for the sourceRef property.
    */
    public function setSourceRef(?UrlEvidence $value): void {
        $this->getBackingStore()->set('sourceRef', $value);
    }

    /**
     * Sets the zone property value. The zone property
     * @param string|null $value Value to set for the zone property.
    */
    public function setZone(?string $value): void {
        $this->getBackingStore()->set('zone', $value);
    }

}
