<?php

namespace Microsoft\Graph\Generated\Users\Item\Drives\Item\EscapedList\ContentTypes\Item\AssociateWithHubSites;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssociateWithHubSitesPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $hubSiteUrls The hubSiteUrls property
    */
    private ?array $hubSiteUrls = null;
    
    /**
     * @var bool|null $propagateToExistingLists The propagateToExistingLists property
    */
    private ?bool $propagateToExistingLists = null;
    
    /**
     * Instantiates a new associateWithHubSitesPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssociateWithHubSitesPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssociateWithHubSitesPostRequestBody {
        return new AssociateWithHubSitesPostRequestBody();
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
            'hubSiteUrls' => function (ParseNode $n) use ($o) { $o->setHubSiteUrls($n->getCollectionOfPrimitiveValues()); },
            'propagateToExistingLists' => function (ParseNode $n) use ($o) { $o->setPropagateToExistingLists($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the hubSiteUrls property value. The hubSiteUrls property
     * @return array<string>|null
    */
    public function getHubSiteUrls(): ?array {
        return $this->hubSiteUrls;
    }

    /**
     * Gets the propagateToExistingLists property value. The propagateToExistingLists property
     * @return bool|null
    */
    public function getPropagateToExistingLists(): ?bool {
        return $this->propagateToExistingLists;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('hubSiteUrls', $this->hubSiteUrls);
        $writer->writeBooleanValue('propagateToExistingLists', $this->propagateToExistingLists);
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
     * Sets the hubSiteUrls property value. The hubSiteUrls property
     *  @param array<string>|null $value Value to set for the hubSiteUrls property.
    */
    public function setHubSiteUrls(?array $value ): void {
        $this->hubSiteUrls = $value;
    }

    /**
     * Sets the propagateToExistingLists property value. The propagateToExistingLists property
     *  @param bool|null $value Value to set for the propagateToExistingLists property.
    */
    public function setPropagateToExistingLists(?bool $value ): void {
        $this->propagateToExistingLists = $value;
    }

}
