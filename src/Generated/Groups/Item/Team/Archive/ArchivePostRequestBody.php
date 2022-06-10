<?php

namespace Microsoft\Graph\Groups\Item\Team\Archive;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ArchivePostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $shouldSetSpoSiteReadOnlyForMembers The shouldSetSpoSiteReadOnlyForMembers property
    */
    private ?bool $shouldSetSpoSiteReadOnlyForMembers = null;
    
    /**
     * Instantiates a new archivePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ArchivePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ArchivePostRequestBody {
        return new ArchivePostRequestBody();
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
            'shouldSetSpoSiteReadOnlyForMembers' => function (ParseNode $n) use ($o) { $o->setShouldSetSpoSiteReadOnlyForMembers($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the shouldSetSpoSiteReadOnlyForMembers property value. The shouldSetSpoSiteReadOnlyForMembers property
     * @return bool|null
    */
    public function getShouldSetSpoSiteReadOnlyForMembers(): ?bool {
        return $this->shouldSetSpoSiteReadOnlyForMembers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('shouldSetSpoSiteReadOnlyForMembers', $this->shouldSetSpoSiteReadOnlyForMembers);
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
     * Sets the shouldSetSpoSiteReadOnlyForMembers property value. The shouldSetSpoSiteReadOnlyForMembers property
     *  @param bool|null $value Value to set for the shouldSetSpoSiteReadOnlyForMembers property.
    */
    public function setShouldSetSpoSiteReadOnlyForMembers(?bool $value ): void {
        $this->shouldSetSpoSiteReadOnlyForMembers = $value;
    }

}
