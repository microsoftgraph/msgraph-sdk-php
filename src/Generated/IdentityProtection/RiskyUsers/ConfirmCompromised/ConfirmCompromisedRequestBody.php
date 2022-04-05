<?php

namespace Microsoft\Graph\Generated\IdentityProtection\RiskyUsers\ConfirmCompromised;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConfirmCompromisedRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<string>|null $userIds The userIds property */
    private ?array $userIds = null;
    
    /**
     * Instantiates a new confirmCompromisedRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConfirmCompromisedRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ConfirmCompromisedRequestBody {
        return new ConfirmCompromisedRequestBody();
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
            'userIds' => function (self $o, ParseNode $n) { $o->setUserIds($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the userIds property value. The userIds property
     * @return array<string>|null
    */
    public function getUserIds(): ?array {
        return $this->userIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('userIds', $this->userIds);
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
     * Sets the userIds property value. The userIds property
     *  @param array<string>|null $value Value to set for the userIds property.
    */
    public function setUserIds(?array $value ): void {
        $this->userIds = $value;
    }

}
