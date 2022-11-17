<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CalendarSharingMessageAction implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new calendarSharingMessageAction and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.calendarSharingMessageAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CalendarSharingMessageAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CalendarSharingMessageAction {
        return new CalendarSharingMessageAction();
    }

    /**
     * Gets the action property value. The action property
     * @return CalendarSharingAction|null
    */
    public function getAction(): ?CalendarSharingAction {
        return $this->getBackingStore()->get('action');
    }

    /**
     * Gets the actionType property value. The actionType property
     * @return CalendarSharingActionType|null
    */
    public function getActionType(): ?CalendarSharingActionType {
        return $this->getBackingStore()->get('actionType');
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'action' => fn(ParseNode $n) => $o->setAction($n->getEnumValue(CalendarSharingAction::class)),
            'actionType' => fn(ParseNode $n) => $o->setActionType($n->getEnumValue(CalendarSharingActionType::class)),
            'importance' => fn(ParseNode $n) => $o->setImportance($n->getEnumValue(CalendarSharingActionImportance::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the importance property value. The importance property
     * @return CalendarSharingActionImportance|null
    */
    public function getImportance(): ?CalendarSharingActionImportance {
        return $this->getBackingStore()->get('importance');
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
        $writer->writeEnumValue('action', $this->getAction());
        $writer->writeEnumValue('actionType', $this->getActionType());
        $writer->writeEnumValue('importance', $this->getImportance());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the action property value. The action property
     *  @param CalendarSharingAction|null $value Value to set for the action property.
    */
    public function setAction(?CalendarSharingAction $value): void {
        $this->getBackingStore()->set('action', $value);
    }

    /**
     * Sets the actionType property value. The actionType property
     *  @param CalendarSharingActionType|null $value Value to set for the actionType property.
    */
    public function setActionType(?CalendarSharingActionType $value): void {
        $this->getBackingStore()->set('actionType', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the importance property value. The importance property
     *  @param CalendarSharingActionImportance|null $value Value to set for the importance property.
    */
    public function setImportance(?CalendarSharingActionImportance $value): void {
        $this->getBackingStore()->set('importance', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
