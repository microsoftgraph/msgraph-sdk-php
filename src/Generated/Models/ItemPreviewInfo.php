<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemPreviewInfo implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $getUrl The getUrl property */
    private ?string $getUrl = null;
    
    /** @var string|null $postParameters The postParameters property */
    private ?string $postParameters = null;
    
    /** @var string|null $postUrl The postUrl property */
    private ?string $postUrl = null;
    
    /**
     * Instantiates a new itemPreviewInfo and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemPreviewInfo
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ItemPreviewInfo {
        return new ItemPreviewInfo();
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
            'getUrl' => function (self $o, ParseNode $n) { $o->setGetUrl($n->getStringValue()); },
            'postParameters' => function (self $o, ParseNode $n) { $o->setPostParameters($n->getStringValue()); },
            'postUrl' => function (self $o, ParseNode $n) { $o->setPostUrl($n->getStringValue()); },
        ];
    }

    /**
     * Gets the getUrl property value. The getUrl property
     * @return string|null
    */
    public function getGetUrl(): ?string {
        return $this->getUrl;
    }

    /**
     * Gets the postParameters property value. The postParameters property
     * @return string|null
    */
    public function getPostParameters(): ?string {
        return $this->postParameters;
    }

    /**
     * Gets the postUrl property value. The postUrl property
     * @return string|null
    */
    public function getPostUrl(): ?string {
        return $this->postUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('getUrl', $this->getUrl);
        $writer->writeStringValue('postParameters', $this->postParameters);
        $writer->writeStringValue('postUrl', $this->postUrl);
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
     * Sets the getUrl property value. The getUrl property
     *  @param string|null $value Value to set for the getUrl property.
    */
    public function setGetUrl(?string $value ): void {
        $this->getUrl = $value;
    }

    /**
     * Sets the postParameters property value. The postParameters property
     *  @param string|null $value Value to set for the postParameters property.
    */
    public function setPostParameters(?string $value ): void {
        $this->postParameters = $value;
    }

    /**
     * Sets the postUrl property value. The postUrl property
     *  @param string|null $value Value to set for the postUrl property.
    */
    public function setPostUrl(?string $value ): void {
        $this->postUrl = $value;
    }

}
