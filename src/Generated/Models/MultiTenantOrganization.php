<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class MultiTenantOrganization extends Entity implements Parsable 
{
    /**
     * Instantiates a new MultiTenantOrganization and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MultiTenantOrganization
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MultiTenantOrganization {
        return new MultiTenantOrganization();
    }

    /**
     * Gets the createdDateTime property value. Date when multitenant organization was created. Read-only.
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
     * Gets the description property value. Description of the multitenant organization.
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
     * Gets the displayName property value. Display name of the multitenant organization.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'joinRequest' => fn(ParseNode $n) => $o->setJoinRequest($n->getObjectValue([MultiTenantOrganizationJoinRequestRecord::class, 'createFromDiscriminatorValue'])),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(MultiTenantOrganizationState::class)),
            'tenants' => fn(ParseNode $n) => $o->setTenants($n->getCollectionOfObjectValues([MultiTenantOrganizationMember::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the joinRequest property value. Defines the status of a tenant joining a multitenant organization.
     * @return MultiTenantOrganizationJoinRequestRecord|null
    */
    public function getJoinRequest(): ?MultiTenantOrganizationJoinRequestRecord {
        $val = $this->getBackingStore()->get('joinRequest');
        if (is_null($val) || $val instanceof MultiTenantOrganizationJoinRequestRecord) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'joinRequest'");
    }

    /**
     * Gets the state property value. State of the multitenant organization. The possible values are: active, inactive, unknownFutureValue. active indicates the multitenant organization is created. inactive indicates the multitenant organization isn't created. Read-only.
     * @return MultiTenantOrganizationState|null
    */
    public function getState(): ?MultiTenantOrganizationState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof MultiTenantOrganizationState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Gets the tenants property value. Defines tenants added to a multitenant organization.
     * @return array<MultiTenantOrganizationMember>|null
    */
    public function getTenants(): ?array {
        $val = $this->getBackingStore()->get('tenants');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MultiTenantOrganizationMember::class);
            /** @var array<MultiTenantOrganizationMember>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenants'");
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
        $writer->writeObjectValue('joinRequest', $this->getJoinRequest());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeCollectionOfObjectValues('tenants', $this->getTenants());
    }

    /**
     * Sets the createdDateTime property value. Date when multitenant organization was created. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. Description of the multitenant organization.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Display name of the multitenant organization.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the joinRequest property value. Defines the status of a tenant joining a multitenant organization.
     * @param MultiTenantOrganizationJoinRequestRecord|null $value Value to set for the joinRequest property.
    */
    public function setJoinRequest(?MultiTenantOrganizationJoinRequestRecord $value): void {
        $this->getBackingStore()->set('joinRequest', $value);
    }

    /**
     * Sets the state property value. State of the multitenant organization. The possible values are: active, inactive, unknownFutureValue. active indicates the multitenant organization is created. inactive indicates the multitenant organization isn't created. Read-only.
     * @param MultiTenantOrganizationState|null $value Value to set for the state property.
    */
    public function setState(?MultiTenantOrganizationState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the tenants property value. Defines tenants added to a multitenant organization.
     * @param array<MultiTenantOrganizationMember>|null $value Value to set for the tenants property.
    */
    public function setTenants(?array $value): void {
        $this->getBackingStore()->set('tenants', $value);
    }

}
