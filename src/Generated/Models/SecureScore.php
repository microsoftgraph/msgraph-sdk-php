<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SecureScore extends Entity implements Parsable 
{
    /**
     * Instantiates a new secureScore and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->getBackingStore()->get('activeUserCount');
    }

    /**
     * Gets the averageComparativeScores property value. Average score by different scopes (for example, average by industry, average by seating) and control category (Identity, Data, Device, Apps, Infrastructure) within the scope.
     * @return array<AverageComparativeScore>|null
    */
    public function getAverageComparativeScores(): ?array {
        return $this->getBackingStore()->get('averageComparativeScores');
    }

    /**
     * Gets the azureTenantId property value. GUID string for tenant ID.
     * @return string|null
    */
    public function getAzureTenantId(): ?string {
        return $this->getBackingStore()->get('azureTenantId');
    }

    /**
     * Gets the controlScores property value. Contains tenant scores for a set of controls.
     * @return array<ControlScore>|null
    */
    public function getControlScores(): ?array {
        return $this->getBackingStore()->get('controlScores');
    }

    /**
     * Gets the createdDateTime property value. The date when the entity is created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the currentScore property value. Tenant current attained score on specified date.
     * @return float|null
    */
    public function getCurrentScore(): ?float {
        return $this->getBackingStore()->get('currentScore');
    }

    /**
     * Gets the enabledServices property value. Microsoft-provided services for the tenant (for example, Exchange online, Skype, Sharepoint).
     * @return array<string>|null
    */
    public function getEnabledServices(): ?array {
        return $this->getBackingStore()->get('enabledServices');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeUserCount' => fn(ParseNode $n) => $o->setActiveUserCount($n->getIntegerValue()),
            'averageComparativeScores' => fn(ParseNode $n) => $o->setAverageComparativeScores($n->getCollectionOfObjectValues([AverageComparativeScore::class, 'createFromDiscriminatorValue'])),
            'azureTenantId' => fn(ParseNode $n) => $o->setAzureTenantId($n->getStringValue()),
            'controlScores' => fn(ParseNode $n) => $o->setControlScores($n->getCollectionOfObjectValues([ControlScore::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'currentScore' => fn(ParseNode $n) => $o->setCurrentScore($n->getFloatValue()),
            'enabledServices' => fn(ParseNode $n) => $o->setEnabledServices($n->getCollectionOfPrimitiveValues()),
            'licensedUserCount' => fn(ParseNode $n) => $o->setLicensedUserCount($n->getIntegerValue()),
            'maxScore' => fn(ParseNode $n) => $o->setMaxScore($n->getFloatValue()),
            'vendorInformation' => fn(ParseNode $n) => $o->setVendorInformation($n->getObjectValue([SecurityVendorInformation::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the licensedUserCount property value. Licensed user count of the given tenant.
     * @return int|null
    */
    public function getLicensedUserCount(): ?int {
        return $this->getBackingStore()->get('licensedUserCount');
    }

    /**
     * Gets the maxScore property value. Tenant maximum possible score on specified date.
     * @return float|null
    */
    public function getMaxScore(): ?float {
        return $this->getBackingStore()->get('maxScore');
    }

    /**
     * Gets the vendorInformation property value. Complex type containing details about the security product/service vendor, provider, and subprovider (for example, vendor=Microsoft; provider=SecureScore). Required.
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
        $writer->writeIntegerValue('activeUserCount', $this->getActiveUserCount());
        $writer->writeCollectionOfObjectValues('averageComparativeScores', $this->getAverageComparativeScores());
        $writer->writeStringValue('azureTenantId', $this->getAzureTenantId());
        $writer->writeCollectionOfObjectValues('controlScores', $this->getControlScores());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeFloatValue('currentScore', $this->getCurrentScore());
        $writer->writeCollectionOfPrimitiveValues('enabledServices', $this->getEnabledServices());
        $writer->writeIntegerValue('licensedUserCount', $this->getLicensedUserCount());
        $writer->writeFloatValue('maxScore', $this->getMaxScore());
        $writer->writeObjectValue('vendorInformation', $this->getVendorInformation());
    }

    /**
     * Sets the activeUserCount property value. Active user count of the given tenant.
     *  @param int|null $value Value to set for the activeUserCount property.
    */
    public function setActiveUserCount(?int $value): void {
        $this->getBackingStore()->set('activeUserCount', $value);
    }

    /**
     * Sets the averageComparativeScores property value. Average score by different scopes (for example, average by industry, average by seating) and control category (Identity, Data, Device, Apps, Infrastructure) within the scope.
     *  @param array<AverageComparativeScore>|null $value Value to set for the averageComparativeScores property.
    */
    public function setAverageComparativeScores(?array $value): void {
        $this->getBackingStore()->set('averageComparativeScores', $value);
    }

    /**
     * Sets the azureTenantId property value. GUID string for tenant ID.
     *  @param string|null $value Value to set for the azureTenantId property.
    */
    public function setAzureTenantId(?string $value): void {
        $this->getBackingStore()->set('azureTenantId', $value);
    }

    /**
     * Sets the controlScores property value. Contains tenant scores for a set of controls.
     *  @param array<ControlScore>|null $value Value to set for the controlScores property.
    */
    public function setControlScores(?array $value): void {
        $this->getBackingStore()->set('controlScores', $value);
    }

    /**
     * Sets the createdDateTime property value. The date when the entity is created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the currentScore property value. Tenant current attained score on specified date.
     *  @param float|null $value Value to set for the currentScore property.
    */
    public function setCurrentScore(?float $value): void {
        $this->getBackingStore()->set('currentScore', $value);
    }

    /**
     * Sets the enabledServices property value. Microsoft-provided services for the tenant (for example, Exchange online, Skype, Sharepoint).
     *  @param array<string>|null $value Value to set for the enabledServices property.
    */
    public function setEnabledServices(?array $value): void {
        $this->getBackingStore()->set('enabledServices', $value);
    }

    /**
     * Sets the licensedUserCount property value. Licensed user count of the given tenant.
     *  @param int|null $value Value to set for the licensedUserCount property.
    */
    public function setLicensedUserCount(?int $value): void {
        $this->getBackingStore()->set('licensedUserCount', $value);
    }

    /**
     * Sets the maxScore property value. Tenant maximum possible score on specified date.
     *  @param float|null $value Value to set for the maxScore property.
    */
    public function setMaxScore(?float $value): void {
        $this->getBackingStore()->set('maxScore', $value);
    }

    /**
     * Sets the vendorInformation property value. Complex type containing details about the security product/service vendor, provider, and subprovider (for example, vendor=Microsoft; provider=SecureScore). Required.
     *  @param SecurityVendorInformation|null $value Value to set for the vendorInformation property.
    */
    public function setVendorInformation(?SecurityVendorInformation $value): void {
        $this->getBackingStore()->set('vendorInformation', $value);
    }

}
