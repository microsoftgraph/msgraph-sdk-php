<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConnectedOrganization extends Entity 
{
    /** @var DateTime|null $createdDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    private ?DateTime $createdDateTime = null;
    
    /** @var string|null $description The description of the connected organization. */
    private ?string $description = null;
    
    /** @var string|null $displayName The display name of the connected organization. Supports $filter (eq). */
    private ?string $displayName = null;
    
    /** @var array<DirectoryObject>|null $externalSponsors Nullable. */
    private ?array $externalSponsors = null;
    
    /** @var array<IdentitySource>|null $identitySources The identity sources in this connected organization, one of azureActiveDirectoryTenant, domainIdentitySource or externalDomainFederation. Nullable. */
    private ?array $identitySources = null;
    
    /** @var array<DirectoryObject>|null $internalSponsors Nullable. */
    private ?array $internalSponsors = null;
    
    /** @var DateTime|null $modifiedDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    private ?DateTime $modifiedDateTime = null;
    
    /** @var ConnectedOrganizationState|null $state The state of a connected organization defines whether assignment policies with requestor scope type AllConfiguredConnectedOrganizationSubjects are applicable or not.  The possible values are: configured, proposed, unknownFutureValue. */
    private ?ConnectedOrganizationState $state = null;
    
    /**
     * Instantiates a new connectedOrganization and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConnectedOrganization
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ConnectedOrganization {
        return new ConnectedOrganization();
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. The description of the connected organization.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name of the connected organization. Supports $filter (eq).
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the externalSponsors property value. Nullable.
     * @return array<DirectoryObject>|null
    */
    public function getExternalSponsors(): ?array {
        return $this->externalSponsors;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'externalSponsors' => function (self $o, ParseNode $n) { $o->setExternalSponsors($n->getCollectionOfObjectValues(DirectoryObject::class)); },
            'identitySources' => function (self $o, ParseNode $n) { $o->setIdentitySources($n->getCollectionOfObjectValues(IdentitySource::class)); },
            'internalSponsors' => function (self $o, ParseNode $n) { $o->setInternalSponsors($n->getCollectionOfObjectValues(DirectoryObject::class)); },
            'modifiedDateTime' => function (self $o, ParseNode $n) { $o->setModifiedDateTime($n->getDateTimeValue()); },
            'state' => function (self $o, ParseNode $n) { $o->setState($n->getEnumValue(ConnectedOrganizationState::class)); },
        ]);
    }

    /**
     * Gets the identitySources property value. The identity sources in this connected organization, one of azureActiveDirectoryTenant, domainIdentitySource or externalDomainFederation. Nullable.
     * @return array<IdentitySource>|null
    */
    public function getIdentitySources(): ?array {
        return $this->identitySources;
    }

    /**
     * Gets the internalSponsors property value. Nullable.
     * @return array<DirectoryObject>|null
    */
    public function getInternalSponsors(): ?array {
        return $this->internalSponsors;
    }

    /**
     * Gets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->modifiedDateTime;
    }

    /**
     * Gets the state property value. The state of a connected organization defines whether assignment policies with requestor scope type AllConfiguredConnectedOrganizationSubjects are applicable or not.  The possible values are: configured, proposed, unknownFutureValue.
     * @return ConnectedOrganizationState|null
    */
    public function getState(): ?ConnectedOrganizationState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('externalSponsors', $this->externalSponsors);
        $writer->writeCollectionOfObjectValues('identitySources', $this->identitySources);
        $writer->writeCollectionOfObjectValues('internalSponsors', $this->internalSponsors);
        $writer->writeDateTimeValue('modifiedDateTime', $this->modifiedDateTime);
        $writer->writeEnumValue('state', $this->state);
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. The description of the connected organization.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name of the connected organization. Supports $filter (eq).
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the externalSponsors property value. Nullable.
     *  @param array<DirectoryObject>|null $value Value to set for the externalSponsors property.
    */
    public function setExternalSponsors(?array $value ): void {
        $this->externalSponsors = $value;
    }

    /**
     * Sets the identitySources property value. The identity sources in this connected organization, one of azureActiveDirectoryTenant, domainIdentitySource or externalDomainFederation. Nullable.
     *  @param array<IdentitySource>|null $value Value to set for the identitySources property.
    */
    public function setIdentitySources(?array $value ): void {
        $this->identitySources = $value;
    }

    /**
     * Sets the internalSponsors property value. Nullable.
     *  @param array<DirectoryObject>|null $value Value to set for the internalSponsors property.
    */
    public function setInternalSponsors(?array $value ): void {
        $this->internalSponsors = $value;
    }

    /**
     * Sets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value ): void {
        $this->modifiedDateTime = $value;
    }

    /**
     * Sets the state property value. The state of a connected organization defines whether assignment policies with requestor scope type AllConfiguredConnectedOrganizationSubjects are applicable or not.  The possible values are: configured, proposed, unknownFutureValue.
     *  @param ConnectedOrganizationState|null $value Value to set for the state property.
    */
    public function setState(?ConnectedOrganizationState $value ): void {
        $this->state = $value;
    }

}
