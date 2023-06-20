<?php

namespace Microsoft\Graph\Generated\Models\ExternalConnectors;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DisplayTemplate implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DisplayTemplate and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DisplayTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DisplayTemplate {
        return new DisplayTemplate();
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
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'layout' => fn(ParseNode $n) => $o->setLayout($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'rules' => fn(ParseNode $n) => $o->setRules($n->getCollectionOfObjectValues([PropertyRule::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the id property value. The text identifier for the display template; for example, contosoTickets. Maximum 16 characters. Only alphanumeric characters allowed.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->getBackingStore()->get('id');
    }

    /**
     * Gets the layout property value. The layout property
     * @return Json|null
    */
    public function getLayout(): ?Json {
        return $this->getBackingStore()->get('layout');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the priority property value. Defines the priority of a display template. A display template with priority 1 is evaluated before a template with priority 4. Gaps in priority values are supported. Must be positive value.
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->getBackingStore()->get('priority');
    }

    /**
     * Gets the rules property value. Specifies additional rules for selecting this display template based on the item schema. Optional.
     * @return array<PropertyRule>|null
    */
    public function getRules(): ?array {
        return $this->getBackingStore()->get('rules');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('id', $this->getId());
        $writer->writeObjectValue('layout', $this->getLayout());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('priority', $this->getPriority());
        $writer->writeCollectionOfObjectValues('rules', $this->getRules());
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
     * Sets the id property value. The text identifier for the display template; for example, contosoTickets. Maximum 16 characters. Only alphanumeric characters allowed.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the layout property value. The layout property
     * @param Json|null $value Value to set for the layout property.
    */
    public function setLayout(?Json $value): void {
        $this->getBackingStore()->set('layout', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the priority property value. Defines the priority of a display template. A display template with priority 1 is evaluated before a template with priority 4. Gaps in priority values are supported. Must be positive value.
     * @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the rules property value. Specifies additional rules for selecting this display template based on the item schema. Optional.
     * @param array<PropertyRule>|null $value Value to set for the rules property.
    */
    public function setRules(?array $value): void {
        $this->getBackingStore()->set('rules', $value);
    }

}
