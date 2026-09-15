<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GovernanceRequest extends Entity implements Parsable 
{
    /**
     * Instantiates a new GovernanceRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GovernanceRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GovernanceRequest {
        return new GovernanceRequest();
    }

    /**
     * Gets the expirationDateTime property value. The expirationDateTime property
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'governancePolicyTemplate' => fn(ParseNode $n) => $o->setGovernancePolicyTemplate($n->getObjectValue([TenantGovernancePolicyTemplate::class, 'createFromDiscriminatorValue'])),
            'governedTenantId' => fn(ParseNode $n) => $o->setGovernedTenantId($n->getStringValue()),
            'governedTenantName' => fn(ParseNode $n) => $o->setGovernedTenantName($n->getStringValue()),
            'governingTenantId' => fn(ParseNode $n) => $o->setGoverningTenantId($n->getStringValue()),
            'governingTenantName' => fn(ParseNode $n) => $o->setGoverningTenantName($n->getStringValue()),
            'policySnapshot' => fn(ParseNode $n) => $o->setPolicySnapshot($n->getObjectValue([RelationshipPolicy::class, 'createFromDiscriminatorValue'])),
            'requestDateTime' => fn(ParseNode $n) => $o->setRequestDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(RequestStatus::class)),
        ]);
    }

    /**
     * Gets the governancePolicyTemplate property value. The governancePolicyTemplate property
     * @return TenantGovernancePolicyTemplate|null
    */
    public function getGovernancePolicyTemplate(): ?TenantGovernancePolicyTemplate {
        $val = $this->getBackingStore()->get('governancePolicyTemplate');
        if (is_null($val) || $val instanceof TenantGovernancePolicyTemplate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'governancePolicyTemplate'");
    }

    /**
     * Gets the governedTenantId property value. The governedTenantId property
     * @return string|null
    */
    public function getGovernedTenantId(): ?string {
        $val = $this->getBackingStore()->get('governedTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'governedTenantId'");
    }

    /**
     * Gets the governedTenantName property value. The governedTenantName property
     * @return string|null
    */
    public function getGovernedTenantName(): ?string {
        $val = $this->getBackingStore()->get('governedTenantName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'governedTenantName'");
    }

    /**
     * Gets the governingTenantId property value. The governingTenantId property
     * @return string|null
    */
    public function getGoverningTenantId(): ?string {
        $val = $this->getBackingStore()->get('governingTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'governingTenantId'");
    }

    /**
     * Gets the governingTenantName property value. The governingTenantName property
     * @return string|null
    */
    public function getGoverningTenantName(): ?string {
        $val = $this->getBackingStore()->get('governingTenantName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'governingTenantName'");
    }

    /**
     * Gets the policySnapshot property value. The policySnapshot property
     * @return RelationshipPolicy|null
    */
    public function getPolicySnapshot(): ?RelationshipPolicy {
        $val = $this->getBackingStore()->get('policySnapshot');
        if (is_null($val) || $val instanceof RelationshipPolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policySnapshot'");
    }

    /**
     * Gets the requestDateTime property value. The requestDateTime property
     * @return DateTime|null
    */
    public function getRequestDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('requestDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestDateTime'");
    }

    /**
     * Gets the status property value. The status property
     * @return RequestStatus|null
    */
    public function getStatus(): ?RequestStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof RequestStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeObjectValue('governancePolicyTemplate', $this->getGovernancePolicyTemplate());
        $writer->writeStringValue('governedTenantId', $this->getGovernedTenantId());
        $writer->writeStringValue('governedTenantName', $this->getGovernedTenantName());
        $writer->writeStringValue('governingTenantId', $this->getGoverningTenantId());
        $writer->writeStringValue('governingTenantName', $this->getGoverningTenantName());
        $writer->writeObjectValue('policySnapshot', $this->getPolicySnapshot());
        $writer->writeDateTimeValue('requestDateTime', $this->getRequestDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the expirationDateTime property value. The expirationDateTime property
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the governancePolicyTemplate property value. The governancePolicyTemplate property
     * @param TenantGovernancePolicyTemplate|null $value Value to set for the governancePolicyTemplate property.
    */
    public function setGovernancePolicyTemplate(?TenantGovernancePolicyTemplate $value): void {
        $this->getBackingStore()->set('governancePolicyTemplate', $value);
    }

    /**
     * Sets the governedTenantId property value. The governedTenantId property
     * @param string|null $value Value to set for the governedTenantId property.
    */
    public function setGovernedTenantId(?string $value): void {
        $this->getBackingStore()->set('governedTenantId', $value);
    }

    /**
     * Sets the governedTenantName property value. The governedTenantName property
     * @param string|null $value Value to set for the governedTenantName property.
    */
    public function setGovernedTenantName(?string $value): void {
        $this->getBackingStore()->set('governedTenantName', $value);
    }

    /**
     * Sets the governingTenantId property value. The governingTenantId property
     * @param string|null $value Value to set for the governingTenantId property.
    */
    public function setGoverningTenantId(?string $value): void {
        $this->getBackingStore()->set('governingTenantId', $value);
    }

    /**
     * Sets the governingTenantName property value. The governingTenantName property
     * @param string|null $value Value to set for the governingTenantName property.
    */
    public function setGoverningTenantName(?string $value): void {
        $this->getBackingStore()->set('governingTenantName', $value);
    }

    /**
     * Sets the policySnapshot property value. The policySnapshot property
     * @param RelationshipPolicy|null $value Value to set for the policySnapshot property.
    */
    public function setPolicySnapshot(?RelationshipPolicy $value): void {
        $this->getBackingStore()->set('policySnapshot', $value);
    }

    /**
     * Sets the requestDateTime property value. The requestDateTime property
     * @param DateTime|null $value Value to set for the requestDateTime property.
    */
    public function setRequestDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('requestDateTime', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param RequestStatus|null $value Value to set for the status property.
    */
    public function setStatus(?RequestStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
