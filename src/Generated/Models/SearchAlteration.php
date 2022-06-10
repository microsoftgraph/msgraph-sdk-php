<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SearchAlteration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $alteredHighlightedQueryString Defines the altered highlighted query string with spelling correction. The annotation around the corrected segment is (/ue000, /ue001)
    */
    private ?string $alteredHighlightedQueryString = null;
    
    /**
     * @var string|null $alteredQueryString Defines the altered query string with spelling correction.
    */
    private ?string $alteredQueryString = null;
    
    /**
     * @var array<AlteredQueryToken>|null $alteredQueryTokens Represents changed segments with respect to original query.
    */
    private ?array $alteredQueryTokens = null;
    
    /**
     * Instantiates a new searchAlteration and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SearchAlteration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SearchAlteration {
        return new SearchAlteration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the alteredHighlightedQueryString property value. Defines the altered highlighted query string with spelling correction. The annotation around the corrected segment is (/ue000, /ue001)
     * @return string|null
    */
    public function getAlteredHighlightedQueryString(): ?string {
        return $this->alteredHighlightedQueryString;
    }

    /**
     * Gets the alteredQueryString property value. Defines the altered query string with spelling correction.
     * @return string|null
    */
    public function getAlteredQueryString(): ?string {
        return $this->alteredQueryString;
    }

    /**
     * Gets the alteredQueryTokens property value. Represents changed segments with respect to original query.
     * @return array<AlteredQueryToken>|null
    */
    public function getAlteredQueryTokens(): ?array {
        return $this->alteredQueryTokens;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'alteredHighlightedQueryString' => function (ParseNode $n) use ($o) { $o->setAlteredHighlightedQueryString($n->getStringValue()); },
            'alteredQueryString' => function (ParseNode $n) use ($o) { $o->setAlteredQueryString($n->getStringValue()); },
            'alteredQueryTokens' => function (ParseNode $n) use ($o) { $o->setAlteredQueryTokens($n->getCollectionOfObjectValues(array(AlteredQueryToken::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('alteredHighlightedQueryString', $this->alteredHighlightedQueryString);
        $writer->writeStringValue('alteredQueryString', $this->alteredQueryString);
        $writer->writeCollectionOfObjectValues('alteredQueryTokens', $this->alteredQueryTokens);
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
     * Sets the alteredHighlightedQueryString property value. Defines the altered highlighted query string with spelling correction. The annotation around the corrected segment is (/ue000, /ue001)
     *  @param string|null $value Value to set for the alteredHighlightedQueryString property.
    */
    public function setAlteredHighlightedQueryString(?string $value ): void {
        $this->alteredHighlightedQueryString = $value;
    }

    /**
     * Sets the alteredQueryString property value. Defines the altered query string with spelling correction.
     *  @param string|null $value Value to set for the alteredQueryString property.
    */
    public function setAlteredQueryString(?string $value ): void {
        $this->alteredQueryString = $value;
    }

    /**
     * Sets the alteredQueryTokens property value. Represents changed segments with respect to original query.
     *  @param array<AlteredQueryToken>|null $value Value to set for the alteredQueryTokens property.
    */
    public function setAlteredQueryTokens(?array $value ): void {
        $this->alteredQueryTokens = $value;
    }

}
