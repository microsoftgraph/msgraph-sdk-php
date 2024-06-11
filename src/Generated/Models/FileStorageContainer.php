<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class FileStorageContainer extends Entity implements Parsable 
{
    /**
     * Instantiates a new FileStorageContainer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileStorageContainer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileStorageContainer {
        return new FileStorageContainer();
    }

    /**
     * Gets the containerTypeId property value. Container type ID of the fileStorageContainer. For details about container types, see Container Types. Each container must have only one container type. Read-only.
     * @return string|null
    */
    public function getContainerTypeId(): ?string {
        $val = $this->getBackingStore()->get('containerTypeId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'containerTypeId'");
    }

    /**
     * Gets the createdDateTime property value. Date and time of the fileStorageContainer creation. Read-only.
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
     * Gets the customProperties property value. Custom property collection for the fileStorageContainer. Read-write.
     * @return FileStorageContainerCustomPropertyDictionary|null
    */
    public function getCustomProperties(): ?FileStorageContainerCustomPropertyDictionary {
        $val = $this->getBackingStore()->get('customProperties');
        if (is_null($val) || $val instanceof FileStorageContainerCustomPropertyDictionary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customProperties'");
    }

    /**
     * Gets the description property value. Provides a user-visible description of the fileStorageContainer. Read-write.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The display name of the fileStorageContainer. Read-write.
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
     * Gets the drive property value. The drive of the resource fileStorageContainer. Read-only.
     * @return Drive|null
    */
    public function getDrive(): ?Drive {
        $val = $this->getBackingStore()->get('drive');
        if (is_null($val) || $val instanceof Drive) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'drive'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'containerTypeId' => fn(ParseNode $n) => $o->setContainerTypeId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'customProperties' => fn(ParseNode $n) => $o->setCustomProperties($n->getObjectValue([FileStorageContainerCustomPropertyDictionary::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'drive' => fn(ParseNode $n) => $o->setDrive($n->getObjectValue([Drive::class, 'createFromDiscriminatorValue'])),
            'permissions' => fn(ParseNode $n) => $o->setPermissions($n->getCollectionOfObjectValues([Permission::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(FileStorageContainerStatus::class)),
            'viewpoint' => fn(ParseNode $n) => $o->setViewpoint($n->getObjectValue([FileStorageContainerViewpoint::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the permissions property value. The set of permissions for users in the fileStorageContainer. Permission for each user is set by the roles property. The possible values are: reader, writer, manager, and owner. Read-write.
     * @return array<Permission>|null
    */
    public function getPermissions(): ?array {
        $val = $this->getBackingStore()->get('permissions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Permission::class);
            /** @var array<Permission>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissions'");
    }

    /**
     * Gets the status property value. Status of the fileStorageContainer. Containers are created as inactive and require activation. Inactive containers are subjected to automatic deletion in 24 hours. The possible values are: inactive,  active. Read-only.
     * @return FileStorageContainerStatus|null
    */
    public function getStatus(): ?FileStorageContainerStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof FileStorageContainerStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the viewpoint property value. Data specific to the current user. Read-only.
     * @return FileStorageContainerViewpoint|null
    */
    public function getViewpoint(): ?FileStorageContainerViewpoint {
        $val = $this->getBackingStore()->get('viewpoint');
        if (is_null($val) || $val instanceof FileStorageContainerViewpoint) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'viewpoint'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('containerTypeId', $this->getContainerTypeId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('customProperties', $this->getCustomProperties());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('drive', $this->getDrive());
        $writer->writeCollectionOfObjectValues('permissions', $this->getPermissions());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeObjectValue('viewpoint', $this->getViewpoint());
    }

    /**
     * Sets the containerTypeId property value. Container type ID of the fileStorageContainer. For details about container types, see Container Types. Each container must have only one container type. Read-only.
     * @param string|null $value Value to set for the containerTypeId property.
    */
    public function setContainerTypeId(?string $value): void {
        $this->getBackingStore()->set('containerTypeId', $value);
    }

    /**
     * Sets the createdDateTime property value. Date and time of the fileStorageContainer creation. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the customProperties property value. Custom property collection for the fileStorageContainer. Read-write.
     * @param FileStorageContainerCustomPropertyDictionary|null $value Value to set for the customProperties property.
    */
    public function setCustomProperties(?FileStorageContainerCustomPropertyDictionary $value): void {
        $this->getBackingStore()->set('customProperties', $value);
    }

    /**
     * Sets the description property value. Provides a user-visible description of the fileStorageContainer. Read-write.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the fileStorageContainer. Read-write.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the drive property value. The drive of the resource fileStorageContainer. Read-only.
     * @param Drive|null $value Value to set for the drive property.
    */
    public function setDrive(?Drive $value): void {
        $this->getBackingStore()->set('drive', $value);
    }

    /**
     * Sets the permissions property value. The set of permissions for users in the fileStorageContainer. Permission for each user is set by the roles property. The possible values are: reader, writer, manager, and owner. Read-write.
     * @param array<Permission>|null $value Value to set for the permissions property.
    */
    public function setPermissions(?array $value): void {
        $this->getBackingStore()->set('permissions', $value);
    }

    /**
     * Sets the status property value. Status of the fileStorageContainer. Containers are created as inactive and require activation. Inactive containers are subjected to automatic deletion in 24 hours. The possible values are: inactive,  active. Read-only.
     * @param FileStorageContainerStatus|null $value Value to set for the status property.
    */
    public function setStatus(?FileStorageContainerStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the viewpoint property value. Data specific to the current user. Read-only.
     * @param FileStorageContainerViewpoint|null $value Value to set for the viewpoint property.
    */
    public function setViewpoint(?FileStorageContainerViewpoint $value): void {
        $this->getBackingStore()->set('viewpoint', $value);
    }

}
