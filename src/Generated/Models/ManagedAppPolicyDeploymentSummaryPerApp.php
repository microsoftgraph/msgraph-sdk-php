<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedAppPolicyDeploymentSummaryPerApp implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $configurationAppliedUserCount Number of users the policy is applied.
    */
    private ?int $configurationAppliedUserCount = null;
    
    /**
     * @var MobileAppIdentifier|null $mobileAppIdentifier Deployment of an app.
    */
    private ?MobileAppIdentifier $mobileAppIdentifier = null;
    
    /**
     * Instantiates a new managedAppPolicyDeploymentSummaryPerApp and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedAppPolicyDeploymentSummaryPerApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedAppPolicyDeploymentSummaryPerApp {
        return new ManagedAppPolicyDeploymentSummaryPerApp();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the configurationAppliedUserCount property value. Number of users the policy is applied.
     * @return int|null
    */
    public function getConfigurationAppliedUserCount(): ?int {
        return $this->configurationAppliedUserCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'configurationAppliedUserCount' => function (ParseNode $n) use ($o) { $o->setConfigurationAppliedUserCount($n->getIntegerValue()); },
            'mobileAppIdentifier' => function (ParseNode $n) use ($o) { $o->setMobileAppIdentifier($n->getObjectValue(array(MobileAppIdentifier::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the mobileAppIdentifier property value. Deployment of an app.
     * @return MobileAppIdentifier|null
    */
    public function getMobileAppIdentifier(): ?MobileAppIdentifier {
        return $this->mobileAppIdentifier;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('configurationAppliedUserCount', $this->configurationAppliedUserCount);
        $writer->writeObjectValue('mobileAppIdentifier', $this->mobileAppIdentifier);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the configurationAppliedUserCount property value. Number of users the policy is applied.
     *  @param int|null $value Value to set for the configurationAppliedUserCount property.
    */
    public function setConfigurationAppliedUserCount(?int $value ): void {
        $this->configurationAppliedUserCount = $value;
    }

    /**
     * Sets the mobileAppIdentifier property value. Deployment of an app.
     *  @param MobileAppIdentifier|null $value Value to set for the mobileAppIdentifier property.
    */
    public function setMobileAppIdentifier(?MobileAppIdentifier $value ): void {
        $this->mobileAppIdentifier = $value;
    }

}
