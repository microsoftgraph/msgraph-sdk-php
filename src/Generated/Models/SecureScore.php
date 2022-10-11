<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SecureScore extends Entity implements Parsable 
{
    /**
     * @var int|null $activeUserCount Active user count of the given tenant.
    */
    private ?int $activeUserCount = null;
    
    /**
     * @var array<AverageComparativeScore>|null $averageComparativeScores Average score by different scopes (for example, average by industry, average by seating) and control category (Identity, Data, Device, Apps, Infrastructure) within the scope.
    */
    private ?array $averageComparativeScores = null;
    
    /**
     * @var string|null $azureTenantId GUID string for tenant ID.
    */
    private ?string $azureTenantId = null;
    
    /**
     * @var array<ControlScore>|null $controlScores Contains tenant scores for a set of controls.
    */
    private ?array $controlScores = null;
    
    /**
     * @var DateTime|null $createdDateTime The date when the entity is created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var float|null $currentScore Tenant current attained score on specified date.
    */
    private ?float $currentScore = null;
    
    /**
     * @var array<string>|null $enabledServices Microsoft-provided services for the tenant (for example, Exchange online, Skype, Sharepoint).
    */
    private ?array $enabledServices = null;
    
    /**
     * @var int|null $licensedUserCount Licensed user count of the given tenant.
    */
    private ?int $licensedUserCount = null;
    
    /**
     * @var float|null $maxScore Tenant maximum possible score on specified date.
    */
    private ?float $maxScore = null;
    
    /**
     * @var SecurityVendorInformation|null $vendorInformation Complex type containing details about the security product/service vendor, provider, and subprovider (for example, vendor=Microsoft; provider=SecureScore). Required.
    */
    private ?SecurityVendorInformation $vendorInformation = null;
    
    /**
     * Instantiates a new SecureScore and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.secureScore');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SecureScore
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SecureScore {
        return new SecureScore();
    }

    /**
     * Gets the activeUserCount property value. Active user count of the given tenant.
     * @return int|null
    */
    public function getActiveUserCount(): ?int {
        return $this->activeUserCount;
    }

    /**
     * Gets the averageComparativeScores property value. Average score by different scopes (for example, average by industry, average by seating) and control category (Identity, Data, Device, Apps, Infrastructure) within the scope.
     * @return array<AverageComparativeScore>|null
    */
    public function getAverageComparativeScores(): ?array {
        return $this->averageComparativeScores;
    }

    /**
     * Gets the azureTenantId property value. GUID string for tenant ID.
     * @return string|null
    */
    public function getAzureTenantId(): ?string {
        return $this->azureTenantId;
    }

    /**
     * Gets the controlScores property value. Contains tenant scores for a set of controls.
     * @return array<ControlScore>|null
    */
    public function getControlScores(): ?array {
        return $this->controlScores;
    }

    /**
     * Gets the createdDateTime property value. The date when the entity is created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the currentScore property value. Tenant current attained score on specified date.
     * @return float|null
    */
    public function getCurrentScore(): ?float {
        return $this->currentScore;
    }

    /**
     * Gets the enabledServices property value. Microsoft-provided services for the tenant (for example, Exchange online, Skype, Sharepoint).
     * @return array<string>|null
    */
    public function getEnabledServices(): ?array {
        return $this->enabledServices;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeUserCount' => function (ParseNode $n) use ($o) { $o->setActiveUserCount($n->getIntegerValue()); },
            'averageComparativeScores' => function (ParseNode $n) use ($o) { $o->setAverageComparativeScores($n->getCollectionOfObjectValues(array(AverageComparativeScore::class, 'createFromDiscriminatorValue'))); },
            'azureTenantId' => function (ParseNode $n) use ($o) { $o->setAzureTenantId($n->getStringValue()); },
            'controlScores' => function (ParseNode $n) use ($o) { $o->setControlScores($n->getCollectionOfObjectValues(array(ControlScore::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'currentScore' => function (ParseNode $n) use ($o) { $o->setCurrentScore($n->getFloatValue()); },
            'enabledServices' => function (ParseNode $n) use ($o) { $o->setEnabledServices($n->getCollectionOfPrimitiveValues()); },
            'licensedUserCount' => function (ParseNode $n) use ($o) { $o->setLicensedUserCount($n->getIntegerValue()); },
            'maxScore' => function (ParseNode $n) use ($o) { $o->setMaxScore($n->getFloatValue()); },
            'vendorInformation' => function (ParseNode $n) use ($o) { $o->setVendorInformation($n->getObjectValue(array(SecurityVendorInformation::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the licensedUserCount property value. Licensed user count of the given tenant.
     * @return int|null
    */
    public function getLicensedUserCount(): ?int {
        return $this->licensedUserCount;
    }

    /**
     * Gets the maxScore property value. Tenant maximum possible score on specified date.
     * @return float|null
    */
    public function getMaxScore(): ?float {
        return $this->maxScore;
    }

    /**
     * Gets the vendorInformation property value. Complex type containing details about the security product/service vendor, provider, and subprovider (for example, vendor=Microsoft; provider=SecureScore). Required.
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
        $writer->writeIntegerValue('activeUserCount', $this->activeUserCount);
        $writer->writeCollectionOfObjectValues('averageComparativeScores', $this->averageComparativeScores);
        $writer->writeStringValue('azureTenantId', $this->azureTenantId);
        $writer->writeCollectionOfObjectValues('controlScores', $this->controlScores);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeFloatValue('currentScore', $this->currentScore);
        $writer->writeCollectionOfPrimitiveValues('enabledServices', $this->enabledServices);
        $writer->writeIntegerValue('licensedUserCount', $this->licensedUserCount);
        $writer->writeFloatValue('maxScore', $this->maxScore);
        $writer->writeObjectValue('vendorInformation', $this->vendorInformation);
    }

    /**
     * Sets the activeUserCount property value. Active user count of the given tenant.
     *  @param int|null $value Value to set for the activeUserCount property.
    */
    public function setActiveUserCount(?int $value ): void {
        $this->activeUserCount = $value;
    }

    /**
     * Sets the averageComparativeScores property value. Average score by different scopes (for example, average by industry, average by seating) and control category (Identity, Data, Device, Apps, Infrastructure) within the scope.
     *  @param array<AverageComparativeScore>|null $value Value to set for the averageComparativeScores property.
    */
    public function setAverageComparativeScores(?array $value ): void {
        $this->averageComparativeScores = $value;
    }

    /**
     * Sets the azureTenantId property value. GUID string for tenant ID.
     *  @param string|null $value Value to set for the azureTenantId property.
    */
    public function setAzureTenantId(?string $value ): void {
        $this->azureTenantId = $value;
    }

    /**
     * Sets the controlScores property value. Contains tenant scores for a set of controls.
     *  @param array<ControlScore>|null $value Value to set for the controlScores property.
    */
    public function setControlScores(?array $value ): void {
        $this->controlScores = $value;
    }

    /**
     * Sets the createdDateTime property value. The date when the entity is created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the currentScore property value. Tenant current attained score on specified date.
     *  @param float|null $value Value to set for the currentScore property.
    */
    public function setCurrentScore(?float $value ): void {
        $this->currentScore = $value;
    }

    /**
     * Sets the enabledServices property value. Microsoft-provided services for the tenant (for example, Exchange online, Skype, Sharepoint).
     *  @param array<string>|null $value Value to set for the enabledServices property.
    */
    public function setEnabledServices(?array $value ): void {
        $this->enabledServices = $value;
    }

    /**
     * Sets the licensedUserCount property value. Licensed user count of the given tenant.
     *  @param int|null $value Value to set for the licensedUserCount property.
    */
    public function setLicensedUserCount(?int $value ): void {
        $this->licensedUserCount = $value;
    }

    /**
     * Sets the maxScore property value. Tenant maximum possible score on specified date.
     *  @param float|null $value Value to set for the maxScore property.
    */
    public function setMaxScore(?float $value ): void {
        $this->maxScore = $value;
    }

    /**
     * Sets the vendorInformation property value. Complex type containing details about the security product/service vendor, provider, and subprovider (for example, vendor=Microsoft; provider=SecureScore). Required.
     *  @param SecurityVendorInformation|null $value Value to set for the vendorInformation property.
    */
    public function setVendorInformation(?SecurityVendorInformation $value ): void {
        $this->vendorInformation = $value;
    }

}
