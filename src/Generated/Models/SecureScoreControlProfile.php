<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SecureScoreControlProfile extends Entity implements Parsable 
{
    /**
     * Instantiates a new secureScoreControlProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SecureScoreControlProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SecureScoreControlProfile {
        return new SecureScoreControlProfile();
    }

    /**
     * Gets the actionType property value. Control action type (Config, Review, Behavior).
     * @return string|null
    */
    public function getActionType(): ?string {
        return $this->getBackingStore()->get('actionType');
    }

    /**
     * Gets the actionUrl property value. URL to where the control can be actioned.
     * @return string|null
    */
    public function getActionUrl(): ?string {
        return $this->getBackingStore()->get('actionUrl');
    }

    /**
     * Gets the azureTenantId property value. GUID string for tenant ID.
     * @return string|null
    */
    public function getAzureTenantId(): ?string {
        return $this->getBackingStore()->get('azureTenantId');
    }

    /**
     * Gets the complianceInformation property value. The complianceInformation property
     * @return array<ComplianceInformation>|null
    */
    public function getComplianceInformation(): ?array {
        return $this->getBackingStore()->get('complianceInformation');
    }

    /**
     * Gets the controlCategory property value. Control action category (Identity, Data, Device, Apps, Infrastructure).
     * @return string|null
    */
    public function getControlCategory(): ?string {
        return $this->getBackingStore()->get('controlCategory');
    }

    /**
     * Gets the controlStateUpdates property value. The controlStateUpdates property
     * @return array<SecureScoreControlStateUpdate>|null
    */
    public function getControlStateUpdates(): ?array {
        return $this->getBackingStore()->get('controlStateUpdates');
    }

    /**
     * Gets the deprecated property value. Flag to indicate if a control is depreciated.
     * @return bool|null
    */
    public function getDeprecated(): ?bool {
        return $this->getBackingStore()->get('deprecated');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionType' => fn(ParseNode $n) => $o->setActionType($n->getStringValue()),
            'actionUrl' => fn(ParseNode $n) => $o->setActionUrl($n->getStringValue()),
            'azureTenantId' => fn(ParseNode $n) => $o->setAzureTenantId($n->getStringValue()),
            'complianceInformation' => fn(ParseNode $n) => $o->setComplianceInformation($n->getCollectionOfObjectValues([ComplianceInformation::class, 'createFromDiscriminatorValue'])),
            'controlCategory' => fn(ParseNode $n) => $o->setControlCategory($n->getStringValue()),
            'controlStateUpdates' => fn(ParseNode $n) => $o->setControlStateUpdates($n->getCollectionOfObjectValues([SecureScoreControlStateUpdate::class, 'createFromDiscriminatorValue'])),
            'deprecated' => fn(ParseNode $n) => $o->setDeprecated($n->getBooleanValue()),
            'implementationCost' => fn(ParseNode $n) => $o->setImplementationCost($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'maxScore' => fn(ParseNode $n) => $o->setMaxScore($n->getFloatValue()),
            'rank' => fn(ParseNode $n) => $o->setRank($n->getIntegerValue()),
            'remediation' => fn(ParseNode $n) => $o->setRemediation($n->getStringValue()),
            'remediationImpact' => fn(ParseNode $n) => $o->setRemediationImpact($n->getStringValue()),
            'service' => fn(ParseNode $n) => $o->setService($n->getStringValue()),
            'threats' => fn(ParseNode $n) => $o->setThreats($n->getCollectionOfPrimitiveValues()),
            'tier' => fn(ParseNode $n) => $o->setTier($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'userImpact' => fn(ParseNode $n) => $o->setUserImpact($n->getStringValue()),
            'vendorInformation' => fn(ParseNode $n) => $o->setVendorInformation($n->getObjectValue([SecurityVendorInformation::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the implementationCost property value. Resource cost of implemmentating control (low, moderate, high).
     * @return string|null
    */
    public function getImplementationCost(): ?string {
        return $this->getBackingStore()->get('implementationCost');
    }

    /**
     * Gets the lastModifiedDateTime property value. Time at which the control profile entity was last modified. The Timestamp type represents date and time
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the maxScore property value. max attainable score for the control.
     * @return float|null
    */
    public function getMaxScore(): ?float {
        return $this->getBackingStore()->get('maxScore');
    }

    /**
     * Gets the rank property value. Microsoft's stack ranking of control.
     * @return int|null
    */
    public function getRank(): ?int {
        return $this->getBackingStore()->get('rank');
    }

    /**
     * Gets the remediation property value. Description of what the control will help remediate.
     * @return string|null
    */
    public function getRemediation(): ?string {
        return $this->getBackingStore()->get('remediation');
    }

    /**
     * Gets the remediationImpact property value. Description of the impact on users of the remediation.
     * @return string|null
    */
    public function getRemediationImpact(): ?string {
        return $this->getBackingStore()->get('remediationImpact');
    }

    /**
     * Gets the service property value. Service that owns the control (Exchange, Sharepoint, Azure AD).
     * @return string|null
    */
    public function getService(): ?string {
        return $this->getBackingStore()->get('service');
    }

    /**
     * Gets the threats property value. List of threats the control mitigates (accountBreach,dataDeletion,dataExfiltration,dataSpillage,
     * @return array<string>|null
    */
    public function getThreats(): ?array {
        return $this->getBackingStore()->get('threats');
    }

    /**
     * Gets the tier property value. The tier property
     * @return string|null
    */
    public function getTier(): ?string {
        return $this->getBackingStore()->get('tier');
    }

    /**
     * Gets the title property value. Title of the control.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->getBackingStore()->get('title');
    }

    /**
     * Gets the userImpact property value. The userImpact property
     * @return string|null
    */
    public function getUserImpact(): ?string {
        return $this->getBackingStore()->get('userImpact');
    }

    /**
     * Gets the vendorInformation property value. The vendorInformation property
     * @return SecurityVendorInformation|null
    */
    public function getVendorInformation(): ?SecurityVendorInformation {
        return $this->getBackingStore()->get('vendorInformation');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('actionType', $this->getActionType());
        $writer->writeStringValue('actionUrl', $this->getActionUrl());
        $writer->writeStringValue('azureTenantId', $this->getAzureTenantId());
        $writer->writeCollectionOfObjectValues('complianceInformation', $this->getComplianceInformation());
        $writer->writeStringValue('controlCategory', $this->getControlCategory());
        $writer->writeCollectionOfObjectValues('controlStateUpdates', $this->getControlStateUpdates());
        $writer->writeBooleanValue('deprecated', $this->getDeprecated());
        $writer->writeStringValue('implementationCost', $this->getImplementationCost());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeFloatValue('maxScore', $this->getMaxScore());
        $writer->writeIntegerValue('rank', $this->getRank());
        $writer->writeStringValue('remediation', $this->getRemediation());
        $writer->writeStringValue('remediationImpact', $this->getRemediationImpact());
        $writer->writeStringValue('service', $this->getService());
        $writer->writeCollectionOfPrimitiveValues('threats', $this->getThreats());
        $writer->writeStringValue('tier', $this->getTier());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeStringValue('userImpact', $this->getUserImpact());
        $writer->writeObjectValue('vendorInformation', $this->getVendorInformation());
    }

    /**
     * Sets the actionType property value. Control action type (Config, Review, Behavior).
     *  @param string|null $value Value to set for the actionType property.
    */
    public function setActionType(?string $value): void {
        $this->getBackingStore()->set('actionType', $value);
    }

    /**
     * Sets the actionUrl property value. URL to where the control can be actioned.
     *  @param string|null $value Value to set for the actionUrl property.
    */
    public function setActionUrl(?string $value): void {
        $this->getBackingStore()->set('actionUrl', $value);
    }

    /**
     * Sets the azureTenantId property value. GUID string for tenant ID.
     *  @param string|null $value Value to set for the azureTenantId property.
    */
    public function setAzureTenantId(?string $value): void {
        $this->getBackingStore()->set('azureTenantId', $value);
    }

    /**
     * Sets the complianceInformation property value. The complianceInformation property
     *  @param array<ComplianceInformation>|null $value Value to set for the complianceInformation property.
    */
    public function setComplianceInformation(?array $value): void {
        $this->getBackingStore()->set('complianceInformation', $value);
    }

    /**
     * Sets the controlCategory property value. Control action category (Identity, Data, Device, Apps, Infrastructure).
     *  @param string|null $value Value to set for the controlCategory property.
    */
    public function setControlCategory(?string $value): void {
        $this->getBackingStore()->set('controlCategory', $value);
    }

    /**
     * Sets the controlStateUpdates property value. The controlStateUpdates property
     *  @param array<SecureScoreControlStateUpdate>|null $value Value to set for the controlStateUpdates property.
    */
    public function setControlStateUpdates(?array $value): void {
        $this->getBackingStore()->set('controlStateUpdates', $value);
    }

    /**
     * Sets the deprecated property value. Flag to indicate if a control is depreciated.
     *  @param bool|null $value Value to set for the deprecated property.
    */
    public function setDeprecated(?bool $value): void {
        $this->getBackingStore()->set('deprecated', $value);
    }

    /**
     * Sets the implementationCost property value. Resource cost of implemmentating control (low, moderate, high).
     *  @param string|null $value Value to set for the implementationCost property.
    */
    public function setImplementationCost(?string $value): void {
        $this->getBackingStore()->set('implementationCost', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Time at which the control profile entity was last modified. The Timestamp type represents date and time
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the maxScore property value. max attainable score for the control.
     *  @param float|null $value Value to set for the maxScore property.
    */
    public function setMaxScore(?float $value): void {
        $this->getBackingStore()->set('maxScore', $value);
    }

    /**
     * Sets the rank property value. Microsoft's stack ranking of control.
     *  @param int|null $value Value to set for the rank property.
    */
    public function setRank(?int $value): void {
        $this->getBackingStore()->set('rank', $value);
    }

    /**
     * Sets the remediation property value. Description of what the control will help remediate.
     *  @param string|null $value Value to set for the remediation property.
    */
    public function setRemediation(?string $value): void {
        $this->getBackingStore()->set('remediation', $value);
    }

    /**
     * Sets the remediationImpact property value. Description of the impact on users of the remediation.
     *  @param string|null $value Value to set for the remediationImpact property.
    */
    public function setRemediationImpact(?string $value): void {
        $this->getBackingStore()->set('remediationImpact', $value);
    }

    /**
     * Sets the service property value. Service that owns the control (Exchange, Sharepoint, Azure AD).
     *  @param string|null $value Value to set for the service property.
    */
    public function setService(?string $value): void {
        $this->getBackingStore()->set('service', $value);
    }

    /**
     * Sets the threats property value. List of threats the control mitigates (accountBreach,dataDeletion,dataExfiltration,dataSpillage,
     *  @param array<string>|null $value Value to set for the threats property.
    */
    public function setThreats(?array $value): void {
        $this->getBackingStore()->set('threats', $value);
    }

    /**
     * Sets the tier property value. The tier property
     *  @param string|null $value Value to set for the tier property.
    */
    public function setTier(?string $value): void {
        $this->getBackingStore()->set('tier', $value);
    }

    /**
     * Sets the title property value. Title of the control.
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

    /**
     * Sets the userImpact property value. The userImpact property
     *  @param string|null $value Value to set for the userImpact property.
    */
    public function setUserImpact(?string $value): void {
        $this->getBackingStore()->set('userImpact', $value);
    }

    /**
     * Sets the vendorInformation property value. The vendorInformation property
     *  @param SecurityVendorInformation|null $value Value to set for the vendorInformation property.
    */
    public function setVendorInformation(?SecurityVendorInformation $value): void {
        $this->getBackingStore()->set('vendorInformation', $value);
    }

}
