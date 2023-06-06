<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class LoginPageLayoutConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new loginPageLayoutConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LoginPageLayoutConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LoginPageLayoutConfiguration {
        return new LoginPageLayoutConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'isFooterShown' => fn(ParseNode $n) => $o->setIsFooterShown($n->getBooleanValue()),
            'isHeaderShown' => fn(ParseNode $n) => $o->setIsHeaderShown($n->getBooleanValue()),
            'layoutTemplateType' => fn(ParseNode $n) => $o->setLayoutTemplateType($n->getEnumValue(LayoutTemplateType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isFooterShown property value. The isFooterShown property
     * @return bool|null
    */
    public function getIsFooterShown(): ?bool {
        return $this->getBackingStore()->get('isFooterShown');
    }

    /**
     * Gets the isHeaderShown property value. The isHeaderShown property
     * @return bool|null
    */
    public function getIsHeaderShown(): ?bool {
        return $this->getBackingStore()->get('isHeaderShown');
    }

    /**
     * Gets the layoutTemplateType property value. The layoutTemplateType property
     * @return LayoutTemplateType|null
    */
    public function getLayoutTemplateType(): ?LayoutTemplateType {
        return $this->getBackingStore()->get('layoutTemplateType');
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
        $writer->writeBooleanValue('isFooterShown', $this->getIsFooterShown());
        $writer->writeBooleanValue('isHeaderShown', $this->getIsHeaderShown());
        $writer->writeEnumValue('layoutTemplateType', $this->getLayoutTemplateType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the isFooterShown property value. The isFooterShown property
     * @param bool|null $value Value to set for the isFooterShown property.
    */
    public function setIsFooterShown(?bool $value): void {
        $this->getBackingStore()->set('isFooterShown', $value);
    }

    /**
     * Sets the isHeaderShown property value. The isHeaderShown property
     * @param bool|null $value Value to set for the isHeaderShown property.
    */
    public function setIsHeaderShown(?bool $value): void {
        $this->getBackingStore()->set('isHeaderShown', $value);
    }

    /**
     * Sets the layoutTemplateType property value. The layoutTemplateType property
     * @param LayoutTemplateType|null $value Value to set for the layoutTemplateType property.
    */
    public function setLayoutTemplateType(?LayoutTemplateType $value): void {
        $this->getBackingStore()->set('layoutTemplateType', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
