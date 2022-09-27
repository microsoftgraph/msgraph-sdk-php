<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BaseCollectionPaginationCountResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $odataCount The OdataCount property
    */
    private ?int $odataCount = null;
    
    /**
     * @var string|null $odataNextLink The OdataNextLink property
    */
    private ?string $odataNextLink = null;
    
    /**
     * Instantiates a new BaseCollectionPaginationCountResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BaseCollectionPaginationCountResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BaseCollectionPaginationCountResponse {
        return new BaseCollectionPaginationCountResponse();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.count' => function (ParseNode $n) use ($o) { $o->setOdataCount($n->getIntegerValue()); },
            '@odata.nextLink' => function (ParseNode $n) use ($o) { $o->setOdataNextLink($n->getStringValue()); },
        ];
    }

    /**
     * Gets the @odata.count property value. The OdataCount property
     * @return int|null
    */
    public function getOdataCount(): ?int {
        return $this->odataCount;
    }

    /**
     * Gets the @odata.nextLink property value. The OdataNextLink property
     * @return string|null
    */
    public function getOdataNextLink(): ?string {
        return $this->odataNextLink;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('@odata.count', $this->odataCount);
        $writer->writeStringValue('@odata.nextLink', $this->odataNextLink);
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
     * Sets the @odata.count property value. The OdataCount property
     *  @param int|null $value Value to set for the OdataCount property.
    */
    public function setOdataCount(?int $value ): void {
        $this->odataCount = $value;
    }

    /**
     * Sets the @odata.nextLink property value. The OdataNextLink property
     *  @param string|null $value Value to set for the OdataNextLink property.
    */
    public function setOdataNextLink(?string $value ): void {
        $this->odataNextLink = $value;
    }

}
