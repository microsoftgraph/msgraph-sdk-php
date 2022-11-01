<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkforceIntegration extends ChangeTrackedEntity implements Parsable 
{
    /**
     * @var int|null $apiVersion API version for the call back URL. Start with 1.
    */
    private ?int $apiVersion = null;
    
    /**
     * @var string|null $displayName Name of the workforce integration.
    */
    private ?string $displayName = null;
    
    /**
     * @var WorkforceIntegrationEncryption|null $encryption The workforce integration encryption resource.
    */
    private ?WorkforceIntegrationEncryption $encryption = null;
    
    /**
     * @var bool|null $isActive Indicates whether this workforce integration is currently active and available.
    */
    private ?bool $isActive = null;
    
    /**
     * @var WorkforceIntegrationSupportedEntities|null $supportedEntities The Shifts entities supported for synchronous change notifications. Shifts will make a call back to the url provided on client changes on those entities added here. By default, no entities are supported for change notifications. Possible values are: none, shift, swapRequest, userShiftPreferences, openshift, openShiftRequest, offerShiftRequest, unknownFutureValue.
    */
    private ?WorkforceIntegrationSupportedEntities $supportedEntities = null;
    
    /**
     * @var string|null $url Workforce Integration URL for callbacks from the Shifts service.
    */
    private ?string $url = null;
    
    /**
     * Instantiates a new WorkforceIntegration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.workforceIntegration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkforceIntegration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkforceIntegration {
        return new WorkforceIntegration();
    }

    /**
     * Gets the apiVersion property value. API version for the call back URL. Start with 1.
     * @return int|null
    */
    public function getApiVersion(): ?int {
        return $this->apiVersion;
    }

    /**
     * Gets the displayName property value. Name of the workforce integration.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the encryption property value. The workforce integration encryption resource.
     * @return WorkforceIntegrationEncryption|null
    */
    public function getEncryption(): ?WorkforceIntegrationEncryption {
        return $this->encryption;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'apiVersion' => fn(ParseNode $n) => $o->setApiVersion($n->getIntegerValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'encryption' => fn(ParseNode $n) => $o->setEncryption($n->getObjectValue([WorkforceIntegrationEncryption::class, 'createFromDiscriminatorValue'])),
            'isActive' => fn(ParseNode $n) => $o->setIsActive($n->getBooleanValue()),
            'supportedEntities' => fn(ParseNode $n) => $o->setSupportedEntities($n->getEnumValue(WorkforceIntegrationSupportedEntities::class)),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isActive property value. Indicates whether this workforce integration is currently active and available.
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        return $this->isActive;
    }

    /**
     * Gets the supportedEntities property value. The Shifts entities supported for synchronous change notifications. Shifts will make a call back to the url provided on client changes on those entities added here. By default, no entities are supported for change notifications. Possible values are: none, shift, swapRequest, userShiftPreferences, openshift, openShiftRequest, offerShiftRequest, unknownFutureValue.
     * @return WorkforceIntegrationSupportedEntities|null
    */
    public function getSupportedEntities(): ?WorkforceIntegrationSupportedEntities {
        return $this->supportedEntities;
    }

    /**
     * Gets the url property value. Workforce Integration URL for callbacks from the Shifts service.
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->url;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('apiVersion', $this->apiVersion);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('encryption', $this->encryption);
        $writer->writeBooleanValue('isActive', $this->isActive);
        $writer->writeEnumValue('supportedEntities', $this->supportedEntities);
        $writer->writeStringValue('url', $this->url);
    }

    /**
     * Sets the apiVersion property value. API version for the call back URL. Start with 1.
     *  @param int|null $value Value to set for the apiVersion property.
    */
    public function setApiVersion(?int $value ): void {
        $this->apiVersion = $value;
    }

    /**
     * Sets the displayName property value. Name of the workforce integration.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the encryption property value. The workforce integration encryption resource.
     *  @param WorkforceIntegrationEncryption|null $value Value to set for the encryption property.
    */
    public function setEncryption(?WorkforceIntegrationEncryption $value ): void {
        $this->encryption = $value;
    }

    /**
     * Sets the isActive property value. Indicates whether this workforce integration is currently active and available.
     *  @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value ): void {
        $this->isActive = $value;
    }

    /**
     * Sets the supportedEntities property value. The Shifts entities supported for synchronous change notifications. Shifts will make a call back to the url provided on client changes on those entities added here. By default, no entities are supported for change notifications. Possible values are: none, shift, swapRequest, userShiftPreferences, openshift, openShiftRequest, offerShiftRequest, unknownFutureValue.
     *  @param WorkforceIntegrationSupportedEntities|null $value Value to set for the supportedEntities property.
    */
    public function setSupportedEntities(?WorkforceIntegrationSupportedEntities $value ): void {
        $this->supportedEntities = $value;
    }

    /**
     * Sets the url property value. Workforce Integration URL for callbacks from the Shifts service.
     *  @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value ): void {
        $this->url = $value;
    }

}