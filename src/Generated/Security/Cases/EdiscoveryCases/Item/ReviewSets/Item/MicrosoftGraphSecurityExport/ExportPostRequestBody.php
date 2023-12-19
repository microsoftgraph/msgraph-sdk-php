<?php

namespace Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\ReviewSets\Item\MicrosoftGraphSecurityExport;

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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the exportOptions property value. The exportOptions property
     * @return ExportPostRequestBody_exportOptions|null
    */
    public function getExportOptions(): ?ExportPostRequestBody_exportOptions {
        $val = $this->getBackingStore()->get('exportOptions');
        if (is_null($val) || $val instanceof ExportPostRequestBody_exportOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exportOptions'");
    }

    /**
     * Gets the exportStructure property value. The exportStructure property
     * @return ExportPostRequestBody_exportStructure|null
    */
    public function getExportStructure(): ?ExportPostRequestBody_exportStructure {
        $val = $this->getBackingStore()->get('exportStructure');
        if (is_null($val) || $val instanceof ExportPostRequestBody_exportStructure) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exportStructure'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'exportOptions' => fn(ParseNode $n) => $o->setExportOptions($n->getEnumValue(ExportPostRequestBody_exportOptions::class)),
            'exportStructure' => fn(ParseNode $n) => $o->setExportStructure($n->getEnumValue(ExportPostRequestBody_exportStructure::class)),
            'outputName' => fn(ParseNode $n) => $o->setOutputName($n->getStringValue()),
        ];
    }

    /**
     * Gets the outputName property value. The outputName property
     * @return string|null
    */
    public function getOutputName(): ?string {
        $val = $this->getBackingStore()->get('outputName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'outputName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeEnumValue('exportOptions', $this->getExportOptions());
        $writer->writeEnumValue('exportStructure', $this->getExportStructure());
        $writer->writeStringValue('outputName', $this->getOutputName());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the exportOptions property value. The exportOptions property
     * @param ExportPostRequestBody_exportOptions|null $value Value to set for the exportOptions property.
    */
    public function setExportOptions(?ExportPostRequestBody_exportOptions $value): void {
        $this->getBackingStore()->set('exportOptions', $value);
    }

    /**
     * Sets the exportStructure property value. The exportStructure property
     * @param ExportPostRequestBody_exportStructure|null $value Value to set for the exportStructure property.
    */
    public function setExportStructure(?ExportPostRequestBody_exportStructure $value): void {
        $this->getBackingStore()->set('exportStructure', $value);
    }

    /**
     * Sets the outputName property value. The outputName property
     * @param string|null $value Value to set for the outputName property.
    */
    public function setOutputName(?string $value): void {
        $this->getBackingStore()->set('outputName', $value);
    }

}
