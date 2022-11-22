<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ConditionalAccessApplications implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new conditionalAccessApplications and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessApplications
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessApplications {
        return new ConditionalAccessApplications();
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
     * Gets the excludeApplications property value. Can be one of the following:  The list of client IDs (appId) explicitly excluded from the policy. Office365 - For the list of apps included in Office365, see Conditional Access target apps: Office 365
     * @return array<string>|null
    */
    public function getExcludeApplications(): ?array {
        return $this->getBackingStore()->get('excludeApplications');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'excludeApplications' => fn(ParseNode $n) => $o->setExcludeApplications($n->getCollectionOfPrimitiveValues()),
            'includeApplications' => fn(ParseNode $n) => $o->setIncludeApplications($n->getCollectionOfPrimitiveValues()),
            'includeAuthenticationContextClassReferences' => fn(ParseNode $n) => $o->setIncludeAuthenticationContextClassReferences($n->getCollectionOfPrimitiveValues()),
            'includeUserActions' => fn(ParseNode $n) => $o->setIncludeUserActions($n->getCollectionOfPrimitiveValues()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the includeApplications property value. Can be one of the following:  The list of client IDs (appId) the policy applies to, unless explicitly excluded (in excludeApplications)  All  Office365 - For the list of apps included in Office365, see Conditional Access target apps: Office 365
     * @return array<string>|null
    */
    public function getIncludeApplications(): ?array {
        return $this->getBackingStore()->get('includeApplications');
    }

    /**
     * Gets the includeAuthenticationContextClassReferences property value. The includeAuthenticationContextClassReferences property
     * @return array<string>|null
    */
    public function getIncludeAuthenticationContextClassReferences(): ?array {
        return $this->getBackingStore()->get('includeAuthenticationContextClassReferences');
    }

    /**
     * Gets the includeUserActions property value. User actions to include. Supported values are urn:user:registersecurityinfo and urn:user:registerdevice
     * @return array<string>|null
    */
    public function getIncludeUserActions(): ?array {
        return $this->getBackingStore()->get('includeUserActions');
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
        $writer->writeCollectionOfPrimitiveValues('excludeApplications', $this->getExcludeApplications());
        $writer->writeCollectionOfPrimitiveValues('includeApplications', $this->getIncludeApplications());
        $writer->writeCollectionOfPrimitiveValues('includeAuthenticationContextClassReferences', $this->getIncludeAuthenticationContextClassReferences());
        $writer->writeCollectionOfPrimitiveValues('includeUserActions', $this->getIncludeUserActions());
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
     * Sets the excludeApplications property value. Can be one of the following:  The list of client IDs (appId) explicitly excluded from the policy. Office365 - For the list of apps included in Office365, see Conditional Access target apps: Office 365
     *  @param array<string>|null $value Value to set for the excludeApplications property.
    */
    public function setExcludeApplications(?array $value): void {
        $this->getBackingStore()->set('excludeApplications', $value);
    }

    /**
     * Sets the includeApplications property value. Can be one of the following:  The list of client IDs (appId) the policy applies to, unless explicitly excluded (in excludeApplications)  All  Office365 - For the list of apps included in Office365, see Conditional Access target apps: Office 365
     *  @param array<string>|null $value Value to set for the includeApplications property.
    */
    public function setIncludeApplications(?array $value): void {
        $this->getBackingStore()->set('includeApplications', $value);
    }

    /**
     * Sets the includeAuthenticationContextClassReferences property value. The includeAuthenticationContextClassReferences property
     *  @param array<string>|null $value Value to set for the includeAuthenticationContextClassReferences property.
    */
    public function setIncludeAuthenticationContextClassReferences(?array $value): void {
        $this->getBackingStore()->set('includeAuthenticationContextClassReferences', $value);
    }

    /**
     * Sets the includeUserActions property value. User actions to include. Supported values are urn:user:registersecurityinfo and urn:user:registerdevice
     *  @param array<string>|null $value Value to set for the includeUserActions property.
    */
    public function setIncludeUserActions(?array $value): void {
        $this->getBackingStore()->set('includeUserActions', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
