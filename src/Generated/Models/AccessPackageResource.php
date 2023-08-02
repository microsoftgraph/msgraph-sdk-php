<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AccessPackageResource extends Entity implements Parsable 
{
    /**
     * Instantiates a new accessPackageResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageResource {
        return new AccessPackageResource();
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
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
     * Gets the description property value. A description for the resource.
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
     * Gets the displayName property value. The display name of the resource, such as the application name, group name or site name.
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
     * Gets the environment property value. Contains the environment information for the resource. This can be set using either the @odata.bind annotation or the environment's originId.Supports $expand.
     * @return AccessPackageResourceEnvironment|null
    */
    public function getEnvironment(): ?AccessPackageResourceEnvironment {
        $val = $this->getBackingStore()->get('environment');
        if (is_null($val) || $val instanceof AccessPackageResourceEnvironment) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'environment'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'environment' => fn(ParseNode $n) => $o->setEnvironment($n->getObjectValue([AccessPackageResourceEnvironment::class, 'createFromDiscriminatorValue'])),
            'modifiedDateTime' => fn(ParseNode $n) => $o->setModifiedDateTime($n->getDateTimeValue()),
            'originId' => fn(ParseNode $n) => $o->setOriginId($n->getStringValue()),
            'originSystem' => fn(ParseNode $n) => $o->setOriginSystem($n->getStringValue()),
            'roles' => fn(ParseNode $n) => $o->setRoles($n->getCollectionOfObjectValues([AccessPackageResourceRole::class, 'createFromDiscriminatorValue'])),
            'scopes' => fn(ParseNode $n) => $o->setScopes($n->getCollectionOfObjectValues([AccessPackageResourceScope::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('modifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modifiedDateTime'");
    }

    /**
     * Gets the originId property value. The unique identifier of the resource in the origin system. In the case of an Azure AD group, this is the identifier of the group.
     * @return string|null
    */
    public function getOriginId(): ?string {
        $val = $this->getBackingStore()->get('originId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'originId'");
    }

    /**
     * Gets the originSystem property value. The type of the resource in the origin system, such as SharePointOnline, AadApplication or AadGroup.
     * @return string|null
    */
    public function getOriginSystem(): ?string {
        $val = $this->getBackingStore()->get('originSystem');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'originSystem'");
    }

    /**
     * Gets the roles property value. Read-only. Nullable. Supports $expand.
     * @return array<AccessPackageResourceRole>|null
    */
    public function getRoles(): ?array {
        $val = $this->getBackingStore()->get('roles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageResourceRole::class);
            /** @var array<AccessPackageResourceRole>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roles'");
    }

    /**
     * Gets the scopes property value. Read-only. Nullable. Supports $expand.
     * @return array<AccessPackageResourceScope>|null
    */
    public function getScopes(): ?array {
        $val = $this->getBackingStore()->get('scopes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageResourceScope::class);
            /** @var array<AccessPackageResourceScope>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopes'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('environment', $this->getEnvironment());
        $writer->writeDateTimeValue('modifiedDateTime', $this->getModifiedDateTime());
        $writer->writeStringValue('originId', $this->getOriginId());
        $writer->writeStringValue('originSystem', $this->getOriginSystem());
        $writer->writeCollectionOfObjectValues('roles', $this->getRoles());
        $writer->writeCollectionOfObjectValues('scopes', $this->getScopes());
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. A description for the resource.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the resource, such as the application name, group name or site name.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the environment property value. Contains the environment information for the resource. This can be set using either the @odata.bind annotation or the environment's originId.Supports $expand.
     * @param AccessPackageResourceEnvironment|null $value Value to set for the environment property.
    */
    public function setEnvironment(?AccessPackageResourceEnvironment $value): void {
        $this->getBackingStore()->set('environment', $value);
    }

    /**
     * Sets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('modifiedDateTime', $value);
    }

    /**
     * Sets the originId property value. The unique identifier of the resource in the origin system. In the case of an Azure AD group, this is the identifier of the group.
     * @param string|null $value Value to set for the originId property.
    */
    public function setOriginId(?string $value): void {
        $this->getBackingStore()->set('originId', $value);
    }

    /**
     * Sets the originSystem property value. The type of the resource in the origin system, such as SharePointOnline, AadApplication or AadGroup.
     * @param string|null $value Value to set for the originSystem property.
    */
    public function setOriginSystem(?string $value): void {
        $this->getBackingStore()->set('originSystem', $value);
    }

    /**
     * Sets the roles property value. Read-only. Nullable. Supports $expand.
     * @param array<AccessPackageResourceRole>|null $value Value to set for the roles property.
    */
    public function setRoles(?array $value): void {
        $this->getBackingStore()->set('roles', $value);
    }

    /**
     * Sets the scopes property value. Read-only. Nullable. Supports $expand.
     * @param array<AccessPackageResourceScope>|null $value Value to set for the scopes property.
    */
    public function setScopes(?array $value): void {
        $this->getBackingStore()->set('scopes', $value);
    }

}
