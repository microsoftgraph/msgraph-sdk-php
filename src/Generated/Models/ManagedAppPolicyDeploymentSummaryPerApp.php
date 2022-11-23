<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ManagedAppPolicyDeploymentSummaryPerApp implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new managedAppPolicyDeploymentSummaryPerApp and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the configurationAppliedUserCount property value. Number of users the policy is applied.
     * @return int|null
    */
    public function getConfigurationAppliedUserCount(): ?int {
        return $this->getBackingStore()->get('configurationAppliedUserCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'configurationAppliedUserCount' => fn(ParseNode $n) => $o->setConfigurationAppliedUserCount($n->getIntegerValue()),
            'mobileAppIdentifier' => fn(ParseNode $n) => $o->setMobileAppIdentifier($n->getObjectValue([MobileAppIdentifier::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the mobileAppIdentifier property value. Deployment of an app.
     * @return MobileAppIdentifier|null
    */
    public function getMobileAppIdentifier(): ?MobileAppIdentifier {
        return $this->getBackingStore()->get('mobileAppIdentifier');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('configurationAppliedUserCount', $this->getConfigurationAppliedUserCount());
        $writer->writeObjectValue('mobileAppIdentifier', $this->getMobileAppIdentifier());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the configurationAppliedUserCount property value. Number of users the policy is applied.
     *  @param int|null $value Value to set for the configurationAppliedUserCount property.
    */
    public function setConfigurationAppliedUserCount(?int $value): void {
        $this->getBackingStore()->set('configurationAppliedUserCount', $value);
    }

    /**
     * Sets the mobileAppIdentifier property value. Deployment of an app.
     *  @param MobileAppIdentifier|null $value Value to set for the mobileAppIdentifier property.
    */
    public function setMobileAppIdentifier(?MobileAppIdentifier $value): void {
        $this->getBackingStore()->set('mobileAppIdentifier', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
