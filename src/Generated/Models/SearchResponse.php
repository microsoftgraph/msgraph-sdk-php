<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SearchResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<SearchHitsContainer>|null $hitsContainers A collection of search results.
    */
    private ?array $hitsContainers = null;
    
    /**
     * @var AlterationResponse|null $queryAlterationResponse Provides details of query alteration response for spelling correction.
    */
    private ?AlterationResponse $queryAlterationResponse = null;
    
    /**
     * @var ResultTemplateDictionary|null $resultTemplates A dictionary of resultTemplateIds and associated values, which include the name and JSON schema of the result templates.
    */
    private ?ResultTemplateDictionary $resultTemplates = null;
    
    /**
     * @var array<string>|null $searchTerms Contains the search terms sent in the initial search query.
    */
    private ?array $searchTerms = null;
    
    /**
     * Instantiates a new searchResponse and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SearchResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SearchResponse {
        return new SearchResponse();
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
            'hitsContainers' => function (ParseNode $n) use ($o) { $o->setHitsContainers($n->getCollectionOfObjectValues(array(SearchHitsContainer::class, 'createFromDiscriminatorValue'))); },
            'queryAlterationResponse' => function (ParseNode $n) use ($o) { $o->setQueryAlterationResponse($n->getObjectValue(array(AlterationResponse::class, 'createFromDiscriminatorValue'))); },
            'resultTemplates' => function (ParseNode $n) use ($o) { $o->setResultTemplates($n->getObjectValue(array(ResultTemplateDictionary::class, 'createFromDiscriminatorValue'))); },
            'searchTerms' => function (ParseNode $n) use ($o) { $o->setSearchTerms($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the hitsContainers property value. A collection of search results.
     * @return array<SearchHitsContainer>|null
    */
    public function getHitsContainers(): ?array {
        return $this->hitsContainers;
    }

    /**
     * Gets the queryAlterationResponse property value. Provides details of query alteration response for spelling correction.
     * @return AlterationResponse|null
    */
    public function getQueryAlterationResponse(): ?AlterationResponse {
        return $this->queryAlterationResponse;
    }

    /**
     * Gets the resultTemplates property value. A dictionary of resultTemplateIds and associated values, which include the name and JSON schema of the result templates.
     * @return ResultTemplateDictionary|null
    */
    public function getResultTemplates(): ?ResultTemplateDictionary {
        return $this->resultTemplates;
    }

    /**
     * Gets the searchTerms property value. Contains the search terms sent in the initial search query.
     * @return array<string>|null
    */
    public function getSearchTerms(): ?array {
        return $this->searchTerms;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('hitsContainers', $this->hitsContainers);
        $writer->writeObjectValue('queryAlterationResponse', $this->queryAlterationResponse);
        $writer->writeObjectValue('resultTemplates', $this->resultTemplates);
        $writer->writeCollectionOfPrimitiveValues('searchTerms', $this->searchTerms);
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
     * Sets the hitsContainers property value. A collection of search results.
     *  @param array<SearchHitsContainer>|null $value Value to set for the hitsContainers property.
    */
    public function setHitsContainers(?array $value ): void {
        $this->hitsContainers = $value;
    }

    /**
     * Sets the queryAlterationResponse property value. Provides details of query alteration response for spelling correction.
     *  @param AlterationResponse|null $value Value to set for the queryAlterationResponse property.
    */
    public function setQueryAlterationResponse(?AlterationResponse $value ): void {
        $this->queryAlterationResponse = $value;
    }

    /**
     * Sets the resultTemplates property value. A dictionary of resultTemplateIds and associated values, which include the name and JSON schema of the result templates.
     *  @param ResultTemplateDictionary|null $value Value to set for the resultTemplates property.
    */
    public function setResultTemplates(?ResultTemplateDictionary $value ): void {
        $this->resultTemplates = $value;
    }

    /**
     * Sets the searchTerms property value. Contains the search terms sent in the initial search query.
     *  @param array<string>|null $value Value to set for the searchTerms property.
    */
    public function setSearchTerms(?array $value ): void {
        $this->searchTerms = $value;
    }

}
