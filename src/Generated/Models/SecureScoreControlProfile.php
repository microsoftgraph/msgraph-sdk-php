<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SecureScoreControlProfile extends Entity implements Parsable 
{
    /**
     * @var string|null $actionType Control action type (Config, Review, Behavior).
    */
    private ?string $actionType = null;
    
    /**
     * @var string|null $actionUrl URL to where the control can be actioned.
    */
    private ?string $actionUrl = null;
    
    /**
     * @var string|null $azureTenantId GUID string for tenant ID.
    */
    private ?string $azureTenantId = null;
    
    /**
     * @var array<ComplianceInformation>|null $complianceInformation The complianceInformation property
    */
    private ?array $complianceInformation = null;
    
    /**
     * @var string|null $controlCategory Control action category (Identity, Data, Device, Apps, Infrastructure).
    */
    private ?string $controlCategory = null;
    
    /**
     * @var array<SecureScoreControlStateUpdate>|null $controlStateUpdates The controlStateUpdates property
    */
    private ?array $controlStateUpdates = null;
    
    /**
     * @var bool|null $deprecated Flag to indicate if a control is depreciated.
    */
    private ?bool $deprecated = null;
    
    /**
     * @var string|null $implementationCost Resource cost of implemmentating control (low, moderate, high).
    */
    private ?string $implementationCost = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime Time at which the control profile entity was last modified. The Timestamp type represents date and time
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var float|null $maxScore max attainable score for the control.
    */
    private ?float $maxScore = null;
    
    /**
     * @var int|null $rank Microsoft's stack ranking of control.
    */
    private ?int $rank = null;
    
    /**
     * @var string|null $remediation Description of what the control will help remediate.
    */
    private ?string $remediation = null;
    
    /**
     * @var string|null $remediationImpact Description of the impact on users of the remediation.
    */
    private ?string $remediationImpact = null;
    
    /**
     * @var string|null $service Service that owns the control (Exchange, Sharepoint, Azure AD).
    */
    private ?string $service = null;
    
    /**
     * @var array<string>|null $threats List of threats the control mitigates (accountBreach,dataDeletion,dataExfiltration,dataSpillage,
    */
    private ?array $threats = null;
    
    /**
     * @var string|null $tier The tier property
    */
    private ?string $tier = null;
    
    /**
     * @var string|null $title Title of the control.
    */
    private ?string $title = null;
    
    /**
     * @var string|null $userImpact The userImpact property
    */
    private ?string $userImpact = null;
    
    /**
     * @var SecurityVendorInformation|null $vendorInformation The vendorInformation property
    */
    private ?SecurityVendorInformation $vendorInformation = null;
    
    /**
     * Instantiates a new secureScoreControlProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.secureScoreControlProfile');
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
        return $this->actionType;
    }

    /**
     * Gets the actionUrl property value. URL to where the control can be actioned.
     * @return string|null
    */
    public function getActionUrl(): ?string {
        return $this->actionUrl;
    }

    /**
     * Gets the azureTenantId property value. GUID string for tenant ID.
     * @return string|null
    */
    public function getAzureTenantId(): ?string {
        return $this->azureTenantId;
    }

    /**
     * Gets the complianceInformation property value. The complianceInformation property
     * @return array<ComplianceInformation>|null
    */
    public function getComplianceInformation(): ?array {
        return $this->complianceInformation;
    }

    /**
     * Gets the controlCategory property value. Control action category (Identity, Data, Device, Apps, Infrastructure).
     * @return string|null
    */
    public function getControlCategory(): ?string {
        return $this->controlCategory;
    }

    /**
     * Gets the controlStateUpdates property value. The controlStateUpdates property
     * @return array<SecureScoreControlStateUpdate>|null
    */
    public function getControlStateUpdates(): ?array {
        return $this->controlStateUpdates;
    }

    /**
     * Gets the deprecated property value. Flag to indicate if a control is depreciated.
     * @return bool|null
    */
    public function getDeprecated(): ?bool {
        return $this->deprecated;
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
        return $this->implementationCost;
    }

    /**
     * Gets the lastModifiedDateTime property value. Time at which the control profile entity was last modified. The Timestamp type represents date and time
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the maxScore property value. max attainable score for the control.
     * @return float|null
    */
    public function getMaxScore(): ?float {
        return $this->maxScore;
    }

    /**
     * Gets the rank property value. Microsoft's stack ranking of control.
     * @return int|null
    */
    public function getRank(): ?int {
        return $this->rank;
    }

    /**
     * Gets the remediation property value. Description of what the control will help remediate.
     * @return string|null
    */
    public function getRemediation(): ?string {
        return $this->remediation;
    }

    /**
     * Gets the remediationImpact property value. Description of the impact on users of the remediation.
     * @return string|null
    */
    public function getRemediationImpact(): ?string {
        return $this->remediationImpact;
    }

    /**
     * Gets the service property value. Service that owns the control (Exchange, Sharepoint, Azure AD).
     * @return string|null
    */
    public function getService(): ?string {
        return $this->service;
    }

    /**
     * Gets the threats property value. List of threats the control mitigates (accountBreach,dataDeletion,dataExfiltration,dataSpillage,
     * @return array<string>|null
    */
    public function getThreats(): ?array {
        return $this->threats;
    }

    /**
     * Gets the tier property value. The tier property
     * @return string|null
    */
    public function getTier(): ?string {
        return $this->tier;
    }

    /**
     * Gets the title property value. Title of the control.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the userImpact property value. The userImpact property
     * @return string|null
    */
    public function getUserImpact(): ?string {
        return $this->userImpact;
    }

    /**
     * Gets the vendorInformation property value. The vendorInformation property
     * @return SecurityVendorInformation|null
    */
    public function getVendorInformation(): ?SecurityVendorInformation {
        return $this->vendorInformation;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('actionType', $this->actionType);
        $writer->writeStringValue('actionUrl', $this->actionUrl);
        $writer->writeStringValue('azureTenantId', $this->azureTenantId);
        $writer->writeCollectionOfObjectValues('complianceInformation', $this->complianceInformation);
        $writer->writeStringValue('controlCategory', $this->controlCategory);
        $writer->writeCollectionOfObjectValues('controlStateUpdates', $this->controlStateUpdates);
        $writer->writeBooleanValue('deprecated', $this->deprecated);
        $writer->writeStringValue('implementationCost', $this->implementationCost);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeFloatValue('maxScore', $this->maxScore);
        $writer->writeIntegerValue('rank', $this->rank);
        $writer->writeStringValue('remediation', $this->remediation);
        $writer->writeStringValue('remediationImpact', $this->remediationImpact);
        $writer->writeStringValue('service', $this->service);
        $writer->writeCollectionOfPrimitiveValues('threats', $this->threats);
        $writer->writeStringValue('tier', $this->tier);
        $writer->writeStringValue('title', $this->title);
        $writer->writeStringValue('userImpact', $this->userImpact);
        $writer->writeObjectValue('vendorInformation', $this->vendorInformation);
    }

    /**
     * Sets the actionType property value. Control action type (Config, Review, Behavior).
     *  @param string|null $value Value to set for the actionType property.
    */
    public function setActionType(?string $value ): void {
        $this->actionType = $value;
    }

    /**
     * Sets the actionUrl property value. URL to where the control can be actioned.
     *  @param string|null $value Value to set for the actionUrl property.
    */
    public function setActionUrl(?string $value ): void {
        $this->actionUrl = $value;
    }

    /**
     * Sets the azureTenantId property value. GUID string for tenant ID.
     *  @param string|null $value Value to set for the azureTenantId property.
    */
    public function setAzureTenantId(?string $value ): void {
        $this->azureTenantId = $value;
    }

    /**
     * Sets the complianceInformation property value. The complianceInformation property
     *  @param array<ComplianceInformation>|null $value Value to set for the complianceInformation property.
    */
    public function setComplianceInformation(?array $value ): void {
        $this->complianceInformation = $value;
    }

    /**
     * Sets the controlCategory property value. Control action category (Identity, Data, Device, Apps, Infrastructure).
     *  @param string|null $value Value to set for the controlCategory property.
    */
    public function setControlCategory(?string $value ): void {
        $this->controlCategory = $value;
    }

    /**
     * Sets the controlStateUpdates property value. The controlStateUpdates property
     *  @param array<SecureScoreControlStateUpdate>|null $value Value to set for the controlStateUpdates property.
    */
    public function setControlStateUpdates(?array $value ): void {
        $this->controlStateUpdates = $value;
    }

    /**
     * Sets the deprecated property value. Flag to indicate if a control is depreciated.
     *  @param bool|null $value Value to set for the deprecated property.
    */
    public function setDeprecated(?bool $value ): void {
        $this->deprecated = $value;
    }

    /**
     * Sets the implementationCost property value. Resource cost of implemmentating control (low, moderate, high).
     *  @param string|null $value Value to set for the implementationCost property.
    */
    public function setImplementationCost(?string $value ): void {
        $this->implementationCost = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Time at which the control profile entity was last modified. The Timestamp type represents date and time
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the maxScore property value. max attainable score for the control.
     *  @param float|null $value Value to set for the maxScore property.
    */
    public function setMaxScore(?float $value ): void {
        $this->maxScore = $value;
    }

    /**
     * Sets the rank property value. Microsoft's stack ranking of control.
     *  @param int|null $value Value to set for the rank property.
    */
    public function setRank(?int $value ): void {
        $this->rank = $value;
    }

    /**
     * Sets the remediation property value. Description of what the control will help remediate.
     *  @param string|null $value Value to set for the remediation property.
    */
    public function setRemediation(?string $value ): void {
        $this->remediation = $value;
    }

    /**
     * Sets the remediationImpact property value. Description of the impact on users of the remediation.
     *  @param string|null $value Value to set for the remediationImpact property.
    */
    public function setRemediationImpact(?string $value ): void {
        $this->remediationImpact = $value;
    }

    /**
     * Sets the service property value. Service that owns the control (Exchange, Sharepoint, Azure AD).
     *  @param string|null $value Value to set for the service property.
    */
    public function setService(?string $value ): void {
        $this->service = $value;
    }

    /**
     * Sets the threats property value. List of threats the control mitigates (accountBreach,dataDeletion,dataExfiltration,dataSpillage,
     *  @param array<string>|null $value Value to set for the threats property.
    */
    public function setThreats(?array $value ): void {
        $this->threats = $value;
    }

    /**
     * Sets the tier property value. The tier property
     *  @param string|null $value Value to set for the tier property.
    */
    public function setTier(?string $value ): void {
        $this->tier = $value;
    }

    /**
     * Sets the title property value. Title of the control.
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value ): void {
        $this->title = $value;
    }

    /**
     * Sets the userImpact property value. The userImpact property
     *  @param string|null $value Value to set for the userImpact property.
    */
    public function setUserImpact(?string $value ): void {
        $this->userImpact = $value;
    }

    /**
     * Sets the vendorInformation property value. The vendorInformation property
     *  @param SecurityVendorInformation|null $value Value to set for the vendorInformation property.
    */
    public function setVendorInformation(?SecurityVendorInformation $value ): void {
        $this->vendorInformation = $value;
    }

}
