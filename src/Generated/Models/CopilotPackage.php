<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Psr\Http\Message\StreamInterface;

class CopilotPackage extends Entity implements Parsable 
{
    /**
     * Instantiates a new CopilotPackage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopilotPackage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CopilotPackage {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.copilotPackageDetail': return new CopilotPackageDetail();
            }
        }
        return new CopilotPackage();
    }

    /**
     * Gets the appId property value. The appId property
     * @return string|null
    */
    public function getAppId(): ?string {
        $val = $this->getBackingStore()->get('appId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appId'");
    }

    /**
     * Gets the assetId property value. The assetId property
     * @return string|null
    */
    public function getAssetId(): ?string {
        $val = $this->getBackingStore()->get('assetId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assetId'");
    }

    /**
     * Gets the availableTo property value. The availableTo property
     * @return PackageStatus|null
    */
    public function getAvailableTo(): ?PackageStatus {
        $val = $this->getBackingStore()->get('availableTo');
        if (is_null($val) || $val instanceof PackageStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'availableTo'");
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the deployedTo property value. The deployedTo property
     * @return PackageStatus|null
    */
    public function getDeployedTo(): ?PackageStatus {
        $val = $this->getBackingStore()->get('deployedTo');
        if (is_null($val) || $val instanceof PackageStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deployedTo'");
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
     * Gets the elementTypes property value. The elementTypes property
     * @return array<string>|null
    */
    public function getElementTypes(): ?array {
        $val = $this->getBackingStore()->get('elementTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'elementTypes'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            'assetId' => fn(ParseNode $n) => $o->setAssetId($n->getStringValue()),
            'availableTo' => fn(ParseNode $n) => $o->setAvailableTo($n->getEnumValue(PackageStatus::class)),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'deployedTo' => fn(ParseNode $n) => $o->setDeployedTo($n->getEnumValue(PackageStatus::class)),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'elementTypes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setElementTypes($val);
            },
            'isBlocked' => fn(ParseNode $n) => $o->setIsBlocked($n->getBooleanValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'manifestId' => fn(ParseNode $n) => $o->setManifestId($n->getStringValue()),
            'manifestVersion' => fn(ParseNode $n) => $o->setManifestVersion($n->getStringValue()),
            'ownerId' => fn(ParseNode $n) => $o->setOwnerId($n->getStringValue()),
            'platform' => fn(ParseNode $n) => $o->setPlatform($n->getStringValue()),
            'publisher' => fn(ParseNode $n) => $o->setPublisher($n->getStringValue()),
            'shortDescription' => fn(ParseNode $n) => $o->setShortDescription($n->getStringValue()),
            'supportedHosts' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSupportedHosts($val);
            },
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(PackageType::class)),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
            'zipFile' => fn(ParseNode $n) => $o->setZipFile($n->getBinaryContent()),
        ]);
    }

    /**
     * Gets the isBlocked property value. The isBlocked property
     * @return bool|null
    */
    public function getIsBlocked(): ?bool {
        $val = $this->getBackingStore()->get('isBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isBlocked'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the manifestId property value. The manifestId property
     * @return string|null
    */
    public function getManifestId(): ?string {
        $val = $this->getBackingStore()->get('manifestId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'manifestId'");
    }

    /**
     * Gets the manifestVersion property value. The manifestVersion property
     * @return string|null
    */
    public function getManifestVersion(): ?string {
        $val = $this->getBackingStore()->get('manifestVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'manifestVersion'");
    }

    /**
     * Gets the ownerId property value. The ownerId property
     * @return string|null
    */
    public function getOwnerId(): ?string {
        $val = $this->getBackingStore()->get('ownerId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ownerId'");
    }

    /**
     * Gets the platform property value. The platform property
     * @return string|null
    */
    public function getPlatform(): ?string {
        $val = $this->getBackingStore()->get('platform');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'platform'");
    }

    /**
     * Gets the publisher property value. The publisher property
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
     * Gets the shortDescription property value. The shortDescription property
     * @return string|null
    */
    public function getShortDescription(): ?string {
        $val = $this->getBackingStore()->get('shortDescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'shortDescription'");
    }

    /**
     * Gets the supportedHosts property value. The supportedHosts property
     * @return array<string>|null
    */
    public function getSupportedHosts(): ?array {
        $val = $this->getBackingStore()->get('supportedHosts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportedHosts'");
    }

    /**
     * Gets the type property value. The type property
     * @return PackageType|null
    */
    public function getType(): ?PackageType {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || $val instanceof PackageType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Gets the version property value. The version property
     * @return string|null
    */
    public function getVersion(): ?string {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Gets the zipFile property value. The zipFile property
     * @return StreamInterface|null
    */
    public function getZipFile(): ?StreamInterface {
        $val = $this->getBackingStore()->get('zipFile');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'zipFile'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appId', $this->getAppId());
        $writer->writeStringValue('assetId', $this->getAssetId());
        $writer->writeEnumValue('availableTo', $this->getAvailableTo());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeEnumValue('deployedTo', $this->getDeployedTo());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfPrimitiveValues('elementTypes', $this->getElementTypes());
        $writer->writeBooleanValue('isBlocked', $this->getIsBlocked());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('manifestId', $this->getManifestId());
        $writer->writeStringValue('manifestVersion', $this->getManifestVersion());
        $writer->writeStringValue('ownerId', $this->getOwnerId());
        $writer->writeStringValue('platform', $this->getPlatform());
        $writer->writeStringValue('publisher', $this->getPublisher());
        $writer->writeStringValue('shortDescription', $this->getShortDescription());
        $writer->writeCollectionOfPrimitiveValues('supportedHosts', $this->getSupportedHosts());
        $writer->writeEnumValue('type', $this->getType());
        $writer->writeStringValue('version', $this->getVersion());
        $writer->writeBinaryContent('zipFile', $this->getZipFile());
    }

    /**
     * Sets the appId property value. The appId property
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the assetId property value. The assetId property
     * @param string|null $value Value to set for the assetId property.
    */
    public function setAssetId(?string $value): void {
        $this->getBackingStore()->set('assetId', $value);
    }

    /**
     * Sets the availableTo property value. The availableTo property
     * @param PackageStatus|null $value Value to set for the availableTo property.
    */
    public function setAvailableTo(?PackageStatus $value): void {
        $this->getBackingStore()->set('availableTo', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the deployedTo property value. The deployedTo property
     * @param PackageStatus|null $value Value to set for the deployedTo property.
    */
    public function setDeployedTo(?PackageStatus $value): void {
        $this->getBackingStore()->set('deployedTo', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the elementTypes property value. The elementTypes property
     * @param array<string>|null $value Value to set for the elementTypes property.
    */
    public function setElementTypes(?array $value): void {
        $this->getBackingStore()->set('elementTypes', $value);
    }

    /**
     * Sets the isBlocked property value. The isBlocked property
     * @param bool|null $value Value to set for the isBlocked property.
    */
    public function setIsBlocked(?bool $value): void {
        $this->getBackingStore()->set('isBlocked', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the manifestId property value. The manifestId property
     * @param string|null $value Value to set for the manifestId property.
    */
    public function setManifestId(?string $value): void {
        $this->getBackingStore()->set('manifestId', $value);
    }

    /**
     * Sets the manifestVersion property value. The manifestVersion property
     * @param string|null $value Value to set for the manifestVersion property.
    */
    public function setManifestVersion(?string $value): void {
        $this->getBackingStore()->set('manifestVersion', $value);
    }

    /**
     * Sets the ownerId property value. The ownerId property
     * @param string|null $value Value to set for the ownerId property.
    */
    public function setOwnerId(?string $value): void {
        $this->getBackingStore()->set('ownerId', $value);
    }

    /**
     * Sets the platform property value. The platform property
     * @param string|null $value Value to set for the platform property.
    */
    public function setPlatform(?string $value): void {
        $this->getBackingStore()->set('platform', $value);
    }

    /**
     * Sets the publisher property value. The publisher property
     * @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value): void {
        $this->getBackingStore()->set('publisher', $value);
    }

    /**
     * Sets the shortDescription property value. The shortDescription property
     * @param string|null $value Value to set for the shortDescription property.
    */
    public function setShortDescription(?string $value): void {
        $this->getBackingStore()->set('shortDescription', $value);
    }

    /**
     * Sets the supportedHosts property value. The supportedHosts property
     * @param array<string>|null $value Value to set for the supportedHosts property.
    */
    public function setSupportedHosts(?array $value): void {
        $this->getBackingStore()->set('supportedHosts', $value);
    }

    /**
     * Sets the type property value. The type property
     * @param PackageType|null $value Value to set for the type property.
    */
    public function setType(?PackageType $value): void {
        $this->getBackingStore()->set('type', $value);
    }

    /**
     * Sets the version property value. The version property
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

    /**
     * Sets the zipFile property value. The zipFile property
     * @param StreamInterface|null $value Value to set for the zipFile property.
    */
    public function setZipFile(?StreamInterface $value): void {
        $this->getBackingStore()->set('zipFile', $value);
    }

}
