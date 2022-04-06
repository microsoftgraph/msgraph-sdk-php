<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemActionStat implements AdditionalDataHolder, Parsable 
{
    /** @var int|null $actionCount The number of times the action took place. Read-only. */
    private ?int $actionCount = null;
    
    /** @var int|null $actorCount The number of distinct actors that performed the action. Read-only. */
    private ?int $actorCount = null;
    
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /**
     * Instantiates a new itemActionStat and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemActionStat
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ItemActionStat {
        return new ItemActionStat();
    }

    /**
     * Gets the actionCount property value. The number of times the action took place. Read-only.
     * @return int|null
    */
    public function getActionCount(): ?int {
        return $this->actionCount;
    }

    /**
     * Gets the actorCount property value. The number of distinct actors that performed the action. Read-only.
     * @return int|null
    */
    public function getActorCount(): ?int {
        return $this->actorCount;
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
        return  [
            'actionCount' => function (self $o, ParseNode $n) { $o->setActionCount($n->getIntegerValue()); },
            'actorCount' => function (self $o, ParseNode $n) { $o->setActorCount($n->getIntegerValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('actionCount', $this->actionCount);
        $writer->writeIntegerValue('actorCount', $this->actorCount);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the actionCount property value. The number of times the action took place. Read-only.
     *  @param int|null $value Value to set for the actionCount property.
    */
    public function setActionCount(?int $value ): void {
        $this->actionCount = $value;
    }

    /**
     * Sets the actorCount property value. The number of distinct actors that performed the action. Read-only.
     *  @param int|null $value Value to set for the actorCount property.
    */
    public function setActorCount(?int $value ): void {
        $this->actorCount = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

}
