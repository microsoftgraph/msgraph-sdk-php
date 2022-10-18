<?php

namespace Microsoft\Graph\Generated\Me\Chats\Item\UnhideForUser;

use Microsoft\Graph\Generated\Models\TeamworkUserIdentity;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnhideForUserPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var TeamworkUserIdentity|null $user The user property
    */
    private ?TeamworkUserIdentity $user = null;
    
    /**
     * Instantiates a new unhideForUserPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnhideForUserPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnhideForUserPostRequestBody {
        return new UnhideForUserPostRequestBody();
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
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([TeamworkUserIdentity::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the user property value. The user property
     * @return TeamworkUserIdentity|null
    */
    public function getUser(): ?TeamworkUserIdentity {
        return $this->user;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('user', $this->user);
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
     * Sets the user property value. The user property
     *  @param TeamworkUserIdentity|null $value Value to set for the user property.
    */
    public function setUser(?TeamworkUserIdentity $value ): void {
        $this->user = $value;
    }

}
