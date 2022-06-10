<?php

namespace Microsoft\Graph\Admin\ServiceAnnouncement\Messages\Favorite;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FavoritePostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $messageIds The messageIds property
    */
    private ?array $messageIds = null;
    
    /**
     * Instantiates a new favoritePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FavoritePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FavoritePostRequestBody {
        return new FavoritePostRequestBody();
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
            'messageIds' => function (ParseNode $n) use ($o) { $o->setMessageIds($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the messageIds property value. The messageIds property
     * @return array<string>|null
    */
    public function getMessageIds(): ?array {
        return $this->messageIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('messageIds', $this->messageIds);
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
     * Sets the messageIds property value. The messageIds property
     *  @param array<string>|null $value Value to set for the messageIds property.
    */
    public function setMessageIds(?array $value ): void {
        $this->messageIds = $value;
    }

}
