<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageSubject extends Entity implements Parsable 
{
    /**
     * Instantiates a new AccessPackageSubject and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageSubject
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageSubject {
        return new AccessPackageSubject();
    }

    /**
     * Gets the connectedOrganization property value. The connected organization of the subject. Read-only. Nullable.
     * @return ConnectedOrganization|null
    */
    public function getConnectedOrganization(): ?ConnectedOrganization {
        $val = $this->getBackingStore()->get('connectedOrganization');
        if (is_null($val) || $val instanceof ConnectedOrganization) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectedOrganization'");
    }

    /**
     * Gets the displayName property value. The display name of the subject.
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
     * Gets the email property value. The email address of the subject.
     * @return string|null
    */
    public function getEmail(): ?string {
        $val = $this->getBackingStore()->get('email');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'email'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'connectedOrganization' => fn(ParseNode $n) => $o->setConnectedOrganization($n->getObjectValue([ConnectedOrganization::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'objectId' => fn(ParseNode $n) => $o->setObjectId($n->getStringValue()),
            'onPremisesSecurityIdentifier' => fn(ParseNode $n) => $o->setOnPremisesSecurityIdentifier($n->getStringValue()),
            'principalName' => fn(ParseNode $n) => $o->setPrincipalName($n->getStringValue()),
            'subjectType' => fn(ParseNode $n) => $o->setSubjectType($n->getEnumValue(AccessPackageSubjectType::class)),
        ]);
    }

    /**
     * Gets the objectId property value. The object identifier of the subject. null if the subject isn't yet a user in the tenant.
     * @return string|null
    */
    public function getObjectId(): ?string {
        $val = $this->getBackingStore()->get('objectId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'objectId'");
    }

    /**
     * Gets the onPremisesSecurityIdentifier property value. A string representation of the principal's security identifier, if known, or null if the subject doesn't have a security identifier.
     * @return string|null
    */
    public function getOnPremisesSecurityIdentifier(): ?string {
        $val = $this->getBackingStore()->get('onPremisesSecurityIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremisesSecurityIdentifier'");
    }

    /**
     * Gets the principalName property value. The principal name, if known, of the subject.
     * @return string|null
    */
    public function getPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('principalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'principalName'");
    }

    /**
     * Gets the subjectType property value. The resource type of the subject. The possible values are: notSpecified, user, servicePrincipal, unknownFutureValue.
     * @return AccessPackageSubjectType|null
    */
    public function getSubjectType(): ?AccessPackageSubjectType {
        $val = $this->getBackingStore()->get('subjectType');
        if (is_null($val) || $val instanceof AccessPackageSubjectType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subjectType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('connectedOrganization', $this->getConnectedOrganization());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('objectId', $this->getObjectId());
        $writer->writeStringValue('onPremisesSecurityIdentifier', $this->getOnPremisesSecurityIdentifier());
        $writer->writeStringValue('principalName', $this->getPrincipalName());
        $writer->writeEnumValue('subjectType', $this->getSubjectType());
    }

    /**
     * Sets the connectedOrganization property value. The connected organization of the subject. Read-only. Nullable.
     * @param ConnectedOrganization|null $value Value to set for the connectedOrganization property.
    */
    public function setConnectedOrganization(?ConnectedOrganization $value): void {
        $this->getBackingStore()->set('connectedOrganization', $value);
    }

    /**
     * Sets the displayName property value. The display name of the subject.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the email property value. The email address of the subject.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->getBackingStore()->set('email', $value);
    }

    /**
     * Sets the objectId property value. The object identifier of the subject. null if the subject isn't yet a user in the tenant.
     * @param string|null $value Value to set for the objectId property.
    */
    public function setObjectId(?string $value): void {
        $this->getBackingStore()->set('objectId', $value);
    }

    /**
     * Sets the onPremisesSecurityIdentifier property value. A string representation of the principal's security identifier, if known, or null if the subject doesn't have a security identifier.
     * @param string|null $value Value to set for the onPremisesSecurityIdentifier property.
    */
    public function setOnPremisesSecurityIdentifier(?string $value): void {
        $this->getBackingStore()->set('onPremisesSecurityIdentifier', $value);
    }

    /**
     * Sets the principalName property value. The principal name, if known, of the subject.
     * @param string|null $value Value to set for the principalName property.
    */
    public function setPrincipalName(?string $value): void {
        $this->getBackingStore()->set('principalName', $value);
    }

    /**
     * Sets the subjectType property value. The resource type of the subject. The possible values are: notSpecified, user, servicePrincipal, unknownFutureValue.
     * @param AccessPackageSubjectType|null $value Value to set for the subjectType property.
    */
    public function setSubjectType(?AccessPackageSubjectType $value): void {
        $this->getBackingStore()->set('subjectType', $value);
    }

}
