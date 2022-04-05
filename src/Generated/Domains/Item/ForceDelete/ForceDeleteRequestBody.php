<?php

namespace Microsoft\Graph\Generated\Domains\Item\ForceDelete;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ForceDeleteRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $disableUserAccounts The disableUserAccounts property */
    private ?bool $disableUserAccounts = null;
    
    /**
     * Instantiates a new forceDeleteRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ForceDeleteRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ForceDeleteRequestBody {
        return new ForceDeleteRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the disableUserAccounts property value. The disableUserAccounts property
     * @return bool|null
    */
    public function getDisableUserAccounts(): ?bool {
        return $this->disableUserAccounts;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'disableUserAccounts' => function (self $o, ParseNode $n) { $o->setDisableUserAccounts($n->getBooleanValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('disableUserAccounts', $this->disableUserAccounts);
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
     * Sets the disableUserAccounts property value. The disableUserAccounts property
     *  @param bool|null $value Value to set for the disableUserAccounts property.
    */
    public function setDisableUserAccounts(?bool $value ): void {
        $this->disableUserAccounts = $value;
    }

}
