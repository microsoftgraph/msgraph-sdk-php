<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ServiceHostedMediaConfig extends MediaConfig implements Parsable 
{
    /**
     * @var array<MediaInfo>|null $preFetchMedia The list of media to pre-fetch.
    */
    private ?array $preFetchMedia = null;
    
    /**
     * Instantiates a new ServiceHostedMediaConfig and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.serviceHostedMediaConfig');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServiceHostedMediaConfig
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServiceHostedMediaConfig {
        return new ServiceHostedMediaConfig();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'preFetchMedia' => fn(ParseNode $n) => $o->setPreFetchMedia($n->getCollectionOfObjectValues([MediaInfo::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the preFetchMedia property value. The list of media to pre-fetch.
     * @return array<MediaInfo>|null
    */
    public function getPreFetchMedia(): ?array {
        return $this->preFetchMedia;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('preFetchMedia', $this->preFetchMedia);
    }

    /**
     * Sets the preFetchMedia property value. The list of media to pre-fetch.
     *  @param array<MediaInfo>|null $value Value to set for the preFetchMedia property.
    */
    public function setPreFetchMedia(?array $value ): void {
        $this->preFetchMedia = $value;
    }

}
