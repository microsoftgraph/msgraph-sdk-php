<?php

namespace Microsoft\Graph\Generated\Users\GetByIds;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetByIdsPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $ids The ids property
    */
    private ?array $ids = null;
    
    /**
     * @var array<string>|null $types The types property
    */
    private ?array $types = null;
    
    /**
     * Instantiates a new getByIdsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetByIdsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetByIdsPostRequestBody {
        return new GetByIdsPostRequestBody();
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
            'ids' => function (ParseNode $n) use ($o) { $o->setIds($n->getCollectionOfPrimitiveValues()); },
            'types' => function (ParseNode $n) use ($o) { $o->setTypes($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the ids property value. The ids property
     * @return array<string>|null
    */
    public function getIds(): ?array {
        return $this->ids;
    }

    /**
     * Gets the types property value. The types property
     * @return array<string>|null
    */
    public function getTypes(): ?array {
        return $this->types;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('ids', $this->ids);
        $writer->writeCollectionOfPrimitiveValues('types', $this->types);
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
     * Sets the ids property value. The ids property
     *  @param array<string>|null $value Value to set for the ids property.
    */
    public function setIds(?array $value ): void {
        $this->ids = $value;
    }

    /**
     * Sets the types property value. The types property
     *  @param array<string>|null $value Value to set for the types property.
    */
    public function setTypes(?array $value ): void {
        $this->types = $value;
    }

}
