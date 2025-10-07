<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ResellerDelegatedAdminRelationship extends DelegatedAdminRelationship implements Parsable 
{
    /**
     * Instantiates a new ResellerDelegatedAdminRelationship and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResellerDelegatedAdminRelationship
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ResellerDelegatedAdminRelationship {
        return new ResellerDelegatedAdminRelationship();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'indirectProviderTenantId' => fn(ParseNode $n) => $o->setIndirectProviderTenantId($n->getStringValue()),
            'isPartnerConsentPending' => fn(ParseNode $n) => $o->setIsPartnerConsentPending($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the indirectProviderTenantId property value. The tenant ID of the indirect provider partner who created the relationship for the indirect reseller partner.
     * @return string|null
    */
    public function getIndirectProviderTenantId(): ?string {
        $val = $this->getBackingStore()->get('indirectProviderTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'indirectProviderTenantId'");
    }

    /**
     * Gets the isPartnerConsentPending property value. Indicates the indirect reseller partner consent status. true indicates that the partner has yet to review the relationship; false indicates that the partner has already provided consent by approving or rejecting the relationship.
     * @return bool|null
    */
    public function getIsPartnerConsentPending(): ?bool {
        $val = $this->getBackingStore()->get('isPartnerConsentPending');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPartnerConsentPending'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('indirectProviderTenantId', $this->getIndirectProviderTenantId());
        $writer->writeBooleanValue('isPartnerConsentPending', $this->getIsPartnerConsentPending());
    }

    /**
     * Sets the indirectProviderTenantId property value. The tenant ID of the indirect provider partner who created the relationship for the indirect reseller partner.
     * @param string|null $value Value to set for the indirectProviderTenantId property.
    */
    public function setIndirectProviderTenantId(?string $value): void {
        $this->getBackingStore()->set('indirectProviderTenantId', $value);
    }

    /**
     * Sets the isPartnerConsentPending property value. Indicates the indirect reseller partner consent status. true indicates that the partner has yet to review the relationship; false indicates that the partner has already provided consent by approving or rejecting the relationship.
     * @param bool|null $value Value to set for the isPartnerConsentPending property.
    */
    public function setIsPartnerConsentPending(?bool $value): void {
        $this->getBackingStore()->set('isPartnerConsentPending', $value);
    }

}
