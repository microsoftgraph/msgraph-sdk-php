<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Generated\Models\CustomExtensionData;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomTaskExtensionCallbackData extends CustomExtensionData implements Parsable 
{
    /**
     * Instantiates a new customTaskExtensionCallbackData and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.customTaskExtensionCallbackData');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomTaskExtensionCallbackData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomTaskExtensionCallbackData {
        return new CustomTaskExtensionCallbackData();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'operationStatus' => fn(ParseNode $n) => $o->setOperationStatus($n->getEnumValue(CustomTaskExtensionOperationStatus::class)),
        ]);
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
     * Gets the operationStatus property value. Operation status that's provided by the Azure Logic App indicating whenever the Azure Logic App has run successfully or not. Supported values: completed, failed, unknownFutureValue.
     * @return CustomTaskExtensionOperationStatus|null
    */
    public function getOperationStatus(): ?CustomTaskExtensionOperationStatus {
        $val = $this->getBackingStore()->get('operationStatus');
        if (is_null($val) || $val instanceof CustomTaskExtensionOperationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operationStatus'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('operationStatus', $this->getOperationStatus());
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the operationStatus property value. Operation status that's provided by the Azure Logic App indicating whenever the Azure Logic App has run successfully or not. Supported values: completed, failed, unknownFutureValue.
     * @param CustomTaskExtensionOperationStatus|null $value Value to set for the operationStatus property.
    */
    public function setOperationStatus(?CustomTaskExtensionOperationStatus $value): void {
        $this->getBackingStore()->set('operationStatus', $value);
    }

}
