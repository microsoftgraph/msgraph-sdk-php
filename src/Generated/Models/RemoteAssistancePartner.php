<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RemoteAssistancePartner extends Entity implements Parsable 
{
    /**
     * @var string|null $displayName Display name of the partner.
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $lastConnectionDateTime Timestamp of the last request sent to Intune by the TEM partner.
    */
    private ?DateTime $lastConnectionDateTime = null;
    
    /**
     * @var RemoteAssistanceOnboardingStatus|null $onboardingStatus The current TeamViewer connector status
    */
    private ?RemoteAssistanceOnboardingStatus $onboardingStatus = null;
    
    /**
     * @var string|null $onboardingUrl URL of the partner's onboarding portal, where an administrator can configure their Remote Assistance service.
    */
    private ?string $onboardingUrl = null;
    
    /**
     * Instantiates a new RemoteAssistancePartner and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.remoteAssistancePartner');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RemoteAssistancePartner
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RemoteAssistancePartner {
        return new RemoteAssistancePartner();
    }

    /**
     * Gets the displayName property value. Display name of the partner.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'lastConnectionDateTime' => function (ParseNode $n) use ($o) { $o->setLastConnectionDateTime($n->getDateTimeValue()); },
            'onboardingStatus' => function (ParseNode $n) use ($o) { $o->setOnboardingStatus($n->getEnumValue(RemoteAssistanceOnboardingStatus::class)); },
            'onboardingUrl' => function (ParseNode $n) use ($o) { $o->setOnboardingUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastConnectionDateTime property value. Timestamp of the last request sent to Intune by the TEM partner.
     * @return DateTime|null
    */
    public function getLastConnectionDateTime(): ?DateTime {
        return $this->lastConnectionDateTime;
    }

    /**
     * Gets the onboardingStatus property value. The current TeamViewer connector status
     * @return RemoteAssistanceOnboardingStatus|null
    */
    public function getOnboardingStatus(): ?RemoteAssistanceOnboardingStatus {
        return $this->onboardingStatus;
    }

    /**
     * Gets the onboardingUrl property value. URL of the partner's onboarding portal, where an administrator can configure their Remote Assistance service.
     * @return string|null
    */
    public function getOnboardingUrl(): ?string {
        return $this->onboardingUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastConnectionDateTime', $this->lastConnectionDateTime);
        $writer->writeEnumValue('onboardingStatus', $this->onboardingStatus);
        $writer->writeStringValue('onboardingUrl', $this->onboardingUrl);
    }

    /**
     * Sets the displayName property value. Display name of the partner.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastConnectionDateTime property value. Timestamp of the last request sent to Intune by the TEM partner.
     *  @param DateTime|null $value Value to set for the lastConnectionDateTime property.
    */
    public function setLastConnectionDateTime(?DateTime $value ): void {
        $this->lastConnectionDateTime = $value;
    }

    /**
     * Sets the onboardingStatus property value. The current TeamViewer connector status
     *  @param RemoteAssistanceOnboardingStatus|null $value Value to set for the onboardingStatus property.
    */
    public function setOnboardingStatus(?RemoteAssistanceOnboardingStatus $value ): void {
        $this->onboardingStatus = $value;
    }

    /**
     * Sets the onboardingUrl property value. URL of the partner's onboarding portal, where an administrator can configure their Remote Assistance service.
     *  @param string|null $value Value to set for the onboardingUrl property.
    */
    public function setOnboardingUrl(?string $value ): void {
        $this->onboardingUrl = $value;
    }

}
