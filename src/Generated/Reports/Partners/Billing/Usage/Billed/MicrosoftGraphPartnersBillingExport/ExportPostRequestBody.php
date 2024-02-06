<?php

namespace Microsoft\Graph\Generated\Reports\Partners\Billing\Usage\Billed\MicrosoftGraphPartnersBillingExport;

use Microsoft\Graph\Generated\Models\Partners\Billing\AttributeSet;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ExportPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new exportPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExportPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExportPostRequestBody {
        return new ExportPostRequestBody();
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
     * Gets the attributeSet property value. The attributeSet property
     * @return AttributeSet|null
    */
    public function getAttributeSet(): ?AttributeSet {
        $val = $this->getBackingStore()->get('attributeSet');
        if (is_null($val) || $val instanceof AttributeSet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attributeSet'");
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
            'attributeSet' => fn(ParseNode $n) => $o->setAttributeSet($n->getEnumValue(AttributeSet::class)),
            'invoiceId' => fn(ParseNode $n) => $o->setInvoiceId($n->getStringValue()),
        ];
    }

    /**
     * Gets the invoiceId property value. The invoiceId property
     * @return string|null
    */
    public function getInvoiceId(): ?string {
        $val = $this->getBackingStore()->get('invoiceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'invoiceId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('attributeSet', $this->getAttributeSet());
        $writer->writeStringValue('invoiceId', $this->getInvoiceId());
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
     * Sets the attributeSet property value. The attributeSet property
     * @param AttributeSet|null $value Value to set for the attributeSet property.
    */
    public function setAttributeSet(?AttributeSet $value): void {
        $this->getBackingStore()->set('attributeSet', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the invoiceId property value. The invoiceId property
     * @param string|null $value Value to set for the invoiceId property.
    */
    public function setInvoiceId(?string $value): void {
        $this->getBackingStore()->set('invoiceId', $value);
    }

}
