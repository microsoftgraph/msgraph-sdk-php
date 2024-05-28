<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ContentCustomization implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ContentCustomization and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ContentCustomization
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ContentCustomization {
        return new ContentCustomization();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the attributeCollection property value. Represents the content options of External Identities to be customized throughout the authentication flow for a tenant.
     * @return array<KeyValue>|null
    */
    public function getAttributeCollection(): ?array {
        $val = $this->getBackingStore()->get('attributeCollection');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyValue::class);
            /** @var array<KeyValue>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attributeCollection'");
    }

    /**
     * Gets the attributeCollectionRelativeUrl property value. A relative URL for the content options of External Identities to be customized throughout the authentication flow for a tenant.
     * @return string|null
    */
    public function getAttributeCollectionRelativeUrl(): ?string {
        $val = $this->getBackingStore()->get('attributeCollectionRelativeUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attributeCollectionRelativeUrl'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attributeCollection' => fn(ParseNode $n) => $o->setAttributeCollection($n->getCollectionOfObjectValues([KeyValue::class, 'createFromDiscriminatorValue'])),
            'attributeCollectionRelativeUrl' => fn(ParseNode $n) => $o->setAttributeCollectionRelativeUrl($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'registrationCampaign' => fn(ParseNode $n) => $o->setRegistrationCampaign($n->getCollectionOfObjectValues([KeyValue::class, 'createFromDiscriminatorValue'])),
            'registrationCampaignRelativeUrl' => fn(ParseNode $n) => $o->setRegistrationCampaignRelativeUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the registrationCampaign property value. Represents content options to customize during MFA proofup interruptions.
     * @return array<KeyValue>|null
    */
    public function getRegistrationCampaign(): ?array {
        $val = $this->getBackingStore()->get('registrationCampaign');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyValue::class);
            /** @var array<KeyValue>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registrationCampaign'");
    }

    /**
     * Gets the registrationCampaignRelativeUrl property value. The relative URL of the content options to customize during MFA proofup interruptions.
     * @return string|null
    */
    public function getRegistrationCampaignRelativeUrl(): ?string {
        $val = $this->getBackingStore()->get('registrationCampaignRelativeUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registrationCampaignRelativeUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('attributeCollection', $this->getAttributeCollection());
        $writer->writeStringValue('attributeCollectionRelativeUrl', $this->getAttributeCollectionRelativeUrl());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('registrationCampaign', $this->getRegistrationCampaign());
        $writer->writeStringValue('registrationCampaignRelativeUrl', $this->getRegistrationCampaignRelativeUrl());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the attributeCollection property value. Represents the content options of External Identities to be customized throughout the authentication flow for a tenant.
     * @param array<KeyValue>|null $value Value to set for the attributeCollection property.
    */
    public function setAttributeCollection(?array $value): void {
        $this->getBackingStore()->set('attributeCollection', $value);
    }

    /**
     * Sets the attributeCollectionRelativeUrl property value. A relative URL for the content options of External Identities to be customized throughout the authentication flow for a tenant.
     * @param string|null $value Value to set for the attributeCollectionRelativeUrl property.
    */
    public function setAttributeCollectionRelativeUrl(?string $value): void {
        $this->getBackingStore()->set('attributeCollectionRelativeUrl', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the registrationCampaign property value. Represents content options to customize during MFA proofup interruptions.
     * @param array<KeyValue>|null $value Value to set for the registrationCampaign property.
    */
    public function setRegistrationCampaign(?array $value): void {
        $this->getBackingStore()->set('registrationCampaign', $value);
    }

    /**
     * Sets the registrationCampaignRelativeUrl property value. The relative URL of the content options to customize during MFA proofup interruptions.
     * @param string|null $value Value to set for the registrationCampaignRelativeUrl property.
    */
    public function setRegistrationCampaignRelativeUrl(?string $value): void {
        $this->getBackingStore()->set('registrationCampaignRelativeUrl', $value);
    }

}
