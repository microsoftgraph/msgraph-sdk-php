<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignmentOrder implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $order A list of identityUserFlowAttribute IDs provided to determine the order in which attributes should be collected within a user flow.
    */
    private ?array $order = null;
    
    /**
     * Instantiates a new AssignmentOrder and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignmentOrder
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssignmentOrder {
        return new AssignmentOrder();
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
            'order' => function (ParseNode $n) use ($o) { $o->setOrder($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the order property value. A list of identityUserFlowAttribute IDs provided to determine the order in which attributes should be collected within a user flow.
     * @return array<string>|null
    */
    public function getOrder(): ?array {
        return $this->order;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('order', $this->order);
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
     * Sets the order property value. A list of identityUserFlowAttribute IDs provided to determine the order in which attributes should be collected within a user flow.
     *  @param array<string>|null $value Value to set for the order property.
    */
    public function setOrder(?array $value ): void {
        $this->order = $value;
    }

}
