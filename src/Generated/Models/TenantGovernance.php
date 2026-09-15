<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TenantGovernance extends Entity implements Parsable 
{
    /**
     * Instantiates a new TenantGovernance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantGovernance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantGovernance {
        return new TenantGovernance();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'governanceInvitations' => fn(ParseNode $n) => $o->setGovernanceInvitations($n->getCollectionOfObjectValues([GovernanceInvitation::class, 'createFromDiscriminatorValue'])),
            'governancePolicyTemplates' => fn(ParseNode $n) => $o->setGovernancePolicyTemplates($n->getCollectionOfObjectValues([TenantGovernancePolicyTemplate::class, 'createFromDiscriminatorValue'])),
            'governanceRelationships' => fn(ParseNode $n) => $o->setGovernanceRelationships($n->getCollectionOfObjectValues([GovernanceRelationship::class, 'createFromDiscriminatorValue'])),
            'governanceRequests' => fn(ParseNode $n) => $o->setGovernanceRequests($n->getCollectionOfObjectValues([GovernanceRequest::class, 'createFromDiscriminatorValue'])),
            'relatedTenants' => fn(ParseNode $n) => $o->setRelatedTenants($n->getCollectionOfObjectValues([RelatedTenant::class, 'createFromDiscriminatorValue'])),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([TenantGovernanceSetting::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the governanceInvitations property value. The governanceInvitations property
     * @return array<GovernanceInvitation>|null
    */
    public function getGovernanceInvitations(): ?array {
        $val = $this->getBackingStore()->get('governanceInvitations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GovernanceInvitation::class);
            /** @var array<GovernanceInvitation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'governanceInvitations'");
    }

    /**
     * Gets the governancePolicyTemplates property value. The governancePolicyTemplates property
     * @return array<TenantGovernancePolicyTemplate>|null
    */
    public function getGovernancePolicyTemplates(): ?array {
        $val = $this->getBackingStore()->get('governancePolicyTemplates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TenantGovernancePolicyTemplate::class);
            /** @var array<TenantGovernancePolicyTemplate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'governancePolicyTemplates'");
    }

    /**
     * Gets the governanceRelationships property value. The governanceRelationships property
     * @return array<GovernanceRelationship>|null
    */
    public function getGovernanceRelationships(): ?array {
        $val = $this->getBackingStore()->get('governanceRelationships');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GovernanceRelationship::class);
            /** @var array<GovernanceRelationship>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'governanceRelationships'");
    }

    /**
     * Gets the governanceRequests property value. The governanceRequests property
     * @return array<GovernanceRequest>|null
    */
    public function getGovernanceRequests(): ?array {
        $val = $this->getBackingStore()->get('governanceRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GovernanceRequest::class);
            /** @var array<GovernanceRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'governanceRequests'");
    }

    /**
     * Gets the relatedTenants property value. The relatedTenants property
     * @return array<RelatedTenant>|null
    */
    public function getRelatedTenants(): ?array {
        $val = $this->getBackingStore()->get('relatedTenants');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RelatedTenant::class);
            /** @var array<RelatedTenant>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'relatedTenants'");
    }

    /**
     * Gets the settings property value. The settings property
     * @return TenantGovernanceSetting|null
    */
    public function getSettings(): ?TenantGovernanceSetting {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof TenantGovernanceSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('governanceInvitations', $this->getGovernanceInvitations());
        $writer->writeCollectionOfObjectValues('governancePolicyTemplates', $this->getGovernancePolicyTemplates());
        $writer->writeCollectionOfObjectValues('governanceRelationships', $this->getGovernanceRelationships());
        $writer->writeCollectionOfObjectValues('governanceRequests', $this->getGovernanceRequests());
        $writer->writeCollectionOfObjectValues('relatedTenants', $this->getRelatedTenants());
        $writer->writeObjectValue('settings', $this->getSettings());
    }

    /**
     * Sets the governanceInvitations property value. The governanceInvitations property
     * @param array<GovernanceInvitation>|null $value Value to set for the governanceInvitations property.
    */
    public function setGovernanceInvitations(?array $value): void {
        $this->getBackingStore()->set('governanceInvitations', $value);
    }

    /**
     * Sets the governancePolicyTemplates property value. The governancePolicyTemplates property
     * @param array<TenantGovernancePolicyTemplate>|null $value Value to set for the governancePolicyTemplates property.
    */
    public function setGovernancePolicyTemplates(?array $value): void {
        $this->getBackingStore()->set('governancePolicyTemplates', $value);
    }

    /**
     * Sets the governanceRelationships property value. The governanceRelationships property
     * @param array<GovernanceRelationship>|null $value Value to set for the governanceRelationships property.
    */
    public function setGovernanceRelationships(?array $value): void {
        $this->getBackingStore()->set('governanceRelationships', $value);
    }

    /**
     * Sets the governanceRequests property value. The governanceRequests property
     * @param array<GovernanceRequest>|null $value Value to set for the governanceRequests property.
    */
    public function setGovernanceRequests(?array $value): void {
        $this->getBackingStore()->set('governanceRequests', $value);
    }

    /**
     * Sets the relatedTenants property value. The relatedTenants property
     * @param array<RelatedTenant>|null $value Value to set for the relatedTenants property.
    */
    public function setRelatedTenants(?array $value): void {
        $this->getBackingStore()->set('relatedTenants', $value);
    }

    /**
     * Sets the settings property value. The settings property
     * @param TenantGovernanceSetting|null $value Value to set for the settings property.
    */
    public function setSettings(?TenantGovernanceSetting $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

}
