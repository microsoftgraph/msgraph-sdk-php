<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConnectedOrganization extends Entity implements Parsable 
{
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConnectedOrganization {
        return new ConnectedOrganization();
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the description property value. The description of the connected organization.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The display name of the connected organization. Supports $filter (eq).
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the externalSponsors property value. The externalSponsors property
     * @return array<DirectoryObject>|null
    */
    public function getExternalSponsors(): ?array {
        return $this->getBackingStore()->get('externalSponsors');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'externalSponsors' => fn(ParseNode $n) => $o->setExternalSponsors($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'identitySources' => fn(ParseNode $n) => $o->setIdentitySources($n->getCollectionOfObjectValues([IdentitySource::class, 'createFromDiscriminatorValue'])),
            'internalSponsors' => fn(ParseNode $n) => $o->setInternalSponsors($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'modifiedDateTime' => fn(ParseNode $n) => $o->setModifiedDateTime($n->getDateTimeValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(ConnectedOrganizationState::class)),
        ]);
    }

    /**
     * Gets the identitySources property value. The identity sources in this connected organization, one of azureActiveDirectoryTenant, domainIdentitySource, externalDomainFederation or crossCloudAzureActiveDirectoryTenant. Nullable.
     * @return array<IdentitySource>|null
    */
    public function getIdentitySources(): ?array {
        return $this->getBackingStore()->get('identitySources');
    }

    /**
     * Gets the internalSponsors property value. The internalSponsors property
     * @return array<DirectoryObject>|null
    */
    public function getInternalSponsors(): ?array {
        return $this->getBackingStore()->get('internalSponsors');
    }

    /**
     * Gets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('modifiedDateTime');
    }

    /**
     * Gets the state property value. The state of a connected organization defines whether assignment policies with requestor scope type AllConfiguredConnectedOrganizationSubjects are applicable or not.  The possible values are: configured, proposed, unknownFutureValue.
     * @return ConnectedOrganizationState|null
    */
    public function getState(): ?ConnectedOrganizationState {
        return $this->getBackingStore()->get('state');
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
        $writer->writeCollectionOfObjectValues('externalSponsors', $this->getExternalSponsors());
        $writer->writeCollectionOfObjectValues('identitySources', $this->getIdentitySources());
        $writer->writeCollectionOfObjectValues('internalSponsors', $this->getInternalSponsors());
        $writer->writeDateTimeValue('modifiedDateTime', $this->getModifiedDateTime());
        $writer->writeEnumValue('state', $this->getState());
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The description of the connected organization.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the connected organization. Supports $filter (eq).
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the externalSponsors property value. The externalSponsors property
     * @param array<DirectoryObject>|null $value Value to set for the externalSponsors property.
    */
    public function setExternalSponsors(?array $value): void {
        $this->getBackingStore()->set('externalSponsors', $value);
    }

    /**
     * Sets the identitySources property value. The identity sources in this connected organization, one of azureActiveDirectoryTenant, domainIdentitySource, externalDomainFederation or crossCloudAzureActiveDirectoryTenant. Nullable.
     * @param array<IdentitySource>|null $value Value to set for the identitySources property.
    */
    public function setIdentitySources(?array $value): void {
        $this->getBackingStore()->set('identitySources', $value);
    }

    /**
     * Sets the internalSponsors property value. The internalSponsors property
     * @param array<DirectoryObject>|null $value Value to set for the internalSponsors property.
    */
    public function setInternalSponsors(?array $value): void {
        $this->getBackingStore()->set('internalSponsors', $value);
    }

    /**
     * Sets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('modifiedDateTime', $value);
    }

    /**
     * Sets the state property value. The state of a connected organization defines whether assignment policies with requestor scope type AllConfiguredConnectedOrganizationSubjects are applicable or not.  The possible values are: configured, proposed, unknownFutureValue.
     * @param ConnectedOrganizationState|null $value Value to set for the state property.
    */
    public function setState(?ConnectedOrganizationState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
