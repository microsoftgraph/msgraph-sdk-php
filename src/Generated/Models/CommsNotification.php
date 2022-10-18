<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CommsNotification implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var ChangeType|null $changeType The changeType property
    */
    private ?ChangeType $changeType = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $resourceUrl URI of the resource that was changed.
    */
    private ?string $resourceUrl = null;
    
    /**
     * Instantiates a new commsNotification and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.commsNotification');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CommsNotification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CommsNotification {
        return new CommsNotification();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the changeType property value. The changeType property
     * @return ChangeType|null
    */
    public function getChangeType(): ?ChangeType {
        return $this->changeType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'changeType' => fn(ParseNode $n) => $o->setChangeType($n->getEnumValue(ChangeType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'resourceUrl' => fn(ParseNode $n) => $o->setResourceUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the resourceUrl property value. URI of the resource that was changed.
     * @return string|null
    */
    public function getResourceUrl(): ?string {
        return $this->resourceUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('changeType', $this->changeType);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('resourceUrl', $this->resourceUrl);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the changeType property value. The changeType property
     *  @param ChangeType|null $value Value to set for the changeType property.
    */
    public function setChangeType(?ChangeType $value ): void {
        $this->changeType = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the resourceUrl property value. URI of the resource that was changed.
     *  @param string|null $value Value to set for the resourceUrl property.
    */
    public function setResourceUrl(?string $value ): void {
        $this->resourceUrl = $value;
    }

}
