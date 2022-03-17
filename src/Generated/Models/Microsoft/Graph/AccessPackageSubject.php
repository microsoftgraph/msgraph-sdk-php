<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageSubject extends Entity 
{
    /** @var ConnectedOrganization|null $connectedOrganization The connected organization of the subject. Read-only. Nullable. */
    private ?ConnectedOrganization $connectedOrganization = null;
    
    /** @var string|null $displayName The display name of the subject. */
    private ?string $displayName = null;
    
    /** @var string|null $email The email address of the subject. */
    private ?string $email = null;
    
    /** @var string|null $objectId The object identifier of the subject. null if the subject is not yet a user in the tenant. */
    private ?string $objectId = null;
    
    /** @var string|null $onPremisesSecurityIdentifier A string representation of the principal's security identifier, if known, or null if the subject does not have a security identifier. */
    private ?string $onPremisesSecurityIdentifier = null;
    
    /** @var string|null $principalName The principal name, if known, of the subject. */
    private ?string $principalName = null;
    
    /** @var AccessPackageSubjectType|null $subjectType The resource type of the subject. The possible values are: notSpecified, user, servicePrincipal, unknownFutureValue. */
    private ?AccessPackageSubjectType $subjectType = null;
    
    /**
     * Instantiates a new accessPackageSubject and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageSubject
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageSubject {
        return new AccessPackageSubject();
    }

    /**
     * Gets the connectedOrganization property value. The connected organization of the subject. Read-only. Nullable.
     * @return ConnectedOrganization|null
    */
    public function getConnectedOrganization(): ?ConnectedOrganization {
        return $this->connectedOrganization;
    }

    /**
     * Gets the displayName property value. The display name of the subject.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the email property value. The email address of the subject.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'connectedOrganization' => function (self $o, ParseNode $n) { $o->setConnectedOrganization($n->getObjectValue(ConnectedOrganization::class)); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'email' => function (self $o, ParseNode $n) { $o->setEmail($n->getStringValue()); },
            'objectId' => function (self $o, ParseNode $n) { $o->setObjectId($n->getStringValue()); },
            'onPremisesSecurityIdentifier' => function (self $o, ParseNode $n) { $o->setOnPremisesSecurityIdentifier($n->getStringValue()); },
            'principalName' => function (self $o, ParseNode $n) { $o->setPrincipalName($n->getStringValue()); },
            'subjectType' => function (self $o, ParseNode $n) { $o->setSubjectType($n->getEnumValue(AccessPackageSubjectType::class)); },
        ]);
    }

    /**
     * Gets the objectId property value. The object identifier of the subject. null if the subject is not yet a user in the tenant.
     * @return string|null
    */
    public function getObjectId(): ?string {
        return $this->objectId;
    }

    /**
     * Gets the onPremisesSecurityIdentifier property value. A string representation of the principal's security identifier, if known, or null if the subject does not have a security identifier.
     * @return string|null
    */
    public function getOnPremisesSecurityIdentifier(): ?string {
        return $this->onPremisesSecurityIdentifier;
    }

    /**
     * Gets the principalName property value. The principal name, if known, of the subject.
     * @return string|null
    */
    public function getPrincipalName(): ?string {
        return $this->principalName;
    }

    /**
     * Gets the subjectType property value. The resource type of the subject. The possible values are: notSpecified, user, servicePrincipal, unknownFutureValue.
     * @return AccessPackageSubjectType|null
    */
    public function getSubjectType(): ?AccessPackageSubjectType {
        return $this->subjectType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('connectedOrganization', $this->connectedOrganization);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('email', $this->email);
        $writer->writeStringValue('objectId', $this->objectId);
        $writer->writeStringValue('onPremisesSecurityIdentifier', $this->onPremisesSecurityIdentifier);
        $writer->writeStringValue('principalName', $this->principalName);
        $writer->writeEnumValue('subjectType', $this->subjectType);
    }

    /**
     * Sets the connectedOrganization property value. The connected organization of the subject. Read-only. Nullable.
     *  @param ConnectedOrganization|null $value Value to set for the connectedOrganization property.
    */
    public function setConnectedOrganization(?ConnectedOrganization $value ): void {
        $this->connectedOrganization = $value;
    }

    /**
     * Sets the displayName property value. The display name of the subject.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the email property value. The email address of the subject.
     *  @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value ): void {
        $this->email = $value;
    }

    /**
     * Sets the objectId property value. The object identifier of the subject. null if the subject is not yet a user in the tenant.
     *  @param string|null $value Value to set for the objectId property.
    */
    public function setObjectId(?string $value ): void {
        $this->objectId = $value;
    }

    /**
     * Sets the onPremisesSecurityIdentifier property value. A string representation of the principal's security identifier, if known, or null if the subject does not have a security identifier.
     *  @param string|null $value Value to set for the onPremisesSecurityIdentifier property.
    */
    public function setOnPremisesSecurityIdentifier(?string $value ): void {
        $this->onPremisesSecurityIdentifier = $value;
    }

    /**
     * Sets the principalName property value. The principal name, if known, of the subject.
     *  @param string|null $value Value to set for the principalName property.
    */
    public function setPrincipalName(?string $value ): void {
        $this->principalName = $value;
    }

    /**
     * Sets the subjectType property value. The resource type of the subject. The possible values are: notSpecified, user, servicePrincipal, unknownFutureValue.
     *  @param AccessPackageSubjectType|null $value Value to set for the subjectType property.
    */
    public function setSubjectType(?AccessPackageSubjectType $value ): void {
        $this->subjectType = $value;
    }

}
